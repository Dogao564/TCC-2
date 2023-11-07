<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Armaria!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Armaria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">

          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Efetivo
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-categoria">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-categoria">Listar</a></li>
          </ul>
         
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Armamento
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-armamento">Cadastrar Armamento</a></li>
            <li><a class="dropdown-item" href="?page=listar-armamento">Listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Missão
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-missao">Cadastrar Missão</a></li>
            <li><a class="dropdown-item" href="?page=listar-missao">Listar</a></li>
          </ul>
        </li>
      </ul>
      </ul>
    </div>
  </div>
</nav>
<div class = "container">
  <div class = "row">
    <div class = "col mt-4">
      <?php
      include('config.php');
      error_reporting(E_ALL); ini_set('display_errors', 1);
        switch (@$_REQUEST ["page"]) {
          case "cadastrar-categoria":
            include ("cadastrar-categoria.php");
            break;
          case "listar-categoria":
            include ("listar-categoria.php");
            break;  
          case "salvar-categoria":
            include ("salvar-categoria.php");
            break;    
          case "cadastrar-armamento":
            include ("cadastrar-armamento.php");
            break;       
          case "salvar-armamento":
            include ("salvar-armamento.php");
            break;   
            case "listar-armamento":
              include ("listar-armamento.php");
              break;   
            case "cadastrar-missao":
              include ("cadastrar-missao.php");
              break;       
            case "salvar-missao":
              include ("salvar-missao.php");
              break;   
            case "listar-missao":
                include ("listar-missao.php");
                break;  
            case "editararma":
                  include ("editararma.php");
                  break;    
            case "salvar-edicao-arma":
                include ("salvar-edicao-arma.php");
                break;       
            case "excluir-arma":
                include ("excluir-arma.php");
                break;
            case "editarefe":
                  include ("editarefe.php");
                  break;    
            case "salvar-edicao-efe":
                include ("salvar-edicao-efe.php");
                break;       
            case "excluir-efe":
                include ("excluir-efe.php");
                break;
            case "editarmissao":
                  include ("editarmissao.php");
                  break;    
            case "salvar-edicao-miss":
                include ("salvar-edicao-miss.php");
                break;       
            case "excluir-miss":
                include ("excluir-miss.php");
                break;     
          default:
            print "<h1>Armaria</h1>";
             $res_reserva = "SELECT id, rp, descricao FROM reserva ";
    $result_reserva = mysqli_query ($conn, $res_reserva);
    
      echo "<table class = 'table table-bordered table-striped table-hover'>";
      echo "<tr class=''>";
      echo "<th>RP Do Item</th>";
      echo  " <th>Descricao do Item</th>";
      
      
      echo " </tr>";
    while($row_usuario = mysqli_fetch_assoc($result_reserva)){
      
      echo "<tr>";
      echo "<td>". $row_usuario ['rp']."</td>";
      echo  "<td>".$row_usuario ['descricao']."</td>";
   
      
    
      echo " </tr>" ;

    

    }
        }


      ?>
      <?php
    
   

    ?>
      
    </div>
  </div>
</div>


  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  </body>
</html>