<?php
/**
 * RawElementsTest
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
 * RawElementsTest Class Doc Comment
 *
 * @category    Class
 * @description RawElements
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\RawElements
 */
class RawElementsTest extends TestCase
{
    protected RawElements|MockObject $object;

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
         $this->object = $this->getMockBuilder(RawElements::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(RawElements::class));
        $this->assertInstanceOf(RawElements::class, $this->object);
    }

    /**
     * Test attribute "units"
     *
     * @group unit
     * @small
     */
    public function testPropertyUnits(): void
    {
        $this->markTestSkipped('Test for property units not implemented');
    }

    /**
     * Test attribute "definitions"
     *
     * @group unit
     * @small
     */
    public function testPropertyDefinitions(): void
    {
        $this->markTestSkipped('Test for property definitions not implemented');
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

    /**
     * Test attribute "systems"
     *
     * @group unit
     * @small
     */
    public function testPropertySystems(): void
    {
        $this->markTestSkipped('Test for property systems not implemented');
    }

    /**
     * Test attribute "materials"
     *
     * @group unit
     * @small
     */
    public function testPropertyMaterials(): void
    {
        $this->markTestSkipped('Test for property materials not implemented');
    }

    /**
     * Test attribute "elements"
     *
     * @group unit
     * @small
     */
    public function testPropertyElements(): void
    {
        $this->markTestSkipped('Test for property elements not implemented');
    }
}
