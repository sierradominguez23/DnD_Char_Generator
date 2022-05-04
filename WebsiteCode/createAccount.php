

<?php
require_once 'membership.php';
$membership = new membership();


    //Will collect the information from the sign up
    $userName = $_POST['name'];
    $pwd = $_POST['password'];
    $email = $_POST['emailAddress'];
    $errorMessage = "Empty Fields! Please enter all credentials!";
    
    //validate user entry, make sure that there is no empty fields
    if($_POST && !empty($userName) && !empty($pwd) && !empty($email))
      $membership->createUser($userName, $pwd, $email);
    else
    {
  
      echo ' <script type="text/javascript">
             alert("'.$errorMessage.'");
             window.location = "http://www.rollforinitiativelsj.com/createAccount.html";
        </script>
        ';
    }
  
  ?>
  