<?php
/**
 * SelfUser
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
 * Class representing the SelfUser model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class SelfUser 
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
     * @var string|null
     * @SerializedName("email")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 254
     * )
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
     * @var array|null
     * @SerializedName("organizations")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Organization")
     * })
     * @Type("array<OpenAPI\Server\Model\Organization>")
     */
    protected ?array $organizations = null;

    /**
     * @var array|null
     * @SerializedName("clouds")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\CloudRole")
     * })
     * @Type("array<OpenAPI\Server\Model\CloudRole>")
     */
    protected ?array $clouds = null;

    /**
     * @var array|null
     * @SerializedName("projects")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\ProjectRole")
     * })
     * @Type("array<OpenAPI\Server\Model\ProjectRole>")
     */
    protected ?array $projects = null;

    /**
     * @var string|null
     * @SerializedName("provider")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $provider = null;

    /**
     * sub from original identity provider
     *
     * @var string|null
     * @SerializedName("provider_sub")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 255
     * )
     */
    protected ?string $providerSub = null;

    /**
     * sub from Keycloak
     *
     * @var string|null
     * @SerializedName("sub")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $sub = null;

    /**
     * @var string|null
     * @SerializedName("profile_picture")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $profilePicture = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->firstname = $data['firstname'] ?? null;
        $this->lastname = $data['lastname'] ?? null;
        $this->createdAt = $data['createdAt'] ?? null;
        $this->updatedAt = $data['updatedAt'] ?? null;
        $this->organizations = $data['organizations'] ?? null;
        $this->clouds = $data['clouds'] ?? null;
        $this->projects = $data['projects'] ?? null;
        $this->provider = $data['provider'] ?? null;
        $this->providerSub = $data['providerSub'] ?? null;
        $this->sub = $data['sub'] ?? null;
        $this->profilePicture = $data['profilePicture'] ?? null;
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
     * Gets organizations.
     *
     * @return array|null
     */
    public function getOrganizations(): ?array
    {
        return $this->organizations;
    }

    /**
     * Sets organizations.
     *
     * @param array|null $organizations
     *
     * @return $this
     */
    public function setOrganizations(?array $organizations): self
    {
        $this->organizations = $organizations;

        return $this;
    }

    /**
     * Gets clouds.
     *
     * @return array|null
     */
    public function getClouds(): ?array
    {
        return $this->clouds;
    }

    /**
     * Sets clouds.
     *
     * @param array|null $clouds
     *
     * @return $this
     */
    public function setClouds(?array $clouds): self
    {
        $this->clouds = $clouds;

        return $this;
    }

    /**
     * Gets projects.
     *
     * @return array|null
     */
    public function getProjects(): ?array
    {
        return $this->projects;
    }

    /**
     * Sets projects.
     *
     * @param array|null $projects
     *
     * @return $this
     */
    public function setProjects(?array $projects): self
    {
        $this->projects = $projects;

        return $this;
    }

    /**
     * Gets provider.
     *
     * @return string|null
     */
    public function getProvider(): ?string
    {
        return $this->provider;
    }

    /**
     * Sets provider.
     *
     * @param string|null $provider
     *
     * @return $this
     */
    public function setProvider(?string $provider): self
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Gets providerSub.
     *
     * @return string|null
     */
    public function getProviderSub(): ?string
    {
        return $this->providerSub;
    }

    /**
     * Sets providerSub.
     *
     * @param string|null $providerSub  sub from original identity provider
     *
     * @return $this
     */
    public function setProviderSub(?string $providerSub = null): self
    {
        $this->providerSub = $providerSub;

        return $this;
    }

    /**
     * Gets sub.
     *
     * @return string|null
     */
    public function getSub(): ?string
    {
        return $this->sub;
    }

    /**
     * Sets sub.
     *
     * @param string|null $sub  sub from Keycloak
     *
     * @return $this
     */
    public function setSub(?string $sub): self
    {
        $this->sub = $sub;

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
}


