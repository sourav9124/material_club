<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="material_club";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
	 die(mysqli_connect_error());
}
else
{

}
?>