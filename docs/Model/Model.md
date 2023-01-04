# Model

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly] 
**name** | **string** |  | [optional] 
**type** | **string** |  | [readonly] 
**creator** | [**User**](User.md) |  | [readonly] 
**status** | **string** |  | [readonly] 
**source** | **string** |  | [optional] 
**createdAt** | **\DateTime** |  | [readonly] 
**updatedAt** | **\DateTime** |  | [readonly] 
**documentId** | **int** |  | [readonly] 
**document** | [**Document**](Document.md) |  | [readonly] 
**structureFile** | **string** |  | [readonly] 
**systemsFile** | **string** |  | [readonly] 
**mapFile** | **string** |  | [readonly] 
**gltfFile** | **string** |  | [readonly] 
**bvhTreeFile** | **string** |  | [readonly] 
**previewFile** | **string** |  | [readonly] 
**viewer360File** | **string** | DEPRECATED: Use &#39;preview_file&#39; instead. | [readonly] 
**xktFile** | **string** |  | [readonly] 
**projectId** | **int** |  | [readonly] 
**worldPosition** | **float** | [x,y,z] array of the position of the local_placement in world coordinates | [optional] 
**sizeRatio** | **float** | How many meters a unit represents | [optional] 
**errors** | **string** | List of errors that happened during IFC processing | [readonly] 
**warnings** | **string** | List of warnings that happened during IFC processing | [readonly] 
**archived** | **bool** |  | [optional] 
**version** | **string** | This field is only for information. Updating it won&#39;t impact the export. | [optional] 
**northVector** | **float** | This field is only for information. Updating it won&#39;t impact the export. | [optional] 
**recommanded2dAngle** | **float** | This is the angle in clockwise degree to apply on the 2D to optimise the horizontality of objects. This field is only for information. Updating it won&#39;t impact the export. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


