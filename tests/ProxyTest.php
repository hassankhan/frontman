<?php

namespace Frontman\Tests;

use Frontman\Tests\Fixtures\Fixture;
use Frontman\Tests\Fixtures\ConstructorFixture;

class ProxyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Frontman\Proxy
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Frontman\Proxy::__callStatic()
     */
    public function testRealClassConstructor()
    {
        $expected = 'Foo';
        $actual   = ConstructorFixture::foo();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @covers Frontman\Proxy::__callStatic()
     */
    public function testMethodCallOnRealClass()
    {
        $expected = 'Foo';
        $actual   = Fixture::foo();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @covers            Frontman\Proxy::__callStatic()
     * @expectedException BadMethodCallException
     */
    public function testUndefinedMethodCallOnRealClass()
    {
        Fixture::bar();
    }

}
