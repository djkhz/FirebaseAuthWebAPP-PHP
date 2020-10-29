<?php
	session_start();
	if(isset($_SESSION["auth"]) ){
    
	}else{
		header("location:../index.php");
	}
?>