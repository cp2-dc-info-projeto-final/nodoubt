<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilização.css">
        <title>Cadastro</title>

    </head>
        <body> 
            <?php
            
            if(isset($_POST["nomeum"])){
                $user = $_POST["nomeum"];
            }
            else{
                $user =  "";
            }
            if(isset($_POST["senhaum"])){
                $senha = $_POST["senhaum"];
            }
            else{
                $senha =  "";
            }
            if(isset($_POST["nomedois"])){
                $nome = $_POST["nomedois"];
            }
            else{
                $nome =  "";
            }
            if(isset($_POST["idade"])){
                $id = $_POST["idade"];
            }
            else{
                $id =  "";
            }
            if(isset($_POST["email"])){
                $email = $_POST["email"];
            }
            else{
                $email =  "";
            }
            if(isset($_POST["senhadois"])){
                $sendois = $_POST["senhadois"];
            }
            else{
                $sendois =  "";
            }
 
            
            ?>


            <div id="login">
            <div class="card">
            <div class="card-header">

                <h2>Cadastro</h2>

            </div>

            <div class="card-content">
                <div class="card-content-area">
                    <form action="Recebedados.php" method="POST">
                    <input type="hidden" name="operacao" value="cadastrar">                       
                    <p>Nickname: <input type="text" placeholder="limite de 12 caracteres..." name="username" size="25" value="<?php echo $user;?>"> </p>
                    <p>Senha:<br> <input type="password" placeholder="Ex: 1a2b3c4d5e " name="senha" size="25"> </p>
                    <p>Confirmar senha:<br> <input type="password" placeholder=" Digite aqui sua senha novamente..." name="senhadois" size="25"> </p>
                    <p>Nome: <input type="text" placeholder="Deve possuir entre 5 a 40 caracteres" name="nome" size="40" value="<?php echo $nome;?>"> </p>
                    <p>Data de nascimento: <input type="text"  placeholder="Ex: dia/mês/ano..." name="idade" size="25" value="<?php echo $id;?>"> </p>
                    <p>E-mail: <input type="text" placeholder="Ex: exemplo@yahoo.com" name="email" size="30" value="<?php echo $email;?>"></p>
                                

                        <div class="card-footer">

                        <input type="submit" value="Enviar!" class="submit">                            
                     
                        </div>
                
                    </form>

                    <div class="card-header">


                    <h5><a href="Login.html">Voltar</a>
                    </h5>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>