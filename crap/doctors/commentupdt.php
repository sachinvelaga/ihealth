<?php

include("../includes/connectionPool.php");
include("../smarty.php");
session_start();
$mainid = mysql_real_escape_string($_POST['mainid']);
$comment = mysql_real_escape_string($_POST['comment']);
$commenton = mysql_real_escape_string($_POST['commenton']);
$cstat = mysql_real_escape_string($_POST['cstat']);
$date = mysql_real_escape_string($_POST['indate']);
if($commenton == "dental"){
$sql_check_user =  "UPDATE `dental_report` SET `comment`='".$comment."',`comment_status`='".$cstat."',`date_commented`=now() WHERE `d_id`='".$mainid."'";
}elseif($commenton == "vision"){
$sql_check_user =  "UPDATE `vision_tbl` SET `doctor_comments`='".$comment."',`comment_status`='".$cstat."',`comment_date`=now() WHERE `v_id`='".$mainid."'";
}elseif($commenton == "hearing"){
$sql_check_user =  "UPDATE `hearing_tbl` SET `doctor_comments`='".$comment."',`comment_status`='".$cstat."',`comment_date`=now() WHERE `h_id`='".$mainid."'";
}elseif($commenton == "fitness"){
$sql_check_user =  "UPDATE `fitness_tbl` SET `doctor_comment`='".$comment."',`comment_status`='".$cstat."',`comment_date`=now() WHERE `f_id`='".$mainid."'";
}elseif($commenton == "pft"){
$sql_check_user =  "UPDATE `pft_report` SET `comment`='".$comment."',`comment_status`='".$cstat."',`date_commented`=now() WHERE `pft_id`='".$mainid."'";
}
$res_check_user = mysql_query($sql_check_user) or die(DEBUG?mysql_error():"");
if($res_check_user){
		echo '1';
		}else{
		echo '0';
		}

?>