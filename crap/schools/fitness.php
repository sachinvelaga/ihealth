<?php

include("../includes/connectionPool.php");
include("../smarty.php");
session_start();
//include_once("noentry.php");
$person = mysql_real_escape_string($_POST['person']);
$height = mysql_real_escape_string($_POST['height']); 
$weight = mysql_real_escape_string($_POST['weight']); 
$bmi = mysql_real_escape_string($_POST['bmi']); 
$bone = mysql_real_escape_string($_POST['bone']);
$water = mysql_real_escape_string($_POST['water']); 
$fat = mysql_real_escape_string($_POST['fat']);
$visceral = mysql_real_escape_string($_POST['visceral']); 
/*password stored as base_64encode(sha1) we have to decode by sha1(basedecode)*/

$sql_check_user = "INSERT INTO `fitness_tbl` SET
                        `s_id` = '".$person."',
                        `height` = '".$height."',
						`weight` = '".$weight."',
                        `bmi` = '".$bmi."',
						`water` = '".$water."',
                        `bone` = '".$bone."',
						`fat` = '".$fat."',
                        `visceral` = '".$visceral."',
						`date` = now()";
$res_check_user = mysql_query($sql_check_user) or die(DEBUG?mysql_error():"");
$fid = mysql_insert_id();
if($res_check_user){
echo '1';
}else{
echo '0';
}
	
?>