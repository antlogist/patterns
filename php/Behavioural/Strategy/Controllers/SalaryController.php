<?php

include_once('Strategies/SalaryManager.php');

class SalaryController
{
    /**
     * Undocumented function
     *
     * @param object $user
     * @param integer $days
     * @return void
     */
    public function calculateSalary(object $user, int $days)
    {
        $salary = new SalaryManager($user, $days);
        return $salary->handle();
    }
}
