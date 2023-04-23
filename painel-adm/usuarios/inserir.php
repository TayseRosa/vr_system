<?php 
require_once("../../conexao.php"); 
session_start();

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];
$qtd = 0;


$antigo = $_POST['antigo'];
@$id = $_POST['txtid2'];

//echo 'ID :' . $id;


if($id == ""){
    
    $res = $pdo->prepare("INSERT INTO usuarios SET 
        nome = :nome,
        cpf = :cpf,
        telefone = :telefone,
        email = :email,
        endereco = :endereco,
        senha = :senha,
        nivel = :nivel,
        qtd = :qtd
    ");	

    
    $res->bindValue(":nome", $nome);
    $res->bindValue(":cpf", $cpf);
    $res->bindValue(":telefone", $telefone);
    $res->bindValue(":email", $email);
    $res->bindValue(":endereco", $endereco);
    $res->bindValue(":senha", '123');
    $res->bindValue(":nivel", 'aluno');
    $res->bindValue(":qtd", $qtd);
    
    $res->execute();

    echo 'Salvo com Sucesso!';
    
    
}else{
    
    $res = $pdo->prepare("UPDATE usuarios SET 
        nome = :nome,
        cpf = :cpf,
        telefone = :telefone,
        email = :email,
        endereco = :endereco,
        senha = :senha,
        nivel = :nivel,
        qtd = :qtd
        WHERE id = '$id'
    ");	

    
    $res->bindValue(":nome", $nome);
    $res->bindValue(":cpf", $cpf);
    $res->bindValue(":telefone", $telefone);
    $res->bindValue(":email", $email);
    $res->bindValue(":endereco", $endereco);
    $res->bindValue(":senha", '123');
    $res->bindValue(":nivel", 'aluno');
    $res->bindValue(":qtd", $qtd);
    
    $res->execute();

    echo 'Salvo com Sucesso!';
}

?>