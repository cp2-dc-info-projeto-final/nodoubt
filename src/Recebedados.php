        <?php
            $username = $_POST["username"];
            $senha = $_POST["senha"];
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $email = $_POST["email"];
            $erro = 0;

            if(strlen($username) < 5){
                echo "O username deve possuir no mínimo 5 caracteres.<br>";
                $erro = 1;
                }
             if(strlen($senha) < 5){
                echo "A senha deve possuir no mínimo 5 caracteres.<br>";
                $erro = 1;
                }
             if($username == $senha){
                echo "O username e a senha devem ser diferentes.<br>";
                $erro = 1;
                }
            if(empty($nome) OR strstr($nome,' ') == FALSE){    
                echo "Favor digitar seu nome corretamente. <br>";
                $erro = 1;
                }
            if(is_numeric($idade) == FALSE){
                echo "Favor digitar sua idade corretamente.<br>";
                $erro = 1;
                }
            if(strlen($email) < 8 || strstr($email,'@') == FA
                LSE){
                echo "Favor digitar seu email corretamente. <
                br>";
                $erro = 1;
                }
                // VERIFICA SE NÃO HOUVE ERRO
             if($erro == 0) {
                echo "Todos os dados foram digitados corretamente!";
                }
        ?>