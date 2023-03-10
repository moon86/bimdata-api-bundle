<?php
/**
 * PatchedVisaValidationRequest
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
 * Class representing the PatchedVisaValidationRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class PatchedVisaValidationRequest 
{
        /**
     * This is the userproject_id
     *
     * @var int|null
     * @SerializedName("validator_id")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $validatorId = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->validatorId = $data['validatorId'] ?? null;
    }

    /**
     * Gets validatorId.
     *
     * @return int|null
     */
    public function getValidatorId(): ?int
    {
        return $this->validatorId;
    }

    /**
     * Sets validatorId.
     *
     * @param int|null $validatorId  This is the userproject_id
     *
     * @return $this
     */
    public function setValidatorId(?int $validatorId = null): self
    {
        $this->validatorId = $validatorId;

        return $this;
    }
}


