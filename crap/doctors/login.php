<?php
ob_end_clean();
ob_start();

session_start();
include("../includes/connectionPool.php");
include("../smarty.php");
if($_SESSION['ses_userid']){
header("location:index.php");
}
$smarty->assign("middle_file","login.tpl");
$smarty->display('login.tpl');
?>