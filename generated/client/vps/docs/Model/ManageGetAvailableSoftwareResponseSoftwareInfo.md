# # ManageGetAvailableSoftwareResponseSoftwareInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** | Внутреннее имя (напр. redmine) | [optional]
**display_name** | **string** | Отображаемое имя (напр. Redmine) | [optional]
**version** | **string** | Версия (напр. 1.0.1) | [optional]
**type** | **string** | Тип ПО (панель управления, обычное ПО) | [optional]
**description** | **string** | Описание ПО | [optional]
**description_version** | **string** | Дополнительное описание для конкретной версии ПО | [optional]
**image_id** | **int[]** | Список ID образов, для которых возможна установка этого ПО | [optional]
**variable** | **string[]** | Список дополнительных полей, которые необходимо передать для установки ПО | [optional]
**requirements** | [**\Generated\Client\Vps\Model\ManageGetAvailableSoftwareResponseSoftwareInfoRequirements**](ManageGetAvailableSoftwareResponseSoftwareInfoRequirements.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
