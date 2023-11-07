<?php
include('config.php');
?>
  <?php
$localidade = $_POST["localidade"];
$datainicio = $_POST["datainicio"];
$datafinal = $_POST["datafinal"];
$efetivos = $_POST["efetivos"];
$armamentos = $_POST["armamentos"];
$id = $_REQUEST["id"];



$sql = "UPDATE missao SET localidade='{$localidade}', datainicio='{$datainicio}', datafinal='{$datafinal}' WHERE id = ".$id;

$sql2 = "DELETE FROM miservo WHERE fk_missao=".$id;
$conn->query($sql2);
$sql3 = "DELETE FROM miserfe WHERE fk_missao=".$id;
$conn->query($sql3);


if ($conn->query($sql) === TRUE) {
foreach ($efetivos as $efetivoId) {
    $sql4 = "INSERT INTO miserfe (fk_missao, fk_efetivo) VALUES ($id, $efetivoId)";
    $conn->query($sql4);
}
    
foreach ($armamentos as $armamentoId) {
    $sql5 = "INSERT INTO miservo (fk_missao, fk_reserva) VALUES ($id, $armamentoId)";
    $conn->query($sql5);
}
$res = $conn->query($sql);

    if($res==true){
            print"<script>alert('Editado com sucesso')</script>";
            print"<script>location.href='index.php?page=listar-missao';</script>";
        }else{
            print"<script>alert('Não foi possível editar')</script>";
            echo $conn->error;
            
        }
    }
?>