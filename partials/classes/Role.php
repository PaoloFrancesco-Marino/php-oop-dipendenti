<?php 
include_once __DIR__ . '/Person.php';

class Role {
    // properties
    public $role;
    public $jobHiring;
    public $salary;

    // constructor
    public function __construct($_role, $_jobHiring, $_salary) {
        
        $this->role = $_role;
        $this->jobHiring = $_jobHiring;
        $this->salary = $_salary;
    }

    // method

}