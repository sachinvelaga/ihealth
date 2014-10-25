<?php
ob_end_clean();
ob_start();
@session_start(); 
include("includes/connectionPool.php");
include("includes/excel_reader.php");
include_once("noentry.php");
// ---------------------------------------- INCLUDE SMARTY ---------------------------------------------	
	include('includes/smarty.php');
// ---------------------------------------- INCLUDE SMARTY ---------------------------------------------
$t= $obj->check_last_date();
if(!$t)
{
	$smarty->assign('plan_expired','expired');
	$msg = base64_encode("Please upgrade your registration to continue with our services.");
	header("Location:plans.php?var_msg=$msg");
	exit;
}

if(isset($_POST['csvupload'])) 
{	
	if(isset($_FILES['csv']))
	{
			$eStatus     = $_POST['eStatus'];
		if($_FILES['csv']['tmp_name'] != "")
		{
			
				$file = $_FILES["csv"]["name"];
				$system = explode('.',$file);
				$system1 = $system[1];//Extension
				
				if($system1 != 'xls' && $system1 != 'xlsx' && $system1 != 'XLS' && $system1 != 'XLSX' && $system1 != 'CSV' && $system1 != 'csv')
				{
					$msg = rawurlencode("Invalid file type.Select valid format.");  
				}
				else
				{
					
					$id = $_SESSION['ses_varid'];
					$time = time();
					$filename  = "comp_".$id."_".$time.".".$system1;
					
					move_uploaded_file($_FILES["csv"]["tmp_name"],"UploadedFiles/" . $filename);
				
				
					// Import data - Starts here		
				
					$xls = new Spreadsheet_Excel_Reader("UploadedFiles/" . $filename);
					$dat =(array) ($xls);
					$result = $dat['sheets'][0]['cells'];
					$rows = $dat['sheets'][0]['numRows'];
//					
//					echo "<pre>";
//					print_r($result);
//                                        print_r($rows);
					
					
                                       
					
				
					if(isset($result) && (count($result)>0))
					{
						//while($result = mysql_fetch_array($data))
		
						$companyId = $_SESSION['ses_varid'];
						
						$cntI = 0;
						for($j=2;$j<=$rows+1;$j++)
						{
					
						 /**********department name***************/	
							//$department_name  = trim($result[$j][1]);
                                                    
                                                   $departmentnewid = trim(mysql_real_escape_string($_POST['selectdepartment']));
                                                                                
                                                                              $sql_select_dept_new = "SELECT * FROM `tbl_department` WHERE `departmentId` ='".trim($departmentnewid)."' AND`companyId`=".$_SESSION['ses_varid']."";										
											$res_select_dep_new = mysql_query($sql_select_dept_new);  
                                                                                $result_dep_new  = mysql_fetch_array($res_select_dep_new);
                                                                                $department_name = $result_dep_new['departmentname']; 
                                                    
                                                    /**********location name***************/
                                                     $locationnewid = trim(mysql_real_escape_string($result_dep_new['locationId']));
                                                                                
                                                                              $sql_select_loc_new = "SELECT * FROM `tbl_location` WHERE `locationId` ='".trim($locationnewid)."' AND`companyId`=".$_SESSION['ses_varid']."";										
											$res_select_loc_new = mysql_query($sql_select_loc_new);  
                                                                                $result_loc_new  = mysql_fetch_array($res_select_loc_new);
                                                                               
                                                    
						
								
							$name	 = trim(mysql_real_escape_string($result[$j][1]));
							if($name == "n/a" || $name=="N/A" || $name=="")
							{
								$name="";
							}
							
							$surname		 = trim(mysql_real_escape_string($result[$j][2]));
							if($surname == "n/a" || $surname=="N/A" || $surname=="")
							{
								$surname="";
							}
							
							$email		 = trim(mysql_real_escape_string($result[$j][3]));
							if($email == "n/a" || $email=="N/A" || $email=="")
							{
								$email="";
							}
							
							$phone	 = trim(mysql_real_escape_string( $result[$j][4]));
							if($phone == "n/a" || $phone=="N/A" || $phone=="")
							{
								$phone="";
							}
							
							$obj->check_user();
							
                                                        
							if( $email != "")
							{ 
								
								
								$sql_check = "SELECT * FROM `tbl_companyuser` WHERE `email` = '".$email."' "; 
								$qry_check =mysql_query($sql_check);
								if(mysql_num_rows($qry_check)>0)
								{
//									$sql_update = "UPDATE `tbl_companyuser` SET `eStatus` = '".$eStatus."' WHERE `email` = '".$email."' AND `departmentId` = '".$departmentnewid."' ";
//									$db_update=mysql_query($sql_update) or die("Error in : $sql");
								}
								else
								{
									 $pwd = $obj->createPassword();
									 $enc_pwd = base64_encode($pwd); 
									 $comid = $_SESSION['ses_varid'];
                                                                       
									 $sql="insert into `tbl_companyuser` (`companyId`, `departmentId`,`name`,`surname`,`password`,`email`,`phone`,`createdOn`,`eStatus`) values (".$comid.", ".$departmentnewid .",'".$name."','".$surname."','".$enc_pwd."','".$email."','".$phone."',now(),'1')";
									
									$myFile = "test.txt";
								$fh = fopen($myFile, 'w') or die("can't open file");; 
								$stringData = $sql;
								fwrite($fh, $stringData);
								
								fclose($fh);
									 $db_sql=mysql_query($sql) or die("Error in : $sql");
									
                                                                        
									 if($db_sql)
									 {	
										$sql_company = "SELECT * FROM `tbl_company` WHERE `companyId` = '".$comid."' ";
										$res_company = mysql_query($sql_company);
						
										$result_company =mysql_fetch_array($res_company);
										$companycode = $result_company['companycode'];
										$companyname = $result_company['companyname'];
										$companyemail = $result_company['email'];
										$obj->send_mail($email,$pwd,$department_name,$companycode,$name,$companyname);
										
										$msg=rawurlencode("Group Added Successfully");
                                                                                
									 }
									 else
									 {
										$msg=rawurlencode("Group not added");
                                                                               
									 }
									 $cntI++;
									 $msg = $cntI." Records Imported Succesfully.";
									 
								}

							}
							else
							{
								$msg=base64_encode("Email is necessary");
							}
							
						}
					}
					
						// Import data - Ends here		
				
					
					
					$checkGroups = $obj->checkGroups($_SESSION['ses_varid']);
					
					$checkGroupsStaff = $obj->checkGroupsStaff($_SESSION['ses_varid']);
					
					if($checkGroups==false)
                                        
						header("location:companyuserView.php"); 
                                       
					elseif($checkGroupsStaff==false)
                                         
                                       	header("refresh:1;companyuserView.php");
					else
                                       	header("refresh:1;companyuserView.php");
                                       
					/*$myFile = "test.txt";
								$fh = fopen($myFile, 'w') or die("can't open file");;
								$stringData = $msg;
								fwrite($fh, $stringData);
								
								fclose($fh);*/
				}
			}
		}
		else
		{
			$msg = rawurlencode("Please select the file to import.");
		}
}
// SPECIFY TABLE NAME AND PRIMARY KEY 
	$tableName = "tbl_companyuser";
	$primaryId = "companyuserId";
	if(isset($_POST['seldepartment']))
	{
		$departmentId = $_POST['seldepartment'];
	}
	else if(isset($_REQUEST['departmentId']))
	{
		$departmentId = $_REQUEST['departmentId'];
	}
	else
	{
		$_POST['seldepartment']='';
	}
	// $companyuserId = $_REQUEST['id'];
	if($_REQUEST['action'] == "Delete")
	{
		$count = 0;
		if($_REQUEST['id'] != "")
		{
			if($_REQUEST['id'] != "")
			{ 	
				$sql1="DELETE FROM $tableName WHERE `$primaryId`='".$_REQUEST['id']."' ";
				$qry1=mysql_query($sql1);
				$count++;
			}
		}
		else
		{
			for($i=0;$i<$_REQUEST['no'];$i++)
			{
				$temp = "ch".$i;
				$id = $_REQUEST["$temp"];
				if($id != "")
				{
					$sql1="DELETE FROM $tableName WHERE `$primaryId`='".$id."' ";
					$qry1=mysql_query($sql1);
					$count++;	 	
				}
			
			}
		}		
		if($db_sql)
		{
			if($count==1)
			{
				$msg = rawurlencode($count." Record deleted successfully");
			}
			else
			{
				$msg = rawurlencode($count." Records deleted successfully");
			}
		}
		else
		{
			$msg = rawurlencode($count." Record deleted");
		}
	}
	
	// ACTIVE ACTION
	if($_REQUEST['action'] == "Active")
	{
		$count=0;
		for($i=0;$i<$_REQUEST['no'];$i++)
		{
		 	$temp = "ch".$i;
			$id = $_REQUEST["$temp"];
		  	if($id != "")
			{ 
				$sql = "UPDATE `$tableName` SET `eStatus` = '1' WHERE `$primaryId` = '".$id."'"; 
				$db_sql = mysql_query($sql) or die(DEBUG?mysql_error():"");
				$count++;
			}
		}
		if($db_sql)
		{
			$msg = rawurlencode($count." Records are activated successfully" );
		}
		else
		{
			$msg = rawurlencode($count."Records are not activated");
		}
	}
	
	// INACTIVE ACTION
	if($_REQUEST['action'] == "Inactive")
	{
		$count=0;
		for($i=0;$i<$_REQUEST['no'];$i++)
		{
		  $temp="ch".$i;		 
		  $id = $_REQUEST["$temp"];
		  if($id != "")
		  { 
			  $sql = "UPDATE `$tableName` SET eStatus = '0' WHERE `$primaryId` = '".$id."'"; 
			  $db_sql = mysql_query($sql) or die(DEBUG?mysql_error():"");
			  $count++;
		  }
		}
		if($db_sql)
		{
			$msg = rawurlencode($count." Records are inactivated successfully");
		}
		else
		{
			$msg = rawurlencode($count. " Records are not inactivated");
		}
	}
	// CURRENT PAGE AND MAKE PAGE LIMIT
	if( isset($_REQUEST['page']) && $_REQUEST['page'] != "" )
	{
	    $page = $_REQUEST['page'];
		if(isset($_POST['keyword']))
		{
			$page = 1;
		}
	}
	else
	    $page = 1;	
		
	   
    $start_limit = ($page*$record_limit) - $record_limit;		      
	
	// SELECT TABLE'S ROW COUNT
	$sql_count = "SELECT * FROM `$tableName` WHERE `departmentId` = '".$_REQUEST['departmentId']."' ";
	$num_totrec = $obj->NumRows($sql_count);
	// FOR SEARCH 
	$keyword = $_POST['keyword'];
	$option = $_POST['option'];
	//print_r($_POST);
		
	if(isset($keyword) && $keyword!="")
	{
		$str ='';
		
		if(isset($_POST['department_id']))
		{
		    $departmentId = $_POST['department_id'];
		    $str = "AND `departmentId`=".$departmentId."";	
		}
	
		//$db_query = "SELECT * FROM `$tableName` WHERE `departmentId` = '".$_POST['departmentId']."' and `$option` LIKE '".trim($keyword)."%' ORDER BY `$option` DESC ";
		$db_query = "SELECT * FROM `$tableName` WHERE `$option` LIKE '".trim($keyword)."%' ".$str."  ORDER BY `$option` DESC ";
		$arr_page_vars = page_variables($db_query,$record_limit,$page);
		
		$db_result1 = mysql_query($db_query) or die(DEBUG?mysql_error():"");
		$num_totrec = mysql_num_rows($db_result1);
	
		//$db_query = "SELECT * FROM `$tableName` WHERE `departmentId` = '".$_POST['departmentId']."' and `$option` LIKE '".trim($keyword)."%' ORDER BY `$option` DESC LIMIT ".$start_limit.",".$record_limit." ";
		
		$db_query = "SELECT * FROM `$tableName` WHERE `departmentId` = '".$_POST['department_id']."' and `$option` LIKE '".trim($keyword)."%' ORDER BY `$option` DESC LIMIT ".$start_limit.",".$record_limit." ";
		$page_args = "?option=$option&keyword=$keyword"; 
		
		
	}
	else
	{
		if($departmentId != "")
		{
			$db_query = "SELECT * FROM `$tableName` WHERE `departmentId` = '".$departmentId."'  ORDER BY `head` DESC ";
		}
		else
		{
			$sql_sel_dept ="SELECT * FROM `tbl_department` WHERE `companyId` = '".$_SESSION['ses_varid']."'  ORDER BY `departmentId` ASC limit 1";
			$res_sel_dept = mysql_query($sql_sel_dept);
			if(mysql_num_rows($res_sel_dept)>0)
			{
				$r = mysql_fetch_array($res_sel_dept);
				$departmentId = $r['departmentId'];
			}
			$db_query = "SELECT * FROM `$tableName` WHERE `departmentId` = '".$departmentId."'  ORDER BY `head` DESC  ";
		}
		$arr_page_vars = page_variables($db_query,$record_limit,$page);		
		$db_result1 = mysql_query($db_query) or die(DEBUG?mysql_error():"");
		$num_totrec = mysql_num_rows($db_result1);
		if(isset($_REQUEST['departmentId']))
		{
			 $db_query = "SELECT * FROM `$tableName` WHERE `departmentId` = '".$_REQUEST['departmentId']."'  ORDER BY `head` DESC LIMIT ".$start_limit.",".$record_limit." ";
		}
		else
		{
			//$db_query = "SELECT * FROM `$tableName` WHERE `departmentId` = '".$departmentId."'  ORDER BY `$primaryId` DESC LIMIT ".$start_limit.",".$record_limit."";
			
		 $db_query = "SELECT * FROM `$tableName` WHERE `departmentId` = '".$departmentId."'  ORDER BY `head` DESC LIMIT ".$start_limit.",".$record_limit."";
		}
		$page_args = "";
	}
	$db_result = $obj->Query($db_query);
	$count_db_res = $obj->NumRows($db_query);
	$smarty->assign("departmentId",$departmentId);
	$smarty->assign("count_db_res",$count_db_res);
	
	$d = array();
	$data = array();
	$i=0;
	if(mysql_num_rows($db_result) >0)
	{
		while($row = mysql_fetch_array($db_result))
		{
			$d['i'] = $i;
			$d['companyuserId'] = $row['companyuserId'];
			$d['departmentId'] = $row['departmentId'];
			
		
			$sql_dept = "SELECT `departmentName` FROM `tbl_department` WHERE `departmentId`= ".$row['departmentId']."";
			$db_dept = mysql_query($sql_dept) or die(DEBUG?mysql_error():"");
			$num_dept = mysql_num_rows($db_dept);
			if($num_dept >0)
			{
				$row2 = mysql_fetch_array($db_dept);
				$dept_name = $row2['departmentName'];
			}
			$d['departmentName'] = $dept_name;
		 	$d['name'] = $row['name'];
			$d['surname'] = $row['surname'];
		 	$superior = $row['superiorname'];
 			$sql_name = "SELECT name FROM `tbl_companyuser` WHERE `companyuserId`='".$superior."' ";
			$qry_name = mysql_query($sql_name);
 			$res =	mysql_fetch_array($qry_name);
			$d['superiorname'] = $res['name'];
			$d['email'] = $row['email'];
 			$d['phone'] = $row['phone'];
			$d['createdOn'] = $row['createdOn'];
		 	$d['eStatus'] = $row['eStatus'];
			$d['head'] = $row['head'];
			$d['userrole'] = $row['userrole'];
			$data[] = $d;
			$i++;
		}
	}
        
	$smarty->assign("data",$data);
     //WHERE `companyId` = ".$_SESSION['ses_varid']."
  //$db_query_c = "SELECT count(*) as count,`departmentId` FROM `$tableName` GROUP BY `departmentId` ORDER BY `departmentId` ASC ";
  
  $db_query_c = "SELECT * FROM tbl_department WHERE companyId='".$_SESSION['ses_varid']."' ORDER BY locationId ASC";
		
	/*$db_result1_c = mysql_query($db_query_c) or die(DEBUG?mysql_error():"");
	$num_totrec_c = mysql_num_rows($db_result1_c);*/
	
	$db_result1 = $obj->Query($db_query_c);
	$count_db_res1 = $obj->NumRows($db_query_c);
	$smarty->assign("count_db_res1",$count_db_res1);
	
	$i=0;
	if($count_db_res1 >0)
	{
		$t_data= array();
		$t = array();
		while($row1 = mysql_fetch_array($db_result1))
		{
			$dept_id= $row1['departmentId'];
			$emp    = $row1['count'];
			$locationId    = $row1['locationId'];
			$db_query2 = "SELECT departmentName, eStatus, locationId FROM `tbl_department` WHERE `departmentId`= ".$dept_id." order by locationId ";
			$db_result2 = mysql_query($db_query2) or die(DEBUG?mysql_error():"");
			$num_totrec2 = mysql_num_rows($db_result2);
			if($num_totrec2 >0)
			{
				$row2 = mysql_fetch_array($db_result2);
				$dept_name = $row2['departmentName'];
				$eStatus = $row2['eStatus'];
			}
			$t['departmentId'] = $dept_id;
			$t['departmentName'] = $dept_name;
			$t['tot_employees'] = $emp;
			$t['eStatus'] = $eStatus;
			$db_query_loc = "SELECT `locationname` FROM `tbl_location` WHERE `locationId`= ".$locationId."";
			$db_result_loc = mysql_query($db_query_loc) or die(DEBUG?mysql_error():"");
			$row_loc = mysql_fetch_array($db_result_loc);
			$t['locationname'] = $row_loc['locationname'];
				
				
			$t_data[] = $t;
		}
	}
	$smarty->assign("tdata",$t_data);	
$smarty->assign("sorton",$sorton);
//no of rows



	$db_querypl = "SELECT * FROM `tbl_company` WHERE `companyId` = '".$_SESSION['ses_varid']."' ORDER BY `companyId` DESC";
	$db_resultpl = $obj->Query($db_querypl);
 	$count_db_respl = $obj->NumRows($db_querypl);
	
	$rowpl = mysql_fetch_array($db_resultpl);
	
	 $signupplannew = $rowpl['signupplan'];	
	 
	 if($signupplannew == "Gold")
	 {
		 $userlimitnew = "101-500 users";
	 }
	 else if($signupplannew == "Platinum")
	 {
		$userlimitnew = "500 & More users"; 
		 
	 }
	 else if($signupplannew == "Silver")
	 {
		$userlimitnew = "1-100 users"; 
	 }
	 else if($signupplannew == "30 Day Free")
	 {
		$userlimitnew = "1-100 users"; 
	 }
	 	 else if($signupplannew == "")
	 {
		$userlimitnew = "1-100 users"; 
	 }
	
	 $plandurationnew = $rowpl['planduration'];	
	
		$smarty->assign("signupplannew",$signupplannew);
	$smarty->assign("plandurationnew",$plandurationnew);
	$smarty->assign("userlimitnew",$userlimitnew);
	
	
	
	// ROWS PER PAGE COUNT
	if(isset($start_limit))
	{
		$startrec = $start_limit;
		$lastrec = $startrec + $record_limit;
		$startrec = $startrec + 1;
	}	
	if($lastrec > $num_totrec)
	{
		$lastrec = $num_totrec;
	}
	// MESSAGE DISPLAY
	if($_REQUEST['var_msg'] != "")
	{
		$var_msg = $_REQUEST['var_msg'];
		$smarty->assign("var_msg",base64_decode($var_msg));
	}
	elseif($msg != "")
	{
		$smarty->assign("var_msg",rawurldecode($msg));
	}
	elseif($keyword != "")
	{
		$var_msg = "Your search for $keyword has found $num_totrec matches:";
		$smarty->assign("var_msg",$var_msg);
	}
	/*elseif($num_totrec > 0 )
	{
		$recmsg = "Showing ".$startrec." - ".$lastrec." records of ".$num_totrec;
		$smarty->assign("var_msg",$recmsg);
	}
	elseif($count_db_res > 0 && ($keyword == ""))
	{
		$var_msg = "Total no of records are <font color=#000000>$count_db_res</font>";
		$smarty->assign("var_msg",$var_msg);
	}*/
	else
	{
		$recmsg="No records found.";
		$smarty->assign("recmsg",$recmsg);
	}
 
	// MAKING PAGING LINK & VARIABLES START
	for( $pageStart=$arr_page_vars['page_link_start']; $pageStart<($arr_page_vars['page_link_start']+10); $pageStart++ )
	{
	  if( $pageStart > $arr_page_vars['no_of_pages'] )	  
	      break;
	  $page_start[$pageStart] = $pageStart;	
	}
		
		
		
	$companyId = $_SESSION['ses_varid'];
	//$deptId = $_REQUEST['department'];
	//$smarty->assign("deptId",$deptId);
	
	//exit;
		// UPDATE ACTION
	if(isset($_POST['update']))
	{
	
		$sql_check = "SELECT * FROM `tbl_companyuser` WHERE `$primaryId` = '".$_POST['id']."'";
	$res_check = mysql_query($sql_check) or die(DEBUG?mysql_error():"");
	$result = mysql_fetch_array($res_check);
	
			if(mysql_num_rows($res_check) > 0)
			{	
			if($result['email'] != $_POST['email']){
				$sql_checkem = "SELECT * FROM `tbl_companyuser` WHERE `email` = '".$_POST['email']."'";
	$res_checkem = mysql_query($sql_checkem) or die(DEBUG?mysql_error():"");
	if(mysql_num_rows($res_check) > 0){
	$msg = base64_encode("Email already exist in this group!!");
				header("Location: companyuserView.php?departmentId=$departmentId&var_msg=$msg");
				exit;
									}
			}else{
			
			if($_POST['userrole'] == "1"){
					$head = "2";
					}else if($_POST['userrole'] == "2"){
						$head = "1";
						}
					
							 $sql = "UPDATE `$tableName` SET 
				 					departmentId = '".$_POST['editdepartment']."', 
									name = '".$_POST['name']."',
									surname = '".$_POST['surname']."',
									email = '".$_POST['email']."',
									phone = '".$_POST['phone']."',
									eStatus = '".$_POST['eStatus']."',
									userrole = '".$_POST['userrole']."',
									head = '".$head."'
							WHERE `$primaryId` = '".$_POST['id']."'";
						
			$db_sql = mysql_query($sql) or die(DEBUG?mysql_error():"");
			if($db_sql)
			{		
						if($_POST['id'] === $_SESSION['ses_companyuserId'] ){
						unset($_SESSION['ses_head']);
						$_SESSION['ses_head'] = $head;
						}
				$msg = base64_encode("Record is updated");
				header("Location: companyuserView.php?departmentId=$departmentId&var_msg=$msg");
				exit;
			}
			else
			{
				$msg = base64_encode("Record is not updated");
				header("Location: companyuserView.php?departmentId=$departmentId&var_msg=$msg");
				exit;
			}
		}
		}
		else
		{
			$msg = base64_encode("Record is not valid");
			header("Location: companyuserView.php?departmentId=$departmentId&var_msg=$msg");
			exit;
		}
	}
	
	// ADD ACTION	
	if(isset($_POST['add']))
	{
		
	if($_POST['department']!=" " && $_POST['name']!=" " && $_POST['surname']!=" " && $_POST['email']!=" " && $_POST['password']!=" " && $_POST['phone']!=" ")
	{
		if(isset($_POST['department']))	$departmentId = $_POST['department'];
			
		$sql_check = "SELECT * FROM `tbl_companyuser` WHERE `email` = '".$_POST['email']."' AND `departmentId` = $departmentId";
		$qry_check =mysql_query($sql_check);
		if(mysql_num_rows($qry_check)>0)
		{
			
			$msg = base64_encode("Email already exist in this group");
			header("Location: companyuserView.php?departmentId=$departmentId&var_msg=$msg");
			exit;
		}
		else
		{
			$email_check = "SELECT * FROM `$tableName` WHERE `email` = '".$_POST['email']."' AND `companyId` = '".$_SESSION['ses_varid']."'";
			$db_email_check = mysql_query($email_check) or die(DEBUG?mysql_error():"");

			  $pwd = $obj->createPassword();
				$password = base64_encode($pwd);
				if($_POST['userrole'] == "1"){
					$head = "2";
					}else if($_POST['userrole'] == "2"){
						$head = "1";
						} 
			$companyId = $_SESSION['ses_varid'];
			 $sql = "INSERT INTO `$tableName` SET
								companyId = '".$companyId."',
								departmentId = '".$departmentId."',
								name = '".$_POST['name']."',
								surname = '".$_POST['surname']."',
								superiorname = '".$_POST['superiorname']."',
								email = '".$_POST['email']."',
								password = '".$password."',
								phone = '".$_POST['phone']."',
								userrole = '".$_POST['userrole']."',
								head = '".$head."',
                              	eStatus = '1',
								createdOn = now()";	
			
			$db_sql = mysql_query($sql) or die(DEBUG?mysql_error():"");
			if($db_sql)
			{
				if(mysql_num_rows($db_email_check)>0) {
					while($row = mysql_fetch_array($db_email_check)) {
						if($row['isActive'] == 1) {
						$udid = "UPDATE `$tableName` SET `UDID` = '".$row['UDID']."',`devicetoken` = '".$row['devicetoken']."' WHERE `email` = '".$row['email']."'"; 
							$db_udid = mysql_query($udid) or die(DEBUG?mysql_error():"");
						}
					}
				} 
				else {
					$email = $_POST['email'];
					//$password = $_POST['password'];
					$name = $_POST['name'];
					$sql_check = "SELECT * FROM `tbl_department` WHERE `departmentId` = '".$departmentId."' ";
					$qry_check = mysql_query($sql_check);
					$res = mysql_fetch_array($qry_check);
					$departmentname = $res['departmentname'];
					$companyId = $res['companyId'];
					$sql_company = "SELECT * FROM `tbl_company` WHERE `companyId` = '".$companyId."' ";
					$qry_company = mysql_query($sql_company);
					$result =mysql_fetch_array($qry_company);
					$companycode = $result['companycode'];
					$companyname = $result['companyname'];
					$companyemail = $result['email'];
					$obj->send_mail($email,$pwd,$departmentname,$companycode,$name,$companyname,$companyemail);
				}
					$msg = base64_encode("Staff added successfully");
					//$msg = "Staff has been successfully added please <a href=\"companyuserView.php?departmentId=$departmentId\">click here</a> to see the list";
					header("Location: companyuserView.php?departmentId=$departmentId&var_msg=$msg");
					exit;				
			}
			else
			{
				$msg = base64_encode("Record is not added");
				header("Location: companyuserView.php?departmentId=$departmentId&var_msg=$msg");
				exit;
			}
		}
	}
	else
	{
		$msg = "Mandatory fields are necessary";
	}
} 
   $breadcrumbnav = '<a href="companyView.php">Home</a> ';
    $breadcrumbnav .= '> <a href="companyuserView.php"> Manage Staff </a>';
	$action = $_REQUEST['action'];
	if($_REQUEST['action'] == "Update")
	{
		$sql = "SELECT * FROM `$tableName` WHERE `$primaryId` = '".$_REQUEST['id']."'";
		$db_sql = mysql_query($sql) or die(DEBUG?mysql_error():"");
		$result = mysql_fetch_array($db_sql);
		$departmentId = $result['departmentId'];
		$name = stripslashes($result['name']); 
		$surname = stripslashes($result['surname']); 
		$superiorname = stripslashes($result['superiorname']); 
		$email = stripslashes($result['email']);
		$password = $result['password']; 
		$phone = stripslashes($result['phone']); 
		$eStatus = $result['eStatus'];
		$userrole = $result['userrole'];
		//print_r($result);
		//exit;
		$breadcrumbnav .= '> Edit Staff';
		$smarty->assign("id",$_REQUEST['id']); // $smarty->assign("id", CHAGE VALUE ONLY);
		$smarty->assign("deptId",$departmentId);
		$smarty->assign("name",$name);
		$smarty->assign("surname",$surname);
		$smarty->assign("superiorname",$superiorname);
		$smarty->assign("email",$email);
		$smarty->assign("password",$password);
		$smarty->assign("phone",$phone);
		$smarty->assign("eStatus",$eStatus);
		$smarty->assign("userrole",$userrole);
		$smarty->assign("action",$action);
	} 
	else
	{
		$sql_users = "SELECT count(*) as cnt FROM `tbl_companyuser` WHERE `departmentId` IN(SELECT `departmentId` FROM `tbl_department` WHERE `companyId` = ".$_SESSION['ses_varid'].") ";
		//$sql_users = "SELECT count(*) as cnt FROM `tbl_companyuser` WHERE `departmentId` IN(SELECT `departmentId` FROM `tbl_department` WHERE `companyId` =".$_SESSION['ses_varid'].")";
		$qry_user = mysql_query($sql_users);
		if(mysql_num_rows($qry_user) >0 )
		{
			$rw = mysql_fetch_array($qry_user);
			$tot_users = $rw['cnt'];
			
			$sql_plan = "SELECT *  FROM `tbl_company` WHERE `companyId`=".$_SESSION['ses_varid']."";
			$qry_plan = mysql_query($sql_plan);
			if(mysql_num_rows($qry_plan) >0 )
			{
				$rw1 = mysql_fetch_array($qry_plan);
				$plan = $rw1['signupplan'];
				$_SESSION['signup_plan'] = $plan;
								
				if($plan == 'Free Trial' && $tot_users>=FREE_USERS)
				{
					$msg = base64_encode("You have reached the limitation to add new users.Please upgrade your plan.");			header("Location:plans.php?var_msg=$msg");
					exit;
					 
				}
				if($plan == 'Silver' && $tot_users>=SILVER_USERS)
				{
					
					$msg = base64_encode("You have reached the limitation to add new users. Please upgrade your plan.");			header("Location:plans.php?var_msg=$msg");
					exit;
					
				}
				
				if ($plan == 'Gold' && $tot_users>=GOLD_USERS) 
				{
					$msg = base64_encode("You have reached the limitation to add new users.Please upgrade your plan.");			header("Location:plans.php?var_msg=$msg");
					exit;
				}
			}
		} 
		
        $breadcrumbnav .= '> Add Staff'; 
		$action = "Add";
		$smarty->assign("action",$action);
	}
	$smarty->assign("breadcrumb",$breadcrumbnav);
	$ses_person =$_SESSION['ses_person'];
	$smarty->assign("ses_person",$ses_person);
$companyname=$_SESSION['ses_companyname'];
	$ses_companyuserId=$_SESSION['ses_companyuserId'];
	$smarty->assign("ses_companyuserId",$ses_companyuserId);
	$ses_varid=$_SESSION['ses_varid'];
	$smarty->assign("ses_varid",$ses_varid);
	$ses_head=$_SESSION['ses_head'];
	$smarty->assign("ses_head",$ses_head);
	
$smarty->assign("companyname",$companyname);

$lastlogtime = $_SESSION['ses_lastlogin'];
$smarty->assign("lastlog",$lastlogtime);
	$sql = "SELECT * FROM `tbl_department` WHERE `departmentId` = '".$departmentId."' ";
	$qry = mysql_query($sql);

	$row = mysql_fetch_array($qry);
	$departmentname = $row['departmentname'];
	$sql = "SELECT * FROM `tbl_companyuser` WHERE `departmentId` = '".$departmentId."' ";
	$qry_superior = $obj->select($sql);
	$smarty->assign("data_superior",$qry_superior);
	$sql_department = "SELECT d.*, l.locationname FROM `tbl_department` as d LEFT JOIN `tbl_location` as l ON l.locationId=d.locationId WHERE d.`companyId` = '".$_SESSION['ses_varid']."' ";
	$qry_department = $obj->select($sql_department);
	$smarty->assign("data_department",$qry_department);
	$smarty->assign("id",$ses_varid);
	$smarty->assign("page_title","Manage Staff");
	$smarty->assign("departmentname",$departmentname);	
	//$smarty->assign("departmentId",$departmentId);
	$smarty->assign("msg",$msg);

	
	$checkGroups = $obj->checkGroups($_SESSION['ses_varid']);
	$smarty->assign("checkGroups",$checkGroups);
	
	$checkGroupsStaff = $obj->checkGroupsStaff($_SESSION['ses_varid']);
	$smarty->assign("checkGroupsStaff",$checkGroupsStaff);
	
	if($checkGroupsStaff==true)
		$smarty->assign("checkErrorMessage","You have Staff added in your account, now go to  <a href='scenarioView.php'>Manage Scenarios >></a> ");
	else
		$smarty->assign("checkErrorMessage","You have not added any Staff in your account, Add Staff to manage next process.");


	$checkGroupsScenerio = $obj->checkGroupsScenerio($_SESSION['ses_varid']);
	$smarty->assign("checkGroupsScenerio",$checkGroupsScenerio);

$breadcrumbnav = '<a href="companyView.php">Home</a> ';
$breadcrumbnav .= '> Manage Staff';
	$ses_plan =$_SESSION['ses_plan'];
	$smarty->assign("ses_plan",$ses_plan);
$smarty->assign("breadcrumb",$breadcrumbnav);
$smarty->assign("option",$option);
$smarty->assign("seldepartment",$departmentId);
$smarty->assign("page_name",$obj->curPageName());
$smarty->assign("curr_page",$page);
$smarty->assign("links",$page_start); 
$smarty->assign("page_args","{$page_args}");	      
$smarty->assign("arr_page_vars",$arr_page_vars);
$smarty->assign("page_title","Manage Staff");
// MAKING PAGING LINK & VARIABLES END
//$smarty->display("departmentView.tpl");
//$smarty->assign("departmentId",$_POST['seldepartment']);
$smarty->assign("manager","Staff"); // $smarty->assign("manager", CHANGE ONLY VALUE "Admin" NOT TO MANAGER );
$smarty->assign("add_file","companyuserView.php");
$smarty->assign("view_file","companyuserView.php");
$smarty->assign("middle_file","companyuserView.tpl");	
	# COMMON FILES	
$smarty->display("common_template.tpl");
?>