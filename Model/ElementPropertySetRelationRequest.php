<?php
/**
 * ElementPropertySetRelationRequest
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
 * Class representing the ElementPropertySetRelationRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class ElementPropertySetRelationRequest 
{
        /**
     * @var string|null
     * @SerializedName("element_uuid")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $elementUuid = null;

    /**
     * @var int|null
     * @SerializedName("property_set_id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $propertySetId = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->elementUuid = $data['elementUuid'] ?? null;
        $this->propertySetId = $data['propertySetId'] ?? null;
    }

    /**
     * Gets elementUuid.
     *
     * @return string|null
     */
    public function getElementUuid(): ?string
    {
        return $this->elementUuid;
    }

    /**
     * Sets elementUuid.
     *
     * @param string|null $elementUuid
     *
     * @return $this
     */
    public function setElementUuid(?string $elementUuid): self
    {
        $this->elementUuid = $elementUuid;

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
     * @param int|null $propertySetId
     *
     * @return $this
     */
    public function setPropertySetId(?int $propertySetId): self
    {
        $this->propertySetId = $propertySetId;

        return $this;
    }
}


