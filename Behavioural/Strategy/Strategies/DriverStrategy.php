<?php

include_once('Interfaces/StrategyInterface.php');

class DriverStrategy implements StrategyInterface
{
    public function calc(int $days)
    {
        $salary = 1000 * $days;
        return $salary;
    }
}
