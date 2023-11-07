<?php
include ("config.php");

if (empty($_POST) or (empty($_POST["nome"]) or (empty($_POST["senha"])))) {
        
    print "<script>location.href='cadastro.php';</script>";
}

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $senha = md5($_POST["senha"]);
        
        $sql = "INSERT INTO cadastro (nome, senha) VALUES ( '{$nome}', '{$senha}')";

        $res = $conn->query($sql);

        if ($res === TRUE) {
            print "<script>alert('!)'</script>";
            print "<script>location.href = '../armariateste-copia/index.php';</script>";
        } else {
            echo "Erro ao inserir dados: " . $conn->error;
        }
            break;
    case 'editar':
            # code...
            break;

    case 'excluir':
                # code...
                break;        
}