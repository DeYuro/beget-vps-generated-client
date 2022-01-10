# # ManageVpsInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор Vps (uuid) | [optional]
**slug** | **string** | ЧПУ-френдли имя Vps (может быть пустой строкой) | [optional]
**display_name** | **string** | Отображаемое имя Vps | [optional]
**hostname** | **string** | Имя хоста (в ОС) | [optional]
**configuration** | [**\Generated\Client\Vps\Model\ManageVpsConfiguration**](ManageVpsConfiguration.md) |  | [optional]
**status** | **string** | Текущий статус Vps | [optional]
**ssh_keys** | [**\Generated\Client\Vps\Model\StructuresSshKeyInfo[]**](StructuresSshKeyInfo.md) | Информация об ssh-ключах | [optional]
**has_password** | **bool** | Возможен ли вход по паролю | [optional]
**manage_enabled** | **bool** | Доступно ли управление данной Vps | [optional]
**description** | **string** | Дескрипшн для пользователя | [optional]
**date_create** | **string** | Дата создания (в формате W3C) | [optional]
**operating_system** | [**\Generated\Client\Vps\Model\StructuresOperatingSystem**](StructuresOperatingSystem.md) |  | [optional]
**ip_address** | **string** | Основной IP-адрес | [optional]
**rescue_mode** | **bool** | Включен rescue-режим | [optional]
**migrating** | **bool** | VPS находится в состоянии миграции на другой хост | [optional]
**host_unavailable** | **bool** | Нет возможности получать информацию с хоста, на котором находится vps | [optional]
**unblocking** | **bool** | VPS находится в состоянии разблокировки | [optional]
**restoring** | **bool** | VPS находится в состоянии восстановления из резервной копии | [optional]
**disk_used** | **string** | Занято места на главном разделе, Мб | [optional]
**disk_left** | **string** | Осталось свободного места на главном разделе, Мб | [optional]
**additional_ip_address** | **string[]** | Информация о дополнительных IP-адресах VPS | [optional]
**beget_ssh_access_allowed** | **bool** | Согласие на доступ к пользовательской машине через SSH-ключи BeGet Необходимо для использования пользователем файлового менеджера | [optional]
**archived** | **bool** | VPS заархивирована, управление невозможно | [optional]
**unarchiving** | **bool** | VPS в процессе разархивации | [optional]
**private_network** | [**\Generated\Client\Vps\Model\StructuresAttachedPrivateNetwork[]**](StructuresAttachedPrivateNetwork.md) | Приватные сети к которым подключена VPS | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
