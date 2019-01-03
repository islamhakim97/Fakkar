<!DOCTYPE html>
<html style="background-color: lightblue;">
    <head>
        <title>Form Completion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/form_style001.css">
        <script src="../jquery/jquery-1.11.1.js"></script>
        <script src="../jquery/jquery.js"></script>
        <style>
            #form
            {
                width: 300px;
                height: 50px;
                line-height: 50px;
                border: 2px solid blue;
                background-color: grey;
                color: white;
                display: none;
            }
        </style>
    </head>
<body style="background-color: lightblue;">
    <?php
    ob_start();
    include_once ("database.php");
    $db=new database();
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $country=$_POST['country'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $q="insert into signin (fname,lname,country,uname,email,pass,score) values (?,?,?,?,?,?,?)";
        $p=array($firstname,$lastname,$country,$username,$email,$password,0);
        $chk="select uname from signin where uname=?";
        $find=$db->getCount($chk,array($username));
        $row="";
        if($find==0){
         $row=$db->insertRow($q,$p);
         header("location:index.php?user_name=$username");
        }
        else
        {
           echo"<script>alert('username or email already exists !')</script>";
        }
        if($row>0)
        {
            //echo"ok";
            
        }
        else
        {
            //echo"unabled to acceot data";
        }
    }
    ob_flush();
    ?>
    <div id="form">Invalid Email Or User name Check Again</div>
    <section>
    <div class="header"><img src="../images/smile.jpg"></div>
        <div class="title"><span class="t1">Join </span><span class="t2">FaKKaR </span><span class="t3"> Website</span>  </div>
        <div class="inputbox">
            <form action="myform.php" method="post">
                 <input type="text" name="firstname" placeholder="First Name" class="half" autocomplete="off" required>
                <input type="text" name="lastname" placeholder="Last Name" class="half" autocomplete="off" required>
                <input type="text" name="country" placeholder="Country"  class="full" autocomplete="off" required>
                <input type="text" name="username" placeholder="User name" class="full" autocomplete="off" required>
                <input type="email" name="email" placeholder="E-mail" class="full" autocomplete="off" required>
                <input type="password" name="password" placeholder="Create a Password" autocomplete="off" class="full" id="inp" required>
                <input type="submit" name="join" value="JOIN" class="join" >
            </form>
            <button class="btn">Show</button>
        </div>
        <div class="agree">By clicking "Join" you agree to <span style="color: blue;">FaKKaR</span>'s <span>
        <a href="#" >terms</a></span> and <span><a href="#" >Privacy</a></span> <span><a href="#" >Policy</a></span></div>
    </section>
</body> 
</html>