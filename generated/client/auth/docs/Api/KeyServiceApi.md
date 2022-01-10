# Generated\Client\Auth\KeyServiceApi

All URIs are relative to https://api.beget.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**keyServiceGetKey()**](KeyServiceApi.md#keyServiceGetKey) | **GET** /v1/auth/key | 


## `keyServiceGetKey()`

```php
keyServiceGetKey(): \Generated\Client\Auth\Model\KeyGetKeyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Auth\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Auth\Api\KeyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->keyServiceGetKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyServiceApi->keyServiceGetKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Generated\Client\Auth\Model\KeyGetKeyResponse**](../Model/KeyGetKeyResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
