# OpenAPI\Server\Api\SsoApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptInvitation**](SsoApiInterface.md#acceptInvitation) | **POST** /identity-provider/invitation/{id}/accept | Accept an invitation
[**deleteUser**](SsoApiInterface.md#deleteUser) | **DELETE** /identity-provider/user | Delete user from BIMData
[**denyInvitation**](SsoApiInterface.md#denyInvitation) | **POST** /identity-provider/invitation/{id}/deny | Deny an invitation
[**getInvitation**](SsoApiInterface.md#getInvitation) | **GET** /identity-provider/invitation/{id} | Retrieve an invitation
[**getInvitations**](SsoApiInterface.md#getInvitations) | **GET** /identity-provider/invitation | Retrieve all invitations


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\SsoApi:
        tags:
            - { name: "open_api_server.api", api: "sso" }
    # ...
```

## **acceptInvitation**
> acceptInvitation($id)

Accept an invitation

If the user already exists, s·he is added to the cloud and projet. If not, we wait their first connection to add them.  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SsoApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\SsoApiInterface;

class SsoApi implements SsoApiInterface
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
     * Implementation of SsoApiInterface#acceptInvitation
     */
    public function acceptInvitation(int $id, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this invitation. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteUser**
> deleteUser()

Delete user from BIMData

Delete the user and all clouds where the user is alone

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SsoApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\SsoApiInterface;

class SsoApi implements SsoApiInterface
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
     * Implementation of SsoApiInterface#deleteUser
     */
    public function deleteUser(int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **denyInvitation**
> denyInvitation($id)

Deny an invitation

The invitation status change to DENIED and the user is not added to the cloud. You can accept an invitation previously denied  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SsoApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\SsoApiInterface;

class SsoApi implements SsoApiInterface
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
     * Implementation of SsoApiInterface#denyInvitation
     */
    public function denyInvitation(int $id, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this invitation. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getInvitation**
> OpenAPI\Server\Model\Invitation getInvitation($id)

Retrieve an invitation

Retrieve all invitations of your identity provider  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SsoApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\SsoApiInterface;

class SsoApi implements SsoApiInterface
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
     * Implementation of SsoApiInterface#getInvitation
     */
    public function getInvitation(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this invitation. |

### Return type

[**OpenAPI\Server\Model\Invitation**](../Model/Invitation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getInvitations**
> OpenAPI\Server\Model\Invitation getInvitations($status)

Retrieve all invitations

Retrieve all invitations of your identity provider  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SsoApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\SsoApiInterface;

class SsoApi implements SsoApiInterface
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
     * Implementation of SsoApiInterface#getInvitations
     */
    public function getInvitations(?string $status, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| A: Accepted         D: Denied         P: Pending | [optional]

### Return type

[**OpenAPI\Server\Model\Invitation**](../Model/Invitation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

