<?php
include "../connect.php" ;


$categoriesid = filterRequest("id");

getAllData("boxsview" , "categories_id = $categoriesid" );







