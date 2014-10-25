a:4:{s:8:"template";a:2:{s:14:"medication.tpl";b:1;s:10:"header.tpl";b:1;}s:9:"timestamp";i:1400081372;s:7:"expires";i:1400081372;s:13:"cache_serials";a:0:{}}
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Health Care</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Direction-Aware Hover Effect with CSS3 and jQuery" />
        <meta name="keywords" content="hover, css3, jquery, effect, direction, aware, depending, thumbnails" />
        <meta name="author" content="Codrops" />
    </head>
    
    <body>
	
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
 <script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">	
		function imageupload(){
var ie=navigator.appName=="Microsoft Internet Explorer" ? true : false;
if(ie){
document.getElementById("<%=FileUpload1.ClientID %>").click();
document.getElementById("filename").value=document.getElementById("<%=FileUpload1.ClientID %>").value;
}else{
var a=document.createEvent("MouseEvents");
a.initEvent("click", true, true);
document.getElementById("<%=FileUpload1.ClientID %>").dispatchEvent(a);
}
</script>

<div class="header">
<div class="logo">
<img src="images/logo.png" alt="hareesh vadugula" class="image-logo">
</div>
<div class="header-container">
<div id="connections-menu">
            <ul id="connect-ul" style="float:right;"> 
              <!--<li class="active"><a data-toggle="tab" href="#tab_all">All</a></li>
              <li><a data-toggle="tab" href="#tab_connections">Connections</a></li>
              <li><a data-toggle="tab" href="#tab_tracker">Tracker</a></li>-->
              <li><div style="width:35px;height:35px;margin-top:16px;margin-right:2px;"><img src="profilepics/user.png"></div></li>
			  <li style="margin-top:15px;"><a href="#" data-original-title="">Hareesh Vadugula</a></li>
			  <li style="margin-top:15px;"><a href="logout.php" data-original-title="Log Out">Log Out</a></li>
            </ul>   
			<!-- customize utter -->
			
			<!-- end customize utter -->         
            <div class="clear"></div>
          </div>
		  </div>
		  </div>      
<div class="container">
	<div id="main-container" class="row">
		<div class="span3">
			<div class="user-avatar main-profile-pic filled"> <img src="profilepics/user.png"><a href="#" data-original-title="">Change</a> <asp:FileUpload ID="FileUpload1" runat="server" /></div>
				<div class="simple-info-box">
					<p><h4> DOB  : 1991-06-30</h4>    </p> 
				</div>
			</div>
<div class="span9">
	<div class="row">
		<div class="span9 utter-navbar">
			<div id="connections-menu">      
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
    <div class="span9 user-post-content-main">
	<div class="person-details1">   
	<p id="less_message_content694">
	<div class="person_details">
		<div class = "person_details-left"> Name	:	</div><div class = "person_details-right">Hareesh Vadugula</div>		
	</div>
	</p>
	<p id="less_message_content694">
	<div class="person_details">
		<div class = "person_details-left"> Father Name	:	</div><div class = "person_details-right">Muthyalaiah v</div>		
	</div>									
	</p>
	<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left">Mother Name :	</div><div class = "person_details-right">Lakshmamma v	</div>		
	</div>								
	</p> 
	<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left"> Gender : 		</div><div class = "person_details-right">Male</div>		
	</div>
	</p>						
	<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left">School 	: 		</div><div class = "person_details-right">JJVM</div>		
	</div>
	</p>
	<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left">Class 	: 		</div><div class = "person_details-right">12</div>		
	</div>
	</p>
	
						
	
								</div>
<div class="person-details2">	
<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left">Section 	: 		</div><div class = "person_details-right">B</div>		
	</div>
	</p>
	<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left">School ID 	: 		</div><div class = "person_details-right">1</div>		
	</div>
	</p>
	<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left">Principal : 	</div><div class = "person_details-right">Harinath</div>		
	</div>
	</p>
							<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left"> School Location : </div><div class = "person_details-right">Puttur</div>		
	</div>
							</p>
	<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left">Age : 	</div><div class = "person_details-right">22 years</div>		
	</div>
	</p>
	<p id="less_message_content694">
		<div class="person_details">
		<div class = "person_details-left">Blood Group : 	</div><div class = "person_details-right">B+</div>		
	</div>
	</p>
							
								</div>		
							  							
                  
                            </div>
							
														
                            
							
														
                          </div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
<div class="span3 main-content">
<div class="row">
<div class="span9 utter-navbar main-tool">
<div id="connections-menu">
             <ul id="connect-ul"> 
          	  <li><a href="index.php" data-original-title="">Health Report</a></li>
			  <li><a href="fitness.php" data-original-title="">Fitness Level</a></li>
			  <li><a href="doctors.php" data-original-title="">Doctor Consultation</a></li>
              <li><a href="nutritions.php" data-original-title="">Nutritionist Consultation</a></li>
              <li class="active"><a href="medication.php" data-original-title="">Medication/Vaccinations</a></li>
              <li><a href="retails.php" data-original-title="">Retail</a></li>
			  </ul>
						<!-- customize utter -->
			
			<!-- end customize utter -->         
            <div class="clear"></div>
			</div>
<div class="tab-content">
	<div id="tab-all" class="tab-pane active main-content-tab">
		<div id="all">
			<div class="live-stream">
				<div class="post-title">
	<div class="container_table_details">
		<div class="container_table1_spl">
			<div class="container_tablesub1_spl">
				<p> S.No </p>
			</div>
			<div class="container_tablesub2_spl">
			<div class="container_tablesub11_spl">
				<p class="para">Name</p>
			</div>
			<div class="container_tablesub12_spl">
				<p class="para"  style="margin-top:-2px;">Date</br><small>(last updated at)</small></p>
			</div>
			</div>
		</div>
		<div class="container_table2_spl">
			<div class="container_tablesub21">
			<p class="para"> View </p>
	
			</div>
			<div class="container_tablesub22">
			
			<p class="para"> Download</p>
			</div>
		</div>
	</div>
                    <div class="clear"></div>

				</div>
<div class="row-fluid">
<div class="detail_container">
	
<! ..........Details.......>
	<div class="container_table_details">
		<div class="container_table1_spl">
			<div class="container_tablesub1_spl">
				<p> 1 </p>
			</div>
			<div class="container_tablesub2_spl">
			<div class="container_tablesub11_spl">
				<p class="para">Name</p>
			</div>
			<div class="container_tablesub12_spl">
				<p class="para">Doctor1</p>
			</div>
			</div>
		</div>
		<div class="container_table2_spl">
			<div class="container_tablesub21">
			<p class="para"><a href="#"> View </a></p>
	
			</div>
			<div class="container_tablesub22">
			
			<p class="para"> <a href="#"> Download</a></p>
			</div>
		</div>
	</div>
	
	
	<div class="container_table_details">
	<div class="container_table1_spl">
			<div class="container_tablesub1_spl">
				<p> 2 </p>
			</div>
			<div class="container_tablesub2_spl">
			<div class="container_tablesub11_spl">
				<p class="para">Name</p>
			</div>
			<div class="container_tablesub12_spl">
				<p class="para">Doctor2</p>
			</div>
			</div>
		</div>
		<div class="container_table2_spl">
			<div class="container_tablesub21">
			<p class="para"><a href="#"> View </a></p>
	
			</div>
			<div class="container_tablesub22">
			
			<p class="para"> <a href="#"> Download</a></p>
			</div>
		</div>
	</div>
	
	
	<div class="container_table_details">
	<div class="container_table1_spl">
			<div class="container_tablesub1_spl">
				<p> 3 </p>
			</div>
			<div class="container_tablesub2_spl">
			<div class="container_tablesub11_spl">
				<p class="para">Name</p>
			</div>
			<div class="container_tablesub12_spl">
				<p class="para">Doctor3</p>
			</div>
			</div>
		</div>
		<div class="container_table2_spl">
			<div class="container_tablesub21">
			<p class="para"><a href="#"> View </a></p>
	
			</div>
			<div class="container_tablesub22">
			
			<p class="para"> <a href="#"> Download</a></p>
			</div>
		</div>
	</div>
	
	
	<div class="container_table_details">
	<div class="container_table1_spl">
			<div class="container_tablesub1_spl">
				<p> 4 </p>
			</div>
			<div class="container_tablesub2_spl">
			<div class="container_tablesub11_spl">
				<p class="para">Name</p>
			</div>
			<div class="container_tablesub12_spl">
				<p class="para">Doctor4</p>
			</div>
			</div>
		</div>
		<div class="container_table2_spl">
			<div class="container_tablesub21">
			<p class="para"><a href="#"> View </a></p>
	
			</div>
			<div class="container_tablesub22">
			
			<p class="para"> <a href="#"> Download</a></p>
			</div>
		</div>
	</div>
	
	
	
<!.......Details end......>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
    </body>
</html>