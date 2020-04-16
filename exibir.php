<?php

require_once 'connect_db.php';


$consulta = "SELECT * from name_tarefa";


$con = $conn->query($consulta) or die ("Não foi possível selecionar");

?>