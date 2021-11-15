<?php

$sname= "db4free.net";
$unmae= "hyperdevweb";
$password = "Nilslahme123";

$db_name = "hyperdevweb";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}