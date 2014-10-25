<?php

include("../includes/connectionPool.php");
include("../smarty.php");
session_start();
//include_once("noentry.php");
$userid = mysql_real_escape_string($_POST['parid']); 
/*password stored as base_64encode(sha1) we have to decode by sha1(basedecode)*/
if(isset($_POST['parid']) && $_POST['parid'] != '')
{
$sql_check_user = "SELECT * FROM `person_tbl` WHERE `studentID`='".$userid."'";
$res_check_user = mysql_query($sql_check_user) or die(DEBUG?mysql_error():"");
$num_totrec = mysql_num_rows($res_check_user);
if($num_totrec > 0){
echo '1';
}else{
echo '0';
}
	}
?>