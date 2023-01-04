<?php
/**
 * Property
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
 * Class representing the Property model.
 *
 * Adds nested create feature
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Property 
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
     * @var PropertyDefinition|null
     * @SerializedName("definition")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\PropertyDefinition")
     * @Type("OpenAPI\Server\Model\PropertyDefinition")
     */
    protected ?PropertyDefinition $definition = null;

    /**
     * @var array|null
     * @SerializedName("value")
     * @Assert\All({
     *   @Assert\Type("AnyType")
     * })
     * @Type("array<string, AnyType>")
     */
    protected ?array $value = null;

    /**
     * This field is useful when you update a property and the  API is rebuilding a new property set to avoid an update on many elements. It gives you the new pset id
     *
     * @var int|null
     * @SerializedName("property_set_id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $propertySetId = null;

    /**
     * @var \DateTime|null
     * @SerializedName("created_at")
     * @Assert\NotNull()
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $createdAt = null;

    /**
     * @var \DateTime|null
     * @SerializedName("updated_at")
     * @Assert\NotNull()
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $updatedAt = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->definition = $data['definition'] ?? null;
        $this->value = $data['value'] ?? null;
        $this->propertySetId = $data['propertySetId'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->updatedAt = $data['updatedAt'] ?? null;
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
     * Gets definition.
     *
     * @return PropertyDefinition|null
     */
    public function getDefinition(): ?PropertyDefinition
    {
        return $this->definition;
    }

    /**
     * Sets definition.
     *
     * @param PropertyDefinition|null $definition
     *
     * @return $this
     */
    public function setDefinition(?PropertyDefinition $definition): self
    {
        $this->definition = $definition;

        return $this;
    }

    /**
     * Gets value.
     *
     * @return array|null
     */
    public function getValue(): ?array
    {
        return $this->value;
    }

    /**
     * Sets value.
     *
     * @param array|null $value
     *
     * @return $this
     */
    public function setValue(?array $value = null): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Gets propertySetId.
     *
     * @return int|null
     */
    public function getPropertySetId(): ?int
    {
        return $this->propertySetId;
    }

    /**
     * Sets propertySetId.
     *
     * @param int|null $propertySetId  This field is useful when you update a property and the  API is rebuilding a new property set to avoid an update on many elements. It gives you the new pset id
     *
     * @return $this
     */
    public function setPropertySetId(?int $propertySetId): self
    {
        $this->propertySetId = $propertySetId;

        return $this;
    }

    /**
     * Gets createdAt.
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets createdAt.
     *
     * @param \DateTime|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets updatedAt.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}


