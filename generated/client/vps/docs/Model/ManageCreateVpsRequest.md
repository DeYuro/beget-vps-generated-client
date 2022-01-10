# # ManageCreateVpsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_name** | **string** | Отображаемое имя Vps (required) | [optional]
**hostname** | **string** | Имя хоста (в ОС) | [optional]
**description** | **string** | Дескрипшн (опциональный). просто какой-нить текст | [optional]
**configuration_id** | **string** | Идентификатор конфигурации (required) | [optional]
**operating_system_id** | **int** | Идентификатор ОС oneof{source} | [optional]
**snapshot_id** | **string** | Идентификатор снапшота, который восстановится в новую Vps oneof{source} | [optional]
**ssh_keys** | **int[]** | ID публичных ssh-ключей (предварительно созданные в системе) | [optional]
**password** | **string** | Пароль (должен включать минимум 1 upper, 1 lower, 1 digit, 1 special char. Мин длина - 8 символов) | [optional]
**beget_ssh_access_allowed** | **bool** | Согласие на доступ к пользовательской машине через SSH-ключи BeGet Необходимо для использования пользователем файлового менеджера | [optional]
**software** | [**\Generated\Client\Vps\Model\ManageSoftwareInstallInfo[]**](ManageSoftwareInstallInfo.md) | Информация о ПО, которое необходимо установить | [optional]
**private_networks** | [**\Generated\Client\Vps\Model\ManagePrivateNetworkInfo[]**](ManagePrivateNetworkInfo.md) | Приватные сети, к которым необходимо подключить VPS | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
