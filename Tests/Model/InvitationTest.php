<?php
/**
 * InvitationTest
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
 * InvitationTest Class Doc Comment
 *
 * @category    Class
 * @description Invitation
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\Invitation
 */
class InvitationTest extends TestCase
{
    protected Invitation|MockObject $object;

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
         $this->object = $this->getMockBuilder(Invitation::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(Invitation::class));
        $this->assertInstanceOf(Invitation::class, $this->object);
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
     * Test attribute "clientId"
     *
     * @group unit
     * @small
     */
    public function testPropertyClientId(): void
    {
        $this->markTestSkipped('Test for property clientId not implemented');
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
     * Test attribute "cloudName"
     *
     * @group unit
     * @small
     */
    public function testPropertyCloudName(): void
    {
        $this->markTestSkipped('Test for property cloudName not implemented');
    }

    /**
     * Test attribute "cloudRole"
     *
     * @group unit
     * @small
     */
    public function testPropertyCloudRole(): void
    {
        $this->markTestSkipped('Test for property cloudRole not implemented');
    }

    /**
     * Test attribute "projectName"
     *
     * @group unit
     * @small
     */
    public function testPropertyProjectName(): void
    {
        $this->markTestSkipped('Test for property projectName not implemented');
    }

    /**
     * Test attribute "projectRole"
     *
     * @group unit
     * @small
     */
    public function testPropertyProjectRole(): void
    {
        $this->markTestSkipped('Test for property projectRole not implemented');
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
     * Test attribute "status"
     *
     * @group unit
     * @small
     */
    public function testPropertyStatus(): void
    {
        $this->markTestSkipped('Test for property status not implemented');
    }

    /**
     * Test attribute "senderProviderSub"
     *
     * @group unit
     * @small
     */
    public function testPropertySenderProviderSub(): void
    {
        $this->markTestSkipped('Test for property senderProviderSub not implemented');
    }
}