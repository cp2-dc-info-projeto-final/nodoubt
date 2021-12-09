<?php
     session_start();
     global $Globalpermiss;
        if(isset($_SESSION["emailusuario"])){
            $email = $_SESSION["emailusuario"];
        }

        if(isset($_SESSION["senhacript"])){
            $senhacript = $_SESSION["senhacript"];
        }       
         if(isset($_SESSION["permissadm"])){
            $Globalpermiss = $_SESSION["permissadm"];
        }

        if(empty($email) OR empty($senhacript)){
            echo "Email ou Senha não encontrados.<br>";
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
                unset($_SESSION["senhacript"]);
                echo "Email invalido.<br>";
                echo "Você não fez o login!";
                echo "<p><a href='login.html'>Página de login</a></p>";
                exit;
            }
                    else{
                        $usuario = mysqli_fetch_array($res);
                        $Globalpermiss = $usuario["permissadm"];
                        if(!hash_equals($usuario["senhausuario"], $senhacript)){
                        unset($_SESSION["emailusuario"]);
                        unset($_SESSION["senhacript"]);
                        echo "Senha invalida.<br>";
                        echo "Você não fez o login!";
                        echo "<p><a href='login.html'>Pagina de login</a></p>";
                        mysqli_close($mysqli);
                        exit;
                  }   

         }

        mysqli_close($mysqli);
    }
?>    