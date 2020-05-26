<?php


class Account
{
    private $conn;
    private $errorArray=array();
    public  function __construct($conn)
    {
        $this->conn=$conn;
    }

    public function validateFirstName($fn)
    {
        if(strlen($fn) < 2 || strlen($fn) > 25)
        {
        array_push($this->errorArray,Constants::$firstNameCharacters);
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