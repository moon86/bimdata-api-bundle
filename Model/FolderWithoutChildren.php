<?php
/**
 * FolderWithoutChildren
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
 * Class representing the FolderWithoutChildren model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class FolderWithoutChildren 
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
     * DEPRECATED: Use &#39;nature&#39; instead. Value is \&quot;Folder\&quot;. It is usefull to parse the tree and discriminate folders and files
     *
     * @var string|null
     * @SerializedName("type")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $type = null;

    /**
     * Value is \&quot;Folder\&quot;. It is usefull to parse the tree and discriminate folders and files
     *
     * @var string|null
     * @SerializedName("nature")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $nature = null;

    /**
     * Name of the folder
     *
     * @var string|null
     * @SerializedName("name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 255
     * )
     */
    protected ?string $name = null;

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
     * @var 
     * @SerializedName("created_by")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("User")
     * @Type("User")
     */
    protected  $createdBy = null;

    /**
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
     * Permission for a Folder
     *
     * @var int|null
     * @SerializedName("default_permission")
     * @Assert\Choice({ 1, 50, 100 })
     * @Assert\Type("int")
     * @Type("int")
     * @Assert\GreaterThanOrEqual(-32768)
     * @Assert\LessThanOrEqual(32767)
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
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->parentId = $data['parentId'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->nature = $data['nature'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->updatedAt = $data['updatedAt'] ?? null;
        $this->createdBy = $data['createdBy'] ?? null;
        $this->groupsPermissions = $data['groupsPermissions'] ?? null;
        $this->defaultPermission = $data['defaultPermission'] ?? null;
        $this->userPermission = $data['userPermission'] ?? null;
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
     * @param string|null $type  DEPRECATED: Use 'nature' instead. Value is \"Folder\". It is usefull to parse the tree and discriminate folders and files
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
     * @param string|null $nature  Value is \"Folder\". It is usefull to parse the tree and discriminate folders and files
     *
     * @return $this
     */
    public function setNature(?string $nature): self
    {
        $this->nature = $nature;

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
     * @param string|null $name  Name of the folder
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
     * @param array|null $groupsPermissions
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
     * @param int|null $defaultPermission  Permission for a Folder
     *
     * @return $this
     */
    public function setDefaultPermission(?int $defaultPermission = null): self
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
}

