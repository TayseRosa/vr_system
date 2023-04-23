<?php 
require_once("../../conexao.php"); 

@$nome = $_POST['nome'];
@$cpf = $_POST['cpf'];
@$telefone = $_POST['telefone'];
@$email = $_POST['email'];
@$endereco = $_POST['endereco'];

$antigo = $_POST['antigo'];
$antigo2 = $_POST['antigo2'];
$id = $_POST['txtid2'];
$qtd = $_POST['qtd'];

echo 'Nome: '. $nome;
echo 'Quant: ' . $qtd;



/*
if($nome == ""){
	echo 'O nome é Obrigatório!';
	exit();
}

if($email == ""){
	echo 'O email é Obrigatório!';
	exit();
}

if($cpf == ""){
	echo 'O CPF é Obrigatório!';
	exit();
}

//VERIFICAR SE O REGISTRO JÁ EXISTE NO BANCO
if($antigo != $cpf){
	$query = $pdo->query("SELECT * FROM alunos where cpf = '$cpf' ");
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
	$total_reg = @count($res);
	if($total_reg > 0){
		echo 'O CPF já está Cadastrado!';
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
*/

//INSERIR
if($id == ""){
	echo 'inserir';
	/*
	$res = $pdo->prepare("INSERT INTO alunos SET 
		nome = :nome, 
		cpf = :cpf, 
		telefone = :telefone,
		email = :email, 
		endereco = :endereco
		");	

	$res->bindValue(":nome", $nome);
	$res->bindValue(":cpf", $cpf);
	$res->bindValue(":telefone", $telefone);
	$res->bindValue(":email", $email);
	$res->bindValue(":endereco", $endereco);
		
	$res->execute();
*/
	/*
		
		$res2 = $pdo->prepare("INSERT INTO usuarios SET 
			nome = :nome,
			cpf = :cpf, 
			email = :email,
			senha=:senha, 
			nivel=:nivel,	
			qtd=:qtd
			*/
		
/*funcional*/
/*INSERT INTO usuarios SET nome = ':nome', cpf = 123123123, email = ':email', senha=':senha', nivel=':nivel', qtd=1;
		
		");	
		
		$res2->bindValue(":nome", $nome);
		$res2->bindValue(":cpf", $cpf);
		$res2->bindValue(":email", $email);
		
		$res2->bindValue(":senha", '123');
		$res2->bindValue(":nivel", 'aluno');
		//$res2->bindValue(":qtd", $qtd);
		
		$res2->execute();
		
		*/
	
//EDITAR
}else{
	echo 'EDITAR';
	/*
	$res = $pdo->prepare("UPDATE alunos SET 
		nome = :nome, 
		cpf = :cpf, 
		telefone = :telefone 
		email = :email, 
		endereco = :endereco
		WHERE id = '$id'
		");
	$res2 = $pdo->prepare("UPDATE usuarios SET 
		nome = :nome, 
		cpf = :cpf, 
		telefone = :telefone,
		email = :email 
		WHERE cpf = '$antigo'
		");	

		*/
}

/*

$res->bindValue(":nome", $nome);
$res->bindValue(":cpf", $cpf);
$res->bindValue(":telefone", $telefone);
$res->bindValue(":email", $email);
$res->bindValue(":endereco", $endereco);

$res2->bindValue(":nome", $nome);
$res2->bindValue(":cpf", $cpf);
$res2->bindValue(":telefone", $telefone);
$res2->bindValue(":email", $email);
$res2->bindValue(":endereco", $endereco);

$res->execute();
$res2->execute();

echo $antigo;
*/
echo 'Salvo com Sucesso!';

?>