<?php 
include_once __DIR__ . '/Person.php';

class Role extends Person {
    // properties
    public $role;
    public $jobHiring;
    public $salary;

    // constructor
    public function __construct($_name, $_surname, $_role, $_jobHiring, $_salary) {
        
        parent:: __construct($_name, $_surname);

        $this->role = $_role;
        $this->jobHiring = $_jobHiring;
        $this->salary = $_salary;
    }

    // method

}