<?php

namespace App\Services;

use InvalidArgumentException;

/**
 * Responsible for delivering the 'calculator' logic!
 */
class CalculatorService
{
    public function add($x, $y)
    {
        return $x + $y;
    }
    
    public function sub($x, $numToTakeAway)
    {
        return $x - $numToTakeAway;
    }

    public function div($x, $divider)
    {
        if ($divider == 0)
            throw new InvalidArgumentException('Divider cannot be zero');

        return $x / $divider;
    }
}