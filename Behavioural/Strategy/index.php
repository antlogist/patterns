<?php 

include_once('Controllers/SalaryController.php');

$user = new SalaryController();
echo $user->calculateSalary((object)['name'=>'John Doe', 'profession'=>'Manager'], 25) . '<br>';
echo $user->calculateSalary((object)['name'=>'Robert Plant', 'profession'=>'Driver'], 25);

