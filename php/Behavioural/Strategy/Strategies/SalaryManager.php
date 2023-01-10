<?php

class SalaryManager
{

    private $salaryStrategy;
    private $profession;
    private $days;

    public function __construct(object $user, int $days)
    {
        if ($user->profession) {
            $this->profession = $user->profession;
        }
        $this->days = $days;
    }

    public function handle()
    {
        $userSalary = $this->calculateSalary();
        return $userSalary;
    }

    private function calculateSalary()
    {
        $salaryStrategy = $this->getSalaryStrategy();
        $this->salaryStrategy = $salaryStrategy;
        return $this->salaryStrategy->calc($this->days);
    }

    private function getSalaryStrategy()
    {
        $strategyName = ucwords($this->profession);
        $className = $strategyName . 'Strategy';
        $classPath = 'Strategies/';

        include_once($classPath . $className . '.php');

        $strategyClass = new $className;

        return $strategyClass;
    }
}
