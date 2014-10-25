<?php
ob_end_clean();
ob_start();

session_start();
include("../includes/connectionPool.php");
include("../smarty.php");
if(!$_SESSION['ses_userid']){
header("location:../index.php");
}

$schools = $_SESSION['ses_doctorschool'];
$htm_school ="";
$data  = array();

foreach($schools as $sch){
$sql_check_sch = "SELECT * FROM `school` WHERE `schoolID`='".$sch."'";
$res_check_sch = mysql_query($sql_check_sch) or die(DEBUG?mysql_error():"");
$result_sch = mysql_fetch_array($res_check_sch);
$htm_school .= "<option value=".$result_sch['schoolID'].">".$result_sch['school_name']."</option>";
$classes = explode(",",$result_sch['classes_list']);
$data[$sch] .='<select style="display:none;" id="standard_'.$sch.'" onchange="sectionslist()" name="standard" class="form-control" required>
			
				<option value="0">Select Class</option>';
foreach($classes as $cls){
$data[$sch] .= "<option value=".$cls.">".$cls."</option>";
}
$data[$sch] .= '</select>';
}
$smarty->assign("data",$data);
$user_profile = $_SESSION['user_profile'];
$smarty->assign("user",$user_profile);
$school = $htm_school;
$smarty->assign("school",$school);
$ses_image = $_SESSION['ses_image'];
$smarty->assign("ses_image",$ses_image);
$ses_id = $_SESSION['ses_userid'];
$smarty->assign("ses_id",$ses_id);
$logged_user = $_SESSION['ses_user'];
$smarty->assign("logged_user",$logged_user);
$smarty->display('report.tpl');
?>