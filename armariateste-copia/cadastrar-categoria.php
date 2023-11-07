<h1>Cadastrar Efetivo</h1>
<form action="salvar-categoria.php" method="POST">
    <div class="mb-3">
        <label>Posto/Graduação</label>
    
          <select name="PostoGRAD" class="form-control">
            <option value="SD">SD</option>
            <option value="CB">CB</option>
            <option value="SGT">SGT</option>
            <option value="SUB TEN">SUB TEN</option>
          </select>
    </div>
    
    <div class="mb-3">
        <label>Nome</label>
         <input type = "text" name ="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>RG</label>
         <input type = "text" name ="RG" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
         <input type = "text" name ="cpf" class="form-control">
    </div>
    <div class="mb-3">
        <label>MF</label>
         <input type = "text" name ="MF" class="form-control">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Enviar</buttton>
    </div>
</form>