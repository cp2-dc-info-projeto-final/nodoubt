<html>
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="estilização.css">

        <title>Cadastro</title>

    </head>
        <body> 
            <div id="login">
            <div class="card">

            <div class="card-content">
                <div class="card-content-area">
        <?php 
    
function Teste_form($non1, $sen, $sen2, $non2, $id, $eml, $erro, $data){

            //impede nomes de usuario menores que 5
            if(strlen($non1) < 5){       
            echo "O campo: Nome de Usuário deve possuir no mínimo 5 caracteres.<br>";
            $erro = 1;
            }
            // impede nomes de usuario maiores que 12
            if(strlen($non1) > 12){
            echo "O campo: Nome de Usuário deve possuir no maximo 12 caracteres.<br>";
            $erro = 1;
            }
            #impede senhas menores que 5 ou vazias
            if(strlen($sen) < 5 or empty($sen)){
            echo "O campo: Senha deve possuir no mínimo 5 caracteres.<br>";
            $erro = 1;
            }
            #verifica se as senhas são iguais
            if($sen !== $sen2 ){
            echo "Os campos de senha não podem ser diferentes.<br>";
            $erro = 1;
            }
            // impede nomes de usuario iguais a senha
            if($non1 == $sen){
            echo "O campo: Nome de Usuário e senha devem ser diferentes.<br>";
            $erro = 1;
            }
            // impede nomes vazios ou sem espaço
            if(empty($non2) OR strstr($non2,' ') == FALSE){    
            echo "O campo: Nome esta vazio ou foi inserido de forma incorreta. <br>";
            $erro = 1;
            }
            // impede escrita de idade menor que 8
            if ( strlen($id) < 8){
            echo "O campo: Data de Nascimento deve possuir no mínimo 8 dígitos.<br>";
            $erro = 1;
            }
            else{
                //impede idade de /
               if(strpos($id, "/") !== FALSE){
                
                    $partes = explode("/", $id);

                    $dia = $partes[0];

                    $mes = $partes[1];

                    $ano = isset($partes[2]) ? $partes[2] : 0;
                    $data = $id;
                    $id = $dia;
                    $id .= $mes;
                    $id .= $ano;
                    //impede idade com data do ano menor que 1000
                    if (strlen($ano) < 4) {
                        echo "O campo: Data de Nascimento exige um ano válido.<br>";
                        $erro = 1;
                    }
                    //impede idade nao numerica
                    if (!is_numeric($id)){

                        echo "O campo Data de nascimento só aceita números.";
                        $erro = 1;
                    }
                    else {
                        // verifica se a data é válida
                        if (!checkdate($mes, $dia, $ano)) {
                            echo "O campo: Data de Nascimento não indentificou sua data como válida.<br>";
                            $erro = 1;
                        }
                    }
                 }
                else{
                    echo "O campo: Data de Nascimento deve possuir barras de separação.<br>";
                    $erro = 1;
                }
            }
            // verifica se o email possui menos de 8 letras
            if(strlen($eml) < 8){
            echo "O campo: E-mail está muito curto ou não foi digitado corretamente.<br>";
            $erro = 1;
            }
            // impede email sem @  
            if(strstr($eml,'@') == FALSE){
            echo "O campo: E-mail não foi digitado corretamente.<br>";
            $erro = 1;
            }
            return array ($erro, $id, $data);
}

function Teste_form_Edicao($non1, $non2, $id, $eml, $erro, $data){

    //impede nomes de usuario menores que 5
    if(strlen($non1) < 5){       
    echo "O campo: Nome de Usuário deve possuir no mínimo 5 caracteres.<br>";
    $erro = 1;
    }
    // impede nomes de usuario maiores que 12
    if(strlen($non1) > 12){
    echo "O campo: Nome de Usuário deve possuir no maximo 12 caracteres.<br>";
    $erro = 1;
    }

    // impede nomes vazios ou sem espaço
    if(empty($non2) OR strstr($non2,' ') == FALSE){    
    echo "O campo: Nome esta vazio ou foi inserido de forma incorreta. <br>";
    $erro = 1;
    }
    // impede escrita de idade menor que 8
    if ( strlen($id) < 8){
    echo "O campo: Data de Nascimento deve possuir no mínimo 8 dígitos.<br>";
    $erro = 1;
    }
    else{
        //impede idade de /
       if(strpos($id, "/") !== FALSE){
        
            $partes = explode("/", $id);

            $dia = $partes[0];

            $mes = $partes[1];

            $ano = isset($partes[2]) ? $partes[2] : 0;
            $data = $id;
            $id = $dia;
            $id .= $mes;
            $id .= $ano;
            //impede idade com data do ano menor que 1000
            if (strlen($ano) < 4) {
                echo "O campo: Data de Nascimento exige um ano válido.<br>";
                $erro = 1;
            }
            //impede idade nao numerica
            if (!is_numeric($id)){

                echo "O campo Data de nascimento só aceita números.";
                $erro = 1;
            }
            else {
                // verifica se a data é válida
                if (!checkdate($mes, $dia, $ano)) {
                    echo "O campo: Data de Nascimento não indentificou sua data como válida.<br>";
                    $erro = 1;
                }
            }
         }
        else{
            echo "O campo: Data de Nascimento deve possuir barras de separação.<br>";
            $erro = 1;
        }
    }
    // verifica se o email possui menos de 8 letras
    if(strlen($eml) < 8){
    echo "O campo: E-mail está muito curto ou não foi digitado corretamente.<br>";
    $erro = 1;
    }
    // impede email sem @  
    if(strstr($eml,'@') == FALSE){
    echo "O campo: E-mail não foi digitado corretamente.<br>";
    $erro = 1;
    }
    return array ($erro, $id, $data);
}

    
function Teste_edit($non1, $non2, $id, $eml, $erro, $data){

    //impede nomes de usuario menores que 5
    if(strlen($non1) < 5){       
    echo "O campo: Nome de Usuário deve possuir no mínimo 5 caracteres.<br>";
    $erro = 1;
    }
    // impede nomes de usuario maiores que 12
    if(strlen($non1) > 12){
    echo "O campo: Nome de Usuário deve possuir no máximo 12 caracteres.<br>";
    $erro = 1;
    }
    // impede nomes vazios ou sem espaço
    if(empty($non2) OR strstr($non2,' ') == FALSE){    
    echo "O campo: Nome está vazio ou foi inserido de forma incorreta. <br>";
    $erro = 1;
    }
    // impede escrita de idade menor que 8
    if ( strlen($id) < 8){
    echo "O campo: Data de Nascimento deve possuir no mínimo 8 digitos.<br>";
    $erro = 1;
    }
    else{
        //impede idade de /
       if(strpos($id, "/") !== FALSE){
        
            $partes = explode("/", $id);

            $dia = $partes[0];

            $mes = $partes[1];

            $ano = isset($partes[2]) ? $partes[2] : 0;
            $data = $id;
            $id = $dia;
            $id .= $mes;
            $id .= $ano;
            //impede idade com data do ano menor que 1000
            if (strlen($ano) < 4) {
                echo "O campo: Data de Nascimento exige um ano válido.<br>";
                $erro = 1;
            }
            //impede idade nao numerica
            if (!is_numeric($id)){

                echo "O campo Data de nascimento só aceita números.";
                $erro = 1;
            }
            else {
                // verifica se a data é válida
                if (!checkdate($mes, $dia, $ano)) {
                    echo "O campo: Data de Nascimento não indentificou sua data como válida.<br>";
                    $erro = 1;
                }
            }
         }
        else{
            echo "O campo: Data de Nascimento deve possuir barras de separação.<br>";
            $erro = 1;
        }
    }
    // verifica se o email possui menos de 8 letras
    if(strlen($eml) < 8){
    echo "O campo: E-mail está muito curto ou não foi digitado corretamente.<br>";
    $erro = 1;
    }
    // impede email sem @  
    if(strstr($eml,'@') == FALSE){
    echo "O campo: E-mail não foi digitado corretamente.<br>";
    $erro = 1;
    }
    return array ($erro, $id, $data);
}

    $operacao = $_POST["operacao"];
        include "conecta_mysql.inc";
        if  ($operacao == "cadastrar") {

           ?> <div class="card-header">

            <h2>Cadastro</h2>

        </div> <?php
            
            $username = $_POST["username"];
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $senha = $_POST["senha"];
            $email = $_POST["email"];
            $erro = 0;
            $senha2 = $_POST["senhadois"];
            $linhas = 0;
            Global $data;

            $funcao = Teste_form($username, $senha, $senha2, $nome, $idade, $email, $erro, $data);
            
            $erro = $funcao[0];
            $idade = $funcao[1];
            $data = $funcao[2];

            if ($erro == 0){
                $sql ="SELECT * FROM cadastrousuarios WHERE emailusuario ='$email';";
                $res = mysqli_query($mysqli, $sql);
                $linhas = mysqli_num_rows($res);
        
                if($linhas == 1){
                echo "O Email inserido já está cadastrado!!";
                $erro = 1;
                }
            }

            if ($erro == 0){
                $sql ="SELECT * FROM cadastrousuarios WHERE usernameusuario ='$username';";
                $res = mysqli_query($mysqli, $sql);
                $linhas = mysqli_num_rows($res);
        
                if($linhas == 1){
                echo "O Nome de usuário inserido já está sendo usado!";
                $erro = 1;
                }
            }
            
            if($erro == 0) {
                $senhacript = password_hash($senha, PASSWORD_DEFAULT);
                $sql ="INSERT INTO cadastrousuarios (usernameusuario, senhausuario, nomeusuario,idadeusuario,emailusuario)";        
                $sql .= "VALUES ('$username','$senhacript','$nome','$data','$email')";
        
                mysqli_query($mysqli,$sql);
                mysqli_close ($mysqli);
        
                echo "Todos os dados foram digitados corretamente!<br>";
                echo "Cadastro completo.";
                
                ?>
                <div class="card-footer">
                
                <p><a href="login.html"><input type="submit" value="Página de login" class="submit"></a></p>

                </div>
                 <?php
                exit;
                
        
            }

             if($erro == 1) {
                 echo "<br>Cadastro incompleto.";

                 ?>
                 <div class="card-footer">
                    <form action="cadastro.php" method="POST">
                     <input type="hidden" name="nomeum" value="<?php echo $username;?>">
                    <input type="hidden" name="senhaum" value="<?php echo $senha;?>">
                    <input type="hidden" name="nomedois" value="<?php echo $nome;?>">
                    <input type="hidden" name="idade" value="<?php echo $data;?>">
                    <input type="hidden" name="email" value="<?php echo $email;?>">
                    <input type="hidden" name="senhadois" value="<?php echo $senha2;?>">
                    <p><a href="Cadastro.php"><input type="submit" value="Retornar" class="submit"></a></p>
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
                $nome = $_POST["nome"];
                $idade = $_POST["idade"];
                $usuario = $_POST["email"];
                $permiss = $_POST["permiss"];
                $erro = 0;
                $linhas = 0;
                $fml;
                $data = 0;

            $funcao = Teste_form_Edicao($username, $nome, $idade, $usuario, $erro, $data);

            $erro = $funcao[0];
            $idade = $funcao[1];
            $data = $funcao[2];

                if ($erro == 0){
                    $sql ="SELECT * FROM cadastrousuarios WHERE emailusuario ='$usuario';";
                    $res = mysqli_query($mysqli, $sql);
                    $linhas = mysqli_num_rows($res);
                    $fml = $_SESSION["emailusuario"];

                        if($linhas == 1){
                            if($Globalpermiss != 1){
                            if($fml != $usuario ){
                                
                            echo "O email inserido já esta cadastado!";
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
                echo "O Nome de usuário inserido já está sendo usado!";
                $erro = 1;
                }
            }
        }
    }
                
                if($erro == 0) {
                    $sql = "UPDATE cadastrousuarios SET usernameusuario ='$username',";
                    $sql .= "nomeusuario = '$nome', idadeusuario = '$data', emailusuario = '$usuario', permissadm = $permiss ";
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
            
            $user = $_POST["username"];

            $sql ="SELECT * FROM postagemusuarios WHERE userpost ='$user';";
            $res = mysqli_query($mysqli, $sql);
            $linhas = mysqli_num_rows($res);

            if( $linhas != 0){
                for($i=0; $i < $linhas; $i++){
                    $array = mysqli_fetch_array($res);
                    $postex = $array["codpost"];

                    $sql ="DELETE FROM postagemusuarios WHERE codpost ='$postex'";
                    mysqli_query($mysqli,$sql);
                    
                    $sql ="SELECT * FROM comentusuarios WHERE codpostcoment ='$postex';";
                    $resu = mysqli_query($mysqli, $sql);
                    $linhass = mysqli_num_rows($resu);     

                    if( $linhass != 0){

                        $sql ="DELETE FROM comentusuarios WHERE codpostcoment ='$postex'";
                        mysqli_query($mysqli,$sql);

                    }
                }
            }

            $sql ="DELETE FROM cadastrousuarios WHERE usernameusuario ='$user'";    
            $resul = mysqli_query($mysqli,$sql);
            if (!$resul) {
                echo("Error ao excluir perfil: " .mysqli_error($mysqli));
                exit;
            }

            else{
                echo "<br>Usuário excluido com êxito!";
                echo "<p><a href='Login.html'>Início";
            } 
            mysqli_close ($mysqli);

        }

        elseif($operacao == "buscar"){
            include "conecta_mysql.inc";
            
            $busca = $_POST["username"];

            if(!empty($busca)){
                
                    $sql = "SELECT * FROM postagemusuarios WHERE titulopost  like'%$busca%';";
                    $res = mysqli_query($mysqli,$sql);
                    $linhas = mysqli_num_rows($res);
                    if (!mysqli_query($mysqli,$sql)) {
                        echo("Error na busca: " .mysqli_error($mysqli));
                        exit;
                    }

                    if( $linhas == 0){
                        echo $busca." Não foi encontrado nenhuma postagem com este título <br>";
                    }
                    else{
                        echo "Títulos econtrados: $linhas.";
                        for($i=0; $i < $linhas; $i++){
                        $posti = mysqli_fetch_array($res);
                        $cod = $posti["codpost"];
                        $title = $posti["titulopost"];
                        $quem = $posti["userpost"]
                        ?><h3>
                        <?php
                        echo"<p><a href='postcoment.php?idpost=$cod'>$title<br></a>"; 
                        echo "<a href='alterperfil.php?usernameusuario=$quem'>-$quem</a><br>";
                        ?> </h3>
                        <?php
                        }
                    }

                    $sql = "SELECT * FROM cadastrousuarios WHERE usernameusuario like'$busca%';";
                    $res = mysqli_query($mysqli,$sql);
                    $linhas = mysqli_num_rows($res);

                    if (!mysqli_query($mysqli,$sql)) {
                        echo("Error na busca: " .mysqli_error($mysqli));
                        exit;
                    }

                    if( $linhas == 0){
                        echo "Nenhum usuário encontrado...";
                    }

                    else{
                        $linhas = mysqli_num_rows($res);
                        echo "<br>Perfis econtrados: $linhas.";
                        for($i=0; $i < $linhas; $i++){
                        $usuario = mysqli_fetch_array($res);
                        ?>
                        <h3>
                        <?php
                        echo"<p><a href='alterperfil.php?usernameusuario=". $usuario["usernameusuario"]."' value=". $usuario['usernameusuario']."><br>"; 
                        echo " ".$usuario["usernameusuario"]."<br></a>";
                        ?> </h3>
                        
                        <div class="container">
                        <p><img src="perfis/Nouser.png" width="100" height="100"></img>
                        </div>
                        <?php
                        }
                    }

                }
                else{
                    echo"Nenhum resultado para sua busca foi encontrado :(";

                }
                session_start();
                if(isset($_SESSION["emailusuario"])){

                echo "<p><a href='Perfil.php'>Retornar ao perfil";

                }
                else{
                    echo "<p><a href='index.php'>Retornar ao início";
                }
            mysqli_close ($mysqli);

        }

        elseif($operacao == "Postar"){
            include "conecta_mysql.inc";
        
            $nomeuser = $_POST["user"];
            $idouser = $_POST["iduser"];
            $titulopost = $_POST["titulo"];
            $postagem = $_POST["post"];

            if (empty($titulopost)){

                $titulopost = "Particular";

            }

            if (empty($postagem)){

                echo "A postagem não pode ser concluída pois o campo da postagem está vazio";
                echo "<p><a href='Perfil.php'> Perfil";
                exit;
            }

            else{
            $sql ="INSERT INTO postagemusuarios (coduserpost,userpost,titulopost,postcontent)"; 
            $sql .= "VALUES ($idouser,'$nomeuser','$titulopost','$postagem')";
            mysqli_query($mysqli,$sql);
            mysqli_close ($mysqli);

            header("location:Perfil.php");
            exit;
            }
        }

        elseif($operacao == "Editarpost"){
            include "conecta_mysql.inc";

            $tittle = $_POST["titulo"];
            $conteudo = $_POST["post"];
            $idpost = $_POST["id"];

            if (empty($tittle)){

                $tittle = "Particular";

            }

            if (empty($conteudo)){

                echo "A edição não pode ser concluida pois o campo da postagem esta vazio";
                echo "<p><a href='Perfil.php'> Perfil";
                exit;
            }

            $sql = "UPDATE postagemusuarios SET titulopost ='$tittle', postcontent ='$conteudo' ";
            $sql .= "WHERE codpost = $idpost;";

            mysqli_query($mysqli,$sql);

            if (!mysqli_query($mysqli,$sql)) {
                echo("Error na edição da postagem: " .mysqli_error($mysqli));
                exit;
            }

            if ($Globalpermiss == 1){

                header("location:indexAdm.php");
            }
            else{
            header("location:Perfil.php");
            }
            mysqli_close ($mysqli);

        }

        elseif($operacao == "Excluirpost"){
    
            include "conecta_mysql.inc";
            
            $codigopost = $_POST["postid"];

            $sql ="SELECT * FROM comentusuarios WHERE codpostcoment = $codigopost ;";
            $resu = mysqli_query($mysqli, $sql);
            $linhass = mysqli_num_rows($resu);     

            if( $linhass != 0){

                $sql ="DELETE FROM comentusuarios WHERE codpostcoment ='$codigopost'";
                mysqli_query($mysqli,$sql);

            }

            $sql ="DELETE FROM postagemusuarios WHERE codpost ='$codigopost'";
            mysqli_query($mysqli,$sql);
            if (!mysqli_query($mysqli,$sql)) {
                echo("Error ao excluir postagem: " .mysqli_error($mysqli));
                exit;
            }

            else{

                echo "Postagem excluida com exito!";
                header("refresh:1;url=perfil.php");
                exit;
            } 
            mysqli_close ($mysqli);

        }
        elseif($operacao == "comentar"){
            include "conecta_mysql.inc";

            $coment = $_POST["coment"];
            $usuarioc = $_POST["usercomentou"];
            $comentid = $_POST["idpostcomentou"];
            $iduser = $_POST["idusercomentou"];
            
            $sql ="INSERT INTO comentusuarios (idusercoment,codpostcoment,usercoment,comentario)";        
            $sql .= "VALUES ($iduser,$comentid,'$usuarioc','$coment')";
    

            if (empty($coment)){

                echo "Não é possivel realizar um comentario vazio";
                echo "<p><a href='postcoment.php?idpost=$comentid'>Retornar</a>";
                exit;
            }

            mysqli_query($mysqli,$sql);
            mysqli_close ($mysqli);

                header("location:postcoment.php?idpost=$comentid"); 
            exit;

        }
        elseif( $operacao == "editarcoment"){
            include "conecta_mysql.inc";

                $idi = $_POST["id"];
            $conten = $_POST["post"];
            $code = $_POST["passe"];

            if(empty($conten)){

                echo "Não é possivel fazer um comentario vazio";
                echo "<a href='postcoment.php?idpost=". $code."'>";
                exit;
            }
            else{

            $sql = "UPDATE comentusuarios SET comentario ='$conten' ";
            $sql .= "WHERE idcoment = $idi;";

            mysqli_query($mysqli,$sql);
            mysqli_close ($mysqli);


            header("location:postcoment.php?idpost=$code"); 
            exit;
            }

        }
        elseif($operacao == "excluircoment"){
            include "conecta_mysql.inc";
            
            $codigocoment = $_POST["postid"];
            $coder = $_POST["idcomen"];
            
            $sql ="DELETE FROM comentusuarios WHERE idcoment ='$codigocoment'";
            mysqli_query($mysqli,$sql);

            
                header("location:postcoment.php?idpost=$coder"); 
            exit;

        }
        elseif( $operacao == "curtir"){
            include "autentica.inc";
            include "conecta_mysql.inc";

            $nomeuser = $_POST["userrname"];
            $idouser = $_POST["usercod"];
            $idopost = $_POST["postid"];
            $titulopost = $_POST["titre"];
            $laik = $_POST["laiki"];
            $pt = $_POST["post"];


            $sql ="INSERT INTO curtirusuarios (iduserlike, codpostlike, userlike, curtida, titulopostlike)";        
            $sql .= "VALUES ($idouser,$idopost,'$nomeuser',$laik,'$titulopost')";
    
            mysqli_query($mysqli, $sql);
            
            if($pt == "post"){

                    $sql = "SELECT * FROM postagemusuarios WHERE codpost ='$idopost';";
                    $res = mysqli_query($mysqli,$sql);
                    $linhas = mysqli_num_rows($res);

                        for($i=0; $i < $linhas; $i++){
                            $like = mysqli_fetch_array($res);
                        }

                        $ncurtida = $laik + $like["likepost"];

                        $sql = "UPDATE postagemusuarios SET likepost ='$ncurtida' ";
                        $sql .= "WHERE codpost = $idopost;";
            
                        mysqli_query($mysqli,$sql);


                        if(isset($_POST["alter"])){
                            $nomie = $_POST["nomi"];
                            echo "Voce curtiu este post!";
                            header("refresh:1;url=alterperfil.php?usernameusuario=$nomie");
                            exit;

                        }
                        else{
                        echo "Voce curtiu este post!";
                        header("refresh:1;url=perfil.php");
                        exit;
                        }
                }
                elseif($pt == "coment"){

                    $codogu = $_POST["cudugo"];

                    $sql = "SELECT * FROM comentusuarios WHERE idcoment ='$idopost';";
                    $res = mysqli_query($mysqli,$sql);
                    $linhas = mysqli_num_rows($res);

                        for($i=0; $i < $linhas; $i++){
                            $like = mysqli_fetch_array($res);
                        }

                        $ncurtida = $laik + $like["likecoment"];

                        $sql = "UPDATE comentusuarios SET likecoment ='$ncurtida' ";
                        $sql .= "WHERE idcoment = $idopost;";
            
                        mysqli_query($mysqli,$sql);

                        echo "Voce curtiu este post!";
                        header("refresh:1;url=postcoment.php?idpost=$codogu");
                        exit;

                }

        }
        elseif( $operacao == "ncurtir"){
            include "autentica.inc";
            include "conecta_mysql.inc";

            $nomeuser = $_POST["userrname"];
            $idouser = $_POST["usercod"];
            $idopost = $_POST["postid"];
            $titulopost = $_POST["titre"];
            $laik = $_POST["laiki"];
            $pt = $_POST["post"];

            if($pt == "post"){

                    $sql = "SELECT * FROM postagemusuarios WHERE codpost ='$idopost';";
                    $res = mysqli_query($mysqli,$sql);
                    $linhas = mysqli_num_rows($res);

                        for($i=0; $i < $linhas; $i++){
                            $like = mysqli_fetch_array($res);
                        }

                        $ncurtida = $laik - $like["likepost"];

                        $sql = "UPDATE postagemusuarios SET likepost ='$ncurtida' ";
                        $sql .= "WHERE codpost = $idopost;";
            
                        mysqli_query($mysqli,$sql);

                        $sql ="DELETE FROM curtirusuarios WHERE codpostlike ='$idopost'";
                        $resul = mysqli_query($mysqli,$sql);

                        if ($resul == FALSE){
                            echo("Error ao excluir curtidas da tabela: " .mysqli_error($mysqli));
                            exit;
                        }

                        if(isset($_POST["alter"])){
                            $nomie = $_POST["nomi"];
                            echo "Voce descurtiu este post!";
                            header("refresh:1;url=alterperfil.php?usernameusuario=$nomie");
                            exit;

                        }
                        else{
                        echo "Voce descurtiu este post!";
                        header("refresh:1;url=perfil.php?operacao=$");
                        exit;
                        }
                 }
                 elseif($pt == "coment"){

                    $codogu = $_POST["cudugo"];


                    $sql = "SELECT * FROM comentusuarios WHERE idcoment ='$idopost';";
                    $res = mysqli_query($mysqli,$sql);
                    $linhas = mysqli_num_rows($res);

                        for($i=0; $i < $linhas; $i++){
                            $like = mysqli_fetch_array($res);
                        }

                        $ncurtida = $laik - $like["likecoment"];

                        $sql = "UPDATE comentusuarios SET likecoment ='$ncurtida' ";
                        $sql .= "WHERE idcoment = $idopost;";
            
                        mysqli_query($mysqli,$sql);

                        $sql ="DELETE FROM curtirusuarios WHERE codpostlike ='$idopost'";
                        $resul = mysqli_query($mysqli,$sql);

                        if ($resul == FALSE){
                            echo("Error ao excluir curtidas da tabela: " .mysqli_error($mysqli));
                            exit;
                        }

                        echo "Voce descurtiu este post!";
                        header("refresh:1;url=postcoment.php?idpost=$codogu");
                        exit;

                 }

        }
    ?>

    <html>
        <head>
        <link rel="stylesheet" href="style.css">
        <head>
    </html>