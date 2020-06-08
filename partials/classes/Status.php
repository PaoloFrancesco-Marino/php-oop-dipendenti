<?php 
include_once __DIR__ . '/Role.php';

class Status extends Role {
    public $status;

    // constructor
    public function __construct($_role, $_jobHiring, $_salary, $_status) {
        
        parent:: __construct($_role, $_jobHiring, $_salary);

        $this->status = $_status;
    }

    // method
    public function status($b) {
        if ($b == 'Presente') {
            throw new Exception('Disponibile');
        } else if ($b == 'Assente') {
            throw new Exception('Indisponibile');
        }
    }
}

$test = new Status('Designer', '20-10-200', '20,000', 'Presente');

try {
    echo $test->status('Assente');
} catch (Exception $c) {
    echo $c->getMessage();
}
