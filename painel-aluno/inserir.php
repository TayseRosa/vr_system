<?php 
require_once("../../conexao.php"); 

$nome_prod = $_POST['nome_prod'];
$rendimento_form = $_POST['rendimento_form'];
$porcao = $_POST['porcao'];
$medida_caseira = $_POST['medida_caseira'];
$grupos = $_POST['grupos'];
$alimentos = $_POST['alimentos'];
$classe = $_POST['classe'];
$unidade = $_POST['unidade'];

$antigo = $_POST['antigo'];
$antigo2 = $_POST['antigo2'];
$id = $_POST['txtid2'];

if($nome_prod == ""){
	echo 'O nome é Obrigatório!';
	exit();
}


//VERIFICAR SE O REGISTRO JÁ EXISTE NO BANCO
if($antigo != $cpf){
	$query = $pdo->query("SELECT * FROM tabela_nutricional where id = '$id' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'O ID já está Cadastrado!';
		exit();
	}
}


//VERIFICAR SE O REGISTRO COM MESMO EMAIL JÁ EXISTE NO BANCO
if($antigo2 != $email){
	$query = $pdo->query("SELECT * FROM alunos where email = '$email' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'O Email já está Cadastrado!';
		exit();
	}
}

if($id == ""){
	$res = $pdo->prepare("INSERT INTO tabela_nutricional SET 
	$nome_prod = :nome_prod, 
	$rendimento_form = :rendimento_form,
	$porcao = :porcao,
	$medida_caseira = :medida_caseira,
	$grupos = :grupos,
	$alimentos = :alimentos,
	$classe = :classe,
	$unidade = :unidade
	");	
	
}else{
	$res = $pdo->prepare("UPDATE tabela_nutricional SET 
	$id =:id,
	$nome_prod = :nome_prod, 
	$rendimento_form = :rendimento_form,
	$porcao = :porcao,
	$medida_caseira = :medida_caseira,
	$grupos = :grupos,
	$alimentos = :alimentos,
	$classe = :classe,
	$unidade = :unidade WHERE id = '$id'");
}

$nome_prod->bindValue(":nome_prod", $nome_prod);
$rendimento_form->bindValue(":rendimento_form", $rendimento_form);
$porcao->bindValue(":porcao", $porcao);
$medida_caseira->bindValue(":medida_caseira", $medida_caseira);
$grupos->bindValue(":grupos", $grupos);
$alimentos->bindValue(":alimentos", $alimentos);
$classe->bindValue(":classe", $classe);
$unidade->bindValue(":unidade", $unidade);

$res2->bindValue(":nome", $nome);

$res->execute();
$res2->execute();

echo $antigo;

echo 'Salvo com Sucesso!';

?>