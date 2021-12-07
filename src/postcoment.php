<?php
include "autentica.inc";
    include "conecta_mysql.inc";
    $idpost = $_GET["idpost"];
    $sql = "SELECT * FROM postagemusuarios WHERE codpost = '$idpost';";
    $res = mysqli_query($mysqli,$sql);
    $linhas = mysqli_num_rows($res);
    for($i=0; $i < $linhas; $i++){
    $post = mysqli_fetch_array($res);
    $user = $post["userpost"];
    $conteudo = $post["postcontent"];
    }
    $nomelogado = $_SESSION["usernameusuario"];
    $sql = "SELECT * FROM cadastrousuarios WHERE usernameusuario = '$nomelogado';";
    $res = mysqli_query($mysqli,$sql);
    $linhas = mysqli_num_rows($res);
    for($i=0; $i < $linhas; $i++){
    $usuario = mysqli_fetch_array($res);
    $codigin = $usuario["codusuario"];

}
?>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    


    <link rel="stylesheet" href="detalhes.css">

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
                            <li><a href="#contactus">Contatos</a></li>
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
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="Cadastro.html">Se Cadastrar</a></li>
                                </ul>
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

<h1>   
    <div class="container">

                    <div class="card">
                     <div class="card-header">
                    </div>
                    <div class="card-content">
                    <div class="card-content-area">

    <?php
    
    echo $post["titulopost"];
 
    ?>
</h1>
<h6>
    <?php echo "<a href='alterperfil.php?usernameusuario=". $user."'>-$user </a>";
?>
</h6>
<h3>
    <?php echo $conteudo;
?>
</h3>
</div>

<div class="container">
<?php

        $sql = "SELECT * FROM comentusuarios WHERE codpostcoment = $idpost;";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);

    if($linhas == 0){
        echo "Não há nenhuma resposta ainda...";
    }
    else{
        for($i=0; $i < $linhas; $i++){
            $comentario = mysqli_fetch_array($res);
            $nome = $comentario["usercoment"];
            $id = $comentario["idcoment"];
            $iddois = $comentario["codpostcoment"]


        ?><h2><?php
        echo "Re:". $post["titulopost"];
        ?></h2><h6><?php
        echo "<a href='alterperfil.php?usernameusuario=". $nome."'>-$nome</a>";
        ?></h6><h4><?php
        echo " ". $comentario["comentario"]."<br>";
        ?></h4>
        
        <form action="editapost.php" method="POST" >
        <input type="hidden" name="postid" value="<?php echo $id?>">
        <input type="hidden" name="idcomen" value="<?php echo $iddois?>">              
              <input type="hidden" name="operacao" value="editarcoment"></p>
                <input type="submit" value="Editar"></a>
              </form>
          <form action="Recebedados.php" method="POST">
              <input type="hidden" name="operacao" value="excluircoment"></p>
              <input type="hidden" name="idcomen" value="<?php echo $iddois?>">              
              <input type="hidden" name="postid" value="<?php echo $id?>"></input>
                <input type="submit" value="Excluir"></a>
              </form>
        
        <?php

         }
    }
?>
</div>
<br>
<div>
    <form action="Recebedados.php" method="POST">
        <input type="hidden" name="operacao" value="comentar">
        <input type="hidden" name="idusercomentou" value="<?php echo $codigin?>">
        <input type="hidden" name="idpostcomentou" value="<?php echo $idpost?>">
        <input type="hidden" name="usercomentou" value="<?php echo $nomelogado?> ">
        <p><input type="text" size="23" placeholder="Comente aqui..." name="coment">
</form>
</div>
</body>
</html>