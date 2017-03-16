<?php
require_once("inventory_header1.php");
require_once("db2_connect.php");
?>

<div class="container">
  <link rel="stylesheet" href="style.css">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center">
          Components Stock
        </h4>
      </div>
      <table class="table table-fixed">
        <thead>
          <tr>
            <th width="15%">S.No </th>
            <th width="35%">Component </th>
            <th width="35%">Component Description </th>
            <th width="15%">Quantity </th>
          </tr>
        </thead>
        <tbody>
          <?php
          while($row = mysqli_fetch_array($result))
          {
            echo '<tr>';
            echo '<td width="15%">' . $row['S_No'] . "</td>";
            echo '<td width="35%">' . $row['component_name'] . "</td>";
            echo '<td width="35%">' . $row['component_description'] . "</td>";
            echo '<td width="15%">' . $row['quantity'] . "</td>";
            echo "</tr>\n";
          } ?>
        </tbody>
      </table>
      <?php mysqli_close($connect); ?>
    </div>
  </div>
</div>
