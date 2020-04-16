<?php
session_start();
require_once 'connect_db.php';
date_default_timezone_set("Brazil/East");

$recebeId = $_GET['tarefa_id'];
$recebeNome = $_GET['tarefa_name'];


   

$receber = time();
$data = date("Y-m-d H:i:s", $receber);
echo $data;



$sql = "UPDATE name_tarefa SET tarefa_status = 'concluido', tarefa_data_final = '$data' WHERE tarefa_id = $recebeId;";

if($conn->query($sql) === true){
   
    header("location:index.php");
} else {

   echo "error";

}



























