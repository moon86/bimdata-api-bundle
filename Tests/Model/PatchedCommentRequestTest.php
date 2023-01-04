<?php
/**
 * PatchedCommentRequestTest
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
 * PatchedCommentRequestTest Class Doc Comment
 *
 * @category    Class
 * @description PatchedCommentRequest
 * @package     OpenAPI\Server\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \OpenAPI\Server\Model\PatchedCommentRequest
 */
class PatchedCommentRequestTest extends TestCase
{
    protected PatchedCommentRequest|MockObject $object;

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
         $this->object = $this->getMockBuilder(PatchedCommentRequest::class)->getMockForAbstractClass();
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
        $this->assertTrue(class_exists(PatchedCommentRequest::class));
        $this->assertInstanceOf(PatchedCommentRequest::class, $this->object);
    }

    /**
     * Test attribute "guid"
     *
     * @group unit
     * @small
     */
    public function testPropertyGuid(): void
    {
        $this->markTestSkipped('Test for property guid not implemented');
    }

    /**
     * Test attribute "date"
     *
     * @group unit
     * @small
     */
    public function testPropertyDate(): void
    {
        $this->markTestSkipped('Test for property date not implemented');
    }

    /**
     * Test attribute "author"
     *
     * @group unit
     * @small
     */
    public function testPropertyAuthor(): void
    {
        $this->markTestSkipped('Test for property author not implemented');
    }

    /**
     * Test attribute "comment"
     *
     * @group unit
     * @small
     */
    public function testPropertyComment(): void
    {
        $this->markTestSkipped('Test for property comment not implemented');
    }

    /**
     * Test attribute "viewpointGuid"
     *
     * @group unit
     * @small
     */
    public function testPropertyViewpointGuid(): void
    {
        $this->markTestSkipped('Test for property viewpointGuid not implemented');
    }

    /**
     * Test attribute "replyToCommentGuid"
     *
     * @group unit
     * @small
     */
    public function testPropertyReplyToCommentGuid(): void
    {
        $this->markTestSkipped('Test for property replyToCommentGuid not implemented');
    }

    /**
     * Test attribute "modifiedAuthor"
     *
     * @group unit
     * @small
     */
    public function testPropertyModifiedAuthor(): void
    {
        $this->markTestSkipped('Test for property modifiedAuthor not implemented');
    }

    /**
     * Test attribute "viewpointTempId"
     *
     * @group unit
     * @small
     */
    public function testPropertyViewpointTempId(): void
    {
        $this->markTestSkipped('Test for property viewpointTempId not implemented');
    }
}
