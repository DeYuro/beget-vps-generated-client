<?php

namespace Application\auth;

use Generated\Client\Auth\Api\AuthServiceApi;
use Generated\Client\Auth\ApiException;
use Generated\Client\Auth\Configuration;
use Generated\Client\Auth\Model\AuthAuthRequest;
use Generated\Client\Auth\Model\AuthAuthResponse;
use GuzzleHttp\Client;

class AuthProvider
{
    private static ?AuthProvider $instance = null;

    private AuthServiceApi $authServiceApi;

    private function __construct(string $jwt = null)
    {
        $config = new Configuration();
        if ($jwt != null) {
            $config->setAccessToken($jwt);
        }

        $this->authServiceApi = new AuthServiceApi(new Client(),$config);
    }


    /**
     * @throws ApiException
     */
    public function auth(string $login, string $password): AuthAuthResponse {

        $request = new AuthAuthRequest([
            'login' => $login,
            'password' => $password
        ]);

        return $this->authServiceApi->authServiceAuth($request);
    }

    /**
     * @return mixed
     * @throws ApiException
     */
    public function logout()
    {
      return $this->authServiceApi->authServiceLogout();
    }

    static public function getInstance(string $jwt = null): AuthProvider
    {
        if (self::$instance === null) {
            return self::$instance = new self($jwt);
        }

        if ($jwt !== null) {
            return self::$instance = new self($jwt);
        }

        return self::$instance;
    }
}