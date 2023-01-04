<?php
/**
 * PatchedPropertyDefinitionRequestUnitTest
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
 * PatchedPropertyDefinitionRequestUnitTest Class Doc Comment
 *
 * @category    Class
 * @description PatchedPropertyDefinitionRequestUnit
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\PatchedPropertyDefinitionRequestUnit
 */
class PatchedPropertyDefinitionRequestUnitTest extends TestCase
{
    protected PatchedPropertyDefinitionRequestUnit|MockObject $object;

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
         $this->object = $this->getMockBuilder(PatchedPropertyDefinitionRequestUnit::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(PatchedPropertyDefinitionRequestUnit::class));
        $this->assertInstanceOf(PatchedPropertyDefinitionRequestUnit::class, $this->object);
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
     * Test attribute "unitType"
     *
     * @group unit
     * @small
     */
    public function testPropertyUnitType(): void
    {
        $this->markTestSkipped('Test for property unitType not implemented');
    }

    /**
     * Test attribute "prefix"
     *
     * @group unit
     * @small
     */
    public function testPropertyPrefix(): void
    {
        $this->markTestSkipped('Test for property prefix not implemented');
    }

    /**
     * Test attribute "dimensions"
     *
     * @group unit
     * @small
     */
    public function testPropertyDimensions(): void
    {
        $this->markTestSkipped('Test for property dimensions not implemented');
    }

    /**
     * Test attribute "conversionFactor"
     *
     * @group unit
     * @small
     */
    public function testPropertyConversionFactor(): void
    {
        $this->markTestSkipped('Test for property conversionFactor not implemented');
    }

    /**
     * Test attribute "conversionBaseunit"
     *
     * @group unit
     * @small
     */
    public function testPropertyConversionBaseunit(): void
    {
        $this->markTestSkipped('Test for property conversionBaseunit not implemented');
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

    /**
     * Test attribute "isDefault"
     *
     * @group unit
     * @small
     */
    public function testPropertyIsDefault(): void
    {
        $this->markTestSkipped('Test for property isDefault not implemented');
    }
}