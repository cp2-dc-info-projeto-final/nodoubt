<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
<script src="https://kit.fontawesome.com/785c80f02e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/3/w3.css">

</head>

<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    

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
                          session_start();
                          if(!isset($_SESSION["emailusuario"])){
                          ?>
                            
                            <li><a href="Login.html"> <button><i class="fas fa-sign-in-alt"></i><button>
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

<div class="container">
<img src="imagem/logo.jpeg" left="0px"display="flex" height="100%" width="1270px" >           
</div>

<br>
<div>
  
  <footer class="w3-container w3-padding-64 w3-center  w3-xlarge" style= "background-color: #343a40">
    <p class="w3-medium" style="color: white;">
         Desenvolvido por: <br>
         Vicky Wingler<br>
         Júlia Sena<br>
         Vitoria Costa<br>
         Caio Felipe <br>
         Estudantes do <a href="https://www.cp2.g12.br/index.php" target="_blank"> Colégio Pedro II</a></p>
  <p class="w3-medium" style="color: white;">
  <section id="contactus"> Contato: <a href="#" target="_blank">nodoubttt0@gmail.com</a></p>
    </section>

</footer>
</div>
  </body>
</html>