# Generated\Client\Vps\SshKeyServiceApi

All URIs are relative to https://api.beget.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sshKeyServiceAdd()**](SshKeyServiceApi.md#sshKeyServiceAdd) | **POST** /v1/vps/sshKey | 
[**sshKeyServiceGetAll()**](SshKeyServiceApi.md#sshKeyServiceGetAll) | **GET** /v1/vps/sshKey | 
[**sshKeyServiceRemove()**](SshKeyServiceApi.md#sshKeyServiceRemove) | **DELETE** /v1/vps/sshKey/{id} | 


## `sshKeyServiceAdd()`

```php
sshKeyServiceAdd($ssh_key_add_request): \Generated\Client\Vps\Model\SshKeyAddResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\SshKeyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssh_key_add_request = new \Generated\Client\Vps\Model\SshKeyAddRequest(); // \Generated\Client\Vps\Model\SshKeyAddRequest

try {
    $result = $apiInstance->sshKeyServiceAdd($ssh_key_add_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshKeyServiceApi->sshKeyServiceAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ssh_key_add_request** | [**\Generated\Client\Vps\Model\SshKeyAddRequest**](../Model/SshKeyAddRequest.md)|  |

### Return type

[**\Generated\Client\Vps\Model\SshKeyAddResponse**](../Model/SshKeyAddResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sshKeyServiceGetAll()`

```php
sshKeyServiceGetAll(): \Generated\Client\Vps\Model\SshKeyGetAllResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\SshKeyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sshKeyServiceGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshKeyServiceApi->sshKeyServiceGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Generated\Client\Vps\Model\SshKeyGetAllResponse**](../Model/SshKeyGetAllResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sshKeyServiceRemove()`

```php
sshKeyServiceRemove($id, $force): \Generated\Client\Vps\Model\SshKeyRemoveResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\SshKeyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$force = 'force_example'; // string | Принудительно удалить, даже если используется в VPS

try {
    $result = $apiInstance->sshKeyServiceRemove($id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshKeyServiceApi->sshKeyServiceRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **force** | **string**| Принудительно удалить, даже если используется в VPS | [optional]

### Return type

[**\Generated\Client\Vps\Model\SshKeyRemoveResponse**](../Model/SshKeyRemoveResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
