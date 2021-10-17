<?php

include 'db_connect.php';
//ALTERANDO CADASTRO
if(!empty($_GET['id'])) {
 $id = $_REQUEST['id'];
}

if (empty($_POST)){ 

    $sql = "SELECT * FROM usuarios WHERE idsuario = $id";
    $result = $connect->query($sql);
    //$row = $result -> fetch_assoc(); //ERRO A SER ESTUDADO!!!     $row = $result->fetch_assoc();
    $nome = $_POST['nome'];
    $email = $_POST['femail'];
    $senha = $_POST['fsenha'];
    $telefone = $_POST['ftel'];
    $localizacao = $_POST['floc'];
  
    
}elseif (!empty($_POST)) {

  $nome = $_POST['fnome'];
  $email = $_POST['femail'];
  $senha = $_POST['fsenha'];
  $telefone = $_POST['ftel'];
  $localizacao = $_POST['floc'];


  $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = MD5('$senha'), telefone = '$telefone', localizacao = '$localizacao' WHERE idUsuario = $id";

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
        <title> iCollege - Alteração de Cadastro </title>
        
        <!--<link rel="stylesheet" href="estilos.css">-->
    </head>
<body>

  <h1> Editar Registro </h1>

  <form action="update.php?id=<?php echo $id?>" method="post"> 

  <label>ID:</label>
  <span><b><?php echo $id?></b></span><br/><br/>

  <label for="fnome">Nome:</label><br>
  <input type="text" id="fnome" name="fnome" value='<?php echo $nome?>'><br> 

  <label for="femail">E-mail:</label><br>
  <input type="email" id="femail" name="femail" value='<?php echo $email?>'><br> 

  <label for="fsenha">Senha:</label><br>
  <input type="password" id="fsenha" name="fsenha" value='<?php echo $senha?>'><br> 
  <label for="ftel">Telefone:</label><br>
  <input type="tel" id="ftel" name="ftel" value='<?php echo $telefone?>'><br> 

  <label for="floc">Localização:</label><br>
  <input type="text" id="floc" name="floc" value='<?php echo $localizacao?>'><br><br> 


  <input type="submit" value="Gravar"/>

  </form>

</body>
</html>

<!-- 
  <label for="fnome">Nome:</label><br>
  <input type="text" id="fnome" name="fnome" value='<>'><br>  (bloco php)php echo $nome  (Fechamento do bloco php) 

  <label for="femail">E-mail:</label><br>
  <input type="email" id="femail" name="femail" value='<php echo $email?>'><br>  (bloco php)php echo $email  (Fechamento do bloco php) 

  <label for="fsenha">Senha:</label><br>
  <input type="password" id="fsenha" name="fsenha" value='?php echo $senha?>'><br>  (bloco php)php echo $senha  (Fechamento do bloco php) 

  <label for="ftel">Telefone:</label><br>
  <input type="tel" id="ftel" name="ftel" value='<php echo $telefone?>'><br>  (bloco php)php echo $telefone  (Fechamento do bloco php) 

  <label for="floc">Localização:</label><br>
  <input type="text" id="floc" name="floc" value='<php echo $localizacao?>'><br><br>  (bloco php)php echo $localizacao  (Fechamento do bloco php) 

 -->