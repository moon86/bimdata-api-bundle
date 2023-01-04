<?php
/**
 * ProjectSize
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
 * Class representing the ProjectSize model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class ProjectSize 
{
        /**
     * @var int|null
     * @SerializedName("total_size")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $totalSize = null;

    /**
     * @var int|null
     * @SerializedName("smart_data_size")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $smartDataSize = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->totalSize = $data['totalSize'] ?? null;
        $this->smartDataSize = $data['smartDataSize'] ?? null;
    }

    /**
     * Gets totalSize.
     *
     * @return int|null
     */
    public function getTotalSize(): ?int
    {
        return $this->totalSize;
    }

    /**
     * Sets totalSize.
     *
     * @param int|null $totalSize
     *
     * @return $this
     */
    public function setTotalSize(?int $totalSize): self
    {
        $this->totalSize = $totalSize;

        return $this;
    }

    /**
     * Gets smartDataSize.
     *
     * @return int|null
     */
    public function getSmartDataSize(): ?int
    {
        return $this->smartDataSize;
    }

    /**
     * Sets smartDataSize.
     *
     * @param int|null $smartDataSize
     *
     * @return $this
     */
    public function setSmartDataSize(?int $smartDataSize): self
    {
        $this->smartDataSize = $smartDataSize;

        return $this;
    }
}


