<?php
/**
 * SnapshotRequestTest
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
 * SnapshotRequestTest Class Doc Comment
 *
 * @category    Class
 * @description Adds nested create feature
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\SnapshotRequest
 */
class SnapshotRequestTest extends TestCase
{
    protected SnapshotRequest|MockObject $object;

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
         $this->object = $this->getMockBuilder(SnapshotRequest::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(SnapshotRequest::class));
        $this->assertInstanceOf(SnapshotRequest::class, $this->object);
    }

    /**
     * Test attribute "snapshotType"
     *
     * @group unit
     * @small
     */
    public function testPropertySnapshotType(): void
    {
        $this->markTestSkipped('Test for property snapshotType not implemented');
    }

    /**
     * Test attribute "snapshotData"
     *
     * @group unit
     * @small
     */
    public function testPropertySnapshotData(): void
    {
        $this->markTestSkipped('Test for property snapshotData not implemented');
    }
}
