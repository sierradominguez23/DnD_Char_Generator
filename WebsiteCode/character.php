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

<table>
<thead></thead>
<tbody>
<tr>
<td>
<label for="class">Class</label>
</td>
<td>
<input type="text" id="class" name="charInfo[4]" value="<?php echo $_SESSION['class']; ?>" readonly>		
</td>
<td>
<label for="race" >Race</label>
</td>
<td>
<input type="text" id="race" name="charInfo[3]" value="<?php echo $_SESSION['race']; ?>" readonly>	
</td>
<td>
<label for="alignment">Alignment</label>
</td>
<td>
<input type="text" id="alignment" name="charInfo[6]" value="<?php echo $_SESSION['ali']; ?>" readonly>	
</td>
<tr>
<td>
<label for="level">Level</label>
</td>
<td>
<input type="text" id="level" name="charLevel" value="<?php echo $_SESSION['charlevel']; ?>" readonly>	
</td>
<td>
<label for="background">Background</label>
</td>
<td>
<input type="text" id="background" name="background" value="<?php echo $_SESSION['background']; ?>" readonly>	
</td>
</tr>
</tbody>
</table>
<br><br>

<h3><u>Abilities</u></h3>

<h4>Primary Abilities</h4>
<label for="ability1">Ability 1</label>
<input type="text" name="ability1" id="ability1" value="<?php echo $_SESSION['abil1']; ?>" readonly>
<label for="ability2">Ability 2</label>
<input type="text" name="ability2" id="ability2" value="<?php echo $_SESSION['abil2']; ?>" readonly>

<h4>Strength</h4>
	<label for="strength">Score</label>
		<input type="text" id="strength" name="strength" value="<?php echo $_SESSION['strenScore']; ?>" readonly>	
	<label for="strengthmod">Modifier</label>
	<input type="text" id="strengthmod" name="strengthMod" value="<?php echo $_SESSION['strenMod']; ?>" readonly>	

<h4>Dexterirty</h4>
	<label for="dexterity">Score</label>
		<input type="text" id="dexterity" name="dex" value="<?php echo $_SESSION['dextScore']; ?>" readonly>	
	<label for="dexteritymod">Modifier</label>
		<input type="text" id="dexteritymod" name="dexMod" value="<?php echo $_SESSION['dextMod']; ?>" readonly>	

<h4>Constitution</h4>
	<label for="constitution">Score</label>
		<input type="text" id="constitution" name="constitution" value="<?php echo $_SESSION['conScore']; ?>" readonly>	
	<label for="constitutionmod">Modifier</label>
		<input type="text" id="constitutionmod" name="constitutionMod" value="<?php echo $_SESSION['conMod']; ?>" readonly>	

<h4>Intelligence</h4>
	<label for="intelligence">Score</label>
		<input type="text" id="intelligence" name="intelligence" value="<?php echo $_SESSION['intelligence']; ?>" readonly>	
	<label for="cint">Modifier</label>
		<input type="text" id="intelligencemod" name="intelligenceMod" value="<?php echo $_SESSION['intellMod']; ?>" readonly>	

<h4>Wisdom</h4>
	<label for="wisdom">Score</label>
		<input type="text" id="wisdom" name="wisdom" value="<?php echo $_SESSION['wisScore']; ?>" readonly>	
	<label for="cwismod">Modifier</label>
		<input type="text" id="wisdommod" name="wisdomMod" value="<?php echo $_SESSION['wisMod']; ?>" readonly>	

<h4>Charisma</h4>
	<label for="cchar">Score</label>
			<input type="text" id="charisma" name="charisma" value="<?php echo $_SESSION['charScore']; ?>" readonly>	
	<label for="charismamod">Modifier</label>
		<input type="text" id="charismamod" name="charismaMod" value="<?php echo $_SESSION['charMod']; ?>" readonly>	
<br>
<h4>Other</h4>
<table>
<thead></thead>
<tbody>
<tr>
<td>
<label for="inspiration">Inspiration</label>
</td>
<td>
<input type="text" id="inspiration" name="inspiration" value="<?php echo $_SESSION['inspiration']; ?>" readonly>	
</td>
<td>
<label for="proficiency">Proficiency</label>
</td>
<td>
<input type="text" id="proficiency" name="proficiency" value="<?php echo $_SESSION['prof']; ?>" readonly>	
</td>
<td>
<label for="wealth">Wealth</label>
</td>
<td>
<input type="text" id="wealth" name="wealth" value="<?php echo $_SESSION['wealth']; ?>" readonly>	
</td>
</tr>
<tr>
<td>
<label for="speed">Speed</label>
</td>
<td>
<input type="text" id="speed" name="speed" value="<?php echo $_SESSION['speed']; ?>" readonly>	
</td>
<td>
<label for="hitDie">Hit Die</label>
</td>
<td>
<input type="text" id="hitDie" name="hitDie" value="<?php echo $_SESSION['charHitdie']; ?>" readonly>	
</td>
</tr>
</table>

<h4>Saving Throws</h4>
<label for="throw1">Throw 1</label>
<input type="text" id="throw1" name="throw1" value="<?php echo $_SESSION['throw1']; ?>" readonly>
<label for="throw2">Throw 2</label>
<input type="text" id="throw2" name="throw2" value="<?php echo $_SESSION['throw2']; ?>" readonly>

<h4>Skills</h4>
<textarea name="skills" id="skills" rows="5" cols="60" readonly><?php echo $_SESSION['skills']; ?></textarea>
<h4>Languages</h4>
<textarea name="languages" id="languages" rows="5" cols="60" readonly><?php echo $_SESSION['language']; ?></textarea>
<h4>Spells</h4>
<textarea name="spells" id="spells" rows="5" cols="60" readonly><?php echo $_SESSION['spells']; ?></textarea>
<h4>Features</h4>
<textarea name="features" id="features" rows="5" cols="60" readonly><?php echo $_SESSION['feat']; ?></textarea>
<h4>Traits</h4>
<textarea name="traits" id="traits" rows="5" cols="60" readonly><?php echo $_SESSION['trait']?></textarea>
<h4>Armor Proficiency</h4>
<textarea name="armor" id="armorProf" rows="5" cols="60" readonly><?php echo $_SESSION['armProf']; ?></textarea>
<h4>Weapon Proficiency</h4>
<textarea name="weapon" id="weaponProf" rows="5" cols="60" readonly><?php echo $_SESSION['weapProf']; ?></textarea>
<h4>Tool Proficiency</h4>
<textarea name="tool" id="toolProf" rows="5" cols="60" readonly><?php echo $_SESSION['toolProf']; ?></textarea>
<h4>Equipment</h4>
<textarea name="equipment" id="equipments" rows="5" cols="60" readonly><?php echo $_SESSION['equip']; ?></textarea>
<h4>Tools</h4>
<textarea name="tools" id="tools" rows="5" cols="60" readonly><?php echo $_SESSION['tool']; ?></textarea>
<h4>Class Specials</h4>
<textarea name="specials" id="classSpecials" rows="5" cols="60" readonly><?php echo $_SESSION['classSpecials']; ?></textarea>

<br><br><br><br>
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