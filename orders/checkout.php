<?php

include "../connect.php" ;

$usersid = filterRequest("usersid");




$data = array(
    "orders_usersid" => $usersid,
    
    
    
);

 $count = insertData("orders" , $data , false );
 
 if($count > 0) {
    $stmt = $con->prepare("SELECT MAX(orders_id) FROM orders");
    $stmt->execute();
    $maxid = $stmt->fetchColumn();
    

    $data = array("favorite_orders" => "1");

    updateData("favorite" , $data , "favorite_usersid = $usersid AND favorite_orders = 0 "); 
 };


 