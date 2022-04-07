<?php
$tns = " 
(DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = srvodaprm0-vip)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = prdnew)
    )
  )
       ";
$db_username = "dbamv";
$db_password = "jks32lv1*";
try{
    $conn = new PDO("oci:dbname=".$tns,$db_username,$db_password);
}catch(PDOException $e){
    echo ($e->getMessage());
}

$stmt = $conn->query("SELECT * FROM ATENDIME");
$user = $stmt->fetch();

var_dump($user);