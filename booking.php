<?php
require_once 'core/db_connect.php';

	$db = new DB_CONNECT();

 


$name=$_POST['dealer'];
$vno=$_POST['vno'];
$date=$_POST['date'];

$time=$_POST['time'];
$x= date('Y-m-d', strtotime($date));
$today = date("Y-m-d");


$sql = "INSERT INTO prebook(name_d, vno, date,time)
VALUES ('$name', '$vno', '$x','$time')";
$em=mysql_query($sql);



?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<head>
<script language="javascript" type="text/javascript">
function btn_onclick() 
{
    window.location.href = "prebook.php";
}
</script>



</head>
<body>
<nav class="w3-sidenav w3-collapse w3-blue w3-card-2 w3-animate-left" style="width:100px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav w3-large w3-hide-large">Close &times;</a>
  <a href="prebook.php"><i class="fa fa-home w3-xxlarge "></i></a> 
  <a href="fetch.html"><i class="fa fa-search w3-xxlarge"></i></a> 
  <a href="#"><i class="fa fa-envelope w3-xxlarge"></i></a> 
 
</nav>

<div class="w3-main" style="margin-left:200px">

  <span class="w3-opennav w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</span>




</header>
<script>
<?php if ($em="1"){?>
</script>
<div class="w3-card-4">

<header class="w3-container w3-blue w3-center ">
  <h1> Booking Confirmed</h1>
</header>


<div class="w3-container w3-text-red">
  <p>Your booking confirmed on <b><?php echo $date?> </b> at <b><?php echo $time?> </b> for your vehicle <b> <?php echo $vno?> </b> at <b><?php echo $name?></b> .</p>
<p>
</p>
</div>

<footer class="w3-container w3-blue">
  <div style="float:left"><h5>Thank You</h5></div><div style="float:right"><button class="w3-btn w3-btn-blue w3-hover-red" name="btn"  onclick="return btn_onclick()">Edit</button></div>


<script>
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
</script>
</footer>

</div>

<script>
<? }?>
</script>

</body>
</html>
