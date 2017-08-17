<?php

namespace Examples\Patterns\Strategy;

/**
 * Interface ComparatorInterface
 * @package Examples\Patterns\Strategy
 */
interface ComparatorInterface
{
    public function compare($a, $b);
}