<?php

namespace Examples\Patterns\AbstractFactory;

/**
 * Class HtmlFactory
 * @package Examples\Patterns\AbstractFactory
 */
class HtmlFactory extends AbstractFactory
{
    public function createText($content): AbstractText
    {
        return new HtmlText($content);
    }
}
