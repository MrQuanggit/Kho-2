<?php
include_once "Models/Employee.php";
include_once "Services/EmployeeManager.php";

use Services\EmployeeManager;
use Models\Employee;

EmployeeManager::add(new Employee("Quang", "Vo", "11/07", "28NTP", "CEO"));
EmployeeManager::add(new Employee("Hau", "Nguyen","21/04", "28NTP", "Manager"));

$employees = EmployeeManager::getEmployee();
foreach ($employees as $employee) {
    echo $employee->getName() ."<br/>";
    echo $employee->getLastname() ."<br/>";
    echo $employee->getDob() ."<br/>";
    echo $employee->getAdress() ."<br/>";
    echo $employee->getJob() ."<br/>";
}
?>