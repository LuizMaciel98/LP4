<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/head.php'; ?>
</head>

<body>
<?php

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
	<div class="row" id="tabela-de-produtos">
		<?php
include 'CRUD_product.php';
echo
"<table class='table table-bordered table-hover'>
      <thead class='blue lighten-3'>
        <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Quantidade</th>
          <th>Valor</th>
          <th>Excluir</th>
          <th>Alterar</th>

        </tr>
      </thead>";
      $cnpj = $_SESSION["cnpj"];
      $tab = SelectProducts($cnpj);
      while ($lin = mysqli_fetch_assoc($tab)) {
        echo "<tbody>";
        echo "<tr class='table-info'>";
        echo "<th scope='row'>" .$lin["cd_product"]. "</th>";
        echo "<td>" .$lin["nm_product"].  "</td>";
        echo "<td>" .$lin["qt_product"]. "</td>";
        echo "<td>" .$lin["vl_product"]. "</td>";
        echo "<td>
                <form action='deletar_produto.php' method='get'>
                    <input type='hidden' name='nomeProduto' value='".$lin["nm_product"]."'/>
                    <button type='submit' style='background-color: Transparent;background-repeat:no-repeat; border: none;'>
                        <i style='margin-right: 5px;' class='fa fa-close fa-2x' aria-hidden='true'></i>
                    </button>
                </form>
             </td>";
        echo "<td>
                    <button data-toggle='modal' onclick=\"EditarProduto('" .$lin['nm_product']. "', '" .$lin['qt_product']. "', '" .$lin['vl_product']. "', '" .$lin['cd_product']. "')\" type='button' style='background-color: Transparent;background-repeat:no-repeat; border: none;'>
                        <i style='margin-left: 5px;' class='fa fa-refresh fa-2x' aria-hidden='true'></i>
                    </button>
            </td>";
        echo "</tr>";
        echo "</tbody>";

      }

      ?>
      
</table>
	</div>

</div>

<script type="text/javascript">
    function AtualizarTabela() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tabela-de-produtos").innerHTML = this.responseText;
           }
        };
        url = "includes/tabela_produtos.php?";
        xhttp.open("GET", url, true);
        xhttp.send();
    }
</script>
</section>

<?php
include 'includes/modal_produto.php';
include 'includes/modal_editar_produto.php';
?>
<script type="text/javascript">
    function EditarProduto(nm, qnt, vl, cd) {
       $("#modalEditarProduto").modal();
       document.getElementById("NovoNome").value = nm;
       document.getElementById("NovaQuantidade").value = qnt;
       document.getElementById("NovoPreco").value = vl;
       document.getElementById("cd").value = cd
    }
</script>

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

                        <form action="venda.php">

                        <div class="md-form form-sm">
                            <i class="fa fa-user prefix"></i>

                            <input name="nomeComprador" required type="text" id="vendaComprador" class="form-control">
                            <label for="vendaComprador">Nome do comprador</label>

                        </div>

                        
                        <div class="md-form form-sm">
                            
                                <i style="top: 7px;" class="fa fa-cube prefix"></i>
                                <input type="text" class="form-control" id="vendaProduto"  list ="prods">
                                <label style="color: #494949;" for="vendaProduto">Nome do produto</label>
                                <datalist id="prods">
                                    <?php
                                    $tab = SelectProducts($cnpj);
                                    while ($lin = mysqli_fetch_assoc($tab)) {
                                        echo "<option value=\"" .$lin['nm_product']. "\">";
                                    }
                                    ?>
                                </datalist>
                        </div>

                        <div class="md-form form-sm">
                            <i class="fa fa-cubes prefix"></i>
                            <input name="quantidadeProduto" type="number" id="vendaQuantidade" class="form-control">
                            <label for="vendaQuantidade">Quantidade</label>
                        </div>

                        <input onclick="RVValidacao();" type="button" value="Adicionar na lista" class="btn btn-default">

                        <div class="md-form form-sm">
                            <i class="fa fa-dollar prefix"></i>
                            <input required min="0"   pattern="^\d+(\.|\,)\d{2}$" title="Digite o dinheiro no formato correto (dois números após a vírgula)" type="text" id="vendaTotal" name="vendaTotal" class="form-control">
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
                                    //newCell = newRow.insertCell(0);
                                    // Insere um conteúdo na coluna
                                    //newCell.innerHTML = numOfRows;

                                    newCell = newRow.insertCell(0);
                                    nome_input = document.createElement("input");
                                    nome_input.type = "hidden";
                                    nome_input.name = "produto[" + (numOfRows - 1) + "]";
                                    nome_input.value = document.getElementById("vendaProduto").value;
                                    newCell.innerHTML = document.getElementById("vendaProduto").value;
                                    newCell.append(nome_input);


                                    newCell = newRow.insertCell(1);
                                    quant_input = document.createElement("input");
                                    quant_input.type = "hidden";
                                    quant_input.name = "quant[" + (numOfRows - 1) + "]";
                                    quant_input.value = document.getElementById("vendaQuantidade").value;
                                    newCell.innerHTML = document.getElementById("vendaQuantidade").value;
                                    newCell.append(quant_input);

                                    //Apaga os valores dos inputs
                                    document.getElementById("vendaProduto").value = "";
                                    document.getElementById("vendaQuantidade").value = "";



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

                        <table id="minhaTabela" class="table table-bordered">
                          <thead>
                              <th>Produto</th>
                              <th>Quantidade</th>
                          </thead>


                        </table>

                        <div class="text-center mt-1-half">
                          <button type="submit" class="btn btn-outline-danger waves-effect" data-dismiss="modal">CANCELAR</button>
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
                <form action="deletar_produto.php" method="get">
                        <div class="md-form form-sm">
                                <i style="top: 7px;" class="fa fa-cube prefix"></i>
                                <input required type="text" name="nomeProduto" class="form-control" id="excluirProduto">
                                <label style="color: #494949;" for="excluirProduto">Nome do produto</label>

                        </div>


                    <div class="text-center mt-1-half">
                        <button type="submit" class="btn btn-success mb-1">EXCLUIR <i class="fa fa-check ml-1"></i></button>
                    </div>
                </form>
                </div>
            </div>

        </div>
    </div>

<?php
    include 'includes/footer2.php';

?>
</body>
</html>
