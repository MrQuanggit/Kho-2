<?php
namespace Models;

class Employee
{
    private $name;
    private $lastname;
    private $dob;
    private $adress;
    private $job;

    public function __construct($name = NULL, $lastname = NULL, $dob = NULL, $adress = NULL, $job = NULL)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->dob = $dob;
        $this->adress = $adress;
        $this->job = $job;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    public function getLastname()
    {
        return $this->lastname;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function setJob($job)
    {
        $this->job = $job;
    }

    public function getJob()
    {
        return $this->job;
    }
}
?>