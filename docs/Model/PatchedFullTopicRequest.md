# PatchedFullTopicRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**guid** | **string** |  | [optional] 
**creationDate** | **\DateTime** |  | [optional] 
**creationAuthor** | **string** |  | [optional] 
**modifiedAuthor** | **string** |  | [optional] 
**title** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**referenceLinks** | **string** |  | [optional] 
**ifcs** | **int** | DEPRECATED: Use &#39;models&#39; instead | [optional] 
**models** | **int** |  | [optional] 
**labels** | **string** |  | [optional] 
**topicType** | **string** |  | [optional] 
**topicStatus** | **string** |  | [optional] 
**stage** | **string** |  | [optional] 
**priority** | **string** |  | [optional] 
**index** | **int** |  | [optional] 
**assignedTo** | **string** |  | [optional] 
**format** | **string** | The BCF data structure may be used for other purposes than BCF Topics. (Storing coordinates, a viewpoint, a list of objecs, etc)         The default value is \&quot;standard\&quot;.         If you want to use the BCF routes to store custom data not related to a BCF Topic, you must set this value to something else.         You must add a query string filter if you want to fetch topics with a non \&quot;standard\&quot; format. | [optional] 
**dueDate** | **\DateTime** |  | [optional] 
**comments** | [**OpenAPI\Server\Model\CommentRequest**](CommentRequest.md) |  | [optional] 
**viewpoints** | [**OpenAPI\Server\Model\ViewpointRequest**](ViewpointRequest.md) |  | [optional] 
**project** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


