         <div class="modal fade" id="modalAdicionar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal z-depth-1" role="document">

                <div class="modal-content">


                    <div class="modal-header light-green white-text">
                        <h4 class="title"><i class="fa fa-plus"></i> Adicionar produto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                    </div>

                    <div class="modal-body mb-0">

                        <p class="lead text-center">Cadastre as informações do produto</p>

                        <div class="md-form form-sm">
                            <i class="fa fa-cube prefix"></i>
                            <input required type="text" id="adicionarProduto" class="form-control">
                            <label for="adicionarProduto">Nome do produto</label>
                        </div>

                        <div class="md-form form-sm">
                            <i class="fa fa-cubes prefix"></i>
                            <input required type="number" id="adicionarQuantidade" class="form-control">
                            <label for="adicionarQuantidade">Quantidade</label>
                        </div>

                        <div class="md-form form-sm">
                            <i class="fa fa-dollar prefix"></i>
                            <input required min="0" step="0.1" pattern="^\d+(\.|\,)\d{2}$" title="Digite o dinheiro no formato correto (dois números após a vírgula)" type="text" id="adicionarValor" class="form-control">
                            <label for="adicionarValor">Valor (R$)</label>
                        </div>

                        <div class="md-form">
                            <form method="POST" action="upload_csv.php" enctype="multipart/form-data">
                            <i style="top: 5px;" class="fa fa-table prefix"></i>
                            <input required style="margin-left: 50px;" type="button" class="btn btn-dark-green" id="adicionarCsv" value="Adicionar arquivo CSV" onclick="document.getElementById('file').click();" />
                            <input type="file" style="display:none;" id="file" name="produtocsv" accept=".csv" />
                            <input type="submit" name="enviar" value="Cadastrar csv">
                            </form>
                        </div>

                        <div class="text-center mt-1-half">
                          <button class="btn btn-outline-danger waves-effect" data-dismiss="modal">CANCELAR</button>
                            <input onclick="CPValidacao();" type="submit" class="btn btn-success" value="ADICIONAR">

                        </div>

                        <!--Comando javascript para validação dos campos da popup de CADASTRAR PRODUTO-->
                        <script language="javascript">

                            function CPValidacao() {
                                var nomeProduto = document.getElementById("adicionarProduto").value;
                                var quantidade = document.getElementById("adicionarQuantidade").value;
                                var valor = document.getElementById("adicionarValor").value;
                                if(nomeProduto == "" || quantidade == "" || valor == "" ){
                                    alert('Não deixe campos vazios');
                                    return;
                                }else if(isNaN(quantidade)){
                                    alert('Valor da quantidade invalido');
                                    return;
                                }else if(isNaN(valor)){
                                    alert('Valor do produto invalido');
                                }else if(/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/.test(nomeProduto)!= true){
                                    alert('Insira um nome valido para o produto');
                                    return;
                                }else{//Caso todos os campos estejam certos
                                    CadastrarProduto();
                                }
                            }

                            function CadastrarProduto() {
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                            AtualizarTabela();
                                   }
                                };
                                url = "cadastrar_produto.php" + "?name=" + document.getElementById("adicionarProduto").value + "&qnt=" + document.getElementById("adicionarQuantidade").value + "&price=" + document.getElementById("adicionarValor").value;
                                xhttp.open("GET", url, true);
                                xhttp.send();
                            }

                        </script>

                    </div>
                </div>

            </div>
        </div>
