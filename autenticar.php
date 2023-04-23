<?php 
require_once("conexao.php");
@session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = $pdo->prepare("SELECT * FROM usuarios where email = :email and senha = :senha");
$query->bindValue(":senha", $senha);
$query->bindValue(":email", $email);
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){

	$_SESSION['id_usuario'] = $res[0]['id'];
	$_SESSION['nome_usuario'] = $res[0]['nome'];
	$_SESSION['cpf_usuario'] = $res[0]['cpf'];
	$_SESSION['nivel_usuario'] = $res[0]['nivel'];
    $_SESSION['qtd'] = $res[0]['qtd'];
    $qtd = $_SESSION['qtd'] +1;

    
    //Update qtd acessos
    $query2 = $pdo->prepare("UPDATE usuarios SET qtd = :qtd where email = '$email' ");
    $query2->bindValue(":qtd", $qtd);
    $query2->execute();


	$nivel = $res[0]['nivel'];

	if($nivel == 'admin'){
		echo "<script language='javascript'> window.location='painel-adm' </script>";
	}

	if($nivel == 'aluno'){
		echo "<script language='javascript'> window.location='painel-aluno' </script>";
	}
	
}else{
	echo "<script language='javascript'> window.alert('Usuário ou Senha Incorreta!') </script>";
	echo "<script language='javascript'> window.location='index.php' </script>";	
}


?>
