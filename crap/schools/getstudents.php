<?php

include("../includes/connectionPool.php");
include("../smarty.php");
session_start();
//include_once("noentry.php");
$schoolid = $_SESSION['ses_schoolid'];
$person_std = mysql_real_escape_string($_POST['classno']);
$person_sec = mysql_real_escape_string($_POST['section']);
/*password stored as base_64encode(sha1) we have to decode by sha1(basedecode)*/

$sql_check_user = "SELECT * FROM `person_tbl` WHERE `schoolID` = '".$schoolid."' AND `person_standard`='".$person_std."' AND  `person_section` = '".$person_sec."'";
$res_check_user = mysql_query($sql_check_user) or die(DEBUG?mysql_error():"");
$result_no = mysql_num_rows($res_check_user);
$count = 1;
if($result_no >0){
$htm_view = '<ul>';
		

	while($result = mysql_fetch_array($res_check_user)){
$htm_view .='<li id="acc_'.$result['studentID'].'" onclick="studentstore('.$result['studentID'].')">
			<h3>'.$result['studentID'].'</h3>
			<ul>
				<!----<li><a onclick="dentaldiv()" href="javascript:" id="dental_'.$result['studentID'].'">Dental</a></li>---->
				<li><a onclick="fitnessdiv()"  href="javascript:" id="fit_'.$result['studentID'].'">General</a></li>
				<li><a onclick="visiondiv()" href="javascript:" id="vision_'.$result['studentID'].'">Vision</a></li>
				<li><a onclick="pftdiv()"  href="javascript:" id="pft_'.$result['studentID'].'">PFT</a></li>
				<li><a onclick="hearingdiv()" href="javascript:" id="hear_'.$result['studentID'].'">Hearing</a></li>
			</ul>
		</li>
		';
$count++;
}
	}else{
		
		echo '<ul><li>No Student Found</li></ul>';
		return false;
		
		}

$htm_view .='</ul>';
echo $htm_view;

?>