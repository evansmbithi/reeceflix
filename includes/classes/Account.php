<?php
class Account{

    private $con;

    public function __construct($con){
        $this->con = $con;  #the con property on this class (private $con) will be set to the variable set at the construtor parsein
    }
}