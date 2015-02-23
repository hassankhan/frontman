<?php

namespace Frontman\Tests\Fixtures;

class ConstructorFixtureClass
{

    protected $value;

    public function __construct($arguments)
    {
        $this->value = count($arguments);
    }

    public function foo()
    {
        return 'Foo';
    }
}
