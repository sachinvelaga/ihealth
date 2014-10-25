<?php
	define("HOST", "localhost");
	define("DATABASE", "childcare");
	define("USER", "presto");
	define("PASS", "pr3st0");
	class connectionPool
	{
		function connectionPool()
		{		
			mysql_connect(HOST,USER,PASS) or die(DEBUG?mysql_error():"");
			mysql_select_db(DATABASE) or die(DEBUG?mysql_error():"");		
		}
		
	function Query($query) 
		{ 
			$result = mysql_query($query) or die(DEBUG?mysql_error():"");	
			return $result;
		}
		
		function select($sql="")
		{
			if(empty($sql)) { return false; }
			if(!preg_match("/^SELECT/",$sql))
			{
				echo "Pleaes check Query.<br>$sql<p>";
				return false;
			}
			$results = mysql_query($sql);
			if( (!$results) or (empty($results)) ) {
				return false;
			}
			$count = 0;
			$data = array();
			while ( $row = mysql_fetch_array($results))
			{
				$data[$count] = $row;
				$count++;
			}
			mysql_free_result($results);
			 
			return $data;		
		}
		
		function NumRows($ressql)
		{
			$result = mysql_query($ressql) or die(DEBUG?mysql_error():"");
			return mysql_num_rows($result);
		}
		
		function insert($sql="")
		{
			if(empty($sql)) { return false; }
			if(!preg_match("/^insert/",$sql))
			{
				return false;
			}
		 
			$results = mysql_query($sql);
			if(!$results) 
			{
				//$this->error("<H2>No results!</H2>\n");
				return false;
			}
			$id = mysql_insert_id();
			return $id;		
		}
		
		function update($sql="")
		{
			if(empty($sql)) { return false; }
			if(!preg_match("/^update/",$sql))
			{
				return false;
			}
			 
			$results = mysql_query($sql);
			if(!$results) 
			{				 
				return false;
			}
			$rows = 0;
			$rows = mysql_affected_rows();
			return $rows;
		}
		
		function delete($sql="")
		{
			if(empty($sql)) { return false; }
			if(!preg_match("/^delete/",$sql))
			{
				return false;
			}
			 
			$results = mysql_query($sql);
			if(!$results) 
			{
				 
				return false;
			}
			$rows = 0;
			$rows = mysql_affected_rows();
			return $rows;
		}
			
		function esacpestring($arr_implode)
		{		 
			$arr_implode = mysql_real_escape_string($arr_implode);
			return $arr_implode;
		}	
		
		// GET SETTING TABLE DATA
		function getSettingData($vName)
		{
			$sql_value = "SELECT * FROM `tbl_settings` WHERE vName='".$vName."'";
			$res_value = mysql_query($sql_value);
			if(mysql_num_rows($res_value) > 0)
			{
				$result_value = mysql_fetch_array($res_value);
				$vValue = $result_value['vValue'];
			}
			else
			{
				$vValue = "";
			}
			return $vValue;
		}
		function age($dob,$mod=NULL)
	{
		$date1       = time()+3600;               
		$date2       = strtotime($dob);
		$dateDiff    = $date1 - $date2;
		
		$fullDays    = floor($dateDiff/(60*60*24));
		$fullHours   = floor(($dateDiff-($fullDays*60*60*24))/(60*60));
		$fullMinutes = floor(($dateDiff-($fullDays*60*60*24)-($fullHours*60*60))/60);
		$fullMonths  = floor($fullDays/30);
		$fullYears   = floor($fullDays/365);
		if($fullYears==0)
		{
			if($fullMonths==0)
			{
				if($fullDays==0)
				{
					if($fullHours==0){
						if($fullMinutes==0){
							$age = "Today";
						}else{
							
                                                        if($fullMinutes == 1){$age .="Today";}else{$age .=" Today";}
						}
					}else{
					
                                                if($fullHours == 1){$age .=" Today";}else{$age .=" Today";}
					}
				}else{
					$age = $fullDays;
                                        if($fullDays == 1){$age .=" day";}else{$age .=" days";}
				}
			}else{
				$age = $fullMonths;
                                if($fullMonths == 1){$age .=" month";}else{$age .=" months";}
			}
		}else{
			$age = $fullYears;
                        if($fullYears == 1){$age .=" year";}else{$age .=" years";}
		}
		if($mod){
			$ageArr =explode(' ',$age);
			return $ageArr[0];
		}else{
			return $age;
		}
	}
		// GET TIME-ZONE FROM TIME ZONE TABLE
		function getCorrectTime($date_time_string, $tz, $date_format = "r") 
		{
			$time = strtotime($date_time_string);			
			$tz_bak = getenv("TZ");			
			putenv("TZ=$tz");			
			$validdate= date($date_time_string, $time);			
			putenv("TZ" . ($tz_bak ? "=$tz_bak" : ""));			
			return $validdate;
		}
		/*
		$date_time_string is inserted date/datetime in database.
		$tz is the time zone value from database like Asia/Calcutta for INDIA
		$date_format is date/datetime format in which format you want.
  
		Usage
		$date='2009-06-29 11:02′ // value from data base
		$timezone='Asia/Calcutta'; // you want indian time zone
		$format='F d,Y H:i a' // give format of date and time in which format you want date and time
		getCorrectTime($date,$timezone,$format);
		*/
		
		# IMAGE CONVERT TO THE THUMB
		function createthumb($name,$filename,$new_w,$new_h,$image_extension)
		{	
			$system1 = $image_extension;
			if (preg_match('/JPG|JPEG/',$system1))
			{
				$src_img = @imagecreatefromjpeg($name);
			}
			else if (preg_match('/GIF/',$system1))
			{
				$src_img = @imagecreatefromgif($name);
			}		
			else if (preg_match('/PNG/',$system1))
			{
				$src_img = @imagecreatefrompng($name);
			}
		
			$old_x=@imagesx($src_img);
			$old_y=@imagesy($src_img);
	  
			$thumb_w=$new_w;
			$thumb_h=$new_h;
				
			$dst_img= @imagecreatetruecolor($thumb_w,$thumb_h);
			@imagecopyresampled($dst_img,$src_img,0,0,0,0,$thumb_w,$thumb_h,$old_x,$old_y); 
			
			if (preg_match("/PNG/",$system1))
			{
				@imagepng($dst_img,$filename); 
			} 
			else if (preg_match("/GIF/",$system1))
			{
				@imagegif($dst_img,$filename); 
			} 		
			else if (preg_match("/JPG|JPEG/",$system1)) 
			{
				@imagejpeg($dst_img,$filename); 
			}
			
			@imagedestroy($dst_img); 
			@imagedestroy($src_img); 
		}
		
		function curPageURL() 
		{
			 $pageURL = 'http';
			 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
			 $pageURL .= "://";
			 if ($_SERVER["SERVER_PORT"] != "80") {
			  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			 } else {
			  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			 }
			 return $pageURL;
		}
		function insert_log($action)
		{
			$log_sql = "INSERT INTO `tbl_log` SET
						companyId = '".$_SESSION['ses_varid']."',
						action = '".$action."',
						createdOn = now(),
						userEmail = '".$_SESSION['ses_emailid']."'";	
			$res_log_sql = mysql_query($log_sql);
		}		
		function curPageName() 
		{
			return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
		}
			function  send_mail($email,$password,$departmentname,$companycode,$name,$companyname)
		{
			$to=$email;
			$subject = "".$companyname." Saturn Life app details";
			$message = "<html><body>"; 
			$message.="<p>Hello ".$name.","."</p>";
			$message.="<p>You have been added as an employee in the ".$departmentname." department of ".$companyname.".  <br></br>Please download the company app by clicking on the relevant link below from your mobile phone and login with your details below."."</p>";
		$message.="<p><a href='http://mobile-build-api.applicationcraft.com/ota/46714f54-b308-4fd8-b77b-317ae671f373/1019ebb3-861f-48db-95e4-f3d71380431e'>iOS</a></p>";
			$message.="<p><a href='http://mobile-build-api.applicationcraft.com/files/c3d8aeb1-5ee7-43ca-83f3-522bc4f27380/iBC.v42.apk'>Android</a></p>";
			$message.="<p>Once logged-in you will be requested to change your password to your own.</p>";
			$message.="<b> Email: "."</b>".$email."<br>";
			$message.="<b> Temporary Password: "."</b>".$password."<br>";
			
			$message.="<p>Regards.</p>";
			$message.="<p>The Saturn Life team</p>";
			$message.= "<a href = 'http://www.Saturn Life.com/login.php'>Login Here</a>";
			$message.="</body></html>";
			
			$head = $companyname;
			$header .= "From: Saturn Life for ".$head."\r\n";
						
			$header = "MIME-Version: 1.0\r\n";
			$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
			$mail_sent = @mail( $to, $subject, $message, $header);
			//$msg = $mail_sent ? "Mail Send to Your Email Id" : " Mail failed";		
			//return $msg;
			
		}
		
		function  send_verification_mail($emailTo, $name, $verificationLink, $emailFrom="")
		{
			$to=$emailTo;
			$subject = 'Saturn Life account verification email';
			$message = "<html><body>"; 
			$message.="Hi ".$name.","."<br></br>";
			$message.="Your account with Saturn Life has been sucessfully created. Please click on the link below to verify your email address: <br><br>";
			$message.="<a href='".$verificationLink."'>".$verificationLink."</a><br>";
			$message.="<br/><p>Once your email has been verified you will be automaticallly logged-in. Simply follow the steps to complete your account setup.</p>";
			$message.="<p>Regards</p>";
			$message.="<p>The Saturn Life team</p>";
			$message.="<br/>";
			$message.="</body></html>";
			
			$head = "Saturn Life<".$emailFrom.">";
			$header = 'From: Saturn Life <'.$emailFrom . "> \r\n";
			$header .= "MIME-Version: 1.0\r\n";
			$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			
			/*$header = 'From: Saturn Life <'.$emailFrom . "> \r\n" .
    'Reply-To: Saturn Life <'.$emailFrom . "> \r\n" .
    'X-Mailer: PHP/' . phpversion();*/
		
			$mail_sent = @mail( $to, $subject, $message, $header);
			
		}
		

		}
			$obj = new connectionPool();
?>