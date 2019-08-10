<?php
session_start();

	if($_SESSION["login"] == "admin"){
		echo "Flag is IT@KMITL{IloveSQLinjection}";
	}else{
		echo "not admin";
	}
?>
