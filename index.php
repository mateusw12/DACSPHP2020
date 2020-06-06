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

  <title>Cadastro de Filmes</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Confira seu Filme</a>
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
            <a class="nav-link" href="#">Servicos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container" >

    <?php
       
        include 'dbconnect.php';
        $sql = "select * from filmes";
        $result = mysqli_query($con,$sql);
    ?>
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4" style="background-color:#C6E2FF">
      <p class="lead">
         
          <h3>Filme Cadastrados</h3>
          <table class="table">
             <thead>
               <tr>
                 <th>Código</th>
                 <th>Nome</th>
                 <th>Estudio</th>
                  <th>Genero</th>
                 <th>Ações</th>
               </tr>
             </thead>
             <tbody>
               <?php
               while($row = $result->fetch_row()){
               ?>
               <tr>
                 <td><?=$row[0]?></td>
                 <td><?=$row[1]?></td>
                 <td><?=$row[2]?></td>
                 <td><?=$row[3]?></td>
                 <td><a href="formfilme.php?id=<?=$row[0]?>" class="btn btn-primary"> Alterar </a>
                     <a href="delete.php?id=<?=$row[0]?>" class="btn btn-warning"> Remover </a>
                 </td>
               </tr>
               <?php
               }
               ?>
             </tbody>
          </table>
      </p>
       <a href="formfilme.php" class="btn btn-primary btn-lg" >Inserir novos filmes</a>
    </header>


  </div>
  <!-- /.container -->

  <!-- Footer -->
  <div class="fixed-bottom" class="w-25 p-3" style="height: 70px">
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>
</div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>