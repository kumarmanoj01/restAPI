<?php

header('Content-Type:application/json');
header('Acess-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-with');

$data= json_decode(file_get_contents("php://input"),true);
$sname=$data['sname'];
$sage=$data['sage'];
$city=$data['city'];

include "config.php";
$sql="INSERT INTO apidata(sname,sage,city) VALUES ('{$sname}','{$sage}','{$city}')";

if(mysqli_query($conn,$sql)){
   echo json_encode(array('message' =>'Student Record Inserted.','status'=>true));
}
else
{
    echo json_encode(array('message' =>'Student Record Not Inserted.','status'=>false));
}

?>

