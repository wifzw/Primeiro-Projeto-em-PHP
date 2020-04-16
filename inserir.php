<?php
session_start();
require_once 'connect_db.php';



$tarefa = $_POST['tarefa'];



$SQL = "INSERT INTO name_tarefa (tarefa_name) VALUES ('$tarefa')";

$t = strlen($tarefa);


if($tarefa > 0){

    $_SESSION['tarefa-incorreta'] = true;
    header("location: index.php");

}else{
    
    if($t > 10){

        if ($conn->query($SQL) === TRUE) {
    
    
            $consulta = "SELECT * from name_tarefa";
            $con = $conn->query($consulta) or die ("Não foi possível selecionar");
    
            while($exibe = $con->fetch_array()){
    
    
    
             $sql = "UPDATE name_tarefa SET tarefa_status = 'pendente', tarefa_data_final = 'aguardando...' WHERE tarefa_id = $exibe[tarefa_id] ";
    
    
            }
    
    
    
            if($conn->query($sql) === true){
                $_SESSION['tarefa_aguardo'] = true;
                header("location: index.php");
            } else {
                echo "Não foi possivel criar a tarefa";
            }
    
    
    
    
    
        } else {
            echo "Não foi possível adicionar esta tarefa";
    
        }
    
    
    
    } else {
        $_SESSION['error_tarefa'] = true;
        header("location: index.php");
    }
    


}





