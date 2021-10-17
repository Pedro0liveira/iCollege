<?php

include 'db_connect.php';

//CRIAR NOVO USUARIO
if (!empty($_POST)) {

  $nome = $_POST['fnome'];
  $email = $_POST['femail'];
  $senha = $_POST['fsenha'];
  $telefone = $_POST['ftel'];
  $localizacao = $_POST['floc'];
// inserindo os dados do form no banco de dados
  $sql = "INSERT INTO usuarios(nome, email, senha, telefone, localizacao) VALUES ('".$nome."', '".$email."', MD5('".$senha."'), '".$telefone."', '".$localizacao."')";

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
        <title> iCollege - Cadastro </title>
        
        <!--<link rel="stylesheet" href="estilos.css">-->
</head>
<body>

  <h1> Cadastro</h1>

  <form action="create.php" method="post">

  <label>ID:</label>
  <span><b> Será gerado automaticamente</b></span><br/><br/>

  <label for="fnome">Nome:</label><br>
  <input type="text" id="fnome" name="fnome"><br>

  <label for="femail">E-mail:</label><br>
  <input type="email" id="femail" name="femail"><br>

  <label for="fsenha">Senha:</label><br>
  <input type="password" id="fsenha" name="fsenha"><br>

  <label for="ftel">Telefone:</label><br>
  <input type="tel" id="ftel" name="ftel"><br><br>

  <label for="floc">Localização:</label><br>
  <input type="text" id="floc" name="floc"><br><br>

  <input type="submit" value="Gravar">

  </form>

</body>
</html>
