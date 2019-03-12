<?php

header("Content-type: text/plain; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, x-Auth-Token');
header('Content-Type: application/json');

include 'libs/ConnectDB.php';

class name {

    public $Name = "";
    public $LastName = "";
}

$obj = new name();

$sql = "SELECT * FROM tb_name";

$result = mysqli_query($connection,$sql);

// Fetch one and one row
while ($row = mysqli_fetch_row($result))
 {
     $obj->Name = $row[1];
     $obj->LastName = $row[2];

     echo json_encode($obj);
 }

 mysqli_close($connection);

 ?>



