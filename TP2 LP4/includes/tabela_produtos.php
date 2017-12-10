<?php
if(isset($_GET))
  include 'c:/xampp/htdocs/TP2/CRUD_product.php';
echo
"<table class='table table-bordered table-hover'>
      <thead class='blue lighten-3'>
        <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Quantidade</th>
          <th>Valor</th>
          <th>Excluir/Alterar</th>

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
        echo "<td><i style='margin-right: 5px;'' class='fa fa-close fa-2x' aria-hidden='true'></i> <i style='margin-left: 5px;'' class='fa fa-refresh fa-2x' aria-hidden='true'></i></td>";
        echo "</tr>";
        echo "</tbody>";

      }

      ?>
      <tbody>
</table>