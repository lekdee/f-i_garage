<?php

error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json; charset=utf-8');

include "Config.php";
$Table = $_POST['Table'];
$query="SELECT * FROM $Table";
echo $query;
$result = $con->query($query);

$response = array();
 while($row = $result->fetch_assoc()){
   $response[] = $row;
      
}

echo json_encode($response);
exit();
// $stmt = $con->prepare("select * from users");
// $stmt->bind_param("ss");
// $stmt->execute();
// $result = $stmt->get_result();
// $outp = $result->fetch_all(MYSQLI_ASSOC);
?>
