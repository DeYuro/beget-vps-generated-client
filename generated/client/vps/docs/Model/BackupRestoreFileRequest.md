# # BackupRestoreFileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор VPS (uuid) | [optional]
**copy_id** | **string** | Идентификатор копии | [optional]
**path** | **string[]** | Список путей для восстановления | [optional]
**affect_live** | **bool** | Восстановление без выключения VPS | [optional]
**target** | **string** | Директория, в которую будет происходить восстановление. По-умолчанию - \&quot;/\&quot; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
