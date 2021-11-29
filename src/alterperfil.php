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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
<link rel="stylesheet" href="pesquisar.css">
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
                        <a href="index.html" class="navbar-brand">No Doubt</a>
                    </div>

                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li><a href="Perfil.php">Meu perfil</a></li>
                            <li><a href="#">Sobre nós</a></li>
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
      
 $nomeuser = $_GET["usernameusuario"];

 $sql = "SELECT * FROM cadastrousuarios WHERE usernameusuario = '$nomeuser';";
 $res = mysqli_query($mysqli,$sql);
 $linhas = mysqli_num_rows($res);
 for($i=0; $i < $linhas; $i++){
 $usuario = mysqli_fetch_array($res);
 }
 $x = rand(1, 10);
      ?> <div class="container">
          <?php echo "<p><img src='perfis/$x.jpeg' width='100' height='100'>";
           echo " ".$usuario["usernameusuario"]."<br>";?> 
          
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

    ?> 
        <div class="container" >
    <div id="content-post-position"> <?php

     echo"<h1>  Este usuario não fez nenhuma postagem</h1>";
    ?></div>
    </div> <?php
}

else{

  for($i=0; $i < $linhas; $i++){
    $post = mysqli_fetch_array($res);

    ?><div id="content-post-b"><?php



    echo "<h1>".$post["userpost"]."<br></h1>";
    echo "<h2>".$post["titulopost"]."<br></h2>";
    echo "<h3>".$post["postcontent"]."<br></h3";
    echo "----------------------------------<br>";

    $idpost = $post["codpost"];

    if($Globalpermiss == 1){
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
        <?php
    }

    }

}
mysqli_close($mysqli);
?>

    </body>
</html>