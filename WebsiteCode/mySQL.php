<?php

class mySQL{

   public $conn;
   public $DbServer = 'localhost';
   public $DbUser  = 'rollfori_query';
   public $DbPassword ='dungeon';
   public $DbName = 'rollfori_DungeonsAndDragons';
   public $database;
   
function _construct()
   {
      
   $this->conn = mysqli_connect($this->DbServer, $this->DbUser, $this->DbPassword, $this->DbName) or die('There was a problem connecting with the DB');

      }

function connection()
{
   $this->conn = mysqli_connect($this->DbServer, $this->DbUser, $this->DbPassword, $this->DbName) or die('There was a problem connecting with the DB');
      
}

   
//Function will determine if the user is in Database, validate login
function verifyUnPwd($userName, $pwd)
{
   $this->connection();
   $userName = mysqli_real_escape_string($this->conn, $userName);
   $pwd = mysqli_real_escape_string($this->conn, $pwd);
   $query = "SELECT * FROM LogIn WHERE UserName = '".$userName."' AND Password = '".$pwd."';";
   
   $statement = mysqli_query($this->conn, $query) or die(mysqli_connect_error());
   $rows = mysqli_num_rows($statement);
   if($rows != 0)
      return true;
   else
      return false;
             
   }
         
   
   //Function will create a new user, adding information into the database
function createUser($userName, $pwd, $email)
   {
     $this->connection();
     $userName = mysqli_real_escape_string($this->conn,$userName);
     $pwd = mysqli_real_escape_string($this->conn,$pwd);
     $email = mysqli_real_escape_string($this->conn,$email);
     
     $query = "INSERT INTO `LogIn`(`UserName`, `Password`, `Email`) VALUES ('{$userName}','{$pwd}','{$email}')";

     $statement = mysqli_query($this->conn, $query) or die(mysqli_connect_error());
      
      if($statement)
      {
         return true;
         } 
      else 
      {
         return false;
         }
   }
   
   //Make sure that the user name has not been used
function validUserName($userName)
   {
      $this->connection();
      $userName = mysqli_real_escape_string($this->conn, $userName);
   
      $query = "SELECT * FROM `LogIn` WHERE (`UserName`) = ('{$userName}') ";
      $statement = mysqli_query($this->conn, $query) or die(mysqli_connect_error());
      
   if($statement)
   {
      $rows = mysqli_num_rows($statement);
      
    if($rows == 0)
      {
         return true;
      }
      else
      {
         return false;
       }
      }       
   }
   
   function saveNote($userID, $note)
   {
      $this->connection();
      $note = mysqli_real_escape_string($this->conn, $note);
      $delete = "DELETE FROM Notes WHERE UserID = ".$userID.";";
      $query = "INSERT INTO Notes(UserID, Notes) VALUES (".$userID.", '".$note."');";
      $statement = mysqli_query($this->conn, $delete) or die(mysqli_connect_error());
      $statement = mysqli_query($this->conn, $query) or die(mysqli_connect_error());
      
   }
   
   function retrieveNotes($userID)
   {
      $this->connection();

      $retrieve = "SELECT * FROM Notes WHERE UserID = ".$userID.";";
      $statement = mysqli_query($this->conn, $retrieve) or die(mysqli_connect_error());
      $info = $statement->fetch_assoc();
      $userNotes = $info['Notes'];
      
      return $userNotes;
   } 
   
   }

   ?>

