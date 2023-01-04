<?php
/**
 * DetailedExtensions
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
 * Class representing the DetailedExtensions model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class DetailedExtensions 
{
        /**
     * @var array|null
     * @SerializedName("topic_labels")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Label")
     * })
     * @Type("array<OpenAPI\Server\Model\Label>")
     */
    protected ?array $topicLabels = null;

    /**
     * @var array|null
     * @SerializedName("topic_types")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\TopicType")
     * })
     * @Type("array<OpenAPI\Server\Model\TopicType>")
     */
    protected ?array $topicTypes = null;

    /**
     * @var array|null
     * @SerializedName("topic_statuses")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\TopicStatus")
     * })
     * @Type("array<OpenAPI\Server\Model\TopicStatus>")
     */
    protected ?array $topicStatuses = null;

    /**
     * @var array|null
     * @SerializedName("priorities")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Priority")
     * })
     * @Type("array<OpenAPI\Server\Model\Priority>")
     */
    protected ?array $priorities = null;

    /**
     * @var array|null
     * @SerializedName("stages")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Stage")
     * })
     * @Type("array<OpenAPI\Server\Model\Stage>")
     */
    protected ?array $stages = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->topicLabels = $data['topicLabels'] ?? null;
        $this->topicTypes = $data['topicTypes'] ?? null;
        $this->topicStatuses = $data['topicStatuses'] ?? null;
        $this->priorities = $data['priorities'] ?? null;
        $this->stages = $data['stages'] ?? null;
    }

    /**
     * Gets topicLabels.
     *
     * @return array|null
     */
    public function getTopicLabels(): ?array
    {
        return $this->topicLabels;
    }

    /**
     * Sets topicLabels.
     *
     * @param array|null $topicLabels
     *
     * @return $this
     */
    public function setTopicLabels(?array $topicLabels = null): self
    {
        $this->topicLabels = $topicLabels;

        return $this;
    }

    /**
     * Gets topicTypes.
     *
     * @return array|null
     */
    public function getTopicTypes(): ?array
    {
        return $this->topicTypes;
    }

    /**
     * Sets topicTypes.
     *
     * @param array|null $topicTypes
     *
     * @return $this
     */
    public function setTopicTypes(?array $topicTypes = null): self
    {
        $this->topicTypes = $topicTypes;

        return $this;
    }

    /**
     * Gets topicStatuses.
     *
     * @return array|null
     */
    public function getTopicStatuses(): ?array
    {
        return $this->topicStatuses;
    }

    /**
     * Sets topicStatuses.
     *
     * @param array|null $topicStatuses
     *
     * @return $this
     */
    public function setTopicStatuses(?array $topicStatuses = null): self
    {
        $this->topicStatuses = $topicStatuses;

        return $this;
    }

    /**
     * Gets priorities.
     *
     * @return array|null
     */
    public function getPriorities(): ?array
    {
        return $this->priorities;
    }

    /**
     * Sets priorities.
     *
     * @param array|null $priorities
     *
     * @return $this
     */
    public function setPriorities(?array $priorities = null): self
    {
        $this->priorities = $priorities;

        return $this;
    }

    /**
     * Gets stages.
     *
     * @return array|null
     */
    public function getStages(): ?array
    {
        return $this->stages;
    }

    /**
     * Sets stages.
     *
     * @param array|null $stages
     *
     * @return $this
     */
    public function setStages(?array $stages = null): self
    {
        $this->stages = $stages;

        return $this;
    }
}


