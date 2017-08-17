<?php

namespace Examples\Patterns\AbstractFactory;

/**
 * Class JsonText
 * @package Examples\Patterns\AbstractFactory
 */
class JsonText extends AbstractText
{
    public function getText()
    {
        return json_encode(['text' => $this->text]);
    }
}
