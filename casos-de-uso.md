# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Se cadastrar.
 - [CDU 02](#CDU-02): Efetuar login.
 - [CDU 03](#CDU-03): Logout.
 - [CDU 04](#CDU-04): Editar dados.
 - [CDU 05](#CDU-05): Excluir dados.
 - [CDU 06](#CDU-06): Busca.
 - [CDU 07](#CDU-07): Fazer postagem.
 - [CDU 08](#CDU-08): Editar postagem.
 - [CDU 09](#CDU-09): Excluir postagem.
 - [CDU 10](#CDU-09): Comentar postagem.
 - [CDU 11](#CDU-09): Editar comentario.
 - [CDU 12](#CDU-09): Excluir comentario.
 - [CDU 13](#CDU-09): Curtir posttagens.
 - [CDU 14](#CDU-09): Curtir comentarios.
 - [CDU 15](#CDU-09): Descurtir posttagens.
 - [CDU 16](#CDU-09): Descurtir comentarios.
 


## Lista dos Atores
 - Usuario
 - Administrador 

## Diagrama de![diagrama casos de uso]

![Diagrama de Casos de Uso](https://user-images.githubusercontent.com/55743181/145641787-75e6173f-d31c-4657-8699-67df6e75aff2.jpg)


## Descrição dos Casos de Uso

### CDU 01

Se cadastrar.

**Fluxo Principal**

1. O sistema apresenta um formulário com os campos do usuário a ser inserido.
2. O usuário insere nome de usuário, nome, senha, data de nascimento, email.
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

1. O sistema apresenta um formulário com os campos Email e senha.
2. O usuário insere seu email e sua senha e clica no botão “Entrar”.
3. O sistema valida o login e a senha do usuário.
4. O sistema encaminha o usuário para sua tela inicial.

**Fluxo Alternativo A**

1. O sistema apresenta um formulário com os campos login e senha.
2. O usuário insere seu login e sua senha e clica no botão “Entrar”.
3. O sistema informa que o Email e/ou a senha não coincidem.
4. O usuário corrige as informações de login e senha e clica no botão “Entrar”.
5. O sistema encaminha o usuário para sua tela inicial.

**Fluxo Alternativo B**

1. O sistema apresenta um formulário com os campos login e senha.
2. O usuário insere seu login e sua senha e clica no botão “Entrar”.
3. O sistema informa que a senha esta incorreta.
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

excluir dados

**Fluxo Principal**

1. O usuário precisa estar logado clica no botão de editar dados.
2. O usuário ao invez de editar alguma das informações, clica em excluir, logo abaixo de editar.
3. O sistema informa que as informações foram excluidas.
4. O usuário retorna a pagina de login, com as informações excluidas.

### CDU 06

Busca

**Fluxo Principal**

1. O usuário entra site e ve o icone da barra de busca.
2. O usuário se direciona até a barra de busca e digita o ursername do usuario ou o topico que deseja encontrar.
3. O sistema mostra os resultados dos perfis dos usuarios e os titulos dos posts encontrados com o que foi digitado.
4. O usuario clica no destino que deseja e é direcionado para o post, ou para o perfil do usuario.

**Fluxo Alternativo A**

1. O usuário entra site e ve o icone da barra de busca.
2. O usuário se direciona até a barra de busca nao digita nada.
3. O sistema exibe uma mensagem dizendo "Nenhum resultado para sua busca encontrado :(".

**Fluxo Alternativo B**

1. O usuário entra site e ve o icone da barra de busca.
2. O usuário se direciona até a barra de busca e digita um caracter que acha que esta presente no nome de usuario ou no post que deseja.
3. O sistema exibe todos os perfil e posts com os caracteres digitado..


### CDU 07

Fazer postagens

**Fluxo Principal**

1. No perfil, o usuario logado é apresentado a um campo com duas caixas de texto, uma para titulo, e outra para a postagem.
2. O usuário insere as informações que deseja no titulo e no campo postagem, entao clica em postar.
3. O sistema atualiza a pagina, agora onde havia a mensagem "este usuario não possui postagens" se encontra um campo com o nome do usuario, o titulo e a mensagemm da postagem.

**Fluxo Alternativo A**

1. No perfil, o usuario logado é apresentado a um campo com duas caixas de texto, uma para titulo, e outra para a postagem.
2. O usuário não insere nada e clica em postar.
3. O sistema exibe uma mensagem de erro dizendo que sua postagem esta vazia.
4. O usuario retorna ao perfil, sem nenhuma postagem.

**Fluxo Alternativo B**

1. No perfil, o usuario logado é apresentado a um campo com duas caixas de texto, uma para titulo, e outra para a postagem.
2. O usuário insere apenas o campo postagem e clica em postar.
3. O sistema atualiza a pagina com a postagem, porém, onde ficaria o titulo, aparece a mensagen 'Particular'.

**Fluxo Alternativo C**

1. No perfil, o usuario logado é apresentado a um campo com duas caixas de texto, uma para titulo, e outra para a postagem.
2. O usuário insere apenas o campo titulo e clica em postar.
3. O sistema exibe uma mensagem de erro dizendo que não é possivel criar uma postagem sem mensagem.
4. O usuario retorna a pagina de Perfil, sem nenhuma postagem.

### CDU 08

editar postagem

**Fluxo Principal**

1. O usuario, em sua timeline, vê a postagem que deseja mudar e clica em editar.
2. O sistema o direciona para outra pagina com dois campos onde estão suas informações da postagen.
3. O usuario edita o titulo e/ou a mensagem da postagem, então clica em editar.
4. o sistema armazena as informações novas, atualiza no banco, então o direciona de volta ao perfil, onde é possivel ver a postagem com as novas informações.

**Fluxo Alternativo A**

1. O usuario, em sua timeline, vê a postagem que deseja mudar e clica em editar.
2. O sistema o direciona para outra pagina com dois campos onde estão suas informações da postagen.
3. O usuario edita o titulo da postagem, o deixando vazio, então clica em editar.
4. o sistema o direciona de volta ao perfil, agora com o titulo da postagem escrito 'Particular'.

**Fluxo Alternativo B**

1. O usuario, em sua timeline, vê a postagem que deseja mudar e clica em editar.
2. O sistema o direciona para outra pagina com dois campos onde estão suas informações da postagen.
3. O usuario edita a mensagem da postagem, a deixando vazia, então clica em editar.
4. o sistema exibe uma mensagem de erro, dizendo que não é possivel efetuar a postagem sem uma mensagem.
5. O usuario retorna ao perfil, com as informações da postagem não alteradas.

**Fluxo Alternativo C**

1. O usuario, em sua timeline, vê a postagem que deseja mudar e clica em editar.
2. O sistema o direciona para outra pagina com dois campos onde estão suas informações da postagen.
3. O usuario edita O titulo e a mensagem da postagem, as deixando vazias, então clica em editar.
4. o sistema exibe uma mensagem de erro, dizendo que não é possivel efetuar a postagem sem uma mensagem.
5. O usuario retorna ao perfil, com as informações da postagem não alteradas.

### CDU 09

Exluir postagem

**Fluxo Principal**

1. O usuario, em sua timeline, vê a postagem que deseja apagar e clica em excluir.
2. O sistema atualiza a pagina, agora com aquela postagem excluida do sistema.

### CDU 10

comentar postagem

**Fluxo Principal**

1. O usuario, ve um post e deseja comenta-lo.
2. O usuario clica no icone de converna dentro do balão da postagem
3. o sistema o direciona para uma pagina, onde é possivel ver outros comentarios, se houve, e onde há um local para comentar.
4. O usuario digita o que deseja no campo de comentario, e então envia.
5. o sistema atualliza, agora mostranddo o comentario que fez, com o titulo como "Re: (Mensagem do titulo que esta comentando)".

**Fluxo Alternativo A**

1. O usuario, ve um post e deseja comenta-lo.
2. O usuario clica no icone de converna dentro do balão da postagem
3. o sistema o direciona para uma pagina, onde é possivel ver outros comentarios, se houve, e onde há um local para comentar.
4. O usuario não digita nada no campo de comentario, e então envia.
5. o sistema exibe uma mensagem indicando que não é possivel escrever um comentario vazio".

### CDU 11

Editar comentario

**Fluxo Principal**

1. O usuario, ve seu comentario em uma postagem e deseja edita-lo.
2. O usuario clica no icone de lapis dentro do balão do comentario.
3. o sistema o direciona para uma pagina, onde há um campo preenchido com texto do comentario feito.
4. O usuario digita o que deseja no campo de comentario, e então envia.
5. o sistema atualliza, agora mostranddo o comentario agora editado, com o titulo como "Re: (Mensagem do titulo que esta comentando)".

**Fluxo Alternativo A**

1. O usuario, ve seu comentario em uma postagem e deseja edita-lo.
2. O usuario clica no icone de lapis dentro do balão do comentario.
3. o sistema o direciona para uma pagina, onde há um campo preenchido com texto do comentario feito.
4. O usuario não digita nada no campo de comentario, e então envia.
5. o sistema exibe uma mensagem indicando que não é possivel escrever um comentario vazio".

### CDU 12

Editar comentario

**Fluxo Principal**

1. O usuario, ve prorprio comentario em uma postagem e deseja exclui-lo.
2. O usuario clica no icone de lixeira dentro do balão do comentario.
3. o sistema exibe uma mensagem dizendo quw o comentario foi excluido, e então retorna o usuario para a pagina da postagem após 2 segundos.

### CDU 13

curtir postagem

**Fluxo Principal**

1. O usuario, ve uma postagem e deseja curtir.
2. O usuario clica no icone de coração, dentro do balão da postagem.
3. O sistema atualiza a pagina, agora com o simbolo de coração diferentte, indicando que a postagem foi curtida.

### CDU 14

descurtir postagem

**Fluxo Principal**

1. O usuario, ve uma postagem que curtiu e deseja descurtir.
2. O usuario clica no icone de coração, dentro do balão da postagem.
3. O sistema atualiza a pagina, agora com o simbolo de coração diferente, indicando que a postagem foi descurtida.

### CDU 15

curtir comentario

**Fluxo Principal**

1. O usuario, ve um comentario e deseja curtir.
2. O usuario clica no icone de coração, dentro do balão do comentario.
3. O sistema atualiza a pagina, agora com o simbolo de coração diferentte, indicando que o comentario foi curtido.

### CDU 16

descurtir comentario

**Fluxo Principal**

1. O usuario, ve um comentario que curtiu e deseja descurtir.
2. O usuario clica no icone de coração, dentro do balão do comentario.
3. O sistema atualiza a pagina, agora com o simbolo de coração diferente, indicando que o comentario foi descurtido.
