<?php
    $id       = $_POST['txtId'];
    $nome     = $_POST['txtNome'];
    $estudio  = $_POST['txtEstudio'];
    $genero   = $_POST['txtGenero'];
    
    var_dump($id);
    var_dump($nome);
    var_dump($estudio);
    var_dump($genero);
     
    $con = mysqli_connect("localhost","bob","bob","filme");
    
    if($id == "0"){
     
        $insert = "insert into filmes(nome, estudio, genero ) values(?,?,?);";
        $stmt = mysqli_prepare($con, $insert);
        mysqli_stmt_bind_param($stmt, "sss", $nome, $estudio, $genero);
        mysqli_stmt_execute($stmt);
    }else{
  
        $update = "update filmes set nome=?, estudio=?, genero=? where codigo=?";
        $stmt = mysqli_prepare($con, $update);
        mysqli_stmt_bind_param($stmt, "ssss", $nome, $estudio,$genero, $id);
        mysqli_stmt_execute($stmt);
    }
    header('Location: '. 'index.php');

?>
