# MarketplaceApp

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly] 
**name** | **string** |  | 
**shortDescription** | **string** |  | 
**longDescription** | **string** |  | 
**activationWebhookUrl** | **string** |  | [optional] 
**postActivationRedirectUri** | **string** |  | [optional] 
**viewerPluginsUrls** | **string** |  | [optional] 
**creator** | [**User**](User.md) |  | [readonly] 
**scopes** | **string** |  | [readonly] 
**settingsUrl** | **string** | this URL will be called with query params ?cloud_id&#x3D; | [optional] 
**isPublic** | **bool** |  | [readonly] 
**tags** | **string** |  | [optional] 
**logo** | **string** |  | [optional] 
**file** | **string** |  | [optional] 
**images** | [**OpenAPI\Server\Model\MarketplaceAppImage**](MarketplaceAppImage.md) |  | [readonly] 
**organization** | [**PublicOrganization**](PublicOrganization.md) |  | [readonly] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


