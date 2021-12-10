
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
<div id="login">
            <div class="card">
            <div class="card-header">
<p><strong>Editar Dados</strong></p>
</div>
            <div class="card-content">
                <div class="card-content-area">
            <form action="Recebedados.php" method="POST">
                <input type="hidden" name="emailusuario" value="<?php echo $emailuser?>">
                <p>Nome de usuario: <input type="text" name="username" size="10" value="<?php echo $usuario["usernameusuario"]?>"> </p>
                <p>Nome: <input type="text" name="nome" size="30" value="<?php echo $usuario["nomeusuario"]?>"> </p>
                <p>Idade: <input type="text" name="idade" size="3" value="<?php echo $usuario["idadeusuario"]?>"> </p>
                <p>E-mail: <input type="text" name="email" size="30" value="<?php echo $usuario["emailusuario"]?>"></p>
                <?php if($_SESSION["permiss"] == 1){ ?>
                    <p>Permissão: <input type="text" name="permiss" size="2" value="<?php echo $usuario["permissadm"]?>"></p>
                    <?php
                    }
                    else{
                        ?>
                        <input type="hidden" name="permiss" value="<?php echo $usuario["permissadm"]?>"></p>
                        <?php
                    }
                ?>
    
    <div class="card-footer">
    <p><input type="submit" name="operacao" class="submit" value="Editar!"> 
    <input type="submit" name="operacao" class="submit" value="Excluir"></p>
    </div>
</form>

<div class="card-header">


<h5><a href="Perfil.php">Voltar</a>
</h5>

</div>

    </div>
    </div>
    </div>
<?php
    mysqli_close($mysqli);
?>

<html>
    <head>
    <title>Editar Dados</title>
    <head>
    
    <body>
    <link rel="stylesheet" href="style.css">


<nav class="navbar navbar-fixed-top navbar-dark main-nav">
<div class="container">
    <ul class="nav navbar-nav pull-left">
    </ul>
    </body>
</html>

