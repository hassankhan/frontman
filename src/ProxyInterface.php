<?php

namespace Frontman;

/**
 * Frontman proxy interface class
 *
 * @package    Frontman
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/frontman/
 * @license    MIT
 * @since      0.1
 */
interface ProxyInterface
{
    /**
     * Returns fully-qualified class name
     *
     * @return string
     */
    public static function getRealClass();

    /**
     * Returns any arguments required for an object's construction
     *
     * @return array
     */
    public static function getConstructorArguments();
}
