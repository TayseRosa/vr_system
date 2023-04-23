<?php 
require_once("../../conexao.php"); 

$nome_prod = $_POST['nome_prod'];
$rendimento_form = $_POST['rendimento_form'];
$porcao = $_POST['porcao'];
$medida_caseira = $_POST['medida_caseira'];
$grupos = $_POST['grupos'];
$alimento = $_POST['alimento'];
$classe = $_POST['classe'];
$unidade = $_POST['unidade'];

$antigo = $_POST['antigo'];
$id = $_POST['id2'];

if($id == ""){
    $res = $pdo->prepare("INSERT INTO tabela_nutricional SET 
    nome_prod = :nome_prod, 
    rendimento_form = :rendimento_form,
    porcao = :porcao,
    medida_caseira = :medida_caseira,
    grupos = :grupos,
    alimento = :alimento,
    classe = :classe,
    unidade =:unidade
    ");	
    
    $res->bindValue(":nome_prod", $nome_prod);
    $res->bindValue(":rendimento_form", $rendimento_form);
    $res->bindValue(":porcao", $porcao);
    $res->bindValue(":medida_caseira", $medida_caseira);
    $res->bindValue(":grupos", $grupos);
    $res->bindValue(":alimento", $alimento);
    $res->bindValue(":classe", $classe);
    $res->bindValue(":unidade", $unidade);
    $res->execute();

    echo 'Salvo com Sucesso!';
}else{
    $res = $pdo->prepare("UPDATE tabela_nutricional SET 
    nome_prod = :nome_prod, 
    rendimento_form = :rendimento_form,
    porcao = :porcao,
    medida_caseira = :medida_caseira,
    grupos = :grupos,
    alimento = :alimento,
    classe = :classe,
    unidade =:unidade WHERE id = '$id'");	

    $res->bindValue(":nome_prod", $nome_prod);
    $res->bindValue(":rendimento_form", $rendimento_form);
    $res->bindValue(":porcao", $porcao);
    $res->bindValue(":medida_caseira", $medida_caseira);
    $res->bindValue(":grupos", $grupos);
    $res->bindValue(":alimento", $alimento);
    $res->bindValue(":classe", $classe);
    $res->bindValue(":unidade", $unidade);
    $res->execute();

    echo 'Salvo com Sucesso!';
}

?>