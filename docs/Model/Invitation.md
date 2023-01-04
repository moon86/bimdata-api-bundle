# Invitation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly] 
**clientId** | **int** |  | [readonly] 
**redirectUri** | **string** | User will be redirected to this uri when they accept the invitation | 
**cloudName** | **string** |  | 
**cloudRole** | **int** | Role the user will have when they accept the invitation | 
**projectName** | **string** |  | [optional] 
**projectRole** | **int** | Role the user will have when they accept the invitation | [optional] 
**email** | **string** | email of the user to invite | 
**status** | **string** | A: Accepted         D: Denied         P: Pending | [optional] 
**senderProviderSub** | **string** | OIDC sub of the sender. The original sub from the provider is used instead of the broker sub | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


