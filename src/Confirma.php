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
            $_SESSION["senhacript"] = $senha;
            $img = rand(1, 10);
            $_SESSION["fotoperfil"] = $img;
            $_SESSION["permiss"] = $permiss;
            header("Location:Perfil.php");
            }
        }
        mysqli_close($mysqli);
?>