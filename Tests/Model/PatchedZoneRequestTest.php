<?php
/**
 * PatchedZoneRequestTest
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
 * PatchedZoneRequestTest Class Doc Comment
 *
 * @category    Class
 * @description Adds nested create feature
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\PatchedZoneRequest
 */
class PatchedZoneRequestTest extends TestCase
{
    protected PatchedZoneRequest|MockObject $object;

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
         $this->object = $this->getMockBuilder(PatchedZoneRequest::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(PatchedZoneRequest::class));
        $this->assertInstanceOf(PatchedZoneRequest::class, $this->object);
    }

    /**
     * Test attribute "name"
     *
     * @group unit
     * @small
     */
    public function testPropertyName(): void
    {
        $this->markTestSkipped('Test for property name not implemented');
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
     * Test attribute "zones"
     *
     * @group unit
     * @small
     */
    public function testPropertyZones(): void
    {
        $this->markTestSkipped('Test for property zones not implemented');
    }

    /**
     * Test attribute "parentId"
     *
     * @group unit
     * @small
     */
    public function testPropertyParentId(): void
    {
        $this->markTestSkipped('Test for property parentId not implemented');
    }

    /**
     * Test attribute "spaces"
     *
     * @group unit
     * @small
     */
    public function testPropertySpaces(): void
    {
        $this->markTestSkipped('Test for property spaces not implemented');
    }

    /**
     * Test attribute "color"
     *
     * @group unit
     * @small
     */
    public function testPropertyColor(): void
    {
        $this->markTestSkipped('Test for property color not implemented');
    }
}
