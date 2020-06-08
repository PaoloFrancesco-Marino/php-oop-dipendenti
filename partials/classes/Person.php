<?php
// include traits
include_once __DIR__ . '/Traits.php';

class Person {
    // import traitst
    use Matricola;

    // properties
    public $name;
    public $surname;

    // constructor
    public function __construct($_name, $_surname) {
        
        $this->name = $_name;
        $this->surname = $_surname;
        $this->getRandomCode();

    }

    // method
}