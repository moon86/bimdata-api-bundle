# OpenAPI\Server\Api\CollaborationApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptUserInvitation**](CollaborationApiInterface.md#acceptUserInvitation) | **POST** /user/invitations/{id}/accept | Accept an invitation
[**acceptValidation**](CollaborationApiInterface.md#acceptValidation) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation/{id}/accept | Accept a validation
[**addDocumentTag**](CollaborationApiInterface.md#addDocumentTag) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/tag | Add a tag to a document
[**addGroupMember**](CollaborationApiInterface.md#addGroupMember) | **POST** /cloud/{cloud_pk}/project/{project_pk}/group/{group_pk}/member | Add a user to a group
[**cancelCloudUserInvitation**](CollaborationApiInterface.md#cancelCloudUserInvitation) | **DELETE** /cloud/{cloud_pk}/invitation/{id} | Cancel a pending invitation
[**cancelProjectUserInvitation**](CollaborationApiInterface.md#cancelProjectUserInvitation) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/invitation/{id} | Cancel a pending invitation
[**checkAccess**](CollaborationApiInterface.md#checkAccess) | **GET** /cloud/{id}/check-access | Check app access from cloud
[**closeVisa**](CollaborationApiInterface.md#closeVisa) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{id}/close | Close a visa of a document
[**createClassification**](CollaborationApiInterface.md#createClassification) | **POST** /cloud/{cloud_pk}/project/{project_pk}/classification | Create a classification
[**createCloud**](CollaborationApiInterface.md#createCloud) | **POST** /cloud | Create a cloud
[**createDMSTree**](CollaborationApiInterface.md#createDMSTree) | **POST** /cloud/{cloud_pk}/project/{id}/dms-tree | Create a complete DMS tree
[**createDemo**](CollaborationApiInterface.md#createDemo) | **POST** /cloud/{id}/create-demo | Create a Demo project in a cloud
[**createDocument**](CollaborationApiInterface.md#createDocument) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document | Create a document
[**createFolder**](CollaborationApiInterface.md#createFolder) | **POST** /cloud/{cloud_pk}/project/{project_pk}/folder | Create a folder
[**createManageGroup**](CollaborationApiInterface.md#createManageGroup) | **POST** /cloud/{cloud_pk}/project/{project_pk}/group | Create a group
[**createProject**](CollaborationApiInterface.md#createProject) | **POST** /cloud/{cloud_pk}/project | Create a project
[**createProjectAccessToken**](CollaborationApiInterface.md#createProjectAccessToken) | **POST** /cloud/{cloud_pk}/project/{project_pk}/access-token | Create a token for this project
[**createTag**](CollaborationApiInterface.md#createTag) | **POST** /cloud/{cloud_pk}/project/{project_pk}/tag | Create a tag
[**createValidation**](CollaborationApiInterface.md#createValidation) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation | Add a validation to a visa
[**createVisa**](CollaborationApiInterface.md#createVisa) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa | Create a visa
[**createVisaComment**](CollaborationApiInterface.md#createVisaComment) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/comment | Add a comment
[**deleteAllDocumentHistory**](CollaborationApiInterface.md#deleteAllDocumentHistory) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/history/delete | Delete all document history
[**deleteClassification**](CollaborationApiInterface.md#deleteClassification) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Delete a classification
[**deleteCloud**](CollaborationApiInterface.md#deleteCloud) | **DELETE** /cloud/{id} | Delete a cloud
[**deleteCloudUser**](CollaborationApiInterface.md#deleteCloudUser) | **DELETE** /cloud/{cloud_pk}/user/{id} | Remove a user from a cloud
[**deleteDocument**](CollaborationApiInterface.md#deleteDocument) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Delete the document
[**deleteDocumentTag**](CollaborationApiInterface.md#deleteDocumentTag) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/tag/{id} | Delete a tag from a document
[**deleteFolder**](CollaborationApiInterface.md#deleteFolder) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Delete a folder
[**deleteGroupMember**](CollaborationApiInterface.md#deleteGroupMember) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/group/{group_pk}/member/{id} | Delete a user from a group
[**deleteManageGroup**](CollaborationApiInterface.md#deleteManageGroup) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Delete a group
[**deleteProject**](CollaborationApiInterface.md#deleteProject) | **DELETE** /cloud/{cloud_pk}/project/{id} | Delete a project
[**deleteProjectAccessToken**](CollaborationApiInterface.md#deleteProjectAccessToken) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Delete a token
[**deleteProjectUser**](CollaborationApiInterface.md#deleteProjectUser) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/user/{id} | Remove a user from a project
[**deleteTag**](CollaborationApiInterface.md#deleteTag) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/tag/{id} | Delete the tag
[**deleteValidation**](CollaborationApiInterface.md#deleteValidation) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation/{id} | Remove a validation
[**deleteVisa**](CollaborationApiInterface.md#deleteVisa) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{id} | Remove a visa
[**deleteVisaComment**](CollaborationApiInterface.md#deleteVisaComment) | **DELETE** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/comment/{id} | Remove a comment
[**denyUserInvitation**](CollaborationApiInterface.md#denyUserInvitation) | **POST** /user/invitations/{id}/deny | Deny an invitation
[**denyValidation**](CollaborationApiInterface.md#denyValidation) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation/{id}/deny | Deny a validation
[**getClassification**](CollaborationApiInterface.md#getClassification) | **GET** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Retrieve a classification
[**getClassifications**](CollaborationApiInterface.md#getClassifications) | **GET** /cloud/{cloud_pk}/project/{project_pk}/classification | Retrieve all classifications
[**getCloud**](CollaborationApiInterface.md#getCloud) | **GET** /cloud/{id} | Retrieve one cloud
[**getCloudInvitations**](CollaborationApiInterface.md#getCloudInvitations) | **GET** /cloud/{cloud_pk}/invitation | Retrieve all pending invitations in the cloud
[**getCloudSize**](CollaborationApiInterface.md#getCloudSize) | **GET** /cloud/{id}/size | Get size of the cloud
[**getCloudUser**](CollaborationApiInterface.md#getCloudUser) | **GET** /cloud/{cloud_pk}/user/{id} | Retrieve a user in a cloud
[**getCloudUsers**](CollaborationApiInterface.md#getCloudUsers) | **GET** /cloud/{cloud_pk}/user | Retrieve all users in a cloud, or a list with a filter by email
[**getClouds**](CollaborationApiInterface.md#getClouds) | **GET** /cloud | Retrieve all clouds
[**getDocument**](CollaborationApiInterface.md#getDocument) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Retrieve a document
[**getDocumentHistories**](CollaborationApiInterface.md#getDocumentHistories) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/history | Retrieve all document histories
[**getDocuments**](CollaborationApiInterface.md#getDocuments) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document | Retrieve all documents
[**getFolder**](CollaborationApiInterface.md#getFolder) | **GET** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Retrieve a folder
[**getFolderProjectUsers**](CollaborationApiInterface.md#getFolderProjectUsers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/folder/{folder_pk}/user | Retrieve all users in a project with the permission on the folder
[**getFolders**](CollaborationApiInterface.md#getFolders) | **GET** /cloud/{cloud_pk}/project/{project_pk}/folder | Retrieve all folders
[**getGroup**](CollaborationApiInterface.md#getGroup) | **GET** /cloud/{cloud_pk}/project/{project_pk}/me/group/{id} | Retrieve a group
[**getGroups**](CollaborationApiInterface.md#getGroups) | **GET** /cloud/{cloud_pk}/project/{project_pk}/me/group | Retrieve all groups
[**getManageGroup**](CollaborationApiInterface.md#getManageGroup) | **GET** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Retrieve a group
[**getManageGroups**](CollaborationApiInterface.md#getManageGroups) | **GET** /cloud/{cloud_pk}/project/{project_pk}/group | Retrieve all groups
[**getProject**](CollaborationApiInterface.md#getProject) | **GET** /cloud/{cloud_pk}/project/{id} | Retrieve a project
[**getProjectAccessToken**](CollaborationApiInterface.md#getProjectAccessToken) | **GET** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Retrieve one token created for this project
[**getProjectAccessTokens**](CollaborationApiInterface.md#getProjectAccessTokens) | **GET** /cloud/{cloud_pk}/project/{project_pk}/access-token | Retrieve all tokens created for this project
[**getProjectCreatorVisas**](CollaborationApiInterface.md#getProjectCreatorVisas) | **GET** /cloud/{cloud_pk}/project/{project_pk}/me/visa/creator | List visas created by user
[**getProjectDMSTree**](CollaborationApiInterface.md#getProjectDMSTree) | **GET** /cloud/{cloud_pk}/project/{id}/dms-tree | Retrieve the complete DMS tree
[**getProjectFolderTreeSerializers**](CollaborationApiInterface.md#getProjectFolderTreeSerializers) | **GET** /cloud/{cloud_pk}/project/folder-trees | Retrieve folder tree for all projects
[**getProjectInvitations**](CollaborationApiInterface.md#getProjectInvitations) | **GET** /cloud/{cloud_pk}/project/{project_pk}/invitation | Retrieve all pending invitations in the project
[**getProjectSize**](CollaborationApiInterface.md#getProjectSize) | **GET** /cloud/{cloud_pk}/project/{id}/size | Get size of all model files in the project
[**getProjectSubTree**](CollaborationApiInterface.md#getProjectSubTree) | **GET** /cloud/{cloud_pk}/project/subtree | Retrieve the complete projects tree of the cloud
[**getProjectTree**](CollaborationApiInterface.md#getProjectTree) | **GET** /cloud/{cloud_pk}/project/{id}/tree | Retrieve the complete DMS tree
[**getProjectUsers**](CollaborationApiInterface.md#getProjectUsers) | **GET** /cloud/{cloud_pk}/project/{project_pk}/user | Retrieve all users in a project, or a list with a filter by email
[**getProjectValidatorVisas**](CollaborationApiInterface.md#getProjectValidatorVisas) | **GET** /cloud/{cloud_pk}/project/{project_pk}/me/visa/validator | List visas where user is a validator
[**getProjects**](CollaborationApiInterface.md#getProjects) | **GET** /cloud/{cloud_pk}/project | Retrieve all projects
[**getSelfProjects**](CollaborationApiInterface.md#getSelfProjects) | **GET** /user/projects | List current user&#39;s projects
[**getSelfUser**](CollaborationApiInterface.md#getSelfUser) | **GET** /user | Get info about the current user
[**getTag**](CollaborationApiInterface.md#getTag) | **GET** /cloud/{cloud_pk}/project/{project_pk}/tag/{id} | Retrieve a tag
[**getTags**](CollaborationApiInterface.md#getTags) | **GET** /cloud/{cloud_pk}/project/{project_pk}/tag | Retrieve all tags
[**getUserInvitation**](CollaborationApiInterface.md#getUserInvitation) | **GET** /user/invitations/{id} | Retrieve an invitation
[**getUserInvitations**](CollaborationApiInterface.md#getUserInvitations) | **GET** /user/invitations | List user&#39;s invitations
[**getValidation**](CollaborationApiInterface.md#getValidation) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation/{id} | Retrieve a validation to a visa
[**getValidations**](CollaborationApiInterface.md#getValidations) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation | List all validations to a visa
[**getVisa**](CollaborationApiInterface.md#getVisa) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{id} | Retrieve a visa of a document
[**getVisaComment**](CollaborationApiInterface.md#getVisaComment) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/comment/{id} | Retrieve a comment
[**getVisaComments**](CollaborationApiInterface.md#getVisaComments) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/comment | List all comment of a visa
[**getVisas**](CollaborationApiInterface.md#getVisas) | **GET** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa | List all visas of a document
[**inviteCloudUser**](CollaborationApiInterface.md#inviteCloudUser) | **POST** /cloud/{cloud_pk}/invitation | Invite a cloud administrator
[**inviteProjectUser**](CollaborationApiInterface.md#inviteProjectUser) | **POST** /cloud/{cloud_pk}/project/{project_pk}/invitation | Invite a project member
[**leaveProject**](CollaborationApiInterface.md#leaveProject) | **POST** /cloud/{cloud_pk}/project/{id}/leave | Leave the project
[**leaveVersionDocumentHistory**](CollaborationApiInterface.md#leaveVersionDocumentHistory) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/history/{id}/leave | Leave the history version
[**makeHeadVersionDocumentHistory**](CollaborationApiInterface.md#makeHeadVersionDocumentHistory) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/history/{id}/head-version | Make the head of the version
[**pauseVisa**](CollaborationApiInterface.md#pauseVisa) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{id}/pause | Pause a visa of a document
[**resetValidation**](CollaborationApiInterface.md#resetValidation) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation/{id}/reset | Reset a validation
[**resumeVisa**](CollaborationApiInterface.md#resumeVisa) | **POST** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{id}/resume | Resume a visa of a document
[**updateClassification**](CollaborationApiInterface.md#updateClassification) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/classification/{id} | Update some fields of a classification
[**updateCloud**](CollaborationApiInterface.md#updateCloud) | **PATCH** /cloud/{id} | Update some fields of a cloud
[**updateCloudUser**](CollaborationApiInterface.md#updateCloudUser) | **PATCH** /cloud/{cloud_pk}/user/{id} | Change the user role in the cloud
[**updateDocument**](CollaborationApiInterface.md#updateDocument) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/document/{id} | Update some fields of the document
[**updateFolder**](CollaborationApiInterface.md#updateFolder) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/folder/{id} | Update some fields of a folder
[**updateGroupFolder**](CollaborationApiInterface.md#updateGroupFolder) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/folder/{folder_pk}/group/{id} | Update the permission of a group on a folder
[**updateManageGroup**](CollaborationApiInterface.md#updateManageGroup) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/group/{id} | Update some fields of a group
[**updateProject**](CollaborationApiInterface.md#updateProject) | **PATCH** /cloud/{cloud_pk}/project/{id} | Update some fields of a project
[**updateProjectAccessToken**](CollaborationApiInterface.md#updateProjectAccessToken) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/access-token/{token} | Update some fields of a token
[**updateProjectUser**](CollaborationApiInterface.md#updateProjectUser) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/user/{id} | Change the user role in the cloud
[**updateTag**](CollaborationApiInterface.md#updateTag) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/tag/{id} | Update some fields of the tag
[**updateValidation**](CollaborationApiInterface.md#updateValidation) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/validation/{id} | Update the validator of validation
[**updateVisa**](CollaborationApiInterface.md#updateVisa) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{id} | Update some fields of a visa
[**updateVisaComment**](CollaborationApiInterface.md#updateVisaComment) | **PATCH** /cloud/{cloud_pk}/project/{project_pk}/document/{document_pk}/visa/{visa_pk}/comment/{id} | Update some fields of a comment


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\CollaborationApi:
        tags:
            - { name: "open_api_server.api", api: "collaboration" }
    # ...
```

## **acceptUserInvitation**
> acceptUserInvitation($id)

Accept an invitation

The user is added to the cloud and projet.  Required scopes: user:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#acceptUserInvitation
     */
    public function acceptUserInvitation(int $id, int &$responseCode, array &$responseHeaders): void
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

## **acceptValidation**
> acceptValidation($cloudPk, $documentPk, $id, $projectPk, $visaPk)

Accept a validation

Accept a validation  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#acceptValidation
     */
    public function acceptValidation(int $cloudPk, int $documentPk, int $id, int $projectPk, int $visaPk, int &$responseCode, array &$responseHeaders): void
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa validation. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaPk** | **int**| A unique integer value identifying this visa. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **addDocumentTag**
> OpenAPI\Server\Model\Document addDocumentTag($cloudPk, $documentPk, $projectPk, $tagIdRequest)

Add a tag to a document

Add a tag to a document  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#addDocumentTag
     */
    public function addDocumentTag(int $cloudPk, int $documentPk, int $projectPk, TagIdRequest $tagIdRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**|  |
 **tagIdRequest** | [**OpenAPI\Server\Model\TagIdRequest**](../Model/TagIdRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Document**](../Model/Document.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **addGroupMember**
> OpenAPI\Server\Model\UserProject addGroupMember($cloudPk, $groupPk, $projectPk, $userProjectIdRequest)

Add a user to a group

Add a userproject to a group. Must be an admin of the project  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#addGroupMember
     */
    public function addGroupMember(int $cloudPk, int $groupPk, int $projectPk, UserProjectIdRequest $userProjectIdRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **groupPk** | **int**| A unique integer value identifying this group. |
 **projectPk** | **int**|  |
 **userProjectIdRequest** | [**OpenAPI\Server\Model\UserProjectIdRequest**](../Model/UserProjectIdRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\UserProject**](../Model/UserProject.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **cancelCloudUserInvitation**
> cancelCloudUserInvitation($cloudPk, $id)

Cancel a pending invitation

Cancel a pending invitation  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#cancelCloudUserInvitation
     */
    public function cancelCloudUserInvitation(int $cloudPk, int $id, int &$responseCode, array &$responseHeaders): void
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
 **id** | **int**| A unique integer value identifying this invitation. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **cancelProjectUserInvitation**
> cancelProjectUserInvitation($cloudPk, $id, $projectPk)

Cancel a pending invitation

Cancel a pending invitation  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#cancelProjectUserInvitation
     */
    public function cancelProjectUserInvitation(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **id** | **int**| A unique integer value identifying this invitation. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **checkAccess**
> checkAccess($id)

Check app access from cloud

Return code 200 if the cloud has access to the marketplace app

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#checkAccess
     */
    public function checkAccess(int $id, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cloud. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **closeVisa**
> closeVisa($cloudPk, $documentPk, $id, $projectPk)

Close a visa of a document

Close a visa of a document  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#closeVisa
     */
    public function closeVisa(int $cloudPk, int $documentPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createClassification**
> OpenAPI\Server\Model\Classification createClassification($cloudPk, $projectPk, $classificationRequest)

Create a classification

Bulk create available. You can either post an object or a list of objects. Is you post a list, the response will be a list (in the same order) of created objects or of errors if any If at least one create succeeded, the status code will be 201. If every create failed, the status code we'll be 400 with the list of errors  If created classification already exists, it will not be duplicated and the previous one will be returned. You also can add a 'classification' filter on this endpoint. By ex: /classification?name='untec'. The name is case sensitive  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#createClassification
     */
    public function createClassification(int $cloudPk, int $projectPk, array $classificationRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **classificationRequest** | [**OpenAPI\Server\Model\ClassificationRequest**](../Model/ClassificationRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Classification**](../Model/Classification.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createCloud**
> OpenAPI\Server\Model\Cloud createCloud($cloudRequest)

Create a cloud

Create a cloud  Required scopes: cloud:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#createCloud
     */
    public function createCloud(CloudRequest $cloudRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudRequest** | [**OpenAPI\Server\Model\CloudRequest**](../Model/CloudRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Cloud**](../Model/Cloud.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createDMSTree**
> OpenAPI\Server\Model\Folder createDMSTree($cloudPk, $id, $writeFolderRequest)

Create a complete DMS tree

Create a DMS structure of folder Format request : ``` [{     \"name\": :name:     \"parent_id\": :parent_id:                      # optionnal     \"default_permission\": :default_permission:    # optionnal     \"children\": [{                                # optionnal         \"name\": :name:,         \"children\": []     }] }], ```                   Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#createDMSTree
     */
    public function createDMSTree(int $cloudPk, int $id, array $writeFolderRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this project. |
 **writeFolderRequest** | [**OpenAPI\Server\Model\WriteFolderRequest**](../Model/WriteFolderRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Folder**](../Model/Folder.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createDemo**
> OpenAPI\Server\Model\Project createDemo($id)

Create a Demo project in a cloud

Create a project name 'Demo' with an already processed model in it  Required scopes: cloud:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#createDemo
     */
    public function createDemo(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cloud. |

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createDocument**
> OpenAPI\Server\Model\Document createDocument($cloudPk, $projectPk, $name, $file, $parentId, $fileName, $description, $size, $modelSource, $ifcSource, $successorOf)

Create a document

Create a document. If the document is one of {'DXF', 'BFX', 'DWG', 'OBJ', 'GLTF', 'DAE', 'IFC', 'POINT_CLOUD'}, a model will be created and attached to this document  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#createDocument
     */
    public function createDocument(int $cloudPk, int $projectPk, string $name, UploadedFile $file, ?int $parentId, ?string $fileName, ?string $description, ?int $size, ?string $modelSource, ?string $ifcSource, ?int $successorOf, int &$responseCode, array &$responseHeaders): array|object|null
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
 **name** | **string**| Shown name of the file |
 **file** | **UploadedFile****UploadedFile**|  |
 **parentId** | **int**|  | [optional]
 **fileName** | **string**| Full name of the file | [optional]
 **description** | **string**| Description of the file | [optional]
 **size** | **int**| Size of the file. | [optional]
 **modelSource** | **string**| Define the model.source field if the upload is a Model (IFC, PDF, DWG...) | [optional]
 **ifcSource** | **string**| DEPRECATED: Use &#39;model_source&#39; instead. Define the model.source field if the upload is a Model (IFC, PDF, DWG...) | [optional]
 **successorOf** | **int**| Old document version to replace. Only for create | [optional]

### Return type

[**OpenAPI\Server\Model\Document**](../Model/Document.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/form-data, application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createFolder**
> OpenAPI\Server\Model\FolderWithoutChildren createFolder($cloudPk, $projectPk, $folderWithoutChildrenRequest)

Create a folder

If the created folder have no parent, it will be put as a child of the default root folder of the project  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#createFolder
     */
    public function createFolder(int $cloudPk, int $projectPk, FolderWithoutChildrenRequest $folderWithoutChildrenRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **folderWithoutChildrenRequest** | [**OpenAPI\Server\Model\FolderWithoutChildrenRequest**](../Model/FolderWithoutChildrenRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\FolderWithoutChildren**](../Model/FolderWithoutChildren.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createManageGroup**
> OpenAPI\Server\Model\Group createManageGroup($cloudPk, $projectPk, $groupRequest)

Create a group

Create a group. Must be an admin of the project  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#createManageGroup
     */
    public function createManageGroup(int $cloudPk, int $projectPk, GroupRequest $groupRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **groupRequest** | [**OpenAPI\Server\Model\GroupRequest**](../Model/GroupRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Group**](../Model/Group.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createProject**
> OpenAPI\Server\Model\Project createProject($cloudPk, $projectRequest)

Create a project

Create a project  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#createProject
     */
    public function createProject(int $cloudPk, ProjectRequest $projectRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **projectRequest** | [**OpenAPI\Server\Model\ProjectRequest**](../Model/ProjectRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createProjectAccessToken**
> OpenAPI\Server\Model\ProjectAccessToken createProjectAccessToken($cloudPk, $projectPk, $projectAccessTokenRequest)

Create a token for this project

Tokens are valid 1 day by default  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#createProjectAccessToken
     */
    public function createProjectAccessToken(int $cloudPk, int $projectPk, ProjectAccessTokenRequest $projectAccessTokenRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **projectAccessTokenRequest** | [**OpenAPI\Server\Model\ProjectAccessTokenRequest**](../Model/ProjectAccessTokenRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\ProjectAccessToken**](../Model/ProjectAccessToken.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createTag**
> OpenAPI\Server\Model\Tag createTag($cloudPk, $projectPk, $tagRequest)

Create a tag

Create a tag  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#createTag
     */
    public function createTag(int $cloudPk, int $projectPk, TagRequest $tagRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **tagRequest** | [**OpenAPI\Server\Model\TagRequest**](../Model/TagRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\Tag**](../Model/Tag.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createValidation**
> OpenAPI\Server\Model\VisaValidation createValidation($cloudPk, $documentPk, $projectPk, $visaPk, $visaValidationRequest)

Add a validation to a visa

Add a validation to a visa  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#createValidation
     */
    public function createValidation(int $cloudPk, int $documentPk, int $projectPk, int $visaPk, VisaValidationRequest $visaValidationRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaPk** | **int**| A unique integer value identifying this visa. |
 **visaValidationRequest** | [**OpenAPI\Server\Model\VisaValidationRequest**](../Model/VisaValidationRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\VisaValidation**](../Model/VisaValidation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createVisa**
> OpenAPI\Server\Model\Visa createVisa($cloudPk, $documentPk, $projectPk, $visaRequest)

Create a visa

Create a visa  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#createVisa
     */
    public function createVisa(int $cloudPk, int $documentPk, int $projectPk, ?VisaRequest $visaRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaRequest** | [**OpenAPI\Server\Model\VisaRequest**](../Model/VisaRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Visa**](../Model/Visa.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **createVisaComment**
> OpenAPI\Server\Model\VisaComment createVisaComment($cloudPk, $documentPk, $projectPk, $visaPk, $visaCommentRequest)

Add a comment

Add a comment  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#createVisaComment
     */
    public function createVisaComment(int $cloudPk, int $documentPk, int $projectPk, int $visaPk, ?VisaCommentRequest $visaCommentRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaPk** | **int**| A unique integer value identifying this visa. |
 **visaCommentRequest** | [**OpenAPI\Server\Model\VisaCommentRequest**](../Model/VisaCommentRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\VisaComment**](../Model/VisaComment.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteAllDocumentHistory**
> deleteAllDocumentHistory($cloudPk, $documentPk, $projectPk)

Delete all document history

Delete the document from the head version and all its history  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteAllDocumentHistory
     */
    public function deleteAllDocumentHistory(int $cloudPk, int $documentPk, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteClassification**
> deleteClassification($cloudPk, $id, $projectPk)

Delete a classification

All elements having this classification will lose it  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteClassification
     */
    public function deleteClassification(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **id** | **int**| A unique integer value identifying this classification. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteCloud**
> deleteCloud($id)

Delete a cloud

Delete a cloud  Required scopes: cloud:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteCloud
     */
    public function deleteCloud(int $id, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cloud. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteCloudUser**
> deleteCloudUser($cloudPk, $id)

Remove a user from a cloud

The user will also be removed from all the projects of the cloud  Required scopes: cloud:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteCloudUser
     */
    public function deleteCloudUser(int $cloudPk, int $id, int &$responseCode, array &$responseHeaders): void
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
 **id** | **int**| A unique integer value identifying this fos user. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteDocument**
> deleteDocument($cloudPk, $id, $projectPk)

Delete the document

Delete the document  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteDocument
     */
    public function deleteDocument(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **id** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteDocumentTag**
> deleteDocumentTag($cloudPk, $documentPk, $id, $projectPk)

Delete a tag from a document

Delete a tag from a document  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteDocumentTag
     */
    public function deleteDocumentTag(int $cloudPk, int $documentPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteFolder**
> deleteFolder($cloudPk, $id, $projectPk)

Delete a folder

All files and subfolders will be deleted too. If folder is a project's root folder, only children are deleted  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteFolder
     */
    public function deleteFolder(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **id** | **int**| A unique integer value identifying this folder. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteGroupMember**
> deleteGroupMember($cloudPk, $groupPk, $id, $projectPk)

Delete a user from a group

Delete a userproject from a group. Id is the userproject_id. Must be an admin of the project.  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteGroupMember
     */
    public function deleteGroupMember(int $cloudPk, int $groupPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **groupPk** | **int**| A unique integer value identifying this group. |
 **id** | **int**| A unique integer value identifying this group. |
 **projectPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteManageGroup**
> deleteManageGroup($cloudPk, $id, $projectPk)

Delete a group

Delete a group. Must be an admin of the project  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteManageGroup
     */
    public function deleteManageGroup(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **id** | **int**| A unique integer value identifying this group. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteProject**
> deleteProject($cloudPk, $id)

Delete a project

It can take a long time to respond because we may need to delete all properties of all elements of all models in the project  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteProject
     */
    public function deleteProject(int $cloudPk, int $id, int &$responseCode, array &$responseHeaders): void
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
 **id** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteProjectAccessToken**
> deleteProjectAccessToken($cloudPk, $projectPk, $token)

Delete a token

Deleting a token will revoke it  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteProjectAccessToken
     */
    public function deleteProjectAccessToken(int $cloudPk, int $projectPk, string $token, int &$responseCode, array &$responseHeaders): void
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
 **token** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteProjectUser**
> deleteProjectUser($cloudPk, $id, $projectPk)

Remove a user from a project

Remove a user from a project  Required scopes: cloud:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteProjectUser
     */
    public function deleteProjectUser(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **id** | **int**| A unique integer value identifying this user project. |
 **projectPk** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteTag**
> deleteTag($cloudPk, $id, $projectPk)

Delete the tag

Delete the tag  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteTag
     */
    public function deleteTag(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **id** | **int**| A unique integer value identifying this tag. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteValidation**
> deleteValidation($cloudPk, $documentPk, $id, $projectPk, $visaPk)

Remove a validation

Remove a validation  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteValidation
     */
    public function deleteValidation(int $cloudPk, int $documentPk, int $id, int $projectPk, int $visaPk, int &$responseCode, array &$responseHeaders): void
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa validation. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaPk** | **int**| A unique integer value identifying this visa. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteVisa**
> deleteVisa($cloudPk, $documentPk, $id, $projectPk)

Remove a visa

Remove a visa  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteVisa
     */
    public function deleteVisa(int $cloudPk, int $documentPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteVisaComment**
> deleteVisaComment($cloudPk, $documentPk, $id, $projectPk, $visaPk)

Remove a comment

Remove a comment  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#deleteVisaComment
     */
    public function deleteVisaComment(int $cloudPk, int $documentPk, int $id, int $projectPk, int $visaPk, int &$responseCode, array &$responseHeaders): void
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa comment. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaPk** | **int**| A unique integer value identifying this visa. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **denyUserInvitation**
> denyUserInvitation($id)

Deny an invitation

The invitation status change to DENIED and the user is not added to the cloud. You can accept an invitation previously denied  Required scopes: user:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#denyUserInvitation
     */
    public function denyUserInvitation(int $id, int &$responseCode, array &$responseHeaders): void
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

## **denyValidation**
> denyValidation($cloudPk, $documentPk, $id, $projectPk, $visaPk)

Deny a validation

Deny a validation  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#denyValidation
     */
    public function denyValidation(int $cloudPk, int $documentPk, int $id, int $projectPk, int $visaPk, int &$responseCode, array &$responseHeaders): void
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa validation. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaPk** | **int**| A unique integer value identifying this visa. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getClassification**
> OpenAPI\Server\Model\Classification getClassification($cloudPk, $id, $projectPk)

Retrieve a classification

Retrieve a classification  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getClassification
     */
    public function getClassification(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this classification. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Classification**](../Model/Classification.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getClassifications**
> OpenAPI\Server\Model\Classification getClassifications($cloudPk, $projectPk)

Retrieve all classifications

Retrieve all classifications of all models in the project  Required scopes: ifc:read, model:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getClassifications
     */
    public function getClassifications(int $cloudPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\Classification**](../Model/Classification.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCloud**
> OpenAPI\Server\Model\Cloud getCloud($id)

Retrieve one cloud

Retrieve one cloud

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getCloud
     */
    public function getCloud(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cloud. |

### Return type

[**OpenAPI\Server\Model\Cloud**](../Model/Cloud.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCloudInvitations**
> OpenAPI\Server\Model\CloudInvitation getCloudInvitations($cloudPk)

Retrieve all pending invitations in the cloud

Returns app's invitations only  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getCloudInvitations
     */
    public function getCloudInvitations(int $cloudPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\CloudInvitation**](../Model/CloudInvitation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCloudSize**
> OpenAPI\Server\Model\Size getCloudSize($id)

Get size of the cloud

Returns the sizes of the cloud in Bytes. The response fields depends on the role of the user. If the user is an admin, all field will be returned. If the user is a standard user, only `remaining_total_size` and `remaining_smart_data_size` will be set. If the call is made from an API access, role admin (100) will be returned and all fields will be set. The fields `managed by` indicate if the subscription for this cloud is an API subscription or a BIMData Platform subscription. If the cloud is managed by an API plan, the remaining sizes will take others organizations's clouds size into account

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getCloudSize
     */
    public function getCloudSize(int $id, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cloud. |

### Return type

[**OpenAPI\Server\Model\Size**](../Model/Size.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCloudUser**
> OpenAPI\Server\Model\User getCloudUser($cloudPk, $id)

Retrieve a user in a cloud

Only administrators can see a cloud member  Required scopes: cloud:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getCloudUser
     */
    public function getCloudUser(int $cloudPk, int $id, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this fos user. |

### Return type

[**OpenAPI\Server\Model\User**](../Model/User.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getCloudUsers**
> OpenAPI\Server\Model\User getCloudUsers($cloudPk, $email, $emailContains, $emailEndswith, $emailStartswith)

Retrieve all users in a cloud, or a list with a filter by email

Only administrators can see cloud members.  Required scopes: cloud:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getCloudUsers
     */
    public function getCloudUsers(int $cloudPk, ?string $email, ?string $emailContains, ?string $emailEndswith, ?string $emailStartswith, int &$responseCode, array &$responseHeaders): array|object|null
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
 **email** | **string**|  | [optional]
 **emailContains** | **string**|  | [optional]
 **emailEndswith** | **string**|  | [optional]
 **emailStartswith** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\User**](../Model/User.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getClouds**
> OpenAPI\Server\Model\Cloud getClouds()

Retrieve all clouds

Returns user's (or app's) clouds only

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getClouds
     */
    public function getClouds(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\Cloud**](../Model/Cloud.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getDocument**
> OpenAPI\Server\Model\Document getDocument($cloudPk, $id, $projectPk)

Retrieve a document

Retrieve a document in the project  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getDocument
     */
    public function getDocument(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Document**](../Model/Document.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getDocumentHistories**
> OpenAPI\Server\Model\Document getDocumentHistories($cloudPk, $documentPk, $projectPk)

Retrieve all document histories

Retrieve all documents from the header document history  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getDocumentHistories
     */
    public function getDocumentHistories(int $cloudPk, int $documentPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Document**](../Model/Document.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getDocuments**
> OpenAPI\Server\Model\Document getDocuments($cloudPk, $projectPk)

Retrieve all documents

Retrieve all documents in the project  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getDocuments
     */
    public function getDocuments(int $cloudPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\Document**](../Model/Document.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getFolder**
> OpenAPI\Server\Model\FolderWithoutChildren getFolder($cloudPk, $id, $projectPk)

Retrieve a folder

Retrieve a folder  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getFolder
     */
    public function getFolder(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this folder. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\FolderWithoutChildren**](../Model/FolderWithoutChildren.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getFolderProjectUsers**
> OpenAPI\Server\Model\FolderUserProject getFolderProjectUsers($cloudPk, $folderPk, $projectPk)

Retrieve all users in a project with the permission on the folder

Retrieve all users in a project with the permission on the folder  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getFolderProjectUsers
     */
    public function getFolderProjectUsers(int $cloudPk, int $folderPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **folderPk** | **int**| A unique integer value identifying this folder. |
 **projectPk** | **int**|  |

### Return type

[**OpenAPI\Server\Model\FolderUserProject**](../Model/FolderUserProject.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getFolders**
> OpenAPI\Server\Model\FolderWithoutChildren getFolders($cloudPk, $projectPk)

Retrieve all folders

Retrieve all folders in the project. This is an array of folder. If you want to get the tree of all folders, see getProjectTree  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getFolders
     */
    public function getFolders(int $cloudPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\FolderWithoutChildren**](../Model/FolderWithoutChildren.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getGroup**
> OpenAPI\Server\Model\Group getGroup($cloudPk, $id, $projectPk)

Retrieve a group

Retrieve a group to which the user belongs  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getGroup
     */
    public function getGroup(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this group. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Group**](../Model/Group.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getGroups**
> OpenAPI\Server\Model\Group getGroups($cloudPk, $projectPk)

Retrieve all groups

Retrieves all groups to which the user belongs  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getGroups
     */
    public function getGroups(int $cloudPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\Group**](../Model/Group.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getManageGroup**
> OpenAPI\Server\Model\Group getManageGroup($cloudPk, $id, $projectPk)

Retrieve a group

Retrieve a group. Must be an admin of the project  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getManageGroup
     */
    public function getManageGroup(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this group. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Group**](../Model/Group.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getManageGroups**
> OpenAPI\Server\Model\Group getManageGroups($cloudPk, $projectPk)

Retrieve all groups

Retrieve all groups in the project. Must be an admin of the project  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getManageGroups
     */
    public function getManageGroups(int $cloudPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\Group**](../Model/Group.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProject**
> OpenAPI\Server\Model\ProjectWithChildren getProject($cloudPk, $id)

Retrieve a project

Retrieve a project

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getProject
     */
    public function getProject(int $cloudPk, int $id, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\ProjectWithChildren**](../Model/ProjectWithChildren.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProjectAccessToken**
> OpenAPI\Server\Model\ProjectAccessToken getProjectAccessToken($cloudPk, $projectPk, $token)

Retrieve one token created for this project

Retrieve one token created for this project  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getProjectAccessToken
     */
    public function getProjectAccessToken(int $cloudPk, int $projectPk, string $token, int &$responseCode, array &$responseHeaders): array|object|null
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
 **token** | **string**|  |

### Return type

[**OpenAPI\Server\Model\ProjectAccessToken**](../Model/ProjectAccessToken.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProjectAccessTokens**
> OpenAPI\Server\Model\ProjectAccessToken getProjectAccessTokens($cloudPk, $projectPk)

Retrieve all tokens created for this project

Retrieve all tokens created for this project  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getProjectAccessTokens
     */
    public function getProjectAccessTokens(int $cloudPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\ProjectAccessToken**](../Model/ProjectAccessToken.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProjectCreatorVisas**
> OpenAPI\Server\Model\Visa getProjectCreatorVisas($cloudPk, $projectPk)

List visas created by user

List visas created by user in a project  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getProjectCreatorVisas
     */
    public function getProjectCreatorVisas(int $cloudPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\Visa**](../Model/Visa.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProjectDMSTree**
> OpenAPI\Server\Model\Folder getProjectDMSTree($cloudPk, $id)

Retrieve the complete DMS tree

Retrieve the complete DMS tree (all folders and all documents in the project)

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getProjectDMSTree
     */
    public function getProjectDMSTree(int $cloudPk, int $id, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Folder**](../Model/Folder.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProjectFolderTreeSerializers**
> OpenAPI\Server\Model\ProjectFolderTree getProjectFolderTreeSerializers($cloudPk)

Retrieve folder tree for all projects

Retrieve folder tree for all projects

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getProjectFolderTreeSerializers
     */
    public function getProjectFolderTreeSerializers(int $cloudPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\ProjectFolderTree**](../Model/ProjectFolderTree.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProjectInvitations**
> OpenAPI\Server\Model\ProjectInvitation getProjectInvitations($cloudPk, $projectPk)

Retrieve all pending invitations in the project

Returns app's invitations only  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getProjectInvitations
     */
    public function getProjectInvitations(int $cloudPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\ProjectInvitation**](../Model/ProjectInvitation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProjectSize**
> OpenAPI\Server\Model\ProjectSize getProjectSize($cloudPk, $id)

Get size of all model files in the project

Returns the size of the project in Bytes

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getProjectSize
     */
    public function getProjectSize(int $cloudPk, int $id, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\ProjectSize**](../Model/ProjectSize.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProjectSubTree**
> OpenAPI\Server\Model\ProjectWithChildren getProjectSubTree($cloudPk)

Retrieve the complete projects tree of the cloud

Retrieve the complete projects tree of the cloud

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getProjectSubTree
     */
    public function getProjectSubTree(int $cloudPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\ProjectWithChildren**](../Model/ProjectWithChildren.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProjectTree**
> OpenAPI\Server\Model\Folder getProjectTree($cloudPk, $id)

Retrieve the complete DMS tree

Retrieve the complete DMS tree (all folders and all documents in the project). DEPRECATED: renamed to getProjectDMSTree

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getProjectTree
     */
    public function getProjectTree(int $cloudPk, int $id, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Folder**](../Model/Folder.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProjectUsers**
> OpenAPI\Server\Model\UserProject getProjectUsers($cloudPk, $projectPk, $email, $emailContains, $emailEndswith, $emailStartswith)

Retrieve all users in a project, or a list with a filter by email

Each member of a project can see other members of the project  Required scopes: cloud:read, bcf:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getProjectUsers
     */
    public function getProjectUsers(int $cloudPk, int $projectPk, ?string $email, ?string $emailContains, ?string $emailEndswith, ?string $emailStartswith, int &$responseCode, array &$responseHeaders): array|object|null
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
 **projectPk** | **int**|  |
 **email** | **string**| Filter the returned list by email | [optional]
 **emailContains** | **string**| Filter the returned list by email__contains | [optional]
 **emailEndswith** | **string**| Filter the returned list by email__endswith | [optional]
 **emailStartswith** | **string**| Filter the returned list by email__startswith | [optional]

### Return type

[**OpenAPI\Server\Model\UserProject**](../Model/UserProject.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProjectValidatorVisas**
> OpenAPI\Server\Model\Visa getProjectValidatorVisas($cloudPk, $projectPk)

List visas where user is a validator

List visas where user is a validator in a project  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getProjectValidatorVisas
     */
    public function getProjectValidatorVisas(int $cloudPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\Visa**](../Model/Visa.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getProjects**
> OpenAPI\Server\Model\Project getProjects($cloudPk)

Retrieve all projects

Retrieve all projects of the cloud. All project are shown at the same level. see #getProjectSubTree

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getProjects
     */
    public function getProjects(int $cloudPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSelfProjects**
> OpenAPI\Server\Model\Project getSelfProjects()

List current user's projects

List user's projects of all clouds  Required scopes: user:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getSelfProjects
     */
    public function getSelfProjects(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getSelfUser**
> OpenAPI\Server\Model\SelfUser getSelfUser()

Get info about the current user

Get info about the current user  Required scopes: user:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getSelfUser
     */
    public function getSelfUser(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\SelfUser**](../Model/SelfUser.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getTag**
> OpenAPI\Server\Model\Tag getTag($cloudPk, $id, $projectPk)

Retrieve a tag

Retrieve a tag in the project  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getTag
     */
    public function getTag(int $cloudPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this tag. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Tag**](../Model/Tag.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getTags**
> OpenAPI\Server\Model\Tag getTags($cloudPk, $projectPk)

Retrieve all tags

Retrieve all tags in the project  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getTags
     */
    public function getTags(int $cloudPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\Tag**](../Model/Tag.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getUserInvitation**
> OpenAPI\Server\Model\UserInvitation getUserInvitation($id)

Retrieve an invitation

Retrieve the invitation  Required scopes: user:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getUserInvitation
     */
    public function getUserInvitation(int $id, int &$responseCode, array &$responseHeaders): array|object|null
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

[**OpenAPI\Server\Model\UserInvitation**](../Model/UserInvitation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getUserInvitations**
> OpenAPI\Server\Model\UserInvitation getUserInvitations()

List user's invitations

List all user's invitations  Required scopes: user:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getUserInvitations
     */
    public function getUserInvitations(int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\UserInvitation**](../Model/UserInvitation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getValidation**
> OpenAPI\Server\Model\VisaValidation getValidation($cloudPk, $documentPk, $id, $projectPk, $visaPk)

Retrieve a validation to a visa

Retrieve a validation to a visa  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getValidation
     */
    public function getValidation(int $cloudPk, int $documentPk, int $id, int $projectPk, int $visaPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa validation. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaPk** | **int**| A unique integer value identifying this visa. |

### Return type

[**OpenAPI\Server\Model\VisaValidation**](../Model/VisaValidation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getValidations**
> OpenAPI\Server\Model\VisaValidation getValidations($cloudPk, $documentPk, $projectPk, $visaPk)

List all validations to a visa

List all validations to a visa  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getValidations
     */
    public function getValidations(int $cloudPk, int $documentPk, int $projectPk, int $visaPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaPk** | **int**| A unique integer value identifying this visa. |

### Return type

[**OpenAPI\Server\Model\VisaValidation**](../Model/VisaValidation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getVisa**
> OpenAPI\Server\Model\Visa getVisa($cloudPk, $documentPk, $id, $projectPk)

Retrieve a visa of a document

Retrieve a unique visa of a document  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getVisa
     */
    public function getVisa(int $cloudPk, int $documentPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Visa**](../Model/Visa.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getVisaComment**
> OpenAPI\Server\Model\VisaComment getVisaComment($cloudPk, $documentPk, $id, $projectPk, $visaPk)

Retrieve a comment

Retrieve a comment  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getVisaComment
     */
    public function getVisaComment(int $cloudPk, int $documentPk, int $id, int $projectPk, int $visaPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa comment. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaPk** | **int**| A unique integer value identifying this visa. |

### Return type

[**OpenAPI\Server\Model\VisaComment**](../Model/VisaComment.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getVisaComments**
> OpenAPI\Server\Model\VisaComment getVisaComments($cloudPk, $documentPk, $projectPk, $visaPk)

List all comment of a visa

List all comment of a visa  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getVisaComments
     */
    public function getVisaComments(int $cloudPk, int $documentPk, int $projectPk, int $visaPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaPk** | **int**| A unique integer value identifying this visa. |

### Return type

[**OpenAPI\Server\Model\VisaComment**](../Model/VisaComment.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getVisas**
> OpenAPI\Server\Model\Visa getVisas($cloudPk, $documentPk, $projectPk)

List all visas of a document

List all visas of a document  Required scopes: document:read

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#getVisas
     */
    public function getVisas(int $cloudPk, int $documentPk, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Visa**](../Model/Visa.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **inviteCloudUser**
> OpenAPI\Server\Model\CloudInvitation inviteCloudUser($cloudPk, $cloudInvitationRequest)

Invite a cloud administrator

Invite cloud administrators only. To invite in a project, see inviteProjectUser. You can't invite a user already in the cloud. Create multiple invitations of the same email in the same cloud will generate multiple invitation emails but not multiple invitation object  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#inviteCloudUser
     */
    public function inviteCloudUser(int $cloudPk, CloudInvitationRequest $cloudInvitationRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **cloudInvitationRequest** | [**OpenAPI\Server\Model\CloudInvitationRequest**](../Model/CloudInvitationRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\CloudInvitation**](../Model/CloudInvitation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **inviteProjectUser**
> OpenAPI\Server\Model\ProjectInvitation inviteProjectUser($cloudPk, $projectPk, $projectInvitationRequest)

Invite a project member

Invite a project member. If the user is not already a cloud member, they will also be invited in the cloud with USER role.  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#inviteProjectUser
     */
    public function inviteProjectUser(int $cloudPk, int $projectPk, ProjectInvitationRequest $projectInvitationRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **projectInvitationRequest** | [**OpenAPI\Server\Model\ProjectInvitationRequest**](../Model/ProjectInvitationRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\ProjectInvitation**](../Model/ProjectInvitation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **leaveProject**
> leaveProject($cloudPk, $id)

Leave the project

Leave the project. Only authenticated users (no app) can call this route.  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#leaveProject
     */
    public function leaveProject(int $cloudPk, int $id, int &$responseCode, array &$responseHeaders): void
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
 **id** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **leaveVersionDocumentHistory**
> OpenAPI\Server\Model\Document leaveVersionDocumentHistory($cloudPk, $documentPk, $id, $projectPk)

Leave the history version

This will create a new independent document in the same folder  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#leaveVersionDocumentHistory
     */
    public function leaveVersionDocumentHistory(int $cloudPk, int $documentPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Document**](../Model/Document.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **makeHeadVersionDocumentHistory**
> OpenAPI\Server\Model\Document makeHeadVersionDocumentHistory($cloudPk, $documentPk, $id, $projectPk)

Make the head of the version

The actual head version will be defined as the previous version  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#makeHeadVersionDocumentHistory
     */
    public function makeHeadVersionDocumentHistory(int $cloudPk, int $documentPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

[**OpenAPI\Server\Model\Document**](../Model/Document.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **pauseVisa**
> pauseVisa($cloudPk, $documentPk, $id, $projectPk)

Pause a visa of a document

Pause a visa of a document  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#pauseVisa
     */
    public function pauseVisa(int $cloudPk, int $documentPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **resetValidation**
> resetValidation($cloudPk, $documentPk, $id, $projectPk, $visaPk)

Reset a validation

Reset a validation if the validation has been accepted or rejected  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#resetValidation
     */
    public function resetValidation(int $cloudPk, int $documentPk, int $id, int $projectPk, int $visaPk, int &$responseCode, array &$responseHeaders): void
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa validation. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaPk** | **int**| A unique integer value identifying this visa. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **resumeVisa**
> resumeVisa($cloudPk, $documentPk, $id, $projectPk)

Resume a visa of a document

Resume a visa of a document after a pause  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#resumeVisa
     */
    public function resumeVisa(int $cloudPk, int $documentPk, int $id, int $projectPk, int &$responseCode, array &$responseHeaders): void
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa. |
 **projectPk** | **int**| A unique integer value identifying this project. |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateClassification**
> OpenAPI\Server\Model\Classification updateClassification($cloudPk, $id, $projectPk, $patchedClassificationRequest)

Update some fields of a classification

Update some fields of a classification  Required scopes: ifc:write, model:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateClassification
     */
    public function updateClassification(int $cloudPk, int $id, int $projectPk, ?PatchedClassificationRequest $patchedClassificationRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this classification. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedClassificationRequest** | [**OpenAPI\Server\Model\PatchedClassificationRequest**](../Model/PatchedClassificationRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Classification**](../Model/Classification.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateCloud**
> OpenAPI\Server\Model\Cloud updateCloud($id, $patchedCloudRequest)

Update some fields of a cloud

Update some fields of a cloud  Required scopes: cloud:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateCloud
     */
    public function updateCloud(int $id, ?PatchedCloudRequest $patchedCloudRequest, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this cloud. |
 **patchedCloudRequest** | [**OpenAPI\Server\Model\PatchedCloudRequest**](../Model/PatchedCloudRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Cloud**](../Model/Cloud.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateCloudUser**
> OpenAPI\Server\Model\User updateCloudUser($cloudPk, $id, $patchedUserCloudUpdateRequest)

Change the user role in the cloud

Change the user role in the cloud  Required scopes: cloud:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateCloudUser
     */
    public function updateCloudUser(int $cloudPk, int $id, ?PatchedUserCloudUpdateRequest $patchedUserCloudUpdateRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this fos user. |
 **patchedUserCloudUpdateRequest** | [**OpenAPI\Server\Model\PatchedUserCloudUpdateRequest**](../Model/PatchedUserCloudUpdateRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\User**](../Model/User.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateDocument**
> OpenAPI\Server\Model\Document updateDocument($cloudPk, $id, $projectPk, $patchedDocumentRequest)

Update some fields of the document

Update some fields of the document  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateDocument
     */
    public function updateDocument(int $cloudPk, int $id, int $projectPk, ?PatchedDocumentRequest $patchedDocumentRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this document. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedDocumentRequest** | [**OpenAPI\Server\Model\PatchedDocumentRequest**](../Model/PatchedDocumentRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Document**](../Model/Document.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateFolder**
> OpenAPI\Server\Model\FolderWithoutChildren updateFolder($cloudPk, $id, $projectPk, $patchedFolderWithoutChildrenRequest)

Update some fields of a folder

Update some fields of a folder. Only project admins can update the `default_permission` field.  `default_permission` choices are : ``` 1: ACCESS_DENIED, 50: READ_ONLY, 100: READ_WRTIE ``` When this route is used, the permission of all children in the folder will be updated unless a child has already been updated with this route. In this case, if the updated permission is the same as the previously modified child's, the child will lose its \"independence\" and follow the parent's future permission when it is modified again.  Caution: The 'default_permission' field is not applied to users belonging to one or more groups.   Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateFolder
     */
    public function updateFolder(int $cloudPk, int $id, int $projectPk, ?PatchedFolderWithoutChildrenRequest $patchedFolderWithoutChildrenRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this folder. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedFolderWithoutChildrenRequest** | [**OpenAPI\Server\Model\PatchedFolderWithoutChildrenRequest**](../Model/PatchedFolderWithoutChildrenRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\FolderWithoutChildren**](../Model/FolderWithoutChildren.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateGroupFolder**
> OpenAPI\Server\Model\GroupFolder updateGroupFolder($cloudPk, $folderPk, $id, $projectPk, $patchedGroupFolderRequest)

Update the permission of a group on a folder

Update the permission of a group on a folder. Permissions choices are : ``` 1: ACCESS_DENIED, 50: READ_ONLY, 100: READ_WRTIE ``` When this route is used, the permission of all children in the folder will be updated unless a child has already been updated with this route. In this case, if the updated permission is the same as the previously modified child's, the child will lose its \"independence\" and follow the parent's future permission when it is modified again.               Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateGroupFolder
     */
    public function updateGroupFolder(int $cloudPk, int $folderPk, int $id, int $projectPk, ?PatchedGroupFolderRequest $patchedGroupFolderRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **folderPk** | **int**|  |
 **id** | **int**| A unique integer value identifying this group folder. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedGroupFolderRequest** | [**OpenAPI\Server\Model\PatchedGroupFolderRequest**](../Model/PatchedGroupFolderRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\GroupFolder**](../Model/GroupFolder.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateManageGroup**
> OpenAPI\Server\Model\Group updateManageGroup($cloudPk, $id, $projectPk, $patchedGroupRequest)

Update some fields of a group

Update some fields of a group. Must be an admin of the project  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateManageGroup
     */
    public function updateManageGroup(int $cloudPk, int $id, int $projectPk, ?PatchedGroupRequest $patchedGroupRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this group. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedGroupRequest** | [**OpenAPI\Server\Model\PatchedGroupRequest**](../Model/PatchedGroupRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Group**](../Model/Group.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateProject**
> OpenAPI\Server\Model\Project updateProject($cloudPk, $id, $patchedProjectRequest)

Update some fields of a project

Update some fields of a project  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateProject
     */
    public function updateProject(int $cloudPk, int $id, ?PatchedProjectRequest $patchedProjectRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this project. |
 **patchedProjectRequest** | [**OpenAPI\Server\Model\PatchedProjectRequest**](../Model/PatchedProjectRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateProjectAccessToken**
> OpenAPI\Server\Model\ProjectAccessToken updateProjectAccessToken($cloudPk, $projectPk, $token, $patchedProjectAccessTokenRequest)

Update some fields of a token

You can update the expiration date field  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateProjectAccessToken
     */
    public function updateProjectAccessToken(int $cloudPk, int $projectPk, string $token, ?PatchedProjectAccessTokenRequest $patchedProjectAccessTokenRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **token** | **string**|  |
 **patchedProjectAccessTokenRequest** | [**OpenAPI\Server\Model\PatchedProjectAccessTokenRequest**](../Model/PatchedProjectAccessTokenRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\ProjectAccessToken**](../Model/ProjectAccessToken.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateProjectUser**
> OpenAPI\Server\Model\UserProject updateProjectUser($cloudPk, $id, $projectPk, $patchedUserProjectUpdateRequest)

Change the user role in the cloud

Change the user role in the cloud  Required scopes: cloud:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateProjectUser
     */
    public function updateProjectUser(int $cloudPk, int $id, int $projectPk, ?PatchedUserProjectUpdateRequest $patchedUserProjectUpdateRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this user project. |
 **projectPk** | **int**|  |
 **patchedUserProjectUpdateRequest** | [**OpenAPI\Server\Model\PatchedUserProjectUpdateRequest**](../Model/PatchedUserProjectUpdateRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\UserProject**](../Model/UserProject.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateTag**
> OpenAPI\Server\Model\Tag updateTag($cloudPk, $id, $projectPk, $patchedTagRequest)

Update some fields of the tag

Update some fields of the tag  Required scopes: org:manage

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateTag
     */
    public function updateTag(int $cloudPk, int $id, int $projectPk, ?PatchedTagRequest $patchedTagRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **id** | **int**| A unique integer value identifying this tag. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedTagRequest** | [**OpenAPI\Server\Model\PatchedTagRequest**](../Model/PatchedTagRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Tag**](../Model/Tag.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateValidation**
> OpenAPI\Server\Model\VisaValidation updateValidation($cloudPk, $documentPk, $id, $projectPk, $visaPk, $patchedVisaValidationRequest)

Update the validator of validation

Update the validator of validation. This route is only useful for an App  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateValidation
     */
    public function updateValidation(int $cloudPk, int $documentPk, int $id, int $projectPk, int $visaPk, ?PatchedVisaValidationRequest $patchedVisaValidationRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa validation. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaPk** | **int**| A unique integer value identifying this visa. |
 **patchedVisaValidationRequest** | [**OpenAPI\Server\Model\PatchedVisaValidationRequest**](../Model/PatchedVisaValidationRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\VisaValidation**](../Model/VisaValidation.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateVisa**
> OpenAPI\Server\Model\Visa updateVisa($cloudPk, $documentPk, $id, $projectPk, $patchedVisaRequest)

Update some fields of a visa

Update some fields of a visa  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateVisa
     */
    public function updateVisa(int $cloudPk, int $documentPk, int $id, int $projectPk, ?PatchedVisaRequest $patchedVisaRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **patchedVisaRequest** | [**OpenAPI\Server\Model\PatchedVisaRequest**](../Model/PatchedVisaRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\Visa**](../Model/Visa.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateVisaComment**
> OpenAPI\Server\Model\VisaComment updateVisaComment($cloudPk, $documentPk, $id, $projectPk, $visaPk, $patchedVisaCommentRequest)

Update some fields of a comment

Update some fields of a comment  Required scopes: document:write

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CollaborationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\CollaborationApiInterface;

class CollaborationApi implements CollaborationApiInterface
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
     * Implementation of CollaborationApiInterface#updateVisaComment
     */
    public function updateVisaComment(int $cloudPk, int $documentPk, int $id, int $projectPk, int $visaPk, ?PatchedVisaCommentRequest $patchedVisaCommentRequest, int &$responseCode, array &$responseHeaders): array|object|null
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
 **documentPk** | **int**| A unique integer value identifying this document. |
 **id** | **int**| A unique integer value identifying this visa comment. |
 **projectPk** | **int**| A unique integer value identifying this project. |
 **visaPk** | **int**| A unique integer value identifying this visa. |
 **patchedVisaCommentRequest** | [**OpenAPI\Server\Model\PatchedVisaCommentRequest**](../Model/PatchedVisaCommentRequest.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\VisaComment**](../Model/VisaComment.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [BIMData_Connect](../../README.md#BIMData_Connect), [BIMData_Connect](../../README.md#BIMData_Connect), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

