# PatchedDocumentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentId** | **int** |  | [optional] 
**name** | **string** | Shown name of the file | [optional] 
**fileName** | **string** | Full name of the file | [optional] 
**description** | **string** | Description of the file | [optional] 
**file** | **UploadedFile** |  | [optional] 
**size** | **int** | Size of the file. | [optional] 
**modelSource** | **string** | Define the model.source field if the upload is a Model (IFC, PDF, DWG...) | [optional] 
**ifcSource** | **string** | DEPRECATED: Use &#39;model_source&#39; instead. Define the model.source field if the upload is a Model (IFC, PDF, DWG...) | [optional] 
**successorOf** | **int** | Old document version to replace. Only for create | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


