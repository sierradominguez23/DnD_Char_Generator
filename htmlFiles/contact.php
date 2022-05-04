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

<div class="contact-form">

<h1>Questions? Comments? Concerns?</h1>
<h2>Get in touch with us at <a href="mailto:rollforinitiativelsj@gmail.com">rollforinitiativelsj@gmail <br>or drop your comment below!</h2>
<h3></h3>

 <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="First name">
<br><br><br>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Last name">
	<br><br><br>
	 <label for="subject">Comments</label><br><br>
    <textarea id="subject" name="subject" placeholder="Tell us what you think" style="height:200px"></textarea>
	<br><br><br>
<button class="button button6" type="submit" value="submit">Submit</button>

</div><!--contact-form-->
</div><!--content-->


<div class="footer">
<div class="footer-cont">

<br>DoublePlusGood Software Development<br><br><br>
<a href="help.php">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php">Contact us</a><br><br><br><br><br><br><br>
<br><br><br>Dungeon and Dragons is owned by Wizards of the Coast

</div><!--footer-cont-->
</div><!--footer-->
</body>
</html>