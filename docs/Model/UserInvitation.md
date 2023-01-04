# UserInvitation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly] 
**redirectUri** | **string** | User will be redirected to this uri when they accept the invitation | 
**cloudId** | **int** |  | [readonly] 
**cloudName** | **string** |  | 
**projectId** | **int** |  | [readonly] 
**projectName** | **string** |  | [optional] 
**status** | **string** | A: Accepted         D: Denied         P: Pending | [optional] 
**clientName** | **string** |  | 
**sender** | [**OpenAPI\Server\Model\User**](User.md) |  | 
**createdAt** | **\DateTime** |  | [readonly] 
**respondedAt** | **\DateTime** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


