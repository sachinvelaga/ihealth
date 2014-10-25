<?php

include("../includes/connectionPool.php");
include("../smarty.php");
session_start();
//include_once("noentry.php");
$person = mysql_real_escape_string($_POST['person']);
$rbc = mysql_real_escape_string($_POST['rbc']); 
$wbc = mysql_real_escape_string($_POST['wbc']); 
$hemoglobin = mysql_real_escape_string($_POST['hemoglobin']); 
$leukemia = mysql_real_escape_string($_POST['leukemia ']);
$pass = mysql_real_escape_string($_POST['pass']); 
/*password stored as base_64encode(sha1) we have to decode by sha1(basedecode)*/

$sql_check_user = "INSERT INTO `blood_tbl` SET
                        `p_id` = '".$person."',
                        `rbc` = '".$rbc."',
						`wbc` = '".$wbc."',
                        `hemoglobin` = '".$hemoglobin."',
						`leukemia` = '".$leukemia."',
                        `pass/fail` = '".mysql_real_escape_string($_POST['pass'])."'";
$res_check_user = mysql_query($sql_check_user) or die(DEBUG?mysql_error():"");
$bid = mysql_insert_id();
if($res_check_user){
$sql_check_update = "UPDATE `health_tbl`
					SET `rbc`='".$rbc."',`wbc`='".$wbc."',`hemoglobin`='".$hemoglobin."',`leukemia`='".$leukemia."',`b_id`='".$bid."',`blood_date`=now()
					WHERE `s_id`='".$person."';";
$res_check_update = mysql_query($sql_check_update) or die(DEBUG?mysql_error():"");
echo '1';
}else{
echo '0';
}
	
?>