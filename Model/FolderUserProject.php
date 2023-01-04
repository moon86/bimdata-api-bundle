<?php
/**
 * FolderUserProject
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
 * Class representing the FolderUserProject model.
 *
 * This is a flattened nested represetation of FosUser and Invitation models in this serializer.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class FolderUserProject 
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
     * @SerializedName("user_id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $userId = null;

    /**
     * @var int|null
     * @SerializedName("invitation_id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $invitationId = null;

    /**
     * @var string|null
     * @SerializedName("email")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $email = null;

    /**
     * @var string|null
     * @SerializedName("firstname")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $firstname = null;

    /**
     * @var string|null
     * @SerializedName("lastname")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $lastname = null;

    /**
     * @var string|null
     * @SerializedName("profile_picture")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $profilePicture = null;

    /**
     * @var int|null
     * @SerializedName("role")
     * @Assert\NotNull()
     * @Assert\Choice({ 100, 50, 25 })
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $role = null;

    /**
     * @var int|null
     * @SerializedName("permission")
     * @Assert\NotNull()
     * @Assert\Choice({ 1, 50, 100 })
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $permission = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->userId = $data['userId'] ?? null;
        $this->invitationId = $data['invitationId'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->firstname = $data['firstname'] ?? null;
        $this->lastname = $data['lastname'] ?? null;
        $this->profilePicture = $data['profilePicture'] ?? null;
        $this->role = $data['role'] ?? null;
        $this->permission = $data['permission'] ?? null;
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
     * Gets userId.
     *
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * Sets userId.
     *
     * @param int|null $userId
     *
     * @return $this
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Gets invitationId.
     *
     * @return int|null
     */
    public function getInvitationId(): ?int
    {
        return $this->invitationId;
    }

    /**
     * Sets invitationId.
     *
     * @param int|null $invitationId
     *
     * @return $this
     */
    public function setInvitationId(?int $invitationId): self
    {
        $this->invitationId = $invitationId;

        return $this;
    }

    /**
     * Gets email.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets email.
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets firstname.
     *
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * Sets firstname.
     *
     * @param string|null $firstname
     *
     * @return $this
     */
    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Gets lastname.
     *
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * Sets lastname.
     *
     * @param string|null $lastname
     *
     * @return $this
     */
    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Gets profilePicture.
     *
     * @return string|null
     */
    public function getProfilePicture(): ?string
    {
        return $this->profilePicture;
    }

    /**
     * Sets profilePicture.
     *
     * @param string|null $profilePicture
     *
     * @return $this
     */
    public function setProfilePicture(?string $profilePicture): self
    {
        $this->profilePicture = $profilePicture;

        return $this;
    }

    /**
     * Gets role.
     *
     * @return int|null
     */
    public function getRole(): ?int
    {
        return $this->role;
    }

    /**
     * Sets role.
     *
     * @param int|null $role
     *
     * @return $this
     */
    public function setRole(?int $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Gets permission.
     *
     * @return int|null
     */
    public function getPermission(): ?int
    {
        return $this->permission;
    }

    /**
     * Sets permission.
     *
     * @param int|null $permission
     *
     * @return $this
     */
    public function setPermission(?int $permission): self
    {
        $this->permission = $permission;

        return $this;
    }
}


