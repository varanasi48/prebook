<?php
require_once 'core/db_connect.php';

	$db = new DB_CONNECT();

 
$result = mysql_query("SELECT * FROM users where category= 'driver'");
$today = date("Y-m-d");
$x= date('d-m-Y', strtotime($today));



?>
<!DOCTYPE html>
<html>
<div class="w3-container w3-orange">


<head >
<link rel="stylesheet" type="text/css" href="dist/DateTimePicker.css" />
	
		<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="dist/DateTimePicker.js"></script>
	
		<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="dist/DateTimePicker-ltie9.css" />
			<script type="text/javascript" src="../src/DateTimePicker-ltie9.js"></script>
		<![endif]-->
		
		<style type="text/css">
		
			p
			{
				margin-left: 20px;
			}
		
			input
			{
				width: 200px;
				padding: 10px;
				margin-left: 20px;
				margin-bottom: 20px;
			}
		
		</style>
	
		
		

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
<style>
.w3-allerta {
  font-family: "Allerta Stencil", Sans-serif;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Title of the document</title>
</head>
</div>

<div class="w3-rest w3-card-8  w3-red">




<body>

	

<nav class="w3-sidenav w3-collapse w3-blue w3-card-2 w3-animate-left" style="width:100px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav w3-large w3-hide-large">Close &times;</a>
  <a href="prebook.php"><i class="fa fa-home w3-xxlarge "></i></a> 
  <a href="fetch.html"><i class="fa fa-search w3-xxlarge"></i></a> 
  <a href="#"><i class="fa fa-envelope w3-xxlarge"></i></a> 
 
</nav>

<div class="w3-main" style="margin-left:200px">
<header class="w3-container w3-teal">
  <span class="w3-opennav w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</span>




<h2 class="w3-container w3-center w3-allerta" ><b>Booking</b></h2>
</header>
<div>









<form class="w3-container" action="booking.php"  method='POST'>



<label class="w3-label w3-text-white w3-validate ">Dealer</label>
<select class="w3-select w3-border w3-border-red" name="dealer" required>

<option value="" disabled selected>Choose your Dealer</option>
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
echo $row;
?>
 
<option value="<?=$row["user_name"];?>"><?=$row["user_name"];?></option>
<?php
$i++;
}
?>
</select>


<label class="w3-label w3-text-white w3-validate">vehicle number</label>
<input class="w3-input" type="text" 
pattern='^[A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{4}$' title='Please enter proper vehicle number' name="vno"  style="text-transform:uppercase" required>

<label class="w3-label w3-text-white w3-validate">Phone</label>
<input class="w3-input" type="mumber" pattern='^[9,7,8]{1}[0-9]{9}' title='Phone Number (9999999999)' name="phone" max="10"   required>

<label class="w3-label w3-text-white w3-validate">Date</label>
<input class="w3-input" type="date" name="date"  required>

<label class="w3-label w3-text-white w3-validate">Time</label>
		<input class="w3-input" type="time" name="time" required>
	
		<div id="dtBox"></div>
	
		<script type="text/javascript">
		
			$(document).ready(function()
			{
				$("#dtBox").DateTimePicker({
                                 minDate: "<?php echo $x?>",
		
})});
		
		</script>

<p><button class="w3-btn w3-white w3-border w3-round-large w3-center" name="submit">Submit</button></p>





</form>
<footer class="w3-container  w3-green">
 
<div><img src="image/icon_launcher.png" class="w3-image w3-left w3-padding"  style="height:100px;
    width:120px" alt="fog" >

<img src="image/hpcl.png" class="w3-image w3-right  w3-padding" alt="hpcl" style="height:90px;
    width:120px "></div>
</footer>
<script>
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
</script>


</body>

</div>
</html>




