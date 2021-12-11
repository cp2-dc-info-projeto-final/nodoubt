# Manual do Usuário










**Lista das Funcionalidades:**

 - [Funcionalidade A](#Cadastro)
 - [Funcionalidade B](#Login)
 - [Funcionalidade C](#Editar-dados)
 - [Funcionalidade D](#Postar)
 - [Funcionalidade E](#Busca-de-usuário-e-posts)
 - [Funcionalidade F](#Timeline)
 - [Funcionalidade G](#Comentar)
 - [Funcionalidade H](#Curtir-e-descurtir-posts-e-comentários)
 - [Funcionalidade I](#Editar-posts-e-comentários)
 - [Funcionalidade J](#Excluir-posts-e-comentários)
 - [Funcionalidade K](#Controle-de-acessos)
 - [Funcionalidade L](#Editar-Usuário)
 - [Funcionalidade M](#Conceder-e-retirar-privilégios-de-administrador)
 - [Funcionalidade N](#logout)

## Funcionalidade A

Ao entrar no site o usuario se depara com uma tela composta por uma barra de navegação no topo, uma imagem ao centro, e no fim uma grande área contendo informações dos criadores.
Na navbar, há alguns botões visiveis, sendo o primeiro o nome do site "No doubt", que lhe retorna para essa mesama pagina, em seguida, um botão escrito "Sobre nóe", onde você é levado para uma pagina, com informações sobre o objetivo do projeto, seus criaddores e etc, em sequencia um botão escrito "Fale conosco" que lhe direciona para a área no fim da pagina, depois é possivel ver um campo onde esta escrito "Buscar...", sendo ele a barra de busca, e por fim mais ao canto direito, um botão escrito "Login" com um icone de entrar.

- foto do index

O usuario, após cliclar, é direcionado para uma pagina de login, onde podem ser prenchidos dois campos e grande botão escrito "login", porém, supondo que seja a primeira vez que o usuario entra no site, essa área não sera usada agora, e caso seja, exibira mensagens de erro, que indicam que o usuario ainda não tem um perfil.
Então, mais abaixo, é possivel ver uma indicação no fim da pagina, instruindo quem não possui conta ainda, para ir a tela de criação de usuario

- foto do login
- foto da tela de cadastro

então,já nessa tela, o usuario escreve as informações requisitadas, sendo elas: o nickname(O nome que o usuario usará no site), dois campos de senha (um para criação e outro para confirmação), nome do usuario (onde ficara o nome padra do usuario que esta se cadastrando), a data de nascimento (numerica e com barras de divisão) e o email do usuario para caso seja necessario um futuro contato.
Após a inscrição, o sistema confirmará as informações digitadas para testar se foram digitadas corretamente. Se foram, o usuario poderá retornar a pagina de login, caso contrario, aparecerão mensagens de erro auto-explicativas indicando o que foi inserido errado, então o usuario é indicado de volta a tela de criação de usuario, porém os campos ja inscrito não serâo apagados( com exceção da senha e a confirmação), sendo possivel edita-las e fazer outra tentativa de cadastro.

### mensagens de erro possiveis:

- [erro_cadastro]:
- [erro_A]:
- [erro_A]:
- [erro_A]:
- [erro_A]:
- [erro_A]:
- [erro_A]:
- [erro_A]:
- [erro_A]:
- [erro_A]:
- [erro_A]:
- [erro_A]:
- [erro_A]:
- [erro_A]:

## Funcionalidade B

Caso ja tenha feito o cadastro, o usuario virá para a tela de login, onde é possvei ver dois campos, um para o email, e outro para a senha.

- foto da pagina de login

O usuario já cadastrado só precisa escrever o mesmo email e as senhas utilizadas na inscrição e clicar em entrar, então, o sistema confirma se as informações condizem com as salvas no cadastro, e se condizerem, o usuario é direcionado a pagina do site que mostra o perfil do usuario.

- foto do perfil de um usuario com informações borradas

 Caso contrario, o sistema exibirá mensagens de erro, indicando quais campos não condizem com as indormações salvas, sendo elas "email invalido", "senha invalida", ambos ou caso o usuario tente acessar site via link, surgirá "Você não fez login" e as duas mensagens possiveis ja escritas aqui.

 - foto das mensagens de erro

## Funcionalidade C

Após o usuario fazer login, ja é possivel umas das partes principais do site, a pagina do perfil.

- foto do perfil de um usuario exemplo

Nessa pagina, é possivel ver a area onde ficam as informações do usuario em uma area mais a esquerda, junto a uma foto temporaria e alguns botões que serão explicados futuramente.

- foto da area das informações do usuario no perfil do usuario de exemplo

logo abaixo na ultima informaçao do usuario, é possivel ver um botão escrito "editar dados", apartir dele, o usuario é redirecionado para uma pagina muito semelhante a de cadastro, onde é possivel ver diversos campos alteraveis, com informações do usuario (com exceção da senha).

- foto da area de edição

a partir daqui, caso o usuario queira, é possivel editar as informações antes cadastradas pelo mesmo, tendo abaixo desses campos, um botão indicando "editar" para enviar as mudanças feitas ao sistema, assim, caso não haja nenhum erro no prenchimento desses campos, o sistema guardará as informações alteradas e atualizará no banco, assim alterando as informações do usuario. Após isso, é mostrado uma mensagem na tela, indicando que os dados foram atualizados, podendo levar o usuario de volta ao perfil

- foto da tela de edição apos enviar alterações

Caso o usuario deseje alterar a senha, é possivel ver na mesma tela onde estão as informações alteraveis do usuario, logo abaixo do botão de editar, um botão menor, escrito "editar senha". Onde, após ser clicado, o usuario é redirecionado para outra pagina, com 3 campos: um sendo para escrever novamente a sua senha atual, o segundo sendo para escrever a nova senha e o terceiro para escrever novamente a nova senha para que sejam confirmadas. Após escrever as informações, o usuario clica no botão escrito enviar, e então, caso o sistema confirme essas informações, é indicado a mesma messagem de que os dados foram atualizados corretamente, podendo agora retornar ao perfil

- foto do botão

- foto dos campos

## Funcionalidade D

De volta ao perfil do usuario, mais ao centro superior da pagina é possivel ver uma grande area, com dois campos de tamanhos relativos, um para Titulo e outro para postagem.

- foto da area da postagem

Nesses campos é onde o usuario fará as postagens, sendo o primeiro, o titulo, onde devera ir o titulo da sua duvida, tendo um limite de 30 caracteres, é onde ficara um resumo, ou o topico principal da sua postagem, o assunto que ela abrange, ou uma frase que descreva a situação, caso não preenchido esse campo, o titulo ira ser inserido automaticamente como "particular".
No segundo campo, é a onde devera ir a postagem do usuario, onde o usuario escreve sua duvida ou o que deseja, com um limite de 350 caracteres. Caso não seja prenchido, o sistema indicará um erro, dizendo que não é possivel fazer um post vazio.

- mensagem de erro de campo vazio

Se todos os campos forem preenchidos corretamente, a pagina do perfil atualizará, e um pouco abaixo da area de criação de postagem, será possivel ver o post feito pelo usuario, com sua foto, o titulo mais acima e abaixo o conteudo da postagem.
Abaixo a alguns botões que serão comentados futuramente.

- Foto de uma postagem

## Funcionalidade E

Na barra de navegação no topo da pagina, onde ja foi comentado que havia uma barra de busca, é possivel escrever nela.

- Foto da barra

Nela, o usuario, caso conheça outros usuarios do site, pode tentar digitar o nickname desses usuarios, e ao clicar no simbolo de lupa ainda na barra de busca, o mesmo será direcionado a outra pagina, onde o sistema indicara se algum perfil com o que foi inserido foi encontrado, e ainda se o que foi digitado é encontrado em algum titulo de postagem.
Caso encontre ammbos, mostrará primeiro a quantidade de postagens encontradas, exibindo em seguida o titulo das postagens encontradas e o nome do usuario que postou em baixo, ambas as inscrições clicaveis, direcionando o usuario para a pagina dessa postagem ou o perfil do usuario respectivamente.
Abaixo das postagens encontradas, é indicado a quantidade de usuarios encontrados, abaixo exibindo os nicknames e fotos cinzas para sinalizar um perfil. os mesmos sendo clicaveis, então sendo direcionado ao perfil do usuario com o nickname encontrado.

- foto de uma busca

caso não encontre alguma das duas opções, sera exibido uma mensagem de que não foi encontrado nenhum perfil ou postagem e enr

## Funcionalidade F
## Funcionalidade G
## Funcionalidade H
## Funcionalidade I
## Funcionalidade J
## Funcionalidade K
## Funcionalidade L
## Funcionalidade M
