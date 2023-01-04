<?php
/**
 * DirectionRequest
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
 * Class representing the DirectionRequest model.
 *
 * Adds nested create feature
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class DirectionRequest 
{
        /**
     * @var float|null
     * @SerializedName("x")
     * @Assert\NotNull()
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $x = null;

    /**
     * @var float|null
     * @SerializedName("y")
     * @Assert\NotNull()
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $y = null;

    /**
     * @var float|null
     * @SerializedName("z")
     * @Assert\NotNull()
     * @Assert\Type("float")
     * @Type("float")
     */
    protected ?float $z = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->x = $data['x'] ?? null;
        $this->y = $data['y'] ?? null;
        $this->z = $data['z'] ?? null;
    }

    /**
     * Gets x.
     *
     * @return float|null
     */
    public function getX(): ?float
    {
        return $this->x;
    }

    /**
     * Sets x.
     *
     * @param float|null $x
     *
     * @return $this
     */
    public function setX(?float $x): self
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Gets y.
     *
     * @return float|null
     */
    public function getY(): ?float
    {
        return $this->y;
    }

    /**
     * Sets y.
     *
     * @param float|null $y
     *
     * @return $this
     */
    public function setY(?float $y): self
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Gets z.
     *
     * @return float|null
     */
    public function getZ(): ?float
    {
        return $this->z;
    }

    /**
     * Sets z.
     *
     * @param float|null $z
     *
     * @return $this
     */
    public function setZ(?float $z): self
    {
        $this->z = $z;

        return $this;
    }
}

