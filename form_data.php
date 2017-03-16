<?php
require_once("db1_connect.php");
$name=$_POST['name'];
$roll_no=$_POST['roll_no'];
$address=$_POST['address'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
$components = $_POST['Components'];
$quantity = $_POST['Quantity'];
$items = "";
foreach ($components as $index => $component)
{
  $items .= $component.'-'. $quantity[$index].',';
}
mysqli_query($connect,"INSERT INTO request (Name,Roll_no,Address,Phone_no,Email,Items)
VALUES ('$name','$roll_no','$address','$phone_no','$email','$items')");
?>
