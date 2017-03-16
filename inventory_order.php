<?php
require_once("inventory_header3.php");
require_once("db1_connect.php");
?>

<div class="container">
  <link rel="stylesheet" href="style.css">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center">
          Orders
        </h4>
      </div>
      <table class="table table-fixed">
        <thead>
          <tr>
            <th width="5%">S.No </th>
            <th width="10%">Name </th>
            <th width="5%">Roll No. </th>
            <th width="15%">Address </th>
            <th width="10%">Phone No. </th>
            <th width="10%">Email </th>
            <th width="45%">Items </th>
          </tr>
        </thead>
        <tbody>
          <?php
          while($row = mysqli_fetch_array($result))
          {
            echo '<tr>';
            echo '<td width="5%">' . $row['S_No'] . "</td>";
            echo '<td width="10%">' . $row['Name'] . "</td>";
            echo '<td width="5%">' . $row['Roll_no'] . "</td>";
            echo '<td width="15%">' . $row['Address'] . "</td>";
            echo '<td width="10%">' . $row['Phone_no'] . "</td>";
            echo '<td width="10%">' . $row['Email'] . "</td>";
            echo '<td width="45%">' . $row['Items'] . "</td>";
            echo "</tr>\n";
          } ?>
        </tbody>
      </table>
      <?php mysqli_close($connect); ?>
    </div>
  </div>
</div>
