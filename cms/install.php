<?php
$db_name = $_POST["database"];
$connect = mysql_connect("localhost",$_POST["username"],$_POST["password"]);

if (!$connect)
  {
  die('Could not connect: ' . mysql_error());
  }

if (mysql_query("CREATE DATABASE `" . $db_name . "`",$connect))
  {
  echo "Database created:<b> $db_name </b><br /><br />";
	
	// Create table
	$prefix = $_POST["prefix"];

	mysql_select_db($db_name, $connect);
	$sql = "CREATE TABLE " . $prefix . "People
	(
	FirstName varchar(15),
	LastName varchar(15),
	Age int
	)";
	mysql_query($sql,$connect);


	$sql = "CREATE TABLE " . $prefix . "Others
	(
	Other1 varchar(15),
	Other2 varchar(15),
	Other3 int
	)";

	echo "Tables created: <br>	<li>" . $prefix . "Persons</li>
								<li>" . $prefix . "Others</li>";

	// Execute query
	mysql_query($sql,$connect);
	}
	
else
  {
  echo "Error creating database: " . mysql_error();
  }

mysql_close($connect);
?>