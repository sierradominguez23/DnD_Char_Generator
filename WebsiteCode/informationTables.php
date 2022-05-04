<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="home.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<title>roll4initiative</title>
</head>

<body>
<div class="header-cont">
<div class="header">
<a href="accountHome.php"><img src="dragonlogo.jpg" 
alt="roll4initiative logo" 
style="width:440px;height:140px;"></a>

<a href="LogOut.php"><button class="button button1">Logout</button></a>
<!--<a href="createAccount.html"><button class="button button12">Create<br>Account</button></a>-->
<a href="characterGenerator.php"><button class="button button2">Character<br>Generator</button></a>
<a href="notes.php"><button class="button button3">Notes<br> </button></a>
<a href="monsterGenerator.php"><button class="button button4">Monster<br>Generator</button></a>
<!--<a href="levelUp.html"><button class="button button5">Level<br>Up</button></a>-->
</div><!-- header -->
</div><!-- header-cont -->

<!--<div class="left">

</div><!--left-->

<div class="content">
<div class="account-form">

<h1>Welcome</h1>
<br><br><br>
<h2>Your Characters</h2>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<table>
   <thead>
   <tr>
      <th>Race</th>
      <th>Class</th>
      <th>Level</th>
      <th>Alignment</th>
      <th>Background</th>
   </tr>
   </thead>
   <tbody>
   <?php
   $DbServer = 'localhost';
   $DbUser  = 'rollfori_query';
   $DbPassword ='dungeon';
   $DbName = 'rollfori_DungeonsAndDragons';
   $id = intval($_SESSION['userID']);
   $conn = mysqli_connect($DbServer, $DbUser, $DbPassword, $DbName) or die('There was a problem connecting with the DB');

   $query =  "Select * from CreatedCharacter WHERE UserID = ".$id.";";
	$result = mysqli_query($conn, $query) or die($conn->error." 10");
   
   while($row = $result->fetch_assoc()) {
    $_SESSION['class'] = $row['Class'];
      $_SESSION['race'] = $row['Race'];
      $_SESSION['ali'] = $row['Alignment'];
      $_SESSION['charlevel'] = $row['Level'];
      $_SESSION['background'] = $row['Background'];
      $_SESSION['abil1'] = $row['PrimaryAbility1'];
      $_SESSION['abil2'] = $row['PrimaryAbility2'];
      $_SESSION['strenScore'] = $row['Strength'];
      $_SESSION['strenMod'] = $row['StrengthMod'];
      $_SESSION['dextScore'] = $row['Dexterity'];
      $_SESSION['dextMod'] = $row['DexterityMod'];
      $_SESSION['conScore'] = $row['Constitution'];
      $_SESSION['conMod'] = $row['ConstitutionMod'];
      $_SESSION['intelligence'] = $row['Intelligence'];
      $_SESSION['intellMod'] = $row['IntelligenceMod'];
      $_SESSION['wisScore'] = $row['Wisdom'];
      $_SESSION['wisMod'] = $row['WisdomMod'];
      $_SESSION['charScore'] = $row['Charisma'];
      $_SESSION['charMod'] = $row['CharismaMod'];
      $_SESSION['inspiration'] = $row['Inspiration'];
      $_SESSION['prof'] = $row['ProficiencyBonus'];
      $_SESSION['wealth'] = $row['InitialWealth'];
      $_SESSION['speed'] = $row['Speed'];
      $_SESSION['charHitdie'] = $row['HitDiePerLevel'];
      $_SESSION['throw1'] = $row['SavingThrow1'];
      $_SESSION['throw2'] = $row['SavingThrow2'];
      $_SESSION['skills'] = $row['Skills'];
      $_SESSION['language'] = $row['Languages'];
      $_SESSION['feat'] = $row['Features'];
      $_SESSION['trait'] = $row['Traits'];
      $_SESSION['armProf'] = $row['ArmorProf'];
      $_SESSION['weapProf'] = $row['WeaponProf'];
      $_SESSION['toolProf'] = $row['ToolProf'];
      $_SESSION['equip'] = $row['Equipment'];
      $_SESSION['tool'] = $row['Tools'];
      $_SESSION['classSpecials'] = $row['ClassSpecials'];
      echo
   '<tr>
      <td><a href ="character.php">'.$row['Race'].'</a></td>
      <td>'.$row['Class'].'</td>
      <td>'.$row['Level'].'</td>
      <td>'.$row['Alignment'].'"</td>
      <td>'.$row['Background'].'</td>
   </tr>';
   }
   ?>
   </tbody>
</table>
<br><br><br>
<h2>Your Monsters</h2>
<table>
   <thead>
   <tr>
      <th>Name</th>
      <th>Challenge Rating</th>
   </tr>
   </thead>
   <tbody>
   <?php
   $DbServer = 'localhost';
   $DbUser  = 'rollfori_query';
   $DbPassword ='dungeon';
   $DbName = 'rollfori_DungeonsAndDragons';
   $id = intval($_SESSION['userID']);

   $conn = mysqli_connect($DbServer, $DbUser, $DbPassword, $DbName) or die('There was a problem connecting with the DB');

   $query =  "Select * from CreatedMonster WHERE UserID = ".$id.";";
	$result = mysqli_query($conn, $query) or die($conn->error." 10");
   
   while($row = $result->fetch_assoc()) {
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
			
      echo
   '<tr>
      <td><a href="monster.php">'.$row['Name'].'</a></td>
      <td>'.$row['ChallengeRating'].'</td>
   </tr>';
   }
   ?>
   </tbody>
</table>
<br><br><br>
</div> <!--account-form-->
</div> <!-- content -->


<div class="footer">
<div class="footer-cont">

<br>DoublePlusGood Software Development<br><br><br>
<a href="help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php">Contact us</a><br><br><br><br><br><br><br>
<br><br><br>Dungeon and Dragons is owned by Wizards of the Coast



</div><!--footer-cont-->
</div><!--footer-->
</body>

</html>