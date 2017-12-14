<?php
include '../CRUD_product.php';
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
        session_start();
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
      <tbody>
</table>