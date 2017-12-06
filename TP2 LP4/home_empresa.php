<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/head.php'; ?>
</head>

<body>
<?php
    session_start();

    include('includes/navbar.php');
    include 'includes/modal_contato.php';
    include 'includes/modal_login.php';
    include 'includes/modal_recuperar_senha.php';

?>

<section class="acoes-estoque">
  <div class="container">
      <div class="row">
        <div class="col-lg-4 centered-col">
        <button data-toggle="modal" data-target="#modalAdicionar" type="button" class=" btn btn-light-green"><i style="margin-right: 5px;" class="fa fa-plus fa-lg" aria-hidden="true"></i>Adicionar Produto</button>
      </div>
      <div class="col-lg-4 centered-col">
        <button data-toggle="modal" data-target="#modalVenda" type="button" class="  btn btn-yellow"><i style="margin-right: 5px;" class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i> Realizar venda</button>
      </div>
      <div class="col-lg-4 centered-col">
        <button data-toggle="modal" data-target="#modalExcluir" class="  btn btn-danger"><i style="margin-right: 5px;" class="fa fa-close fa-lg" aria-hidden="true"></i> Remover produto</button>
      </div>
      </div>


  </div>
</section>
<section class="tabela-estoque content">
	<div style="padding-top: 50px;" class="container">
	<div class="row">
		<table class="table table-bordered table-hover">
  <thead class="blue lighten-3">
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Quantidade</th>
      <th>Valor</th>
      <th>Excluir/Alterar</th>

    </tr>
  </thead>
  <tbody>
    <tr class="table-info">
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><i style="margin-right: 5px;" class="fa fa-close fa-2x" aria-hidden="true"></i> <i style="margin-left: 5px;" class="fa fa-refresh fa-2x" aria-hidden="true"></i></td>
    </tr>
    <tr class="table-info">
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><i style="margin-right: 5px;" class="fa fa-close fa-2x" aria-hidden="true"></i> <i style="margin-left: 5px; " class="fa fa-refresh fa-2x" aria-hidden="true"></i></td>
    </tr>
    <tr class="table-info">
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td><i style="margin-right: 5px;" class="fa fa-close fa-2x" aria-hidden="true"></i> <i style="margin-left: 5px;" class="fa fa-refresh fa-2x" aria-hidden="true"></i></td>
    </tr>
    <tr class="table-info">
      <th scope="row">4</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td><i style="margin-right: 5px;" class="fa fa-close fa-2x" aria-hidden="true"></i> <i style="margin-left: 5px;" class="fa fa-refresh fa-2x" aria-hidden="true"></i></td>
    </tr>
  </tbody>
</table>
	</div>

</div>
</section>

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
                            <i style="top: 5px;" class="fa fa-table prefix"></i>
                            <input required style="margin-left: 50px;" type="button" class="btn btn-dark-green" id="adicionarCsv" value="Adicionar arquivo CSV" onclick="document.getElementById('file').click();" />
                            <input type="file" style="display:none;" id="file" name="file" accept=".csv" />
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
                                    alert('Aqui vem o comando para inserir o produto no Banco de Dados')
                                }
                            }

                        </script>

                    </div>
                </div>

            </div>
        </div>

         <div class="modal fade" id="modalVenda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal z-depth-1" role="document">

                <div class="modal-content">


                    <div class="modal-header yellow darken-3 white-text">
                        <h4 class="title"><i class="fa fa-shopping-cart"></i> Realizar venda</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                    </div>

                    <div class="modal-body mb-0">

                        <p class="lead text-center">Cadastre as informações da venda</p>

                        <div class="md-form form-sm">
                            <i class="fa fa-user prefix"></i>

                            <input name="nomeComprador" required type="text" id="vendaComprador" class="form-control">
                            <label for="vendaComprador">Nome do comprador</label>

                        </div>

                        
                        <div class="md-form form-sm">
                                <i style="top: 7px;" class="fa fa-cube prefix"></i>
                                <input required type="text" class="form-control" id="vendaProduto"  list = "brosers">
                                <label style="color: #494949;" for="vendaProduto">Nome do produto</label>
                                <datalist id="brosers">
                                    <option value="Macarrão">
                                    <option value="Feijão">
                                    <option value="Arroz">
                                    <option value="Leite">
                                    <option value="Pera">
                                </datalist>
                        </div>

                        <div class="md-form form-sm">
                            <i class="fa fa-cubes prefix"></i>
                            <input name="quantidadeProduto" required type="number" id="vendaQuantidade" class="form-control">
                            <label for="vendaQuantidade">Quantidade</label>
                        </div>

                        <input onclick="RVValidacao();" type="button" value="Adicionar na lista" class="btn btn-default">

                        <div class="md-form form-sm">
                            <i class="fa fa-dollar prefix"></i>
                            <input required min="0"   pattern="^\d+(\.|\,)\d{2}$" title="Digite o dinheiro no formato correto (dois números após a vírgula)" type="text" id="vendaTotal" class="form-control">
                            <label for="formTotal">Valor total (R$)</label>
                        </div>

                        <span>Lista de itens da venda: </span>

                        <!--Comando javascript para atualização da tabela da lista de itens para venda-->
                        <script language="javascript">

                                function inserirLinhaTabela() {

                                    // Captura a referência da tabela com id “minhaTabela”
                                    var table = document.getElementById("minhaTabela");
                                    // Captura a quantidade de linhas já existentes na tabela
                                    var numOfRows = table.rows.length;
                                    // Captura a quantidade de colunas da última linha da tabela
                                    var numOfCols = table.rows[numOfRows-1].cells.length;
                                    // Insere uma linha no fim da tabela
                                    var newRow = table.insertRow(numOfRows);
                                    //Cria uma nova coluna
                                    newCell = newRow.insertCell(0);
                                    // Insere um conteúdo na coluna
                                    newCell.innerHTML = numOfRows;

                                    newCell = newRow.insertCell(1);
                                    newCell.innerHTML = document.getElementById("vendaProduto").value;


                                    newCell = newRow.insertCell(2);
                                    newCell.innerHTML = document.getElementById("vendaQuantidade").value;

                                    //Apaga os valores dos inputs
                                    document.getElementById("vendaProduto").value = "";
                                    document.getElementById("vendaQuantidade").value = "";



                                    //A seguir viria a função php para salvar a venda no banco de dados

                                }

                        </script>

                        <!--Comando javascript para validação dos campos da popup de REALIZAR VENDAS-->
                        <script language="javascript">

                            function RVValidacao() {
                                var nome = document.getElementById("vendaComprador").value;
                                var produto = document.getElementById("vendaProduto").value;
                                var quantidade = document.getElementById("vendaQuantidade").value;
                                if(nome == "" || produto == "" || quantidade == "" ){
                                    alert('Não deixe campos vazios');
                                    return;
                                }else if(isNaN(quantidade)){
                                    alert('Valor da quantidade invalido');
                                    return;
                                }else if(/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/.test(nome)!= true){
                                    alert('Insira um nome valido');
                                    return;
                                }else{//Caso todos os campos estejam certos
                                    return inserirLinhaTabela();
                                }

                            }
                        </script>

                        <form>
                        <table id="minhaTabela" class="table table-bordered">
                          <thead>
                              <th>Código</th>
                              <th>Produto</th>
                              <th>Quantidade</th>
                          </thead>


                        </table>

                        <div class="text-center mt-1-half">
                          <button class="btn btn-outline-danger waves-effect" data-dismiss="modal">CANCELAR</button>
                            <input type="submit" class="btn btn-success" value="REALIZAR VENDA">

                        </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>




    <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">

            <div class="modal-content">


                <div class="modal-header danger-color white-text">
                    <h4 class="title"><i class="fa fa-newspaper-o"></i> Excluir produto</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mb-0">

                        <div class="md-form form-sm">
                                <i style="top: 7px;" class="fa fa-cube prefix"></i>
                                <input required type="text" class="form-control" id="excluirProduto"  list = "excprd">
                                <label style="color: #494949;" for="excluirProduto">Nome do produto</label>
                                <datalist id="excprd">
                                    <option value="Macarrão">
                                    <option value="Feijão">
                                    <option value="Arroz">
                                    <option value="Leite">
                                    <option value="Pera">
                                </datalist>
                        </div>


                    <div class="text-center mt-1-half">
                        <button class="btn btn-success mb-1">EXCLUIR <i class="fa fa-check ml-1"></i></button>
                    </div>

                </div>
            </div>

        </div>
    </div>

<?php
    include 'includes/footer2.php';

?>
</body>
</html>
