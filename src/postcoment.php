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
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    <script src="https://kit.fontawesome.com/785c80f02e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/3/w3.css">
    <link rel="stylesheet" href="detalhes.css">
    <title>Comentário</title>

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
                            <li><a href="sobrenos.php">Sobre nós</a></li>
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
                        <li>
                            <a href="perfil.php">
                            <img src="<?php echo $x ?> " style="width:20px;">                         
                            <?php echo $_SESSION["usernameusuario"];?>
                            </a>
                        </li>
                        <?php 
                          }  
                        ?>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="content">
   <h1>
        <?php
            echo $post["titulopost"];
    
        ?>
    </h1>
    <h4>
        <?php echo "<a href='alterperfil.php?usernameusuario=". $user."'> - $user -  </a>";
        ?>
    </h4>
</div>
<div id="content">
    <h1>
        <?php
            echo $conteudo;
        ?>
    </h1>
</div>


<?php
    $sql = "SELECT * FROM comentusuarios WHERE codpostcoment = $idpost;";
    $res = mysqli_query($mysqli,$sql);
    $linhas = mysqli_num_rows($res);

    if($linhas == 0){
        ?>
        <div id="alerta">
        <?php
        echo "Ainda não há respostas. Seja o primeiro a comentar! :)";
        ?>
        </div>
        <?php 
    }
    else{
        for($i=0; $i < $linhas; $i++){
            $comentario = mysqli_fetch_array($res);
            $nome = $comentario["usercoment"];
            $id = $comentario["idcoment"];
            $iddois = $comentario["codpostcoment"]


        ?>
        
        
        <div id="exibedados">
            <h2>
                <?php
                    //echo "Re:". $post["titulopost"];
                ?>
            </h2>
            <h6>
                <?php
                    //echo "<a href='alterperfil.php?usernameusuario=". $nome."'>-$nome</a>";
                ?>
            </h6>
            <h4>
                <?php
                    echo " ". $comentario["comentario"];
                    $codugo = $idpost;
                    $idcoments = $comentario["idcoment"];
                    $h = $comentario["idusercoment"];
                    $title = "Re:";
                    $jota = $comentario["usercoment"];
                    $title .= $post["titulopost"];
                    $mysql = "SELECT * FROM curtirusuarios WHERE userlike ='$nomelogado' AND codpostlike ='$idcoments' ;";
                    $resu = mysqli_query($mysqli,$mysql);
                    $linhass = mysqli_num_rows($resu);
                    if($linhass == 0){
                        $operacao = "curtir";
                    }
                    elseif($linhass >= 1){
                        $operacao = "ncurtir";
                    }
                    $ask = 1;
                    $pt = "coment";
                ?>
            </h4>
            <div style="margin-left: 50px;">
                <form action="Recebedados.php" method="POST">
                    <input type="hidden" name="operacao" value="<?php echo $operacao?>"></p>
                    <input type="hidden" name="postid" value="<?php echo $idcoments?>"></input>
                    <input type="hidden" name="usercod" value="<?php echo $codigin?>"></input>
                    <input type="hidden" name="userrname" value="<?php echo $nomelogado?>"></input>
                    <input type="hidden" name="titre" value="<?php echo $title?>"></input>          
                    <input type="hidden" name="cudugo" value="<?php echo $codugo?>"></input>          
                    <input type="hidden" name="laiki" value="<?php echo $ask?>"></input>          
                    <input type="hidden" name="post" value="<?php echo $pt?>"></input>   
                    <div style="white-space: nowrap;  hyphens: none;">
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
                    </div>
                </form>
                    <?php 

                    if($h == $_SESSION["coder"]){
                        ?>
                <form action="editapost.php" method="POST" >
                    <input type="hidden" name="postid" value="<?php echo $id?>">
                    <input type="hidden" name="idcomen" value="<?php echo $iddois?>">              
                    <input type="hidden" name="operacao" value="editarcoment"></p>
                    <button type="submit" value="Editar"><i class="fas fa-pen" aria-hidden="true" title="editar postagem!"></i></button></a>
                </form>
                <?php
                }        
                if ($h == $_SESSION["coder"] or $_SESSION["permiss"] == 1 or $user == $_SESSION["usernameusuario"]){
                ?>
                <form action="Recebedados.php" onSubmit="if(!confirm('Deseja mesmo excluir este comentario?')){return false;}" method="POST">
                    <input type="hidden" name="operacao" value="excluircoment"></p>
                    <input type="hidden" name="idcomen" value="<?php echo $iddois?>">              
                    <input type="hidden" name="postid" value="<?php echo $id?>"></input>
                    <button type="submit" value="Excluir"><i class="fas fa-trash-alt" title="excluir postagem!"></i></button>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
        <?php

        }
    }
        ?>

<div>
    <form action="Recebedados.php" method="POST">
        <input type="hidden" name="operacao" value="comentar">
        <input type="hidden" name="idusercomentou" value="<?php echo $codigin?>">
        <input type="hidden" name="idpostcomentou" value="<?php echo $idpost?>">
        <input type="hidden" name="usercomentou" value="<?php echo $nomelogado?> ">
        <textarea type="text" name="coment" placeholder="Comente aqui!" cols="55" rows="3" style="margin:15px; width: 682px; height: 68px;"></textarea>
        <button type="submit" value="Enviar"><i class="fas fa-sign-in-alt" title="enviar comentário!"></i></button>
    </form>


<br>  <br>  <br>  <br>  <br>  <br>   <br>  <br>  <br>  <br> <br> 
  
<footer class="w3-container w3-padding-64 w3-center  w3-xlarge" style= "background-color: #343a40">
    <p class="w3-medium" style="color: white;">
         Desenvolvido por: <br>
         Vicky Wingler<br>
         Júlia Sena<br>
         Vitória Costa<br>
         Caio Felipe <br>
         Estudantes do <a href="https://www.cp2.g12.br/index.php" target="_blank"> Colégio Pedro II</a></p>
  <p class="w3-medium" style="color: white;">
  <section id="contactus"> Contato: <a href="#" target="_blank">nodoubt@gmail.com</a></p>
    </section>
</footer>
  

</footer>
</body>
</html>