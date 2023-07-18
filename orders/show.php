<?php

include "../connect.php" ;

$usersid = filterRequest("usersid");

getAllData("orderview" , "users_id = $usersid ") ;