<?php
require_once("db2_connect.php");
$component_name=$_POST['Component_Name'];
$component_description=$_POST['Component_Description'];
$quantity=$_POST['Quantity'];
mysqli_query($connect,"INSERT INTO components (component_name,component_description,quantity)
VALUES ('$component_name','$component_description','$quantity')");
?>
