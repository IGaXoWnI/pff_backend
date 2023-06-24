<?php
include "connect.php" ;

$alldata = array();
$alldata["status"] = "success" ;

$categories = getAllData("categories" , null , null , false );

$alldata['categories'] = $categories ;


$boxs = getAllData("boxsview" , null , null , false );

$alldata['boxs'] = $boxs ;




echo  json_encode($alldata);



?>