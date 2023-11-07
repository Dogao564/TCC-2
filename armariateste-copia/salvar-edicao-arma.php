<?php
include('config.php');
?>
  <?php
$rp = $_POST["rp"];
$descricao = $_POST["descricao"];


echo $rp."<br>";
echo $descricao."<br>";


 
$sql = "UPDATE reserva SET rp='{$rp}', descricao='{$descricao}' WHERE id = ".$_REQUEST["id"];

$res = $conn->query($sql);

    if($res==true){
            print"<script>alert('Editado com sucesso')</script>";
            print"<script>location.href='index.php?page=listar-armamento';</script>";
        }else{
            print"<script>alert('Não foi possível editar')</script>";
            echo $conn->error;
            
        }
?>