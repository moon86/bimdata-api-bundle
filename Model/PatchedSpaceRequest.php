<?php
/**
 * PatchedSpaceRequest
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
 * Class representing the PatchedSpaceRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class PatchedSpaceRequest 
{
        /**
     * @var string|null
     * @SerializedName("name")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 255
     * )
     */
    protected ?string $name = null;

    /**
     * @var string|null
     * @SerializedName("longname")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 255
     * )
     */
    protected ?string $longname = null;

    /**
     * @var string|null
     * @SerializedName("uuid")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 512
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $uuid = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->name = $data['name'] ?? null;
        $this->longname = $data['longname'] ?? null;
        $this->uuid = $data['uuid'] ?? null;
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
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets longname.
     *
     * @return string|null
     */
    public function getLongname(): ?string
    {
        return $this->longname;
    }

    /**
     * Sets longname.
     *
     * @param string|null $longname
     *
     * @return $this
     */
    public function setLongname(?string $longname = null): self
    {
        $this->longname = $longname;

        return $this;
    }

    /**
     * Gets uuid.
     *
     * @return string|null
     */
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    /**
     * Sets uuid.
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid(?string $uuid = null): self
    {
        $this->uuid = $uuid;

        return $this;
    }
}


