# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Se cadastrar.
 - [CDU 02](#CDU-02): Efetuar login.
 - [CDU 03](#CDU-03): Logout.
 - [CDU 04](#CDU-04): Editar dados.
 - [CDU 05](#CDU-05): Busca


## Lista dos Atores

 - Usuario
 - Administrador 

## Diagrama de Casos de Uso
![Diagrama de Casos de Uso](https://user-images.githubusercontent.com/82223070/143919962-12685e72-afef-4290-9a3d-1167b32ca1ee.jpeg)

![Diagrama de Casos de Uso](diagrama-de-banco-de-dados.jpg)

## Descrição dos Casos de Uso

### CDU 01

Se cadastrar.

**Fluxo Principal**

1. O sistema apresenta um formulário com os campos do usuário a ser inserido.
2. O usuário insere nome de usuário, nome, senha, idade, email.
3. O sistema armazena o cadastro e informa ao usuário que a operação foi realizada.
4. O sistema retorna ao início do caso de uso para login do novo usuário. 

**Fluxo Alternativo A**

1. O sistema apresenta campos para o usuário se cadastrar 
2. O usuário insere nome de usuário, senha, e-mail, idade e Nome
3. O sistema indica erro e em algum dos campos e lhe retorna a tela de cadastro 
4. O usuário retorna a página de cadastro e insere os campos novamente, conforme as indicações das mensagens de erro.
5. O sistema armazena as informações e indica ao usuário que os dados foram cadastrados, e o retorna para a página de login

### CDU 02

Efetuar login

**Fluxo Principal**

1. O sistema apresenta um formulário com os campos login e senha.
2. O usuário insere seu login e sua senha e clica no botão “Entrar”.
3. O sistema valida o login e a senha do usuário.
4. O sistema encaminha o usuário para sua tela inicial.

**Fluxo Alternativo A**

1. O sistema apresenta um formulário com os campos login e senha.
2. O usuário insere seu login e sua senha e clica no botão “Entrar”.
3. O sistema informa que o Email e/ou a senha não coincidem.
4. O usuário corrige as informações de login e senha e clica no botão “Entrar”.
5. O sistema encaminha o usuário para sua tela inicial.


### CDU 03

Logout 

**Fluxo Principal**

1. O usuário deve estar logado.
2. A pessoa que esta logada, na página de seu perfil, clica em Logout.
3. O sistema exclui as informações de login e então redireciona a página de login


### CDU 04

Editar dados

**Fluxo Principal**

1. O usuário precisa estar logado clica no botão de editar dados.
2. O usuário edita as informações que deseja mudar, não mexe nas que não deseja e clica em enviar.
3. O sistema informa que as informações foram salvas.
4. O usuário retorna ao perfil e confere as informações alteradas.

**Fluxo Alternativo A**

1. O usuário clica em editar dados.
2. O usuário não altera nenhuma informação dos campos e clica em enviar.
3. O sistema informa que as informações foram salvas.
4. O usuário retona ao perfil com as mesmas informações.

**Fluxo Alternativo B**

1. O usuário clica em editar dados e altera as informaçõees que deseja.
2. O sistema informa erros em algum dos campos.
3. O usuario retorna a página do perfil com as informações não alteradas.

**Fluxo Alternativo C**

1. O usuario clica em editar dados.
1. O usuário altera a permissão de 1 para 0.
2. O usário retorna ao perfil mas sem a permissão de administrador.


### CDU 05

Busca

**Fluxo Principal**

1. O usuário entra no site e visualiza o perfil.
2. O usuário se direciona até a barra de busca e digita o ursername do usuario que deseja encontrar.
3. O sistema mostra os resultados dos perfis dos usuarios encontrados.

**Fluxo Alternativo A**

1. O usuário entra no site e visualiza o perfil.
2. O usuário se direciona até a barra de busca e digita o ursername que deseja encontrar.
3. O sistema exibe uma mensagem de "usuário não encontrado".

**Fluxo Alternativo B**

1. O usuário precisa estar logado.
2. O usuário se direciona até a barra de busca e digita o proprio username.
3. O sistema exibe os resultados encontrados.
