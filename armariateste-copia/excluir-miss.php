<h1>Editar Armamento</h1>
<?php
//include('config.php');
?>

<?php
    $sql2 = "DELETE FROM miservo WHERE fk_missao=".$_REQUEST["id"]; 
    $res = $conn->query($sql2);
    $sql3 = "DELETE FROM miserfe WHERE fk_missao=".$_REQUEST["id"]; 
    $res = $conn->query($sql3);
    $sql = "DELETE FROM missao WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);

    if($res==true){
            print"<script>alert('Excluido com sucesso')</script>";
            print"<script>location.href='index.php?page=listar-missao';</script>";
        }else{
            print"<script>alert('Não foi possível excluir')</script>";
            echo $conn->error;
            
        }
?>
?>
