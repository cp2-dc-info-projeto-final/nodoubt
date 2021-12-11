<?php
    include "autentica.inc";
    include "conecta_mysql.inc";
    $operacao = $_POST["operacao"];

?>
<html>
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="estilização.css">

        <title>Editar post</title>

    </head>
        <body> 
            <div id="login">
            <div class="card">
            <div class="card-header">

            <?php if( $operacao == "editar"){
                    $codposter = $_POST["postid"];
                $sql = "SELECT * FROM postagemusuarios WHERE codpost = '$codposter';";
                $res = mysqli_query($mysqli,$sql);
                $linhas = mysqli_num_rows($res);
                for($i=0; $i < $linhas; $i++){
                $post = mysqli_fetch_array($res);
                }

                ?>

                <h2>Editar postagem</h2>

            </div>

            <div class="card-content">
                    <div class="card-content-area">

             <form action="Recebedados.php" method="POST">
                <input type="hidden" name="operacao" value="Editarpost">                       
                <input type="hidden" name="id" size="25" value="<?php echo $codposter ?>">
                <p>TItulo: <input type="text" name="titulo" size="25" value="<?php echo $post['titulopost']?>">
                <p>Post: <input type="text" name="post" size="25" value="<?php echo $post['postcontent']?>"><p>

                <div class="card-footer">

                    <input type="submit" value="editar!" class="submit">
                </div>

                </form>
                
                <div class="card-header">

                <h5><a href="Perfil.php">Voltar</a>

                </div>

                <?php
            }
            elseif($operacao == "editarcoment"){

                $codcoment = $_POST["postid"];
                $codigo = $_POST["idcomen"];
                $sql = "SELECT * FROM comentusuarios WHERE idcoment = '$codcoment';";
                $res = mysqli_query($mysqli,$sql);
                $linhas = mysqli_num_rows($res);
                for($i=0; $i < $linhas; $i++){
                $coment = mysqli_fetch_array($res);
                }

                ?>
                
                <h2>Editar comentário</h2>

            </div>

            <div class="card-content">
                    <div class="card-content-area">

             <form action="Recebedados.php" method="POST">
                <input type="hidden" name="operacao" value="editarcoment">                       
                <input type="hidden" name="id" size="25" value="<?php echo $codcoment ?>">
                <input type="hidden" name="passe" size="25" value="<?php echo $codigo ?>">
                <p>Resposta: <input type="text" name="post" size="25" value="<?php echo $coment['comentario']?>"><p>

                <div class="card-footer">

                    <input type="submit" value="editar!" class="submit">
                </div>

                </form>

                <div class="card-header">

                <h5><?php echo"<a href='postcoment.php?idpost=". $codigo."'>Voltar</a>";
                }
                    ?>
                </div>

            </div>

        </div>

    </body>
</html>
