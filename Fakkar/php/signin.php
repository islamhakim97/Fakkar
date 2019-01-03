<?php
      ob_start();
         include_once"database.php";
        $db=new database();
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $username=$_POST['usrnm'];
        $password=$_POST['psw'];
        $chk="select uname,pass from signin where uname=? AND pass=?";
        $find=$db->getCount($chk,array($username,$password));
        if($find>0){
            if($username=="mahmoudabdelmoughiss" and $password=="1996")
            {
                  header("location:insert_data.php");
            }else{
         header("location:index.php?user_name=$username");
         }
        }
        else{
            echo"<script>alert('check uesr name or password !')</script>";
        }
        }
        ob_flush();
        
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Score</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body style="background-color: lightblue">
        <div class="cont" style="background-color: white">
        <form action="signin.php" method="POST">
  <h2>Fill In The Form</h2>
  <div class="input-container">
    <i class="glyphicon glyphicon-user font"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm" autocomplete="off">
  </div>
  <div class="input-container">
    <i class="glyphicon glyphicon-lock font"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw" autocomplete="off">
  </div>
  <input type="submit" name='send' value="Register" class="btn">
  <div style='color: red; font-size: 18px; text-align: center; padding-top: 20px;'>if you aren't register before , go to <a href="myform.php">sign up</a></div>
</form>
    </div>
        
        <script src='../jquery/jquery-1.11.1.js'></script>    
    <script src="../bootstrap/js/bootstrap.js"></script>  
    <script src="plugin.js"></script>
    </body>
</html>
