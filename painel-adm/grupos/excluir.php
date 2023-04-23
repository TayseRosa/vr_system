<?php 
require_once("../../conexao.php"); 

$id = $_POST['id'];

$pdo->query("DELETE FROM grupos2 WHERE id_grupo = '$id'");

echo 'Excluído com Sucesso!';

?>