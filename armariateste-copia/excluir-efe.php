<h1>Editar Armamento</h1>
<?php
//include('config.php');
?>

<?php
    $sql = "DELETE FROM missão WHERE id=".$_REQUEST["id"];
    $sql = "DELETE FROM efetivo WHERE id=".$_REQUEST["id"]; 
    $res = $conn->query($sql);

    if($res==true){
            print"<script>alert('Excluido com sucesso')</script>";
            print"<script>location.href='index.php?page=listar-categoria';</script>";
        }else{
            print"<script>alert('Não foi possível excluir')</script>";
            echo $conn->error;
            
        }
?>
?>
