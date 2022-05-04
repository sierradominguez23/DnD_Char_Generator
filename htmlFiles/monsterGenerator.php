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

<h2>Create a Monster!</h2>

<h3>Select a monster from the dropdown list and click create!</h3> 

<!--<form action="phpDocumentQuery.php">-->
<form method = "post" action = "monsterGen.php">


<label for="mname">Name</label>
<!--<input type="text" id="mname" name="monstername">-->
<select id="mname" name='monstername'>
	<option value=Null></option>	
	<option value="Adult Red Dragon">Adult Red Dragon</option>
	<option value="Air Elemental">Air Elemental</option>
	<option value="Allosaurus">Allosaurus</option>
	<option value="Animated Armor<">Animated Armor</option>
  <option value="Ankylosaurus">Ankylosaurus</option>
  <option value="Ape">Ape</option>
  <option value="Awakened Shrub">Awakened Shrub</option>
  <option value="Awakened Tree">Awakened Tree</option>
  <option value="Axe Beak">Axe Beak</option>
  <option value="Baboon">Baboon</option>
  <option value="Badger">Badger</option>
  <option value="Banshee">Banshee</option>
  <option value="Basilisk">Basilisk</option>
  <option value="Bat">Bat</option>
  <option value="Black Bear">Black Bear</option>
  <option value="Blink Dog">Blink Dog</option>
  <option value="Blood Hawk">Blood Hawk</option>
  <option value="Boar">Boar</option>
  <option value="Brown Bear">Brown Bear</option>
  <option value="Bugbear">Bugbear</option>
  <option value="Camel">Camel</option>
  <option value="Cat">Cat</option>
  <option value="Centaur">Centaur</option>
  <option value="Chimera">Chimera</option>
  <option value="Cockatrice">Cockatrice</option>
  <option value="Constrictor Snake">Constrictor Snake</option>
  <option value="Crab">Crab</option>
  <option value="Crocodile">Crocodile</option>
  <option value="Cyclopes">Cyclopes</option>
  <option value="Death Dog">Death Dog</option>
  <option value="Deer">Deer</option>
  <option value="Dire Wolf">Dire Wolf</option>
  <option value="Doppleganger">Doppleganger</option>
  <option value="Draft Horse">Draft Horse</option>
  <option value="Eagle">Eagle</option>
  <option value="Earth Elemental">Earth Elemental</option>
  <option value="Elephant">Elephant</option>
  <option value="Elk">Elk</option>
  <option value="Fire Elemental">Fire Elemental</option>
  <option value="Fire Giant">Fire Giant</option>
  <option value="Flameskull">Flameskull</option>
  <option value="Flesh Golem">Flesh Golem</option>
  <option value="Flying Snake">Flying Snake</option>
  <option value="Flying Sword">Flying Sword</option>
  <option value="Frog">Frog</option>
  <option value="Frost Giant">Frost Giant</option>
  <option value="Gargoyle">Gargoyle</option>
  <option value="Ghost">Ghost</option>
  <option value="Ghoul">Ghoul</option>
  <option value="Giant Ape">Giant Ape</option>
  <option value="Giant Badger">Giant Badger</option>
  <option value="Giant Bat">Giant Bat</option>
  <option value="Giant Boar">Giant Boar</option>
  <option value="Giant Centipede">Giant Centipede</option>
  <option value="Giant Constrictor Snake">Giant Constrictor Snake</option>
  <option value="Giant Crab">Giant Crab</option>
  <option value="Giant Crocodile">Giant Crocodile</option>
  <option value="Giant Eagle">Giant Eagle</option>
  <option value="Giant Elk">Giant Elk</option>
  <option value="Giant Fire Beetle">Giant Fire Beetle</option>
  <option value="Giant Frog">Giant Frog</option>
  <option value="Giant Goat">Giant Goat</option>
  <option value="Giant Hyena">Giant Hyena</option>
  <option value="Giant Lizard">Giant Lizard</option>
  <option value="Giant Octopus">Giant Octopus</option>
  <option value="Giant Owl">Giant Owl</option>
  <option value="Giant Poisonous Snake">Giant Poisonous Snake</option>
  <option value="Giant Rat">Giant Rat</option>
  <option value="Giant Scorpion">Giant Scorpion</option>
  <option value="Giant Sea Horse">Giant Sea Horse</option>
  <option value="Giant Shark">Giant Shark</option>
  <option value="Giant Spider">Giant Spider</option>
  <option value="Giant Toad">Giant Toad</option>
  <option value="Giant Vulture">Giant Vulture</option>
  <option value="Giant Wasp">Giant Wasp</option>
  <option value="Giant Wealsel">Giant Wealsel</option>
  <option value="Giant Wolf Spider">Giant Wolf Spider</option>
  <option value="Gnoll">Gnoll</option>
  <option value="Goat">Goat</option>
  <option value="Goblin">Goblin</option>
  <option value="Grick">Grick</option>
  <option value="Griffon">Griffon</option>
  <option value="Harpy">Harpy</option>
  <option value="Hawk">Hawk</option>
  <option value="Hell Hound">Hell Hound</option>
  <option value="Hill Giant">Hill Giant</option>
  <option value="Hippogriff">Hippogriff</option>
  <option value="Hobogoblin">Hobogoblin</option>
  <option value="Hunter Shark">Hunter Shark</option>
  <option value="Hydra">Hydra</option>
  <option value="Hyena">Hyena</option>
  <option value="Jackal">Jackal</option>
  <option value="Killer Whale">Killer Whale</option>
  <option value="Kobold">Kobold</option>
  <option value="Lion">Lion</option>
  <option value="Lizard">Lizard</option>
  <option value="Lizardfolk">Lizardfolk</option>
  <option value="Mammoth">Mammoth</option>
  <option value="Manticore">Manticore</option>
  <option value="Mastiff">Mastiff</option>
  <option value="Medusa">Medusa</option>
  <option value="Merfolk">Merfolk</option>
  <option value="Minotaur">Minotaur</option>
  <option value="Mule">Mule</option>
  <option value="Mummy">Mummy</option> 
  <option value="Nothic">Nothic</option>
  <option value="Ochre Jelly">Ochre Jelly</option>
  <option value="Octopus">Octopus</option>
  <option value="Ogre">Ogre</option>
  <option value="Orc">Orc</option>
  <option value="Owl">Owl</option>
  <option value="Owlbear">Owlbear</option>
  <option value="Panther">Panther</option>
  <option value="Pegasus">Pegasus</option>
  <option value="Phase Spider">Phase Spider</option>
  <option value="Plesiosaurus">Plesiosaurus</option>
  <option value="Poisonous Snake">Poisonous Snake</option>
  <option value="Polar Bear">Polar Bear</option>
  <option value="Pony">Pony</option>
  <option value="Pteranodon">Pteranodon</option>
  <option value="Quipper">Quipper</option>
  <option value="Rat">Rat</option>
  <option value="Raven">Raven</option>
  <option value="Reef Shark">Reef Shark</option>
  <option value="Rhinoceros">Rhinoceros</option>
  <option value="Riding Horse">Riding Horse</option>
  <option value="Saber-Toothed Tiger">Saber-Toothed Tiger</option>
  <option value="Satyr">Satyr</option>
  <option value="Scorpion">Scorpion</option>
  <option value="Sea Horse">Sea Horse</option>
  <option value="Skeleton">Skeleton</option>
  <option value="Spectator">Spectator</option>
  <option value="Spider">Spider</option>
  <option value="Stirge">Stirge</option> 
  <option value="Stone Golem">Stone Golem</option>
  <option value="Swarm of Bats">Swarm of Bats</option>
  <option value="Swarm of Insects">Swarm of Insects</option>
  <option value="Swarm of Poisonous Snakes">Swarm of Poisonous Snakes</option>
  <option value="Swarm of Quippers">Swarm of Quippers</option>
  <option value="Swarm of Rats">Swarm of Rats</option>
  <option value="Swarm of Ravens">Swarm of Ravens</option>
  <option value="Tiger">Tiger</option>
  <option value="Triceratops">Triceratops</option>
  <option value="Troll">Troll</option>
  <option value="Twig Blight">Twig Blight</option>
  <option value="Tyrannosaurus Rex">Tyrannosaurus Rex</option>
  <option value="Vulture">Vulture</option>
  <option value="Warhorse">Warhorse</option>
  <option value="Water">Water</option>
  <option value="Water Elemental">Water Elemental</option>
  <option value="Weasel">Weasel</option>
  <option value="Werewolf">Werewolf</option>
  <option value="Wight">Wight</option>
  <option value="Winter Wolf">Winter Wolf</option>
  <option value="Wolf">Wolf</option>
  <option value="Worg">Worg</option>
  <option value="Wyvern">Wyvern</option>
  <option value="Yeti">Yeti</option>
  <option value="Young Green Dragon">Young Green Dragon</option>
  <option value="Zombie">Zombie</option>
  
</select>

<button class="button button6">Create</button>
</form>

	
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
