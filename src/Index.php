<?php
 include "autentica.inc";
?>
<html>
  <head>
        <link rel="stylesheet" href="estilo.css"> 
        <title>Formulário</title>
</head>
  <body>
      
        <h3>Seu perfil</h3><p>

      <h4> <?php 
            $email = $_SESSION["emailusuario"];
            include "conecta_mysql.inc";
      $sql = "SELECT * FROM cadastrousuarios WHERE emailusuario ='$email';";
      $res = mysqli_query($mysqli,$sql);
      $linhas = mysqli_num_rows($res);
      for($i=0; $i < $linhas; $i++){
      $usuario = mysqli_fetch_array($res);
      echo "Nome de usuario: ".$usuario["usernameusuario"]."<br>";
      echo "Senha: ".$usuario["senhausuario"]."<br>";
      echo "Nome: ".$usuario["nomeusuario"]."<br>";
      echo "Idade: ".$usuario["idadeusuario"]."<br>";
      echo "Email: ".$usuario["emailusuario"]."<br>";
      echo "----------------------------------<br>";
      }
     
      if($usuario["permissadm"] == 1){
        ?>
      <p><a href='IndexAdm.php'>Usuarios</a></p>
        <?php
    }

      
      ?></h3> 
  
    <?php echo"<p><a href='EditaDados.php?emailusuario=". $_SESSION["emailusuario"]."'>EDITAR DADOS</a><br>";?>
    <p><a href="Logout.php">SAIR</a></p>

    </body>
</html>