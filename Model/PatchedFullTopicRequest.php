<?php
/**
 * PatchedFullTopicRequest
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
 * Class representing the PatchedFullTopicRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class PatchedFullTopicRequest 
{
        /**
     * @var string|null
     * @SerializedName("guid")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $guid = null;

    /**
     * @var \DateTime|null
     * @SerializedName("creation_date")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $creationDate = null;

    /**
     * @var string|null
     * @SerializedName("creation_author")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 254
     * )
     */
    protected ?string $creationAuthor = null;

    /**
     * @var string|null
     * @SerializedName("modified_author")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 254
     * )
     */
    protected ?string $modifiedAuthor = null;

    /**
     * @var string|null
     * @SerializedName("title")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $title = null;

    /**
     * @var string|null
     * @SerializedName("description")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $description = null;

    /**
     * @var array|null
     * @SerializedName("reference_links")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $referenceLinks = null;

    /**
     * DEPRECATED: Use &#39;models&#39; instead
     *
     * @var array|null
     * @SerializedName("ifcs")
     * @Assert\All({
     *   @Assert\Type("int")
     * })
     * @Type("array<int>")
     */
    protected ?array $ifcs = null;

    /**
     * @var array|null
     * @SerializedName("models")
     * @Assert\All({
     *   @Assert\Type("int")
     * })
     * @Type("array<int>")
     */
    protected ?array $models = null;

    /**
     * @var array|null
     * @SerializedName("labels")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $labels = null;

    /**
     * @var string|null
     * @SerializedName("topic_type")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $topicType = null;

    /**
     * @var string|null
     * @SerializedName("topic_status")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $topicStatus = null;

    /**
     * @var string|null
     * @SerializedName("stage")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $stage = null;

    /**
     * @var string|null
     * @SerializedName("priority")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $priority = null;

    /**
     * @var int|null
     * @SerializedName("index")
     * @Assert\Type("int")
     * @Type("int")
     * @Assert\GreaterThanOrEqual(0)
     * @Assert\LessThanOrEqual(2147483647)
     */
    protected ?int $index = null;

    /**
     * @var string|null
     * @SerializedName("assigned_to")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 254
     * )
     */
    protected ?string $assignedTo = null;

    /**
     * The BCF data structure may be used for other purposes than BCF Topics. (Storing coordinates, a viewpoint, a list of objecs, etc)         The default value is \&quot;standard\&quot;.         If you want to use the BCF routes to store custom data not related to a BCF Topic, you must set this value to something else.         You must add a query string filter if you want to fetch topics with a non \&quot;standard\&quot; format.
     *
     * @var string|null
     * @SerializedName("format")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 64
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $format = null;

    /**
     * @var \DateTime|null
     * @SerializedName("due_date")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $dueDate = null;

    /**
     * @var array|null
     * @SerializedName("comments")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\CommentRequest")
     * })
     * @Type("array<OpenAPI\Server\Model\CommentRequest>")
     */
    protected ?array $comments = null;

    /**
     * @var array|null
     * @SerializedName("viewpoints")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\ViewpointRequest")
     * })
     * @Type("array<OpenAPI\Server\Model\ViewpointRequest>")
     */
    protected ?array $viewpoints = null;

    /**
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
        $this->guid = $data['guid'] ?? null;
        $this->creationDate = $data['creationDate'] ?? null;
        $this->creationAuthor = $data['creationAuthor'] ?? null;
        $this->modifiedAuthor = $data['modifiedAuthor'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->referenceLinks = $data['referenceLinks'] ?? null;
        $this->ifcs = $data['ifcs'] ?? null;
        $this->models = $data['models'] ?? null;
        $this->labels = $data['labels'] ?? null;
        $this->topicType = $data['topicType'] ?? null;
        $this->topicStatus = $data['topicStatus'] ?? null;
        $this->stage = $data['stage'] ?? null;
        $this->priority = $data['priority'] ?? null;
        $this->index = $data['index'] ?? null;
        $this->assignedTo = $data['assignedTo'] ?? null;
        $this->format = $data['format'] ?? null;
        $this->dueDate = $data['dueDate'] ?? null;
        $this->comments = $data['comments'] ?? null;
        $this->viewpoints = $data['viewpoints'] ?? null;
        $this->project = $data['project'] ?? null;
    }

    /**
     * Gets guid.
     *
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }

    /**
     * Sets guid.
     *
     * @param string|null $guid
     *
     * @return $this
     */
    public function setGuid(?string $guid = null): self
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Gets creationDate.
     *
     * @return \DateTime|null
     */
    public function getCreationDate(): ?\DateTime
    {
        return $this->creationDate;
    }

    /**
     * Sets creationDate.
     *
     * @param \DateTime|null $creationDate
     *
     * @return $this
     */
    public function setCreationDate(?\DateTime $creationDate = null): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Gets creationAuthor.
     *
     * @return string|null
     */
    public function getCreationAuthor(): ?string
    {
        return $this->creationAuthor;
    }

    /**
     * Sets creationAuthor.
     *
     * @param string|null $creationAuthor
     *
     * @return $this
     */
    public function setCreationAuthor(?string $creationAuthor = null): self
    {
        $this->creationAuthor = $creationAuthor;

        return $this;
    }

    /**
     * Gets modifiedAuthor.
     *
     * @return string|null
     */
    public function getModifiedAuthor(): ?string
    {
        return $this->modifiedAuthor;
    }

    /**
     * Sets modifiedAuthor.
     *
     * @param string|null $modifiedAuthor
     *
     * @return $this
     */
    public function setModifiedAuthor(?string $modifiedAuthor = null): self
    {
        $this->modifiedAuthor = $modifiedAuthor;

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
     * @param string|null $title
     *
     * @return $this
     */
    public function setTitle(?string $title = null): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets description.
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription(?string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets referenceLinks.
     *
     * @return array|null
     */
    public function getReferenceLinks(): ?array
    {
        return $this->referenceLinks;
    }

    /**
     * Sets referenceLinks.
     *
     * @param array|null $referenceLinks
     *
     * @return $this
     */
    public function setReferenceLinks(?array $referenceLinks = null): self
    {
        $this->referenceLinks = $referenceLinks;

        return $this;
    }

    /**
     * Gets ifcs.
     *
     * @return array|null
     */
    public function getIfcs(): ?array
    {
        return $this->ifcs;
    }

    /**
     * Sets ifcs.
     *
     * @param array|null $ifcs  DEPRECATED: Use 'models' instead
     *
     * @return $this
     */
    public function setIfcs(?array $ifcs = null): self
    {
        $this->ifcs = $ifcs;

        return $this;
    }

    /**
     * Gets models.
     *
     * @return array|null
     */
    public function getModels(): ?array
    {
        return $this->models;
    }

    /**
     * Sets models.
     *
     * @param array|null $models
     *
     * @return $this
     */
    public function setModels(?array $models = null): self
    {
        $this->models = $models;

        return $this;
    }

    /**
     * Gets labels.
     *
     * @return array|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * Sets labels.
     *
     * @param array|null $labels
     *
     * @return $this
     */
    public function setLabels(?array $labels = null): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Gets topicType.
     *
     * @return string|null
     */
    public function getTopicType(): ?string
    {
        return $this->topicType;
    }

    /**
     * Sets topicType.
     *
     * @param string|null $topicType
     *
     * @return $this
     */
    public function setTopicType(?string $topicType = null): self
    {
        $this->topicType = $topicType;

        return $this;
    }

    /**
     * Gets topicStatus.
     *
     * @return string|null
     */
    public function getTopicStatus(): ?string
    {
        return $this->topicStatus;
    }

    /**
     * Sets topicStatus.
     *
     * @param string|null $topicStatus
     *
     * @return $this
     */
    public function setTopicStatus(?string $topicStatus = null): self
    {
        $this->topicStatus = $topicStatus;

        return $this;
    }

    /**
     * Gets stage.
     *
     * @return string|null
     */
    public function getStage(): ?string
    {
        return $this->stage;
    }

    /**
     * Sets stage.
     *
     * @param string|null $stage
     *
     * @return $this
     */
    public function setStage(?string $stage = null): self
    {
        $this->stage = $stage;

        return $this;
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
    public function setPriority(?string $priority = null): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Gets index.
     *
     * @return int|null
     */
    public function getIndex(): ?int
    {
        return $this->index;
    }

    /**
     * Sets index.
     *
     * @param int|null $index
     *
     * @return $this
     */
    public function setIndex(?int $index = null): self
    {
        $this->index = $index;

        return $this;
    }

    /**
     * Gets assignedTo.
     *
     * @return string|null
     */
    public function getAssignedTo(): ?string
    {
        return $this->assignedTo;
    }

    /**
     * Sets assignedTo.
     *
     * @param string|null $assignedTo
     *
     * @return $this
     */
    public function setAssignedTo(?string $assignedTo = null): self
    {
        $this->assignedTo = $assignedTo;

        return $this;
    }

    /**
     * Gets format.
     *
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * Sets format.
     *
     * @param string|null $format  The BCF data structure may be used for other purposes than BCF Topics. (Storing coordinates, a viewpoint, a list of objecs, etc)         The default value is \"standard\".         If you want to use the BCF routes to store custom data not related to a BCF Topic, you must set this value to something else.         You must add a query string filter if you want to fetch topics with a non \"standard\" format.
     *
     * @return $this
     */
    public function setFormat(?string $format = null): self
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Gets dueDate.
     *
     * @return \DateTime|null
     */
    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    /**
     * Sets dueDate.
     *
     * @param \DateTime|null $dueDate
     *
     * @return $this
     */
    public function setDueDate(?\DateTime $dueDate = null): self
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Gets comments.
     *
     * @return array|null
     */
    public function getComments(): ?array
    {
        return $this->comments;
    }

    /**
     * Sets comments.
     *
     * @param array|null $comments
     *
     * @return $this
     */
    public function setComments(?array $comments = null): self
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Gets viewpoints.
     *
     * @return array|null
     */
    public function getViewpoints(): ?array
    {
        return $this->viewpoints;
    }

    /**
     * Sets viewpoints.
     *
     * @param array|null $viewpoints
     *
     * @return $this
     */
    public function setViewpoints(?array $viewpoints = null): self
    {
        $this->viewpoints = $viewpoints;

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
     * @param int|null $project
     *
     * @return $this
     */
    public function setProject(?int $project = null): self
    {
        $this->project = $project;

        return $this;
    }
}


