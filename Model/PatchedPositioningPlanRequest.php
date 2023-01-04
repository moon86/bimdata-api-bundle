<?php
/**
 * PatchedPositioningPlanRequest
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
 * Class representing the PatchedPositioningPlanRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class PatchedPositioningPlanRequest 
{
        /**
     * @var float|null
     * @SerializedName("translation_x")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $translationX = null;

    /**
     * @var float|null
     * @SerializedName("translation_y")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $translationY = null;

    /**
     * @var float|null
     * @SerializedName("rotate_z")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $rotateZ = null;

    /**
     * @var float|null
     * @SerializedName("scale")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $scale = null;

    /**
     * @var float|null
     * @SerializedName("opacity")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $opacity = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->translationX = $data['translationX'] ?? null;
        $this->translationY = $data['translationY'] ?? null;
        $this->rotateZ = $data['rotateZ'] ?? null;
        $this->scale = $data['scale'] ?? null;
        $this->opacity = $data['opacity'] ?? null;
    }

    /**
     * Gets translationX.
     *
     * @return float|null
     */
    public function getTranslationX(): ?float
    {
        return $this->translationX;
    }

    /**
     * Sets translationX.
     *
     * @param float|null $translationX
     *
     * @return $this
     */
    public function setTranslationX(?float $translationX = null): self
    {
        $this->translationX = $translationX;

        return $this;
    }

    /**
     * Gets translationY.
     *
     * @return float|null
     */
    public function getTranslationY(): ?float
    {
        return $this->translationY;
    }

    /**
     * Sets translationY.
     *
     * @param float|null $translationY
     *
     * @return $this
     */
    public function setTranslationY(?float $translationY = null): self
    {
        $this->translationY = $translationY;

        return $this;
    }

    /**
     * Gets rotateZ.
     *
     * @return float|null
     */
    public function getRotateZ(): ?float
    {
        return $this->rotateZ;
    }

    /**
     * Sets rotateZ.
     *
     * @param float|null $rotateZ
     *
     * @return $this
     */
    public function setRotateZ(?float $rotateZ = null): self
    {
        $this->rotateZ = $rotateZ;

        return $this;
    }

    /**
     * Gets scale.
     *
     * @return float|null
     */
    public function getScale(): ?float
    {
        return $this->scale;
    }

    /**
     * Sets scale.
     *
     * @param float|null $scale
     *
     * @return $this
     */
    public function setScale(?float $scale = null): self
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * Gets opacity.
     *
     * @return float|null
     */
    public function getOpacity(): ?float
    {
        return $this->opacity;
    }

    /**
     * Sets opacity.
     *
     * @param float|null $opacity
     *
     * @return $this
     */
    public function setOpacity(?float $opacity = null): self
    {
        $this->opacity = $opacity;

        return $this;
    }
}


