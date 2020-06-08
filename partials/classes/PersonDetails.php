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
    public function __construct($_role, $_jobHiring, $_salary, $_status, $_name, $_surname, $_dateBirth, $_age, $_number, $_address, $_civilStatus) {
        
        parent:: __construct($_role, $_jobHiring, $_salary, $_status, $_name, $_surname);

        $this->dateBirth = $_dateBirth;
        $this->age = $_age;
        $this->number = $_number;
        $this->address = $_address;
        $this->civilStatus = $_civilStatus;
    }
    // method
    public function ageControl($_age) {
        if (!is_int($this->age)) {
            throw new Exception('età inserita non è un numero');
        } 

        return $_age;
    }
}

$dipendenti = [
    new DetailsPerson('Presidente', '10-10-1979', 50000, '', 'Giovanni', 'Rossi', '20-05-1952', '68', '333-3333333', 'Via piromallli 4', 'Sposato' ),
    new DetailsPerson('VicePresidente', '10-10-1985', 40000, 'Assente', 'Gianluca', 'Rossi', '12-12-1962', 35, '333-3333333', 'Via San Francesco 1', 'Sposato' ),
    new DetailsPerson('Amministratore Delegato', '10-10-1984', 40.000, 'Presente', 'Alfredo', 'Poretti', '11-03-1967', 36, '333-3333333', 'Viale Alo Moro 114', 'Sposato' ),
    new DetailsPerson('Segretario', '10-10-2000', 15000, 'Presente', 'Pierfrancesco', 'Pontari', '20-06-1980', 40, '333-3333333', 'Via roma 14', 'Sposato' ),
    new DetailsPerson('Designer', '10-10-2012', 25000, '', 'Francesco', 'Cucuzza', '20-05-1987', '33', '333-3333333', 'Viale porto vecchio 84', 'Celibe' )
];