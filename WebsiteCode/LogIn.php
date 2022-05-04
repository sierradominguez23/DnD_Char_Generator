<?php>
session_start();
require_once 'membership.php';
$membership = new membership();

$userName = $_POST['userName'];
$pwd = $_POST['pwd'];
$errorMessage = "Empty Fields! Please enter all credentials!";

//will validateuser input if fields are not empty
if($_POST && !empty($userName) && !empty($pwd))
{
   $membership->validateUser($userName, $pwd);
}
else
{
echo ' <script type="text/javascript">
             alert("'.$errorMessage.'");
               window.location.href = "http://www.rollforinitiativelsj.com/index.html";
        </script>
        ';
}


?>


