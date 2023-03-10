<?php
/**
 * FeatureRequest
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
 * Class representing the FeatureRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class FeatureRequest 
{
        /**
     * Name of the feature
     *
     * @var string|null
     * @SerializedName("name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 127
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $name = null;

    /**
     * Viewer&#39;s url to load instead of standard&#39;s one
     *
     * @var string|null
     * @SerializedName("viewer_url")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 512
     * )
     */
    protected ?string $viewerUrl = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->name = $data['name'] ?? null;
        $this->viewerUrl = $data['viewerUrl'] ?? null;
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
     * @param string|null $name  Name of the feature
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets viewerUrl.
     *
     * @return string|null
     */
    public function getViewerUrl(): ?string
    {
        return $this->viewerUrl;
    }

    /**
     * Sets viewerUrl.
     *
     * @param string|null $viewerUrl  Viewer's url to load instead of standard's one
     *
     * @return $this
     */
    public function setViewerUrl(?string $viewerUrl = null): self
    {
        $this->viewerUrl = $viewerUrl;

        return $this;
    }
}


