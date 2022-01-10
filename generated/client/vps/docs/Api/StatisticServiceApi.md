# Generated\Client\Vps\StatisticServiceApi

All URIs are relative to https://api.beget.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**statisticServiceGetCpu()**](StatisticServiceApi.md#statisticServiceGetCpu) | **GET** /v1/vps/statistic/cpu/{id} | 
[**statisticServiceGetCpuDetails()**](StatisticServiceApi.md#statisticServiceGetCpuDetails) | **GET** /v1/vps/statistic/cpu-details/{id} | 
[**statisticServiceGetDisk()**](StatisticServiceApi.md#statisticServiceGetDisk) | **GET** /v1/vps/statistic/disk/{id} | 
[**statisticServiceGetDiskUsage()**](StatisticServiceApi.md#statisticServiceGetDiskUsage) | **GET** /v1/vps/statistic/disk-usage/{id} | 
[**statisticServiceGetLoadAverage()**](StatisticServiceApi.md#statisticServiceGetLoadAverage) | **GET** /v1/vps/statistic/load-average/{id} | 
[**statisticServiceGetMemory()**](StatisticServiceApi.md#statisticServiceGetMemory) | **GET** /v1/vps/statistic/memory/{id} | 
[**statisticServiceGetNetwork()**](StatisticServiceApi.md#statisticServiceGetNetwork) | **GET** /v1/vps/statistic/network/{id} | 
[**statisticServiceGetProcessList()**](StatisticServiceApi.md#statisticServiceGetProcessList) | **GET** /v1/vps/statistic/processes/{id} | 


## `statisticServiceGetCpu()`

```php
statisticServiceGetCpu($id, $period): \Generated\Client\Vps\Model\StatisticGetCpuResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\StatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->statisticServiceGetCpu($id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticServiceApi->statisticServiceGetCpu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **period** | **string**|  | [optional]

### Return type

[**\Generated\Client\Vps\Model\StatisticGetCpuResponse**](../Model/StatisticGetCpuResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticServiceGetCpuDetails()`

```php
statisticServiceGetCpuDetails($id, $period): \Generated\Client\Vps\Model\StatisticGetCpuDetailsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\StatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->statisticServiceGetCpuDetails($id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticServiceApi->statisticServiceGetCpuDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **period** | **string**|  | [optional]

### Return type

[**\Generated\Client\Vps\Model\StatisticGetCpuDetailsResponse**](../Model/StatisticGetCpuDetailsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticServiceGetDisk()`

```php
statisticServiceGetDisk($id, $period): \Generated\Client\Vps\Model\StatisticGetDiskResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\StatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->statisticServiceGetDisk($id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticServiceApi->statisticServiceGetDisk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **period** | **string**|  | [optional]

### Return type

[**\Generated\Client\Vps\Model\StatisticGetDiskResponse**](../Model/StatisticGetDiskResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticServiceGetDiskUsage()`

```php
statisticServiceGetDiskUsage($id, $period): \Generated\Client\Vps\Model\StatisticGetDiskUsageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\StatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->statisticServiceGetDiskUsage($id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticServiceApi->statisticServiceGetDiskUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **period** | **string**|  | [optional]

### Return type

[**\Generated\Client\Vps\Model\StatisticGetDiskUsageResponse**](../Model/StatisticGetDiskUsageResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticServiceGetLoadAverage()`

```php
statisticServiceGetLoadAverage($id, $period): \Generated\Client\Vps\Model\StatisticGetLoadAverageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\StatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->statisticServiceGetLoadAverage($id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticServiceApi->statisticServiceGetLoadAverage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **period** | **string**|  | [optional]

### Return type

[**\Generated\Client\Vps\Model\StatisticGetLoadAverageResponse**](../Model/StatisticGetLoadAverageResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticServiceGetMemory()`

```php
statisticServiceGetMemory($id, $period): \Generated\Client\Vps\Model\StatisticGetMemoryResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\StatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->statisticServiceGetMemory($id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticServiceApi->statisticServiceGetMemory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **period** | **string**|  | [optional]

### Return type

[**\Generated\Client\Vps\Model\StatisticGetMemoryResponse**](../Model/StatisticGetMemoryResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticServiceGetNetwork()`

```php
statisticServiceGetNetwork($id, $period): \Generated\Client\Vps\Model\StatisticGetNetworkResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\StatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->statisticServiceGetNetwork($id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticServiceApi->statisticServiceGetNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **period** | **string**|  | [optional]

### Return type

[**\Generated\Client\Vps\Model\StatisticGetNetworkResponse**](../Model/StatisticGetNetworkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticServiceGetProcessList()`

```php
statisticServiceGetProcessList($id): \Generated\Client\Vps\Model\StatisticGetProcessListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\StatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->statisticServiceGetProcessList($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticServiceApi->statisticServiceGetProcessList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\StatisticGetProcessListResponse**](../Model/StatisticGetProcessListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
