# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Efetuar login.
 - [CDU 02](#CDU-02): Se cadastrar.

## Lista dos Atores

 - Usuario

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagrama-de-banco-de-dados.jpg)

## Descrição dos Casos de Uso

### CDU 01

Efetuar login

**Fluxo Principal**

1. O sistema apresenta um formulário com os campos login e senha.
2. O usuário insere seu login e sua senha e clica no botão “Entrar”.
3. O sistema valida o login e a senha do usuário.
4. O sistema encaminha o usuário para sua tela inicial.

**Fluxo Alternativo A**

1. O sistema apresenta um formulário com os campos login e senha.
2. O usuário insere seu login e sua senha e clica no botão “Entrar”.
3. O sistema informa que o login e a senha não coincidem.
4. O usuário corrige as informações de login e senha e clica no botão “Entrar”.
5. O sistema encaminha o usuário para sua tela inicial.


**Fluxo Alternativo B**

1. O sistema apresenta um formulário com os campos login e senha.
2. O usuário clica no botão “Não possuo cadastro”.
3. O sistema abre uma solicitação de criação de conta.
4. O sistema informa ao usuário que a solicitação de criação de conta foi feita e
está em análise.


### CDU 02

Se cadastrar.

**Fluxo Principal**

1. O sistema apresenta um formulário com os campos do usuário a ser inserido.
2. O usuário insere nome de usuário, nome, senha, idade, email.
3. O sistema armazena o cadastro e informa ao usuário que a operação foi realizada.
4. O sistema retorna ao início do caso de uso para inclusão de novo usuário. 

**Fluxo Alternativo A**

1. O sistema apresenta um formulário com os campos do usuário ser inserido
2. O usuário insere nome de usuário, nome, senha, idade, email.
3. O sistema informa que o campo data de nascimento não é válido.
4. O usuário corrige a data de nascimento e clica no botão “Inserir”. 
5. O sistema armazena o cadastro e informa ao usuário que a operação foi realizada.

### CDU 03

Duis nec orci quis velit faucibus hendrerit tempus vel libero.

**Fluxo Principal**

1. Praesent interdum lectus sit amet augue tincidunt imperdiet.
2. Duis ac dolor vel nisi imperdiet vehicula et non sem.
3. Nunc imperdiet tortor consequat, lobortis purus non, interdum risus.

**Fluxo Alternativo A**

1. Aliquam efficitur arcu ac fermentum egestas.
2. Pellentesque ac diam vitae erat bibendum hendrerit.
3. Mauris sed purus sit amet lectus efficitur placerat et eu diam.
4. Aenean ullamcorper tellus quis nibh porttitor congue.
5. Phasellus laoreet erat eget condimentum dictum.
