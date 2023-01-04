<?php
/**
 * ProjectRequest
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
 * Class representing the ProjectRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class ProjectRequest 
{
        /**
     * @var UploadedFile|null
     * @SerializedName("logo")
     * @Assert\Type("UploadedFile")
     * @Type("UploadedFile")
     */
    protected ?UploadedFile $logo = null;

    /**
     * Name of the project
     *
     * @var string|null
     * @SerializedName("name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 256
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $name = null;

    /**
     * @var string|null
     * @SerializedName("status")
     * @Assert\Choice({ "A", "D" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $status = null;

    /**
     * @var int|null
     * @SerializedName("parent_id")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $parentId = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->logo = $data['logo'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->parentId = $data['parentId'] ?? null;
    }

    /**
     * Gets logo.
     *
     * @return UploadedFile|null
     */
    public function getLogo(): ?UploadedFile
    {
        return $this->logo;
    }

    /**
     * Sets logo.
     *
     * @param UploadedFile|null $logo
     *
     * @return $this
     */
    public function setLogo(?UploadedFile $logo = null): self
    {
        $this->logo = $logo;

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
     * @param string|null $name  Name of the project
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets status.
     *
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus(?string $status = null): self
    {
        $this->status = $status;

        return $this;
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
}


