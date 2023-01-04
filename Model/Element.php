<?php
/**
 * Element
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
 * Class representing the Element model.
 *
 * Adds nested create feature
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Element 
{
        /**
     * @var int|null
     * @SerializedName("id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $id = null;

    /**
     * @var string|null
     * @SerializedName("uuid")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 22
     * )
     * @Assert\Length(
     *   min = 22
     * )
     */
    protected ?string $uuid = null;

    /**
     * IFC type for the element
     *
     * @var string|null
     * @SerializedName("type")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 64
     * )
     */
    protected ?string $type = null;

    /**
     * @var PropertySet|null
     * @SerializedName("attributes")
     * @Assert\Type("OpenAPI\Server\Model\PropertySet")
     * @Type("OpenAPI\Server\Model\PropertySet")
     */
    protected ?PropertySet $attributes = null;

    /**
     * @var array|null
     * @SerializedName("property_sets")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\PropertySet")
     * })
     * @Type("array<OpenAPI\Server\Model\PropertySet>")
     */
    protected ?array $propertySets = null;

    /**
     * @var array|null
     * @SerializedName("classifications")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Classification")
     * })
     * @Type("array<OpenAPI\Server\Model\Classification>")
     */
    protected ?array $classifications = null;

    /**
     * @var array|null
     * @SerializedName("material_list")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\MaterialListComponent")
     * })
     * @Type("array<OpenAPI\Server\Model\MaterialListComponent>")
     */
    protected ?array $materialList = null;

    /**
     * @var array|null
     * @SerializedName("layers")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\LayerElement")
     * })
     * @Type("array<OpenAPI\Server\Model\LayerElement>")
     */
    protected ?array $layers = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->uuid = $data['uuid'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->attributes = $data['attributes'] ?? null;
        $this->propertySets = $data['propertySets'] ?? null;
        $this->classifications = $data['classifications'] ?? null;
        $this->materialList = $data['materialList'] ?? null;
        $this->layers = $data['layers'] ?? null;
    }

    /**
     * Gets id.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param int|null $id
     *
     * @return $this
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

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
     * @param string|null $type  IFC type for the element
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
     * @return PropertySet|null
     */
    public function getAttributes(): ?PropertySet
    {
        return $this->attributes;
    }

    /**
     * Sets attributes.
     *
     * @param PropertySet|null $attributes
     *
     * @return $this
     */
    public function setAttributes(?PropertySet $attributes = null): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Gets propertySets.
     *
     * @return array|null
     */
    public function getPropertySets(): ?array
    {
        return $this->propertySets;
    }

    /**
     * Sets propertySets.
     *
     * @param array|null $propertySets
     *
     * @return $this
     */
    public function setPropertySets(?array $propertySets = null): self
    {
        $this->propertySets = $propertySets;

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
    public function setMaterialList(?array $materialList): self
    {
        $this->materialList = $materialList;

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
}


