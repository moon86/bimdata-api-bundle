<?php
/**
 * Document
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
 * Class representing the Document model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Document 
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
     * @var int|null
     * @SerializedName("parent_id")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $parentId = null;

    /**
     * @var 
     * @SerializedName("created_by")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("User")
     * @Type("User")
     */
    protected  $createdBy = null;

    /**
     * @var int|null
     * @SerializedName("project")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $project = null;

    /**
     * Shown name of the file
     *
     * @var string|null
     * @SerializedName("name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 512
     * )
     */
    protected ?string $name = null;

    /**
     * Full name of the file
     *
     * @var string|null
     * @SerializedName("file_name")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 512
     * )
     */
    protected ?string $fileName = null;

    /**
     * Description of the file
     *
     * @var string|null
     * @SerializedName("description")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $description = null;

    /**
     * @var string|null
     * @SerializedName("file")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $file = null;

    /**
     * Size of the file.
     *
     * @var int|null
     * @SerializedName("size")
     * @Assert\Type("int")
     * @Type("int")
     * @Assert\GreaterThanOrEqual(0)
     * @Assert\LessThanOrEqual(9223372036854775807)
     */
    protected ?int $size = null;

    /**
     * @var array|null
     * @SerializedName("tags")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Tag")
     * })
     * @Type("array<OpenAPI\Server\Model\Tag>")
     */
    protected ?array $tags = null;

    /**
     * @var array|null
     * @SerializedName("visas")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Visa")
     * })
     * @Type("array<OpenAPI\Server\Model\Visa>")
     */
    protected ?array $visas = null;

    /**
     * Creation date
     *
     * @var \DateTime|null
     * @SerializedName("created_at")
     * @Assert\NotNull()
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $createdAt = null;

    /**
     * Date of the last update
     *
     * @var \DateTime|null
     * @SerializedName("updated_at")
     * @Assert\NotNull()
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $updatedAt = null;

    /**
     * @var int|null
     * @SerializedName("model_id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $modelId = null;

    /**
     * Model&#39;s type. Values can be IFC, DWG, DXF, GLTF, PDF, JPEG, PNG, OBJ, DAE, BFX, POINT_CLOUD
     *
     * @var string|null
     * @SerializedName("model_type")
     * @Assert\NotNull()
     * @Assert\Choice({ "IFC", "DWG", "DXF", "GLTF", "PDF", "JPEG", "PNG", "OBJ", "DAE", "BFX", "POINT_CLOUD", "null" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $modelType = null;

    /**
     * DEPRECATED: Use &#39;model_id&#39; instead.
     *
     * @var int|null
     * @SerializedName("ifc_id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $ifcId = null;

    /**
     * Aggregate of group user permissions and folder default permission
     *
     * @var int|null
     * @SerializedName("user_permission")
     * @Assert\NotNull()
     * @Assert\Choice({ 1, 50, 100 })
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $userPermission = null;

    /**
     * Document is a head of version or is owned by another document
     *
     * @var bool|null
     * @SerializedName("is_head_version")
     * @Assert\NotNull()
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected ?bool $isHeadVersion = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->parentId = $data['parentId'] ?? null;
        $this->createdBy = $data['createdBy'] ?? null;
        $this->project = $data['project'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->fileName = $data['fileName'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->file = $data['file'] ?? null;
        $this->size = $data['size'] ?? null;
        $this->tags = $data['tags'] ?? null;
        $this->visas = $data['visas'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->updatedAt = $data['updatedAt'] ?? null;
        $this->modelId = $data['modelId'] ?? null;
        $this->modelType = $data['modelType'] ?? null;
        $this->ifcId = $data['ifcId'] ?? null;
        $this->userPermission = $data['userPermission'] ?? null;
        $this->isHeadVersion = $data['isHeadVersion'] ?? null;
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
     * Gets parentId.
     *
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    /**
     * Sets parentId.
     *
     * @param int|null $parentId
     *
     * @return $this
     */
    public function setParentId(?int $parentId = null): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Gets createdBy.
     *
     * @return 
     */
    public function getCreatedBy(): 
    {
        return $this->createdBy;
    }

    /**
     * Sets createdBy.
     *
     * @param  $createdBy
     *
     * @return $this
     */
    public function setCreatedBy( $createdBy): self
    {
        $this->createdBy = $createdBy;

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
    public function setProject(?int $project): self
    {
        $this->project = $project;

        return $this;
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
     * @param string|null $name  Shown name of the file
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets fileName.
     *
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * Sets fileName.
     *
     * @param string|null $fileName  Full name of the file
     *
     * @return $this
     */
    public function setFileName(?string $fileName = null): self
    {
        $this->fileName = $fileName;

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
     * @param string|null $description  Description of the file
     *
     * @return $this
     */
    public function setDescription(?string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets file.
     *
     * @return string|null
     */
    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * Sets file.
     *
     * @param string|null $file
     *
     * @return $this
     */
    public function setFile(?string $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Gets size.
     *
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * Sets size.
     *
     * @param int|null $size  Size of the file.
     *
     * @return $this
     */
    public function setSize(?int $size = null): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Gets tags.
     *
     * @return array|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * Sets tags.
     *
     * @param array|null $tags
     *
     * @return $this
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Gets visas.
     *
     * @return array|null
     */
    public function getVisas(): ?array
    {
        return $this->visas;
    }

    /**
     * Sets visas.
     *
     * @param array|null $visas
     *
     * @return $this
     */
    public function setVisas(?array $visas): self
    {
        $this->visas = $visas;

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
     * @param \DateTime|null $createdAt  Creation date
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
     * @param \DateTime|null $updatedAt  Date of the last update
     *
     * @return $this
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Gets modelId.
     *
     * @return int|null
     */
    public function getModelId(): ?int
    {
        return $this->modelId;
    }

    /**
     * Sets modelId.
     *
     * @param int|null $modelId
     *
     * @return $this
     */
    public function setModelId(?int $modelId): self
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Gets modelType.
     *
     * @return string|null
     */
    public function getModelType(): ?string
    {
        return $this->modelType;
    }

    /**
     * Sets modelType.
     *
     * @param string|null $modelType  Model's type. Values can be IFC, DWG, DXF, GLTF, PDF, JPEG, PNG, OBJ, DAE, BFX, POINT_CLOUD
     *
     * @return $this
     */
    public function setModelType(?string $modelType): self
    {
        $this->modelType = $modelType;

        return $this;
    }

    /**
     * Gets ifcId.
     *
     * @return int|null
     */
    public function getIfcId(): ?int
    {
        return $this->ifcId;
    }

    /**
     * Sets ifcId.
     *
     * @param int|null $ifcId  DEPRECATED: Use 'model_id' instead.
     *
     * @return $this
     */
    public function setIfcId(?int $ifcId): self
    {
        $this->ifcId = $ifcId;

        return $this;
    }

    /**
     * Gets userPermission.
     *
     * @return int|null
     */
    public function getUserPermission(): ?int
    {
        return $this->userPermission;
    }

    /**
     * Sets userPermission.
     *
     * @param int|null $userPermission  Aggregate of group user permissions and folder default permission
     *
     * @return $this
     */
    public function setUserPermission(?int $userPermission): self
    {
        $this->userPermission = $userPermission;

        return $this;
    }

    /**
     * Gets isHeadVersion.
     *
     * @return bool|null
     */
    public function isIsHeadVersion(): ?bool
    {
        return $this->isHeadVersion;
    }

    /**
     * Sets isHeadVersion.
     *
     * @param bool|null $isHeadVersion  Document is a head of version or is owned by another document
     *
     * @return $this
     */
    public function setIsHeadVersion(?bool $isHeadVersion): self
    {
        $this->isHeadVersion = $isHeadVersion;

        return $this;
    }
}


