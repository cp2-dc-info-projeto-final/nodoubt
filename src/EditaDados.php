
<?php
    include "autentica.inc";
    include "conecta_mysql.inc";
    $emailuser = $_GET["emailusuario"];
    $sql = "SELECT * FROM cadastrousuarios WHERE emailusuario = '$emailuser';";
    $res = mysqli_query($mysqli,$sql);
    $linhas = mysqli_num_rows($res);
    for($i=0; $i < $linhas; $i++){
    $usuario = mysqli_fetch_array($res);
    $permiss = $usuario["permissadm"];
}
?>

<p><strong>Editar Dados</strong></p>
<form action="Recebedados.php" method="POST">
    <input type="hidden" name="emailusuario" value="<?php echo $emailuser?>">
    <p>Nome de usuario: <input type="text" name="username" size="10" value="<?php echo $usuario["usernameusuario"]?>"> </p>
    <p>Senha: <input type="password" name="senha" size="10" value="<?php echo $usuario["senhausuario"]?>"> </p>
    <p>Nome: <input type="text" name="nome" size="30" value="<?php echo $usuario["nomeusuario"]?>"> </p>
    <p>Idade: <input type="text" name="idade" size="3" value="<?php echo $usuario["idadeusuario"]?>"> </p>
    <p>E-mail: <input type="text" name="email" size="30" value="<?php echo $usuario["emailusuario"]?>"></p>
    <?php if($Globalpermiss == 1){ ?>
          <p>Permissão: <input type="text" name="permiss" size="2" value="<?php echo $usuario["permissadm"]?>"></p>
          <?php
        }
    ?>
    <p><input type="submit" name="operacao" value="Editar!"></p>
    <input type="submit" name="operacao" value="Excluir">
</form>
<?php
    mysqli_close($mysqli);
?>

<html>
    <head>
    <title>Editar Dados</title>
    <head>
    
    <body>
    <link rel="stylesheet" href="estilo.css">


<nav class="navbar navbar-fixed-top navbar-dark main-nav">
<div class="container">
    <ul class="nav navbar-nav pull-left">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Download</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
        </li>
    </ul>

    <ul class="nav navbar-nav text-center">
        <li class="nav-item"><a class="nav-link" href="#">Website Name</a></li>
    </ul>

    <ul class="nav navbar-nav pull-right">
        <li class="nav-item">
            <a class="nav-link" href="#">Rates</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
    </ul>
</div>


    </body>
</html>

