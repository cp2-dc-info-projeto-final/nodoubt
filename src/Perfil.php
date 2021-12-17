<?php

 include "autentica.inc";
 $email = $_SESSION["emailusuario"];
 $img = $_SESSION["fotoperfil"];
 include "conecta_mysql.inc";
$sql = "SELECT * FROM cadastrousuarios WHERE emailusuario ='$email';";
$res = mysqli_query($mysqli,$sql);
$linhas = mysqli_num_rows($res);
for($i=0; $i < $linhas; $i++){
$usuario = mysqli_fetch_array($res);
$nome = $usuario["usernameusuario"];
}
?> 
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
<script src="https://kit.fontawesome.com/785c80f02e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/3/w3.css">

    <link rel="stylesheet" href="detalhes.css">
        <title><?php echo $nome;?></title>
</head>
  <body>
 <header>
  <div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="index.php" class="navbar-brand">No Doubt</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li><a href="sobrenos.php">Sobre Nós</a></li>
                            <li><a href="#contactus">Fale Conosco</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <form action="Recebedados.php" method="POST" class="navbar-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                        <input type="hidden" name="operacao" value="buscar"></imput>
                                            <input type="search" name="username" placeholder="Buscar usuarios..." class="form-control">
                                            <span class="input-group-addon"><button><span class="glyphicon glyphicon-search"></button></span></span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                        <div>
                        <ul class="nav navbar-nav navbar-right">
                          <?php
                          if(!isset($_SESSION["emailusuario"])){
                          ?>
                            <li>
                              <a href="Login.html"> <button><i class="fas fa-sign-in-alt"></i><button>
                            </li>
                            <?php
                          }
                          else{
                            $x = "perfis/";
                            $x .= $_SESSION["fotoperfil"];
                            $x .= ".jpeg"
                            ?>
                        <li><a href="#">
                        <img src="<?php echo $x ?> " style="width:20px;">                         
                         <?php echo $_SESSION["usernameusuario"];?>
                          </a></li>
                           <?php 
                          }  
                          ?>
                        </ul>
                      </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
 </header>

 <div id="content" style="width:30%;margin-left:30px;">
    <h4> 
      <div class="container">
        <?php echo"<p><img src='perfis/$img.jpeg' width='100' height='100'></p>" 
        ?>
      </div>  
      <?php
        echo "Nome de usuário: ".$usuario["usernameusuario"]."<br>";
        echo "Nome: ".$usuario["nomeusuario"]."<br>";
        echo "Data de nascimento: ".$usuario["idadeusuario"]."<br>";
        echo "Email: ".$usuario["emailusuario"]."<br>";
        echo "----------------------------------<br>";
        if($usuario["permissadm"] == 1){
        ?>
        <p><a href='IndexAdm.php'>Usuários</a></p>
      <?php
        }
      ?>
      <?php 
        echo"<p><a href='EditaDados.php?emailusuario=". $_SESSION["emailusuario"]."'>Editar Dados</a><br>";?> 
      <p><p><a href="Logout.php">Sair</a></p></p>
    </h4>
  </div>


    <?php $iduser = $usuario["codusuario"];

    $coduser = $usuario["usernameusuario"];

    $pt = "post";

    $ask = 1;
    ?>
</div>

<div class="container" >
  <div id="content-post-a"style="margin-left:70px;margin-right:70px;" align-items="top">
    <form action="Recebedados.php" method="POST">
      <input type="hidden" name="operacao" value="Postar">
      <input type="hidden" name="user" value="<?php echo $coduser?>"></input>
      <input type="hidden" name="iduser" value="<?php echo $iduser?>"></input>
      <i><h5>Título</h5></i>
      <input type="text" name="titulo" size="25" placeholder="Título"><p>
      <i><h5>Postagem</h5></i>
      <textarea type="text" name="post" placeholder="Qual sua dúvida?" cols="55" rows="3"></textarea><br><br>
      <input type="submit" class="submit" value="Postar!">
    </form>
  </div>
  <br>
      
  <?php
  $sql = "SELECT * FROM postagemusuarios WHERE userpost ='$coduser' ORDER BY codpost DESC;";
  $res = mysqli_query($mysqli, $sql);
  $linhas = mysqli_num_rows($res);
  if ($linhas == 0){
      ?>
      <div id="alerta">
        <?php
          echo "Você não fez nenhuma postagem :(";
        ?>
      </div>
      <?php
      }

    else{
      ?> 
      <div id="content-post-position"> 
        <?php
        for($i=0; $i < $linhas; $i++){
          $post = mysqli_fetch_array($res);
          $idpost = $post["codpost"];  
          $title = $post["titulopost"];
          ?>
            <div id='content-post-b' style="display:block;">
              <img src="<?php echo $x ?> " style="width:60px;">
              <?php
              echo $post["userpost"]."<br>";
              echo "<h2>".$post["titulopost"]."<br></h2>";
              echo "<h3>".$post["postcontent"]."<br></h3>";
              $mysql = "SELECT * FROM curtirusuarios WHERE userlike ='$nome' AND codpostlike ='$idpost' ;";
              $resu = mysqli_query($mysqli,$mysql);
              $linhass = mysqli_num_rows($resu);
              if($linhass == 0){
                $operacao = "curtir";
                }
              elseif($linhass >= 1){
                $operacao = "ncurtir";
              }
              ?>
              <div id="linha">
                <form action="Recebedados.php" method="POST">
                    <input type="hidden" name="operacao" value="<?php echo $operacao?>"></p>
                    <input type="hidden" name="postid" value="<?php echo $idpost?>"></input>
                    <input type="hidden" name="usercod" value="<?php echo $iduser?>"></input>
                    <input type="hidden" name="userrname" value="<?php echo $nome?>"></input>
                    <input type="hidden" name="titre" value="<?php echo $title?>"></input>          
                    <input type="hidden" name="laiki" value="<?php echo $ask?>"></input>          
                    <input type="hidden" name="post" value="<?php echo $pt?>"></input>  
                    <?php
                    if( $operacao == "curtir"){
                    ?>   
                      <button style="white-space: nowrap" type="submit" class="submit"><i class="far fa-heart" aria-hidden="true" title="Curtir"></i></button></a>
                      <?php
                    }
                    elseif( $operacao == "ncurtir"){
                    ?>
                      <button style="white-space: nowrap" type="submit" class="submit"><i class="fas fa-heart" aria-hidden="true" title="Descurtir"></i></button></a>
                      <?php
                    }            
                    ?> 
                  </form>
                    
                  <?php 
                  echo "<a href='postcoment.php?idpost=". $idpost."' for='content-post-b'>";?>
                  <button><i class="fas fa-comments" title="Comentar!">           
                  </i></a></button>
              

                    <form action="editapost.php" method="POST" style="margin:0px">
                      <input type="hidden" name="postid" value="<?php echo $idpost?>"></input>
                      <input type="hidden" name="operacao" value="editar">
                      <button type="submit" value="Editar"><i class="fas fa-pen" aria-hidden="true" title="editar postagem!"></i></button></a>
                    </form>
    

                  <divx style="white-space: nowrap;  hyphens: none;">
                    <form action="Recebedados.php" method="POST" style="margin:0px">
                      <input type="hidden" name="operacao" value="Excluirpost">
                      <input type="hidden" name="postid" value="<?php echo $idpost?>"></input>
                      <button type="submit" value="Excluir"><i class="fas fa-trash-alt" title="excluir postagem!"></i></button>
                    </form>
                  </divx>
                </div>
            </div>
          <?php
        }
        ?>
    </div>
    <?php
    }
    mysqli_close($mysqli);
    ?>
</div>

<div id="footer">
  <footer>
    <p class="w3-medium" style="color: white;">
         Desenvolvido por: <br>
         Vicky Wingler | Júlia Sena | Vitória Costa | Caio Felipe <br>
         Estudantes do <a href="https://www.cp2.g12.br/index.php" target="_blank"> Colégio Pedro II</a>
    </p>
    <p class="w3-medium" style="color: white;">
      <section id="contactus"> Contato: <a href="#" target="_blank">nodoubttt0@gmail.com</a>
      </section>
      </p>
  </footer>
</div>

    </body>
</html>