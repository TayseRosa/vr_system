<!--  Modal Perfil-->
<div class="modal fade" id="ModalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <form id="form-perfil" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label >Nome</label>
                        <input value="<?php echo $nome_usu ?>" type="text" class="form-control" id="nome_usu" name="nome_usu" placeholder="Nome">
                    </div>

                    <div class="form-group">
                        <label >CPF</label>
                        <input value="<?php echo $cpf_usu ?>" type="text" class="form-control" id="cpf" name="cpf_usu" placeholder="CPF">
                    </div>

                    <div class="form-group">
                        <label >Email</label>
                        <input value="<?php echo $email_usu ?>" type="email" class="form-control" id="email_usu" name="email_usu" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label >Senha</label>
                        <input value="" type="password" class="form-control" id="senha_usu" name="senha_usu" placeholder="Senha">
                    </div>
            
                    <small>
                        <div id="mensagem" class="mr-4">

                        </div>
                    </small>
                </div>

                <div class="modal-footer">
                    <input value="<?php echo $_SESSION['id_usuario'] ?>" type="hidden" name="id_usu" id="id_usu">
                    <input value="<?php echo $cpf_usu ?>" type="hidden" name="antigo_usu" id="antigo_usu">

                    <button type="button" id="btn-fechar-perfil" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="btn-salvar-perfil" id="btn-salvar-perfil" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div> <!-- Fim Modal Perfil-->