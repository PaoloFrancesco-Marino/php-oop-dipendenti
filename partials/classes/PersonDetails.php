<?php

include_once __DIR__ . '/Person.php';

class DetailsPerson extends Person {
    // properties
    public $dateBirth;
    public $age;
    public $number;
    public $address;
    public $civilStatus;

    // constructor
    public function __construct($_name, $_surname,$_dateBirth, $_age, $_number, $_address, $_civilStatus) {
        parent:: __construct($_name, $_surname,);

        $this->dateBirth = $_dateBirth;
        $this->age = $_age;
        $this->number = $_number;
        $this->address = $_address;
        $this->civilStatus = $_civilStatus;
    }
}

