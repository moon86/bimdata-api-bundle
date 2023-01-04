<?php
/**
 * Group
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
 * Class representing the Group model.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class Group 
{
        /**
     * @var int|null
     * @SerializedName("id")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected ?int $id = null;

    /**
     * Full name of the group
     *
     * @var string|null
     * @SerializedName("name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 512
     * )
     */
    protected ?string $name = null;

    /**
     * @var string|null
     * @SerializedName("color")
     * @Assert\Type("string")
     * @Type("string")
     * @Assert\Length(
     *   max = 255
     * )
     */
    protected ?string $color = null;

    /**
     * @var array|null
     * @SerializedName("members")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\All({
     *   @Assert\Type("OpenAPI\Server\Model\UserProject")
     * })
     * @Type("array<OpenAPI\Server\Model\UserProject>")
     */
    protected ?array $members = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->color = $data['color'] ?? null;
        $this->members = $data['members'] ?? null;
    }

    /**
     * Gets id.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param int|null $id
     *
     * @return $this
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

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
     * @param string|null $name  Full name of the group
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets color.
     *
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * Sets color.
     *
     * @param string|null $color
     *
     * @return $this
     */
    public function setColor(?string $color = null): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Gets members.
     *
     * @return array|null
     */
    public function getMembers(): ?array
    {
        return $this->members;
    }

    /**
     * Sets members.
     *
     * @param array|null $members
     *
     * @return $this
     */
    public function setMembers(?array $members): self
    {
        $this->members = $members;

        return $this;
    }
}

