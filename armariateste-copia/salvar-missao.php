<?php
include("config.php");

$localidade = $_POST['localidade'];
$datainicio = $_POST['datainicio'];
$datafinal = $_POST['datafinal'];
$efetivos = $_POST['efetivos'];
$armamentos = $_POST['armamentos'];


$sql = "INSERT INTO missao (localidade, datainicio, datafinal) VALUES ('$localidade', '$datainicio', '$datafinal')";


if ($conn->query($sql) === TRUE) {
    $missaoId = $conn->insert_id; 

  
    foreach ($efetivos as $efetivoId) {
        $sql = "INSERT INTO miserfe (fk_missao, fk_efetivo) VALUES ($missaoId, $efetivoId)";
        $conn->query($sql);
    }

    // 
    foreach ($armamentos as $armamentoId) {
        $sql = "INSERT INTO miservo (fk_missao, fk_reserva) VALUES ($missaoId, $armamentoId)";
        $conn->query($sql);
    }

    echo "<script>alert('Missão cadastrada com sucesso')</script>";
    echo"<script>location.href='index.php?page=listar-missao';</script>";
} else {
    echo "<script>alert('Não foi possível cadastrar a missão')</script>";
}


$conn->close();
?>