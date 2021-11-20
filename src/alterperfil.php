<?php
 include "autentica.inc";
 include "conecta_mysql.inc";
 $nomeuser = $_GET["usernameusuario"];
 $sql = "SELECT * FROM cadastrousuarios WHERE usernameusuario = '$nomeuser';";
 $res = mysqli_query($mysqli,$sql);
 $linhas = mysqli_num_rows($res);
 for($i=0; $i < $linhas; $i++){
 $usuario = mysqli_fetch_array($res);
 }
?>
<html>
  <head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="pesquisa.css">
        <title>Formulário</title>
</head>
  <body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">
     <img src="imagem\nodoubt.png" alt="No Doubt" style="width:40px;">
   </a>
  
   <ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="perfil.php"> Meu perfil</a>
  </li>
</ul>
<form action="Recebedados.php" method="POST" class="form-inline">
<input type="hidden" name="operacao" value="buscar">
<input class="form-control mr-sm-2" type="search" placeholder="buscar usuarios..." name="username" aria-label="Pesquisar">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="buscar">Pesquisar</button>
</forms>


</nav>

  <div id="content">

      <h4><?php 
 $nomeuser = $_GET["usernameusuario"];

 $sql = "SELECT * FROM cadastrousuarios WHERE usernameusuario = '$nomeuser';";
 $res = mysqli_query($mysqli,$sql);
 $linhas = mysqli_num_rows($res);
 for($i=0; $i < $linhas; $i++){
 $usuario = mysqli_fetch_array($res);
 }
      ?> <div class="container">
          <?php       echo " ".$usuario["usernameusuario"]."<br>";
          ?>
        <p><img src="imagem/Nouser.png" width="100" height="100">
      </a></p></div>  <?php

      echo "Nome: ".$usuario["nomeusuario"]."<br>";
      echo "Idade: ".$usuario["idadeusuario"]."<br>";
      echo "Email: ".$usuario["emailusuario"]."<br>";
      echo "----------------------------------<br>";
            
        

      ?>
  </div></h3>

  <?php



$sql = "SELECT * FROM postagemusuarios WHERE userpost ='$nomeuser';";
$res = mysqli_query($mysqli, $sql);
$linhas = mysqli_num_rows($res);

if ($linhas == 0){

     echo"<h1>Eeste usuario não fez nenhuma postagem</h1>";

}

else{

  for($i=0; $i < $linhas; $i++){
    $post = mysqli_fetch_array($res);
    echo "<h1>".$post["userpost"]."<br></h1>";
    echo "<h2>".$post["titulopost"]."<br></h2>";
    echo "<h3>".$post["postcontent"]."<br></h3";
    echo "----------------------------------<br>";
    }

}
mysqli_close($mysqli);
?>

    </body>
</html>