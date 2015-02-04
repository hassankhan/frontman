<?php

namespace Frontman\Tests;

use Frontman\Tests\Fixtures\Fixture;

class FrontmanTest extends \PHPUnit_Framework_TestCase
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
    public function testMethodCallOnRootClass()
    {
        $expected = 'Foo';
        $actual   = Fixture::foo();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @covers            Frontman\Proxy::__callStatic()
     * @expectedException BadMethodCallException
     */
    public function testUndefinedMethodCallOnRootClass()
    {
        Fixture::bar();
    }

}
