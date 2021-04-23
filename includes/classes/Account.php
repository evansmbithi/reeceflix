<?php
class Account{

    private $con;
    private $errorArray = array();

    public function __construct($con){
        $this->con = $con;  #the con property on this class (private $con) will be set to the variable set at the construtor parsein
    }

    public function register($fn,$ln,$un,$em,$em2,$pw,$pw2){
        $this->validateFirstName($fn);
        $this->validateLastName($ln);
        $this->validateUsername($un);
        $this->validateEmails($em,$em2);
        $this->validatePassword($pw,$pw2);

    }
    # private functions prevents calling functions outside the class
    private function validateFirstName($fn){
        if(strlen($fn) < 2 || strlen($fn) > 25){
            array_push($this->errorArray, Constants::$firstNameCharacters);
        }
    }

    private function validateLastName($ln){
        if(strlen($ln) < 2 || strlen($ln) > 25){
            array_push($this->errorArray, Constants::$lastNameCharacters);
        }
    }

    private function validateUsername($un){
        if(strlen($un) < 2 || strlen($un) > 25){
            array_push($this->errorArray, Constants::$usernameCharacters);
            return;
        }

        # check whether the username exists in the DB
        $query = $this->con->prepare("SELECT * FROM users WHERE username=:un");
        $query->bindValue(":un", $un);

        $query->execute();

        if($query->rowCount() != 0){
            # means the username has been taken
            array_push($this->errorArray, Constants::$usernameTaken);
        }
    }

    private function validateEmails($em, $em2){
        if($em != $em2){
            array_push($this->errorArray, Constants::$emailsDontMatch);
            return;
        }

        if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
            # Checks for valid email
            array_push($this->errorArray, Constants::$emailInvalid);
        }

        $query = $this->con->prepare("SELECT * FROM users WHERE email=:em");
        $query->bindValue(":em", $em);

        $query->execute();

        if($query->rowCount() != 0){
            # means the username has been taken
            array_push($this->errorArray, Constants::$emailTaken);
        }
    }

    public function validatePassword($pw,$pw2){
        if($pw != $pw2){
            array_push($this->errorArray, Constants::$passwordsDontMatch);
            return;
        }

        if(strlen($pw) < 5 || strlen($pw) > 25){
            array_push($this->errorArray, Constants::$passwordLength);
        }
    }

    public function getError($error){
        if(in_array($error, $this->errorArray)){
            # style the error messages
            return "<span class='errorMessage'>$error</span>";
        }
    }
}