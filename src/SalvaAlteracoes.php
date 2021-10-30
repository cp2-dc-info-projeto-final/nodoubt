<?php

    $emailusuario = $_POST["emailusuario"];
    $username = $_POST["username"];
    $senha = $_POST["senha"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $usuario = $_POST["email"];
    $erro = 0;

    $sql = "UPDATE cadastrousuarios SET username ='$username', senha ='$senha',";
    $sql .= "nome = '$nome', idade = $idade ";
    $sql .= "WHERE emailusuario = $emailusuario;";

    include "conecta_mysql.inc";
    mysqli_query($mysqli,$sql);
    mysqli_close ($mysqli);

    echo "<br>Os dados foram atualizados com sucesso!";
    echo "<br><a href='Index.php'>Página Inicial</a>";

?>