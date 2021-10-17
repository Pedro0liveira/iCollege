<?php

include 'db_connect.php';
//REMOVER CADASTRO DE UM DETERMINADO ID
if(!empty($_GET['id'])) {
 $id = $_REQUEST['id'];
}



if (!empty($_POST)) {

  $id = $_POST['idUsuario'];
//exclusão do usuario a partir do ID
  $sql = "delete from usuarios where idUsuario = '$id' ";

  if ($connect->query($sql) === TRUE) {
    header("Location: verificacao.php");
  } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
  }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="imagens\favicon.ico">
        <title> iCollege - Remoção de Cadastro </title>
        
        <!--<link rel="stylesheet" href="estilos.css">-->
</head>
<body>

  <h1> Excluir</h1>

  <span><b> Deseja EXCLUIR o cadastro de ID = <?php echo $id ?></b></span>

  <form action="remove.php" method="post">
  <input type="hidden" id="idUsuario" name="idUsuario" value='<?php echo $id ?>'><br>

  <input type="submit" value="SIM">
  <a href="verificacao.php">Não</a>

  </form>

</body>
</html>
