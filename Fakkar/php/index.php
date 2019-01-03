<!DOCTYPE html>
    <?php
    ob_start();
    include_once "navbar.php";
    include_once "database.php";
    //$db->Execute("use fakar");
    
     session_start();
     $username="the visitor";
     if(array_key_exists("user_name",$_GET)){
      $username=$_GET['user_name'];
     }
    if(isset($_GET['user_name']))
    {
     $username=$_GET['user_name'];
    }
    if(isset($_POST['user_name']))
    {
     $username=$_GET['user_name'];
    }
   
   $db=new database();
   
    $q="";
            $a1="";
            $a2="";
            $a3="";
            $a4="";
            $corr_answer="";
    $r=0;
    $ans="";
    if(isset($_SESSION["id_"])){    //scip only the first time
     $r=$_SESSION["id_"];
     quesRandom();
     if(isset($_POST['send1'])){
      if($corr_answer==$_POST['send1'])
      {
       $_SESSION["count"]++;
       $r=mt_rand(1,12);
       $_SESSION["id_"]=$r;
    quesRandom();
      }else ext();      
      }
       if(isset($_POST['send2'])){
      if($corr_answer==$_POST['send2'])
      {
       
      $_SESSION["count"]++;
       $r=mt_rand(1,12);
       $_SESSION["id_"]=$r;
    quesRandom();
      }else ext();   
      }
       if(isset($_POST['send3'])){
      if($corr_answer==$_POST['send3'])
      {
       $_SESSION["count"]++;
       $r=mt_rand(1,12);
       $_SESSION["id_"]=$r;
    quesRandom();
      }else ext();      
      }
       if(isset($_POST['send4'])){
      if($corr_answer==$_POST['send4'])
      {
       $_SESSION["count"]++;
       $r=mt_rand(1,12);
       $_SESSION["id_"]=$r;
    quesRandom();
      }else ext();      
      }
    }else{
                                                                     //enter only the first time
    $r=mt_rand(1,12);
    $_SESSION["id_"]=$r;
    $_SESSION["count"]=0;
    quesRandom();
    }
    function quesRandom(){
      global $db,$q,$a1,$a2,$a3,$a4,$corr_answer,$r;
     
     $q="select * from ask where id=$r";
      $row=$db->getRows($q,array());
      //var_dump($row);
      foreach($row as $k=>$v)
        {
           $q=$v['question'];
           $a1=$v['choose1'];
           $a2=$v['choose2'];
           $a3=$v['choose3'];
           $a4=$v['choose4'];
           $corr_answer=$v['answer'];
        }
    }
    function ext()
    {
      global $username;
      echo $username;
      //$user=$_GET['user_name'];
     $count=$_SESSION['count'];
     include_once"database.php";
     $q3="update signin SET score=? where uname=?";
         $db=new database(); 
     $db->update($q3,array($count,$username));
     header("location:exit.php?count=$count&user_name=$username");

     
    }
    
 ?>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../css/index001.css">
        <style>
         .green
         {
          background-color: green;
         }
         .red
         {
          background-color: red;
         }
        </style>
    </head>
    <body style="background-color: lightblue;">
     
  <!--***********************************************************************************************************-->
  

     <div class="under_nav_bar">
      <div  id="cart" class="cart1">
       <img src="../images/p50.jpg"  style="display: block;width: 230px; height: 230px; border-radius:10px;" id="img_top">
      </div>
      <div class="culture" style="border-radius:30px;">
       cultivate Your Self
      </div>
      <div  id="cart2">
       <img src="../images/p50.jpg"  style="display: block;width: 230px; height: 230px; border-radius:10px;" id="img_top2">
      </div>
     </div>                                                   <!--under nav bar-->
      <div class="third_level">                                                          <!--beginning of the third level-->
     <div class="question_answer_container">
            <div class="question" id="question_itself">                                   <!--display question-->
            <?php echo$q;?>
            </div>
                   <form method="post">       
                          <input type="hidden" value="<?php echo $corr_answer;?>" id='true_value' name="hidd">
                          
                           <div class="answer1">
                            <input type="submit"  name="send1" value='<?php echo$a1;?>' id="sub_no_1" onclick="chkanswer(this)"  >
                           </div>
                         
                           <div class="answer2">
                            <input type="submit"  name="send2" value='<?php echo$a2;?>' id="sub_no_2" onclick="chkanswer(this)" >
                           </div>
                          
                           <div class="answer3">
                            <input type="submit"  name="send3" value='<?php echo$a3;?>' id="sub_no_3" onclick="chkanswer(this)">
                           </div>
                       
                           <div class="answer4">
                                <input type="submit"  name="send4"  value='<?php echo$a4;?>' id="sub_no_4" onclick="chkanswer(this)" >
                          </div>
                   </form>
                 </div>                                     <!--end of the -->
                <div class="right_content">
                      <div class='img-info'>
                              <img src="../images/p11.jpg" id="myimg" width=100% height=100% class="img-thumbnail">
                           </div>
                          
                       
                          
                </div>
               </div>
           <div style="clear: both"></div>                      <!--clear the div of que-ans img -->
        <!--***********************************************************************************************************-->
      <?php
        include_once "footer.html";
        ob_flush();
       ?>
  
    
    <script>
     
        var cart=document.getElementById("cart");
        var cart2=document.getElementById("cart2");
            
        setInterval(repeat,6000);
        setInterval(remove,8000);
        function repeat() {
         cart.setAttribute("class","cart");
        }
        function remove() {
            cart.removeAttribute("class","cart");
        }
        setInterval(repeat2,6000);
        setInterval(remove2,8000);
        function repeat2() {
         cart2.setAttribute("class","cart2");
        }
        function remove2() {
            cart2.removeAttribute("class","cart2");
        }
        var myelem=document.getElementById('myimg');
        var arrimg=['../images/p1.jpg','../images/p2.jpg','../images/p3.jpg','../images/p4.jpg',
                    '../images/p5.jpg','../images/p6.jpg','../images/p7.jpg','../images/p8.jpg',
                    '../images/p9.jpg','../images/p10.jpg','../images/p11.jpg','../images/p12.jpg',
                    '../images/p13.jpg','../images/p14.jpg','../images/p15.jpg','../images/p16.jpg',
                    '../images/p17.jpg','../images/p18.jpg','../images/p19.jpg','../images/p20.jpg',
                    '../images/p21.jpg','../images/p22.jpg','../images/p23.jpg','../images/p24.jpg',
                    '../images/p25.jpg','../images/p26.jpg','../images/p27.jpg','../images/p28.jpg',
                    '../images/p29.jpg','../images/p30.jpg','../images/p31.jpg','../images/p32.jpg',
                    '../images/p33.jpg','../images/p34.jpg','../images/p35.jpg','../images/p36.jpg',
                    '../images/p37.jpg','../images/p38.jpg','../images/p39.jpg','../images/p40.jpg',
                    '../images/p41.jpg','../images/p42.jpg','../images/p43.jpg','../images/p44.jpg',
                    '../images/p45.jpg','../images/p46.jpg','../images/p47.jpg','../images/p48.jpg',
                    '../images/p49.jpg','../images/p50.jpg'];
        function change_img(myelem,arrimg) {
           'use strict'; 
            setInterval(function(){
                var r=Math.floor(arrimg.length*Math.random());
                myelem.src=arrimg[r];
                },11000); 
        }
        function change_img2(myelem,arrimg) {
           'use strict'; 
            setInterval(function(){
                var r=Math.floor(arrimg.length*Math.random());
                myelem.src=arrimg[r];
                },8000); 
        }
        change_img(myelem,arrimg);
        var x3=document.getElementById('img_top');
        var x3=document.getElementById('img_top2');
        change_img2(x3,arrimg);
        change_img2(x3,arrimg2);
        
        function chkanswer(elem) {
            var btnchose=elem.value;
            var corrans="<?php echo$corr_answer;?>";
            if (btnchose==corrans) {
               setInterval(function(){
                   elem.setAttribute('class','green');
               },2000); 
                elem.setAttribute('class','green');
               
            }else{
             setInterval(function(){
                   elem.setAttribute('class','red');
               },2000); 
                elem.setAttribute('class','red');   
            }
        }
        
    </script>
    
    <script src="../jquery/jquery-1.11.1.js"></script>   <!-jquery->
  <script src="../bootstrap/bootstrap.min.js"></script> <!-Bootstrap js->
  <script src="plugin.js"></script>
    </body>
</html>