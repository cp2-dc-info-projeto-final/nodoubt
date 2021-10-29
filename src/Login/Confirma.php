<?php
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        include "conecta_mysql.inc";
            $sql ="SELECT * FROM usuarios WHERE username ='$username';";
            $res = mysqli_query($mysqli, $sql);
                if(mysqli_num_rows($res) != 1){
                    echo "Username inválido!";
                    echo "<p><a href='login.html'>Página de login</a></p>";
        }
            else{
                $usuario = mysqli_fetch_array($res);
                if($senha != $usuario["senha"]){
                    echo "Senha inválida!";
                    echo "<p><a href='login.html'>Página de login</a></p>";
        }
            else{ // usuário e senha corretos, abre a sessão e registra as variáveis
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["senha"] = $senha;
            header("Location:src/index.php");
            }
        }
        mysqli_close($mysqli);
?>