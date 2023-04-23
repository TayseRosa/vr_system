<?php 
require_once("../../conexao.php"); 

$id = $_POST['id'];

$pdo->query("DELETE FROM alimentos WHERE id_alimento = '$id'");

echo 'Excluído com Sucesso!';

?>