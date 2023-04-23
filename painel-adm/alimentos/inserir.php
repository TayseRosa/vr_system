<?php 
require_once("../../conexao.php"); 

@$nome = $_POST['nome'];
@$porcoes = $_POST['porcoes'];
@$medida_caseira = $_POST['medida_caseira'];
@$cod_grupos = $_POST['cod_grupos'];
							
$antigo = $_POST['antigo'];
$id = $_POST['id2'];

if($id == ""){
    $res = $pdo->prepare("INSERT INTO alimentos SET 
    nome = :nome,
    porcoes = :porcoes,
    medida_caseira = :medida_caseira,
    cod_grupos = :cod_grupos
    ");	
    
    $res->bindValue(":nome", $nome);
    $res->bindValue(":porcoes", $porcoes);
    $res->bindValue(":medida_caseira", $medida_caseira);
    $res->bindValue(":cod_grupos", $cod_grupos);
    $res->execute();

    echo 'Salvo com Sucesso!';
}else{
    $res = $pdo->prepare("UPDATE alimentos SET 
    nome = :nome,
    porcoes = :porcoes,
    medida_caseira = :medida_caseira,
    cod_grupos = :cod_grupos
    WHERE id_alimento = '$id'");	

    $res->bindValue(":nome", $nome);
    $res->bindValue(":porcoes", $porcoes);
    $res->bindValue(":medida_caseira", $medida_caseira);
    $res->bindValue(":cod_grupos", $cod_grupos);
    
    $res->execute();

    echo 'Salvo com Sucesso!';
}
?>