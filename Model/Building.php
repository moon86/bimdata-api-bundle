<?php
/**
 * Building
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
 * Class representing the Building model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Building 
{
        /**
     * IFC element or element type UUID
     *
     * @var string|null
     * @SerializedName("uuid")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $uuid = null;

    /**
     * Name of the building
     *
     * @var string|null
     * @SerializedName("name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $name = null;

    /**
     * @var array|null
     * @SerializedName("plans")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\ModelWithPositioningPlan")
     * })
     * @Type("array<OpenAPI\Server\Model\ModelWithPositioningPlan>")
     */
    protected ?array $plans = null;

    /**
     * @var int|null
     * @SerializedName("plans_unreachable_count")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $plansUnreachableCount = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->uuid = $data['uuid'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->plans = $data['plans'] ?? null;
        $this->plansUnreachableCount = $data['plansUnreachableCount'] ?? null;
    }

    /**
     * Gets uuid.
     *
     * @return string|null
     */
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    /**
     * Sets uuid.
     *
     * @param string|null $uuid  IFC element or element type UUID
     *
     * @return $this
     */
    public function setUuid(?string $uuid): self
    {
        $this->uuid = $uuid;

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
     * @param string|null $name  Name of the building
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets plans.
     *
     * @return array|null
     */
    public function getPlans(): ?array
    {
        return $this->plans;
    }

    /**
     * Sets plans.
     *
     * @param array|null $plans
     *
     * @return $this
     */
    public function setPlans(?array $plans): self
    {
        $this->plans = $plans;

        return $this;
    }

    /**
     * Gets plansUnreachableCount.
     *
     * @return int|null
     */
    public function getPlansUnreachableCount(): ?int
    {
        return $this->plansUnreachableCount;
    }

    /**
     * Sets plansUnreachableCount.
     *
     * @param int|null $plansUnreachableCount
     *
     * @return $this
     */
    public function setPlansUnreachableCount(?int $plansUnreachableCount): self
    {
        $this->plansUnreachableCount = $plansUnreachableCount;

        return $this;
    }
}

