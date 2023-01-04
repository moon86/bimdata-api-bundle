<?php
/**
 * SimpleElement
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
 * Class representing the SimpleElement model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class SimpleElement 
{
        /**
     * uuid of element
     *
     * @var array|null
     * @SerializedName("uuid")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("AnyType")
     * })
     * @Type("array<string, AnyType>")
     */
    protected ?array $uuid = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->uuid = $data['uuid'] ?? null;
    }

    /**
     * Gets uuid.
     *
     * @return array|null
     */
    public function getUuid(): ?array
    {
        return $this->uuid;
    }

    /**
     * Sets uuid.
     *
     * @param array|null $uuid  uuid of element
     *
     * @return $this
     */
    public function setUuid(?array $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }
}


