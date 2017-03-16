<?php
  require_once("db2_connect.php");
  $S_No=$_POST['Component_No'];
  $component_description=$_POST['Component_Description'];
  $quantity=$_POST['Quantity'];
  echo $quantity;
  echo $S_No;
  mysqli_query($connect,"UPDATE components SET component_description='$component_description'
  , quantity = '$quantity' WHERE S_No='$S_No'");
?>
