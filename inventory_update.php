<?php
require_once("inventory_header2.php");
include "db2_connect.php";
?>

<link rel="stylesheet" href="style.css">

<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Update Existing</a>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
          <form class="form-horizontal" method="post" action="insert_update.php" id="my_form1">
            <div class="form-group">
              <label class="control-label col-sm-3" for="name">Select Component</label>
              <div class="col-sm-6">
                <select class="styled-select_blue_semi-square" name="Component_No">
                  <?php
                  while($row = mysqli_fetch_array($result))
                  {
                    echo '<option value='. $row['S_No'] .'>'.  $row['component_name'] . ' - ' . $row['quantity'] . '</option>';
                  }
                  ?>
                </select>
              </div>

              </div></a>
              <div class="form-group">
                <label class="control-label col-sm-3" for="pwd"> Update Description </label>
                <div class="col-sm-6">
                  <input type="address" class="form-control" name="Component_Description" placeholder="Enter description">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="pwd"> New Quantity </label>
                <div class="col-sm-6">
                  <input type="address" class="form-control" name="Quantity" placeholder="Enter new quantity">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-5 col-sm-10">
                  <button type="submit" class="btn btn-primary">  Update  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Add new component</a>
            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
          </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
          <div class="panel-body">
            <form class="form-horizontal" method="post" action="insert_add.php">

              <div class="form-group">
                <label class="control-label col-sm-3" for="name">Component Name</label>
                <div class="col-sm-6">
                  <input type="name" class="form-control" name="Component_Name" placeholder="Enter component name">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Component Description</label>
                <div class="col-sm-6">
                  <input type="address" class="form-control" name="Component_Description" placeholder="Enter component description">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Quantity</label>
                <div class="col-sm-6">
                  <input type="address" class="form-control" name="Quantity" placeholder="Enter quantity">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-5 col-sm-10">
                  <button type="submit" class="btn btn-primary">  Add to inventory  </button>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>

      </div>
    </div>

  </body>
  </html>
