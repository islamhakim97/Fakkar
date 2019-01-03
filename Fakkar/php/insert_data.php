<?php include_once"navbar.php";
$admin="visitor";
if(isset($_GET['user_name']))
{
    $admin=$_GET['user_name'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="jquery_bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../css/insert_data001.css" />
        <title>Dealing with records</title>
    </head>
<body style="background-color: lightblue;">
    <?php
    include_once "database.php";
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $ques=$_POST['q'];
        $ans1=$_POST['a1'];
        $ans2=$_POST['a2'];
        $ans3=$_POST['a3'];
        $ans4=$_POST['a4'];
        $correct=$_POST['answer'];
        $deg=$_POST['d'];
        $tp=$_POST['t'];
        $db=new database();
        $query="insert into ask (question,choose1,choose2,choose3,choose4,answer,degree,type)values (?,?,?,?,?,?,?,?)";
        $params=array($ques,$ans1,$ans2,$ans3,$ans4,$correct,$deg,$tp);
        
        //****************************
        $chk="select question from ask where question=?";
        $find=$db->getCount($chk,array($ques));
        $row="";
        if($find>0 ){
        echo"<script>alert('the question already exists !')</script>";
        }
        else
        {
            
            $row=$db->insertRow($query,$params);
            
        }
        
    }
    
    ?>

    <div class="container">
    <div class="admin_info" id="admin" style="text-align: center;line-height: 60px;
    font-size: 30px;text-shadow:2px 2px 6px black; font-weight:900;font-family: 'Algerian','comic sans ms';color: white">insert meaningful question </div>
    <form action="insert_data.php" method="POST">
        <div class="inputs">
        <input type="text" name="q" placeholder="Enter the question" autocomplete="off" required><br>
        <input type="text" name="a1" placeholder="Enter answer 1" autocomplete="off" required><br>
        <input type="text" name="a2" placeholder="Enter answer 2" autocomplete="off" required><br>
        <input type="text" name="a3" placeholder="Enter answer 3" autocomplete="off" required><br>
        <input type="text" name="a4" placeholder="Enter answer 4" autocomplete="off" required><br>
        <input type="text" name="answer" placeholder="Enter answer of question"  autocomplete="off" required><br>
        <select name="d">
            <option value="easy">Easy</option>
            <option value="medium">Medium</option>
            <option value="hard">Hard</option>
        </select>
        <select name="t">
            <option value="politics">politics</option>
            <option value="religious">religious</option>
            <option value="sport">sport</option>
            <option value="history">history</option>
            <option value="cultural">cultural</option>
            <option value="scientific">scientific</option>
            <option value="others">others</option>
        </select>
    
        <input type="reset" value="Reset To Default">
        <input type="submit" name="send" value="Add">
    </form>
    <a href="index.php" class="go_back ">Go back</a>
    </div>
 
    
    <?php include_once "footer.html"; ?>
    </div>
</body>
</html>
<script src="jquery_bootstrap/jquery-1.11.1.js"></script>
<script src="jquery_bootstrap/bootstrap.js"></script>
<script src="jquery.js"></script>