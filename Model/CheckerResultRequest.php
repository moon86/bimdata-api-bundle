<?php
/**
 * CheckerResultRequest
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
 * Class representing the CheckerResultRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class CheckerResultRequest 
{
        /**
     * @var string|null
     * @SerializedName("status")
     * @Assert\Choice({ "C", "P", "E" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $status = null;

    /**
     * @var string|null
     * @SerializedName("result")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $result = null;

    /**
     * @var string|null
     * @SerializedName("collisions")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $collisions = null;

    /**
     * @var string|null
     * @SerializedName("error_detail")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $errorDetail = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->status = $data['status'] ?? null;
        $this->result = $data['result'] ?? null;
        $this->collisions = $data['collisions'] ?? null;
        $this->errorDetail = $data['errorDetail'] ?? null;
    }

    /**
     * Gets status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets status.
     *
     * @param string|null $status
     *
     * @return $this
     */
    public function setStatus(?string $status = null): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets result.
     *
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    /**
     * Sets result.
     *
     * @param string|null $result
     *
     * @return $this
     */
    public function setResult(?string $result = null): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Gets collisions.
     *
     * @return string|null
     */
    public function getCollisions(): ?string
    {
        return $this->collisions;
    }

    /**
     * Sets collisions.
     *
     * @param string|null $collisions
     *
     * @return $this
     */
    public function setCollisions(?string $collisions = null): self
    {
        $this->collisions = $collisions;

        return $this;
    }

    /**
     * Gets errorDetail.
     *
     * @return string|null
     */
    public function getErrorDetail(): ?string
    {
        return $this->errorDetail;
    }

    /**
     * Sets errorDetail.
     *
     * @param string|null $errorDetail
     *
     * @return $this
     */
    public function setErrorDetail(?string $errorDetail = null): self
    {
        $this->errorDetail = $errorDetail;

        return $this;
    }
}

