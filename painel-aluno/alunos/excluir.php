<?php 
require_once("../../conexao.php"); 

$id = $_POST['id'];

$pdo->query("DELETE FROM tabela_nutricional WHERE id = '$id'");

echo 'Excluído com Sucesso!';

?>