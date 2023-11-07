<?php
    session_start();
    include ('config.php');

    if (empty($_POST) or (empty($_POST["nome"]) or (empty($_POST["senha"])))) {
        print "<script>alert('Digite Usuario ou Senha')</script>";
        print "<script>location.href='index.php';</script>";
    }

    

    $nome = $_POST["nome"];
    $senha = md5($_POST["senha"]);

    $sql = " SELECT * FROM cadastro WHERE nome = '{$nome}' AND senha = '{$senha}'";

    $res = $conn->query($sql) or die ($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if($qtd > 0){
    $_SESSION["nome"] = $nome;
          
    print "<script>location.href='../armariateste-copia/index.php'</script>";
    }else{
    print "<script>alert('Usuario ou Senha incorreto')</script>";
    print "<script>location.href='index.php'</script>";

    }