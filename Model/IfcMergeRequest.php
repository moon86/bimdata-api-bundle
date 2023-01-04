<?php
/**
 * IfcMergeRequest
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
 * Class representing the IfcMergeRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class IfcMergeRequest 
{
        /**
     * @var array|null
     * @SerializedName("ifc_ids")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("int")
     * })
     * @Type("array<int>")
     * @Assert\Count(
     *   min = 2
     * )
     */
    protected ?array $ifcIds = null;

    /**
     * Precision of geometries. 6 is micrometre, 9 is nanometre, ect...
     *
     * @var int|null
     * @SerializedName("floating_point_reduction")
     * @Assert\Type("int")
     * @Type("int")
     * @Assert\GreaterThanOrEqual(6)
     * @Assert\LessThanOrEqual(15)
     */
    protected ?int $floatingPointReduction = null;

    /**
     * @var string|null
     * @SerializedName("export_name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 512
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $exportName = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->ifcIds = $data['ifcIds'] ?? null;
        $this->floatingPointReduction = $data['floatingPointReduction'] ?? null;
        $this->exportName = $data['exportName'] ?? null;
    }

    /**
     * Gets ifcIds.
     *
     * @return array|null
     */
    public function getIfcIds(): ?array
    {
        return $this->ifcIds;
    }

    /**
     * Sets ifcIds.
     *
     * @param array|null $ifcIds
     *
     * @return $this
     */
    public function setIfcIds(?array $ifcIds): self
    {
        $this->ifcIds = $ifcIds;

        return $this;
    }

    /**
     * Gets floatingPointReduction.
     *
     * @return int|null
     */
    public function getFloatingPointReduction(): ?int
    {
        return $this->floatingPointReduction;
    }

    /**
     * Sets floatingPointReduction.
     *
     * @param int|null $floatingPointReduction  Precision of geometries. 6 is micrometre, 9 is nanometre, ect...
     *
     * @return $this
     */
    public function setFloatingPointReduction(?int $floatingPointReduction = null): self
    {
        $this->floatingPointReduction = $floatingPointReduction;

        return $this;
    }

    /**
     * Gets exportName.
     *
     * @return string|null
     */
    public function getExportName(): ?string
    {
        return $this->exportName;
    }

    /**
     * Sets exportName.
     *
     * @param string|null $exportName
     *
     * @return $this
     */
    public function setExportName(?string $exportName): self
    {
        $this->exportName = $exportName;

        return $this;
    }
}


