<?php
class Account{

    private $con;
    private $errorArray = array();

    public function __construct($con){
        $this->con = $con;  #the con property on this class (private $con) will be set to the variable set at the construtor parsein
    }

    public function validateFirstName($fn){
        if(strlen($fn) < 2 || strlen($fn) > 25){
            array_push($this->errorArray, "First name wrong length");
        }
    }

    public function getError($error){
        if(in_array($error, $this->errorArray)){
            return $error;
        }
    }
}