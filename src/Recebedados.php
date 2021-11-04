<?php 

    function Teste_form($non1, $sen, $non2, $id, $eml, $erro, $op){

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

            if ($erro = 0)
                include "conecta_mysql.inc";
                $sql ="SELECT * FROM cadastrousuarios WHERE emailusuario ='$eml';";
                $res = mysqli_query($mysqli, $sql);
        
                    if(mysqli_num_rows($res) = 1){
                    echo "Email já cadastrado!";
                    $erro =1
                }
                mysqli_close ($mysqli);   
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

            $erro = Teste_form($username, $senha, $nome, $idade, $email, $erro);
            
            if($erro == 0) {
                $sql ="INSERT INTO cadastrousuarios (usernameusuario,senhausuario,nomeusuario,idadeusuario,emailusuario)";        
                $sql .= "VALUES ('$username','$senha','$nome',$idade,'$email')";
        
                mysqli_query($mysqli,$sql);
                mysqli_close ($mysqli);
        
                echo "Todos os dados foram digitados corretamente!<br>";
                echo "Cadastro completo.";
                
        
                echo "<p><a href='login.html'>Retornar ao login</a></p>";
                exit;
        
             }

             if($erro == 1) {
                echo "<p><a href='Cadastro.html'>Cadastro</a></p>";
                exit;
            }
             
        }
            
         elseif($operacao == "atualizar"){
            include "conecta_mysql.inc";

                $emailusuario = $_POST["emailusuario"];
                $username = $_POST["username"];
                $senha = $_POST["senha"];
                $nome = $_POST["nome"];
                $idade = $_POST["idade"];
                $usuario = $_POST["email"];
                $erro = 0;

                $erro = Teste_form($username, $senha, $nome, $idade, $usuario, $erro);

                if($erro == 0) {
                    $sql = "UPDATE cadastrousuarios SET usernameusuario ='$username', senhausuario ='$senha',";
                    $sql .= "nomeusuario = '$nome', idadeusuario = $idade, emailusuario = '$usuario' ";
                    $sql .= "WHERE emailusuario = '$emailusuario';";

                    
                    mysqli_query($mysqli,$sql);
                    if (!mysqli_query($mysqli,$sql)) {
                        echo("Error description: " .mysqli_error($mysqli));
                    }

                    mysqli_close ($mysqli);

                    echo "<br>Os dados foram atualizados com sucesso!";
                    echo "<br><a href='Index.php'>Página Inicial</a>";
                    exit;
                }    

                if($erro == 1) {


                    echo "<br><a href='Index.php'>Página Inicial</a>";
                    exit;
                }

            }    
    ?>