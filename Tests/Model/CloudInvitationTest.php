<?php
/**
 * CloudInvitationTest
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
 * CloudInvitationTest Class Doc Comment
 *
 * @category    Class
 * @description CloudInvitation
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\CloudInvitation
 */
class CloudInvitationTest extends TestCase
{
    protected CloudInvitation|MockObject $object;

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
         $this->object = $this->getMockBuilder(CloudInvitation::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(CloudInvitation::class));
        $this->assertInstanceOf(CloudInvitation::class, $this->object);
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
     * Test attribute "email"
     *
     * @group unit
     * @small
     */
    public function testPropertyEmail(): void
    {
        $this->markTestSkipped('Test for property email not implemented');
    }

    /**
     * Test attribute "redirectUri"
     *
     * @group unit
     * @small
     */
    public function testPropertyRedirectUri(): void
    {
        $this->markTestSkipped('Test for property redirectUri not implemented');
    }

    /**
     * Test attribute "role"
     *
     * @group unit
     * @small
     */
    public function testPropertyRole(): void
    {
        $this->markTestSkipped('Test for property role not implemented');
    }
}
