<?php

namespace Examples\Patterns\Facade;

/**
 * Interface BiosInterface
 * @package Examples\Patterns\Facade
 */
interface BiosInterface
{
    public function execute();
    public function waitForKeyPress();
    public function launch(OsInterface $os);
    public function powerDown();
}
