<?php
/*$host= "localhost";
$db_name="chakron_airline";
$db_username="chakr_airline";
$db_password="airline";*/

$host= "localhost";
$db_name="fuelovoa_fuel";
$db_username="fuelovoa_fuel";
$db_password="sravani";
try
{
$pdo= new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
}
catch(PDOException $e)
{
exit("Error Connectiong to database");
}
?>