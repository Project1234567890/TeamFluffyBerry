<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="page.css" rel="stylesheet" type="text/css" />
  </head>
  <body>

<?php
//include "connectdb.php";
//include "t_nav.html";

  if (!isset($_POST['submit'])){

?>
<form method="post" action="<?php echo
htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  FORM A<br>
  Automotive Intake Repair Form<br>
  (including all motorized vehicles and equipment)<br><br>
  Work Order #:
  <input type="text" name="workorder" value="<?php echo $workorder?>"
required><br><br>
  SCHOOL INFORMATION<br>
  School Name and Address:
  <input type="text" name="school" value="<?php echo $school?>"required><br>
  (hereinafter "the School")<br><br>
  Teacher:   <table style="width:40%">
    <tr>
        <td><input type="text" name="teacher_last" value="<?php echo
$teacher_last_name?>" required><br></td>
        <td><input type="text" name="teacher_first" value="<?php echo
$teacher_first_name?>" required><br></td>
    </tr>
    <tr>
      <td>(Last)</td>
      <td>(First)</td>
    </tr>
  </table>
<br>
  AUTOMOBILE TO BE REPAIRED<br>
  <table style="width:100%">
    <tr>
      <td>Year: <input type="text" name="year" value="<?php echo
$year?>"required></td>
      <td>Make: <input type="text" name="make" value="<?php echo
$make?>"required></td>
      <td>Model: <input type="text" name="model" value="<?php echo
$model?>"required></td>
    </tr>
    <tr>
      <td>VIN #:<input type="text" name="vin" value="<?php echo
$vin?>"required></td>
      <td>License Plate:<input type="text" name="license" value="<?php
echo $license?>"required></td>
      <td>Odometer:<input type="text" name="odometer" value="<?php
echo $odometer?>"required></td>
    </tr>
  </table>
  <br><br>
  Detailed description of work to be performed including anticipated
parts (including whether each part is a
  new part provided by the original equipment manufacturer, a new part
not provided by the original
  equipment manufacturer, a used part or a reconditioned part) shop
materials, environmental related, fees,
  disposal/recycling fees, etc.:<br><br>
  <textarea name="description" value="<?php echo $description?>"
rows="5" cols="40"required></textarea>
  <br><br>
  Date on which the work shall be completed:<input type="date"
name="end_date" value="<?php echo $end_date?>" min= "<?php
date('Y-m-d');?>" placeholder="YYYY-MM-DD"required><br><br>


  <table style="width:100%">
    <tr>
      <th>TOTAL ESTIMATED COST</th>
      <th>Price Per Unit</th>
      <th>Line Total</th>
    </tr>

    <tr>
      <td>PARTS:</td>
      <td>$<input type="text" name="parts_a" value="<?php echo
$parts_a?>"required></td>
      <td>$<input type="text" name="parts_b" value="<?php echo
$parts_b?>"required></td>
    </tr>
    <tr>
      <td>LABOUR:</td>
      <td>$<input type="text" name="labour_a" value="<?php echo
$labour_a?>"required></td>
      <td>$<input type="text" name="labour_b" value="<?php echo
$labour_b?>"required></td>
      </tr>
        <tr>
      <td>SHOP SUPPLIES:</td>
      <td>$<input type="text" name="shop_a" value="<?php echo
$shop_a?>"required></td>
      <td>$<input type="text" name="shop_b" value="<?php echo
$shop_b?>"required></td>
      </tr>
      <tr>
      <td>RECYCLING/ DISPOSAL FEE:</td>
      <td>$<input type="text" name="fee_a" value="<?php echo
$fee_a?>"required></td>
      <td>$<input type="text" name="fee_b" value="<?php echo
$fee_b?>"required></td>
      </tr>
      <tr>
      <td>TOTAL ESTIMATED COST:</td>
      <td></td>
      <td>$<input type="text" name="total_cost" value="<?php echo
$total_cost?>" required></td>
      </tr>
  </table>
  <br><br>
  The Board agrees that it will not charge the undersigned an amount
that exceeds the Total
  Estimated Cost by more than 10 per cent.<br>
  Date of estimate: <input type="date" name="est_date" value="<?php
echo $est_date?>" min= "<?php date('Y-m-d');?>"
placeholder="YYYY-MM-DD" required><br>
  This estimate expires on: <input type="date" name="expire"
value="<?php echo $expire?>" min= "<?php date('Y-m-d');?>"
placeholder="YYYY-MM-DD" required><br><br>
  <input type="submit" name="submit" value="Send">

</form>
<?php
  }else{
    $workorder = $_POST['workorder'];
    $school = $_POST['school'];
    $teacher_first = $_POST['teacher_first'];
    $teacher_last = $_POST['teacher_last'];
    $year = $_POST['year'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $vin = $_POST['vin'];
    $license = $_POST['license'];
    $odometer = $_POST['odometer'];
    $description = $_POST['description'];
    $end_date = $_POST['end_date'];
    $parts_a = $_POST['parts_a'];
    $parts_b = $_POST['parts_b'];
    $shop_a = $_POST['shop_a'];
    $shop_b = $_POST['shop_b'];
    $labour_a = $_POST['labour_a'];
    $labour_b = $_POST['labour_b'];
    $fee_a = $_POST['fee_a'];
    $fee_b = $_POST['fee_b'];
    $total_cost = $_POST['total_cost'];
    $est_date = $_POST['est_date'];
    $expire = $_POST['expire'];

/*
$sql = "INSERT INTO FORM_A(work_order_num, school_name,
teacher_first_name, teacher_last_name, year, make, model, vin_num,
license_plate, odometer, detailed_desc, end_date, parts_ppu,
parts_total,labour_ppu, labour_total, shop_supplies_ppu,
shop_supplies_total, recycle_dispose_ppu, recycle_dispose_total,
estimated_total_cost, estimate_date, estimate_expires_on) VALUES
('$workorder', '$school', '$teacher_first', '$teacher_last', '$year',
'$make', '$model', '$vin', '$license', '$odometer', '$description',
'$end_date', '$parts_a', '$parts_b', '$labour_a', '$labour_b',
'$shop_a', '$shop_b',  '$fee_a', '$fee_b', '$total_cost', '$est_date',
'$expire')";

   if($conn->query($sql)==TRUE){
   }else{
     echo "Error ".$sql."<br>".$conn->error;
   }
$conn->close();*/
?>
<a href="index.html">Return to home?</a>
<?php
}
?>
  </body>
</html>
