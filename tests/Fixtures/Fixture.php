<?php

namespace Frontman\Tests\Fixtures;

class Fixture extends \Frontman\Proxy
{
    public static function getRealClass()
    {
        return 'Frontman\Tests\Fixtures\FixtureClass';
    }
}
