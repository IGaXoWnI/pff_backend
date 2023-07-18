<?php

include "../connect.php";

$username = filterRequest("username") ;
$password = sha1($_POST['password']) ;
$email = filterRequest("email") ;



$stmt = $con->prepare("SELECT * FROM admins WHERE admin_email = ?");
$stmt->execute(array($email));
$count = $stmt->rowCount();
if($count >0){
    printFailure();
}else{
    $data = array(
        "admin_name" => $username ,
        "admin_email" => $email ,
        "admin_password" => $password ,
    );
    insertData("admins" , $data);
}