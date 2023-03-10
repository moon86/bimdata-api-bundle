<?php
/**
 * SsoApiInterface
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * BIMData API
 *
 * BIMData API is a tool to interact with your models stored on BIMData’s servers.     Through the API, you can manage your projects, the clouds, upload your IFC files and manage them through endpoints.
 *
 * The version of the OpenAPI document: v1 (v1)
 * Contact: support@bimdata.io
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use OpenAPI\Server\Model\Invitation;

/**
 * SsoApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface SsoApiInterface
{

    /**
     * Sets authentication method ApiKey
     *
     * @param string|null $value Value of the ApiKey authentication method.
     *
     * @return void
     */
    public function setApiKey(?string $value): void;

    /**
     * Sets authentication method BIMData_Connect
     *
     * @param string|null $value Value of the BIMData_Connect authentication method.
     *
     * @return void
     */
    public function setBIMData_Connect(?string $value): void;

    /**
     * Sets authentication method Bearer
     *
     * @param string|null $value Value of the Bearer authentication method.
     *
     * @return void
     */
    public function setBearer(?string $value): void;

    /**
     * Operation acceptInvitation
     *
     * Accept an invitation
     *
     * @param  int $id  A unique integer value identifying this invitation. (required)
     * @param  int     &$responseCode    The HTTP Response Code
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function acceptInvitation(int $id, int &$responseCode, array &$responseHeaders): void;


    /**
     * Operation deleteUser
     *
     * Delete user from BIMData
     *
     * @param  int     &$responseCode    The HTTP Response Code
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function deleteUser(int &$responseCode, array &$responseHeaders): void;


    /**
     * Operation denyInvitation
     *
     * Deny an invitation
     *
     * @param  int $id  A unique integer value identifying this invitation. (required)
     * @param  int     &$responseCode    The HTTP Response Code
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function denyInvitation(int $id, int &$responseCode, array &$responseHeaders): void;


    /**
     * Operation getInvitation
     *
     * Retrieve an invitation
     *
     * @param  int $id  A unique integer value identifying this invitation. (required)
     * @param  int     &$responseCode    The HTTP Response Code
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return array|object|null
     */
    public function getInvitation(int $id, int &$responseCode, array &$responseHeaders): array|object|null;


    /**
     * Operation getInvitations
     *
     * Retrieve all invitations
     *
     * @param  string|null $status  A: Accepted         D: Denied         P: Pending (optional)
     * @param  int     &$responseCode    The HTTP Response Code
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return array|object|null
     */
    public function getInvitations(?string $status, int &$responseCode, array &$responseHeaders): array|object|null;

}
