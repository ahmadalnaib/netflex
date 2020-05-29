<?php


class Entity
{
    private $conn;
    private $input;
public function __construct($conn,$input)
{
$this->conn=$conn;


if (is_array($input)){
    $this->input=$input;
}
else{
    $query=$this->conn->prepare("SELECT * FROM entities WHERE id=:id");
    $query->bindValue(":id",$input);
    $query->execute();

    $this->input=$query->fetch(PDO::FETCH_ASSOC);
}

}


}