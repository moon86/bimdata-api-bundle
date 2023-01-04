# RecursiveFolderChildren

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**parentId** | **int** |  | [readonly] 
**createdBy** | [**OpenAPI\Server\Model\RecursiveFolderChildrenCreatedBy**](RecursiveFolderChildrenCreatedBy.md) |  | [optional] 
**creator** | [**OpenAPI\Server\Model\RecursiveFolderChildrenCreatedBy**](RecursiveFolderChildrenCreatedBy.md) |  | [optional] 
**type** | **string** | DEPRECATED: Use &#39;nature&#39; instead. Values can be &#39;Folder&#39;, &#39;Document&#39; or &#39;Ifc&#39;. It is usefull to parse the tree and discriminate folders and files | [readonly] 
**nature** | **string** | Values can be &#39;Folder&#39;, &#39;Document&#39; or &#39;Model&#39;. It is usefull to parse the tree and discriminate folders and files | [readonly] 
**modelType** | **string** | Model&#39;s type. Values can be IFC, DWG, DXF, GLTF, PDF, JPEG, PNG, OBJ, DAE, BFX, POINT_CLOUD | [readonly] 
**name** | **string** |  | 
**createdAt** | **\DateTime** |  | 
**updatedAt** | **\DateTime** |  | 
**fileName** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**size** | **int** |  | [optional] 
**modelId** | **int** |  | [readonly] 
**ifcId** | **int** | DEPRECATED: Use &#39;model_id&#39; instead | [readonly] 
**file** | **string** |  | [optional] 
**groupsPermissions** | [**OpenAPI\Server\Model\FolderGroupPermission**](FolderGroupPermission.md) | Groups permissions of folder | [readonly] 
**defaultPermission** | **int** | Default permissions of folder | [readonly] 
**userPermission** | **int** | Aggregate of group user permissions and folder default permission | [readonly] 
**history** | [**OpenAPI\Server\Model\Document**](Document.md) | History of a document | [readonly] 
**tags** | [**OpenAPI\Server\Model\Tag**](Tag.md) | Tags of a document | [readonly] 
**children** | [**OpenAPI\Server\Model\RecursiveFolderChildren**](RecursiveFolderChildren.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


