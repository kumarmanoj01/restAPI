<?php

header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-with');

$data= json_decode(file_get_contents("php://input"),true);
$sid=$data['sid'];
$sname=$data['sname'];
$sage=$data['sage'];
$city=$data['city'];

include "config.php";
$sql="UPDATE apidata SET sname='{$sname}',sage='{$sage}',city='{$city}' WHERE sid={$sid}";

if(mysqli_query($conn,$sql)){
   echo json_encode(array('message' =>'Student Record Updated.','status'=>true));
}
else
{
    echo json_encode(array('message' =>'Student Record Not Updated.','status'=>false));
}

?>

