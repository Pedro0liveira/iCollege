<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagens\favicon.ico">
    <!-- imagens\favicon.ico -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        form{
            width:50%;
            text-align: center;
            margin: 135px 50px 75px 460px;
        }
    </style>
    <title>iCollege - login</title>
  </head>
<body class="text-center">
  <nav id="logo" style="background-color: blue; display: block;font-size: 25px;
    padding-top: 13px; color: white;">
        iCollege
  </nav>
<!-- ###################################################################################### -->
<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
#var_dump($dados);
if (!empty($dados['btnLogin'])) {
  var_dump($dados);
  $query_email = "SELECT idUsuario, email, senha FROM usuarios WHERE email = '".$dados['email']."' LIMIT 1";
  $result_email = $connect->prepare($query_email);
  #$result_email->bindParam(':email', $dados['email']);
  $result_email->execute();


  $row_email = $result_email->fetch(FETCH_ASSOC);
  var_dump($row_email);
  
}


?>

<!-- ###################################################################################### -->

<form class="form-signin" method="POST" action="">
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>

      <label for="inputEmail" class="sr-only">Endereço de email</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Seu email" required="" autofocus="">
      
      <label for="inputPassword" class="sr-only">Senha</label>
      <br><br>
      <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required="">
      <div class="checkbox mb-3">
      <br>
      </div>
      <button class="btn btn-lg btn-primary btn-block" name="btnLogin" type="submit" value="login">Login</button>
      <br>
      <a href="">Sair</a>
      <p class="mt-5 mb-3 text-muted">@iCollege</p>
    </form>
</body>
</html>