<?php
require_once 'account.php';
class Car {
    public $id;
    public $license;
    public $Account;
    public $passenger;
    
    public function __construct($license, $driver) {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar() {
        echo "Licencia: $this->licence Driver: ".$this->$driver;
    }
}

?>