# Document

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly] 
**parentId** | **int** |  | [optional] 
**createdBy** | [**User**](User.md) |  | [readonly] 
**project** | **int** |  | [readonly] 
**name** | **string** | Shown name of the file | 
**fileName** | **string** | Full name of the file | [optional] 
**description** | **string** | Description of the file | [optional] 
**file** | **string** |  | 
**size** | **int** | Size of the file. | [optional] 
**tags** | [**OpenAPI\Server\Model\Tag**](Tag.md) |  | [readonly] 
**visas** | [**OpenAPI\Server\Model\Visa**](Visa.md) |  | [readonly] 
**createdAt** | **\DateTime** | Creation date | [readonly] 
**updatedAt** | **\DateTime** | Date of the last update | [readonly] 
**modelId** | **int** |  | [readonly] 
**modelType** | **string** | Model&#39;s type. Values can be IFC, DWG, DXF, GLTF, PDF, JPEG, PNG, OBJ, DAE, BFX, POINT_CLOUD | [readonly] 
**ifcId** | **int** | DEPRECATED: Use &#39;model_id&#39; instead. | [readonly] 
**userPermission** | **int** | Aggregate of group user permissions and folder default permission | [readonly] 
**isHeadVersion** | **bool** | Document is a head of version or is owned by another document | [readonly] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


