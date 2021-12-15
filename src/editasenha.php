<html>
    <head>
        <title> Senha </title>
        <link rel="stylesheet" href="estilizar.css">
</head>
<body>
<?php
    include "autentica.inc";
    include "conecta_mysql.inc";
    $emai = $_GET["emai"];
    $sql = "SELECT * FROM cadastrousuarios WHERE emailusuario = '$emai';";
    $res = mysqli_query($mysqli,$sql);
    $linhas = mysqli_num_rows($res);
    for($i=0; $i < $linhas; $i++){
    $usur = mysqli_fetch_array($res);
    $senhaatual = $usur["senhausuario"];
}
?>

<div id="login">
    <div class="card">
        <div class="card-header">
            <p><strong>Editar Dados</strong></p>
        </div>

        <div class="card-content">
            <div class="card-content-area">
            <i>
            <form action="Recebedados.php" method="POST">
            <input type="hidden" name="seinha" value="<?php echo $senhaatual?>">
            <input type="hidden" name="remai" value="<?php echo $emai?>">
            Digite sua senha atual<br><input type="password" name="senhaold" placeholder="Insira sua senha de login"><br><br>
            Digite sua nova senha<br><input type="password" name="senhanova" placeholder="Insira aqui..."><br><br>
            Confirme sua nova senha<br><input type="password" name="senhadnv" placeholder="Insira sua nova senha novamente" size="27"><br><br>
            <div class="card-footer">
            <button type="submit" name="operacao" class="submit" value="editasenha" title="Enviar edição de senha">Editar senha!</button>
            </div>
            <form>
            </i>
            <h5><a href="Perfil.php">Voltar</a>
            </div>
        </div>
    <div>
</div>
</body>
<html>