<!DOCTYPE html>
<html>
<?php include 'includes/head.php'; ?>
<body>
	<?php 
    session_start();
    
    if(isset($_SESSION['cnpj'])){
        header("Location: home.php");
    }
    
    include 'includes/navbar.php';
    include 'includes/modal_contato.php';
    include 'includes/modal_login.php';
    include 'includes/modal_recuperar_senha.php';
    
    
    ?>

<section  class="content" id="secCadastroEmpresa">
	<div style="margin-top: 150px;" class="container">
		<div class="row">
			<h1 style="margin-bottom: 20px;" class="col-md-12 centered-col">Cadastre sua empresa</h1>
		</div>
		<br>
		<form action="cadastrar_empresa.php" method="post" enctype="multipart/form-data">
		<div class="row">
			
			<div style="border-right: 1px solid lightgrey;" class="md-form col-md-4">
			    <input required type="text" data-mask="99.999.999/9999-99" id="cadastroCNPJ" class="form-control" name="cnpj">
			    <label for="cadastroCNPJ"><b>CNPJ:</b></label>
			</div>
			<div class="md-form col-md-4">
			    <input required type="text" id="cadastroNome" class="form-control" name="name">
			    <label for="cadastroNome"><b>Nome:</b></label>
			</div>
			<div class="col-md-4 col-sm-4 col-lg-4">
				<label for="cadastroLogo"><b style="color: #757575;">Logo:</b></label>
				<input type="file" id="cadastroLogo" name="logo">
			</div>
		</div>

		<div class="row">
			<div style="border-right: 1px solid lightgrey" class="md-form col-md-4">
				<input required type="password" id="cadastroSenha" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Sua senha deve ter ao menos uma letra maíuscula, uma minúscula e um número" class="form-control" name="pass">
			    <label data-toggle="tooltip" data-placement="left" title="Sua senha deve ter ao menos uma letra maíuscula, uma minúscula e um número" for="cadastroSenha"><b>Senha para login:</b></label>
                
                
			</div>
			<div class="md-form col-md-4">
				<input required type="text" id="cadastroTelefone" data-mask="(99)99999-9999" class="form-control" name="phone">
			    <label for="cadastroTelefone"><b>Telefone:</b></label>
			</div>
			<div class="col-md-4">
				<div style="padding-left: 15px;" class="form-inline">

			<div id="radioinline" class="form-inline">
			    <div class="form-group">
			        <input name="group1" type="radio" id="cadastroPequeno" checked="checked">
			        <label for="cadastroPequeno" style="padding-left: 3px;">  Pequeno porte</label>
			    </div>

			    <div class="form-group">
			        <input name="group1" type="radio" id="cadastroMedio">
			        <label for="cadastroMedio" style="padding-left: 3px;">  Médio porte</label>
			    </div>

			    <div class="form-group">
			        <input name="group1" type="radio" id="cadastroGrande">
			        <label for="cadastroGrande" style="padding-left: 3px;">  Grande porte</label>
			    </div>
			</div>
		</div>
			</div>
		</div>
		<div class="row">
			<div style="border-right: 1px solid lightgrey;" class="md-form col-md-4">
			    <input required type="password" id="cadastroConfirmar" class="form-control">
			    <label for="cadastroConfirmar"><b>Confirmar senha:</b></label>
			</div>
			<div class="md-form col-md-4">
				<input required type="email" id="cadastroEmail" class="form-control" name="email">
			    <label for="cadastroEmail"><b>E-mail:</b></label>
			</div>
			
		</div>
		<div class="row">
			<button  style="margin-top: 40px; margin-bottom:  40px;" type="submit" class="col-md-12 btn btn-success">CONCLUIR CADASTRO</button>
		</div>
		
		</form>	
	</div>
</section>

    <div class="modal fade" id="contatoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog cascading-modal" role="document">
                        <!--Content-->
                        <div class="modal-content">

                            <!--Header-->
                            <div class="modal-header amber darken-3">
                                <h4 class="title"><i class="fa fa-pencil"></i> Fale conosco!</h4>
                                <button type="button" class="close waves-effect" style="color: black;" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                            </div>
                            <!--Body-->
                            <div class="modal-body mb-0">
                            	<form>
                                <div class="md-form form-sm">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="contatoEmail" class="form-control">
                                    <label for="contatoEmail">Seu e-mail</label>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="contatoNome" class="form-control">
                                    <label for="contatoNome">Seu nome</label>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-tag prefix"></i>
                                    <input type="text" id="contatoAssunto" class="form-control">
                                    <label for="contatoAssunto">Assunto</label>
                                </div>

                                <div class="md-form form-sm">
                                    <i class="fa fa-pencil prefix"></i>
                                    <textarea type="text" id="contatoMensagem" class="md-textarea mb-0"></textarea>
                                    <label for="contatoMensagem">Mensagem</label>
                                </div>

                                <div class="text-center mt-1-half">
                                    <button type="submit" class="btn btn-warning mb-2" ><span style="color: black;">Enviar </span><i style="color: black !important;" class="fa fa-send ml-1"></i></button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
    
<?php
    include 'includes/footer2.php';

?>
</body>
</html>
