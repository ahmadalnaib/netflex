<?php


class Account
{
    private $conn;
    private $errorArray=array();
    public  function __construct($conn)
    {
        $this->conn=$conn;
    }

    public function register($fn,$ln,$un,$em,$em2,$pw,$pw2){
     $this->validateFirstName($fn);
     $this->validateLastName($ln);
    }

    private function validateFirstName($fn)
    {
        if(strlen($fn) < 2 || strlen($fn) > 25)
        {
        array_push($this->errorArray,Constants::$firstNameCharacters);
        }
    }

    private function validateLastName($ln)
    {
        if(strlen($ln) < 2 || strlen($ln) > 25)
        {
            array_push($this->errorArray,Constants::$lastNameCharacters);
        }
    }

    public function getError($error)
    {
        if(in_array($error,$this->errorArray))
        {
            return $error;
        }

    }

}