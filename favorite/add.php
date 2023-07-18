<?php

include "../connect.php" ;
$usersid = filterRequest("usersid");
$boxsid = filterRequest("boxsid");


$data = array(
    "favorite_usersid" => $usersid ,
    "favorite_boxsid" => $boxsid,
);


 insertData("favorite" , $data);


?>