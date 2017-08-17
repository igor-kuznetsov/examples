<?php

namespace Examples\Patterns\AbstractFactory;

/**
 * Class JsonFactory
 * @package Examples\Patterns\AbstractFactory
 */
class JsonFactory extends AbstractFactory
{
    public function createText($content): AbstractText
    {
        return new JsonText($content);
    }
}
