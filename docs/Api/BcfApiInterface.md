# OpenAPI\Server\Api\BcfApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createComment**](BcfApiInterface.md#createComment) | **POST** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments | Create a comment
[**createExtensionLabel**](BcfApiInterface.md#createExtensionLabel) | **POST** /bcf/2.1/projects/{projects_pk}/extension/label | Create a Label
[**createExtensionPriority**](BcfApiInterface.md#createExtensionPriority) | **POST** /bcf/2.1/projects/{projects_pk}/extension/priority | Create a Priority
[**createExtensionStage**](BcfApiInterface.md#createExtensionStage) | **POST** /bcf/2.1/projects/{projects_pk}/extension/stage | Create a Stage
[**createExtensionStatus**](BcfApiInterface.md#createExtensionStatus) | **POST** /bcf/2.1/projects/{projects_pk}/extension/status | Create a TopicStatus
[**createExtensionType**](BcfApiInterface.md#createExtensionType) | **POST** /bcf/2.1/projects/{projects_pk}/extension/type | Create a TopicType
[**createFullTopic**](BcfApiInterface.md#createFullTopic) | **POST** /bcf/2.1/projects/{projects_pk}/full-topic | Create a Topic with viewpoints and comments
[**createTopic**](BcfApiInterface.md#createTopic) | **POST** /bcf/2.1/projects/{projects_pk}/topics | Create a topic
[**createViewpoint**](BcfApiInterface.md#createViewpoint) | **POST** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints | Create a Viewpoint
[**deleteComment**](BcfApiInterface.md#deleteComment) | **DELETE** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Delete a comment
[**deleteExtensionLabel**](BcfApiInterface.md#deleteExtensionLabel) | **DELETE** /bcf/2.1/projects/{projects_pk}/extension/label/{id} | Delete a Label
[**deleteExtensionPriority**](BcfApiInterface.md#deleteExtensionPriority) | **DELETE** /bcf/2.1/projects/{projects_pk}/extension/priority/{id} | Delete a Priority
[**deleteExtensionStage**](BcfApiInterface.md#deleteExtensionStage) | **DELETE** /bcf/2.1/projects/{projects_pk}/extension/stage/{id} | Delete a Stage
[**deleteExtensionStatus**](BcfApiInterface.md#deleteExtensionStatus) | **DELETE** /bcf/2.1/projects/{projects_pk}/extension/status/{id} | Delete a TopicStatus
[**deleteExtensionType**](BcfApiInterface.md#deleteExtensionType) | **DELETE** /bcf/2.1/projects/{projects_pk}/extension/type/{id} | Delete a TopicType
[**deleteTopic**](BcfApiInterface.md#deleteTopic) | **DELETE** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Delete a topic
[**deleteViewpoint**](BcfApiInterface.md#deleteViewpoint) | **DELETE** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Delete a Viewpoint
[**downloadBcfExport**](BcfApiInterface.md#downloadBcfExport) | **GET** /bcf/2.1/projects/{id}/export | Export project&#39;s topics in bcf-xml format
[**fullUpdateBcfProject**](BcfApiInterface.md#fullUpdateBcfProject) | **PUT** /bcf/2.1/projects/{id} | Update all fields of a BCF project
[**fullUpdateComment**](BcfApiInterface.md#fullUpdateComment) | **PUT** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Update all fields of a comment
[**fullUpdateFullTopic**](BcfApiInterface.md#fullUpdateFullTopic) | **PUT** /bcf/2.1/projects/{projects_pk}/full-topic/{guid} | Update all fields of a topic
[**fullUpdateTopic**](BcfApiInterface.md#fullUpdateTopic) | **PUT** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Update all fields of a topic
[**fullUpdateViewpoint**](BcfApiInterface.md#fullUpdateViewpoint) | **PUT** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Update all fields of a Viewpoint
[**getBcfProject**](BcfApiInterface.md#getBcfProject) | **GET** /bcf/2.1/projects/{id} | Retrieve a BCF project
[**getBcfProjects**](BcfApiInterface.md#getBcfProjects) | **GET** /bcf/2.1/projects | Retrieve all BCF projects
[**getColorings**](BcfApiInterface.md#getColorings) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/coloring | Retrieve all colorings of a viewpoint
[**getComment**](BcfApiInterface.md#getComment) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Retrieve a comment
[**getComments**](BcfApiInterface.md#getComments) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments | Retrieve all comments
[**getDetailedExtensions**](BcfApiInterface.md#getDetailedExtensions) | **GET** /bcf/2.1/projects/{id}/detailed-extensions | Retrieve project detailed extensions
[**getExtensions**](BcfApiInterface.md#getExtensions) | **GET** /bcf/2.1/projects/{id}/extensions | Retrieve project extensions
[**getFullTopic**](BcfApiInterface.md#getFullTopic) | **GET** /bcf/2.1/projects/{projects_pk}/full-topic/{guid} | Retrieve a full topic
[**getFullTopics**](BcfApiInterface.md#getFullTopics) | **GET** /bcf/2.1/projects/{projects_pk}/full-topic | Retrieve all full topics
[**getSelections**](BcfApiInterface.md#getSelections) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/selection | Retrieve all selections of a viewpoint
[**getSnapshot**](BcfApiInterface.md#getSnapshot) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/snapshot | Retrieve the viewpoint&#39; snapshot
[**getTopic**](BcfApiInterface.md#getTopic) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Retrieve a topic
[**getTopicViewpoints**](BcfApiInterface.md#getTopicViewpoints) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/topic-viewpoints | Retrieve all viewpoints attached to the topic
[**getTopics**](BcfApiInterface.md#getTopics) | **GET** /bcf/2.1/projects/{projects_pk}/topics | Retrieve all topics
[**getUser**](BcfApiInterface.md#getUser) | **GET** /bcf/2.1/current-user | Get current user info
[**getViewpoint**](BcfApiInterface.md#getViewpoint) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Retrieve a Viewpoint
[**getViewpoints**](BcfApiInterface.md#getViewpoints) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints | Retrieve all Viewpoints of a topic
[**getVisibilities**](BcfApiInterface.md#getVisibilities) | **GET** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid}/visibility | Retrieve all visibilities of a viewpoint
[**importBcf**](BcfApiInterface.md#importBcf) | **POST** /bcf/2.1/projects/{id}/import | Import bcf-xml format into this project
[**updateBcfProject**](BcfApiInterface.md#updateBcfProject) | **PATCH** /bcf/2.1/projects/{id} | Update some fields of a BCF project
[**updateComment**](BcfApiInterface.md#updateComment) | **PATCH** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/comments/{guid} | Update some fields of a comment
[**updateExtensionLabel**](BcfApiInterface.md#updateExtensionLabel) | **PATCH** /bcf/2.1/projects/{projects_pk}/extension/label/{id} | Update a Label
[**updateExtensionPriority**](BcfApiInterface.md#updateExtensionPriority) | **PATCH** /bcf/2.1/projects/{projects_pk}/extension/priority/{id} | Update a Priority
[**updateExtensionStage**](BcfApiInterface.md#updateExtensionStage) | **PATCH** /bcf/2.1/projects/{projects_pk}/extension/stage/{id} | Update a Stage
[**updateExtensionStatus**](BcfApiInterface.md#updateExtensionStatus) | **PATCH** /bcf/2.1/projects/{projects_pk}/extension/status/{id} | Update a TopicStatus
[**updateExtensionType**](BcfApiInterface.md#updateExtensionType) | **PATCH** /bcf/2.1/projects/{projects_pk}/extension/type/{id} | Update a TopicType
[**updateFullTopic**](BcfApiInterface.md#updateFullTopic) | **PATCH** /bcf/2.1/projects/{projects_pk}/full-topic/{guid} | Update some fields of a topic
[**updateTopic**](BcfApiInterface.md#updateTopic) | **PATCH** /bcf/2.1/projects/{projects_pk}/topics/{guid} | Update some fields of a topic
[**updateViewpoint**](BcfApiInterface.md#updateViewpoint) | **PATCH** /bcf/2.1/projects/{projects_pk}/topics/{topics_guid}/viewpoints/{guid} | Update some fields of a Viewpoint


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\BcfApi:
        tags:
            - { name: "open_api_server.api", api: "bcf" }
    # ...
```

## **createComment**
> OpenAPI\Server\Model\Comment createComment($projectsPk, $topicsGuid, $commentRequest)

Create a comment

Create a comment  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#createComment
     */
    public function createComment(int $projectsPk, string $topicsGuid, ?CommentRequest $commentRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**| A unique integer value identifying this project. |
 **topicsGuid** | **string**|  |
 **commentRequest** | [**OpenAPI\Server\Model\CommentRequest**](../Model/CommentRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Comment**](../Model/Comment.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createExtensionLabel**
> OpenAPI\Server\Model\Label createExtensionLabel($projectsPk, $labelRequest)

Create a Label

This is not a standard route. Create a Label available for the project  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#createExtensionLabel
     */
    public function createExtensionLabel(int $projectsPk, LabelRequest $labelRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**|  |
 **labelRequest** | [**OpenAPI\Server\Model\LabelRequest**](../Model/LabelRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Label**](../Model/Label.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createExtensionPriority**
> OpenAPI\Server\Model\Priority createExtensionPriority($projectsPk, $priorityRequest)

Create a Priority

This is not a standard route. Create a Priority available for the project  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#createExtensionPriority
     */
    public function createExtensionPriority(int $projectsPk, PriorityRequest $priorityRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**|  |
 **priorityRequest** | [**OpenAPI\Server\Model\PriorityRequest**](../Model/PriorityRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Priority**](../Model/Priority.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createExtensionStage**
> OpenAPI\Server\Model\Stage createExtensionStage($projectsPk, $stageRequest)

Create a Stage

This is not a standard route. Create a Stage available for the project  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#createExtensionStage
     */
    public function createExtensionStage(int $projectsPk, StageRequest $stageRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**|  |
 **stageRequest** | [**OpenAPI\Server\Model\StageRequest**](../Model/StageRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Stage**](../Model/Stage.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createExtensionStatus**
> OpenAPI\Server\Model\TopicStatus createExtensionStatus($projectsPk, $topicStatusRequest)

Create a TopicStatus

This is not a standard route. Create a TopicStatus available for the project  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#createExtensionStatus
     */
    public function createExtensionStatus(int $projectsPk, TopicStatusRequest $topicStatusRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**|  |
 **topicStatusRequest** | [**OpenAPI\Server\Model\TopicStatusRequest**](../Model/TopicStatusRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\TopicStatus**](../Model/TopicStatus.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createExtensionType**
> OpenAPI\Server\Model\TopicType createExtensionType($projectsPk, $topicTypeRequest)

Create a TopicType

This is not a standard route. Create a TopicType available for the project  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#createExtensionType
     */
    public function createExtensionType(int $projectsPk, TopicTypeRequest $topicTypeRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**|  |
 **topicTypeRequest** | [**OpenAPI\Server\Model\TopicTypeRequest**](../Model/TopicTypeRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\TopicType**](../Model/TopicType.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createFullTopic**
> OpenAPI\Server\Model\FullTopic createFullTopic($projectsPk, $fullTopicRequest, $imgFormat)

Create a Topic with viewpoints and comments

This is not a standard route. You can send a topic, viewpoints and comments in a single call  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#createFullTopic
     */
    public function createFullTopic(int $projectsPk, FullTopicRequest $fullTopicRequest, ?string $imgFormat, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**|  |
 **fullTopicRequest** | [**OpenAPI\Server\Model\FullTopicRequest**](../Model/FullTopicRequest.md)|  |
 **imgFormat** | **string**| All snapshot_data will be returned as url instead of base64 | [optional]

### Return type

[**OpenAPI\Server\Model\FullTopic**](../Model/FullTopic.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createTopic**
> OpenAPI\Server\Model\Topic createTopic($projectsPk, $topicRequest)

Create a topic

Create a topic  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#createTopic
     */
    public function createTopic(int $projectsPk, TopicRequest $topicRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**|  |
 **topicRequest** | [**OpenAPI\Server\Model\TopicRequest**](../Model/TopicRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Topic**](../Model/Topic.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createViewpoint**
> OpenAPI\Server\Model\Viewpoint createViewpoint($projectsPk, $topicsGuid, $imgFormat, $viewpointRequest)

Create a Viewpoint

Create a Viewpoint  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#createViewpoint
     */
    public function createViewpoint(int $projectsPk, string $topicsGuid, ?string $imgFormat, ?ViewpointRequest $viewpointRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**|  |
 **topicsGuid** | **string**|  |
 **imgFormat** | **string**| All snapshot_data will be returned as url instead of base64 | [optional]
 **viewpointRequest** | [**OpenAPI\Server\Model\ViewpointRequest**](../Model/ViewpointRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Viewpoint**](../Model/Viewpoint.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteComment**
> deleteComment($guid, $projectsPk, $topicsGuid)

Delete a comment

Delete a comment  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#deleteComment
     */
    public function deleteComment(string $guid, int $projectsPk, string $topicsGuid, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**| A unique integer value identifying this project. |
 **topicsGuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteExtensionLabel**
> deleteExtensionLabel($id, $projectsPk)

Delete a Label

This is not a standard route. Delete a Label. Topics using this label won't be deleted   Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#deleteExtensionLabel
     */
    public function deleteExtensionLabel(int $id, int $projectsPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this label. |
 **projectsPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteExtensionPriority**
> deleteExtensionPriority($id, $projectsPk)

Delete a Priority

This is not a standard route. Delete a Priority. Topics using this priority won't be deleted   Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#deleteExtensionPriority
     */
    public function deleteExtensionPriority(int $id, int $projectsPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this priority. |
 **projectsPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteExtensionStage**
> deleteExtensionStage($id, $projectsPk)

Delete a Stage

This is not a standard route. Delete a Stage. Topics using this stage won't be deleted   Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#deleteExtensionStage
     */
    public function deleteExtensionStage(int $id, int $projectsPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this stage. |
 **projectsPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteExtensionStatus**
> deleteExtensionStatus($id, $projectsPk)

Delete a TopicStatus

This is not a standard route. Delete a TopicStatus. Topics using this status won't be deleted   Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#deleteExtensionStatus
     */
    public function deleteExtensionStatus(int $id, int $projectsPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this topic status. |
 **projectsPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteExtensionType**
> deleteExtensionType($id, $projectsPk)

Delete a TopicType

This is not a standard route. Delete a TopicType. Topics using this type won't be deleted  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#deleteExtensionType
     */
    public function deleteExtensionType(int $id, int $projectsPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this topic type. |
 **projectsPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteTopic**
> deleteTopic($guid, $projectsPk)

Delete a topic

Delete a topic  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#deleteTopic
     */
    public function deleteTopic(string $guid, int $projectsPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteViewpoint**
> deleteViewpoint($guid, $projectsPk, $topicsGuid, $imgFormat)

Delete a Viewpoint

This is not a standard route. Delete a Viewpoint  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#deleteViewpoint
     */
    public function deleteViewpoint(string $guid, int $projectsPk, string $topicsGuid, ?string $imgFormat, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |
 **topicsGuid** | **string**|  |
 **imgFormat** | **string**| All snapshot_data will be returned as url instead of base64 | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **downloadBcfExport**
> UploadedFile downloadBcfExport($id, $format, $topics)

Export project's topics in bcf-xml format

This is not a standard route. Export project's topics in bcf-xml format  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#downloadBcfExport
     */
    public function downloadBcfExport(int $id, ?string $format, ?string $topics, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this project. |
 **format** | **string**| topic format to export, comma separated. Default &#x3D; standard | [optional]
 **topics** | **string**| topic guids to export, comma separated. Default &#x3D; all | [optional]

### Return type

**UploadedFile**

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **fullUpdateBcfProject**
> OpenAPI\Server\Model\BcfProject fullUpdateBcfProject($id, $bcfProjectRequest)

Update all fields of a BCF project

Update all fields of a BCF project  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#fullUpdateBcfProject
     */
    public function fullUpdateBcfProject(int $id, BcfProjectRequest $bcfProjectRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this project. |
 **bcfProjectRequest** | [**OpenAPI\Server\Model\BcfProjectRequest**](../Model/BcfProjectRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\BcfProject**](../Model/BcfProject.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **fullUpdateComment**
> OpenAPI\Server\Model\Comment fullUpdateComment($guid, $projectsPk, $topicsGuid, $commentRequest)

Update all fields of a comment

Update all fields of a comment  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#fullUpdateComment
     */
    public function fullUpdateComment(string $guid, int $projectsPk, string $topicsGuid, ?CommentRequest $commentRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**| A unique integer value identifying this project. |
 **topicsGuid** | **string**|  |
 **commentRequest** | [**OpenAPI\Server\Model\CommentRequest**](../Model/CommentRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Comment**](../Model/Comment.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **fullUpdateFullTopic**
> OpenAPI\Server\Model\FullTopic fullUpdateFullTopic($guid, $projectsPk, $fullTopicRequest, $imgFormat)

Update all fields of a topic

This is not a standard route. You can update topic, viewpoints and comment is a signle call  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#fullUpdateFullTopic
     */
    public function fullUpdateFullTopic(string $guid, int $projectsPk, FullTopicRequest $fullTopicRequest, ?string $imgFormat, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |
 **fullTopicRequest** | [**OpenAPI\Server\Model\FullTopicRequest**](../Model/FullTopicRequest.md)|  |
 **imgFormat** | **string**| All snapshot_data will be returned as url instead of base64 | [optional]

### Return type

[**OpenAPI\Server\Model\FullTopic**](../Model/FullTopic.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **fullUpdateTopic**
> OpenAPI\Server\Model\Topic fullUpdateTopic($guid, $projectsPk, $topicRequest)

Update all fields of a topic

Update all fields of a topic  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#fullUpdateTopic
     */
    public function fullUpdateTopic(string $guid, int $projectsPk, TopicRequest $topicRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |
 **topicRequest** | [**OpenAPI\Server\Model\TopicRequest**](../Model/TopicRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Topic**](../Model/Topic.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **fullUpdateViewpoint**
> OpenAPI\Server\Model\Viewpoint fullUpdateViewpoint($guid, $projectsPk, $topicsGuid, $imgFormat, $viewpointRequest)

Update all fields of a Viewpoint

This is not a standard route. Update all fields of a Viewpoint  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#fullUpdateViewpoint
     */
    public function fullUpdateViewpoint(string $guid, int $projectsPk, string $topicsGuid, ?string $imgFormat, ?ViewpointRequest $viewpointRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |
 **topicsGuid** | **string**|  |
 **imgFormat** | **string**| All snapshot_data will be returned as url instead of base64 | [optional]
 **viewpointRequest** | [**OpenAPI\Server\Model\ViewpointRequest**](../Model/ViewpointRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Viewpoint**](../Model/Viewpoint.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getBcfProject**
> OpenAPI\Server\Model\BcfProject getBcfProject($id)

Retrieve a BCF project

Retrieve a BCF project  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getBcfProject
     */
    public function getBcfProject(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\BcfProject**](../Model/BcfProject.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getBcfProjects**
> OpenAPI\Server\Model\BcfProject getBcfProjects()

Retrieve all BCF projects

Retrieve all BCF projects  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getBcfProjects
     */
    public function getBcfProjects(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\BcfProject**](../Model/BcfProject.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getColorings**
> OpenAPI\Server\Model\Coloring getColorings($guid, $projectsPk, $topicsGuid)

Retrieve all colorings of a viewpoint

Retrieve all colorings of a viewpoint  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getColorings
     */
    public function getColorings(string $guid, int $projectsPk, string $topicsGuid, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |
 **topicsGuid** | **string**|  |

### Return type

[**OpenAPI\Server\Model\Coloring**](../Model/Coloring.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getComment**
> OpenAPI\Server\Model\Comment getComment($guid, $projectsPk, $topicsGuid)

Retrieve a comment

Retrieve a comment  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getComment
     */
    public function getComment(string $guid, int $projectsPk, string $topicsGuid, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**| A unique integer value identifying this project. |
 **topicsGuid** | **string**|  |

### Return type

[**OpenAPI\Server\Model\Comment**](../Model/Comment.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getComments**
> OpenAPI\Server\Model\Comment getComments($projectsPk, $topicsGuid)

Retrieve all comments

Retrieve all comments  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getComments
     */
    public function getComments(int $projectsPk, string $topicsGuid, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**| A unique integer value identifying this project. |
 **topicsGuid** | **string**|  |

### Return type

[**OpenAPI\Server\Model\Comment**](../Model/Comment.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getDetailedExtensions**
> OpenAPI\Server\Model\DetailedExtensions getDetailedExtensions($id)

Retrieve project detailed extensions

This is not a standard route. Retrieve project detailed extensions  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getDetailedExtensions
     */
    public function getDetailedExtensions(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\DetailedExtensions**](../Model/DetailedExtensions.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getExtensions**
> OpenAPI\Server\Model\Extensions getExtensions($id)

Retrieve project extensions

Retrieve project extensions  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getExtensions
     */
    public function getExtensions(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Extensions**](../Model/Extensions.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getFullTopic**
> OpenAPI\Server\Model\FullTopic getFullTopic($guid, $projectsPk, $imgFormat)

Retrieve a full topic

This is not a standard route. It responds with a topic, its viewpoints and its comments  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getFullTopic
     */
    public function getFullTopic(string $guid, int $projectsPk, ?string $imgFormat, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |
 **imgFormat** | **string**| All snapshot_data will be returned as url instead of base64 | [optional]

### Return type

[**OpenAPI\Server\Model\FullTopic**](../Model/FullTopic.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getFullTopics**
> OpenAPI\Server\Model\FullTopic getFullTopics($projectsPk, $format, $ifcs, $imgFormat, $models)

Retrieve all full topics

This is not a standard route. It responds with all topics, their viewpoints and their comments  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getFullTopics
     */
    public function getFullTopics(int $projectsPk, ?string $format, ?array $ifcs, ?string $imgFormat, ?array $models, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**|  |
 **format** | **string**|  | [optional]
 **ifcs** | [**int**](../Model/int.md)|  | [optional]
 **imgFormat** | **string**| All snapshot_data will be returned as url instead of base64 | [optional]
 **models** | [**int**](../Model/int.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\FullTopic**](../Model/FullTopic.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSelections**
> OpenAPI\Server\Model\Component getSelections($guid, $projectsPk, $topicsGuid)

Retrieve all selections of a viewpoint

Retrieve all selections of a viewpoint  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getSelections
     */
    public function getSelections(string $guid, int $projectsPk, string $topicsGuid, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |
 **topicsGuid** | **string**|  |

### Return type

[**OpenAPI\Server\Model\Component**](../Model/Component.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSnapshot**
> UploadedFile getSnapshot($guid, $projectsPk, $topicsGuid)

Retrieve the viewpoint' snapshot

Retrieve the viewpoint' snapshot  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getSnapshot
     */
    public function getSnapshot(string $guid, int $projectsPk, string $topicsGuid, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |
 **topicsGuid** | **string**|  |

### Return type

**UploadedFile**

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getTopic**
> OpenAPI\Server\Model\Topic getTopic($guid, $projectsPk)

Retrieve a topic

Retrieve a topic  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getTopic
     */
    public function getTopic(string $guid, int $projectsPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |

### Return type

[**OpenAPI\Server\Model\Topic**](../Model/Topic.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getTopicViewpoints**
> OpenAPI\Server\Model\Viewpoint getTopicViewpoints($projectsPk, $topicsGuid, $imgFormat)

Retrieve all viewpoints attached to the topic

This is not a standard route. It returns all viewpoints of the topic that are not attached to a comment.  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getTopicViewpoints
     */
    public function getTopicViewpoints(int $projectsPk, string $topicsGuid, ?string $imgFormat, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**|  |
 **topicsGuid** | **string**|  |
 **imgFormat** | **string**| All snapshot_data will be returned as url instead of base64 | [optional]

### Return type

[**OpenAPI\Server\Model\Viewpoint**](../Model/Viewpoint.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getTopics**
> OpenAPI\Server\Model\Topic getTopics($projectsPk, $format, $ifcs, $models)

Retrieve all topics

Retrieve all topics  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getTopics
     */
    public function getTopics(int $projectsPk, ?string $format, ?array $ifcs, ?array $models, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**|  |
 **format** | **string**|  | [optional]
 **ifcs** | [**int**](../Model/int.md)|  | [optional]
 **models** | [**int**](../Model/int.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Topic**](../Model/Topic.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getUser**
> OpenAPI\Server\Model\SelfBcfUser getUser()

Get current user info

Get current user info. If request comes from an App, the response is always:{    \"id\": None,    \"name\": None,    \"is_client\": True,}  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getUser
     */
    public function getUser(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\SelfBcfUser**](../Model/SelfBcfUser.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getViewpoint**
> OpenAPI\Server\Model\Viewpoint getViewpoint($guid, $projectsPk, $topicsGuid, $imgFormat)

Retrieve a Viewpoint

Retrieve a Viewpoint  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getViewpoint
     */
    public function getViewpoint(string $guid, int $projectsPk, string $topicsGuid, ?string $imgFormat, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |
 **topicsGuid** | **string**|  |
 **imgFormat** | **string**| All snapshot_data will be returned as url instead of base64 | [optional]

### Return type

[**OpenAPI\Server\Model\Viewpoint**](../Model/Viewpoint.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getViewpoints**
> OpenAPI\Server\Model\Viewpoint getViewpoints($projectsPk, $topicsGuid, $imgFormat)

Retrieve all Viewpoints of a topic

Retrieve all Viewpoints of a topic  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getViewpoints
     */
    public function getViewpoints(int $projectsPk, string $topicsGuid, ?string $imgFormat, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectsPk** | **int**|  |
 **topicsGuid** | **string**|  |
 **imgFormat** | **string**| All snapshot_data will be returned as url instead of base64 | [optional]

### Return type

[**OpenAPI\Server\Model\Viewpoint**](../Model/Viewpoint.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getVisibilities**
> OpenAPI\Server\Model\Visibility getVisibilities($guid, $projectsPk, $topicsGuid)

Retrieve all visibilities of a viewpoint

Retrieve all visibilities of a viewpoint  Required scopes: bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#getVisibilities
     */
    public function getVisibilities(string $guid, int $projectsPk, string $topicsGuid, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |
 **topicsGuid** | **string**|  |

### Return type

[**OpenAPI\Server\Model\Visibility**](../Model/Visibility.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **importBcf**
> importBcf($id, $name)

Import bcf-xml format into this project

This is not a standard route. Import bcf-xml format into this project. If there are guid conflict, an error will be raised. If there are index conflicts, indexes of the imported file will be overriden with a new index. Author and assigned_to fields will be linked to existing users in the project. If no matching user are found, fields will be emptied. Only BCF 2.1 is supported  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#importBcf
     */
    public function importBcf(int $id, string $name, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this project. |
 **name** | **string**| Name of the project |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateBcfProject**
> OpenAPI\Server\Model\BcfProject updateBcfProject($id, $patchedBcfProjectRequest)

Update some fields of a BCF project

Update some fields of a BCF project  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#updateBcfProject
     */
    public function updateBcfProject(int $id, ?PatchedBcfProjectRequest $patchedBcfProjectRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this project. |
 **patchedBcfProjectRequest** | [**OpenAPI\Server\Model\PatchedBcfProjectRequest**](../Model/PatchedBcfProjectRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\BcfProject**](../Model/BcfProject.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateComment**
> OpenAPI\Server\Model\Comment updateComment($guid, $projectsPk, $topicsGuid, $patchedCommentRequest)

Update some fields of a comment

Update some fields of a comment  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#updateComment
     */
    public function updateComment(string $guid, int $projectsPk, string $topicsGuid, ?PatchedCommentRequest $patchedCommentRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**| A unique integer value identifying this project. |
 **topicsGuid** | **string**|  |
 **patchedCommentRequest** | [**OpenAPI\Server\Model\PatchedCommentRequest**](../Model/PatchedCommentRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Comment**](../Model/Comment.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateExtensionLabel**
> OpenAPI\Server\Model\Label updateExtensionLabel($id, $projectsPk, $patchedLabelRequest)

Update a Label

This is not a standard route. Update a Label. All topics using this label will be updated  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#updateExtensionLabel
     */
    public function updateExtensionLabel(int $id, int $projectsPk, ?PatchedLabelRequest $patchedLabelRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this label. |
 **projectsPk** | **int**|  |
 **patchedLabelRequest** | [**OpenAPI\Server\Model\PatchedLabelRequest**](../Model/PatchedLabelRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Label**](../Model/Label.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateExtensionPriority**
> OpenAPI\Server\Model\Priority updateExtensionPriority($id, $projectsPk, $patchedPriorityRequest)

Update a Priority

This is not a standard route. Update a Priority. All topics using this priority will be updated  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#updateExtensionPriority
     */
    public function updateExtensionPriority(int $id, int $projectsPk, ?PatchedPriorityRequest $patchedPriorityRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this priority. |
 **projectsPk** | **int**|  |
 **patchedPriorityRequest** | [**OpenAPI\Server\Model\PatchedPriorityRequest**](../Model/PatchedPriorityRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Priority**](../Model/Priority.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateExtensionStage**
> OpenAPI\Server\Model\Stage updateExtensionStage($id, $projectsPk, $patchedStageRequest)

Update a Stage

This is not a standard route. Update a Stage. All topics using this stage will be updated  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#updateExtensionStage
     */
    public function updateExtensionStage(int $id, int $projectsPk, ?PatchedStageRequest $patchedStageRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this stage. |
 **projectsPk** | **int**|  |
 **patchedStageRequest** | [**OpenAPI\Server\Model\PatchedStageRequest**](../Model/PatchedStageRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Stage**](../Model/Stage.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateExtensionStatus**
> OpenAPI\Server\Model\TopicStatus updateExtensionStatus($id, $projectsPk, $patchedTopicStatusRequest)

Update a TopicStatus

This is not a standard route. Update a TopicStatus. All topics using this status will be updated  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#updateExtensionStatus
     */
    public function updateExtensionStatus(int $id, int $projectsPk, ?PatchedTopicStatusRequest $patchedTopicStatusRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this topic status. |
 **projectsPk** | **int**|  |
 **patchedTopicStatusRequest** | [**OpenAPI\Server\Model\PatchedTopicStatusRequest**](../Model/PatchedTopicStatusRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\TopicStatus**](../Model/TopicStatus.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateExtensionType**
> OpenAPI\Server\Model\TopicType updateExtensionType($id, $projectsPk, $patchedTopicTypeRequest)

Update a TopicType

This is not a standard route. Update a TopicType. All topics using this type will be updated  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#updateExtensionType
     */
    public function updateExtensionType(int $id, int $projectsPk, ?PatchedTopicTypeRequest $patchedTopicTypeRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this topic type. |
 **projectsPk** | **int**|  |
 **patchedTopicTypeRequest** | [**OpenAPI\Server\Model\PatchedTopicTypeRequest**](../Model/PatchedTopicTypeRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\TopicType**](../Model/TopicType.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateFullTopic**
> OpenAPI\Server\Model\FullTopic updateFullTopic($guid, $projectsPk, $imgFormat, $patchedFullTopicRequest)

Update some fields of a topic

This is not a standard route. You can update topic, viewpoints and comment is a signle call  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#updateFullTopic
     */
    public function updateFullTopic(string $guid, int $projectsPk, ?string $imgFormat, ?PatchedFullTopicRequest $patchedFullTopicRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |
 **imgFormat** | **string**| All snapshot_data will be returned as url instead of base64 | [optional]
 **patchedFullTopicRequest** | [**OpenAPI\Server\Model\PatchedFullTopicRequest**](../Model/PatchedFullTopicRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\FullTopic**](../Model/FullTopic.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateTopic**
> OpenAPI\Server\Model\Topic updateTopic($guid, $projectsPk, $patchedTopicRequest)

Update some fields of a topic

Update some fields of a topic  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#updateTopic
     */
    public function updateTopic(string $guid, int $projectsPk, ?PatchedTopicRequest $patchedTopicRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |
 **patchedTopicRequest** | [**OpenAPI\Server\Model\PatchedTopicRequest**](../Model/PatchedTopicRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Topic**](../Model/Topic.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateViewpoint**
> OpenAPI\Server\Model\Viewpoint updateViewpoint($guid, $projectsPk, $topicsGuid, $imgFormat, $patchedViewpointRequest)

Update some fields of a Viewpoint

This is not a standard route. Update some fields of a Viewpoint  Required scopes: bcf:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BcfApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\BcfApiInterface;

class BcfApi implements BcfApiInterface
{

    /**
     * Configure API key authorization: ApiKey
     */
    public function setApiKey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure OAuth2 access token for authorization: BIMData_Connect
     */
    public function setBIMData_Connect($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    /**
     * Configure API key authorization: Bearer
     */
    public function setBearer($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of BcfApiInterface#updateViewpoint
     */
    public function updateViewpoint(string $guid, int $projectsPk, string $topicsGuid, ?string $imgFormat, ?PatchedViewpointRequest $patchedViewpointRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guid** | **string**|  |
 **projectsPk** | **int**|  |
 **topicsGuid** | **string**|  |
 **imgFormat** | **string**| All snapshot_data will be returned as url instead of base64 | [optional]
 **patchedViewpointRequest** | [**OpenAPI\Server\Model\PatchedViewpointRequest**](../Model/PatchedViewpointRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Viewpoint**](../Model/Viewpoint.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

