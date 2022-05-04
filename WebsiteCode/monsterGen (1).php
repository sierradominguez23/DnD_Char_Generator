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


$query = "SELECT  * FROM CreatedMonster WHERE MonsterID = ".$name." AND UserID = ".$id.";";
$result = mysqli_query($conn, $query) or die($db->error." 18");
$row = $result->fetch_assoc();
 
$_SESSION['challengeRate'] = $row['ChallengeRating'];
$_SESSION['strengthScore'] = $row['STR'];;
$_SESSION['strengthMod'] = $row['STRMod'];
$_SESSION['DexScore'] = $row['DEX'];
$_SESSION['DexMod'] = $row['DEXMod'];
$_SESSION['ConstiScore'] = $row['CON'];
$_SESSION['ConstiMod'] = $row['CONMod'];
$_SESSION['intelligenceScore'] = $row['INTEL'];
$_SESSION['intelligenceMod'] = $row['INTMod'];
$_SESSION['WisdomScore'] = $row['WIS'];
$_SESSION['WisdomMod'] = $row['WISMod'];
$_SESSION['CharismaScore'] = $row['CHA'];
$_SESSION['CharismaMod'] = $row['CHAMod'];
$_SESSION['ac'] = $row['AC'];
$_SESSION['hitDie'] = $row['HPDice'];
$_SESSION['$hp'] = $row['HP'];


/*$ChallengRating = mysqli_real_escape_string($conn, $_SESSION['challengeRate']);
$STR = mysqli_real_escape_string($conn, $_SESSION['strengthScore']);
$STRMod = mysqli_real_escape_string($conn, $_SESSION['StrengthMod']);
$DEX = mysqli_real_escape_string($conn, $_SESSION['DexScore']);
$DEXMod = mysqli_real_escape_string($conn, $_SESSION['DexMod']);
$CON = mysqli_real_escape_string($conn, $_SESSION['ConstiScore']);
$CONMod = mysqli_real_escape_string($conn, $_SESSION['ConstiMod']);
$INT = mysqli_real_escape_string($conn, $_SESSION['intelligenceScore']);
$INTMod = mysqli_real_escape_string($conn, $_SESSION['intelligenceMod']);
$WIS = mysqli_real_escape_string($conn, $_SESSION['WisdomScore']);
$WISMod = mysqli_real_escape_string($conn, $_SESSION['WisdomMod']);
$CHA = mysqli_real_escape_string($conn, $_SESSION['CharismaScore']);
$CHAMod = mysqli_real_escape_string($conn, $_SESSION['CharismaMod']);
$AC = mysqli_real_escape_string($conn, $_SESSION['ac']);
$HPDice = mysqli_real_escape_string($conn, $_SESSION['hitDie']);
$HP = mysqli_real_escape_string($conn, $_SESSION['$hp']);

$save = "INSERT INTO CreatedMonster(UserID, Name, ChallengeRating, AC, STR, STRMod, DEX, DEXMod, CON, CONMod, INT, INTMod, WIS, WISMod, CHA, CHAMod, HPDice, HP) Values (".$id.", '".$name."', '".$ChallengRating."', ".$AC.", ".$STR.", ".$STRMod.", ".$DEX.", ".$DexMod.", ".$CON.", ".$CONMod.", ".$INT.", ".$INTMod.", ".$WIS.", ".$WISMod.", ".$CHA.", ".$CHAMod.", '".$HPDice."', '".$HP."');";
mysqli_query($conn, $save) or die(mysqli_error($conn));
*/

echo ' <script type="text/javascript">
               window.location.href = "http://www.rollforinitiativelsj.com/monster.php";
        </script>
        ';

?>