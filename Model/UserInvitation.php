<?php
/**
 * UserInvitation
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
 * Class representing the UserInvitation model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class UserInvitation 
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
     * User will be redirected to this uri when they accept the invitation
     *
     * @var string|null
     * @SerializedName("redirect_uri")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 512
     * )
     */
    protected ?string $redirectUri = null;

    /**
     * @var int|null
     * @SerializedName("cloud_id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $cloudId = null;

    /**
     * @var string|null
     * @SerializedName("cloud_name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $cloudName = null;

    /**
     * @var int|null
     * @SerializedName("project_id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $projectId = null;

    /**
     * @var string|null
     * @SerializedName("project_name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $projectName = null;

    /**
     * A: Accepted         D: Denied         P: Pending
     *
     * @var string|null
     * @SerializedName("status")
     * @Assert\Choice({ "A", "D", "P" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $status = null;

    /**
     * @var string|null
     * @SerializedName("client_name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $clientName = null;

    /**
     * @var User|null
     * @SerializedName("sender")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\User")
     * @Type("OpenAPI\Server\Model\User")
     */
    protected ?User $sender = null;

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
     * @SerializedName("responded_at")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected ?\DateTime $respondedAt = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->redirectUri = $data['redirectUri'] ?? null;
        $this->cloudId = $data['cloudId'] ?? null;
        $this->cloudName = $data['cloudName'] ?? null;
        $this->projectId = $data['projectId'] ?? null;
        $this->projectName = $data['projectName'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->clientName = $data['clientName'] ?? null;
        $this->sender = $data['sender'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->respondedAt = $data['respondedAt'] ?? null;
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
     * Gets redirectUri.
     *
     * @return string|null
     */
    public function getRedirectUri(): ?string
    {
        return $this->redirectUri;
    }

    /**
     * Sets redirectUri.
     *
     * @param string|null $redirectUri  User will be redirected to this uri when they accept the invitation
     *
     * @return $this
     */
    public function setRedirectUri(?string $redirectUri): self
    {
        $this->redirectUri = $redirectUri;

        return $this;
    }

    /**
     * Gets cloudId.
     *
     * @return int|null
     */
    public function getCloudId(): ?int
    {
        return $this->cloudId;
    }

    /**
     * Sets cloudId.
     *
     * @param int|null $cloudId
     *
     * @return $this
     */
    public function setCloudId(?int $cloudId): self
    {
        $this->cloudId = $cloudId;

        return $this;
    }

    /**
     * Gets cloudName.
     *
     * @return string|null
     */
    public function getCloudName(): ?string
    {
        return $this->cloudName;
    }

    /**
     * Sets cloudName.
     *
     * @param string|null $cloudName
     *
     * @return $this
     */
    public function setCloudName(?string $cloudName): self
    {
        $this->cloudName = $cloudName;

        return $this;
    }

    /**
     * Gets projectId.
     *
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * Sets projectId.
     *
     * @param int|null $projectId
     *
     * @return $this
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Gets projectName.
     *
     * @return string|null
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * Sets projectName.
     *
     * @param string|null $projectName
     *
     * @return $this
     */
    public function setProjectName(?string $projectName = null): self
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets status.
     *
     * @param string|null $status  A: Accepted         D: Denied         P: Pending
     *
     * @return $this
     */
    public function setStatus(?string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets clientName.
     *
     * @return string|null
     */
    public function getClientName(): ?string
    {
        return $this->clientName;
    }

    /**
     * Sets clientName.
     *
     * @param string|null $clientName
     *
     * @return $this
     */
    public function setClientName(?string $clientName): self
    {
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * Gets sender.
     *
     * @return User|null
     */
    public function getSender(): ?User
    {
        return $this->sender;
    }

    /**
     * Sets sender.
     *
     * @param User|null $sender
     *
     * @return $this
     */
    public function setSender(?User $sender): self
    {
        $this->sender = $sender;

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
     * Gets respondedAt.
     *
     * @return \DateTime|null
     */
    public function getRespondedAt(): ?\DateTime
    {
        return $this->respondedAt;
    }

    /**
     * Sets respondedAt.
     *
     * @param \DateTime|null $respondedAt
     *
     * @return $this
     */
    public function setRespondedAt(?\DateTime $respondedAt = null): self
    {
        $this->respondedAt = $respondedAt;

        return $this;
    }
}

