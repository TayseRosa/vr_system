<?php 

@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'aluno'){
    echo "<script language='javascript'> window.location='../index.php' </script>";
}


$pag = "alunos";
require_once("../conexao.php"); 



?>

<div class="row mt-4 mb-4">
	<a type="button" class="btn-secondary btn-sm ml-3 d-none d-md-block" href="index.php?pag=<?php echo $pag ?>&funcao=novo">Nova tabela</a>
	<a type="button" class="btn-primary btn-sm ml-3 d-block d-sm-none" href="index.php?pag=<?php echo $pag ?>&funcao=novo">+</a>

</div>



<!-- DataTales Example -->
<div class="card shadow mb-4">

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Nome do produto</th>
						<th>Rendimento</th>
						<th>Porção</th>
						<th>Medida caseira %VD</th>
						<th>Grupos</th>
						<th>Alimento</th>
						<th>Classe para % VD</th>
						<th>Unidade</th>
						<th>Ação</th>
					</tr>
				</thead>

				<tbody>

					<?php 

					$query = $pdo->query("SELECT * FROM tabela_nutricional order by id desc ");
					$res = $query->fetchAll(PDO::FETCH_ASSOC);
					
					for ($i=0; $i < @count($res); $i++) { 
						foreach ($res[$i] as $key => $value) {
						}
						$nome_prod = $res[$i]['nome_prod'];
						$rendimento_form = $res[$i]['rendimento_form'];
						$porcao = $res[$i]['porcao'];
						$medida_caseira = $res[$i]['medida_caseira'];
						$grupos = $res[$i]['grupos'];
						$alimento = $res[$i]['alimento'];
						$classe = $res[$i]['classe'];
						$unidade = $res[$i]['unidade'];
						$id = $res[$i]['id'];
						?>

						<tr>
							<td><?php echo $nome_prod ?></td>
							<td><?php echo $rendimento_form ?></td>
							<td><?php echo $porcao ?></td>
							<td><?php echo $medida_caseira ?></td>
							<td><?php echo $grupos ?></td>
							<td><?php echo $alimento ?></td>
							<td><?php echo $classe ?></td>
							<td><?php echo $unidade ?></td>

							<td>
								<a href="index.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>" class='text-primary mr-1' title='Editar Dados'><i class='far fa-edit'></i></a>
								<a href="index.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo $id ?>" class='text-danger mr-1' title='Excluir Registro'><i class='far fa-trash-alt'></i></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<?php 
				if (@$_GET['funcao'] == 'editar') {
					$titulo = "Editar Registro";
					$id2 = $_GET['id'];

					$query = $pdo->query("SELECT * FROM tabela_nutricional where id = '$id2' ");
					$res = $query->fetchAll(PDO::FETCH_ASSOC);
					$nome_prod_edit = $res[0]['nome_prod'];
					$rendimento_form_edit = $res[0]['rendimento_form'];
					$porcao_edit = $res[0]['porcao'];
					$medida_caseira_edit = $res[0]['medida_caseira'];
					$grupos_edit = $res[0]['grupos'];
					$alimento_edit = $res[0]['alimento'];
					$classe_edit = $res[0]['classe'];
					$unidade_edit = $res[0]['unidade'];

				} else {
					$titulo = "Inserir Registro";

				}
				?>

				<h5 class="modal-title" id="exampleModalLabel"><?php echo $titulo ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="form" method="POST">
				<div class="modal-body">

					<div class="form-group">
						<label >Nome produto</label>
						<input value="<?php echo @$nome_prod_edit ?>" type="text" class="form-control" id="nome_prod" name="nome_prod" placeholder="Nome">
					</div>

					<div class="form-group">
						<label >Rendimento </label>
						<input value="<?php echo @$rendimento_form_edit ?>" type="number" class="form-control" id="rendimento_form" name="rendimento_form" placeholder="Rendimento [int]">
					</div>

					<div class="form-group">
						<label> Porção </label>
						<input value="<?php echo @$porcao_edit ?>" type="number" class="form-control" id="porcao" name="porcao" placeholder="Porção [int]">
					</div>

					<div class="form-group">
						<label> Medida caseira </label>
						<input value="<?php echo @$medida_caseira_edit ?>" type="text" class="form-control" id="medida_caseira" name="medida_caseira" placeholder="Medida caseira">
					</div>

					<div class="form-group">
						<label >Grupos</label>
						<select name="grupos" class="form-control" id="fornecedor">

							<?php 

							$query = $pdo->query("SELECT * FROM grupos2 order by nome asc ");
							$res = $query->fetchAll(PDO::FETCH_ASSOC);
							
							for ($i=0; $i < @count($res); $i++) { 
								foreach ($res[$i] as $key => $value) {
								}
								$nome = $res[$i]['nome'];
								$id = $res[$i]['id'];
								?>									
								<option <?php if(@$grupos == $id){ ?> selected <?php } ?> value="<?php echo $id ?>"><?php echo $nome ?></option>
							<?php } ?>
							
						</select>
					</div>	

					<div class="form-group">
						<label> Alimento </label>
						<input value="<?php echo @$alimento_edit ?>" type="text" class="form-control" id="alimento" name="alimento" placeholder="Alimento">
					</div>	

					<div class="form-group">
						<label> Classe </label>
						<input value="<?php echo @$classe_edit ?>" type="text" class="form-control" id="classe" name="classe" placeholder="Classe">
					</div>	

					<div class="form-group">
						<label> Unidade </label>
						<input value="<?php echo @$unidade ?>" type="text" class="form-control" id="unidade" name="unidade" placeholder="Unidade">
					</div>	

					<small>
						<div id="mensagem">

						</div>
					</small> 

				</div>



				<div class="modal-footer">
					<input value="<?php echo @$_GET['id'] ?>" type="hidden" name="id2" id="txtid2">
					<input value="<?php echo @$cpf2 ?>" type="hidden" name="antigo" id="antigo">
					<input value="<?php echo @$email2 ?>" type="hidden" name="antigo2" id="antigo2">

					<button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" name="btn-salvar" id="btn-salvar" class="btn btn-primary">Salvar</button>
				</div>
			</form>
		</div>
	</div>
</div>






<div class="modal" id="modal-deletar" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Excluir Registro</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<p>Deseja realmente Excluir este Registro?</p>

				<div align="center" id="mensagem_excluir" class="">

				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-cancelar-excluir">Cancelar</button>
				<form method="post">

					<input type="hidden" id="id"  name="id" value="<?php echo @$_GET['id'] ?>" required>

					<button type="button" id="btn-deletar" name="btn-deletar" class="btn btn-danger">Excluir</button>
				</form>
			</div>
		</div>
	</div>
</div>


<?php 

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "novo") {
	echo "<script>$('#modalDados').modal('show');</script>";
}

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "editar") {
	echo "<script>$('#modalDados').modal('show');</script>";
}

if (@$_GET["funcao"] != null && @$_GET["funcao"] == "excluir") {
	echo "<script>$('#modal-deletar').modal('show');</script>";
}

?>

<!--AJAX PARA INSERÇÃO E EDIÇÃO DOS DADOS COM OU SEM IMAGEM -->
<script type="text/javascript">
	$("#form").submit(function () {
		var pag = "<?=$pag?>";
		event.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			url: pag + "/inserir.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#mensagem').removeClass()
				if (mensagem.trim() == "Salvo com Sucesso!") {
                    //$('#nome').val('');
                    $('#btn-fechar').click();
                    window.location = "index.php?pag="+pag;
                } else {
                	$('#mensagem').addClass('text-danger')
                }
                $('#mensagem').text(mensagem)
            },

            cache: false,
            contentType: false,
            processData: false,
            xhr: function () {  // Custom XMLHttpRequest
            	var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                	myXhr.upload.addEventListener('progress', function () {
                		/* faz alguma coisa durante o progresso do upload */
                	}, false);
                }
                return myXhr;
            }
        });
	});
</script>





<!--AJAX PARA EXCLUSÃO DOS DADOS -->
<script type="text/javascript">
	$(document).ready(function () {
		var pag = "<?=$pag?>";
		$('#btn-deletar').click(function (event) {
			event.preventDefault();
			$.ajax({
				url: pag + "/excluir.php",
				method: "post",
				data: $('form').serialize(),
				dataType: "text",
				success: function (mensagem) {

					if (mensagem.trim() === 'Excluído com Sucesso!') {
						$('#btn-cancelar-excluir').click();
						window.location = "index.php?pag=" + pag;
					}
					$('#mensagem_excluir').text(mensagem)

				},

			})
		})
	})
</script>



<!--SCRIPT PARA CARREGAR IMAGEM -->
<script type="text/javascript">

	function carregarImg() {

		var target = document.getElementById('target');
		var file = document.querySelector("input[type=file]").files[0];
		var reader = new FileReader();

		reader.onloadend = function () {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);


		} else {
			target.src = "";
		}
	}

</script>





<script type="text/javascript">
	$(document).ready(function () {
		$('#dataTable').dataTable({
			"ordering": false
		})

	});
</script>


