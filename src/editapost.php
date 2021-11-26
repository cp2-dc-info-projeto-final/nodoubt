<?php
    include "autentica.inc";
    include "conecta_mysql.inc";
    $codposter = $_POST["postid"];
    $sql = "SELECT * FROM postagemusuarios WHERE codpost = '$codposter';";
    $res = mysqli_query($mysqli,$sql);
    $linhas = mysqli_num_rows($res);
    for($i=0; $i < $linhas; $i++){
    $post = mysqli_fetch_array($res);
    }
?>
<html>
    <head>
</head>
<body>

    <form action="Recebedados.php" method="POST">

    <input type="hidden" name="operacao" value="Editarpost">                       
    <input type="hidden" name="id" size="25" value="<?php echo $codposter ?>">
    <p><input type="text" name="titulo" size="25" value="<?php echo $post['titulopost']?>">
    <p><input type="text" name="post" size="200" value="<?php echo $post['postcontent']?>"><p>

        <input type="submit" value="editar!" class="submit">
    </form>

</body>
</html>
