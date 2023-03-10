<?php
/**
 * RawElement
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
 * Class representing the RawElement model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class RawElement 
{
        /**
     * @var string|null
     * @SerializedName("uuid")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $uuid = null;

    /**
     * @var string|null
     * @SerializedName("type")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $type = null;

    /**
     * @var int|null
     * @SerializedName("attributes")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $attributes = null;

    /**
     * @var array|null
     * @SerializedName("material_list")
     * @Assert\All({
     *   @Assert\Type("int")
     * })
     * @Type("array<int>")
     */
    protected ?array $materialList = null;

    /**
     * @var array|null
     * @SerializedName("psets")
     * @Assert\All({
     *   @Assert\Type("int")
     * })
     * @Type("array<int>")
     */
    protected ?array $psets = null;

    /**
     * @var array|null
     * @SerializedName("classifications")
     * @Assert\All({
     *   @Assert\Type("int")
     * })
     * @Type("array<int>")
     */
    protected ?array $classifications = null;

    /**
     * @var array|null
     * @SerializedName("layers")
     * @Assert\All({
     *   @Assert\Type("int")
     * })
     * @Type("array<int>")
     */
    protected ?array $layers = null;

    /**
     * @var array|null
     * @SerializedName("systems")
     * @Assert\All({
     *   @Assert\Type("int")
     * })
     * @Type("array<int>")
     */
    protected ?array $systems = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->uuid = $data['uuid'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->attributes = $data['attributes'] ?? null;
        $this->materialList = $data['materialList'] ?? null;
        $this->psets = $data['psets'] ?? null;
        $this->classifications = $data['classifications'] ?? null;
        $this->layers = $data['layers'] ?? null;
        $this->systems = $data['systems'] ?? null;
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
    public function setUuid(?string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Gets type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets type.
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets attributes.
     *
     * @return int|null
     */
    public function getAttributes(): ?int
    {
        return $this->attributes;
    }

    /**
     * Sets attributes.
     *
     * @param int|null $attributes
     *
     * @return $this
     */
    public function setAttributes(?int $attributes = null): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Gets materialList.
     *
     * @return array|null
     */
    public function getMaterialList(): ?array
    {
        return $this->materialList;
    }

    /**
     * Sets materialList.
     *
     * @param array|null $materialList
     *
     * @return $this
     */
    public function setMaterialList(?array $materialList = null): self
    {
        $this->materialList = $materialList;

        return $this;
    }

    /**
     * Gets psets.
     *
     * @return array|null
     */
    public function getPsets(): ?array
    {
        return $this->psets;
    }

    /**
     * Sets psets.
     *
     * @param array|null $psets
     *
     * @return $this
     */
    public function setPsets(?array $psets = null): self
    {
        $this->psets = $psets;

        return $this;
    }

    /**
     * Gets classifications.
     *
     * @return array|null
     */
    public function getClassifications(): ?array
    {
        return $this->classifications;
    }

    /**
     * Sets classifications.
     *
     * @param array|null $classifications
     *
     * @return $this
     */
    public function setClassifications(?array $classifications = null): self
    {
        $this->classifications = $classifications;

        return $this;
    }

    /**
     * Gets layers.
     *
     * @return array|null
     */
    public function getLayers(): ?array
    {
        return $this->layers;
    }

    /**
     * Sets layers.
     *
     * @param array|null $layers
     *
     * @return $this
     */
    public function setLayers(?array $layers = null): self
    {
        $this->layers = $layers;

        return $this;
    }

    /**
     * Gets systems.
     *
     * @return array|null
     */
    public function getSystems(): ?array
    {
        return $this->systems;
    }

    /**
     * Sets systems.
     *
     * @param array|null $systems
     *
     * @return $this
     */
    public function setSystems(?array $systems = null): self
    {
        $this->systems = $systems;

        return $this;
    }
}


