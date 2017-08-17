<?php

namespace Examples\Patterns\AbstractFactory;

require_once '../../autoload.php';

//$factory = new HtmlFactory();
//$html = $factory->createText('test text');
//
//$factory = new JsonFactory();
//$json = $factory->createText('test text');
//
//echo $html->getText();
//echo '<hr>';
//echo $json->getText();

class Test
{
    public function __construct(AbstractFactory $factory, $text)
    {
        $text = $factory->createText($text);

        echo $text->getText();
    }
}

new Test(new HtmlFactory, 'test text');