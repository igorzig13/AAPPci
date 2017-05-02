<?php

include 'novoPag.php';

$searchTerm = $_GET['term'];


$resultado = mysqli_query($conexao, "SELECT nome, id_cliente FROM cliente WHERE nome LIKE '%" . $searchTerm . "%' ORDER BY nome ASC");
while ($atributo = mysqli_fetch_array($resultado)) {
    $data['nome'] = $atributo['nome'];
    $data['Id'] = $atributo['id_cliente'];
    $row_set[] = $data;
}


echo json_encode($row_set);


?>
