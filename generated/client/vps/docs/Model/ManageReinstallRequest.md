# # ManageReinstallRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор Vps (uuid) | [optional]
**operating_system_id** | **int** | Идентификатор ОС (required) | [optional]
**ssh_keys** | **int[]** | ID публичных ssh-ключей (предварительно созданные в системе) | [optional]
**password** | **string** | Пароль (должен включать минимум 1 upper, 1 lower, 1 digit, 1 special char. Мин длина - 8 символов) | [optional]
**software** | [**\Generated\Client\Vps\Model\ManageSoftwareInstallInfo[]**](ManageSoftwareInstallInfo.md) | Информация о ПО, которое необходимо установить | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
