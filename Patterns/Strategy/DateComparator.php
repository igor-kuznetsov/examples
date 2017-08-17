<?php

namespace Examples\Patterns\Strategy;

use DateTime;

/**
 * Class DateComparator
 * @package Examples\Patterns\Strategy
 */
class DateComparator implements ComparatorInterface
{
    public function compare($a, $b)
    {
        $aDate = new DateTime($a['date']);
        $bDate = new DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}