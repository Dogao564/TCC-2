<h1>Listar Efetivo</h1>

<?php
/*
Número da Página
$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);

$pagina = (!empty ($pagina_atual)) ? $pagina_atual : 1;

//Quantidade de inttetns por pagina
$qnt_result_pag = 5;

//Calcular o inicio da visualizaçao
$inicio = ($pagina - 1) * $qnt_result_pag;

//($qnt_result_pag * $pagina) - $qnt_result_pag;
LIMIT $inicio, $qnt_result_pag
*/

?>


    <div class="container2"></div>
    
    <?php
    $res_efetivo = "SELECT id, nome, cpf, RG, MF, PostoGRAD FROM efetivo ";
    $result_efetivo = mysqli_query ($conn, $res_efetivo);
    
    
      echo "<table class = 'table table-bordered table-striped table-hover'>";
      echo "<tr class=''>";
      echo "<th>Posto/Grad</th>";
      echo  " <th>Pessoa</th>";
      echo "<th>CPF</th>";
      echo  "<th>MF</th>";
      echo  "<th>RG</th>";
      echo  "<th>Ações</th>";
      echo " </tr>";
    while($row_usuario = mysqli_fetch_assoc($result_efetivo)){
       
      echo "<tr>";
      echo "<td>". $row_usuario ['PostoGRAD']."</td>";
      echo  "<td>".$row_usuario ['nome']."</td>";
        $cpf = $row_usuario['cpf'];
      if (strlen($cpf) >= 11) {
        $cpf_formatado = '**********-' . substr($cpf, -2);
        echo "<td>" . $cpf_formatado . "</td>";
    } else {
        echo "<td>CPF inválido</td>";
    }
      $MF = $row_usuario['MF'];
      if (strlen($MF) >= 4) {
        
        $mf_formatado = '*****' . substr($MF, -2);
        
        echo "<td>" . $mf_formatado . "</td>";
    } else {
        echo "<td>MF inválido</td>";
    }
      
       $RG = $row_usuario['RG'];
      if (strlen($RG) >= 5) {
       
        $rg_formatado = '*****' . substr($RG, -2);
        
        echo "<td>" . $rg_formatado . "</td>";
    } else {
        echo "<td>RG inválido</td>";
    }
    echo  "<td><button onclick=\"location.href='?page=editarefe&id=".$row_usuario['id']."';\" class='btn btn-success'>Editar</button>
       <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=excluir-efe&id=".$row_usuario['id']."';}else{false;}\" class='btn btn-danger'>Excluir</button></td>";
      echo " </tr>" ;
    

    }

    ?>
<?php
/*
//somar a quanbtitade
$result_pag = "SELECT COUNT(id) AS num_result FROM efetivo";
$result_pag = mysqli_query($conn, $result_pag);
$row_pg = mysqli_fetch_assoc($result_pag);

//quantidade de paginas
$quantidade_pg = ceil ($row_pg['num_result'] / $qnt_result_pag);
$max_links = 2;



echo " <table class='table2'>";
echo        "<tr class=></tr>";
echo    "<td id='l1'><a href='inicial.php?pagina=1' id='prev-page'>Primeira</a></td>";


for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){

  if($pag_ant >= 1){
  echo    "<td id='l1'><a href='inicial.php?pagina=$pag_ant'>$pag_ant</a></td>";
  
  }

}
echo      "<td class='linha2'><id='1'>$pagina</a></td>";
for ($pag_depois = $pagina + 1; $pag_depois <= $pagina + $max_links; $pag_depois++){
  
  if ($pag_depois <= $quantidade_pg){
  echo    "<td id='l1'><a href='inicial.php?pagina=$pag_depois'>$pag_depois</a></td>";
}
}




echo      "<td><a href='inicial.php?pagina=$quantidade_pg' id='next-page'>Ultima</a></td>";
echo  "</table>";
     */

?>