<?php
    include "autentica.inc"
        if($_SESSION["PermissAdm" != 1])
        echo "Você não fez o login!";
        echo "<p><a href='login.html'>Pagina de login</a></p>";
        exit;
        }