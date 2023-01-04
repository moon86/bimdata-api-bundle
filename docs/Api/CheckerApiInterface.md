# OpenAPI\Server\Api\CheckerApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createChecker**](CheckerApiInterface.md#createChecker) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker | Create a checker to a model
[**createCheckerResult**](CheckerApiInterface.md#createCheckerResult) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result | Create a CheckerResult
[**createCheckplan**](CheckerApiInterface.md#createCheckplan) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan | Create a Checkplan
[**createRule**](CheckerApiInterface.md#createRule) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule | Create a Rule
[**createRuleComponent**](CheckerApiInterface.md#createRuleComponent) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent | Create a RuleComponent
[**createRuleset**](CheckerApiInterface.md#createRuleset) | **POST** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset | Create a Ruleset
[**deleteChecker**](CheckerApiInterface.md#deleteChecker) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{id} | Delete a checker of a model
[**deleteCheckerResult**](CheckerApiInterface.md#deleteCheckerResult) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result/{id} | Delete a CheckerResult
[**deleteCheckplan**](CheckerApiInterface.md#deleteCheckplan) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{id} | Delete a Checkplan
[**deleteRule**](CheckerApiInterface.md#deleteRule) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{id} | Delete a Rule
[**deleteRuleComponent**](CheckerApiInterface.md#deleteRuleComponent) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent/{id} | Delete a RuleComponent
[**deleteRuleset**](CheckerApiInterface.md#deleteRuleset) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{id} | Delete a Ruleset
[**getChecker**](CheckerApiInterface.md#getChecker) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{id} | Retrieve a checker of a model
[**getCheckerResult**](CheckerApiInterface.md#getCheckerResult) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result/{id} | Retrieve one CheckerResult
[**getCheckerResults**](CheckerApiInterface.md#getCheckerResults) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result | Retrieve all CheckerResults
[**getCheckers**](CheckerApiInterface.md#getCheckers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker | Retrieve all checkers of a model
[**getCheckplan**](CheckerApiInterface.md#getCheckplan) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{id} | Retrieve one Checkplan
[**getCheckplans**](CheckerApiInterface.md#getCheckplans) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan | Retrieve all Checkplans
[**getRule**](CheckerApiInterface.md#getRule) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{id} | Retrieve one Rule
[**getRuleComponent**](CheckerApiInterface.md#getRuleComponent) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent/{id} | Retrieve one RuleComponent
[**getRuleComponents**](CheckerApiInterface.md#getRuleComponents) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent | Retrieve all RuleComponents
[**getRules**](CheckerApiInterface.md#getRules) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule | Retrieve all Rules
[**getRuleset**](CheckerApiInterface.md#getRuleset) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{id} | Retrieve one Ruleset
[**getRulesets**](CheckerApiInterface.md#getRulesets) | **GET** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset | Retrieve all Rulesets
[**launchNewCheck**](CheckerApiInterface.md#launchNewCheck) | **POST** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{id}/launch-check | Launch a new check on the model
[**updateChecker**](CheckerApiInterface.md#updateChecker) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{id} | Update some fields of a checker of a model
[**updateCheckerResult**](CheckerApiInterface.md#updateCheckerResult) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/model/{model_pk}/checker/{checker_pk}/result/{id} | Update some fields of a CheckerResult
[**updateCheckplan**](CheckerApiInterface.md#updateCheckplan) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{id} | Update some fields of a Checkplan
[**updateRule**](CheckerApiInterface.md#updateRule) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{id} | Update some fields of a Rule
[**updateRuleComponent**](CheckerApiInterface.md#updateRuleComponent) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{ruleset_pk}/rule/{rule_pk}/rulecomponent/{id} | Update some fields of a RuleComponent
[**updateRuleset**](CheckerApiInterface.md#updateRuleset) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/checkplan/{check_plan_pk}/ruleset/{id} | Update some fields of a Ruleset


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\CheckerApi:
        tags:
            - { name: "open_api_server.api", api: "checker" }
    # ...
```

## **createChecker**
> OpenAPI\Server\Model\IfcChecker createChecker($cloudPk, $modelPk, $projectPk, $ifcCheckerRequest)

Create a checker to a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:write, ifc:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#createChecker
     */
    public function createChecker(int $cloudPk, int $modelPk, int $projectPk, ?IfcCheckerRequest $ifcCheckerRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **ifcCheckerRequest** | [**OpenAPI\Server\Model\IfcCheckerRequest**](../Model/IfcCheckerRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\IfcChecker**](../Model/IfcChecker.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createCheckerResult**
> OpenAPI\Server\Model\CheckerResult createCheckerResult($checkerPk, $cloudPk, $modelPk, $projectPk, $checkerResultRequest)

Create a CheckerResult

TCreate a CheckerResult  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#createCheckerResult
     */
    public function createCheckerResult(int $checkerPk, int $cloudPk, int $modelPk, int $projectPk, ?CheckerResultRequest $checkerResultRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkerPk** | **int**| A unique integer value identifying this ifc checker. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **checkerResultRequest** | [**OpenAPI\Server\Model\CheckerResultRequest**](../Model/CheckerResultRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\CheckerResult**](../Model/CheckerResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createCheckplan**
> OpenAPI\Server\Model\CheckPlan createCheckplan($cloudPk, $projectPk, $checkPlanRequest)

Create a Checkplan

TCreate a Checkplan  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#createCheckplan
     */
    public function createCheckplan(int $cloudPk, int $projectPk, CheckPlanRequest $checkPlanRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **checkPlanRequest** | [**OpenAPI\Server\Model\CheckPlanRequest**](../Model/CheckPlanRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\CheckPlan**](../Model/CheckPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createRule**
> OpenAPI\Server\Model\Rule createRule($checkPlanPk, $cloudPk, $projectPk, $rulesetPk, $ruleRequest)

Create a Rule

TCreate a Rule  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#createRule
     */
    public function createRule(int $checkPlanPk, int $cloudPk, int $projectPk, int $rulesetPk, RuleRequest $ruleRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **rulesetPk** | **int**| A unique integer value identifying this ruleset. |
 **ruleRequest** | [**OpenAPI\Server\Model\RuleRequest**](../Model/RuleRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Rule**](../Model/Rule.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createRuleComponent**
> OpenAPI\Server\Model\RuleComponent createRuleComponent($checkPlanPk, $cloudPk, $projectPk, $rulePk, $rulesetPk, $ruleComponentRequest)

Create a RuleComponent

TCreate a RuleComponent  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#createRuleComponent
     */
    public function createRuleComponent(int $checkPlanPk, int $cloudPk, int $projectPk, int $rulePk, int $rulesetPk, ?RuleComponentRequest $ruleComponentRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **rulePk** | **int**| A unique integer value identifying this rule. |
 **rulesetPk** | **int**| A unique integer value identifying this ruleset. |
 **ruleComponentRequest** | [**OpenAPI\Server\Model\RuleComponentRequest**](../Model/RuleComponentRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\RuleComponent**](../Model/RuleComponent.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createRuleset**
> OpenAPI\Server\Model\Ruleset createRuleset($checkPlanPk, $cloudPk, $projectPk, $rulesetRequest)

Create a Ruleset

TCreate a Ruleset  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#createRuleset
     */
    public function createRuleset(int $checkPlanPk, int $cloudPk, int $projectPk, RulesetRequest $rulesetRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **rulesetRequest** | [**OpenAPI\Server\Model\RulesetRequest**](../Model/RulesetRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteChecker**
> deleteChecker($cloudPk, $id, $modelPk, $projectPk)

Delete a checker of a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:write, ifc:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#deleteChecker
     */
    public function deleteChecker(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this ifc checker. |
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteCheckerResult**
> deleteCheckerResult($checkerPk, $cloudPk, $id, $modelPk, $projectPk)

Delete a CheckerResult

Delete a CheckerResult  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#deleteCheckerResult
     */
    public function deleteCheckerResult(int $checkerPk, int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkerPk** | **int**| A unique integer value identifying this ifc checker. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this checker result. |
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteCheckplan**
> deleteCheckplan($cloudPk, $id, $projectPk)

Delete a Checkplan

Delete a Checkplan  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#deleteCheckplan
     */
    public function deleteCheckplan(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this check plan. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteRule**
> deleteRule($checkPlanPk, $cloudPk, $id, $projectPk, $rulesetPk)

Delete a Rule

Delete a Rule  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#deleteRule
     */
    public function deleteRule(int $checkPlanPk, int $cloudPk, int $id, int $projectPk, int $rulesetPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this rule. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **rulesetPk** | **int**| A unique integer value identifying this ruleset. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteRuleComponent**
> deleteRuleComponent($checkPlanPk, $cloudPk, $id, $projectPk, $rulePk, $rulesetPk)

Delete a RuleComponent

Delete a RuleComponent  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#deleteRuleComponent
     */
    public function deleteRuleComponent(int $checkPlanPk, int $cloudPk, int $id, int $projectPk, int $rulePk, int $rulesetPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this rule component. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **rulePk** | **int**| A unique integer value identifying this rule. |
 **rulesetPk** | **int**| A unique integer value identifying this ruleset. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteRuleset**
> deleteRuleset($checkPlanPk, $cloudPk, $id, $projectPk)

Delete a Ruleset

Delete a Ruleset  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#deleteRuleset
     */
    public function deleteRuleset(int $checkPlanPk, int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this ruleset. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getChecker**
> OpenAPI\Server\Model\IfcChecker getChecker($cloudPk, $id, $modelPk, $projectPk)

Retrieve a checker of a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:read, ifc:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#getChecker
     */
    public function getChecker(int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this ifc checker. |
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\IfcChecker**](../Model/IfcChecker.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCheckerResult**
> OpenAPI\Server\Model\CheckerResult getCheckerResult($checkerPk, $cloudPk, $id, $modelPk, $projectPk)

Retrieve one CheckerResult

Retrieve one CheckerResult  Required scopes: check:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#getCheckerResult
     */
    public function getCheckerResult(int $checkerPk, int $cloudPk, int $id, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkerPk** | **int**| A unique integer value identifying this ifc checker. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this checker result. |
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\CheckerResult**](../Model/CheckerResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCheckerResults**
> OpenAPI\Server\Model\CheckerResult getCheckerResults($checkerPk, $cloudPk, $modelPk, $projectPk)

Retrieve all CheckerResults

Retrieve all CheckerResults  Required scopes: check:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#getCheckerResults
     */
    public function getCheckerResults(int $checkerPk, int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkerPk** | **int**| A unique integer value identifying this ifc checker. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\CheckerResult**](../Model/CheckerResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCheckers**
> OpenAPI\Server\Model\IfcChecker getCheckers($cloudPk, $modelPk, $projectPk)

Retrieve all checkers of a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:read, ifc:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#getCheckers
     */
    public function getCheckers(int $cloudPk, int $modelPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\IfcChecker**](../Model/IfcChecker.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCheckplan**
> OpenAPI\Server\Model\CheckPlan getCheckplan($cloudPk, $id, $projectPk)

Retrieve one Checkplan

Retrieve one Checkplan  Required scopes: check:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#getCheckplan
     */
    public function getCheckplan(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this check plan. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\CheckPlan**](../Model/CheckPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCheckplans**
> OpenAPI\Server\Model\CheckPlan getCheckplans($cloudPk, $projectPk)

Retrieve all Checkplans

Retrieve all Checkplans  Required scopes: check:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#getCheckplans
     */
    public function getCheckplans(int $cloudPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\CheckPlan**](../Model/CheckPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getRule**
> OpenAPI\Server\Model\Rule getRule($checkPlanPk, $cloudPk, $id, $projectPk, $rulesetPk)

Retrieve one Rule

Retrieve one Rule  Required scopes: check:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#getRule
     */
    public function getRule(int $checkPlanPk, int $cloudPk, int $id, int $projectPk, int $rulesetPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this rule. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **rulesetPk** | **int**| A unique integer value identifying this ruleset. |

### Return type

[**OpenAPI\Server\Model\Rule**](../Model/Rule.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getRuleComponent**
> OpenAPI\Server\Model\RuleComponent getRuleComponent($checkPlanPk, $cloudPk, $id, $projectPk, $rulePk, $rulesetPk)

Retrieve one RuleComponent

Retrieve one RuleComponent  Required scopes: check:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#getRuleComponent
     */
    public function getRuleComponent(int $checkPlanPk, int $cloudPk, int $id, int $projectPk, int $rulePk, int $rulesetPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this rule component. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **rulePk** | **int**| A unique integer value identifying this rule. |
 **rulesetPk** | **int**| A unique integer value identifying this ruleset. |

### Return type

[**OpenAPI\Server\Model\RuleComponent**](../Model/RuleComponent.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getRuleComponents**
> OpenAPI\Server\Model\RuleComponent getRuleComponents($checkPlanPk, $cloudPk, $projectPk, $rulePk, $rulesetPk)

Retrieve all RuleComponents

Retrieve all RuleComponents  Required scopes: check:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#getRuleComponents
     */
    public function getRuleComponents(int $checkPlanPk, int $cloudPk, int $projectPk, int $rulePk, int $rulesetPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **rulePk** | **int**| A unique integer value identifying this rule. |
 **rulesetPk** | **int**| A unique integer value identifying this ruleset. |

### Return type

[**OpenAPI\Server\Model\RuleComponent**](../Model/RuleComponent.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getRules**
> OpenAPI\Server\Model\Rule getRules($checkPlanPk, $cloudPk, $projectPk, $rulesetPk)

Retrieve all Rules

Retrieve all Rules  Required scopes: check:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#getRules
     */
    public function getRules(int $checkPlanPk, int $cloudPk, int $projectPk, int $rulesetPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **rulesetPk** | **int**| A unique integer value identifying this ruleset. |

### Return type

[**OpenAPI\Server\Model\Rule**](../Model/Rule.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getRuleset**
> OpenAPI\Server\Model\Ruleset getRuleset($checkPlanPk, $cloudPk, $id, $projectPk)

Retrieve one Ruleset

Retrieve one Ruleset  Required scopes: check:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#getRuleset
     */
    public function getRuleset(int $checkPlanPk, int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this ruleset. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getRulesets**
> OpenAPI\Server\Model\Ruleset getRulesets($checkPlanPk, $cloudPk, $projectPk)

Retrieve all Rulesets

Retrieve all Rulesets  Required scopes: check:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#getRulesets
     */
    public function getRulesets(int $checkPlanPk, int $cloudPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **launchNewCheck**
> launchNewCheck($cloudPk, $id, $modelPk, $projectPk, $ifcCheckerRequest)

Launch a new check on the model

A nex check will be played with the current state of elements, properties, etc.  Required scopes: check:write, ifc:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#launchNewCheck
     */
    public function launchNewCheck(int $cloudPk, int $id, int $modelPk, int $projectPk, ?IfcCheckerRequest $ifcCheckerRequest, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this ifc checker. |
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **ifcCheckerRequest** | [**OpenAPI\Server\Model\IfcCheckerRequest**](../Model/IfcCheckerRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateChecker**
> OpenAPI\Server\Model\IfcChecker updateChecker($cloudPk, $id, $modelPk, $projectPk, $patchedIfcCheckerRequest)

Update some fields of a checker of a model

A checker is a link between a checkplan and a model. A checker can launch a check multiple time and store all the results  Required scopes: check:write, ifc:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#updateChecker
     */
    public function updateChecker(int $cloudPk, int $id, int $modelPk, int $projectPk, ?PatchedIfcCheckerRequest $patchedIfcCheckerRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this ifc checker. |
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedIfcCheckerRequest** | [**OpenAPI\Server\Model\PatchedIfcCheckerRequest**](../Model/PatchedIfcCheckerRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\IfcChecker**](../Model/IfcChecker.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateCheckerResult**
> OpenAPI\Server\Model\CheckerResult updateCheckerResult($checkerPk, $cloudPk, $id, $modelPk, $projectPk, $patchedCheckerResultRequest)

Update some fields of a CheckerResult

Update some fields of a CheckerResult  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#updateCheckerResult
     */
    public function updateCheckerResult(int $checkerPk, int $cloudPk, int $id, int $modelPk, int $projectPk, ?PatchedCheckerResultRequest $patchedCheckerResultRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkerPk** | **int**| A unique integer value identifying this ifc checker. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this checker result. |
 **modelPk** | **int**| A unique integer value identifying this model. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedCheckerResultRequest** | [**OpenAPI\Server\Model\PatchedCheckerResultRequest**](../Model/PatchedCheckerResultRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\CheckerResult**](../Model/CheckerResult.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateCheckplan**
> OpenAPI\Server\Model\CheckPlan updateCheckplan($cloudPk, $id, $projectPk, $patchedCheckPlanRequest)

Update some fields of a Checkplan

Update some fields of a Checkplan  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#updateCheckplan
     */
    public function updateCheckplan(int $cloudPk, int $id, int $projectPk, ?PatchedCheckPlanRequest $patchedCheckPlanRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this check plan. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedCheckPlanRequest** | [**OpenAPI\Server\Model\PatchedCheckPlanRequest**](../Model/PatchedCheckPlanRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\CheckPlan**](../Model/CheckPlan.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateRule**
> OpenAPI\Server\Model\Rule updateRule($checkPlanPk, $cloudPk, $id, $projectPk, $rulesetPk, $patchedRuleRequest)

Update some fields of a Rule

Update some fields of a Rule  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#updateRule
     */
    public function updateRule(int $checkPlanPk, int $cloudPk, int $id, int $projectPk, int $rulesetPk, ?PatchedRuleRequest $patchedRuleRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this rule. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **rulesetPk** | **int**| A unique integer value identifying this ruleset. |
 **patchedRuleRequest** | [**OpenAPI\Server\Model\PatchedRuleRequest**](../Model/PatchedRuleRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Rule**](../Model/Rule.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateRuleComponent**
> OpenAPI\Server\Model\RuleComponent updateRuleComponent($checkPlanPk, $cloudPk, $id, $projectPk, $rulePk, $rulesetPk, $patchedRuleComponentRequest)

Update some fields of a RuleComponent

Update some fields of a RuleComponent  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#updateRuleComponent
     */
    public function updateRuleComponent(int $checkPlanPk, int $cloudPk, int $id, int $projectPk, int $rulePk, int $rulesetPk, ?PatchedRuleComponentRequest $patchedRuleComponentRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this rule component. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **rulePk** | **int**| A unique integer value identifying this rule. |
 **rulesetPk** | **int**| A unique integer value identifying this ruleset. |
 **patchedRuleComponentRequest** | [**OpenAPI\Server\Model\PatchedRuleComponentRequest**](../Model/PatchedRuleComponentRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\RuleComponent**](../Model/RuleComponent.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateRuleset**
> OpenAPI\Server\Model\Ruleset updateRuleset($checkPlanPk, $cloudPk, $id, $projectPk, $patchedRulesetRequest)

Update some fields of a Ruleset

Update some fields of a Ruleset  Required scopes: check:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CheckerApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CheckerApiInterface;

class CheckerApi implements CheckerApiInterface
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
     * Implementation of CheckerApiInterface#updateRuleset
     */
    public function updateRuleset(int $checkPlanPk, int $cloudPk, int $id, int $projectPk, ?PatchedRulesetRequest $patchedRulesetRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkPlanPk** | **int**| A unique integer value identifying this check plan. |
 **cloudPk** | **int**| A unique integer value identifying this cloud. |
 **id** | **int**| A unique integer value identifying this ruleset. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedRulesetRequest** | [**OpenAPI\Server\Model\PatchedRulesetRequest**](../Model/PatchedRulesetRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Ruleset**](../Model/Ruleset.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

