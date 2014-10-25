<?php
include("../includes/connectionPool.php");
include("../smarty.php");
session_start();
//include_once("noentry.php");
$sfname = $_POST['sfname'];
$slname = $_POST['slname'];
$sid = $_POST['sid'];  
$schoolid = $_POST['schoolid'];  
$fname = $_POST['fname'];
$mname = $_POST['mname'];  
$dob = $_POST['dob'];
$gender = $_POST['gender']; 
$address = $_POST['address'];
$city = $_POST['city']; 
$pincode = $_POST['pincode']; 
$blood = $_POST['blood']; 
$email = $_POST['email']; 
$phone = $_POST['phone']; 
$gtype = $_POST['gtype']; 

/*check student ID*/
$sql_student = "SELECT * FROM `person_tbl` WHERE `personID` = '".$_POST['sid']."' ";
$qry_student = mysql_query($sql_student) or die(DEBUG?mysql_error():""); 
 $result_student = mysql_fetch_array($qry_student);
	 if(mysql_num_rows($qry_email)>0){
	 echo '2';
	 exit;
	 }
/* parnet Insert*/
$sql_email = "SELECT * FROM `parent_tbl` WHERE `email` = '".$_POST['email']."' ";
$qry_email = mysql_query($sql_email) or die(DEBUG?mysql_error():""); 
 $result = mysql_fetch_array($qry_email);
	 if(mysql_num_rows($qry_email)>0){
		$pid = $result['parentID'];
		}else{ 
$sql_parent = "INSERT INTO `parent_tbl` SET
                        parent_name = '".mysql_real_escape_string($_POST['fname'])."',
                        wife_name = '".mysql_real_escape_string($_POST['mname'])."',
						email = '".mysql_real_escape_string($_POST['email'])."',
                        gender = '".mysql_real_escape_string($_POST['gender'])."',
                        address = '".mysql_real_escape_string($_POST['address'])."',
                        city = '".mysql_real_escape_string($_POST['city'])."',
                        pincode = '".mysql_real_escape_string($_POST['pincode'])."',
                        phone = '".mysql_real_escape_string($_POST['phone'])."'";
			$db_sql_parent = mysql_query($sql_parent) or die(DEBUG?mysql_error():"");
			$pid=mysql_insert_id();
			}
			/*parent insert end*/
			
	if($pid){
	$sql = "INSERT INTO `person_tbl` SET
                        parentID = '".$pid."',
                        schoolID = '".mysql_real_escape_string($_POST['schoolid'])."',
						studentID = '".mysql_real_escape_string($_POST['sid'])."',
                        password = '3a363b0bc9c2b0477c8ba7d66b73824ca235ae19',
                        person_fn = '".mysql_real_escape_string($_POST['sfname'])."',
                        person_ln = '".mysql_real_escape_string($_POST['slname'])."',
                        image = '',
						person_dob = '".mysql_real_escape_string($_POST['dob'])."',
                        person_gender = '".mysql_real_escape_string($_POST['gender'])."',
                       blood_group = '".mysql_real_escape_string($_POST['blood'])."',
                       person_standard = '".mysql_real_escape_string($_POST['standard'])."',
                       person_section = '".mysql_real_escape_string($_POST['section'])."'";
			$db_sql = mysql_query($sql) or die(DEBUG?mysql_error():"");
			$stid=mysql_insert_id();
		if($stid){
		echo '1';
		}else{
		echo '0';
		}
	}		
	
?>