<?php
     session_start();
     global $Globalpermiss;
        if(isset($_SESSION["emailusuario"])){
            $email = $_SESSION["emailusuario"];
        }

        if(isset($_SESSION["senhausuario"])){
            $senha = $_SESSION["senhausuario"];
        }       
         if(isset($_SESSION["permissadm"])){
            $Globalpermiss = $_SESSION["permissadm"];
        }

        if(empty($email) OR empty($senha)){
            echo "Email e Senha não encontrados.<br>";
        echo "Você não fez o login!";
        echo "<p><a href='login.html'>Página de login</a></p>";
        exit;
        }

        else{
        include "conecta_mysql.inc";
        $sql ="SELECT * FROM cadastrousuarios WHERE emailusuario ='$email';";
        $res = mysqli_query($mysqli, $sql);

                if(mysqli_num_rows($res) != 1){
                unset($_SESSION["emailusuario"]);
                unset($_SESSION["senhausuario"]);
                echo "Email invalido.<br>";
                echo "Você não fez o login!";
                echo "<p><a href='login.html'>Páginade login</a></p>";
                exit;
            }
                    else{
                        $usuario = mysqli_fetch_array($res);
                        $Globalpermiss = $usuario["permissadm"];
                        if($senha != $usuario["senhausuario"]){
                        unset($_SESSION["emailusuario"]);
                        unset($_SESSION["senhausuario"]);
                        echo "Senha invalida.<br>";
                        echo "Você não fez o login!";
                        echo "<p><a href='login.html'>Pagina de login</a></p>";
                        exit;
                  }   

         }

        mysqli_close($mysqli);
    }
?>    