<?php

namespace Examples\Patterns\Strategy;

/**
 * Class IdComparator
 * @package Examples\Patterns\Strategy
 */
class IdComparator implements ComparatorInterface
{
    public function compare($a, $b)
    {
        return $a['id'] <=> $b['id'];
    }
}