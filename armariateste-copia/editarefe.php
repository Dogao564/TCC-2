<h1>Editar Efetivo</h1>
<?php
//include('config.php');
?>

<?php
    $sql = "SELECT * FROM efetivo WHERE id=".$_REQUEST["id"];
    $result_efetivo = mysqli_query ($conn, $sql);
    $row = $result_efetivo->fetch_object();
?>

<form action="salvar-edicao-efe.php" method="POST">
<input type = "hidden" name="id" value="<?php print $row->id;?>">
    <div class="mb-3">
        <label>Posto/Graduação</label>
    
          <select name="PostoGRAD" class="form-control">
            <option value = "<?php print $row->PostoGRAD;?>">SD</option>
            <option value="CB">CB</option>
            <option value="SGT">SGT</option>
            <option value="SUB TEN">SUB TEN</option>
            
          </select>
    </div>
    
    <div class="mb-3">
        <label>Nome</label>
         <input type = "text" value=<?php print $row->nome;?> name ="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>RG</label>
         <input type = "text" value=<?php print $row->RG;?> name ="RG" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
         <input type = "text" value=<?php print $row->cpf;?> name ="cpf" class="form-control">
    </div>
    <div class="mb-3">
        <label>MF</label>
         <input type = "text" value= <?php print $row->MF;?> name ="MF" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Editar</buttton>
    </div>
</form>