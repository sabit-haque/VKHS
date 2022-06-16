<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// SHOULD BE EXECUTED AFTER THE SUBMIT BUTTON WAS CLICKED
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['type']) && ($_POST['type']=='new_entry')) {

    // include connection details
    include '../../plugins/MySQL/connect_db.php';

    // Open a new connection to the MySQL server
    $con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

    // Output any connection error
    if ($con->connect_error) {
        die('Error : ('. $con->connect_errno .') '. $con->connect_error);
    }

    // define variables
    $table = 'calendar';
    $type = mysqli_real_escape_string($con,$_POST['type']);
    $holidex = mysqli_real_escape_string($con,$_POST['holidex']);

    if($type == 'new_entry')
    {               
        // define variables and query
        $mod_property = mysqli_real_escape_string($con,$_POST['holidex']);
        $mod_name = mysqli_real_escape_string($con,$_POST['mod_name']);
        $mod_date = date('Y-m-d',strtotime($_POST['mod_date']));

        $sql = "INSERT INTO calendar (`title`, `startdate`, `enddate`, `allDay`, `color`, `holidex`) VALUES ('$mod_name','$mod_date','$mod_date','true','','$mod_property')";

        print($sql);

        // $result = $con->query($sql) or die('<p>Could not submit new MOD record into database: ' . MYSQLI_ERROR() . '</p>');

        $result->free();
    }

    $con->close();
}
?>



        <form name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <!-- <form name="mod_form" action="../../plugins/MySQL/ajax_action.php?type=new_entry" method="POST"> -->

          <!-- Property -->
          <div class="col-md-4">
            <label>Property</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-server"></i></span>
                <select name="holidex" id="holidex" class="form-control select2" style="width: 100%;" data-placeholder="Select your property" onchange="this.form.submit();" method="POST" <?php if($_SESSION['Access']=='User') { echo "disabled"; } ?>>

                    // get all my departments and their respective codes
                    <option value="1">Dept. 1</option>
                    <option value="2">Dept. 2</option>
                    <option value="3">Dept. 3</option>

                </select>
            </div>
            <!-- /btn-group -->
          </div>
          <!-- /.property -->

        </form>

        <form name="form2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <!-- MOD Name -->
          <div class="col-md-4">
            <label>MOD Name</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <select name="mod_name" id="mod_name" class="form-control select2" style="width: 100%;" data-placeholder="Select a name">
                    <option value=""></option>
                    <option value="1">User1</option>
                    <option value="2">User2</option>
                    <option value="3">User3</option>
                </select>
            </div>
            <!-- /.input-group -->
          </div>
          <!-- /.mod name -->

          <!-- MOD Date -->
          <div class="col-md-3">
            <label>MOD Date</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-server"></i></span>
              <input type="date" class="form-control" name="daterangepicker" id="daterangepicker" />
              <!-- <input type="date" id="mod_date" name="mod_date" class="form-control" style="width: 100%;"> -->
            </div>
          </div>
          <!-- /.mod date -->

            // hidden input field to determine the type and help differentiate the $_POST submissions
            <input type="hidden" class="form-control" name="type" id="type" value="new_entry"/>

          <!-- Submit button -->
          <div class="col-md-1 text-center">
            <label>&nbsp;</label>
            <button type="submit" name="btnSubmit" class="btn btn-primary btn-block" onclick="this.disabled=true; this.value = 'Wait...'; this.form.submit(); return true;">Submit</button>
          </div>
          <!-- /.submit button -->

        </form>
        <!-- /.form 2 -->
</body>
</html>