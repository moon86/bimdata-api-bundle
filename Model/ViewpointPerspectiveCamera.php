<?php
/**
 * ViewpointPerspectiveCamera
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
 * Class representing the ViewpointPerspectiveCamera model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class ViewpointPerspectiveCamera 
{
        /**
     * @var float|null
     * @SerializedName("field_of_view")
     * @Assert\NotNull()
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $fieldOfView = null;

    /**
     * @var Direction|null
     * @SerializedName("camera_direction")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\Direction")
     * @Type("OpenAPI\Server\Model\Direction")
     */
    protected ?Direction $cameraDirection = null;

    /**
     * @var Direction|null
     * @SerializedName("camera_up_vector")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\Direction")
     * @Type("OpenAPI\Server\Model\Direction")
     */
    protected ?Direction $cameraUpVector = null;

    /**
     * @var Point|null
     * @SerializedName("camera_view_point")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\Point")
     * @Type("OpenAPI\Server\Model\Point")
     */
    protected ?Point $cameraViewPoint = null;

    /**
     * @var Direction|null
     * @SerializedName("bimdata_camera_direction")
     * @Assert\Type("OpenAPI\Server\Model\Direction")
     * @Type("OpenAPI\Server\Model\Direction")
     */
    protected ?Direction $bimdataCameraDirection = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->fieldOfView = $data['fieldOfView'] ?? null;
        $this->cameraDirection = $data['cameraDirection'] ?? null;
        $this->cameraUpVector = $data['cameraUpVector'] ?? null;
        $this->cameraViewPoint = $data['cameraViewPoint'] ?? null;
        $this->bimdataCameraDirection = $data['bimdataCameraDirection'] ?? null;
    }

    /**
     * Gets fieldOfView.
     *
     * @return float|null
     */
    public function getFieldOfView(): ?float
    {
        return $this->fieldOfView;
    }

    /**
     * Sets fieldOfView.
     *
     * @param float|null $fieldOfView
     *
     * @return $this
     */
    public function setFieldOfView(?float $fieldOfView): self
    {
        $this->fieldOfView = $fieldOfView;

        return $this;
    }

    /**
     * Gets cameraDirection.
     *
     * @return Direction|null
     */
    public function getCameraDirection(): ?Direction
    {
        return $this->cameraDirection;
    }

    /**
     * Sets cameraDirection.
     *
     * @param Direction|null $cameraDirection
     *
     * @return $this
     */
    public function setCameraDirection(?Direction $cameraDirection): self
    {
        $this->cameraDirection = $cameraDirection;

        return $this;
    }

    /**
     * Gets cameraUpVector.
     *
     * @return Direction|null
     */
    public function getCameraUpVector(): ?Direction
    {
        return $this->cameraUpVector;
    }

    /**
     * Sets cameraUpVector.
     *
     * @param Direction|null $cameraUpVector
     *
     * @return $this
     */
    public function setCameraUpVector(?Direction $cameraUpVector): self
    {
        $this->cameraUpVector = $cameraUpVector;

        return $this;
    }

    /**
     * Gets cameraViewPoint.
     *
     * @return Point|null
     */
    public function getCameraViewPoint(): ?Point
    {
        return $this->cameraViewPoint;
    }

    /**
     * Sets cameraViewPoint.
     *
     * @param Point|null $cameraViewPoint
     *
     * @return $this
     */
    public function setCameraViewPoint(?Point $cameraViewPoint): self
    {
        $this->cameraViewPoint = $cameraViewPoint;

        return $this;
    }

    /**
     * Gets bimdataCameraDirection.
     *
     * @return Direction|null
     */
    public function getBimdataCameraDirection(): ?Direction
    {
        return $this->bimdataCameraDirection;
    }

    /**
     * Sets bimdataCameraDirection.
     *
     * @param Direction|null $bimdataCameraDirection
     *
     * @return $this
     */
    public function setBimdataCameraDirection(?Direction $bimdataCameraDirection = null): self
    {
        $this->bimdataCameraDirection = $bimdataCameraDirection;

        return $this;
    }
}


