<?php 

include './connect.php';
$table = "users";
// $name = filterRequest("namerequest");
$data = array( 
"users_name" => "bassam",
"users_email" => "bassam@gmail.com",  
"users_password" => "huhu1982full2",    
);
$count = insertData($table , $data);