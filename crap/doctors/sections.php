<?php

include("../includes/connectionPool.php");
include("../smarty.php");
session_start();

$schoolID = mysql_real_escape_string($_POST['schoolID']);
$classno = mysql_real_escape_string($_POST['classno']); 
$htm_sections =' <select name="country" id="person-sec" onchange="getstudents()" class="form-control" required>
			
				<option value="0">Select Section</option>';
$sql_check_sc = "SELECT * FROM `school_section_list` WHERE `schoolID`='".$schoolID."' and `class_no`='".$classno."'";
$res_check_sc = mysql_query($sql_check_sc) or die(DEBUG?mysql_error():"");
$result_sc = mysql_fetch_array($res_check_sc);
$result_no = mysql_num_rows($res_check_sc);
if($result_no>0){
$sections = explode(",",$result_sc['sections_list']);
foreach($sections as $secs){
$htm_sections .= '<option value'.$secs.'>'.$secs.'</option>';
$htm_sections .= '</select>';
echo $htm_sections;
}
}else{
$htm_sections .= '<option value="first">first</option>';
$htm_sections .= '</select>';
echo $htm_sections;
}
	
?>