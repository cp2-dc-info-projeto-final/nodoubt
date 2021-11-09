<?php
 session_start();
 $_SESSION = array();
 session_destroy();
 header("Location:login.html");
?>

<html>
    <head>
        <link rel="stylesheet" href="LogoutStyle.css">  
    </head>
</html>