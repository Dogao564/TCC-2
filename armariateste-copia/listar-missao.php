<h1>Lista de Missões</h1>

    <?php
    $sql = "SELECT * FROM missao"; $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table class = 'table table-bordered table-striped table-hover dataTable' id='missaoTable'>";
        echo "<thead><tr><th>Missão</th><th>Localidade</th><th>Data de Início</th><th>Data Final</th><th>Efetivos</th><th>Itens da Reserva</th></tr></thead>";
        while ($row = $result->fetch_assoc()) {
            $missaoId = $row['id'];
            $localidade = $row['localidade'];
            $datainicio = $row['datainicio'];
            $datafinal = $row['datafinal'];

            
            $sqlEfetivos = "SELECT efetivo.PostoGRAD, efetivo.nome FROM efetivo 
                INNER JOIN miserfe ON efetivo.id = miserfe.fk_efetivo
                WHERE miserfe.fk_missao = $missaoId";
            $resultEfetivos = $conn->query($sqlEfetivos);

           
            $sqlReservas = "SELECT reserva.descricao FROM reserva 
                INNER JOIN miservo ON reserva.id = miservo.fk_reserva
                WHERE miservo.fk_missao = $missaoId";
            $resultReservas = $conn->query($sqlReservas);

            echo "<tr>";
            echo "<td>$missaoId</td>";
            echo "<td>$localidade</td>";
            echo "<td>".date('d/m/Y', strtotime($datainicio))."</td>";
            echo "<td>".date('d/m/Y', strtotime($datafinal))."</td>";
            echo "<td>";
            if ($resultEfetivos->num_rows > 0) {
                while ($rowEfetivo = $resultEfetivos->fetch_assoc()) {
                    $nomeEfetivo = $rowEfetivo['nome'];
                    $postoEfetivo = $rowEfetivo['PostoGRAD'];
                    echo "$postoEfetivo $nomeEfetivo <br>";
                    
                }
            } else {
                echo "Nenhum efetivo associado";
            }
            echo "</td>";
            echo "<td>";
            if ($resultReservas->num_rows > 0) {
                while ($rowReserva = $resultReservas->fetch_assoc()) {
                    $descricaoReserva = $rowReserva['descricao'];
                    echo "$descricaoReserva<br>";
                }
            } else {
                echo "Nenhuma item da reserva associado";
            }
             echo "</td>";
            echo  "<td><button onclick=\"location.href='?page=editarmissao&id=".$row['id']."';\" class='btn btn-success'>Editar</button>
       <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=excluir-miss&id=".$row['id']."';}else{false;}\" class='btn btn-danger'>Excluir</button></td>";
      echo " </tr>" ;
            echo "</tr>";
           
        }
        echo "</table>";
    } else {
        echo "<p>Nenhuma missão encontrada.</p>";
    }
    
    ?>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    $('#missaoTable').DataTable({
        "order": [],
        "paging": true,
        "info": true,
        "language": {
            "decimal": ',',
            "thousands": '.',
            "sSearch": "Pesquisar",
           "sEmptyTable": "Nenhum registro encontrado",
           "sZeroRecords": "Nenhum registro encontrado",
           "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
           "sLengthMenu": "Mostrando todos os resultados",
           "sInfo": "Mostrando de inicio até o fim de todos os registros",
           "sInfoFiltered": "(Filtrados de MAX registros)",
           "paginate": {
              "next": "Próximo",
              "previous": "Anterior",
              "first": "Primeiro",
              "last": "Último"
            },
         },
        "columnDefs": [
            { "targets": [0, 6], "visible": true },
            { "targets": '_all', "searchable": true } 
        ]
        
    });
});
</script>