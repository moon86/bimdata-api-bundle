<?php
/**
 * RuleRequest
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
 * Class representing the RuleRequest model.
 *
 * Adds nested create feature
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class RuleRequest 
{
        /**
     * @var string|null
     * @SerializedName("name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $name = null;

    /**
     * @var string|null
     * @SerializedName("condition")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $condition = null;

    /**
     * @var array|null
     * @SerializedName("rule_components")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\RuleComponentRequest")
     * })
     * @Type("array<OpenAPI\Server\Model\RuleComponentRequest>")
     */
    protected ?array $ruleComponents = null;

    /**
     * @var RuleRequest|null
     * @SerializedName("on")
     * @Assert\Type("OpenAPI\Server\Model\RuleRequest")
     * @Type("OpenAPI\Server\Model\RuleRequest")
     */
    protected ?RuleRequest $on = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->name = $data['name'] ?? null;
        $this->condition = $data['condition'] ?? null;
        $this->ruleComponents = $data['ruleComponents'] ?? null;
        $this->on = $data['on'] ?? null;
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
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets condition.
     *
     * @return string|null
     */
    public function getCondition(): ?string
    {
        return $this->condition;
    }

    /**
     * Sets condition.
     *
     * @param string|null $condition
     *
     * @return $this
     */
    public function setCondition(?string $condition): self
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * Gets ruleComponents.
     *
     * @return array|null
     */
    public function getRuleComponents(): ?array
    {
        return $this->ruleComponents;
    }

    /**
     * Sets ruleComponents.
     *
     * @param array|null $ruleComponents
     *
     * @return $this
     */
    public function setRuleComponents(?array $ruleComponents = null): self
    {
        $this->ruleComponents = $ruleComponents;

        return $this;
    }

    /**
     * Gets on.
     *
     * @return RuleRequest|null
     */
    public function getOn(): ?RuleRequest
    {
        return $this->on;
    }

    /**
     * Sets on.
     *
     * @param RuleRequest|null $on
     *
     * @return $this
     */
    public function setOn(?RuleRequest $on = null): self
    {
        $this->on = $on;

        return $this;
    }
}


