<html>
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="estilo.css">

        <title>Cadastro</title>

    </head>
        <body> 
            <div id="login">
            <div class="card">

            <div class="card-content">
                <div class="card-content-area">
        <?php 

    function Teste_form($non1, $sen, $non2, $id, $eml, $erro){

            if(strlen($non1) < 5){
                    
            echo "O campo: Nome de Usuario deve possuir no mínimo 5 caracteres.<br>";
            $erro = 1;
            }
            if(strlen($non1) > 12){
                    
                echo "O campo: Nome de Usuario deve possuir no maximo 12 caracteres.<br>";
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
            if ( strlen($id) < 8){
            echo "O campo: Data de Nascimento deve possui no minimo 8 digitos.<br>";
            $erro = 1;
            }
            else{
                // verifica se a data possui
                // a barra (/) de separação
               if(strpos($id, "/") !== FALSE){
                    //
                    $partes = explode("/", $id);
                    // pega o dia da data
                    $dia = $partes[0];
                    // pega o mês da data
                    $mes = $partes[1];
                    // prevenindo Notice: Undefined offset: 2
                    // caso informe data com uma única barra (/)
                    $ano = isset($partes[2]) ? $partes[2] : 0;
                    $id = $dia;
                    $id .= $mes;
                    $id .= $ano;
                    if (strlen($ano) < 4) {
                        echo "O campo: Data de Nascimento exige um ano valido.<br>";
                        $erro = 1;
                    } 
                    else {
                        // verifica se a data é válida
                        if (!checkdate($mes, $dia, $ano)) {
                            echo "O campo: Data de Nascimento não indentificou sua data como valida.<br>";
                            $erro = 1;
                        }
                    }
                 }
                else{
                    echo "O campo: Data de Nascimento deve possuir barras de separação.<br>";
                    $erro = 1;
                }
            }
            if(strlen($eml) < 8){
            echo "O campo: E-mail esta muito curto e não foi digitado corretamente.<br>";
            $erro = 1;
            }

            if(strstr($eml,'@') == FALSE){
            echo "O campo: E-mail não foi digitado corretamente.<br>";
            $erro = 1;
            }
            return array ($erro, $id);
       }

    $operacao = $_POST["operacao"];
        include "conecta_mysql.inc";
        if  ($operacao == "cadastrar") {

           ?> <div class="card-header">

            <h2>Cadastro</h2>

        </div> <?php
            
            $username = $_POST["username"];
            $senha = $_POST["senha"];
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $email = $_POST["email"];
            $erro = 0;
            $linhas = 0;

            $funcao = Teste_form($username, $senha, $nome, $idade, $email, $erro);
            
            $erro = $funcao[0];
            $idade = $funcao[1];

            if ($erro == 0){
                $sql ="SELECT * FROM cadastrousuarios WHERE emailusuario ='$email';";
                $res = mysqli_query($mysqli, $sql);
                $linhas = mysqli_num_rows($res);
        
                if($linhas == 1){
                echo "O Email inserido já esta cadastrado!!";
                $erro = 1;
                }
            }

            if ($erro == 0){
                $sql ="SELECT * FROM cadastrousuarios WHERE usernameusuario ='$username';";
                $res = mysqli_query($mysqli, $sql);
                $linhas = mysqli_num_rows($res);
        
                if($linhas == 1){
                echo "O Nome de usuario inserido já esta sendo usado!";
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
            
        elseif($operacao == "Editar!"){

             include "autentica.inc";
            include "conecta_mysql.inc";

                $emailusuario = $_POST["emailusuario"];
                $username = $_POST["username"];
                $senha = $_POST["senha"];
                $nome = $_POST["nome"];
                $idade = $_POST["idade"];
                $usuario = $_POST["email"];
                $permiss = $_POST["permiss"];
                $erro = 0;
                $linhas = 0;
                $fml;

                $funcao = Teste_form($username, $senha, $nome, $idade, $usuario, $erro);

                $erro = $funcao[0];
                $idade = $fucao[1];

                if ($erro == 0){
                    $sql ="SELECT * FROM cadastrousuarios WHERE emailusuario ='$usuario';";
                    $res = mysqli_query($mysqli, $sql);
                    $linhas = mysqli_num_rows($res);
                    $fml = $_SESSION["emailusuario"];

                        if($linhas == 1){
                            if($Globalpermiss != 1){
                            if($fml != $usuario ){
                                
                            echo "O email inserido ja esta cadastado!";
                            $erro = 1;
                            }
                        }
                    }
                }

            if ($erro == 0){
                $sql ="SELECT * FROM cadastrousuarios WHERE usernameusuario ='$username';";
                $res = mysqli_query($mysqli, $sql);
                $linhas = mysqli_num_rows($res);
                $fml = $_SESSION["usernameusuario"];

                if($linhas == 1){
                    if($Globalpermiss != 1){
                    if($fml != $username ){
                echo "O Nome de usuario inserido já esta sendo usado!";
                $erro = 1;
                }
            }
        }
    }
                
                if($erro == 0) {
                    $sql = "UPDATE cadastrousuarios SET usernameusuario ='$username', senhausuario ='$senha',";
                    $sql .= "nomeusuario = '$nome', idadeusuario = $idade, emailusuario = '$usuario', permissadm = $permiss ";
                    $sql .= "WHERE emailusuario = '$emailusuario';";

                    mysqli_query($mysqli,$sql);
                    if (!mysqli_query($mysqli,$sql)) {
                        echo("Erro ao atualizar: " .mysqli_error($mysqli));
                        exit;
                    }

                    else{
                        echo "<br>Os dados foram atualizados com sucesso!";
                    } 
                    mysqli_close ($mysqli);

                    
                    ?>
                    <div class="card-footer">
                    <p><a href="Perfil.php"><input type="submit" value="Pagina inicial" class="submit"></a></p>
                    </div>
                <?php
                    exit;
                }    

                if($erro == 1) {

                    echo "<br>Atualização de dados incompleta.";

                    ?>
                    <div class="card-footer">
                    <p><a href="Perfil.php"><input type="submit" value="Retornar" class="submit"></a></p>
                    </div>
                    <?php
                    exit;
                }

    
        }
        elseif($operacao == "Excluir"){
            include "autentica.inc";
            include "conecta_mysql.inc";
            
            $email = $_POST["email"];
            $sql ="DELETE FROM cadastrousuarios WHERE emailusuario ='$email'";
            mysqli_query($mysqli,$sql);
            if (!mysqli_query($mysqli,$sql)) {
                echo("Error description: " .mysqli_error($mysqli));
                exit;
            }

            else{
                echo "<br>Usuario excluido com exito!";
                echo "<p><a href='Login.html'>Inicio";
            } 
            mysqli_close ($mysqli);

        }

        elseif($operacao == "buscar"){
            include "conecta_mysql.inc";
            
            $nomedebusca = $_POST["username"];
            $sql = "SELECT * FROM cadastrousuarios WHERE usernameusuario like'$nomedebusca%';";
             $res = mysqli_query($mysqli,$sql);
             $linhas = mysqli_num_rows($res);

            if (!mysqli_query($mysqli,$sql)) {
                echo("Error description: " .mysqli_error($mysqli));
                exit;
            }

            if( $linhas == 0){
                echo "Nenhum usuario encontrado...";
            }

            else{
                $linhas = mysqli_num_rows($res);
                echo "Perfis econtrados: $linhas.";
                for($i=0; $i < $linhas; $i++){
                $usuario = mysqli_fetch_array($res);
                ?>
                <h3>
                <?php
                echo"<p><a href='alterperfil.php?usernameusuario=". $usuario["usernameusuario"]."' value=". $usuario['usernameusuario']."><br>"; 
                echo " ".$usuario["usernameusuario"]."<br></a>";
                ?> </h3>
                 
                 <div class="container">
                <p><img src="imagem/Nouser.png" width="100" height="100"></img>
                </div>
                 <?php
                }
            }
                echo "<p><a href='Perfil.php'>Retornar";

            mysqli_close ($mysqli);

        }

        elseif($operacao == "Postar"){
            include "conecta_mysql.inc";
        
            $nomeuser = $_POST["user"];
            $idouser = $_POST["iduser"];
            $titulopost = $_POST["titulo"];
            $postagem = $_POST["post"];

            $sql ="INSERT INTO postagemusuarios (coduserpost,userpost,titulopost,postcontent)"; 
            $sql .= "VALUES ($idouser,'$nomeuser','$titulopost','$postagem')";
            mysqli_query($mysqli,$sql);

            if (!mysqli_query($mysqli,$sql)) {
                echo("Erro ao postar: " .mysqli_error($mysqli));
                exit;
            }
            mysqli_close ($mysqli);

            header("location:Perfil.php");
            exit;
        }
    ?>

    <html>
        <head>
        <link rel="stylesheet" href="estilo.css">
        <head>
    </html>