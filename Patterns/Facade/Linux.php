<?php

namespace Examples\Patterns\Facade;

/**
 * Class Linux
 * @package Examples\Patterns\Facade
 */
class Linux implements OsInterface
{
    public function halt()
    {
        // TODO: Implement halt() method.
    }

    public function getName()
    {
        return 'Linux';
    }
}
