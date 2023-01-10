<?php

include_once('Interfaces/StrategyInterface.php');

class ManagerStrategy implements StrategyInterface
{
    public function calc(int $days)
    {
        $salary = 2000 * $days;
        return $salary;
    }
}
