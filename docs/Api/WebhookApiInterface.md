# OpenAPI\Server\Api\WebhookApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebHook**](WebhookApiInterface.md#createWebHook) | **POST** /cloud/{cloud_pk}/webhook | Create a new Webhook
[**deleteWebHook**](WebhookApiInterface.md#deleteWebHook) | **DELETE** /cloud/{cloud_pk}/webhook/{id} | Delete a webhook
[**getWebHook**](WebhookApiInterface.md#getWebHook) | **GET** /cloud/{cloud_pk}/webhook/{id} | Retrieve one configured webhook
[**getWebHooks**](WebhookApiInterface.md#getWebHooks) | **GET** /cloud/{cloud_pk}/webhook | Retrieve all configured webhooks
[**pingWebHook**](WebhookApiInterface.md#pingWebHook) | **POST** /cloud/{cloud_pk}/webhook/{id}/ping | Test a webhook
[**updateWebHook**](WebhookApiInterface.md#updateWebHook) | **PATCH** /cloud/{cloud_pk}/webhook/{id} | Update some field of a webhook


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\WebhookApi:
        tags:
            - { name: "open_api_server.api", api: "webhook" }
    # ...
```

## **createWebHook**
> OpenAPI\Server\Model\WebHook createWebHook($cloudPk, $webHookRequest)

Create a new Webhook

Create a new Webhook  Required scopes: webhook:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/WebhookApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\WebhookApiInterface;

class WebhookApi implements WebhookApiInterface
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
     * Implementation of WebhookApiInterface#createWebHook
     */
    public function createWebHook(int $cloudPk, WebHookRequest $webHookRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **webHookRequest** | [**OpenAPI\Server\Model\WebHookRequest**](../Model/WebHookRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\WebHook**](../Model/WebHook.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteWebHook**
> deleteWebHook($cloudPk, $id)

Delete a webhook

Delete a webhook  Required scopes: webhook:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/WebhookApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\WebhookApiInterface;

class WebhookApi implements WebhookApiInterface
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
     * Implementation of WebhookApiInterface#deleteWebHook
     */
    public function deleteWebHook(int $cloudPk, int $id, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this web hook. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getWebHook**
> OpenAPI\Server\Model\WebHook getWebHook($cloudPk, $id)

Retrieve one configured webhook

Retrieve one configured webhook  Required scopes: webhook:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/WebhookApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\WebhookApiInterface;

class WebhookApi implements WebhookApiInterface
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
     * Implementation of WebhookApiInterface#getWebHook
     */
    public function getWebHook(int $cloudPk, int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this web hook. |

### Return type

[**OpenAPI\Server\Model\WebHook**](../Model/WebHook.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getWebHooks**
> OpenAPI\Server\Model\WebHook getWebHooks($cloudPk)

Retrieve all configured webhooks

Retrieve all configured webhooks  Required scopes: webhook:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/WebhookApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\WebhookApiInterface;

class WebhookApi implements WebhookApiInterface
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
     * Implementation of WebhookApiInterface#getWebHooks
     */
    public function getWebHooks(int $cloudPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |

### Return type

[**OpenAPI\Server\Model\WebHook**](../Model/WebHook.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **pingWebHook**
> OpenAPI\Server\Model\WebHook pingWebHook($cloudPk, $id, $webHookRequest)

Test a webhook

Trigger a Ping Event sending {\"ok\": true} to the webhook URL. Useful to test your app  Required scopes: webhook:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/WebhookApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\WebhookApiInterface;

class WebhookApi implements WebhookApiInterface
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
     * Implementation of WebhookApiInterface#pingWebHook
     */
    public function pingWebHook(int $cloudPk, int $id, WebHookRequest $webHookRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this web hook. |
 **webHookRequest** | [**OpenAPI\Server\Model\WebHookRequest**](../Model/WebHookRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\WebHook**](../Model/WebHook.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateWebHook**
> OpenAPI\Server\Model\WebHook updateWebHook($cloudPk, $id, $patchedWebHookRequest)

Update some field of a webhook

Update some field of a webhook  Required scopes: webhook:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/WebhookApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\WebhookApiInterface;

class WebhookApi implements WebhookApiInterface
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
     * Implementation of WebhookApiInterface#updateWebHook
     */
    public function updateWebHook(int $cloudPk, int $id, ?PatchedWebHookRequest $patchedWebHookRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this web hook. |
 **patchedWebHookRequest** | [**OpenAPI\Server\Model\PatchedWebHookRequest**](../Model/PatchedWebHookRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\WebHook**](../Model/WebHook.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

