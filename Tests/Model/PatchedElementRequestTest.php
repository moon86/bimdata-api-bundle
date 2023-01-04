<?php
/**
 * PatchedElementRequestTest
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Tests\Model
 * @author   openapi-generator contributors
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
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Server\Model;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * PatchedElementRequestTest Class Doc Comment
 *
 * @category    Class
 * @description Adds nested create feature
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\PatchedElementRequest
 */
class PatchedElementRequestTest extends TestCase
{
    protected PatchedElementRequest|MockObject $object;

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
         $this->object = $this->getMockBuilder(PatchedElementRequest::class)->getMockForAbstractClass();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * @group integration
     * @small
     */
    public function testTestClassExists(): void
    {
        $this->assertTrue(class_exists(PatchedElementRequest::class));
        $this->assertInstanceOf(PatchedElementRequest::class, $this->object);
    }

    /**
     * Test attribute "uuid"
     *
     * @group unit
     * @small
     */
    public function testPropertyUuid(): void
    {
        $this->markTestSkipped('Test for property uuid not implemented');
    }

    /**
     * Test attribute "type"
     *
     * @group unit
     * @small
     */
    public function testPropertyType(): void
    {
        $this->markTestSkipped('Test for property type not implemented');
    }

    /**
     * Test attribute "attributes"
     *
     * @group unit
     * @small
     */
    public function testPropertyAttributes(): void
    {
        $this->markTestSkipped('Test for property attributes not implemented');
    }

    /**
     * Test attribute "propertySets"
     *
     * @group unit
     * @small
     */
    public function testPropertyPropertySets(): void
    {
        $this->markTestSkipped('Test for property propertySets not implemented');
    }

    /**
     * Test attribute "classifications"
     *
     * @group unit
     * @small
     */
    public function testPropertyClassifications(): void
    {
        $this->markTestSkipped('Test for property classifications not implemented');
    }

    /**
     * Test attribute "layers"
     *
     * @group unit
     * @small
     */
    public function testPropertyLayers(): void
    {
        $this->markTestSkipped('Test for property layers not implemented');
    }
}
