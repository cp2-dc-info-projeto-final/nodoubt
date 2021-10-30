<?php
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        include "conecta_mysql.inc";
            $sql ="SELECT * FROM cadastrousuarios WHERE emailusuario = '$email';";
            $res = mysqli_query($mysqli, $sql);
                if(mysqli_num_rows($res) != 1){
                    echo "E-mail inválido!";
                    echo "<p><a href='login.html'>Página de login</a></p>";
        }
            else{
                $usuario = mysqli_fetch_array($res);
                if($senha != $usuario["senhausuario"]){
                    echo "Senha inválida!";
                    echo "<p><a href='login.html'>Página de login</a></p>";
        }
            else{ 
            session_start();
            $_SESSION["emailusuario"] = $email;
            $_SESSION["senhausuario"] = $senha;
            header("Location:index.php");
            }
        }
        mysqli_close($mysqli);
?>