<?php
 include "autentica.inc";
 include "conecta_mysql.inc";
 $nomeuser = $_GET["usernameusuario"];
 $sql = "SELECT * FROM cadastrousuarios WHERE usernameusuario = '$nomeuser';";
 $res = mysqli_query($mysqli,$sql);
 $linhas = mysqli_num_rows($res);
 for($i=0; $i < $linhas; $i++){
 $usuario = mysqli_fetch_array($res);
 $per = $_SESSION["permiss"];
 }
 $nome = $_SESSION["usernameusuario"];
 $mysql = "SELECT * FROM cadastrousuarios WHERE usernameusuario = '$nome';";
 $result = mysqli_query($mysqli,$mysql);
 $linhaaas = mysqli_num_rows($result);
 for($i=0; $i < $linhaaas; $i++){
 $usur = mysqli_fetch_array($result);
 $iduser = $usur["codusuario"];
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


        <title><?php echo $nomeuser; ?></title>
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
                            <li><a href="sobrenos.php">Sobre nos</a></li>
                            <li><a href="#contactus">Fale conosco</a></li>
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
                        <li><a href="perfil.php">
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

<div id="content">
  <h4>
  <?php 
  $sql = "SELECT * FROM cadastrousuarios WHERE usernameusuario = '$nomeuser';";
  $res = mysqli_query($mysqli,$sql);
  $linhas = mysqli_num_rows($res);
  for($i=0; $i < $linhas; $i++){
    $usuario = mysqli_fetch_array($res);
  }
  $x = rand(1, 10);
  ?> 
  <div class="container" style="padding-left: 0;">
    <?php 
    echo "<p><img src='perfis/$x.jpeg' width='50' height='50'>";
    echo " ".$usuario["usernameusuario"]."</p>";
    ?> 
  </div>  
    <?php
  echo "<p>Nome: ".$usuario["nomeusuario"]." | "; 
  echo "Data de Nascimento: ".$usuario["idadeusuario"]." | ";
  echo "Email: ".$usuario["emailusuario"]."</p>";
    ?>
</div>

<div id="content-post-position"> 
<?php
  $sql = "SELECT * FROM postagemusuarios WHERE userpost ='$nomeuser';";
  $res = mysqli_query($mysqli, $sql);
  $linhas = mysqli_num_rows($res);
  if ($linhas == 0){
    ?> 
    <div class="container" >
    <?php
      echo"<h1>  Este usuario não fez nenhuma postagem</h1>";
    ?>
    </div>
    <?php
  }
  else{
    for($i=0; $i < $linhas; $i++){
      $post = mysqli_fetch_array($res);
      ?>
      <div id='content-post-b' style="display:block; width:auto; margin:30px;">
        <?php
        echo "<h1>".$post["userpost"]."<br></h1>";
        echo "<h2>".$post["titulopost"]."<br></h2>";
        echo "<h3>".$post["postcontent"]."<br></h3";
        $idpost = $post["codpost"];
        $usario = $post["userpost"];
        $title = $post["titulopost"];
        $pt = "post";
        $ask = 1;
        $mysql = "SELECT * FROM curtirusuarios WHERE userlike ='$nome' AND codpostlike ='$idpost' ;";
        $resu = mysqli_query($mysqli,$mysql);
        $linhass = mysqli_num_rows($resu);
        if($linhass == 0){
          $operacao = "curtir";
        }
        elseif($linhass >= 1){
          $operacao = "ncurtir";
        }
        $alter = 1;
        ?>
        <form action="Recebedados.php" method="POST">
          <input type="hidden" name="operacao" value="<?php echo $operacao?>"></p>
          <input type="hidden" name="postid" value="<?php echo $idpost?>"></input>
          <input type="hidden" name="usercod" value="<?php echo $iduser?>"></input>
          <input type="hidden" name="userrname" value="<?php echo $nome?>"></input>
          <input type="hidden" name="titre" value="<?php echo $title?>"></input>          
          <input type="hidden" name="laiki" value="<?php echo $ask?>"></input>          
          <input type="hidden" name="alter" value="<?php echo $alter?>"></input>          
          <input type="hidden" name="nomi" value="<?php echo $usario?>"></input>          
          <input type="hidden" name="post" value="<?php echo $pt?>"></input>      
          <?php
          if( $operacao == "curtir"){
            ?>    
            <button type="submit" class="submit"><i class="far fa-heart" aria-hidden="true" title="Curtir"></i></button></a>
            <?php
            }
          elseif( $operacao == "ncurtir"){
            ?>
            <button type="submit" class="submit"><i class="fas fa-heart" aria-hidden="true" title="Descurtir"></i></button></a>
            <?php
          }            
          ?> 
        </form>
        <?php
        $idpost = $post["codpost"];
        echo "<a href='postcoment.php?idpost=". $idpost."'>";
        echo"<button><i class='fas fa-comments' title='Comentar!'></i></button></a><br>";
        if($_SESSION["usernameusuario"] == $nomeuser){
        ?>
          <form action="editapost.php" method="POST" >
            <input type="hidden" name="postid" value="<?php echo $idpost?>"></input>
            <input type="hidden" name="operacao" value="editar"></p>
            <button type="submit" value="Editar"><i class="fas fa-pen" aria-hidden="true" title="editar postagem!"></i></button></a>
          </form>
          <?php
        }
        if ($_SESSION["permiss"] == 1 or $_SESSION["usernameusuario"] == $nomeuser){
        ?>
          <form action="Recebedados.php" method="POST">
            <input type="hidden" name="operacao" value="Excluirpost"></p>
            <input type="hidden" name="postid" value="<?php echo $idpost?>"></input>
            <button type="submit" value="Excluir"><i class="fas fa-trash-alt" title="excluir postagem!"></i></button>
          </form>
          <?php
        }
        ?>
      </div>
      <?php
    }  
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