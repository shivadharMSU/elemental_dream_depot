<?php
	

	$dsn = 'mysql:host=localhost;dbname=elemental_dream_depot';
 $username = 'elementalroot';
 $password = 'elementalpassword';
 try {
 $conn = new PDO($dsn, $username, $password);
 } catch (PDOException $e) {
 $error_message = $e->getMessage();

 echo $error_message ;
 exit();
 }
?>