<?php
/**
 * PatchedGroupFolderRequest
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Model
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

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the PatchedGroupFolderRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class PatchedGroupFolderRequest 
{
        /**
     * Group&#39;s permission for a folder
     *
     * @var int|null
     * @SerializedName("permission")
     * @Assert\Choice({ 1, 50, 100 })
     * @Assert\Type("int")
     * @Type("int")
     * @Assert\GreaterThanOrEqual(-32768)
     * @Assert\LessThanOrEqual(32767)
     */
    protected ?int $permission = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->permission = $data['permission'] ?? null;
    }

    /**
     * Gets permission.
     *
     * @return int|null
     */
    public function getPermission(): ?int
    {
        return $this->permission;
    }

    /**
     * Sets permission.
     *
     * @param int|null $permission  Group's permission for a folder
     *
     * @return $this
     */
    public function setPermission(?int $permission = null): self
    {
        $this->permission = $permission;

        return $this;
    }
}


