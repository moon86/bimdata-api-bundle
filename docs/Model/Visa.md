# Visa

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [readonly] 
**validations** | [**OpenAPI\Server\Model\VisaValidation**](VisaValidation.md) |  | [readonly] 
**validationsInError** | **int** | Validation IDs where one or more validators have no longer access to the visa document. | [readonly] 
**creator** | [**UserProject**](UserProject.md) |  | [readonly] 
**documentId** | **int** |  | [readonly] 
**status** | **string** |  | [readonly] 
**description** | **string** | Description of the visa | [optional] 
**comments** | [**OpenAPI\Server\Model\VisaComment**](VisaComment.md) |  | [readonly] 
**deadline** | [**\DateTime**](Date.md) |  | [optional] 
**createdAt** | **\DateTime** |  | [readonly] 
**updatedAt** | **\DateTime** |  | [readonly] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


