<?php
session_start();
$name = $_POST['monstername'];

$DbServer = 'localhost';
$DbUser  = 'rollfori_query';
$DbPassword ='dungeon';
$DbName = 'rollfori_DungeonsAndDragons';  


$conn = mysqli_connect($DbServer, $DbUser, $DbPassword, $DbName) or die('There was a problem connecting with the DB');

$name = mysqli_real_escape_string($conn, $name);
$query = "Insert into CreatedMonster (SELECT  * FROM Monster WHERE Name = '".$name."');";
mysqli_query($conn, $query) or die($db->error." 18");
//Retrieve Monster ID
$monsterID = mysqli_insert_id($conn) or die ($db->error);

$id = intval($_SESSION['userID']);
$update = "Update CreatedMonster set UserID = ".$id." where MonsterID = ".$monsterID.";";
mysqli_query($conn, $update) or die($db->error." 18");


$query = "SELECT  * FROM Monster WHERE Name = '".$name."';";
$result = mysqli_query($conn, $query) or die($db->error." 18");
$row = $result->fetch_assoc();
 
$_SESSION['challengeRate'] = $row['ChallengeRating'];
$_SESSION['strengthScore'] = $row['STR'];;
$_SESSION['strengthMod'] = $row['STRMod'];
$_SESSION['DexScore'] = $row['DEX'];
$_SESSION['DexMod'] = $row['DEXMod'];
$_SESSION['ConstiScore'] = $row['CON'];
$_SESSION['ConstiMod'] = $row['CONMod'];
$_SESSION['intelligenceScore'] = $row['INT'];
$_SESSION['intelligenceMod'] = $row['INTMod'];
$_SESSION['WisdomScore'] = $row['WIS'];
$_SESSION['WisdomMod'] = $row['WISMod'];
$_SESSION['CharismaScore'] = $row['CHA'];
$_SESSION['CharismaMod'] = $row['CHAMod'];
$_SESSION['ac'] = $row['AC'];
$_SESSION['hitDie'] = $row['HPDice'];
$_SESSION['$hp'] = $row['HP'];

echo ' <script type="text/javascript">
               window.location.href = "http://www.rollforinitiativelsj.com/monster.php";
        </script>
        ';

?>