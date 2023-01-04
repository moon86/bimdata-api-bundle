<?php
/**
 * Extensions
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
 * Class representing the Extensions model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Extensions 
{
        /**
     * @var array|null
     * @SerializedName("topic_type")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $topicType = null;

    /**
     * @var array|null
     * @SerializedName("topic_status")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $topicStatus = null;

    /**
     * @var array|null
     * @SerializedName("topic_label")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $topicLabel = null;

    /**
     * @var array|null
     * @SerializedName("priority")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $priority = null;

    /**
     * @var array|null
     * @SerializedName("stage")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $stage = null;

    /**
     * @var array|null
     * @SerializedName("user_id_type")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $userIdType = null;

    /**
     * Non standard field. Arrays of priorities and this array are in the same order.
     *
     * @var array|null
     * @SerializedName("priority_colors")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $priorityColors = null;

    /**
     * Non standard field. Arrays of statuses and this array are in the same order.
     *
     * @var array|null
     * @SerializedName("topic_status_colors")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $topicStatusColors = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->topicType = $data['topicType'] ?? null;
        $this->topicStatus = $data['topicStatus'] ?? null;
        $this->topicLabel = $data['topicLabel'] ?? null;
        $this->priority = $data['priority'] ?? null;
        $this->stage = $data['stage'] ?? null;
        $this->userIdType = $data['userIdType'] ?? null;
        $this->priorityColors = $data['priorityColors'] ?? null;
        $this->topicStatusColors = $data['topicStatusColors'] ?? null;
    }

    /**
     * Gets topicType.
     *
     * @return array|null
     */
    public function getTopicType(): ?array
    {
        return $this->topicType;
    }

    /**
     * Sets topicType.
     *
     * @param array|null $topicType
     *
     * @return $this
     */
    public function setTopicType(?array $topicType): self
    {
        $this->topicType = $topicType;

        return $this;
    }

    /**
     * Gets topicStatus.
     *
     * @return array|null
     */
    public function getTopicStatus(): ?array
    {
        return $this->topicStatus;
    }

    /**
     * Sets topicStatus.
     *
     * @param array|null $topicStatus
     *
     * @return $this
     */
    public function setTopicStatus(?array $topicStatus): self
    {
        $this->topicStatus = $topicStatus;

        return $this;
    }

    /**
     * Gets topicLabel.
     *
     * @return array|null
     */
    public function getTopicLabel(): ?array
    {
        return $this->topicLabel;
    }

    /**
     * Sets topicLabel.
     *
     * @param array|null $topicLabel
     *
     * @return $this
     */
    public function setTopicLabel(?array $topicLabel): self
    {
        $this->topicLabel = $topicLabel;

        return $this;
    }

    /**
     * Gets priority.
     *
     * @return array|null
     */
    public function getPriority(): ?array
    {
        return $this->priority;
    }

    /**
     * Sets priority.
     *
     * @param array|null $priority
     *
     * @return $this
     */
    public function setPriority(?array $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Gets stage.
     *
     * @return array|null
     */
    public function getStage(): ?array
    {
        return $this->stage;
    }

    /**
     * Sets stage.
     *
     * @param array|null $stage
     *
     * @return $this
     */
    public function setStage(?array $stage): self
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Gets userIdType.
     *
     * @return array|null
     */
    public function getUserIdType(): ?array
    {
        return $this->userIdType;
    }

    /**
     * Sets userIdType.
     *
     * @param array|null $userIdType
     *
     * @return $this
     */
    public function setUserIdType(?array $userIdType): self
    {
        $this->userIdType = $userIdType;

        return $this;
    }

    /**
     * Gets priorityColors.
     *
     * @return array|null
     */
    public function getPriorityColors(): ?array
    {
        return $this->priorityColors;
    }

    /**
     * Sets priorityColors.
     *
     * @param array|null $priorityColors  Non standard field. Arrays of priorities and this array are in the same order.
     *
     * @return $this
     */
    public function setPriorityColors(?array $priorityColors): self
    {
        $this->priorityColors = $priorityColors;

        return $this;
    }

    /**
     * Gets topicStatusColors.
     *
     * @return array|null
     */
    public function getTopicStatusColors(): ?array
    {
        return $this->topicStatusColors;
    }

    /**
     * Sets topicStatusColors.
     *
     * @param array|null $topicStatusColors  Non standard field. Arrays of statuses and this array are in the same order.
     *
     * @return $this
     */
    public function setTopicStatusColors(?array $topicStatusColors): self
    {
        $this->topicStatusColors = $topicStatusColors;

        return $this;
    }
}

