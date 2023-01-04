<?php
/**
 * MarketplaceAppRequestTest
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
 * MarketplaceAppRequestTest Class Doc Comment
 *
 * @category    Class
 * @description MarketplaceAppRequest
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\MarketplaceAppRequest
 */
class MarketplaceAppRequestTest extends TestCase
{
    protected MarketplaceAppRequest|MockObject $object;

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
         $this->object = $this->getMockBuilder(MarketplaceAppRequest::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(MarketplaceAppRequest::class));
        $this->assertInstanceOf(MarketplaceAppRequest::class, $this->object);
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
     * Test attribute "shortDescription"
     *
     * @group unit
     * @small
     */
    public function testPropertyShortDescription(): void
    {
        $this->markTestSkipped('Test for property shortDescription not implemented');
    }

    /**
     * Test attribute "longDescription"
     *
     * @group unit
     * @small
     */
    public function testPropertyLongDescription(): void
    {
        $this->markTestSkipped('Test for property longDescription not implemented');
    }

    /**
     * Test attribute "activationWebhookUrl"
     *
     * @group unit
     * @small
     */
    public function testPropertyActivationWebhookUrl(): void
    {
        $this->markTestSkipped('Test for property activationWebhookUrl not implemented');
    }

    /**
     * Test attribute "postActivationRedirectUri"
     *
     * @group unit
     * @small
     */
    public function testPropertyPostActivationRedirectUri(): void
    {
        $this->markTestSkipped('Test for property postActivationRedirectUri not implemented');
    }

    /**
     * Test attribute "viewerPluginsUrls"
     *
     * @group unit
     * @small
     */
    public function testPropertyViewerPluginsUrls(): void
    {
        $this->markTestSkipped('Test for property viewerPluginsUrls not implemented');
    }

    /**
     * Test attribute "webhookSecret"
     *
     * @group unit
     * @small
     */
    public function testPropertyWebhookSecret(): void
    {
        $this->markTestSkipped('Test for property webhookSecret not implemented');
    }

    /**
     * Test attribute "settingsUrl"
     *
     * @group unit
     * @small
     */
    public function testPropertySettingsUrl(): void
    {
        $this->markTestSkipped('Test for property settingsUrl not implemented');
    }

    /**
     * Test attribute "tags"
     *
     * @group unit
     * @small
     */
    public function testPropertyTags(): void
    {
        $this->markTestSkipped('Test for property tags not implemented');
    }

    /**
     * Test attribute "logo"
     *
     * @group unit
     * @small
     */
    public function testPropertyLogo(): void
    {
        $this->markTestSkipped('Test for property logo not implemented');
    }

    /**
     * Test attribute "file"
     *
     * @group unit
     * @small
     */
    public function testPropertyFile(): void
    {
        $this->markTestSkipped('Test for property file not implemented');
    }
}
