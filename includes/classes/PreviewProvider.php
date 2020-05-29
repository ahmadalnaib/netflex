<?php


class PreviewProvider
{
    private $conn;
    private $username;

public function __construct($conn,$username)
{
    $this->conn=$conn;
    $this->username=$username;
}

public function createPreviewVideo()
{
    echo "hi Preview Provider";
}


}