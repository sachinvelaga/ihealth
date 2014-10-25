<?php

include("../includes/connectionPool.php");
include("../smarty.php");
session_start();
//include_once("noentry.php");
$person = mysql_real_escape_string($_POST['person']);
$left = mysql_real_escape_string($_POST['left']); 
$right = mysql_real_escape_string($_POST['right']); 
$pass = mysql_real_escape_string($_POST['pass']); 
/*password stored as base_64encode(sha1) we have to decode by sha1(basedecode)*/

$sql_check_user = "INSERT INTO `vision_tbl` SET
                        `p_id` = '".$person."',
                        `right_eye` = '".$right."',
						`left_eye` = '".$left."',
                        `pass/fail` = '".mysql_real_escape_string($_POST['pass'])."'";
$res_check_user = mysql_query($sql_check_user) or die(DEBUG?mysql_error():"");
$vid = mysql_insert_id();
if($res_check_user){
$sql_check_update = "UPDATE `health_tbl`
					SET `right_eye`='".$right."',`left_eye`='".$left."',`v_id`='".$vid."',`vision_date`=now()
					WHERE `s_id`='".$person."';";
$res_check_update = mysql_query($sql_check_update) or die(DEBUG?mysql_error():"");
echo '1';
}else{
echo '0';
}
	
?>