<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 <link rel="sortcut icon" href="https://image.flaticon.com/icons/png/512/1950/1950224.png" type="image/x-icon" />;
  
<style type="text/css">
body{
  
  background: url(https://png.pngtree.com/thumb_back/fw800/background/20190221/ourmid/pngtree-film-festival-berlin-film-festival-grammy-golden-plum-image_23357.jpg) no-repeat;
  background-size: 100%;
  border: solid 2px;
  text-shadow: white 0px 0px 2px;
  font-size: 16px;
  
}
</style>

  <title>Cadastrar Filme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
    <div class="container">
      <a class="navbar-brand" href="#">Lista de Filme</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
      $id=0;
      $nome="";
      $genero="";
      $estudio="";
      
      $con = mysqli_connect("localhost","bob","bob","filme");
      
      if(isset($_GET['id'])){
          
          $select = "select * from filmes where codigo = ?";
          $stmt = mysqli_prepare($con, $select);
          mysqli_stmt_bind_param($stmt, "i", $_GET['id']);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_bind_result($stmt, $result);
          $result = mysqli_stmt_get_result($stmt);
          $row = $result->fetch_assoc();
          $id = $row['codigo'];
          $nome = $row['nome'];
          $genero = $row['genero'];
          $estudio = $row['estudio'];
          
     
      }
      
  ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4" style="background-color:#C6E2FF">
      <p class="lead">
          <h3>Filme</h3>
          <form method="POST" action="savefilme.php">
            
            <input type="hidden" name="txtId" value="<?=$id?>">
            
            <div class="form-group">
                <label for="txtNome">Nome</label>
                <input type="text" class="form-control" id="txtNome" name="txtNome" value="<?=$nome?>">
            </div>
            
            <div class="form-group">
                <label for="txtGenero">Genero</label>
                <input type="text" class="form-control" id="txtGenero" 
                  name="txtGenero" value="<?=$genero?>">
            </div>
            
            <div class="form-group">
                <label for="txtEstudio">Estudio</label>
                <input type="text" class="form-control" id="txtEstudio" 
                  name="txtEstudio" value="<?=$estudio?>">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
      </p>
    </header>


  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
