# Generated\Client\Vps\ManageServiceApi

All URIs are relative to https://api.beget.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**manageServiceAttachIpAddress()**](ManageServiceApi.md#manageServiceAttachIpAddress) | **POST** /v1/vps/{id}/network/{ip_address} | 
[**manageServiceAttachSshKey()**](ManageServiceApi.md#manageServiceAttachSshKey) | **POST** /v1/vps/{id}/sshKey/{ssh_key_id} | 
[**manageServiceAttachToPrivateNetwork()**](ManageServiceApi.md#manageServiceAttachToPrivateNetwork) | **POST** /v1/vps/{id}/private-network/{network_id} | 
[**manageServiceChangeConfiguration()**](ManageServiceApi.md#manageServiceChangeConfiguration) | **PUT** /v1/vps/server/{id}/configuration | 
[**manageServiceChangeSshAccess()**](ManageServiceApi.md#manageServiceChangeSshAccess) | **PUT** /v1/vps/{id}/ssh/access | 
[**manageServiceCheckSoftwareRequirements()**](ManageServiceApi.md#manageServiceCheckSoftwareRequirements) | **POST** /v1/vps/software/requirements | 
[**manageServiceCreateVps()**](ManageServiceApi.md#manageServiceCreateVps) | **POST** /v1/vps/server | 
[**manageServiceDetachFromPrivateNetwork()**](ManageServiceApi.md#manageServiceDetachFromPrivateNetwork) | **DELETE** /v1/vps/{id}/private-network/{network_id} | 
[**manageServiceDetachIpAddress()**](ManageServiceApi.md#manageServiceDetachIpAddress) | **DELETE** /v1/vps/network/detach/{ip_address} | 
[**manageServiceDetachSshKey()**](ManageServiceApi.md#manageServiceDetachSshKey) | **DELETE** /v1/vps/{id}/sshKey/{ssh_key_id} | 
[**manageServiceGetAvailableConfiguration()**](ManageServiceApi.md#manageServiceGetAvailableConfiguration) | **GET** /v1/vps/configuration | 
[**manageServiceGetAvailableSoftware()**](ManageServiceApi.md#manageServiceGetAvailableSoftware) | **GET** /v1/vps/software | 
[**manageServiceGetFileManagerSettings()**](ManageServiceApi.md#manageServiceGetFileManagerSettings) | **POST** /v1/vps/{id}/fm | 
[**manageServiceGetHistory()**](ManageServiceApi.md#manageServiceGetHistory) | **GET** /v1/vps/{id}/history | 
[**manageServiceGetInfo()**](ManageServiceApi.md#manageServiceGetInfo) | **GET** /v1/vps/server/{id} | 
[**manageServiceGetInstalledSoftware()**](ManageServiceApi.md#manageServiceGetInstalledSoftware) | **GET** /v1/vps/{id}/software | 
[**manageServiceGetList()**](ManageServiceApi.md#manageServiceGetList) | **GET** /v1/vps/server/list | 
[**manageServiceGetStatuses()**](ManageServiceApi.md#manageServiceGetStatuses) | **GET** /v1/vps/server/statuses | 
[**manageServiceRebootVps()**](ManageServiceApi.md#manageServiceRebootVps) | **POST** /v1/vps/server/{id}/reboot | 
[**manageServiceReinstall()**](ManageServiceApi.md#manageServiceReinstall) | **POST** /v1/vps/server/{id}/reinstall | 
[**manageServiceRemoveVps()**](ManageServiceApi.md#manageServiceRemoveVps) | **POST** /v1/vps/server/{id}/remove | 
[**manageServiceResetPassword()**](ManageServiceApi.md#manageServiceResetPassword) | **PUT** /v1/vps/{id}/password | 
[**manageServiceResetVps()**](ManageServiceApi.md#manageServiceResetVps) | **POST** /v1/vps/server/{id}/reset | 
[**manageServiceStartRescue()**](ManageServiceApi.md#manageServiceStartRescue) | **POST** /v1/vps/server/{id}/rescue | 
[**manageServiceStartVps()**](ManageServiceApi.md#manageServiceStartVps) | **POST** /v1/vps/server/{id}/start | 
[**manageServiceStopRescue()**](ManageServiceApi.md#manageServiceStopRescue) | **DELETE** /v1/vps/server/{id}/rescue | 
[**manageServiceStopVps()**](ManageServiceApi.md#manageServiceStopVps) | **POST** /v1/vps/server/{id}/stop | 
[**manageServiceUnarchive()**](ManageServiceApi.md#manageServiceUnarchive) | **DELETE** /v1/vps/archive/{id} | 
[**manageServiceUpdateInfo()**](ManageServiceApi.md#manageServiceUpdateInfo) | **PUT** /v1/vps/server/{id}/info | 


## `manageServiceAttachIpAddress()`

```php
manageServiceAttachIpAddress($id, $ip_address, $manage_attach_ip_address_request): \Generated\Client\Vps\Model\ManageAttachIpAddressResponse
```



Прикрепление дополнительного IP адреса пользователя к VPS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ip_address = 'ip_address_example'; // string
$manage_attach_ip_address_request = new \Generated\Client\Vps\Model\ManageAttachIpAddressRequest(); // \Generated\Client\Vps\Model\ManageAttachIpAddressRequest

try {
    $result = $apiInstance->manageServiceAttachIpAddress($id, $ip_address, $manage_attach_ip_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceAttachIpAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **ip_address** | **string**|  |
 **manage_attach_ip_address_request** | [**\Generated\Client\Vps\Model\ManageAttachIpAddressRequest**](../Model/ManageAttachIpAddressRequest.md)|  |

### Return type

[**\Generated\Client\Vps\Model\ManageAttachIpAddressResponse**](../Model/ManageAttachIpAddressResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceAttachSshKey()`

```php
manageServiceAttachSshKey($id, $ssh_key_id): \Generated\Client\Vps\Model\ManageAttachSshKeyResponse
```



Добавляет ssh-ключ к VPS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ssh_key_id = 'ssh_key_id_example'; // string

try {
    $result = $apiInstance->manageServiceAttachSshKey($id, $ssh_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceAttachSshKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **ssh_key_id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageAttachSshKeyResponse**](../Model/ManageAttachSshKeyResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceAttachToPrivateNetwork()`

```php
manageServiceAttachToPrivateNetwork($id, $network_id, $manage_attach_to_private_network_request): \Generated\Client\Vps\Model\ManageAttachToPrivateNetworkResponse
```



Добавляет VPS к приватной сети

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$network_id = 'network_id_example'; // string
$manage_attach_to_private_network_request = new \Generated\Client\Vps\Model\ManageAttachToPrivateNetworkRequest(); // \Generated\Client\Vps\Model\ManageAttachToPrivateNetworkRequest

try {
    $result = $apiInstance->manageServiceAttachToPrivateNetwork($id, $network_id, $manage_attach_to_private_network_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceAttachToPrivateNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **network_id** | **string**|  |
 **manage_attach_to_private_network_request** | [**\Generated\Client\Vps\Model\ManageAttachToPrivateNetworkRequest**](../Model/ManageAttachToPrivateNetworkRequest.md)|  |

### Return type

[**\Generated\Client\Vps\Model\ManageAttachToPrivateNetworkResponse**](../Model/ManageAttachToPrivateNetworkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceChangeConfiguration()`

```php
manageServiceChangeConfiguration($id, $manage_change_configuration_request): \Generated\Client\Vps\Model\ManageChangeConfigurationResponse
```



Отправляет запрос на смену конфигурации Vps (с перезагрузкой)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$manage_change_configuration_request = new \Generated\Client\Vps\Model\ManageChangeConfigurationRequest(); // \Generated\Client\Vps\Model\ManageChangeConfigurationRequest

try {
    $result = $apiInstance->manageServiceChangeConfiguration($id, $manage_change_configuration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceChangeConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **manage_change_configuration_request** | [**\Generated\Client\Vps\Model\ManageChangeConfigurationRequest**](../Model/ManageChangeConfigurationRequest.md)|  |

### Return type

[**\Generated\Client\Vps\Model\ManageChangeConfigurationResponse**](../Model/ManageChangeConfigurationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceChangeSshAccess()`

```php
manageServiceChangeSshAccess($id, $manage_change_ssh_access_request): \Generated\Client\Vps\Model\ManageChangeSshAccessResponse
```



Изменение возможности доступа к пользовательской машине через SSH-ключи BeGet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$manage_change_ssh_access_request = new \Generated\Client\Vps\Model\ManageChangeSshAccessRequest(); // \Generated\Client\Vps\Model\ManageChangeSshAccessRequest

try {
    $result = $apiInstance->manageServiceChangeSshAccess($id, $manage_change_ssh_access_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceChangeSshAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **manage_change_ssh_access_request** | [**\Generated\Client\Vps\Model\ManageChangeSshAccessRequest**](../Model/ManageChangeSshAccessRequest.md)|  |

### Return type

[**\Generated\Client\Vps\Model\ManageChangeSshAccessResponse**](../Model/ManageChangeSshAccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceCheckSoftwareRequirements()`

```php
manageServiceCheckSoftwareRequirements($manage_check_software_requirements_request): \Generated\Client\Vps\Model\ManageCheckSoftwareRequirementsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_check_software_requirements_request = new \Generated\Client\Vps\Model\ManageCheckSoftwareRequirementsRequest(); // \Generated\Client\Vps\Model\ManageCheckSoftwareRequirementsRequest

try {
    $result = $apiInstance->manageServiceCheckSoftwareRequirements($manage_check_software_requirements_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceCheckSoftwareRequirements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_check_software_requirements_request** | [**\Generated\Client\Vps\Model\ManageCheckSoftwareRequirementsRequest**](../Model/ManageCheckSoftwareRequirementsRequest.md)|  |

### Return type

[**\Generated\Client\Vps\Model\ManageCheckSoftwareRequirementsResponse**](../Model/ManageCheckSoftwareRequirementsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceCreateVps()`

```php
manageServiceCreateVps($manage_create_vps_request): \Generated\Client\Vps\Model\ManageCreateVpsResponse
```



Отправляет команду на создание новой Vps и ее запуск (https://jira.beget.ru/browse/BH-327)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manage_create_vps_request = new \Generated\Client\Vps\Model\ManageCreateVpsRequest(); // \Generated\Client\Vps\Model\ManageCreateVpsRequest

try {
    $result = $apiInstance->manageServiceCreateVps($manage_create_vps_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceCreateVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manage_create_vps_request** | [**\Generated\Client\Vps\Model\ManageCreateVpsRequest**](../Model/ManageCreateVpsRequest.md)|  |

### Return type

[**\Generated\Client\Vps\Model\ManageCreateVpsResponse**](../Model/ManageCreateVpsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceDetachFromPrivateNetwork()`

```php
manageServiceDetachFromPrivateNetwork($id, $network_id): \Generated\Client\Vps\Model\ManageDetachFromPrivateNetworkResponse
```



Удаляет VPS из приватной сети

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$network_id = 'network_id_example'; // string

try {
    $result = $apiInstance->manageServiceDetachFromPrivateNetwork($id, $network_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceDetachFromPrivateNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **network_id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageDetachFromPrivateNetworkResponse**](../Model/ManageDetachFromPrivateNetworkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceDetachIpAddress()`

```php
manageServiceDetachIpAddress($ip_address): \Generated\Client\Vps\Model\ManageDetachIpAddressResponse
```



Открепление дополнительного IP адреса пользователя от VPS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_address = 'ip_address_example'; // string

try {
    $result = $apiInstance->manageServiceDetachIpAddress($ip_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceDetachIpAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_address** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageDetachIpAddressResponse**](../Model/ManageDetachIpAddressResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceDetachSshKey()`

```php
manageServiceDetachSshKey($id, $ssh_key_id): \Generated\Client\Vps\Model\ManageDetachSshKeyResponse
```



Удаляет ssh-ключ из VPS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ssh_key_id = 'ssh_key_id_example'; // string

try {
    $result = $apiInstance->manageServiceDetachSshKey($id, $ssh_key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceDetachSshKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **ssh_key_id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageDetachSshKeyResponse**](../Model/ManageDetachSshKeyResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetAvailableConfiguration()`

```php
manageServiceGetAvailableConfiguration(): \Generated\Client\Vps\Model\ManageGetAvailableConfigurationResponse
```



Возвращает досупные варианты конфигурации Vps (список ОС и тарифных планов)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->manageServiceGetAvailableConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetAvailableConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Generated\Client\Vps\Model\ManageGetAvailableConfigurationResponse**](../Model/ManageGetAvailableConfigurationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetAvailableSoftware()`

```php
manageServiceGetAvailableSoftware(): \Generated\Client\Vps\Model\ManageGetAvailableSoftwareResponse
```



Возвращает список доступного для установки ПО

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->manageServiceGetAvailableSoftware();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetAvailableSoftware: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Generated\Client\Vps\Model\ManageGetAvailableSoftwareResponse**](../Model/ManageGetAvailableSoftwareResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetFileManagerSettings()`

```php
manageServiceGetFileManagerSettings($id): \Generated\Client\Vps\Model\ManageGetFileManagerSettingsResponse
```



Возвращает необходимые параметры сессии для перехода в файловый менеджер

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceGetFileManagerSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetFileManagerSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageGetFileManagerSettingsResponse**](../Model/ManageGetFileManagerSettingsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetHistory()`

```php
manageServiceGetHistory($id): \Generated\Client\Vps\Model\ManageGetHistoryResponse
```



Возвращат историю состояний VPS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceGetHistory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageGetHistoryResponse**](../Model/ManageGetHistoryResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetInfo()`

```php
manageServiceGetInfo($id): \Generated\Client\Vps\Model\ManageGetInfoResponse
```



Возвращает информацию по одной конкретной Vps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceGetInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageGetInfoResponse**](../Model/ManageGetInfoResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetInstalledSoftware()`

```php
manageServiceGetInstalledSoftware($id): \Generated\Client\Vps\Model\ManageGetInstalledSoftwareResponse
```



Возвращает список установленного ПО на сервере

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceGetInstalledSoftware($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetInstalledSoftware: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageGetInstalledSoftwareResponse**](../Model/ManageGetInstalledSoftwareResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetList()`

```php
manageServiceGetList(): \Generated\Client\Vps\Model\ManageGetListResponse
```



Возвращает список Vps с некоторыми параметрами

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->manageServiceGetList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Generated\Client\Vps\Model\ManageGetListResponse**](../Model/ManageGetListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceGetStatuses()`

```php
manageServiceGetStatuses(): \Generated\Client\Vps\Model\ManageGetStatusesResponse
```



Возвращает статусы всех Vps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->manageServiceGetStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceGetStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Generated\Client\Vps\Model\ManageGetStatusesResponse**](../Model/ManageGetStatusesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceRebootVps()`

```php
manageServiceRebootVps($id): \Generated\Client\Vps\Model\ManageRebootVpsResponse
```



Отправляет команду на рестарт Vps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceRebootVps($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceRebootVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageRebootVpsResponse**](../Model/ManageRebootVpsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceReinstall()`

```php
manageServiceReinstall($id, $manage_reinstall_request): \Generated\Client\Vps\Model\ManageReinstallResponse
```



Отправляет запрос на переустановку ОС (с перезагрузкой и уничтожением всех данных)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$manage_reinstall_request = new \Generated\Client\Vps\Model\ManageReinstallRequest(); // \Generated\Client\Vps\Model\ManageReinstallRequest

try {
    $result = $apiInstance->manageServiceReinstall($id, $manage_reinstall_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceReinstall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **manage_reinstall_request** | [**\Generated\Client\Vps\Model\ManageReinstallRequest**](../Model/ManageReinstallRequest.md)|  |

### Return type

[**\Generated\Client\Vps\Model\ManageReinstallResponse**](../Model/ManageReinstallResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceRemoveVps()`

```php
manageServiceRemoveVps($id): \Generated\Client\Vps\Model\ManageRemoveVpsResponse
```



Отправляет команду на удаление Vps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceRemoveVps($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceRemoveVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageRemoveVpsResponse**](../Model/ManageRemoveVpsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceResetPassword()`

```php
manageServiceResetPassword($id): \Generated\Client\Vps\Model\ManageResetPasswordResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceResetPassword($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceResetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageResetPasswordResponse**](../Model/ManageResetPasswordResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceResetVps()`

```php
manageServiceResetVps($id): \Generated\Client\Vps\Model\ManageResetVpsResponse
```



Отправляет команду на рестарт Vps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceResetVps($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceResetVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageResetVpsResponse**](../Model/ManageResetVpsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceStartRescue()`

```php
manageServiceStartRescue($id): \Generated\Client\Vps\Model\ManageStartRescueResponse
```



Отправляет команду на перевод Vps в rescue-режим

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceStartRescue($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceStartRescue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageStartRescueResponse**](../Model/ManageStartRescueResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceStartVps()`

```php
manageServiceStartVps($id): \Generated\Client\Vps\Model\ManageStartVpsResponse
```



Отправляет команду на запуск Vps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceStartVps($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceStartVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageStartVpsResponse**](../Model/ManageStartVpsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceStopRescue()`

```php
manageServiceStopRescue($id): \Generated\Client\Vps\Model\ManageStopRescueResponse
```



Отправляет запрос на отключение rescue-режима и перезагрузку Vps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceStopRescue($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceStopRescue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageStopRescueResponse**](../Model/ManageStopRescueResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceStopVps()`

```php
manageServiceStopVps($id): \Generated\Client\Vps\Model\ManageStopVpsResponse
```



Отправляет команду на остановку Vps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceStopVps($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceStopVps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageStopVpsResponse**](../Model/ManageStopVpsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceUnarchive()`

```php
manageServiceUnarchive($id): \Generated\Client\Vps\Model\ManageUnarchiveResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->manageServiceUnarchive($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceUnarchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Generated\Client\Vps\Model\ManageUnarchiveResponse**](../Model/ManageUnarchiveResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageServiceUpdateInfo()`

```php
manageServiceUpdateInfo($id, $manage_update_info_request): \Generated\Client\Vps\Model\ManageUpdateInfoResponse
```



Обновляет информацию о Vps (которая отображается в панели)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Generated\Client\Vps\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Generated\Client\Vps\Api\ManageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$manage_update_info_request = new \Generated\Client\Vps\Model\ManageUpdateInfoRequest(); // \Generated\Client\Vps\Model\ManageUpdateInfoRequest

try {
    $result = $apiInstance->manageServiceUpdateInfo($id, $manage_update_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManageServiceApi->manageServiceUpdateInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **manage_update_info_request** | [**\Generated\Client\Vps\Model\ManageUpdateInfoRequest**](../Model/ManageUpdateInfoRequest.md)|  |

### Return type

[**\Generated\Client\Vps\Model\ManageUpdateInfoResponse**](../Model/ManageUpdateInfoResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
