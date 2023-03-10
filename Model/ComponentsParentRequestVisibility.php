<?php
/**
 * ComponentsParentRequestVisibility
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
 * Class representing the ComponentsParentRequestVisibility model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class ComponentsParentRequestVisibility 
{
        /**
     * @var bool|null
     * @SerializedName("default_visibility")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected ?bool $defaultVisibility = null;

    /**
     * @var array|null
     * @SerializedName("exceptions")
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\ComponentRequest")
     * })
     * @Type("array<OpenAPI\Server\Model\ComponentRequest>")
     */
    protected ?array $exceptions = null;

    /**
     * @var ViewSetupHintsRequest|null
     * @SerializedName("view_setup_hints")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("OpenAPI\Server\Model\ViewSetupHintsRequest")
     * @Type("OpenAPI\Server\Model\ViewSetupHintsRequest")
     */
    protected ?ViewSetupHintsRequest $viewSetupHints = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->defaultVisibility = $data['defaultVisibility'] ?? null;
        $this->exceptions = $data['exceptions'] ?? null;
        $this->viewSetupHints = $data['viewSetupHints'] ?? null;
    }

    /**
     * Gets defaultVisibility.
     *
     * @return bool|null
     */
    public function isDefaultVisibility(): ?bool
    {
        return $this->defaultVisibility;
    }

    /**
     * Sets defaultVisibility.
     *
     * @param bool|null $defaultVisibility
     *
     * @return $this
     */
    public function setDefaultVisibility(?bool $defaultVisibility = null): self
    {
        $this->defaultVisibility = $defaultVisibility;

        return $this;
    }

    /**
     * Gets exceptions.
     *
     * @return array|null
     */
    public function getExceptions(): ?array
    {
        return $this->exceptions;
    }

    /**
     * Sets exceptions.
     *
     * @param array|null $exceptions
     *
     * @return $this
     */
    public function setExceptions(?array $exceptions = null): self
    {
        $this->exceptions = $exceptions;

        return $this;
    }

    /**
     * Gets viewSetupHints.
     *
     * @return ViewSetupHintsRequest|null
     */
    public function getViewSetupHints(): ?ViewSetupHintsRequest
    {
        return $this->viewSetupHints;
    }

    /**
     * Sets viewSetupHints.
     *
     * @param ViewSetupHintsRequest|null $viewSetupHints
     *
     * @return $this
     */
    public function setViewSetupHints(?ViewSetupHintsRequest $viewSetupHints): self
    {
        $this->viewSetupHints = $viewSetupHints;

        return $this;
    }
}


