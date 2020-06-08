<?php
// import
include_once __DIR__ . '/Status.php';
// include traits
include_once __DIR__ . '/Traits.php';

class Person extends Status {
    // import traitst
    use Matricola;

    // properties
    public $name;
    public $surname;

    // constructor
    public function __construct($_role, $_jobHiring, $_salary, $_status, $_name, $_surname) {
        
        parent:: __construct($_role, $_jobHiring, $_salary, $_status);

        $this->name = $_name;
        $this->surname = $_surname;
        $this->getRandomCode();

    }
    
    // method
}

