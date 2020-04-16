<?php

require_once 'connect_db.php';

$tarefa = $_GET['tarefa'];

$sql = "DELETE FROM name_tarefa WHERE tarefa_name='$tarefa'";


if($conn->query($sql) === true) {
    header("location:index.php");
} else {
    echo "Não foi possível remover $tarefa";
}


/**  DELETE FROM `name_tarefa` WHERE `name_tarefa`.`tarefa_id` = 3; **/