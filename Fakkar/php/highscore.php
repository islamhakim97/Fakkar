<?php
include_once"database.php";
$db=new database(); 
$q="select * from signin";
$scores=$db->getRows($q,array());
////$max=$scores[0];
//echo $max;
$arr=array();
$users=array();
$c=0 ;$i=0;

foreach ($scores as $value) 
{
	$x=$value['score'];
	$y=$value['uname'];
	$arr[$c]=$x;
	$users[$i]=$y;
     $c++;
     $i++;
}

$max = $arr[0];
$ourmax=0;
for ($s = 0; $s <$c; $s++)  {

	if ($max<$arr[$s])
	{
		$max=$arr[$s];
		$ourmax=$s;
	}
     
	# code...
}
echo "$users[$ourmax] Get The Best Score :  $max  " ;
?>