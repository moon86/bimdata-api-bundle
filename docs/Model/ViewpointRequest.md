# ViewpointRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** |  | [optional] 
**guid** | **string** |  | [optional] 
**originatingSystem** | **string** | Name of the system in which the viewpoint is originated | [optional] 
**authoringToolId** | **string** | System specific identifier of the viewpoint in the originating BIM tool | [optional] 
**orthogonalCamera** | [**OpenAPI\Server\Model\PatchedViewpointRequestOrthogonalCamera**](PatchedViewpointRequestOrthogonalCamera.md) |  | [optional] 
**perspectiveCamera** | [**OpenAPI\Server\Model\PatchedViewpointRequestPerspectiveCamera**](PatchedViewpointRequestPerspectiveCamera.md) |  | [optional] 
**lines** | [**OpenAPI\Server\Model\LineRequest**](LineRequest.md) |  | [optional] 
**clippingPlanes** | [**OpenAPI\Server\Model\ClippingPlaneRequest**](ClippingPlaneRequest.md) |  | [optional] 
**snapshot** | [**OpenAPI\Server\Model\PatchedViewpointRequestSnapshot**](PatchedViewpointRequestSnapshot.md) |  | [optional] 
**components** | [**OpenAPI\Server\Model\PatchedViewpointRequestComponents**](PatchedViewpointRequestComponents.md) |  | [optional] 
**pins** | [**OpenAPI\Server\Model\PinRequest**](PinRequest.md) | Non standard field. Pins (or markers/annotations) are points of interest | [optional] 
**tempId** | **int** | Only used when using POST on the full-topic route to bind viewpoint with comment | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


