<?php
include('config.php');
  
$rp = $_POST["rp"];
$descricao = $_POST["descricao"];


echo $rp."<br>";
echo $descricao."<br>";



$sql = "INSERT INTO reserva (rp, descricao) VALUES ('".$rp."', '".$descricao."');";

$res = $conn->query($sql);

    if($res==true){
            print"<script>alert('Cadastrou com sucesso')</script>";
            print"<script>location.href='index.php?page=listar-armamento';</script>";
        }else{
            print"<script>alert('Não foi possível cadastrar')</script>";
            echo $conn->error;
            
        }
?>