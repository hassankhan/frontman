<?php

namespace Frontman\Tests\Fixtures;

use Frontman\Proxy;
use Frontman\ProxyInterface;

class ConstructorFixture extends Proxy implements ProxyInterface
{
    public static function getRealClass()
    {
        return 'Frontman\Tests\Fixtures\ConstructorFixtureClass';
    }

    public static function getConstructorArguments()
    {
        return array('hello');
    }
}
