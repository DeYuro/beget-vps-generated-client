# Generated\Client\Auth\AuthServiceApi

All URIs are relative to https://api.beget.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authServiceAuth()**](AuthServiceApi.md#authServiceAuth) | **POST** /v1/auth | 
[**authServiceLogout()**](AuthServiceApi.md#authServiceLogout) | **POST** /v1/auth/logout | 
[**authServiceRefreshToken()**](AuthServiceApi.md#authServiceRefreshToken) | **POST** /v1/auth/refresh | 
[**authServiceSwitchUser()**](AuthServiceApi.md#authServiceSwitchUser) | **POST** /v1/auth/switch | 


## `authServiceAuth()`

```php
authServiceAuth($auth_auth_request): \Generated\Client\Auth\Model\AuthAuthResponse
```



Запрос авторизации пользователя.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Auth\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Auth\Api\AuthServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_auth_request = new \Generated\Client\Auth\Model\AuthAuthRequest(); // \Generated\Client\Auth\Model\AuthAuthRequest

try {
    $result = $apiInstance->authServiceAuth($auth_auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthServiceApi->authServiceAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_auth_request** | [**\Generated\Client\Auth\Model\AuthAuthRequest**](../Model/AuthAuthRequest.md)|  |

### Return type

[**\Generated\Client\Auth\Model\AuthAuthResponse**](../Model/AuthAuthResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceLogout()`

```php
authServiceLogout(): mixed
```



Выход пользователя. Обязательно наличие токена в заголовках в виде Authorization: BEARER {JWT}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Auth\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Auth\Api\AuthServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceLogout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthServiceApi->authServiceLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceRefreshToken()`

```php
authServiceRefreshToken(): \Generated\Client\Auth\Model\AuthRefreshTokenResponse
```



Запрос обновления токена. Обязательно наличие токена в заголовках в виде Authorization: BEARER {JWT}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Auth\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Auth\Api\AuthServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authServiceRefreshToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthServiceApi->authServiceRefreshToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Generated\Client\Auth\Model\AuthRefreshTokenResponse**](../Model/AuthRefreshTokenResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authServiceSwitchUser()`

```php
authServiceSwitchUser($auth_switch_user_request): \Generated\Client\Auth\Model\AuthSwitchUserResponse
```



Переключение пользователя. Обязательно наличие токена в заголовках в виде Authorization: BEARER {JWT}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Auth\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Auth\Api\AuthServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_switch_user_request = new \Generated\Client\Auth\Model\AuthSwitchUserRequest(); // \Generated\Client\Auth\Model\AuthSwitchUserRequest

try {
    $result = $apiInstance->authServiceSwitchUser($auth_switch_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthServiceApi->authServiceSwitchUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_switch_user_request** | [**\Generated\Client\Auth\Model\AuthSwitchUserRequest**](../Model/AuthSwitchUserRequest.md)|  |

### Return type

[**\Generated\Client\Auth\Model\AuthSwitchUserResponse**](../Model/AuthSwitchUserResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
