<?php

namespace Application;

use Application\auth\AuthProvider;
use Application\ssh\SshProvider;
use Application\vps\VpsProvider;
use Exception;
use Generated\Client\Auth\ApiException as AuthApiException;
use Generated\Client\Vps\ApiException;
use Generated\Client\Vps\ApiException as VpsApiException;
use Generated\Client\Vps\Model\ManageVpsConfiguration;
use Generated\Client\Vps\Model\ManageVpsInfo;
use Generated\Client\Vps\Model\StructuresOperatingSystem;
use Generated\Client\Auth\Model\AuthAuthResponse;
use Generated\Client\Vps\Model\ManageCreateVpsResponseError;
use Generated\Client\Vps\Model\ManageGetStatusesResponseStatusInfo;

class Test
{
    /**
     * @throws AuthApiException
     * @throws VpsApiException
     * @throws Exception
     */
    public function run(string $login, string $password)
    {
        $this->wrongDataAuth();
        $this->emptyLoginAuth();
        $jwt = $this->auth($login,$password);

        // Init singleton
        VpsProvider::getInstance($jwt);
        SshProvider::getInstance($jwt);

        $vpsList = $this->getVpsList();
        $this->getVpsInfoWrongId();
        $this->getVpsInfo($vpsList[0]->getId());
        /**
         * @var ManageVpsConfiguration[] $configurationList
         * @var StructuresOperatingSystem[] $operationSystemList
         */
        [$operationSystemList, $configurationList] = $this->getAvailableConfiguration();

        $this->createVpsInvalidHostname($configurationList[10]->getId(), $operationSystemList[0]->getId());
        $vps = $this->createVps($configurationList[10]->getId(), $operationSystemList[0]->getId());
        sleep(10);
        $this->checkRunning($vps->getId(),"creating");
        $this->resetPassword($vps->getId());
        $this->updateInfo($vps->getId());

        $this->rebootVps($vps->getId());
        sleep(10);

        $this->checkRunning($vps->getId(),"rebooting");

        $this->reinstallVps($vps->getId(),$operationSystemList[1]->getId());
        sleep(10);
        $this->checkRunning($vps->getId(),"reinstalling");

        $keyId = $this->addSsh();

        $this->attachSsh($vps->getId(), $keyId);
        $this->detachSsh($vps->getId(), $keyId);

        $this->removeSsh($keyId);

        $this->removeVps($vps->getId());
        $this->logout($jwt);
        $this->unauthorizedRequest();

        print_r("!!!!!!!!ALL TESTS PASSED!!!!!!!" . PHP_EOL);
    }

    /**
     * @throws AuthApiException
     * @throws Exception
     */
    private function wrongDataAuth(): void
    {
        print_r(sprintf("Auth wrong credential request: Expect %s error" . PHP_EOL, AuthAuthResponse::ERROR_INCORRECT_CREDENTIALS));
        $authTest = AuthProvider::getInstance();
        $response = $authTest->auth("wrong", "credential");
        print_r("Response\n$response" . PHP_EOL);

        if ($response->getError() != AuthAuthResponse::ERROR_INCORRECT_CREDENTIALS) {
            throw new Exception(sprintf("Expect %s error got %s" . PHP_EOL, AuthAuthResponse::ERROR_INCORRECT_CREDENTIALS,$response->getError()));
        }
    }

    /**
     * @throws AuthApiException
     * @throws Exception
     */
    private function emptyLoginAuth(): void
    {
        print_r(sprintf("Empty login auth request: Expect %s error" . PHP_EOL, AuthAuthResponse::ERROR_EMPTY_LOGIN));
        $authTest = AuthProvider::getInstance();
        $response = $authTest->auth("", "emptyLogin");
        print_r("Response\n$response" . PHP_EOL);

        if ($response->getError() != AuthAuthResponse::ERROR_EMPTY_LOGIN) {
            throw new Exception(sprintf("Expect %s error got %s" . PHP_EOL, AuthAuthResponse::ERROR_EMPTY_LOGIN,$response->getError()));
        }
    }

    /**
     * @throws AuthApiException
     * @throws Exception
     */
    private function auth(string $login, string $password): string
    {
        print_r(sprintf("Auth correct credential request: Expect Token != null"));
        $authTest = AuthProvider::getInstance();
        $response = $authTest->auth($login, $password);
        print_r("Response\n$response" . PHP_EOL);

        if ($response->getToken() == null) {
            throw new Exception(sprintf("Expect Token != null: Got Token == null"));
        }

        return $response->getToken();
    }

    private function logout($jwt): void
    {
        print_r(sprintf("Logout request: Expect no Exception" . PHP_EOL));

        $authTest = AuthProvider::getInstance($jwt);
        $response = $authTest->logout();

        print_r("Response\n$response" . PHP_EOL);
    }

    /**
     * @throws VpsApiException
     * @return ManageVpsInfo[]|null
     */
    private function getVpsList(): ?array
    {
        print_r(sprintf("GetVpsList request: Expect customer vps list" . PHP_EOL));

        $provider = VpsProvider::getInstance();

        $response = $provider->getVpsList();
        print_r("Response\n$response" . PHP_EOL);
        return $response->getVps();
    }

    /**
     * @throws Exception
     */
    private function getVpsInfoWrongId(): void
    {
        print_r(sprintf("GetVpsInfo request with wrong id: Expect 404" . PHP_EOL));

        $provider = VpsProvider::getInstance();

        try {
            $response = $provider->getVpsInfo("qwerty");
        } catch (VpsApiException $e) {
            if ($e->getCode() !== 404) {
                throw new Exception(sprintf("Expect 404: Got %d", $e->getCode()));

            }
            print_r($e->getCode(). PHP_EOL);
        }
    }

    /**
     * @throws VpsApiException
     * @throws Exception
     */
    private function getVpsInfo(string $uuid): ManageVpsInfo
    {
        print_r(sprintf("GetVpsInfo request correct id: Expect VpsInfo !== null" . PHP_EOL));

        $provider = VpsProvider::getInstance();

        $response = $provider->getVpsInfo($uuid);
        print_r("Response\n$response" . PHP_EOL);

        if ($response->getVps() === null) {
            throw new Exception(sprintf(" Expect VpsInfo !== null: Got NULL"));
        }

        return $response->getVps();
    }

    /**
     * @throws VpsApiException
     * @throws Exception
     * @return array(StructuresOperatingSystem[],ManageVpsConfiguration[])
     */
    private function getAvailableConfiguration(): array
    {
        print_r(sprintf("GetAvailableConfiguration request: Expect VpsConfiguration list and OperatingSystem list" . PHP_EOL));

        $provider = VpsProvider::getInstance();

        $response = $provider->getAvailableConfiguration();
        print_r("Response\n$response" . PHP_EOL);

        if ($response->getConfigurations() === null) {
            throw new Exception(sprintf(" Expect VpsConfiguration !== null: Got NULL"));
        }
        if ($response->getOperatingSystems() === null) {
            throw new Exception(sprintf(" Expect OperatingSystem !== null: Got NULL"));
        }

        return [$response->getOperatingSystems(), $response->getConfigurations()];
    }

    /**
     * @throws VpsApiException
     * @throws Exception
     */
    public function createVpsInvalidHostname(string $configId, int $osId):void
    {
        print_r(sprintf("CreateVps request with invalid hostname: Expect %s error" . PHP_EOL, ManageCreateVpsResponseError::CODE_INVALID_HOSTNAME));
        $provider = VpsProvider::getInstance();

        $response = $provider->createVps("Invalid:Host?Name", $configId, $osId);

        print_r("Response\n$response" . PHP_EOL);

        if ($response->getError()->getCode() !== ManageCreateVpsResponseError::CODE_INVALID_HOSTNAME) {
            throw new Exception(sprintf("Expect %s error got %s" . PHP_EOL, ManageCreateVpsResponseError::CODE_INVALID_HOSTNAME),$response->getError()->getCode());
        }
    }

    /**
     * @throws VpsApiException
     * @throws Exception
     */
    public function createVps(string $configId, int $osId): ManageVpsInfo
    {
        print_r(sprintf("CreateVps request with valid data: Expect: VPS status == %s" . PHP_EOL, ManageGetStatusesResponseStatusInfo::STATUS_CREATING));
        $provider = VpsProvider::getInstance();

        $response = $provider->createVps("validhostname", $configId, $osId);

        print_r("Response\n$response" . PHP_EOL);

        if ($response->getVps()->getStatus() !== ManageGetStatusesResponseStatusInfo::STATUS_CREATING) {
            throw new Exception(sprintf("Expect: VPS status == %s got %s" . PHP_EOL, ManageGetStatusesResponseStatusInfo::STATUS_CREATING, $response->getVps()->getStatus()));
        }

        return $response->getVps();
    }

    /**
     * @throws VpsApiException
     * @throws Exception
     */
    private function removeVps(string $uuid): void
    {
        print_r(sprintf("RemoveVps request: Expect vps status == %s" . PHP_EOL, ManageGetStatusesResponseStatusInfo::STATUS_REMOVING));

        $provider = VpsProvider::getInstance();

        $response = $provider->removeVps($uuid);
        print_r("Response\n$response" . PHP_EOL);

        if ($response->getVps()->getStatus() !== ManageGetStatusesResponseStatusInfo::STATUS_REMOVING) {
            throw new Exception(sprintf("Expect: VPS status == %s got %s" . PHP_EOL, ManageGetStatusesResponseStatusInfo::STATUS_REMOVING, $response->getVps()->getStatus()));
        }
    }

    /**
     * @throws VpsApiException
     * @throws Exception
     */
    private function checkRunning(string $uuid, string $after): void
    {
        print_r(sprintf("Check VpsInfo after $after vps by uuid: Expect Vps with %s exist and status is %s" . PHP_EOL, $uuid, ManageGetStatusesResponseStatusInfo::STATUS_RUNNING));

        $vps = $this->getVpsInfo($uuid);

        if ($vps->getStatus() !== ManageGetStatusesResponseStatusInfo::STATUS_RUNNING) {
            throw new Exception(sprintf("Expect: VPS status == %s got %s" . PHP_EOL, ManageGetStatusesResponseStatusInfo::STATUS_RUNNING, $vps->getStatus()));
        }
    }

    /**
     * @throws VpsApiException
     * @throws Exception
     */
    private function resetPassword(string $uuid): void
    {
        print_r(sprintf("ResetPassword request:Expect vps != null" . PHP_EOL));
        $provider = VpsProvider::getInstance();

        $response = $provider->resetPassword($uuid);
        print_r("Response\n$response" . PHP_EOL);

        if ($response->getVps() === null) {
            throw new Exception(sprintf("Expect: VPS status == %s got %s" . PHP_EOL, ManageGetStatusesResponseStatusInfo::STATUS_RUNNING, $response->getVps()->getStatus()));
        }
    }

    /**
     * @throws VpsApiException
     * @throws Exception
     */
    private function updateInfo(string $uuid): void
    {
        $hostname = "newhostname";
        print_r(sprintf("UpdateInfo request with new hostname: Expect: VPS hostname == %s" . PHP_EOL, $hostname));
        $provider = VpsProvider::getInstance();

        $response = $provider->updateInfo($hostname, $uuid);
        print_r("Response\n$response" . PHP_EOL);

        if ($response->getVps()->getHostname() !== $hostname) {
            throw new Exception(sprintf("Expect: Expect: VPS hostname == %s: Got %s" . PHP_EOL, $hostname, $response->getVps()->getHostname()));
        }
    }

    /**
     * @throws VpsApiException
     * @throws Exception
     */
    private function rebootVps(string $uuid): void
    {
        print_r(sprintf("RebootVps request: Expect vps status == %s" . PHP_EOL, ManageGetStatusesResponseStatusInfo::STATUS_RESTARTING));

        $provider = VpsProvider::getInstance();

        $response = $provider->rebootVps($uuid);
        print_r("Response\n$response" . PHP_EOL);

        if ($response->getVps()->getStatus() !== ManageGetStatusesResponseStatusInfo::STATUS_RESTARTING) {
            throw new Exception(sprintf("Expect: VPS status == %s got %s" . PHP_EOL, ManageGetStatusesResponseStatusInfo::STATUS_RESTARTING, $response->getVps()->getStatus()));
        }
    }

    /**
     * @throws VpsApiException
     * @throws Exception
     */
    public function reinstallVps(string $uuid, int $osId): void
    {
        print_r(sprintf("ReinstallVps request with valid data: Expect: VPS status == %s" . PHP_EOL, ManageGetStatusesResponseStatusInfo::STATUS_REINSTALLING));
        $provider = VpsProvider::getInstance();

        $response = $provider->reinstallVps($uuid, $osId);

        print_r("Response\n$response" . PHP_EOL);

        if ($response->getVps()->getStatus() !== ManageGetStatusesResponseStatusInfo::STATUS_REINSTALLING) {
            throw new Exception(sprintf("Expect: VPS status == %s got %s" . PHP_EOL, ManageGetStatusesResponseStatusInfo::STATUS_REINSTALLING,$response->getVps()->getStatus()));
        }
    }

    private function addSsh(): int
    {
        print_r(sprintf("AddSsh request:Expect ssh != null" . PHP_EOL));
        $provider = SshProvider::getInstance();

        $response = $provider->addSsh();
        print_r("Response\n$response" . PHP_EOL);

        if ($response->getKey() === null) {
            throw new Exception(sprintf("AddSsh request:Expect ssh != null: Got null" . PHP_EOL));
        }

        return $response->getKey()->getId();
    }

    /**
     * @throws VpsApiException
     * @throws Exception
     */
    private function attachSsh(string $uuid, int $keyId)
    {
        print_r(sprintf("AttachSshKey request:Expect VPS has key with id == %d" . PHP_EOL, $keyId));
        $provider = VpsProvider::getInstance();

        $response = $provider->attachSsh($uuid, $keyId);

        if($response->getVps()->getSshKeys()[0]->getId() != $keyId) {
            throw new Exception(sprintf("Expect VPS has key with id == %d: got %d" . PHP_EOL, $keyId, $response->getVps()->getSshKeys()[0]->getId()));
        }
    }

    private function detachSsh(string $uuid, int $keyId)
    {
        print_r(sprintf("DetachSshKey request:Expect VPS has no ssh keys" . PHP_EOL));
        $provider = VpsProvider::getInstance();

        $response = $provider->detachSsh($uuid, $keyId);

        if(!empty($response->getVps()->getSshKeys())) {
            throw new Exception(sprintf("Expect VPS has no ssh keys: Got %d keys" . PHP_EOL,count($response->getVps()->getSshKeys())));
        }
    }

    /**
     * @throws VpsApiException
     * @throws Exception
     */
    private function removeSsh(int $keyId): void
    {
        print_r(sprintf("Remove request: Expect removed ssh != null" . PHP_EOL));
        $provider = SshProvider::getInstance();

        $response = $provider->deleteSsh($keyId);

        print_r("Response\n$response" . PHP_EOL);

        if ($response->getKey() === null) {
            throw new Exception(sprintf("Expect ssh != null: Got null"));
        }
    }

    /**
     * @throws Exception
     */
    public function unauthorizedRequest()
    {
        print_r(sprintf("Unauthorized request with wrong id: Expect 401" . PHP_EOL));

        try {
            VpsProvider::getInstance("");
            $this->getVpsList();
        } catch (ApiException $e) {
            if ($e->getCode() !== 401) {
                throw new Exception(sprintf("Expect 401: Got %d", $e->getCode()));

            }
            print_r($e->getCode() . PHP_EOL);
        }
    }
}
