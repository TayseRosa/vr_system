<?php 
require_once("../../conexao.php"); 

$nome = $_POST['nome'];

$antigo = $_POST['antigo'];
$id = $_POST['id2'];

if($id == ""){
    $res = $pdo->prepare("INSERT INTO grupos2 SET 
    nome = :nome
    ");	
    
    $res->bindValue(":nome", $nome);
    $res->execute();

    echo 'Salvo com Sucesso!';
}else{
    $res = $pdo->prepare("UPDATE grupos2 SET 
    nome = :nome
    WHERE id_grupo = '$id'");	

    $res->bindValue(":nome", $nome);
    
    $res->execute();

    echo 'Salvo com Sucesso!';
}

?>