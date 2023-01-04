# SelfUser

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly] 
**email** | **string** |  | 
**firstname** | **string** |  | 
**lastname** | **string** |  | 
**createdAt** | **\DateTime** |  | [readonly] 
**updatedAt** | **\DateTime** |  | [readonly] 
**organizations** | [**OpenAPI\Server\Model\Organization**](Organization.md) |  | [readonly] 
**clouds** | [**OpenAPI\Server\Model\CloudRole**](CloudRole.md) |  | [readonly] 
**projects** | [**OpenAPI\Server\Model\ProjectRole**](ProjectRole.md) |  | [readonly] 
**provider** | **string** |  | [readonly] 
**providerSub** | **string** | sub from original identity provider | [optional] 
**sub** | **string** | sub from Keycloak | [readonly] 
**profilePicture** | **string** |  | [readonly] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


