<?php
/**
 * PatchedFolderWithoutChildrenRequest
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
 * Class representing the PatchedFolderWithoutChildrenRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class PatchedFolderWithoutChildrenRequest 
{
        /**
     * @var int|null
     * @SerializedName("parent_id")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $parentId = null;

    /**
     * Name of the folder
     *
     * @var string|null
     * @SerializedName("name")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 255
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $name = null;

    /**
     * Permission for a Folder
     *
     * @var int|null
     * @SerializedName("default_permission")
     * @Assert\Choice({ 1, 50, 100 })
     * @Assert\Type("int")
     * @Type("int")
     * @Assert\GreaterThanOrEqual(-32768)
     * @Assert\LessThanOrEqual(32767)
     */
    protected ?int $defaultPermission = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->parentId = $data['parentId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->defaultPermission = $data['defaultPermission'] ?? null;
    }

    /**
     * Gets parentId.
     *
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    /**
     * Sets parentId.
     *
     * @param int|null $parentId
     *
     * @return $this
     */
    public function setParentId(?int $parentId = null): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string|null $name  Name of the folder
     *
     * @return $this
     */
    public function setName(?string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets defaultPermission.
     *
     * @return int|null
     */
    public function getDefaultPermission(): ?int
    {
        return $this->defaultPermission;
    }

    /**
     * Sets defaultPermission.
     *
     * @param int|null $defaultPermission  Permission for a Folder
     *
     * @return $this
     */
    public function setDefaultPermission(?int $defaultPermission = null): self
    {
        $this->defaultPermission = $defaultPermission;

        return $this;
    }
}

