<?php 

@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'aluno'){
    echo "<script language='javascript'> window.location='../index.php' </script>";
}

$pag = "alunos";
require_once("../conexao.php"); 
?>


<!-- DataTales Example -->
<div class="card shadow mb-10">
	<header class="pb-2 mb-4 mt-4 ml-3 border-bottom ">
		<h1><i class="fas fa-home"></i> Bem vindo(a) <?php echo $nome_usu ?> </h1>
    </header>

	<div class="container">
  		<div class="row">

			<div class="col-md-4 jumbo-custom">
				<a href="#" target="_blank" style="text-decoration: none;">
					<div class="jumbotron text-center bg-primary text-white">
						<p class="lead"><i class="fas fa-home"></i> <span> <?php echo $_SESSION['qtd'] ?> </span> </p>
						<hr style="background-color:#fff">
						Quantidade de acessos
					</div>
				</a>
			</div>

			<div class="col-md-4 jumbo-custom">
				<a href="#" target="_blank" style="text-decoration: none;">
					<div class="jumbotron text-center bg-success text-white">
						<p class="lead"><i class="fas fa-user"></i> <span>99 %</span></p>
						<hr style="background-color:#fff">
						Perfil preenchido
					</div>
				</a>
			</div>
  

			<div class="col-md-4 jumbo-custom">
				<a href="#" target="_blank" style="text-decoration: none;">
					<div class="jumbotron text-center bg-warning text-white">
						<p class="lead"><i class="fa fa-table"></i> <span>99</span></p>
						<hr style="background-color:#fff">
						Tabelas nutricionais
					</div>
				</a>	
			</div>

			<div class="col-md-4 jumbo-custom">
				<a href="#" target="_blank" style="text-decoration: none;">
					<div class="jumbotron text-center bg-info text-white">
						<p class="lead"><i class="fa fa-calculator"></i> </p>
						<hr style="background-color:#fff">
						Calculadora rotular
					</div>
				</a>
			</div>

			<div class="col-md-4 jumbo-custom">
				<a href="#" target="_blank" style="text-decoration: none;">
					<div class="jumbotron text-center bg-dark text-white">
						<p class="lead"><i class="fa fa-cutlery" aria-hidden="true"></i>
 						<span>5000</span></p>
 						<hr style="background-color:#fff">
						Alimentos cadastrados
					</div>
				</a>
			</div>
  		</div>
		  <!--<img src="../img/logo3.png" alt="Image rotulagem de alimentos" style="right: 0; position: absolute">-->
	</div>

</div>