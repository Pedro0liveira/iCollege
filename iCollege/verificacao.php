<?php

//require_once 'db_connect.php';
include 'db_connect.php';


$sql = "SELECT * FROM usuarios";

$result = $connect->query($sql);


echo "<table border=1> <tr><th>ID</th> <th>Nome</th> <th>email</th> <th>telefone</th> <th>localização</th> <th>Ações</th> </tr>";

    while($row = $result->fetch_assoc()) {
    echo '<tr><td>'.$row["idUsuario"].'</td><td>'.$row["nome"].'</td><td>'.$row["email"].'</td><td>'.$row["telefone"].'</td><td>'.$row["localizacao"].'</td>';
    echo '<td width=100>';
    echo '<a href="update.php?id='.$row['idUsuario'].'">Editar</a>';
    echo ' | ';
    echo '<a href="remove.php?id='.$row['idUsuario'].'">Excluir</a></td></tr>';
    }

  echo "</table>";

  echo '<a href="create.php" >Inserir</a>';

  echo "<br><br>";

  echo '<a href="index.php" >Voltar para a página inicial</a>';



?>


<!DOCTYPE html>
<html lang="pt-br">
<head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="imagens\favicon.ico">
        <title> iCollege - verificação de Cadastros </title>
        
        <!--<link rel="stylesheet" href="estilos.css">-->
</head>
<body>
  
</body>
</html>
