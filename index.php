<?php
session_start();
require_once 'exibir.php';


$receber = time();
$data = date("Y-d-m", $receber);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!-- 
        -----------------------------
        # Sistema de Tarefa simples
        # Date: 15-04-2020 Finalizado
        # Name: Kauan C. Motta
        # Nivel: Básico
        -----------------------------
    -->
    <meta charset="UTF-8">
    <title>Projeto To-do List</title>
    <style type="text/css">


        html {
            font-family: Consolas;
            background-color: black;
            color:white;
        }

        button.add-tarefa {
            border-radius: 3px;
            color: #ffffff;
            margin-bottom: 10px;
            margin-top: 5px;
            padding: 8px 7px;
            text-transform: uppercase;
            font-weight: bold;
            background-color: #5cb85c;
        }
        label {

            font-family: "Courier New";

        }

        input#tarefa {
            padding: 5px 45px;
            margin-top: auto;
            margin: 0px 8px;
        }
        #tarefa,button{
            font-family: "Lucida Console";
        }
        form {
             text-align: center;

         }
        table {
            font-family: "Franklin Gothic Medium";
        }

        #atencao {
            color: crimson;
            display: flex;
            align-items: center;
            justify-content: center


        }

        td#nome-tarefa {
            color: dodgerblue;
        }

        td#status-tarefa {color: limegreen;}

        td#data-tarefa {
            color: lightseagreen;
            padding: 1px 37px 0px;
        }

        td#tarefa-concluida {
            color: blueviolet;
            font-family: "Segoe UI Historic";
            !important;
        }

        td#tarefa-pendente {
            color: #ff8c00;
            font-family: "Segoe UI Historic";
            !important;
        }

        table {
            white-space: nowrap;

        }

        .deletar-tarefa{
            padding: 0px 20px;
        }


        .tarefa-concluida{

            color:#1d8c30;
        }

        .funcionalidades{
            text-align: center;
            
            
            
        }

        #listagem{
     display: flex;
     align-items: center;
     justify-content: center }
        }


    </style>
</head>
<body>

<?php if(isset($_SESSION['tarefa-incorreta']) == true){?>

    <b id="atencao">[Atenção] Por favor digitar apenas letras</b>
<?php } $_SESSION['tarefa-incorreta'] = null;?>

<?php if(isset($_SESSION['error_tarefa']) === true){ ?>
    <b id="atencao">[Atenção] Especifique a tarefa com mais detalhe</b>

<?php }  $_SESSION['error_tarefa'] = null;?>


<form action="inserir.php" method="post">
    <p> Olá ! IP <?php echo $_SERVER['REMOTE_ADDR'];?> Data: <?php echo $data; ?></p>
    <label>Nome da tarefa</label><input type="text" name="tarefa" id="tarefa">
    <button type="submit" class="add-tarefa">Adicionar Tarefa</button>

</form>
    <table>
        <tr>
            <td id="nome-tarefa"><b>Nome da Tarefa</b></td>
            <td id="data-tarefa"><b>Data Iniciada</b></td>
            <td id="status-tarefa"><b>Status</b></td>
            <td id="data-tarefa"><b>Data final</b></td>
        </tr>

        <?php while($exibe = $con->fetch_array()){?>
        <tr>
        <div class="funcionalidades">
            <td><?php echo $exibe['tarefa_name']; ?>
            
                <a href="deletar.php?tarefa=<?php  echo $exibe['tarefa_name'];?>" class="deletar-tarefa">Limpar Tarefa</a>
                <a href="concluir-tarefa.php?tarefa_id=<?php echo $exibe['tarefa_id'];?>&tarefa_name=<?php echo $exibe['tarefa_name']?>">Finalizar Tarefa</a>
            </div>
            </td>
            <td id="data-tarefa">
            
               <?php  echo $exibe['tarefa_data']; ?>
            
           
                
            </td>

            


            <?php if($exibe['tarefa_status'] === 'pendente'){?>

            <td id="tarefa-pendente">
                <?php echo $exibe['tarefa_status'];?>
            </td>

            <?php } else if($exibe['tarefa_status'] === 'concluido'){?>
            <td class="tarefa-concluida">
                <?php echo $exibe['tarefa_status'];?>
            </td>

        
           

           
        
        <?php }?>

        <td id="data-tarefa">
           


           <?php echo $exibe['tarefa_data_final'];?>
             

         </td>
            
        </tr>

        <?php }?>
        <hr color="#666">



<p id="listagem"> Total de Tarefas[<?php $total = 0;
$n = 1;
$sql = "SELECT * FROM name_tarefa";
$sql = $conn->query($sql);
$total = $sql->num_rows; echo $total;?>] Concluidos[<?php 
$total = 0;
$n = 1;
$sql = "SELECT * FROM name_tarefa WHERE tarefa_status = 'concluido'";
$sql = $conn->query($sql);
$total_concluido = $sql->num_rows; echo $total_concluido;
?>] Pendente[<?php 
$total = 0;
$n = 1;
$sql = "SELECT * FROM name_tarefa WHERE tarefa_status = 'pendente'";
$sql = $conn->query($sql);
$total_pendente = $sql->num_rows; echo $total_pendente;
?>]</p>

    </table>





<hr color="#666">








</body>
</html>