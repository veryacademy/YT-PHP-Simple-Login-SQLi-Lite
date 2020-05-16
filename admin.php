<?php
session_start();

if ($_SESSION["checkuser"] === "login")
	{
		echo "You are now logged in";
	} else {
		header("Location: http://localhost/index.php");
	}
?>

<a href="logout.php">logout</a>
