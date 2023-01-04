<?php
/**
 * IfcCheckerTest
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
 * IfcCheckerTest Class Doc Comment
 *
 * @category    Class
 * @description IfcChecker
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\IfcChecker
 */
class IfcCheckerTest extends TestCase
{
    protected IfcChecker|MockObject $object;

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
         $this->object = $this->getMockBuilder(IfcChecker::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(IfcChecker::class));
        $this->assertInstanceOf(IfcChecker::class, $this->object);
    }

    /**
     * Test attribute "id"
     *
     * @group unit
     * @small
     */
    public function testPropertyId(): void
    {
        $this->markTestSkipped('Test for property id not implemented');
    }

    /**
     * Test attribute "ifc"
     *
     * @group unit
     * @small
     */
    public function testPropertyIfc(): void
    {
        $this->markTestSkipped('Test for property ifc not implemented');
    }

    /**
     * Test attribute "creator"
     *
     * @group unit
     * @small
     */
    public function testPropertyCreator(): void
    {
        $this->markTestSkipped('Test for property creator not implemented');
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
     * Test attribute "results"
     *
     * @group unit
     * @small
     */
    public function testPropertyResults(): void
    {
        $this->markTestSkipped('Test for property results not implemented');
    }

    /**
     * Test attribute "createdAt"
     *
     * @group unit
     * @small
     */
    public function testPropertyCreatedAt(): void
    {
        $this->markTestSkipped('Test for property createdAt not implemented');
    }

    /**
     * Test attribute "updatedAt"
     *
     * @group unit
     * @small
     */
    public function testPropertyUpdatedAt(): void
    {
        $this->markTestSkipped('Test for property updatedAt not implemented');
    }

    /**
     * Test attribute "checkplan"
     *
     * @group unit
     * @small
     */
    public function testPropertyCheckplan(): void
    {
        $this->markTestSkipped('Test for property checkplan not implemented');
    }
}
