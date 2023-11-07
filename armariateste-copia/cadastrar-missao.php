<h1>Cadastrar Missao</h1>
<form action="salvar-missao.php" method="POST">

<label>Escolha os integrantes da missão: </label>
    <select class="form-control" name="efetivos[]" multiple>
                <?php
                            $sql = "select * from efetivo;";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($assoc = mysqli_fetch_assoc($result)) {
                                    echo '<option value="'.$assoc['id'].'">'.$assoc['nome'].'</option>';
                                }
                            } else {
                                echo "Erro ao executar a consulta: " . mysqli_error($connect);
                            }
                ?>
                </select> 
<br>
<label>Escolha os itens da missão: </label>
    <select class="form-control" name="armamentos[]" multiple >
                <?php
                            $sql = "select * from reserva;";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($assoc = mysqli_fetch_assoc($result)) {
                                    echo '<option value="'.$assoc['id'].'">'.$assoc['descricao'].'</option>';
                                }
                            } else {
                                echo "Erro ao executar a consulta: " . mysqli_error($connect);
                            }
                ?>
                </select> 

    <div class="mb-3">
        <label>Localidade</label>
        <input type = "text" name ="localidade" class="form-control" >
    </div>
<br>
    <div class="mb-3">
        <label>Data Inicio</label>
         <input type = "date" name ="datainicio" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data Final</label>
         <input type = "date" name ="datafinal" class="form-control">
    </div>
   
    <div class="mb-3">
        <button class="btn btn-primary" >Enviar</buttton>
    </div>
</form>