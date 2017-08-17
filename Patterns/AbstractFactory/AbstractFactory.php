<?php

namespace Examples\Patterns\AbstractFactory;

/**
 * Class AbstractFactory
 * @package Examples\Patterns\AbstractFactory
 */
abstract class AbstractFactory
{
    abstract public function createText($content): AbstractText;
}