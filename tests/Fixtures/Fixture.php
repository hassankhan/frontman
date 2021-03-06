<?php

namespace Frontman\Tests\Fixtures;

use Frontman\Proxy;
use Frontman\ProxyInterface;

class Fixture extends Proxy implements ProxyInterface
{
    public static function getRealClass()
    {
        return 'Frontman\Tests\Fixtures\FixtureClass';
    }

    public static function getConstructorArguments()
    {
        return array();
    }
}
