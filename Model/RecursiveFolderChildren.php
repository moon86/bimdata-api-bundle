<?php
/**
 * RecursiveFolderChildren
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
 * Class representing the RecursiveFolderChildren model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class RecursiveFolderChildren 
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
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $parentId = null;

    /**
     * @var RecursiveFolderChildrenCreatedBy|null
     * @SerializedName("created_by")
     * @Assert\Type("OpenAPI\Server\Model\RecursiveFolderChildrenCreatedBy")
     * @Type("OpenAPI\Server\Model\RecursiveFolderChildrenCreatedBy")
     */
    protected ?RecursiveFolderChildrenCreatedBy $createdBy = null;

    /**
     * @var RecursiveFolderChildrenCreatedBy|null
     * @SerializedName("creator")
     * @Assert\Type("OpenAPI\Server\Model\RecursiveFolderChildrenCreatedBy")
     * @Type("OpenAPI\Server\Model\RecursiveFolderChildrenCreatedBy")
     */
    protected ?RecursiveFolderChildrenCreatedBy $creator = null;

    /**
     * DEPRECATED: Use &#39;nature&#39; instead. Values can be &#39;Folder&#39;, &#39;Document&#39; or &#39;Ifc&#39;. It is usefull to parse the tree and discriminate folders and files
     *
     * @var string|null
     * @SerializedName("type")
     * @Assert\NotNull()
     * @Assert\Choice({ "Folder", "Document", "Ifc" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $type = null;

    /**
     * Values can be &#39;Folder&#39;, &#39;Document&#39; or &#39;Model&#39;. It is usefull to parse the tree and discriminate folders and files
     *
     * @var string|null
     * @SerializedName("nature")
     * @Assert\NotNull()
     * @Assert\Choice({ "Folder", "Document", "Model" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $nature = null;

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
     * @var string|null
     * @SerializedName("name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $name = null;

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
     * @var string|null
     * @SerializedName("file_name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $fileName = null;

    /**
     * @var string|null
     * @SerializedName("description")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $description = null;

    /**
     * @var int|null
     * @SerializedName("size")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $size = null;

    /**
     * @var int|null
     * @SerializedName("model_id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $modelId = null;

    /**
     * DEPRECATED: Use &#39;model_id&#39; instead
     *
     * @var int|null
     * @SerializedName("ifc_id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $ifcId = null;

    /**
     * @var string|null
     * @SerializedName("file")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $file = null;

    /**
     * Groups permissions of folder
     *
     * @var array|null
     * @SerializedName("groups_permissions")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\FolderGroupPermission")
     * })
     * @Type("array<OpenAPI\Server\Model\FolderGroupPermission>")
     */
    protected ?array $groupsPermissions = null;

    /**
     * Default permissions of folder
     *
     * @var int|null
     * @SerializedName("default_permission")
     * @Assert\NotNull()
     * @Assert\Choice({ 1, 50, 100 })
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $defaultPermission = null;

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
     * History of a document
     *
     * @var array|null
     * @SerializedName("history")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Document")
     * })
     * @Type("array<OpenAPI\Server\Model\Document>")
     */
    protected ?array $history = null;

    /**
     * Tags of a document
     *
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
     * @SerializedName("children")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\RecursiveFolderChildren")
     * })
     * @Type("array<OpenAPI\Server\Model\RecursiveFolderChildren>")
     */
    protected ?array $children = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->parentId = $data['parentId'] ?? null;
        $this->createdBy = $data['createdBy'] ?? null;
        $this->creator = $data['creator'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->nature = $data['nature'] ?? null;
        $this->modelType = $data['modelType'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->updatedAt = $data['updatedAt'] ?? null;
        $this->fileName = $data['fileName'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->size = $data['size'] ?? null;
        $this->modelId = $data['modelId'] ?? null;
        $this->ifcId = $data['ifcId'] ?? null;
        $this->file = $data['file'] ?? null;
        $this->groupsPermissions = $data['groupsPermissions'] ?? null;
        $this->defaultPermission = $data['defaultPermission'] ?? null;
        $this->userPermission = $data['userPermission'] ?? null;
        $this->history = $data['history'] ?? null;
        $this->tags = $data['tags'] ?? null;
        $this->children = $data['children'] ?? null;
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
    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Gets createdBy.
     *
     * @return RecursiveFolderChildrenCreatedBy|null
     */
    public function getCreatedBy(): ?RecursiveFolderChildrenCreatedBy
    {
        return $this->createdBy;
    }

    /**
     * Sets createdBy.
     *
     * @param RecursiveFolderChildrenCreatedBy|null $createdBy
     *
     * @return $this
     */
    public function setCreatedBy(?RecursiveFolderChildrenCreatedBy $createdBy = null): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Gets creator.
     *
     * @return RecursiveFolderChildrenCreatedBy|null
     */
    public function getCreator(): ?RecursiveFolderChildrenCreatedBy
    {
        return $this->creator;
    }

    /**
     * Sets creator.
     *
     * @param RecursiveFolderChildrenCreatedBy|null $creator
     *
     * @return $this
     */
    public function setCreator(?RecursiveFolderChildrenCreatedBy $creator = null): self
    {
        $this->creator = $creator;

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
     * @param string|null $type  DEPRECATED: Use 'nature' instead. Values can be 'Folder', 'Document' or 'Ifc'. It is usefull to parse the tree and discriminate folders and files
     *
     * @return $this
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets nature.
     *
     * @return string|null
     */
    public function getNature(): ?string
    {
        return $this->nature;
    }

    /**
     * Sets nature.
     *
     * @param string|null $nature  Values can be 'Folder', 'Document' or 'Model'. It is usefull to parse the tree and discriminate folders and files
     *
     * @return $this
     */
    public function setNature(?string $nature): self
    {
        $this->nature = $nature;

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
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

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
     * @param string|null $fileName
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
     * @param int|null $size
     *
     * @return $this
     */
    public function setSize(?int $size = null): self
    {
        $this->size = $size;

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
     * @param int|null $ifcId  DEPRECATED: Use 'model_id' instead
     *
     * @return $this
     */
    public function setIfcId(?int $ifcId): self
    {
        $this->ifcId = $ifcId;

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
    public function setFile(?string $file = null): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Gets groupsPermissions.
     *
     * @return array|null
     */
    public function getGroupsPermissions(): ?array
    {
        return $this->groupsPermissions;
    }

    /**
     * Sets groupsPermissions.
     *
     * @param array|null $groupsPermissions  Groups permissions of folder
     *
     * @return $this
     */
    public function setGroupsPermissions(?array $groupsPermissions): self
    {
        $this->groupsPermissions = $groupsPermissions;

        return $this;
    }

    /**
     * Gets defaultPermission.
     *
     * @return int|null
     */
    public function getDefaultPermission(): ?int
    {
        return $this->defaultPermission;
    }

    /**
     * Sets defaultPermission.
     *
     * @param int|null $defaultPermission  Default permissions of folder
     *
     * @return $this
     */
    public function setDefaultPermission(?int $defaultPermission): self
    {
        $this->defaultPermission = $defaultPermission;

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
     * Gets history.
     *
     * @return array|null
     */
    public function getHistory(): ?array
    {
        return $this->history;
    }

    /**
     * Sets history.
     *
     * @param array|null $history  History of a document
     *
     * @return $this
     */
    public function setHistory(?array $history): self
    {
        $this->history = $history;

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
     * @param array|null $tags  Tags of a document
     *
     * @return $this
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Gets children.
     *
     * @return array|null
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }

    /**
     * Sets children.
     *
     * @param array|null $children
     *
     * @return $this
     */
    public function setChildren(?array $children = null): self
    {
        $this->children = $children;

        return $this;
    }
}


