# # PatchedResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**address** | **string** |  | [optional]
**resource_type** | [**ResourceTypeEnum**](ResourceTypeEnum.md) |  | [optional]
**children** | **int[]** |  | [optional]
**parents** | **int[]** |  | [optional]
**organization** | **string** |  | [optional]
**origins** | [**\Hauki\Model\ResourceOrigin[]**](ResourceOrigin.md) |  | [optional]
**last_modified_by** | [**User**](User.md) |  | [optional] [readonly]
**created** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**modified** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**extra_data** | **map[string,mixed]** |  | [optional]
**is_public** | **bool** |  | [optional]
**timezone** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
