<?php

	session_start();
	
	//get variables from html
	$charClass =  $_POST ['cclass'];
	$charRace =  $_POST ['crace'];
	$charBack =  $_POST ['cbackground'];
	$charLevel =  $_POST ['clevel'];
	$charAlign =  $_POST ['calignment'];
	$charName = $_POST ['charName'];
	$uID = $_SESSION['userID'];
	$level = intval($charLevel);
	$userID = intval ($uID);
	$characterID;
	print_r($charClass);
	print_r($charRace);

	//connect to database
	define('DBName', 'rollfori_DungeonsAndDragons');
	define ('DBServer', 'localhost');
	define('DBPassword', 'dungeon');
	define ('DBUser', 'rollfori_query');
	
	$db = new mysqli(DBServer, DBUser, DBPassword, DBName);
	if($db->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
		}
		
	$sqlCharRace = $db->real_escape_string($charRace);
	$sqlCharClass =  $db->real_escape_string($charClass);

	//Get Creator ID
	$creatorID = $userID;

	//Get RaceID
	$result = $db->query("Select RaceID from RaceID where Race = '".$sqlCharRace."';")or die ($db->error."ccsecond");
	$row = $result->fetch_assoc(); 
	$raceID = $row['RaceID'];
	//Free results 
	$result->free;
		

		//Call function to set race specific fields
		switch ($raceID){
			
			case 1:
				include 'DarkElf.php';
				$characterID = darkElf($creatorID, $level);
				
				break;
			case 2:
				include 'Dragonborn.php';
				$characterID = dragonborn($creatorID, $level);
				break;
			case 3:
				include 'ForestGnome.php';
				$characterID = forestGnome($creatorID, $level);
				break;
			case 4:
				include 'HalfElf.php';
				$characterID = halfElf($creatorID, $level);
				break;
			case 5:
				include 'HalfOrc.php';
				$characterID = halfOrc($creatorID, $level);
				break;
			case 6:
				include 'HighElf.php';
				$characterID = highElf($creatorID, $level);
				break;
			case 7:
				include 'HillDwarf.php';
				$characterID = hillDwarf($creatorID, $level);
				break;
			case 8:
				include 'Human.php';
				$characterID = human($creatorID, $level);
				break;
			case 9:
				include 'LightfootHalfling.php';
				$characterID = lightfootHalfling($creatorID, $level);
				break;
			case 10:
				include 'MountainDwarf.php';
				$characterID = mountainDwarf($creatorID, $level);
				break;
			case 11:
				include 'RockGnome.php';
				$characterID = rockGnome($creatorID, $level);
				break;
			case 12:
				include 'StoutHalfling.php';
				$characterID = stoutHalfling($creatorID, $level);
				break;
			case 13:
				include 'Tiefling.php';
				$characterID = tiefling($creatorID, $level);
				break;
			case 14:
				include 'WoodElf.php';
				$characterID = woodElf($creatorID, $level);
				break;
				
			}
	
	$sqlCharacterID = $db->real_escape_string($characterID);

	//Get Class ID
	$result = $db->query("Select ClassID from ClassID where ClassName = '".$sqlCharClass."';")or die ($db->error."ccfourth");
	$row = $result->fetch_assoc(); 
	$classID = $row['ClassID'];
	//Free results 
	$result->free;
	
		switch ($classID){
			
			case 1:
				include 'Barbarian.php';
				barbarian($characterID, $raceID);
				break;
				
			case 2:
				include 'Bard.php';
				bard($characterID, $raceID);
				break;
				
			case 3:
				include 'Cleric.php';
				cleric($characterID, $raceID);
				break;
				
			case 4:
				include 'Druid.php';
				druid($characterID, $raceID);
				break;
				
			case 5:
				include 'Fighter.php';
				fighter($characterID, $raceID);
				break;
				
			case 6:
				include 'Monk.php';
				monk($characterID, $raceID);
				break;
			
			case 7:
				include 'Paladin.php';
				paladin($characterID, $raceID);
				break;
				
			case 8:
				include 'Ranger.php';
				ranger($characterID, $raceID);
				break;
				
			case 9:
				include 'Rogue.php';
				rogue($characterID, $raceID);
				break;
				
			case 10:
				include 'Sorcerer.php';
				sorcerer($characterID, $raceID);
				break;
				
			case 11:
				include 'Warlock.php';
				warlock($characterID, $raceID);
				break;
				
			case 12:
				include 'Wizard.php';
				wizard($characterID, $raceID);
				break;
		}
		
		//Set Character Alignment
		$sqlCharAlign = $db->real_escape_string($charAlign);
		$db-> query("Update CreatedCharacter set Alignment = '".$sqlCharAlign."' where CharacterID = '".$sqlCharacterID."';");
		
		//Set Character Name
		$sqlCharName = $db->real_escape_string($charName);
		$db-> query("Update CreatedCharacter set Name = '".$sqlCharName."' where CharacterID = '".$sqlCharacterID."';");
		
		//Set Background
		$sqlBackground = $db->real_escape_string($charBack);
		$db->query("Update CreatedCharacter set Background = '".$sqlBackground."' where CharacterID = '".$sqlCharacterID."';") or die (error." CC218");
		
		//Retrieve Values for Display in HTML
		$result = $db->query("Select * from CreatedCharacter where CharacterID = '".$sqlCharacterID."';") or die (error."get all query");
		$charInfo= $result->fetch_assoc();
		
		$result = $db->query("Select * from CharacterCantripsSpells where CharacterID = '".$sqlCharacterID."';") or die (error."get spells query");
		$charSpells = $result->fetch_assoc();
      
      $_SESSION['class'] = $charInfo['Class'];
      $_SESSION['race'] = $charInfo['Race'];
      $_SESSION['ali'] = $charInfo['Alignment'];
      $_SESSION['charlevel'] = $charInfo['Level'];
      $_SESSION['background'] = $charInfo['Background'];
      $_SESSION['abil1'] = $charInfo['PrimaryAbility1'];
      $_SESSION['abil2'] = $charInfo['PrimaryAbility2'];
      $_SESSION['strenScore'] = $charInfo['Strength'];
      $_SESSION['strenMod'] = $charInfo['StrengthMod'];
      $_SESSION['dextScore'] = $charInfo['Dexterity'];
      $_SESSION['dextMod'] = $charInfo['DexterityMod'];
      $_SESSION['conScore'] = $charInfo['Constitution'];
      $_SESSION['conMod'] = $charInfo['ConstitutionMod'];
      $_SESSION['intelligence'] = $charInfo['Intelligence'];
      $_SESSION['intellMod'] = $charInfo['IntelligenceMod'];
      $_SESSION['wisScore'] = $charInfo['Wisdom'];
      $_SESSION['wisMod'] = $charInfo['WisdomMod'];
      $_SESSION['charScore'] = $charInfo['Charisma'];
      $_SESSION['charMod'] = $charInfo['CharismaMod'];
      $_SESSION['inspiration'] = $charInfo['Inspiration'];
      $_SESSION['prof'] = $charInfo['ProficiencyBonus'];
      $_SESSION['wealth'] = $charInfo['InitialWealth'];
      $_SESSION['speed'] = $charInfo['Speed'];
      $_SESSION['charHitdie'] = $charInfo['HitDiePerLevel'];
      $_SESSION['throw1'] = $charInfo['SavingThrow1'];
      $_SESSION['throw2'] = $charInfo['SavingThrow2'];
      $_SESSION['skills'] = $charInfo['Skills'];
      $_SESSION['language'] = $charInfo['Languages'];
      $_SESSION['spells'] = $charSpells['Spells'];
      $_SESSION['feat'] = $charInfo['Features'];
      $_SESSION['trait'] = $charInfo['Traits'];
      $_SESSION['armProf'] = $charInfo['ArmorProf'];
      $_SESSION['weapProf'] = $charInfo['WeaponProf'];
      $_SESSION['toolProf'] = $charInfo['ToolProf'];
      $_SESSION['equip'] = $charInfo['Equipment'];
      $_SESSION['tool'] = $charInfo['Tools'];
      $_SESSION['classSpecials'] = $charInfo['ClassSpecials'];
			
		
	$db->close;
	
	
	echo ' <script type="text/javascript">
               window.location.href = "http://www.rollforinitiativelsj.com/character.php";
        </script>
        ';


?>