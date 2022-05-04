<?php
session_start();

$DbServer = 'localhost';
   $DbUser  = 'rollfori_query';
   $DbPassword ='dungeon';
   $DbName = 'rollfori_DungeonsAndDragons';
   $id = intval($_SESSION['userID']);
   $conn = mysqli_connect($DbServer, $DbUser, $DbPassword, $DbName) or die('There was a problem connecting with the DB');
   
   $select = "Select * FROM C"
   $query =  "Select * from CreatedCharacter WHERE UserID = ".$id." AND ;";
	$result = mysqli_query($conn, $query) or die($conn->error." 10");


?>