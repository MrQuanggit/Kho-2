<?php
namespace Services;

class EmployeeManager 
{
    private static $employee;

    public function __construct()
    {
        self::$employee = [];
    }

    public static function add($employee) {
        self::$employee[] = $employee;
    }

    public static function getEmployee()
    {
        return self::$employee;
    }
}
?>