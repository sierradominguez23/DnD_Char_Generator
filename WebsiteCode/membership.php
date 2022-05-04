<?php
session_start();
require 'mySQL.php';
require 'GetUserID.php';


class membership{

//Validate user that already exists
function validateUser($userName, $pwd)
{
  $mysql = New mySQL();
  $record = $mysql->verifyUnPwd($userName, $pwd);
   if($record)
   {
   $id = getUserID($userName);
   $notes = $mysql->retrieveNotes($id);
   //print_r($id);
   $_SESSION['status'] = "authorized";
   $_SESSION['userID'] = $id;
   $_SESSION['userNote'] = $notes;
      
   echo ' <script type="text/javascript">
             window.location = "http://www.rollforinitiativelsj.com/accountMain.php";
        </script>
        ';
     
   }
   else
   {
      echo ' <script type="text/javascript">
            alert("Incorrect Credentials!");
             window.location = "http://www.rollforinitiativelsj.com/index.html";
        </script>
        ';
        }
   
   
}



//create and validate user credentials
function createUser($userName, $pwd, $email)
{
   $mysql = New mySQL();
  $valid = $mysql->validUserName($userName);
   
  if($valid == false)
   {
      echo ' <script type="text/javascript">
            alert("Username already exists!");
             window.location = "http://www.rollforinitiativelsj.com/createAccount.html";
        </script>
        ';
   }
   if($valid == true)
   {
      $created = $mysql->createUser($userName, $pwd, $email);
   
         if($created)
          {
                echo ' <script type="text/javascript">
             window.location = "http://www.rollforinitiativelsj.com/index.html";
        </script>
        ';
             }
   }
}


}
?>