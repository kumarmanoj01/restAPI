<?php

 


header('Content-Type:application/json');
header('Acess-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-with');


$data= json_decode(file_get_contents("php://input"),true);
$sid=$data['sid'];


include "config.php";
$sql="DELETE FROM apidata  WHERE sid={$sid}";

if(mysqli_query($conn,$sql)){
 echo json_encode(array('message' =>'STUDENT RECORD DELETED.','status'=>true));
}
else
{
    echo json_encode(array('message' =>'STUDENT RECORD NOT DELETED.','status'=>false));
}

?>