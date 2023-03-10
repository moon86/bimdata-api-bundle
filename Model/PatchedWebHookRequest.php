<?php
/**
 * PatchedWebHookRequest
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
 * Class representing the PatchedWebHookRequest model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class PatchedWebHookRequest 
{
        /**
     * @var array|null
     * @SerializedName("events")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected ?array $events = null;

    /**
     * @var string|null
     * @SerializedName("url")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 1024
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $url = null;

    /**
     * @var string|null
     * @SerializedName("secret")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 256
     * )
     * @Assert\Length(
     *   min = 1
     * )
     */
    protected ?string $secret = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->events = $data['events'] ?? null;
        $this->url = $data['url'] ?? null;
        $this->secret = $data['secret'] ?? null;
    }

    /**
     * Gets events.
     *
     * @return array|null
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * Sets events.
     *
     * @param array|null $events
     *
     * @return $this
     */
    public function setEvents(?array $events = null): self
    {
        $this->events = $events;

        return $this;
    }

    /**
     * Gets url.
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets url.
     *
     * @param string|null $url
     *
     * @return $this
     */
    public function setUrl(?string $url = null): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Gets secret.
     *
     * @return string|null
     */
    public function getSecret(): ?string
    {
        return $this->secret;
    }

    /**
     * Sets secret.
     *
     * @param string|null $secret
     *
     * @return $this
     */
    public function setSecret(?string $secret = null): self
    {
        $this->secret = $secret;

        return $this;
    }
}


