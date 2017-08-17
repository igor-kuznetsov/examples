<?php

namespace Examples\Patterns\AbstractFactory;

/**
 * Class HtmlText
 * @package Examples\Patterns\AbstractFactory
 */
class HtmlText extends AbstractText
{
    public function getText()
    {
        return '<p>'.$this->text.'</p>';
    }
}
