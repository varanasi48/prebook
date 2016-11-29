<?php
require_once 'core/db_connect.php';

	$db = new DB_CONNECT();
$vno=$_POST['vno'];
$result = mysql_query("SELECT * FROM prebook where vno= '$vno'");


?>
<ul class="w3-ul w3-border w3-border-red" name="vno" >


<!DOCTYPE html>
<html>
<div class="w3-container w3-orange">


<head >

		

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




<h2 class="w3-container w3-center w3-allerta" ><b>Order History</b></h2>
</header>
<?php
$i=0;
while($row = mysql_fetch_array($result)) {

?>
 
<li class="w3-padding-16 w3-xlarge" value="<?=$row["vno"];?>"><?=$row["vno"];?></br>
<span onclick="this.parentElement.style.display='none'" 
    class="w3-closebtn w3-padding">&times;</span>
    <span class="w3-xlarge"><?=$row["name_d"];?></span><br>
    <span><?=$row["date"];?></span></br>
    <span><?=$row["time"];?></span>
</li>

<?php
$i++;
}
?>
</ul>
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
</html>