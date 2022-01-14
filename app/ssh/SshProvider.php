<?php

namespace Application\ssh;

use Exception;
use Generated\Client\Vps\Api\SshKeyServiceApi;
use Generated\Client\Vps\ApiException;
use Generated\Client\Vps\Configuration;
use Generated\Client\Vps\Model\SshKeyAddRequest;
use Generated\Client\Vps\Model\SshKeyAddResponse;
use Generated\Client\Vps\Model\SshKeyRemoveResponse;
use GuzzleHttp\Client;

class SshProvider
{
    private static ?SshProvider $instance = null;

    private SshKeyServiceApi $sshKeyServiceApi;

    /**
     * @see https://8gwifi.org/sshfunctions.jsp
     */
    private const DUMMY_PUBLIC_KEY = "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQChrlcs4xOZuzNIJBhSgVmNY8hvJNDMBhOe4A1EIm18imP+UkOdoMo+QYU5bi+AoEskUjOAaHr0dSsql1/b0BEj8zQbT2L44zk66VVt2YQWTwBmUzgxMjSITxTpPZba6QDrIpKvMHJsH7BVltVQ3CCw5bKybdVTe7mVr5WqvaOVqFIznzLz8E1pwqJtwn3pUO7UI1ERfZvI+clM/FDLSzyeNI8JblQthcmE7Xr++RTBrdE5X1TlZW+sbIVsPVwBoqy8EZNMvJkQQ7YDMGEFzH+xzTi+2deCOkYTZOpDIrgIDplGihp8AYcGDp+BUqIrntohHCNZbIFticj+KCtT69dT \n";

    private function __construct(string $jwt)
    {
        $config = new Configuration();
        $config->setAccessToken($jwt);
        $this->sshKeyServiceApi = new SshKeyServiceApi(new Client(), $config);
    }

    /**
     * @throws Exception
     */
    static public function getInstance(string $jwt = null): SshProvider
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
     * POST api.beget.com/v1/vps/sshKey
     * @throws ApiException
     */
    public function addSsh(): SshKeyAddResponse
    {
        $request = new SshKeyAddRequest();
        $request
            ->setPublicKey(self::DUMMY_PUBLIC_KEY)
            ->setName("php generated client dummy key");

        return $this->sshKeyServiceApi->sshKeyServiceAdd($request);
    }

    /**
     * DELETE api.beget.com/v1/vps/sshKey/{id}
     * @throws ApiException
     */
    public function deleteSsh(int $id): SshKeyRemoveResponse
    {
        $request = new SshKeyAddRequest();
        $request
            ->setPublicKey(self::DUMMY_PUBLIC_KEY)
            ->setName("php generated client dummy key");

        return $this->sshKeyServiceApi->sshKeyServiceRemove($id,"1");
    }
}