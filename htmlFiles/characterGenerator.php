<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="charGen.css" rel="stylesheet" type="text/css"/>
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
<!--<a href="createAccount.html"><button class="button button5">Create<br>Account</button></a>-->
<a href="characterGenerator.php"><button class="button button2">Character<br>Generator</button></a>
<a href="notes.php"><button class="button button3">Notes<br> </button></a>
<a href="monsterGenerator.php"><button class="button button4">Monster<br>Generator</button></a>
<!--<a href="levelUp.html"><button class="button button5">Level<br>Up</button></a>-->
</div><!-- header -->
</div><!-- header-cont -->

<!--<div class="left">

</div><!--left-->

<div class="content">

<div class="character-form">

<h2>Create a Character!</h2>

<h3>Select from each of the drop down menus and click the button to roll a character!</h3> 
<!--<form action="phpDocumentQuery.php">-->

<br>

<form action="CharacterCreation.php" method="post">
<table>
<thead></thead>
<tbody>
<tr>
<td>
<label for="class">Class</label>
</td>
<td>
<select id="class" name="cclass">
	<option value="barbarian">Barbarian</option>
	<option value="bard">Bard</option>
	<option value="cleric">Cleric</option>
	<option value="druid">Druid</option>
	<option value="fighter">Fighter</option>
	<option value="monk">Monk</option>
	<option value="paladin">Paladin</option>
	<option value="ranger">Ranger</option>
	<option value="sorcerer">Sorcerer</option>
	<option value="warlock">Warlock</option>
	<option value="wizard">Wizard</option>
</select>
</td>
<td>
<label for="race" >Race</label>
</td>
<td>
<select id="race" name="crace">
	<option value="DarkElf">Dark Elf</option>
	<option value="Dragonborn">Dragonborn</option>
	<option value="ForestGnome">Forest Gnome</option>
	<option value="HalfElf">Half Elf</option>
	<option value="HalfOrc">Half Orc</option>
	<option value="HighElf">High Elf</option>
	<option value="HillDwarf">Hill Dwarf</option>
	<option value="Human">Human</option>
	<option value="MountainDwarf">Mountain Dwarf</option>
	<option value="LightfootHalfling">LightFoot Halfling</option>
	<option value="RockGnome">Rock Gnome</option>
	<option value="StoutHalfling">Stout Halfling</option>
	<option value="Tiefling">Tiefling</option>	
	<option value="WoodElf">Wood Elf</option>
</select>
</td>
<td>
<label for="alignment">Alignment</label>
</td>
<td>
<select id="alignment" name="calignment">
	<option value="Lawful Good">Lawful Good</option>
	<option value="Neutral Good">Neutral Good</option>
	<option value="Chaotic Good">Chaotic Good</option>
	<option value="Lawful Neutral">Lawful Neutral</option>
	<option value="True Neutral">True Neutral</option>
	<option value="Chaotic Neutral">Chaotic Neutral</option>
	<option value="Lawful Evil">Lawful Evil</option>
	<option value="Neutral Evil">Neutral Evil</option>
	<option value="Chaotic Evil">Chaotic Evil</option>
</select>
</td>
<tr>
<td>
<label for="level">Level</label>
</td>
<td>
<select id="level" name="clevel">	
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
</select>
</td>


<td>
<label for="background">Background</label>
</td>
<td>
<select id="background" name="cbackground">	
	<option value="Acolyte">Acolyte</option>
	<option value="Charlatan">Charlatan</option>
	<option value="Criminal">Criminal</option>
	<option value="Entertainer">Entertainer</option>
	<option value="Folk Hero">Folk Hero</option>
	<option value="Guild Artisan">Guild Artisan</option>
	<option value="Hermit">Hermit</option>
	<option value="Noble">Noble</option>
	<option value="Outlander">Outlander</option>
	<option value="Sage">Sage</option>
	<option value="Sailor">Sailor</option>
	<option value="Soldier">Soldier</option>
	<option value="Urchin">Urchin</option>
</select>
</td>
</tr>
</tbody>
</table>
<button class="button button6" type="submit" value="submit">Roll a<br>Character</button>


</form>

</div><!--character-form-->
</div><!--content-->

<div class="footer">
<div class="footer-cont">

<br>DoublePlusGood Software Development<br><br><br>
<a href="help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php">Contact us</a>
<br><br><br><br><br><br><br>
<br><br><br>Dungeon and Dragons is owned by Wizards of the Coast

</div><!--footer-cont-->
</div><!--footer-->
</body>
</html>