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

public function createPreviewVideo($entity)
{
if($entity==null) {
$entity=$this->getRandomEntity();
}

}

private function getRandomEntity()
{
$query=$this->conn->prepare("SELECT * FROM entities ORDER  BY RAND() LIMIT 1");
$query->execute();

$row=$query->fetch(PDO::FETCH_ASSOC);
echo $row['name'];
}


}