<?php
require_once("db2_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Request for items</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<div class="container">
  <h2 class="text-center">Request for components</h2>
  <form class="form-horizontal" method="post" action="form_data.php">

    <div class="form-group">
      <label class="control-label col-sm-3" for="name">Name</label>
      <div class="col-sm-6">
        <input type="name" class="form-control" name="name" placeholder="Enter name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Roll No</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="roll_no" placeholder="Enter roll no.">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Address</label>
      <div class="col-sm-6">
        <input type="address" class="form-control" name="address" placeholder="Enter address">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Phone No</label>
      <div class="col-sm-6">
        <input type="phone no." class="form-control" name="phone_no" placeholder="Enter phone no.">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Email</label>
      <div class="col-sm-6">
        <input type="phone no." class="form-control" name="email" placeholder="Enter iitk email id">
      </div>
    </div>

    <div class="form-group">
      <h3 class="text-center">Select Items</h3>
    </div>

    <div class="form-group">
    <table class="table table-striped" id="mytable">
      <thead>
        <tr>
          <th>Components</th>
          <th>Quantity</th>
        </tr>
      </thead>
      <tbody>
        <tr class="drop">
          <td>
            <input class="col-sm-offset-4" type="text" name="Components[]" />
          </td>
          <td>
            <input class="col-sm-offset-4" type="number" name="Quantity[]" />
          </td>
        </tr>
      </tbody>
    </table>
    <div>

    <div class="form-group">
      <div class="col-sm-offset-2">
        <button type="button" class="btn btn-default" id="add_button">Add another item</button>
      </div>
      <script>
      $(document).ready(function() {
        $('#add_button').click(function() {
          $('#mytable > tbody:last-child').append('<tr class="drop"><td><input class="col-sm-offset-4" type="text" name="Components[]" /></td><td><input class="col-sm-offset-4" type="number" name="Quantity[]" /></td></tr>');
        });
      });
      </script>
    </div>
    <br>

    <div class="form-group">
      <div class="col-sm-offset-9 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>

  </form>
</div>

</body>
</html>
