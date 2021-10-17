<?php

include 'db_connect.php';

$busca = $_POST['txtBusca'];
$result_curso = "SELECT * FROM cruso WHERE nomeCurso LIKE '%$busca%'";
$resultado_curso = mysqli_query($connect, $result_curso);

while ($rows_curso = mysqli_fetch_array($resultado_curso)) {
    echo $rows_curso['nomeCurso']."<br>";
}

?>