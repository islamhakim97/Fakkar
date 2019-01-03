<?php
include_once"database.php";
          $db->Execute("create database if not exists fakar");
          
        $db->Execute("use fakar");
    $db->Execute("create table if not EXISTS ask(
  id int not null auto_increment primary key,
  question VARCHAR(200) ,
  choose1 varchar(100) not null,
  choose2 varchar(100) not null ,
  choose3 varchar(100) not null,
  choose4 varchar(100) not null,
  answer varchar(100) not null,
  degree ENUM('easy','medium','hard') ,
  type ENUM('politics','religious','sport','history','cultural','scientific','others'))");
    $db->Execute("create table if not exists signin(
id int auto_increment not null primary key,
fname varchar(30) not null,
lname varchar(30) not null,
country varchar(30) not null,
email varchar(50) not null,
uname varchar(30) not null,
pass varchar(50) not null,
score int not null)");
    $db->Execute("insert into signin values ('1','Mahmoud','Elsayed','Egypt','mahmoudabdelmoughiss1996@gmail.com','mahmoudabdelmoughiss','1996',0)");
    $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('India's first satellite is named after','Aryabhatta','Bhaskara II','Bhaskara I','Albert Einstein','Aryabhatta','hard','cultural')");
       $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('India's first atomic reactor was','Zerlina','Dhruva','Apsara','Kamini','Apsara','hard','cultural')");
       $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('In which year, terrorists crash two planes into New York's World Trade Centre','2000','2001','2002','2002','2001','medium','history')");
       $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('India's first ocean wave's energy project was launched in','1981','1991','1995','2000','1991','hard','history')");
       $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('in:the membership of the Security Council was increased from 11 to 15 (under Article 23)?','1960','1965','1972','1975','1965','hard','history')");
       $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('In a normal human body, the total number of red blood cells is','15 trillion','20 trillion','25 trillion','30 trillion','30 trillion','medium','scientific')");
      $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('INS Venduruthy is located at','Kochi','Jamnagar','Mumbai','Lonavla','Kochi','hard','cultural')");
       $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('In which season do we need more fat?','Rainy season','Spring','Winter','Summer','Winter','easy','scientific')");
      $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('How many players are there on each side in the game of Basketball?','4','5','6','7','5','medium','sport')");
       $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('How many times has Brazil won the World Cup Football Championship?','Four times','Twice','Five times','Once','Five times','medium','sport')");
      $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('If speed of rotation of the earth increases, weight of the body','increases','remains unchanged','decreases','may decrease or increase','decreases','medium','scientific')");
      $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('Indira Gandhi was assassinated in','1974','1984','1994','2004','1984','medium','history')");
      $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('In a normal human body, the total number of red blood cells is','15 trillion','20 trillion','25 trillion','30 trillion','30 trillion','medium','scientific')");
      $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('How many Ergs are there in 1 joule?','102','104','106','107','107','medium','scientific')");
      $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('In which year of First World War Germany declared war on Russia and France?','1914','1915','1916','1917','1914','medium','sport')");
      
      $db->Execute("insert into  ask(question,choose1,choose2,choose3,choose4,answer,degree,type)
                 Values('India has largest deposits of ____ in the world.','gold','copper','mica','None of the above','mica','medium','cultural')");
      
      
      
      
	
	


	



      
       	


 	

?>