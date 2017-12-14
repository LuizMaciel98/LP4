
<div class="modal fade" id="modalEditarProduto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
           
            <div class="modal-content">
               
                <div class="modal-header amber white-text">
                    <h4 class="title"><i class="fa fa-newspaper"></i>Editar Produto</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body mb-0">
    				<form action="editar_produto.php">
    					<input type="hidden" id="cd" name="cd">
                    <div class="md-form form-sm">
                        <i class="fa fa-cube prefix"></i>
                        <input type="text" id="NovoNome" name="NovoNome" class="form-control">
                        <label for="NovoNome">Novo Nome</label>
                    </div>

                    <div class="md-form form-sm">
                        <i class="fa fa-cubes prefix"></i>
                        <input type="text" id="NovaQuantidade" name="NovaQuantidade" class="form-control">
                        <label for="NovaQuantidade">Nova Quantidade</label>
                    </div>
    
    				<div class="md-form form-sm">
                        <i class="fa fa-dollar prefix"></i>
                        <input type="text" id="NovoPreco" name="NovoPreco" class="form-control">
                        <label for="NovoPreco">Preço</label>
                    </div>
                        
                    <div class="text-center mt-1-half">
                        <button type="submit" class="btn btn-success mb-1">Salvar<i class="fa fa-check ml-1"></i></button>
                    </div>
    				</form>
                </div>
            </div>

</div>
</div>