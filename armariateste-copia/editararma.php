<h1>Editar Armamento</h1>
<?php
//include('config.php');
?>

<?php
    $sql = "SELECT * FROM reserva WHERE id=".$_REQUEST["id"];
    $result_reserva = mysqli_query ($conn, $sql);
    $row = $result_reserva->fetch_object();
?>
<form action="salvar-edicao-arma.php" method="POST">
    <input type = "hidden" name="id" value="<?php print $row->id;?>">
    
    <div class="mb-3">
        <label>RP do Item</label>
         <input type = "text" name ="rp" value = "<?php print $row->rp;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição do Item</label>
         <input type = "text" name ="descricao" value = "<?php print $row->descricao;?>" class="form-control">
    </div>
   
    <div class="mb-3">
        <button class="btn btn-primary">Editar</buttton>
    </div>
</form>