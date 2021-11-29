<?php
 include "autentica.inc";
?>
<html>
  <head><meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    


    <link rel="stylesheet" href="pesquisa.css">
        <title>Formulário</title>
</head>
  <body>
 <header>
  <div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="#" class="navbar-brand">No Doubt</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Sobre nos</a></li>
                            <li><a href="#">Contatos</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <form action="Recebedados.php" method="POST" class="navbar-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                        <input type="hidden" name="operacao" value="buscar"></imput>
                                            <input type="search" name="username" placeholder="Buscar usuarios..." class="form-control">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                        <div>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="Cadastro.html">Se Cadastrar</a></li>
                                </ul>
                            </li>
                        </ul>
                      </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
 </header>

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
          $idpost = $post["codpost"];

          // botões nao aparecendo por causa da versão do bootstrap//

          ?><div id="content-post-b">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            
          <div class="dropdown show">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ...</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <form action="editapost.php" method="POST">
              <input type="hidden" name="postid" value="<?php echo $idpost?>"></input>
              <a class="dropdown-item">
                <input type="submit" value="Editar"></a>
              </form>
              <form action="editarpost.php" method="POST">
              <input type="hidden" name="operacao" value="Excluirpost"></p>
              <input type="hidden" name="postid" value="<?php echo $idpost?>"></input>
              <a class="dropdown-item">
                <input type="submit" value="Excluir"></a>
              </form>
            </div>
          </div>
          </script>
            

            <?php
          echo "<h1>".$post["userpost"]."<br></h1>";
          echo "<h2>".$post["titulopost"]."<br></h2>";
          echo "<h3>".$post["postcontent"]."<br></h3";
          echo "----------------------------------<br>";
          ?>
          
          <form action="editapost.php" method="POST" >
              <input type="hidden" name="postid" value="<?php echo $idpost?>"></input>
              <a class="dropdown-item">
                <input type="submit" value="Editar"></a>
              </form>
          <form action="Recebedados.php" method="POST">
              <input type="hidden" name="operacao" value="Excluirpost"></p>
              <input type="hidden" name="postid" value="<?php echo $idpost?>"></input>
                <input type="submit" value="Excluir"></a>
              </form>


          </div>
          <?php
          }

      }
      mysqli_close($mysqli);
?>
  </div>
    </body>
</html>