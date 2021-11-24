<?php
 include "autentica.inc";
?>
<html>
  <head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="pesquisas.css">
        <title>Formulário</title>
</head>
  <body>
 

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"  class="card-content-area" class="card-content">
     <img src="imagem\nodoubt.png" alt="No Doubt" style="width:40px;">
   </a>
  
  <ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="perfil.php"> Meu perfil</a>
  </li>
</ul>
<form action="Recebedados.php" method="POST" class="form-inline">
<input type="hidden" name="operacao" value="buscar"></imput>
<input class="form-control mr-sm-2" type="search" placeholder="buscar usuarios..." name="username" aria-label="Pesquisar">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="buscar">Pesquisar</button>
</forms>

</nav>

  <div id="content">

      <h4><?php 
            $email = $_SESSION["emailusuario"];
            $img = $_SESSION["fotoperfil"];
            include "conecta_mysql.inc";
      $sql = "SELECT * FROM cadastrousuarios WHERE emailusuario ='$email';";
      $res = mysqli_query($mysqli,$sql);
      $linhas = mysqli_num_rows($res);
      for($i=0; $i < $linhas; $i++){
      $usuario = mysqli_fetch_array($res);
      ?> <div class="container">
       <?php echo"<p><img src='perfis/$img.jpeg' width='100' height='100'></p>" ?>
      </a></p></div>  <?php
      echo "Nome de usuario: ".$usuario["usernameusuario"]."<br>";
      echo "Senha: ".$usuario["senhausuario"]."<br>";
      echo "Nome: ".$usuario["nomeusuario"]."<br>";
      echo "Data de nascimento: ".$usuario["idadeusuario"]."<br>";
      echo "Email: ".$usuario["emailusuario"]."<br>";
      echo "----------------------------------<br>";
      }
     
      if($usuario["permissadm"] == 1){
        ?>
      <p><a href='IndexAdm.php'>Usuarios</a></p>
        <?php
    }
      ?>
  
    <?php echo"<p><a href='EditaDados.php?emailusuario=". $_SESSION["emailusuario"]."'>EDITAR DADOS</a><br>";?> 
    <p><p><a href="Logout.php">SAIR</a></p></p>
  </div></h3></div>


    <?php $iduser = $usuario["codusuario"];
    $iduser .= $usuario["idadeusuario"];
    $coduser = $usuario["usernameusuario"];

    ?>


      <div class="container">

      <div id="content-post-a">
    <form action="Recebedados.php" method="POST">
        <input type="hidden" name="operacao" value="Postar">
      <input type="hidden" name="user" value="<?php echo $coduser?>"></input>
      <input type="hidden" name="iduser" value="<?php echo $iduser?>"></input>
      <input type="text" name="titulo" size="25" placeholder="titulo"><p>  
      <br><textarea type="text" name="post" placeholder="Qual sua duvida?" cols="55" rows="3"></textarea><br>
        <input type="submit" class="submit" value="Postar!">
    </form>
  </div>
  
      <?php

      $sql = "SELECT * FROM postagemusuarios WHERE userpost ='$coduser';";
      $res = mysqli_query($mysqli, $sql);
      $linhas = mysqli_num_rows($res);

      if ($linhas == 0){

           echo"<h1>Voce não fez nenhuma postagem</h1>";

      }

      else{
        ?> <div id="content-post-position"> <?php
        for($i=0; $i < $linhas; $i++){
          $post = mysqli_fetch_array($res);
          ?><div id="content-post-b">
            
            <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ...
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="Recebedados.php" value="Editar"></a>
    <a class="dropdown-item" href="Recebedados.php" value="excluir"></a>
  </div>
</div>

            
            <?php
          echo "<h1>".$post["userpost"]."<br></h1>";
          echo "<h2>".$post["titulopost"]."<br></h2>";
          echo "<h3>".$post["postcontent"]."<br></h3";
          echo "----------------------------------<br>";
          ?></div><?php
          }

      }
      mysqli_close($mysqli);
?>
  </div>
    </body>
</html>