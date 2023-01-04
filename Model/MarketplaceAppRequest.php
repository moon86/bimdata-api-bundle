<?php
/**
 * MarketplaceAppRequest
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
 * Class representing the MarketplaceAppRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class MarketplaceAppRequest 
{
        /**
     * @var string|null
     * @SerializedName("name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 256
     * )
     * @Assert\Length(
     *   min = 1
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
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $shortDescription = null;

    /**
     * @var string|null
     * @SerializedName("long_description")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   min = 1
     * )
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
     * @var string|null
     * @SerializedName("webhook_secret")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $webhookSecret = null;

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
     * @var array|null
     * @SerializedName("tags")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $tags = null;

    /**
     * @var UploadedFile|null
     * @SerializedName("logo")
     * @Assert\Type("UploadedFile")
     * @Type("UploadedFile")
     */
    protected ?UploadedFile $logo = null;

    /**
     * @var UploadedFile|null
     * @SerializedName("file")
     * @Assert\Type("UploadedFile")
     * @Type("UploadedFile")
     */
    protected ?UploadedFile $file = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->name = $data['name'] ?? null;
        $this->shortDescription = $data['shortDescription'] ?? null;
        $this->longDescription = $data['longDescription'] ?? null;
        $this->activationWebhookUrl = $data['activationWebhookUrl'] ?? null;
        $this->postActivationRedirectUri = $data['postActivationRedirectUri'] ?? null;
        $this->viewerPluginsUrls = $data['viewerPluginsUrls'] ?? null;
        $this->webhookSecret = $data['webhookSecret'] ?? null;
        $this->settingsUrl = $data['settingsUrl'] ?? null;
        $this->tags = $data['tags'] ?? null;
        $this->logo = $data['logo'] ?? null;
        $this->file = $data['file'] ?? null;
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
     * Gets webhookSecret.
     *
     * @return string|null
     */
    public function getWebhookSecret(): ?string
    {
        return $this->webhookSecret;
    }

    /**
     * Sets webhookSecret.
     *
     * @param string|null $webhookSecret
     *
     * @return $this
     */
    public function setWebhookSecret(?string $webhookSecret = null): self
    {
        $this->webhookSecret = $webhookSecret;

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
     * @return UploadedFile|null
     */
    public function getLogo(): ?UploadedFile
    {
        return $this->logo;
    }

    /**
     * Sets logo.
     *
     * @param UploadedFile|null $logo
     *
     * @return $this
     */
    public function setLogo(?UploadedFile $logo = null): self
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Gets file.
     *
     * @return UploadedFile|null
     */
    public function getFile(): ?UploadedFile
    {
        return $this->file;
    }

    /**
     * Sets file.
     *
     * @param UploadedFile|null $file
     *
     * @return $this
     */
    public function setFile(?UploadedFile $file = null): self
    {
        $this->file = $file;

        return $this;
    }
}


