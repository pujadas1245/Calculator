<?php 
 if(isset($_POST['Calculate']))
 {
 	$fn=$_POST['FirstNumber'];
 	$sn=$_POST['SecondNumber'];
 	$operator=$_POST['operator'];
 	switch($operator)
 	{
 		case "Chose An Operator": echo "you need to select a method";
 		break;
 		case "Addition": echo $result=($fn+$sn);
 		break;
 		case "Substractor": echo $result=($fn-$sn);
 		break;
 		case "Multiplication": echo $result=($fn*$sn);
 		break;
 		case "Division": echo $result=($fn/$sn);
 		break;
 	}
 	
 	
 }
 ?>