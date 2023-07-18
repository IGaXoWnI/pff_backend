<?php

include "../connect.php" ;

$usersid = filterRequest("usersid");
$boxsid = filterRequest("boxsid");


deleteData("favorite" ,"favorite_usersid = $usersid AND favorite_boxsid = $boxsid  " );


?>