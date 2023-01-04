<?php
/**
 * FolderWithoutChildrenTest
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
 * FolderWithoutChildrenTest Class Doc Comment
 *
 * @category    Class
 * @description FolderWithoutChildren
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\FolderWithoutChildren
 */
class FolderWithoutChildrenTest extends TestCase
{
    protected FolderWithoutChildren|MockObject $object;

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
         $this->object = $this->getMockBuilder(FolderWithoutChildren::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(FolderWithoutChildren::class));
        $this->assertInstanceOf(FolderWithoutChildren::class, $this->object);
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
     * Test attribute "nature"
     *
     * @group unit
     * @small
     */
    public function testPropertyNature(): void
    {
        $this->markTestSkipped('Test for property nature not implemented');
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
     * Test attribute "createdBy"
     *
     * @group unit
     * @small
     */
    public function testPropertyCreatedBy(): void
    {
        $this->markTestSkipped('Test for property createdBy not implemented');
    }

    /**
     * Test attribute "groupsPermissions"
     *
     * @group unit
     * @small
     */
    public function testPropertyGroupsPermissions(): void
    {
        $this->markTestSkipped('Test for property groupsPermissions not implemented');
    }

    /**
     * Test attribute "defaultPermission"
     *
     * @group unit
     * @small
     */
    public function testPropertyDefaultPermission(): void
    {
        $this->markTestSkipped('Test for property defaultPermission not implemented');
    }

    /**
     * Test attribute "userPermission"
     *
     * @group unit
     * @small
     */
    public function testPropertyUserPermission(): void
    {
        $this->markTestSkipped('Test for property userPermission not implemented');
    }
}
