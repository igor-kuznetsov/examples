<?php

namespace Examples\Patterns\Facade;

/**
 * Class PcBios
 * @package Examples\Patterns\Facade
 */
class PcBios implements BiosInterface
{
    public function execute()
    {
        // TODO: Implement execute() method.
    }

    public function waitForKeyPress()
    {
        // TODO: Implement waitForKeyPress() method.
    }

    public function launch(OsInterface $os)
    {
        echo $os->getName() . ' launched';
    }

    public function powerDown()
    {
        // TODO: Implement powerDown() method.
    }
}
