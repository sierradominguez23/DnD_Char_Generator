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
<div class="monster-form">

<h2>Monster!</h2>

<h3><u>Abilities</u></h3>

<h4>Strength</h4>
<label for="mstrength" name="monsterstrength">Score</label>
<input type="text" id="mstrength" name="monsterstrength" value = "<?php echo $_SESSION['strengthScore']?>" readonly>

<label for="mstrengthmod" name="monsterstrengthmod">Modifier</label>
<input type="text" id="mstrengthmod" name="monsterstrengthmod" value = "<?php echo $_SESSION['strengthMod']?>" readonly>
	

<h4>Dexterity</h4>
<label for="mdex" name="monsterdex">Score</label>
<input type="text" id="mdex" name="monsterdex" value = "<?php echo $_SESSION['DexScore']?>" readonly                >

<label for="mdexmod" name="monsterdexmod">Modifier</label>
<input type="text" id="mdexmod" name="monsterdexmod" value = "<?php echo $_SESSION['DexMod']?>" readonly>
	

<h4>Constitution</h4>
<label for="mcon" name="monstercon">Score</label>
<input type="text" id="mcon" name="monstercon" value = "<?php echo $_SESSION['ConstiScore']?>" readonly>
	
<label for="mconmod" name="monsterconmod">Modifier</label>
<input type="text" id="mconmod" name="monsterconmod" value = "<?php echo $_SESSION['ConstiMod']?>" readonly>
	

<h4>Intelligence</h4>
<label for="mint" name="monsterint">Score</label>
<input type="text" id="mint" name="monsterint" value = "<?php echo $_SESSION['intelligenceScore']?>" readonly>
	
<label for="mintmod" name="monsterintmod">Modifier</label>
<input type="text" id="mintmod" name="monsterintmod" value = "<?php echo $_SESSION['intelligenceMod']?>" readonly>


<h4>Wisdom</h4>
<label for="mwis" name="monsterwis">Score</label>
<input type="text" id="mwis" name="monsterwis" value = "<?php echo $_SESSION['WisdomScore']?>" readonly>
	
<label for="mwismod" name="monsterwismod">Modifier</label>
<input type="text" id="mwismod" name="monsterwismod" value = "<?php echo $_SESSION['WisdomMod']?>" readonly>


<h4>Charisma</h4>
<label for="mchar" name="monsterchar">Score</label>
<input type="text" id="mchar" name="monsterchar" value = "<?php echo $_SESSION['CharismaScore']?>" readonly>
	
<label for="mcharmod" name="monstercharmod">Modifier</label>
<input type="text" id="mwismod" name="monstercharmod" value = "<?php echo $_SESSION['CharismaMod']?>" readonly>

<h3><u>Other</u></h3> 
<label for="mac" name="monsterac">AC</label>
<input type="text" id="mac" name="monsterac" value = "<?php echo $_SESSION['ac']?>">

<label for="mhitdie" name="monsterhitdie">Hit Die</label>
<input type="text" id="mhitdie" name="monsterhitdie" value = "<?php echo $_SESSION['hitDie']?>" readonly>
	

<label for="mhp" name="monsterhp">HP</label>
<input type="text" id="mhp" name="monsterhp" value = "<?php echo $_SESSION['$hp']?>" readonly>
	

<br><br><br>
</div><!--monster form-->
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
