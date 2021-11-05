
<?php
    include "conecta_mysql.inc";
    $emailusuario = $_GET["emailusuario"];
    $sql = "SELECT * FROM cadastrousuarios WHERE emailusuario = '$emailusuario';";
    $res = mysqli_query($mysqli,$sql);
    $usuario = mysqli_fetch_array($res);
?>

<p><strong>Editar Dados</strong></p>
<form action="Recebedados.php" method="POST">
    <input type="hidden" name="operacao" value="atualizar">
    <input type="hidden" name="emailusuario" value="<?php echo $emailusuario?>">
    <p>Username: <input type="text" name="username" size="10" value="<?php echo $usuario["usernameusuario"]?>"> </p>
    <p>Senha: <input type="password" name="senha" size="10" value="<?php echo $usuario["senhausuario"]?>"> </p>
    <p>Nome: <input type="text" name="nome" size="30" value="<?php echo $usuario["nomeusuario"]?>"> </p>
    <p>Idade: <input type="text" name="idade" size="3" value="<?php echo $usuario["idadeusuario"]?>"> </p>
    <p>E-mail: <input type="text" name="email" size="30" value="<?php echo $usuario["emailusuario"]?>"></p>
    <p><input type="submit" value="Enviar!"></p>
</form>

<?php
    mysqli_close($mysqli);
?>


