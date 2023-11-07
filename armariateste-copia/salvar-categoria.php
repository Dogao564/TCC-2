<?php
include('config.php');
  
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$RG = $_POST["RG"];
$MF = $_POST["MF"];
$PostoGRAD = $_POST["PostoGRAD"];

echo $nome."<br>";
echo $cpf."<br>";
echo $RG."<br>";
echo $MF."<br>";
echo $PostoGRAD."<br>";



$sql = "INSERT INTO efetivo (nome, cpf, RG, MF, PostoGRAD) VALUES ('".$nome."', '".$cpf."', '".$RG."', '".$MF."', '".$PostoGRAD."');";

$res = $conn->query($sql);

    if($res==true){
            print"<script>alert('Cadastrou com sucesso')</script>";
            print"<script>location.href='index.php?page=listar-categoria';</script>";
        }else{
            print"<script>alert('Não foi possível cadastrar')</script>";
            echo $conn->error;
            
        }
?>