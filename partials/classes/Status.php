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
    public function status($_status) {
        if ($this->status == '') {
            throw new Exception('Non hai iserito la presenza');
        } 

        return $_status;
    }
}
