# # SnapshotRestore

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | restore order id | [optional]
**snapshot** | [**\Generated\Client\Vps\Model\SnapshotSnapshot**](SnapshotSnapshot.md) |  | [optional]
**vps_id** | **string** | target vps id | [optional]
**vps_name** | **string** | target vps name | [optional]
**target_type** | **string** | restore type: existing or new vps | [optional]
**date_create** | **string** | start restore datetime (RFC3339) | [optional]
**date_complete** | **string** | finish restore datetime (RFC3339) | [optional]
**status** | **string** | current restore status | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
