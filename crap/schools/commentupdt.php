<?php

include("../includes/connectionPool.php");
include("../smarty.php");
session_start();
$mainid = mysql_real_escape_string($_POST['mainid']);
$comment = mysql_real_escape_string($_POST['comment']);
$commenton = mysql_real_escape_string($_POST['commenton']);
$cstat = mysql_real_escape_string($_POST['cstat']);
if($commenton == "CBC"){
$sql_check_user =  "UPDATE `blood_tbl` SET `doctor_comments`='".$comment."',`comment_status`='".$cstat."',`comment_date`=now() WHERE `b_id`='".$mainid."'";
}elseif($commenton == "vision"){
$sql_check_user =  "UPDATE `vision_tbl` SET `doctor_comments`='".$comment."',`comment_status`='".$cstat."',`comment_date`=now() WHERE `v_id`='".$mainid."'";
}elseif($commenton == "hearing"){
$sql_check_user =  "UPDATE `hearing_tbl` SET `doctor_comments`='".$comment."',`comment_status`='".$cstat."',`comment_date`=now() WHERE `h_id`='".$mainid."'";
}elseif($commenton == "fitness"){
$sql_check_user =  "UPDATE `fitness_tbl` SET `doctor_comment`='".$comment."',`comment_status`='".$cstat."',`comment_date`=now() WHERE `f_id`='".$mainid."'";
}
$res_check_user = mysql_query($sql_check_user) or die(DEBUG?mysql_error():"");
if($res_check_user){
		echo '1';
		}else{
		echo '0';
		}

?>