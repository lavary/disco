<?php

/*
 * This file is part of the Disco package.
 *
 * (c) bitExpert AG
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace bitExpert\Disco\Proxy\Configuration\MethodGenerator;

use bitExpert\Disco\Proxy\Configuration\SessionBeansProperty;
use ProxyManager\Generator\MagicMethodGenerator;
use ReflectionClass;

/**
 * `__sleep` method for the generated config proxy class.
 */
class MagicSleep extends MagicMethodGenerator
{
    /**
     * Creates a new {@link \bitExpert\Disco\Proxy\Configuration\MethodGenerator\MagicSleep}.
     *
     * @param ReflectionClass $originalClass
     * @param SessionBeansProperty $sessionBeansProperty
     */
    public function __construct(ReflectionClass $originalClass, SessionBeansProperty $sessionBeansProperty)
    {
        parent::__construct($originalClass, '__sleep');

        $this->setBody(
            'return ["' . $sessionBeansProperty->getName() . '"];'
        );
    }
}
