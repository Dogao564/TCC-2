<h1>Listar Armamento</h1>

<?php
//Número da Página
//$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);

//$pagina = (!empty ($pagina_atual)) ? $pagina_atual : 1;

//Quantidade de inttetns por pagina
//$qnt_result_pag = 5;

//Calcular o inicio da visualizaçao
//$inicio = ($pagina - 1) * $qnt_result_pag;

//($qnt_result_pag * $pagina) - $qnt_result_pag;
?>


    <div class="container2"></div>
    
    <?php
    $res_reserva = "SELECT id, rp, descricao FROM reserva";
    $result_reserva = mysqli_query ($conn, $res_reserva);
    
      echo "<table class = 'table table-bordered table-striped table-hover'>";
      echo "<tr class=''>";
      echo "<th>RP Do Item</th>";
      echo  " <th>Descricao do Item</th>";
       echo  " <th>Ações</th>";
      echo " </tr>";
    while($row_usuario = mysqli_fetch_assoc($result_reserva)){
       
      echo "<tr>";
      echo "<td>". $row_usuario ['rp']."</td>";
      echo "<td>". $row_usuario ['descricao']."</td>";
 echo  "<td><button onclick=\"location.href='?page=editararma&id=".$row_usuario['id']."';\" class='btn btn-success'>Editar</button>
       <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=excluir-arma&id=".$row_usuario['id']."';}else{false;}\" class='btn btn-danger'>Excluir</button></td>";     
      echo " </tr>" ;
    }
     

    

    ?>