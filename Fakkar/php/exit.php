<?php
session_start();
$username="visitor";
if(isset($_GET['user_name']))
{
$username=$_GET['user_name'];
}

  if(empty($_SESSION['counter']))
  {
    $_SESSION['counter']=1;
  }else
  {
    $_SESSION['counter']++;
  }
$times=$_SESSION['counter'];
////////////////////////////////////////////////////////



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Score</title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <!--<link rel="stylesheet" href="design001.css">-->
        <link rel="stylesheet" href="../css/exit.css">
       <style>
        #play
        {
          background-color: #60b5ff;
          border: 0px;
          margin-left: 0px;
          text-align: center;
          border-radius:30px;
          box-shadow: 2px 2px 10px blue;
        }
       </style>
    </head>
    <body style="background-color: lightblue;">
        <?php
        ob_start();
        include_once("navbar.php");
       // $_GET['count']; 
        ?>
        <div class="container-fluid">
            <div class="cart-cont">
                <div class="cart">
                    <div class="top">
                        <div class="image">
                            <img src="../images/default.png">
                        </div>
                    </div>
                    <div class="bottom">
                      <div class="name"><?php echo $username; ?></div>
                      <div class="score">You Answered <?php echo $_GET['count'];?> Question</div>
                      <div class="using-helps">You Playing <?php echo $times;?> Times</div>
                    </div>
                </div>
                <a  href="index.php" class="play-again" id="play" onclick="sendusername()">Play again</a>
            </div>
           
            <?php include('footer.html');
            
            ob_flush();
            ?>
        </div>
        <script src='../jquery/jquery-1.11.1.js'></script>    
    <script src="../bootstrap/js/bootstrap.js"></script>  
    <script src="../js/plugin.js"></script>
    </body>
</html>