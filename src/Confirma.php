<html>
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="estilização.css">

        <title>...</title>

    </head>
<body>
<div id="login">
            <div class="card">

            <div class="card-content">
                <div class="card-content-area">

<?php
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        global $img;

        include "conecta_mysql.inc";
            $sql ="SELECT * FROM cadastrousuarios WHERE emailusuario = '$email';";
            $res = mysqli_query($mysqli, $sql);
                if(mysqli_num_rows($res) != 1){
                    echo "E-mail inválido!";
                    echo "<p><a href='login.html'>Página de login</a></p>";
        }
            else{
                $usuario = mysqli_fetch_array($res);
                $username = $usuario["usernameusuario"];
                $permiss = $usuario["permissadm"];
                if(!password_verify($senha, $usuario["senhausuario"])){
                    echo "Senha inválida!";
                    echo "<p><a href='login.html'>Página de login</a></p>";
        }
            else{ 
            session_start();
            $_SESSION["usernameusuario"] = $username;
            $_SESSION["emailusuario"] = $email;
            $_SESSION["senhacript"] = $usuario["senhausuario"];
            $img = rand(1, 10);
            $_SESSION["fotoperfil"] = $img;
            $_SESSION["permiss"] = $permiss;
            header("Location:Perfil.php");
            }
        }
        mysqli_close($mysqli);
?>
</div>
    </div>
    </div>
    </body>
</html>