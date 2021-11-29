<?php
    include "autentica.inc";
?>

<html>
    <head>
</head>
<body>
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