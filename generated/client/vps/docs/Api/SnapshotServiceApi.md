# Generated\Client\Vps\SnapshotServiceApi

All URIs are relative to https://api.beget.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**snapshotServiceCreate()**](SnapshotServiceApi.md#snapshotServiceCreate) | **POST** /v1/vps/snapshot | 
[**snapshotServiceCreateCalculator()**](SnapshotServiceApi.md#snapshotServiceCreateCalculator) | **POST** /v1/vps/snapshot/calculator | 
[**snapshotServiceEdit()**](SnapshotServiceApi.md#snapshotServiceEdit) | **PUT** /v1/vps/snapshot/{id} | 
[**snapshotServiceGetAll()**](SnapshotServiceApi.md#snapshotServiceGetAll) | **GET** /v1/vps/snapshot | 
[**snapshotServiceGetAllRestores()**](SnapshotServiceApi.md#snapshotServiceGetAllRestores) | **GET** /v1/vps/snapshot/restore | 
[**snapshotServiceRemove()**](SnapshotServiceApi.md#snapshotServiceRemove) | **DELETE** /v1/vps/snapshot/{id} | 
[**snapshotServiceRestore()**](SnapshotServiceApi.md#snapshotServiceRestore) | **POST** /v1/vps/snapshot/{id}/restore | 


## `snapshotServiceCreate()`

```php
snapshotServiceCreate($snapshot_create_request): \Generated\Client\Vps\Model\SnapshotCreateResponse
```



create a snapshot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$snapshot_create_request = new \Generated\Client\Vps\Model\SnapshotCreateRequest(); // \Generated\Client\Vps\Model\SnapshotCreateRequest

try {
    $result = $apiInstance->snapshotServiceCreate($snapshot_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **snapshot_create_request** | [**\Generated\Client\Vps\Model\SnapshotCreateRequest**](../Model/SnapshotCreateRequest.md)|  |

### Return type

[**\Generated\Client\Vps\Model\SnapshotCreateResponse**](../Model/SnapshotCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `snapshotServiceCreateCalculator()`

```php
snapshotServiceCreateCalculator($snapshot_create_calculator_request): \Generated\Client\Vps\Model\SnapshotCreateCalculatorResponse
```



create cost calculator for snapshot creating

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$snapshot_create_calculator_request = new \Generated\Client\Vps\Model\SnapshotCreateCalculatorRequest(); // \Generated\Client\Vps\Model\SnapshotCreateCalculatorRequest

try {
    $result = $apiInstance->snapshotServiceCreateCalculator($snapshot_create_calculator_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceCreateCalculator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **snapshot_create_calculator_request** | [**\Generated\Client\Vps\Model\SnapshotCreateCalculatorRequest**](../Model/SnapshotCreateCalculatorRequest.md)|  |

### Return type

[**\Generated\Client\Vps\Model\SnapshotCreateCalculatorResponse**](../Model/SnapshotCreateCalculatorResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `snapshotServiceEdit()`

```php
snapshotServiceEdit($id, $snapshot_edit_request): \Generated\Client\Vps\Model\SnapshotEditResponse
```



edit snapshot user fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$snapshot_edit_request = new \Generated\Client\Vps\Model\SnapshotEditRequest(); // \Generated\Client\Vps\Model\SnapshotEditRequest

try {
    $result = $apiInstance->snapshotServiceEdit($id, $snapshot_edit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceEdit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **snapshot_edit_request** | [**\Generated\Client\Vps\Model\SnapshotEditRequest**](../Model/SnapshotEditRequest.md)|  |

### Return type

[**\Generated\Client\Vps\Model\SnapshotEditResponse**](../Model/SnapshotEditResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `snapshotServiceGetAll()`

```php
snapshotServiceGetAll(): \Generated\Client\Vps\Model\SnapshotGetAllResponse
```



get all snapshots

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->snapshotServiceGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Generated\Client\Vps\Model\SnapshotGetAllResponse**](../Model/SnapshotGetAllResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `snapshotServiceGetAllRestores()`

```php
snapshotServiceGetAllRestores($id): \Generated\Client\Vps\Model\SnapshotGetAllRestoresResponse
```



get restore list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | snapshot id. Optional, full list at 0

try {
    $result = $apiInstance->snapshotServiceGetAllRestores($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceGetAllRestores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| snapshot id. Optional, full list at 0 | [optional]

### Return type

[**\Generated\Client\Vps\Model\SnapshotGetAllRestoresResponse**](../Model/SnapshotGetAllRestoresResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `snapshotServiceRemove()`

```php
snapshotServiceRemove($id): \Generated\Client\Vps\Model\SnapshotRemoveResponse
```



remove the snapshot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->snapshotServiceRemove($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\SnapshotRemoveResponse**](../Model/SnapshotRemoveResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `snapshotServiceRestore()`

```php
snapshotServiceRestore($id, $snapshot_restore_request): \Generated\Client\Vps\Model\SnapshotRestoreResponse
```



create a restore for the snapshot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\SnapshotServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$snapshot_restore_request = new \Generated\Client\Vps\Model\SnapshotRestoreRequest(); // \Generated\Client\Vps\Model\SnapshotRestoreRequest

try {
    $result = $apiInstance->snapshotServiceRestore($id, $snapshot_restore_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotServiceApi->snapshotServiceRestore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **snapshot_restore_request** | [**\Generated\Client\Vps\Model\SnapshotRestoreRequest**](../Model/SnapshotRestoreRequest.md)|  |

### Return type

[**\Generated\Client\Vps\Model\SnapshotRestoreResponse**](../Model/SnapshotRestoreResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
