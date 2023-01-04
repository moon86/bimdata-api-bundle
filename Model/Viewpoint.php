<?php
/**
 * Viewpoint
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
 * Class representing the Viewpoint model.
 *
 * Adds nested create feature
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Viewpoint 
{
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
     * @SerializedName("guid")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $guid = null;

    /**
     * Name of the system in which the viewpoint is originated
     *
     * @var string|null
     * @SerializedName("originating_system")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 256
     * )
     */
    protected ?string $originatingSystem = null;

    /**
     * System specific identifier of the viewpoint in the originating BIM tool
     *
     * @var string|null
     * @SerializedName("authoring_tool_id")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 256
     * )
     */
    protected ?string $authoringToolId = null;

    /**
     * @var ViewpointOrthogonalCamera|null
     * @SerializedName("orthogonal_camera")
     * @Assert\Type("OpenAPI\Server\Model\ViewpointOrthogonalCamera")
     * @Type("OpenAPI\Server\Model\ViewpointOrthogonalCamera")
     */
    protected ?ViewpointOrthogonalCamera $orthogonalCamera = null;

    /**
     * @var ViewpointPerspectiveCamera|null
     * @SerializedName("perspective_camera")
     * @Assert\Type("OpenAPI\Server\Model\ViewpointPerspectiveCamera")
     * @Type("OpenAPI\Server\Model\ViewpointPerspectiveCamera")
     */
    protected ?ViewpointPerspectiveCamera $perspectiveCamera = null;

    /**
     * @var array|null
     * @SerializedName("lines")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Line")
     * })
     * @Type("array<OpenAPI\Server\Model\Line>")
     */
    protected ?array $lines = null;

    /**
     * @var array|null
     * @SerializedName("clipping_planes")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\ClippingPlane")
     * })
     * @Type("array<OpenAPI\Server\Model\ClippingPlane>")
     */
    protected ?array $clippingPlanes = null;

    /**
     * @var ViewpointSnapshot|null
     * @SerializedName("snapshot")
     * @Assert\Type("OpenAPI\Server\Model\ViewpointSnapshot")
     * @Type("OpenAPI\Server\Model\ViewpointSnapshot")
     */
    protected ?ViewpointSnapshot $snapshot = null;

    /**
     * @var ViewpointComponents|null
     * @SerializedName("components")
     * @Assert\Type("OpenAPI\Server\Model\ViewpointComponents")
     * @Type("OpenAPI\Server\Model\ViewpointComponents")
     */
    protected ?ViewpointComponents $components = null;

    /**
     * Non standard field. Pins (or markers/annotations) are points of interest
     *
     * @var array|null
     * @SerializedName("pins")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\Pin")
     * })
     * @Type("array<OpenAPI\Server\Model\Pin>")
     */
    protected ?array $pins = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->index = $data['index'] ?? null;
        $this->guid = $data['guid'] ?? null;
        $this->originatingSystem = $data['originatingSystem'] ?? null;
        $this->authoringToolId = $data['authoringToolId'] ?? null;
        $this->orthogonalCamera = $data['orthogonalCamera'] ?? null;
        $this->perspectiveCamera = $data['perspectiveCamera'] ?? null;
        $this->lines = $data['lines'] ?? null;
        $this->clippingPlanes = $data['clippingPlanes'] ?? null;
        $this->snapshot = $data['snapshot'] ?? null;
        $this->components = $data['components'] ?? null;
        $this->pins = $data['pins'] ?? null;
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
     * Gets originatingSystem.
     *
     * @return string|null
     */
    public function getOriginatingSystem(): ?string
    {
        return $this->originatingSystem;
    }

    /**
     * Sets originatingSystem.
     *
     * @param string|null $originatingSystem  Name of the system in which the viewpoint is originated
     *
     * @return $this
     */
    public function setOriginatingSystem(?string $originatingSystem = null): self
    {
        $this->originatingSystem = $originatingSystem;

        return $this;
    }

    /**
     * Gets authoringToolId.
     *
     * @return string|null
     */
    public function getAuthoringToolId(): ?string
    {
        return $this->authoringToolId;
    }

    /**
     * Sets authoringToolId.
     *
     * @param string|null $authoringToolId  System specific identifier of the viewpoint in the originating BIM tool
     *
     * @return $this
     */
    public function setAuthoringToolId(?string $authoringToolId = null): self
    {
        $this->authoringToolId = $authoringToolId;

        return $this;
    }

    /**
     * Gets orthogonalCamera.
     *
     * @return ViewpointOrthogonalCamera|null
     */
    public function getOrthogonalCamera(): ?ViewpointOrthogonalCamera
    {
        return $this->orthogonalCamera;
    }

    /**
     * Sets orthogonalCamera.
     *
     * @param ViewpointOrthogonalCamera|null $orthogonalCamera
     *
     * @return $this
     */
    public function setOrthogonalCamera(?ViewpointOrthogonalCamera $orthogonalCamera = null): self
    {
        $this->orthogonalCamera = $orthogonalCamera;

        return $this;
    }

    /**
     * Gets perspectiveCamera.
     *
     * @return ViewpointPerspectiveCamera|null
     */
    public function getPerspectiveCamera(): ?ViewpointPerspectiveCamera
    {
        return $this->perspectiveCamera;
    }

    /**
     * Sets perspectiveCamera.
     *
     * @param ViewpointPerspectiveCamera|null $perspectiveCamera
     *
     * @return $this
     */
    public function setPerspectiveCamera(?ViewpointPerspectiveCamera $perspectiveCamera = null): self
    {
        $this->perspectiveCamera = $perspectiveCamera;

        return $this;
    }

    /**
     * Gets lines.
     *
     * @return array|null
     */
    public function getLines(): ?array
    {
        return $this->lines;
    }

    /**
     * Sets lines.
     *
     * @param array|null $lines
     *
     * @return $this
     */
    public function setLines(?array $lines = null): self
    {
        $this->lines = $lines;

        return $this;
    }

    /**
     * Gets clippingPlanes.
     *
     * @return array|null
     */
    public function getClippingPlanes(): ?array
    {
        return $this->clippingPlanes;
    }

    /**
     * Sets clippingPlanes.
     *
     * @param array|null $clippingPlanes
     *
     * @return $this
     */
    public function setClippingPlanes(?array $clippingPlanes = null): self
    {
        $this->clippingPlanes = $clippingPlanes;

        return $this;
    }

    /**
     * Gets snapshot.
     *
     * @return ViewpointSnapshot|null
     */
    public function getSnapshot(): ?ViewpointSnapshot
    {
        return $this->snapshot;
    }

    /**
     * Sets snapshot.
     *
     * @param ViewpointSnapshot|null $snapshot
     *
     * @return $this
     */
    public function setSnapshot(?ViewpointSnapshot $snapshot = null): self
    {
        $this->snapshot = $snapshot;

        return $this;
    }

    /**
     * Gets components.
     *
     * @return ViewpointComponents|null
     */
    public function getComponents(): ?ViewpointComponents
    {
        return $this->components;
    }

    /**
     * Sets components.
     *
     * @param ViewpointComponents|null $components
     *
     * @return $this
     */
    public function setComponents(?ViewpointComponents $components = null): self
    {
        $this->components = $components;

        return $this;
    }

    /**
     * Gets pins.
     *
     * @return array|null
     */
    public function getPins(): ?array
    {
        return $this->pins;
    }

    /**
     * Sets pins.
     *
     * @param array|null $pins  Non standard field. Pins (or markers/annotations) are points of interest
     *
     * @return $this
     */
    public function setPins(?array $pins = null): self
    {
        $this->pins = $pins;

        return $this;
    }
}


