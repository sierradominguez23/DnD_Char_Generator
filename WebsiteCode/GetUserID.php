<?php

function getUserID($userName){

  $DbServer = 'localhost';
  $DbUser  = 'rollfori_query';
  $DbPassword ='dungeon';
  $DbName = 'rollfori_DungeonsAndDragons';
  
   global  $db;
   $conn = mysqli_connect($DbServer, $DbUser, $DbPassword, $DbName) or die('There was a problem connecting with the DB');

//Get UserName
   $userName = mysqli_real_escape_string($conn, $userName);
   $query =  "Select * from LogIn where UserName = '".$userName."';";
	$result = mysqli_query($conn, $query) or die($db->error." 10");
	$row = $result->fetch_assoc();
	$userID = $row['UserID'];
   
   return $userID;
}
?>