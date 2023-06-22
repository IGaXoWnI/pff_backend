<?php

include "../connect.php";

$username = filterRequest("username") ;
$password = sha1($_POST['password']) ;
$email = filterRequest("email") ;



$stmt = $con->prepare("SELECT * FROM users WHERE users_email = ?");
$stmt->execute(array($email));
$count = $stmt->rowCount();
if($count >0){
    printFailure();
}else{
    $data = array(
        "users_name" => $username ,
        "users_email" => $email ,
        "users_password" => $password ,
    );
    insertData("users" , $data);
}