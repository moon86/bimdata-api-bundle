<?php
/**
 * ClassificationRequest
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
 * Class representing the ClassificationRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class ClassificationRequest 
{
        /**
     * Name of the classification (uniformat, Untec, custom, etc)
     *
     * @var string|null
     * @SerializedName("name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $name = null;

    /**
     * Code of the classification
     *
     * @var string|null
     * @SerializedName("notation")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $notation = null;

    /**
     * Full title of the classification
     *
     * @var string|null
     * @SerializedName("title")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $title = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->name = $data['name'] ?? null;
        $this->notation = $data['notation'] ?? null;
        $this->title = $data['title'] ?? null;
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
     * @param string|null $name  Name of the classification (uniformat, Untec, custom, etc)
     *
     * @return $this
     */
    public function setName(?string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets notation.
     *
     * @return string|null
     */
    public function getNotation(): ?string
    {
        return $this->notation;
    }

    /**
     * Sets notation.
     *
     * @param string|null $notation  Code of the classification
     *
     * @return $this
     */
    public function setNotation(?string $notation = null): self
    {
        $this->notation = $notation;

        return $this;
    }

    /**
     * Gets title.
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Sets title.
     *
     * @param string|null $title  Full title of the classification
     *
     * @return $this
     */
    public function setTitle(?string $title = null): self
    {
        $this->title = $title;

        return $this;
    }
}


