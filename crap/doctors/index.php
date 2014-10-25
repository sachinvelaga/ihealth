<?php
ob_end_clean();
ob_start();

session_start();
include("../includes/connectionPool.php");
include("../smarty.php");
if(!$_SESSION['ses_userid']){
header("location:../index.php");
}

$htm_details = '   
<div class="container">
<div class="header" style="width:94% !important;">
<div class="logo">
<a href="../index.php"><img src="../images/logo1 copy.png" alt="hareesh vadugula" class="image-logo"></a>
</div>
<div class="header-container">
<div id="connections-menu">
            <ul id="connect-ul" style="float:right;"> 
              <!--<li class="active"><a data-toggle="tab" href="#tab_all">All</a></li>
              <li><a data-toggle="tab" href="#tab_connections">Connections</a></li>
              <li><a data-toggle="tab" href="#tab_tracker">Tracker</a></li>-->
              <li><div style="width:35px;height:35px;margin-top:16px;margin-right:2px;"><img src="../profilepics/'.$_SESSION['ses_image'].'"></div></li>
			  <li style="margin-top:15px;"><a href="index.php" data-original-title="">'.$_SESSION['ses_user'].'</a></li>
			  <li style="margin-top:15px;"><a href="logout.php" data-original-title="Log Out">Log Out</a></li>
            </ul>   
			<!-- customize utter -->
			
			<!-- end customize utter -->         
            <div class="clear"></div>
          </div>
		  </div>
		 
</div>
	<div id="main-container" class="row">
		<div class="span3">
			<div class="user-avatar1 main-profile-pic filled"> <img src="../profilepics/'.$_SESSION['ses_image'].'"></div>
				<div class="simple-info-box">
					<p><h4> DOB  : '.$_SESSION['ses_persondob'].'</h4>    </p> 
				</div>
			</div>
<div class="span9">
	<div class="row">
		<div class="span9 utter-navbar" style="width:97% !important;">
			<div id="connections-menu"> 
				 <ul id="connect-ul"> 
          	  <li class="active"><a href="index.php" data-original-title="">My Profile</a></li>
			  <li><a href="report.php" data-original-title="">School Report</a></li>
            </ul> 
				<div class="clear"></div>
			</div>
<div class="tab-content">
<div id="tab-all" class="tab-pane active">
<div id="all">
<div class="live-stream">
<div class="post-title">
                    <h3>Details</h3>	
                    <div class="clear"></div>
</div>
<div class="row-fluid">
    <div class="user-post-content-main">
	<div class="person-details1">   
	<p id="less_message_content694">
	<div class="person_details">
		<div class = "person_details-left"> Name	:	</div><div class = "person_details-right">'.$_SESSION['ses_user'].'</div>		
	</div>
	</p>
	<p id="less_message_content694">
	<div class="person_details">
		<div class = "person_details-left"> Hospital Name	:	</div><div class = "person_details-right">'.$_SESSION['ses_hospital'].'</div>		
	</div>									
	</p>
	<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left">Age :	</div><div class = "person_details-right">'.$_SESSION['ses_age'].'	</div>		
	</div>								
	</p> 
	<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left"> Gender : 		</div><div class = "person_details-right">'.$_SESSION['ses_address'].'</div>		
	</div>
	</p>							
	
								</div>
<div class="person-details2">	

							
								</div>		
							  							
                  
                            </div>
							
														
                            
							
														
                          </div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>';

$htm_myaccount ='<div class="person-details1">   
	<p id="less_message_content694">
	<div class="person_details">
		<div class = "person_details-left"> Name	:	</div><div class = "person_details-right">'.$_SESSION['ses_user'].'</div>		
	</div>
	</p>
	<p id="less_message_content694">
	<div class="person_details">
		<div class = "person_details-left"> Hospital Name	:	</div><div class = "person_details-right">'.$_SESSION['ses_hospital'].'</div>		
	</div>									
	</p>
	<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left">Age :	</div><div class = "person_details-right">'.$_SESSION['ses_age'].'	</div>		
	</div>								
	</p> 
	<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left"> Gender : 		</div><div class = "person_details-right">'.$_SESSION['ses_address'].'</div>		
	</div>
	</p>							
	
								</div>';

$htm_user ='<div style="width:90%; text-align: center; color: #0088cc; margin-top: 20px;">'.$_SESSION['ses_user'].'</div> <div style="width:90%; margin-top:10px;">
			<img src="../profilepics/'.$_SESSION['ses_image'].'">
			
			</div>
          <div style="width:95%; height:auto;" class="menu_simple">
<ul>
<li><a href="index.php" class="serviceactive" id="acctab">My Account</a></li>
<li><a href="report.php" class="serviceactive" id="stdtab">School Report</a></li>
<li><a href="logout.php" class="serviceactive" id="logtab">Logout</a></li>
</ul>
</div> ';
$smarty->assign("user",$htm_user);
$smarty->assign("account",$htm_myaccount);
$_SESSION['user_profile'] = $htm_user;
$_SESSION['user_details'] = $htm_details;
$person = $_SESSION['user_details'];
$smarty->assign("persons",$person);
$ses_image = $_SESSION['ses_image'];
$smarty->assign("ses_image",$ses_image);
$ses_id = $_SESSION['ses_userid'];
$smarty->assign("ses_id",$ses_id);
$logged_user = $_SESSION['ses_user'];
$smarty->assign("logged_user",$logged_user);
$smarty->display('index.tpl');
?>