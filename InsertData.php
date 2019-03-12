<?php

header("Content-type: text/plain; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, x-Auth-Token');
header('Content-Type: application/json');

include 'libs/ConnectDB.php';

  $result = "";

  $name = $_POST['Name'];
  $lastname = $_POST['LastName'];

// $name = "Name";
// $lastname = "LastName";

  $sql = "INSERT INTO tb_name (name, lastname)
    VALUES ('$name', '$lastname')";

 $result = mysqli_query($connection,$sql);

   if($result){
     $result = "สำเร็จ";
        echo $result;
   }else {
     $result = "ไม่สำเร็จ";
        echo $result;
   }

 mysqli_close($connection);

 ?>



