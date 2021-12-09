<?php
    include "autentica.inc";
?>

<html>
    <head>
        <title>Usuários</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
        <script src="https://kit.fontawesome.com/785c80f02e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/3/w3.css">


        <link rel="stylesheet" href="estilo.css">
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
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="Cadastro.php">Se Cadastrar</a></li>
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
            <center>
            <div class="card"> 
            <div class="card-header"> 
            <div class="card-content"> 
            <div class="card-content-area"> 
  
                
    
  <?php 
              $email = $_SESSION["emailusuario"];
              include "conecta_mysql.inc";
              $sql = "SELECT * FROM cadastrousuarios WHERE emailusuario ='$email';";
              $res = mysqli_query($mysqli,$sql);
              $linhas = mysqli_num_rows($res);
              for($i=0; $i < $linhas; $i++){
              $usuario = mysqli_fetch_array($res);
              }
              if($usuario["permissadm"] != 1){
                echo "acesso negado.<br>";
                echo "talvez voce não tenha acesso..";
                echo "<p><a href='login.html'>Páginade login</a></p>";
                exit;
            }
            elseif($usuario["permissadm"] == 1){ 
                ?>
                <h1>Users</h1>
             <?php
                include "conecta_mysql.inc";
                $sql = "SELECT * FROM cadastrousuarios;";
                $res = mysqli_query($mysqli,$sql);
                $linhas = mysqli_num_rows($res);
                for($i=0; $i < $linhas; $i++){
                $usuario = mysqli_fetch_array($res);
                $permiss = $usuario["permissadm"];
                

                echo "Username: ".$usuario["usernameusuario"]."<br>";
                echo "Senha: ".$usuario["senhausuario"]."<br>";
                echo "Nome: ".$usuario["nomeusuario"]."<br>";
                echo "Idade: ".$usuario["idadeusuario"]."<br>";
                echo "Email: ".$usuario["emailusuario"]."<br>";
                if ($permiss == 1){ echo"Permissão: Adm<br>"; }
                elseif($permiss != 1){ echo"Permissão: comum <br>"; }
                $nomeuser = $usuario["usernameusuario"];
                echo "<a href='EditaDados.php?emailusuario=".$usuario["emailusuario"]."'>Editar dados</a><br>";
                echo"<p><a href='alterperfil.php?usernameusuario=". $nomeuser."'>Perfil do usuario</a></p>";
                echo "---------------------------------<br>";
                }
                mysqli_close($mysqli);
            }
         ?></h3> 

</body>
</html>