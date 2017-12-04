<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">
    
                <!--Header-->
                <div class="modal-header light amber darken-3">
                    <h4 class="title"><i class="fa fa-user"></i> Login</h4>
                    <button type="button" style="color: black;" class="close waves-effect waves" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body">
                	<form method="post" action="PHPs/login.php">
                    <div class="md-form form-sm">
                        <i class="fa fa-id-card prefix"></i>
                        
                        <input type="text" id="form30" data-mask="99.999.999/9999-99" name="cnpjEmpresa" class="form-control">
                        <label for="form30">CNPJ da sua empresa</label>
                    </div>
    
                    <div class="md-form form-sm">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="form31" name="senhaEmpresa" class="form-control">
                        <label for="form31">Sua senha</label>
                    </div>
    
                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-warning"><span style="color: black;">Logar <i style="color: black !important;" class="fa fa-sign-in ml-1"></i></span></button>
                    </div>
                	</form>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <div class="options text-center text-md-right mt-1">
                        <p>Não possui uma conta? <a href="cadastro_empresa.php">Cadastre-se</a></p>
                        <p>Esqueceu a<a data-toggle="modal" data-target="#modalRecuperarSenha" data-dismiss="modal" href="#"> senha?</a></p>
                    </div>
                    <button type="button" class="btn btn-outline-warning waves-effect ml-auto" data-dismiss="modal">Fechar</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
