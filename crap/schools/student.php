<?php
ob_end_clean();
ob_start();

session_start();
include("../includes/connectionPool.php");
include("../smarty.php");
if(!$_SESSION['ses_userid']){
header("location:../index.php");
}

$ses_image = $_SESSION['ses_image'];
$smarty->assign("ses_image",$ses_image);
$ses_id = $_SESSION['ses_userid'];
$smarty->assign("ses_id",$ses_id);
$logged_user = $_SESSION['ses_user'];
$smarty->assign("logged_user",$logged_user);
$smarty->display('student.tpl');
?>