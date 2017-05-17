<?php
require_once("NotOnlyConn.php");
$conn = new Conexao();
$collection = $conn->connect();
$json = '{"dados_pessoais":{"nome":"Adernando", "sobrenome":"Morbeck"}, "dados_cred":{"core":"MainFrame", "funcao":"Gerente"}}';
$obj = json_decode($json);
var_dump($obj);
$cursor = $collection->insert($obj);
?>