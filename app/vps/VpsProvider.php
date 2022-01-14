<?php

namespace Application\vps;

use Exception;
use Generated\Client\Vps\Api\ManageServiceApi;
use Generated\Client\Vps\ApiException;
use Generated\Client\Vps\Configuration;
use Generated\Client\Vps\Model\ManageAttachSshKeyResponse;
use Generated\Client\Vps\Model\ManageCreateVpsRequest;
use Generated\Client\Vps\Model\ManageCreateVpsResponse;
use Generated\Client\Vps\Model\ManageDetachSshKeyResponse;
use Generated\Client\Vps\Model\ManageGetAvailableConfigurationResponse;
use Generated\Client\Vps\Model\ManageGetInfoResponse;
use Generated\Client\Vps\Model\ManageGetListResponse;
use Generated\Client\Vps\Model\ManageRebootVpsResponse;
use Generated\Client\Vps\Model\ManageReinstallRequest;
use Generated\Client\Vps\Model\ManageReinstallResponse;
use Generated\Client\Vps\Model\ManageRemoveVpsResponse;
use Generated\Client\Vps\Model\ManageResetPasswordResponse;
use Generated\Client\Vps\Model\ManageUpdateInfoRequest;
use Generated\Client\Vps\Model\ManageUpdateInfoResponse;
use Generated\Client\Vps\Model\SshKeyAddResponse;
use GuzzleHttp\Client;

class VpsProvider
{
    private static ?VpsProvider $instance = null;

    private ManageServiceApi $manageServiceApi;

    public const INVALID_HOSTNAME = "INVALID_HOSTNAME";
    public const REMOVING = "REMOVING";
    public const CREATING = "CREATING";
    public const RUNNING = "RUNNING";
    public const RESTARTING = "RESTARTING";
    public const REINSTALLING = "REINSTALLING";

    private function __construct(string $jwt)
    {
        $config = new Configuration();
        $config->setAccessToken($jwt);
        $this->manageServiceApi = new ManageServiceApi(new Client(), $config);
    }

    static public function getInstance(string $jwt = null): VpsProvider
    {
        if (self::$instance === null) {
            if ($jwt === null) {
                throw new Exception("JWT can not be null on empty instance");
            }

            return self::$instance = new self($jwt);
        }

        if ($jwt !== null) {
            return self::$instance = new self($jwt);
        }


        return self::$instance;
    }


    /**
     * GET api.beget.com/v1/vps/server/list
     * @throws ApiException
     */
    public function getVpsList(): ManageGetListResponse
    {
        return $this->manageServiceApi->manageServiceGetList();
    }

    /**
     * GET api.beget.com/v1/vps/server/{id}
     * @throws ApiException
     */
    public function getVpsInfo(string $uuid): ManageGetInfoResponse
    {
        return $this->manageServiceApi->manageServiceGetInfo($uuid);
    }

    /**
     * GET api.beget.com/v1/vps/server/v1/vps/configuration
     * @throws ApiException
     */
    public function getAvailableConfiguration(): ManageGetAvailableConfigurationResponse
    {
        return $this->manageServiceApi->manageServiceGetAvailableConfiguration();
    }

    /**
     * POST api.beget.com/v1/vps/server
     * @throws ApiException
     */
    public function createVps(string $hostname, string $configId, int $osId): ManageCreateVpsResponse
    {
        $request = new ManageCreateVpsRequest();
        $request
            ->setDisplayName("PHP Generated Client")
            ->setDescription("Test client from generated code")
            ->setPassword("L%v2sZ2j")
            ->setBegetSshAccessAllowed(true)
            ->setHostname($hostname)
            ->setConfigurationId($configId)
            ->setOperatingSystemId($osId);

        return $this->manageServiceApi->manageServiceCreateVps($request);
    }

    /**
     * POST api.beget.com/v1/vps/server/{id}/remove
     * @throws ApiException
     */
    public function removeVps(string $uuid): ManageRemoveVpsResponse
    {
        return $this->manageServiceApi->manageServiceRemoveVps($uuid);
    }

    /**
     * PUT api.beget.com/v1/vps/{id}/password
     * @throws ApiException
     */
    public function resetPassword(string $uuid): ManageResetPasswordResponse
    {
        return $this->manageServiceApi->manageServiceResetPassword($uuid);
    }

    /**
     * PUT api.beget.com/v1/vps/server/{id}/info
     * @throws ApiException
     */
    public function updateInfo(string $hostname, string $uuid): ManageUpdateInfoResponse
    {
        $request = new ManageUpdateInfoRequest();
        $request
            ->setDisplayName("PHP Generated Client Test")
            ->setDescription("Test client from generated code")
            ->setHostname($hostname);

        return $this->manageServiceApi->manageServiceUpdateInfo($uuid, $request);
    }

    /**
     * POST api.beget.com/v1/vps/server/{id}/reboot
     * @throws ApiException
     */
    public function rebootVps(string $uuid): ManageRebootVpsResponse
    {
        return $this->manageServiceApi->manageServiceRebootVps($uuid);
    }

    /**
     * POST api.beget.com/v1/vps/server/{id}/reinstall
     * @throws ApiException
     */
    public function reinstallVps(string $uuid,int $osId): ManageReinstallResponse
    {
        $request = new ManageReinstallRequest();
        $request
            ->setPassword("L%v2sZ2j")
            ->setOperatingSystemId($osId);

        return $this->manageServiceApi->manageServiceReinstall($uuid, $request);
    }

    /**
     * POST api.beget.com/v1/vps/{id}/sshKey/{ssh_key_id}
     * @throws ApiException
     */
    public function attachSsh(string $uuid, int $keyId): ManageAttachSshKeyResponse
    {
        return $this->manageServiceApi->manageServiceAttachSshKey($uuid, $keyId);
    }

    /**
     * DELETE api.beget.com/v1/vps/{id}/sshKey/{ssh_key_id}
     * @throws ApiException
     */
    public function detachSsh(string $uuid, int $keyId): ManageDetachSshKeyResponse
    {
        return $this->manageServiceApi->manageServiceDetachSshKey($uuid, $keyId);
    }
}