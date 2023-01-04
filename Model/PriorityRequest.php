<?php
/**
 * PriorityRequest
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
 * Class representing the PriorityRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class PriorityRequest 
{
        /**
     * @var string|null
     * @SerializedName("priority")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 255
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $priority = null;

    /**
     * @var string|null
     * @SerializedName("color")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 8
     * )
     */
    protected ?string $color = null;

    /**
     * This field is automatically provided by the route, you don&#39;t need to provide it in the body
     *
     * @var int|null
     * @SerializedName("project")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $project = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->priority = $data['priority'] ?? null;
        $this->color = $data['color'] ?? null;
        $this->project = $data['project'] ?? null;
    }

    /**
     * Gets priority.
     *
     * @return string|null
     */
    public function getPriority(): ?string
    {
        return $this->priority;
    }

    /**
     * Sets priority.
     *
     * @param string|null $priority
     *
     * @return $this
     */
    public function setPriority(?string $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Gets color.
     *
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * Sets color.
     *
     * @param string|null $color
     *
     * @return $this
     */
    public function setColor(?string $color = null): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Gets project.
     *
     * @return int|null
     */
    public function getProject(): ?int
    {
        return $this->project;
    }

    /**
     * Sets project.
     *
     * @param int|null $project  This field is automatically provided by the route, you don't need to provide it in the body
     *
     * @return $this
     */
    public function setProject(?int $project = null): self
    {
        $this->project = $project;

        return $this;
    }
}

