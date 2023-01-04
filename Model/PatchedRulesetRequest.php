<?php
/**
 * PatchedRulesetRequest
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
 * Class representing the PatchedRulesetRequest model.
 *
 * Adds nested create feature
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class PatchedRulesetRequest 
{
        /**
     * @var int|null
     * @SerializedName("parent_ruleset_id")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $parentRulesetId = null;

    /**
     * @var string|null
     * @SerializedName("name")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $name = null;

    /**
     * @var string|null
     * @SerializedName("description")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $description = null;

    /**
     * @var array|null
     * @SerializedName("rules")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\RuleRequest")
     * })
     * @Type("array<OpenAPI\Server\Model\RuleRequest>")
     */
    protected ?array $rules = null;

    /**
     * @var array|null
     * @SerializedName("rulesets")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\RulesetRequest")
     * })
     * @Type("array<OpenAPI\Server\Model\RulesetRequest>")
     */
    protected ?array $rulesets = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->parentRulesetId = $data['parentRulesetId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->rules = $data['rules'] ?? null;
        $this->rulesets = $data['rulesets'] ?? null;
    }

    /**
     * Gets parentRulesetId.
     *
     * @return int|null
     */
    public function getParentRulesetId(): ?int
    {
        return $this->parentRulesetId;
    }

    /**
     * Sets parentRulesetId.
     *
     * @param int|null $parentRulesetId
     *
     * @return $this
     */
    public function setParentRulesetId(?int $parentRulesetId = null): self
    {
        $this->parentRulesetId = $parentRulesetId;

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
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets description.
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription(?string $description = null): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets rules.
     *
     * @return array|null
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }

    /**
     * Sets rules.
     *
     * @param array|null $rules
     *
     * @return $this
     */
    public function setRules(?array $rules = null): self
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * Gets rulesets.
     *
     * @return array|null
     */
    public function getRulesets(): ?array
    {
        return $this->rulesets;
    }

    /**
     * Sets rulesets.
     *
     * @param array|null $rulesets
     *
     * @return $this
     */
    public function setRulesets(?array $rulesets = null): self
    {
        $this->rulesets = $rulesets;

        return $this;
    }
}


