<?php
include('config.php');
?>
  <?php
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$RG = $_POST["RG"];
$MF = $_POST["MF"];
$PostoGRAD = $_POST["PostoGRAD"];



 
$sql = "UPDATE efetivo SET nome='{$nome}', cpf='{$cpf}', RG='{$RG}', MF='{$MF}', PostoGRAD='{$PostoGRAD}' WHERE id = ".$_REQUEST["id"];

$res = $conn->query($sql);

    if($res==true){
            print"<script>alert('Editado com sucesso')</script>";
            print"<script>location.href='index.php?page=listar-categoria';</script>";
        }else{
            print"<script>alert('Não foi possível editar')</script>";
            echo $conn->error;
            
        }
?>