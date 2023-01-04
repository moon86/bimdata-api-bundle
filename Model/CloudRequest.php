<?php
/**
 * CloudRequest
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
 * Class representing the CloudRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class CloudRequest 
{
        /**
     * Name of the cloud
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
     * @var int|null
     * @SerializedName("organization_id")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $organizationId = null;

    /**
     * @var UploadedFile|null
     * @SerializedName("image")
     * @Assert\Type("UploadedFile")
     * @Type("UploadedFile")
     */
    protected ?UploadedFile $image = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->name = $data['name'] ?? null;
        $this->organizationId = $data['organizationId'] ?? null;
        $this->image = $data['image'] ?? null;
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
     * @param string|null $name  Name of the cloud
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets organizationId.
     *
     * @return int|null
     */
    public function getOrganizationId(): ?int
    {
        return $this->organizationId;
    }

    /**
     * Sets organizationId.
     *
     * @param int|null $organizationId
     *
     * @return $this
     */
    public function setOrganizationId(?int $organizationId = null): self
    {
        $this->organizationId = $organizationId;

        return $this;
    }

    /**
     * Gets image.
     *
     * @return UploadedFile|null
     */
    public function getImage(): ?UploadedFile
    {
        return $this->image;
    }

    /**
     * Sets image.
     *
     * @param UploadedFile|null $image
     *
     * @return $this
     */
    public function setImage(?UploadedFile $image = null): self
    {
        $this->image = $image;

        return $this;
    }
}

