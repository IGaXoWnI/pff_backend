<?php
include "../connect.php" ;


$categoriesid = filterRequest("id");

// getAllData("boxsrestaucat" , "categories_id = $categoriesid" );

$userid = filterRequest("usersid");



$stmt = $con->prepare("SELECT boxsrestaucat.* , 1 as favorite FROM boxsrestaucat
INNER JOIN favorite ON favorite.favorite_boxsid = boxsrestaucat.boxs_id AND favorite.favorite_usersid = $userid
WHERE categories_id = $categoriesid
UNION ALL
SELECT * , 0 as favorite FROM boxsrestaucat
WHERE categories_id = $categoriesid AND boxs_id NOT IN (SELECT boxsrestaucat.boxs_id FROM boxsrestaucat
INNER JOIN favorite ON favorite.favorite_boxsid = boxsrestaucat.boxs_id AND favorite.favorite_usersid = $userid) ;");




$stmt -> execute() ;
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count  = $stmt->rowCount();


if($count > 0){
    echo json_encode(array("status" => "success" , "data" => $data ));
}else{
    echo json_encode(array("status" => "failure"));
}