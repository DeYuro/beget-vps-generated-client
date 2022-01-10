# # StructuresOrderInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор задания | [optional]
**vps_id** | **string** | Идентификатор VPS (uuid) | [optional]
**vps_name** | **string** | Имя сервера, на который выполнялось восстановление | [optional]
**type** | **string** | Тип задания | [optional]
**date_create** | **string** | Дата создания задания (RFC3339) | [optional]
**date_complete** | **string** | Дата завершения задания (RFC3339) | [optional]
**path** | **string[]** | Список путей для восстановления/скачивания | [optional]
**status** | **string** | Статус завершения | [optional]
**copy_info** | [**\Generated\Client\Vps\Model\StructuresCopyInfo**](StructuresCopyInfo.md) |  | [optional]
**affect_live** | **bool** | Операция производится без выключения VPS | [optional]
**target** | **string** | Директория, в которую производилось восстановление (актуально для выборочного восстановления файлов) | [optional]
**error_details** | [**\Generated\Client\Vps\Model\StructuresOrderInfoErrorDetails**](StructuresOrderInfoErrorDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
