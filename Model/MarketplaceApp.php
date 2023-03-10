<?php
/**
 * MarketplaceApp
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
 * Class representing the MarketplaceApp model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class MarketplaceApp 
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
     * @SerializedName("name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 256
     * )
     */
    protected ?string $name = null;

    /**
     * @var string|null
     * @SerializedName("short_description")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 130
     * )
     */
    protected ?string $shortDescription = null;

    /**
     * @var string|null
     * @SerializedName("long_description")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $longDescription = null;

    /**
     * @var string|null
     * @SerializedName("activation_webhook_url")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 1024
     * )
     */
    protected ?string $activationWebhookUrl = null;

    /**
     * @var string|null
     * @SerializedName("post_activation_redirect_uri")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 1024
     * )
     */
    protected ?string $postActivationRedirectUri = null;

    /**
     * @var array|null
     * @SerializedName("viewer_plugins_urls")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $viewerPluginsUrls = null;

    /**
     * @var 
     * @SerializedName("creator")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("User")
     * @Type("User")
     */
    protected  $creator = null;

    /**
     * @var array|null
     * @SerializedName("scopes")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $scopes = null;

    /**
     * this URL will be called with query params ?cloud_id&#x3D;
     *
     * @var string|null
     * @SerializedName("settings_url")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 1024
     * )
     */
    protected ?string $settingsUrl = null;

    /**
     * @var bool|null
     * @SerializedName("is_public")
     * @Assert\NotNull()
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected ?bool $isPublic = null;

    /**
     * @var array|null
     * @SerializedName("tags")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $tags = null;

    /**
     * @var string|null
     * @SerializedName("logo")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $logo = null;

    /**
     * @var string|null
     * @SerializedName("file")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $file = null;

    /**
     * @var array|null
     * @SerializedName("images")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\MarketplaceAppImage")
     * })
     * @Type("array<OpenAPI\Server\Model\MarketplaceAppImage>")
     */
    protected ?array $images = null;

    /**
     * @var 
     * @SerializedName("organization")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("PublicOrganization")
     * @Type("PublicOrganization")
     */
    protected  $organization = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->shortDescription = $data['shortDescription'] ?? null;
        $this->longDescription = $data['longDescription'] ?? null;
        $this->activationWebhookUrl = $data['activationWebhookUrl'] ?? null;
        $this->postActivationRedirectUri = $data['postActivationRedirectUri'] ?? null;
        $this->viewerPluginsUrls = $data['viewerPluginsUrls'] ?? null;
        $this->creator = $data['creator'] ?? null;
        $this->scopes = $data['scopes'] ?? null;
        $this->settingsUrl = $data['settingsUrl'] ?? null;
        $this->isPublic = $data['isPublic'] ?? null;
        $this->tags = $data['tags'] ?? null;
        $this->logo = $data['logo'] ?? null;
        $this->file = $data['file'] ?? null;
        $this->images = $data['images'] ?? null;
        $this->organization = $data['organization'] ?? null;
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
     * Gets shortDescription.
     *
     * @return string|null
     */
    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    /**
     * Sets shortDescription.
     *
     * @param string|null $shortDescription
     *
     * @return $this
     */
    public function setShortDescription(?string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Gets longDescription.
     *
     * @return string|null
     */
    public function getLongDescription(): ?string
    {
        return $this->longDescription;
    }

    /**
     * Sets longDescription.
     *
     * @param string|null $longDescription
     *
     * @return $this
     */
    public function setLongDescription(?string $longDescription): self
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    /**
     * Gets activationWebhookUrl.
     *
     * @return string|null
     */
    public function getActivationWebhookUrl(): ?string
    {
        return $this->activationWebhookUrl;
    }

    /**
     * Sets activationWebhookUrl.
     *
     * @param string|null $activationWebhookUrl
     *
     * @return $this
     */
    public function setActivationWebhookUrl(?string $activationWebhookUrl = null): self
    {
        $this->activationWebhookUrl = $activationWebhookUrl;

        return $this;
    }

    /**
     * Gets postActivationRedirectUri.
     *
     * @return string|null
     */
    public function getPostActivationRedirectUri(): ?string
    {
        return $this->postActivationRedirectUri;
    }

    /**
     * Sets postActivationRedirectUri.
     *
     * @param string|null $postActivationRedirectUri
     *
     * @return $this
     */
    public function setPostActivationRedirectUri(?string $postActivationRedirectUri = null): self
    {
        $this->postActivationRedirectUri = $postActivationRedirectUri;

        return $this;
    }

    /**
     * Gets viewerPluginsUrls.
     *
     * @return array|null
     */
    public function getViewerPluginsUrls(): ?array
    {
        return $this->viewerPluginsUrls;
    }

    /**
     * Sets viewerPluginsUrls.
     *
     * @param array|null $viewerPluginsUrls
     *
     * @return $this
     */
    public function setViewerPluginsUrls(?array $viewerPluginsUrls = null): self
    {
        $this->viewerPluginsUrls = $viewerPluginsUrls;

        return $this;
    }

    /**
     * Gets creator.
     *
     * @return 
     */
    public function getCreator(): 
    {
        return $this->creator;
    }

    /**
     * Sets creator.
     *
     * @param  $creator
     *
     * @return $this
     */
    public function setCreator( $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Gets scopes.
     *
     * @return array|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes;
    }

    /**
     * Sets scopes.
     *
     * @param array|null $scopes
     *
     * @return $this
     */
    public function setScopes(?array $scopes): self
    {
        $this->scopes = $scopes;

        return $this;
    }

    /**
     * Gets settingsUrl.
     *
     * @return string|null
     */
    public function getSettingsUrl(): ?string
    {
        return $this->settingsUrl;
    }

    /**
     * Sets settingsUrl.
     *
     * @param string|null $settingsUrl  this URL will be called with query params ?cloud_id=
     *
     * @return $this
     */
    public function setSettingsUrl(?string $settingsUrl = null): self
    {
        $this->settingsUrl = $settingsUrl;

        return $this;
    }

    /**
     * Gets isPublic.
     *
     * @return bool|null
     */
    public function isIsPublic(): ?bool
    {
        return $this->isPublic;
    }

    /**
     * Sets isPublic.
     *
     * @param bool|null $isPublic
     *
     * @return $this
     */
    public function setIsPublic(?bool $isPublic): self
    {
        $this->isPublic = $isPublic;

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
    public function setTags(?array $tags = null): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Gets logo.
     *
     * @return string|null
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * Sets logo.
     *
     * @param string|null $logo
     *
     * @return $this
     */
    public function setLogo(?string $logo = null): self
    {
        $this->logo = $logo;

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
     * Gets images.
     *
     * @return array|null
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * Sets images.
     *
     * @param array|null $images
     *
     * @return $this
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Gets organization.
     *
     * @return 
     */
    public function getOrganization(): 
    {
        return $this->organization;
    }

    /**
     * Sets organization.
     *
     * @param  $organization
     *
     * @return $this
     */
    public function setOrganization( $organization): self
    {
        $this->organization = $organization;

        return $this;
    }
}


