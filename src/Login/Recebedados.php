        <?php
            $username = $_POST["username"];
            $senha = $_POST["senha"];
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $email = $_POST["email"];
            $erro = 0;

            if(strlen($username) < 5){
                
                echo "O campo: Nome de Usuario deve possuir no mínimo 5 caracteres.<br>";
                $erro = 1;
                }
             if(strlen($senha) < 5){
                echo "O campo: Senha deve possuir no mínimo 5 caracteres.<br>";
                $erro = 1;
                }
             if($username == $senha){
                echo "O campo: Nome de Usuario e Senha devem ser diferentes.<br>";
                $erro = 1;
                }
            if(empty($nome) OR strstr($nome,' ') == FALSE){    
                echo "O campo: Nome esta vazio ou foi inserido de forma incorreta. <br>";
                $erro = 1;
                }
            if(is_numeric($idade) == FALSE){
                echo "O campo: Idade deve possui somente numeros.<br>";
                $erro = 1;
                }
            if(strlen($email) < 8 || strstr($email,'@') == FALSE){
                echo "O campo: E-mail não foi digitado corretamente.<br>";
                $erro = 1;
                }
                // VERIFICA SE NÃO HOUVE ERRO
             if($erro == 0) {
                echo "Todos os dados foram digitados corretamente!<br>";
                echo "Cadastro completo.";
                    echo "<p><a href='login.html'>Retornar ao login</a></p>";
                    exit;

                }

               if($erro == 1) {
                    echo"<br>Cadastro incompleto.<br>";
                    echo "<p><a href='Cadastro.html'>Cadastro</a></p>";
                    exit;
               }
        ?>