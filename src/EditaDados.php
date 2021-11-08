
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
    <input type="hidden" name="operacao" value="atualizar">
    <input type="hidden" name="emailusuario" value="<?php echo $emailuser?>">
    <p>Nome de usuario: <input type="text" name="username" size="10" value="<?php echo $usuario["usernameusuario"]?>"> </p>
    <p>Senha: <input type="password" name="senha" size="10" value="<?php echo $usuario["senhausuario"]?>"> </p>
    <p>Nome: <input type="text" name="nome" size="30" value="<?php echo $usuario["nomeusuario"]?>"> </p>
    <p>Idade: <input type="text" name="idade" size="3" value="<?php echo $usuario["idadeusuario"]?>"> </p>
    <p>E-mail: <input type="text" name="email" size="30" value="<?php echo $usuario["emailusuario"]?>"></p>
    <?php 
        include "conecta_mysql.inc";
        $emailuser = $_GET["emailusuario"];
        $sql = "SELECT * FROM cadastrousuarios WHERE emailusuario = '$emailuser';";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i=0; $i < $linhas; $i++){
        $usuario = mysqli_fetch_array($res);
        if($["permissadm"] == 1){
            ?>
          <p><a href='IndexAdm.php'>Usuarios</a></p>
            <?php
        }
    }
    ?>
    <p><input type="submit" value="Enviar!"></p>
</form>
<?php
    mysqli_close($mysqli);
?>