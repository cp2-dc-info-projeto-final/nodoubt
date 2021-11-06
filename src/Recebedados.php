<html>
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">

        <title>Cadastro</title>

    </head>
        <body> 
            <div id="login">
            <div class="card">
            <div class="card-header">

                <h2>Cadastro</h2>

            </div>

            <div class="card-content">
                <div class="card-content-area">
        <?php 

    function Teste_form($non1, $sen, $non2, $id, $eml, $erro){

            if(strlen($non1) < 5 or strlen($non1) > 12){
                    
            echo "O campo: Nome de Usuario deve possuir no mínimo 5 caracteres.<br>";
            $erro = 1;
            }
            if(strlen($sen) < 5 or strlen($sen) > 10){
            echo "O campo: Senha deve possuir no mínimo 5 caracteres.<br>";
            $erro = 1;
            }
            if($non1 == $sen){
            echo "O campo: Nome de Usuario e Senha devem ser diferentes.<br>";
            $erro = 1;
            }
            if(empty($non2) OR strstr($non2,' ') == FALSE){    
            echo "O campo: Nome esta vazio ou foi inserido de forma incorreta. <br>";
            $erro = 1;
            }
            if(is_numeric($id) == FALSE){
            echo "O campo: Idade deve possui somente numeros.<br>";
            $erro = 1;
            }
            if(strlen($eml) < 8){
            echo "O campo: E-mail esta muito curto e não foi digitado corretamente.<br>";
            $erro = 1;
            }

            if(strstr($eml,'@') == FALSE){
            echo "O campo: E-mail não foi digitado corretamente.<br>";
            $erro = 1;
            }
            return $erro;
       }

    $operacao = $_POST["operacao"];
        include "conecta_mysql.inc";
        if  ($operacao == "cadastrar") {
            
            $username = $_POST["username"];
            $senha = $_POST["senha"];
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $email = $_POST["email"];
            $erro = 0;
            $linhas = 0;

            $erro = Teste_form($username, $senha, $nome, $idade, $email, $erro);
            
            if ($erro == 0){
                $sql ="SELECT * FROM cadastrousuarios WHERE emailusuario ='$email';";
                $res = mysqli_query($mysqli, $sql);
                $linhas = mysqli_num_rows($res);
        
                if($linhas == 1){
                echo "O Email inserido já esta cadastrado!!";
                $erro = 1;
                }
            }

            if($erro == 0) {
                $sql ="INSERT INTO cadastrousuarios (usernameusuario,senhausuario,nomeusuario,idadeusuario,emailusuario)";        
                $sql .= "VALUES ('$username','$senha','$nome',$idade,'$email')";
        
                mysqli_query($mysqli,$sql);
                mysqli_close ($mysqli);
        
                echo "Todos os dados foram digitados corretamente!<br>";
                echo "Cadastro completo.";
                
                ?>
                <div class="card-footer">
                
                <p><a href="login.html"><input type="submit" value="Pagina de login" class="submit"></a></p>

                </div>
    <?php
                exit;
                
        
             }

             if($erro == 1) {
                 echo "<br>Cadastro incompleto.";

                 ?>
                 <div class="card-footer">

                        <p><a href="Cadastro.html"><input type="submit" value="Retornar" class="submit"></a></p>
                </div>
                <?php 
                exit;
            }
             
        }
            
         elseif($operacao == "atualizar"){
             include "autentica.inc";
            include "conecta_mysql.inc";

                $emailusuario = $_POST["emailusuario"];
                $username = $_POST["username"];
                $senha = $_POST["senha"];
                $nome = $_POST["nome"];
                $idade = $_POST["idade"];
                $usuario = $_POST["email"];
                $erro = 0;
                $linhas = 0;
                $fml;

                $erro = Teste_form($username, $senha, $nome, $idade, $usuario, $erro);

                if ($erro == 0){
                    $sql ="SELECT * FROM cadastrousuarios WHERE emailusuario ='$usuario';";
                    $res = mysqli_query($mysqli, $sql);
                    $linhas = mysqli_num_rows($res);
                    $fml = $_SESSION["emailusuario"];

                    if($linhas == 1){
                        if($fml != $usuario){
                        echo "O Email inserido já esta cadastrado!";
                        $erro = 1;
                        }
                    }
                }

                if($erro == 0) {
                    $sql = "UPDATE cadastrousuarios SET usernameusuario ='$username', senhausuario ='$senha',";
                    $sql .= "nomeusuario = '$nome', idadeusuario = $idade, emailusuario = '$usuario' ";
                    $sql .= "WHERE emailusuario = '$emailusuario';";

                    mysqli_query($mysqli,$sql);
                    if (!mysqli_query($mysqli,$sql)) {
                        echo("Error description: " .mysqli_error($mysqli));
                    }

                    else{
                        echo "<br>Os dados foram atualizados com sucesso!";
                    } 
                    mysqli_close ($mysqli);

                    
                    ?>
                    <div class="card-footer">
                    <p><a href="index.php"><input type="submit" value="Pagina inicial" class="submit"></a></p>
                    </div>
                <?php
                    exit;
                }    

                if($erro == 1) {

                    echo "<br>Cadastro incompleto.";

                    ?>
                    <div class="card-footer">
                    <p><a href="index.php"><input type="submit" value="Retornar" class="submit"></a></p>
                    </div>
                    <?php
                    exit;
                }

    
            }
            
            
    ?>

    <html>
        <head>
        <link rel="stylesheet" href="RecebeDadosStyle.css">
        <head>
    </html>


