# FolderWithoutChildren

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly] 
**parentId** | **int** |  | [optional] 
**type** | **string** | DEPRECATED: Use &#39;nature&#39; instead. Value is \&quot;Folder\&quot;. It is usefull to parse the tree and discriminate folders and files | [readonly] 
**nature** | **string** | Value is \&quot;Folder\&quot;. It is usefull to parse the tree and discriminate folders and files | [readonly] 
**name** | **string** | Name of the folder | 
**createdAt** | **\DateTime** | Creation date | [readonly] 
**updatedAt** | **\DateTime** | Date of the last update | [readonly] 
**createdBy** | [**User**](User.md) |  | [readonly] 
**groupsPermissions** | [**OpenAPI\Server\Model\FolderGroupPermission**](FolderGroupPermission.md) |  | [readonly] 
**defaultPermission** | **int** | Permission for a Folder | [optional] 
**userPermission** | **int** | Aggregate of group user permissions and folder default permission | [readonly] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


