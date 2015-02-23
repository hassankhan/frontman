# Frontman

[![Latest version][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Frontman is a simple class that you can extend to create your own Laravel-style facades (or [proxies](http://en.wikipedia.org/wiki/Proxy_pattern), as they should be called).

## Install

Via Composer

``` bash
$ composer require hassankhan/frontman
```

## Usage

```php

use Frontman\Proxy;
use Frontman\ProxyInterface;

class MyClass
{
    public function foo()
    {
        echo 'Foo';
    }
}

class MyOtherClass
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function bar()
    {
        echo 'Bar';
    }
}

class MyProxy extends Proxy implements ProxyInterface
{
    public static function getRealClass()
    {
        return 'MyClass';
    }
}

class MyOtherProxy extends Proxy implements ProxyInterface
{
    public static function getRealClass()
    {
        return 'MyOtherClass';
    }

    public static function getConstructorArguments()
    {
        return array('5');
    }
}

MyProxy::foo();         // 'Foo'
MyOtherProxy::bar();    // 'Bar'
```

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## Credits

- [Hassan Khan](https://github.com/hassankhan)
- [All Contributors](https://github.com/hassankhan/frontman/contributors)

## License

The MIT License (MIT). Please see [LICENSE.md](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/hassankhan/frontman.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/hassankhan/frontman/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/hassankhan/frontman.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/hassankhan/frontman.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/hassankhan/frontman.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/hassankhan/frontman
[link-travis]: https://travis-ci.org/hassankhan/frontman
[link-scrutinizer]: https://scrutinizer-ci.com/g/hassankhan/frontman/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/hassankhan/frontman
[link-downloads]: https://packagist.org/packages/hassankhan/frontman
