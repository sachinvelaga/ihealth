a:4:{s:8:"template";a:4:{s:19:"common_template.tpl";b:1;s:10:"header.tpl";b:1;s:9:"login.tpl";b:1;s:10:"footer.tpl";b:1;}s:9:"timestamp";i:1389358108;s:7:"expires";i:1389358108;s:13:"cache_serials";a:0:{}}
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
				<title>ibusiness continuity</title>
				<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/stylenew.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="css/StyleSheet.css" type="text/css" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">

		<!--[if lt IE 9]>
		<script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
		<![endif]-->
	
                <script>
			document.createElement('article');
			document.createElement('section');
			document.createElement('aside');
			document.createElement('hgroup');
			document.createElement('nav');
			document.createElement('header');
			document.createElement('footer');
			document.createElement('figure');
			document.createElement('figcaption');
		</script>

		<link rel="stylesheet" href="rmm-css/responsivemobilemenu.css" type="text/css"/>
		<script type="text/javascript" src="rmm-js/jquery.min.js"></script>
		<script type="text/javascript" src="js/script1.js"></script>

		<script type="text/javascript" src="rmm-js/responsivemobilemenu.js"></script>

		<script type="text/javascript">

			function checkfreesignup(signupplan, planduration) {

				var signupplan = encodeURI(signupplan);

				var planduration = encodeURI(planduration);

				window.location.href = "signup.php?hid=" + signupplan + "&planduration=" + planduration;

			}

		</script>

		<!-- CSS FOR ALL VIEW PAGE -->

		<link rel="stylesheet" href="js/sorting/themes/blue/style.css" type="text/css" media="print, projection, screen" />
		<script src="js/jlist.js" type="text/javascript"></script>
<link href="js/reveal.css" type="text/css" rel="stylesheet">  
		<!-- COMMON JQUERY -->

<script src="js/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src="js/jquery.reveal.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.easyAccordion.js"></script>
		<script>
			$(document).ready(function() {
				$('#accordion-2').easyAccordion({
					autoStart : true
				});
			});                
		</script>

		<!-- VALIDATION -->

		<link rel="stylesheet" href="js/validation/validationEngine.css" type="text/css">
		<script src="js/validation/avg_ls_dom.js" type="text/javascript"></script>
		<script src="js/validation/jquery_002.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/validation/jquery.js" type="text/javascript" charset="utf-8"></script>
		<script>
			jQuery(document).ready(function() {

				// binds form submission and fields to the validation engine

				jQuery("#frmAdd").validationEngine();

			});

			// CUSTOM FUNCTION

			function checkHELLO(field, rules, i, options) {

				if (field.val() != "HELLO") {

					// this allows to use i18 for the error msgs

					return options.allrules.validate2fields.alertText;

				}

			}
$(document).on('click','#ping_scn_btn',function(e){
 // e.preventDefault();
     $('.ping_scn_err').html('');
      var dep_count = 0;var loc_count = 0;
          var action_name_ping = $('#action_name_ping').val(); 
		   var deptt = new Array();
		  var dept = $("#selectdeptping input:checkbox:checked").map(function(){
			return $(this).val();
			}).get();
		var sel_loc	= $('#selectlocationping').val(); 
		//alert(dept);
          $('div#selectdeptping input[type="checkbox"]:not(.checkall)').each(function() {
               if ($(this).is(':checked')) {
			   deptt.push($(this).val());
               dep_count++;
               }
            });
         if(sel_loc == 0){
                $('.ping_scn_err').html('Please Select Location').show();
               return false;
           }else  if(dep_count == 0){
                $('.ping_scn_err').html('Group not chosen').show();
               return false;
           }else if(action_name_ping.length == 0){
                $('.ping_scn_err').html('Action required').show();
                return false;
           }else{
		   $.ajax({
                  url:"pingAjax.php",
                  type:"POST",
				  data:{lid:sel_loc,action:action_name_ping,dept:deptt},
			
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                              if(trim_resp == 'added'){
                                   $('.ping_scn_err').html('Ping sent successfully').show();
									$('.menu_msg').html('Scenario Launched succesfully'); 								   
                                       setTimeout(function() {
									   var var_msg = 'Ping sent successfully';
										$('#ping_pop').trigger('reveal:close')
										 $('.ping_scn_err').html('');
									$('.pop_div').html('Ping sent successfully');
          
										$('#mssg_pop').reveal();
					}, 10); 
                               }else{
							   $('.ping_scn_err').html(trim_resp);
							   return false;
							   }
                               
                        }
						
                  });
		  
		   }      
});                
$(document).on('click','#submit_change',function(e){
 // e.preventDefault();
     $('.change_scn_err').html('');
          var curr_pass = $('#password_change').val();
			var prev_pass = $('#newpwd_change').val();
			var cprev_pass = $('#confirmpwd_change').val();			

         if(curr_pass.length == 0){
                $('.change_scn_err').html('Please fill the Current Password').show();
               return false;
           }else  if(prev_pass.length == 0){
                $('.change_scn_err').html('Please fill the New Password').show();
               return false;
           }else  if(cprev_pass.length == 0){
                $('.change_scn_err').html('Please fill the Confirm New Password').show();
               return false;
           }else  if(cprev_pass != prev_pass){
                $('.change_scn_err').html('New password and Confirm Password not matched !!').show();
               return false;
           }else{
		   e.preventDefault();
					$.ajax({
                  url:"changepass.php",
                  type:"POST",
                  data:{pass:curr_pass,newpass:prev_pass},
				         success:function(resp){
                              var trim_resp = $.trim(resp);
                    if(trim_resp == 'Changed'){								   
                                       setTimeout(function() {
									   $('#change_pop').trigger('reveal:close')
										
									$('.pop_div').html('Password Changed successfully');
          
										$('#mssg_pop').reveal();
       
					}, 10); 
                               }else{
							     $('.change_scn_err').html(trim_resp).show();
							   }
                        } 
                   
                  })
		  
		   }      
});                
    
 function getLocationping()
       {
            var lid =  $('#selectlocationping :selected').val();
			//alert(lid);
	        $('#selectedcontactping').html('');
                    $('.key_contping').hide();
			var httpxml;
				try
				{
					httpxml=new XMLHttpRequest();
				}
				catch (e)
				{
					// Internet Explorer
					try
					{
						httpxml=new ActiveXObject("Msxml2.XMLHTTP");
					}
					catch (e)

					{
					try
						{
							httpxml=new ActiveXObject("Microsoft.XMLHTTP");
						}
						catch (e)
						{
							alert("Your browser does not support AJAX!");
							return false;
						}

					}

				}

				function stateck() 

				{
					if(httpxml.readyState==4)
					{
						var response = httpxml.responseText;
						document.getElementById('filtercontactsping').style.display = "block";
						document.getElementById('selectdeptping').innerHTML = "";
                                                    
						document.getElementById('selectdeptping').innerHTML = response;
					}
				}
				
				var url="selectlocationping.php";
				url = url+"?lid="+lid;
				httpxml.onreadystatechange=stateck;
				httpxml.open("GET",url,true);
				httpxml.send(null);

	   }

function Location()
       {
            
			var httpxml;
				try
				{
					httpxml=new XMLHttpRequest();
				}
				catch (e)
				{
					// Internet Explorer
					try
					{
						httpxml=new ActiveXObject("Msxml2.XMLHTTP");
					}
					catch (e)

					{
					try
						{
							httpxml=new ActiveXObject("Microsoft.XMLHTTP");
						}
						catch (e)
						{
							alert("Your browser does not support AJAX!");
							return false;
						}

					}

				}

				function stateck() 

				{
					if(httpxml.readyState==4)
					{
						var response = httpxml.responseText;
						document.getElementById('filtercontactsping').style.display = "block";
						document.getElementById('pingloc').innerHTML = "";
                                                    
						document.getElementById('pingloc').innerHTML = response;
					}
				}
				
				var url="pinglocationlist.php";
				url = url;
				httpxml.onreadystatechange=stateck;
				httpxml.open("GET",url,true);
				httpxml.send(null);

	   }

		</script>

		<!-- VALIDATION -->

		<script type="text/javascript">

function checkemail(email)

{

var httpxml;

try

{

// Firefox, Opera 8.0+, Safari

httpxml=new XMLHttpRequest();

}

catch (e)

{

// Internet Explorer

try

{

httpxml=new ActiveXObject("Msxml2.XMLHTTP");

}

catch (e)

{

try

{

httpxml=new ActiveXObject("Microsoft.XMLHTTP");

}

catch (e)

{

alert("Your browser does not support AJAX!");

return false;

}

}

}

function stateck()

{

if(httpxml.readyState==4)

{

document.getElementById("msg").innerHTML=httpxml.responseText;

<!--document.getElementById("msg").value=httpxml.responseText;-->

}

}

var url="checkemail.php";

url=url+"?email="+email;

httpxml.onreadystatechange=stateck;

httpxml.open("GET",url,true);

httpxml.send(null);

}

   
          


		</script>       

            
<script>             
  function get_ping(){ 
					Location();
                     $("#ping_pop").reveal(); 
   var urlupdate ="ping.php";
                         
                          
             var actionurl = document.getElementById("frmAddping"); 
               
            actionurl.action = urlupdate;
          					 
                  } 
function getchange(){ 
                     $("#change_pop").reveal(); 
		 
                  } 
    function upgrade() 
            {
                
                    $('#my_modalupgradeh').reveal();
                      var urlupgrade ="plans.php";
                         
                          
             var upgradeurll = document.getElementById("upgradeurl"); 
                // if(delurl)
                    // {
                         //alert(delurl);
            upgradeurll.href = urlupgrade;
//}
     
                          
                          
             }             
            
        </script>

		
			</head>

	<body>
                                     <!-- Upgrade pop up....----->
<div id="my_modalupgradeh" class="reveal-modal">
<div class="edit_pop5">
  <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modalupgradeh_close close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> </div>
  <div class="over_delete">
    <p class="over_det_text">&nbsp;</p>
    <p class="over_text_det" style="text-align:center;font-weight:bold;font-family:18px;">Upgrade your plan to Activate </p>
    <p class="over_text_det" style="text-align:center;font-weight:bold;font-family:18px;">this function</p>
    <div class="ove_button" style="width:400px !important;">
    	<a href="plans.php" id="up_grade">Upgrade Your Plan</a>
    </div>
  </div>
</div>
</div>
                                     
<div id="ping_pop" class="reveal-modal">
<div class="edit_pop5">
  <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> </div>
  <div class="over_delete">
      <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 25px;
  padding: 0 0 20px 0;" class="over_hed">Ping Status</h2>
    </div>
       <div class="ping_scn_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
    <form name="frmAdd" id="frmAddping" method="post" enctype="multipart/form-data" class="form-horizontal" action="">
      <input type="hidden" name="action" value="">
      <input type="hidden" name="hid_viewPage" value="">
 
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Select Location</label>
        <div class="controls over_select edit_scenario_radio" id="locationlistt">
        <div id = "pingloc">
    </div>
        
        </div>
      </div>
      
      <!--         <div class="control-group over_size">
            <label for="select01" class="control-label">Associated Deparments</label>
            <div class="controls over_select">
<select name="department[]" id="selectdeptping" multiple="multiple" class="validate[required] over_select_siz" onclick="Getdepartments();" style="width:301px; height:90px !important; float:left;"  >
           
                    </select>
                      
                      <p>To select multiple departments hold CTRL or SHIFT key</p>
            </div>
          </div>  -->
      
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Associated Groups</label>
        <div class="controls over_select edit_scenario_radio"> 
          <!--<select name="department[]" id="selectdeptping" multiple="multiple" class="validate[required] over_select_siz" onclick="Getdepartments();" style="width:301px; height:90px !important; float:left;"  >
           
                    </select>-->
          
          <div id="selectdeptping" style="overflow:auto;height:80px;" class="check_boxes"  > </div>
        </div>
      </div>
      <div style="clear:both;height:1px;"></div>
      <div id="filtercontact" style="display:none;"> <br>
        <input type="text" name="filtercontacts" id="filtercontactsping" style="display:none;" value="">
        <a href="javascript:Getdepartments()"  style="background:#69B4DE; color: #000000; margin-left: 10px; padding: 4px 15px; display:none;">Search</a></div>
      <div class="control-group over_size edit_scenario" style="margin-top:40px;">
        <label for="select01" class="control-label">Action</label>
        <div class="controls over_select">
          <textarea name = 'action_name'id='action_name_ping'  class='validate[required] edit_scenario_name' cols="7" rows="10" style="height:100px !important; width:304px;" required ></textarea>
        </div>
      </div>
     
        <div class="control-group over_size edit_scenario" style="display:none;">
        <label for="select01" class="control-label">Key Contacts</label>
        <div class="controls over_select">
          <textarea name = 'key_con'id='key_conping'  class='validate[required] edit_scenario_name' cols="7" rows="10" style="height:100px !important; width:304px;" required ></textarea>
        </div>
      </div>
      
          <div class="control-group over_size edit_scenario key_cont" style="display:none;">
        <label for="select01" class="control-label" style="">Add Contacts</label>
        <div class="controls over_select edit_scenario_radio" style="height:auto !important">
        <div class="check_boxes" id="selectedcontactping">
            
     <!--    <div class="controls over_select" >
           
          <select name="selectedcontacts[]" id="selectedcontactping" multiple="multiple" class="validate[required] edit_scenario_name" style="width:301px; height:90px !important; float:left;" onchange="validateselectedit()" required>
            <option>Select Name:</option>
            
                                        
                                        
          
                      

                                             
          </select> --> 
        </div>
      </div>
                      </div>
<!--      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Status</label>
        <div class="controls over_select edit_scenario_radio"> 
          
        
         
          <select name="eStatus" class="select1_cmb" id="eoption" style="margin:0 0 0 -5px; width:257px;">-->
            
                      
        
                                      
                                      
<!--          </select>
        </div>
      </div>-->


      <div class="over_but" style="float:right; padding-right:80px; margin: 20px 0 0 0;">
                                    <div class="control-group bur_siz"> </div>
                                    <div class="ove_button">
          <input type="button" id="ping_scn_btn" name="ping"  class="overButton" value="Ping" style="margin:0px 10px 0px 20px;width:120px;">
          
        </div>
      </div>
    </form>
  </div>
</div>
</div>	
<div id="change_pop" class="reveal-modal">
<div class="edit_pop5">
  <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> </div>
  <div class="over_delete">
      <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 25px;
  padding: 0 0 20px 0;" class="over_hed">Change Password</h2>
    </div>
       <div class="change_scn_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
<form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data">
              <input type="hidden" name="action" value="">
              <input type="hidden" name="hid_viewPage" value="">
              <input type="hidden" name="id" value="">
              <div class="space">
                      <div class="changed_1">
                        <div class="space_ta_1">
                          <label>Current Password :</label>
                          <div class="current_password1 current_password02">
                            <input type="password" class="input_text" name="password_change" id="password_change" maxlength="45" size="45" >
                          </div>
                        </div>
                        <div class="space_ta_1">
                          <label>New Password :</label>
                          <div class="current_password1 current_password02">
                            <input type="password" class="input_text" name="newpwd_change" id="newpwd_change" size="45" />
                          </div>
                        </div>
                        <div class="space_ta_1">
                          <label>Confirm Password :</label>
                          <div class="current_password1 current_password02">
                            <input type="password" class="input_text" name="confirmpwd_change" id="confirmpwd_change" maxlength="45" size="45">
                          </div>
                        </div>
                      </div>
                     <div class="change_button change_button02">
                        <input type="submit" id="submit_change" name="passchange" class="button_text" value="Update" >
                      </div>
                    </div>
            </form>
  </div>
</div>
</div>	
  <div class="container-ibc"> 
    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <div class="logo-ibc"> <a href="index.php"><img class="img-responsive" src="img/iBC-Logo.png" alt="iBC"></a> </div>
      </div>
      <div id="main-menu" class="navbar-collapse collapse">
      	         <ul class="nav navbar-nav navbar-right">
		  <li class=""><a href="index.php">Home </a></li>
          <li class=""> <a href="about.php"> About us </a></li>
          <li class=""> <a href="feature.php"> Features </a></li>
          <li class=""> <a href="plans.php"> Pricing </a></li>
          <li class=""> <a href="contact.php"> Contact us </a></li>
          <li class=""> <a href="faq.php">FAQs </a></li>
		  <li class=""> <a href="createprofile.php">Register </a></li>
        </ul>
              </div>
      <!--/.nav-collapse -->
    </div>
    <!--header area -->
    <div class="navigation hide-below-767">
      <div id="signin-block">
      	               <ul>
           <li class="first">Call us +44 (0) 20 8584 1400</li>
          <li><a href="login.php">Login</a></li>
        </ul>
                    
      </div>
    </div>
    <!--header area end-->
    <!--body content -->
    
    <!--body content end-->
  </div>
  <!--footer content -->

  <!--footer content end-->

		<!--Header Start -->

		<!--Header End --> <!--Mid Area Start -->
<!--<div class="mid_wrapper_signup" >-->
     <div class="main-container">

     </div><div class="mid_wrapper" >
		 <!--  -->
	
		<script src="js/validation/jquery.js"></script>
<script type="text/javascript" src="js/jquery.reveal.js"></script>
<link href="js/reveal.css" type="text/css" rel="stylesheet">

<script type="text/javascript">
 $(document).on('click','#login_btn',function(e){
 $('.log_err').html('');
   var email = $('#email').val();
    var pass = $('#pass').val();
 
       if(email.length == 0){
	    $('.log_err').html('Please Enter the Email!!!').show();
          return false;
       }else if(pass.length == 0){
	    $('.log_err').html('Please Enter the Password!!!').show();
          return false;
       }else if (!/^[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(email)){
          $('.log_err').html('Invalid Email').show();  
          return false;
       }else{
	    e.preventDefault();
	   $.ajax({
                  url:"logincheck.php",
                  type:"POST",
                  data:{email:email,password:pass},
				         success:function(resp){
						 var trim_resp = $.trim(resp);
                              if(trim_resp == 'shift'){
							  location.href = "companyView.php";
							  }else{
									$('.pop_div').html(resp);
          
										$('#mssg_pop').reveal();
       
					 
                               }
                        } 
                   
                  });
	   }

}); 
</script>

<div align="center"  style="margin:0 auto; width: 960px; min-height:431px!important; margin:0 auto;">
<br/>

<br/>
<div class="log-in-details">
<h2>Log In</h2>
<div id="BtnSpace">
  <div id="Btn_LeftSpace"></div>
  <div class="Btn"></div>
  <div id="Btn_RightSpace"></div>
</div>
<div id="BtnSpace1">
  <div id="Btn_LeftSpace1"></div>
   <div class="log_err" style="display:none;clear:both;text-align:left;font-size: 12px;color: #168ECE"></div>
 
  <form id="frmAdd" method="post" >
<div class="header_home" style="text-align:left;">Login</div>
    <div id="Btn_MiddalSpace1" style="margin-top:10px; text-align:left;">
      <div id="Btn_MiddalSpace_innar1">
<div align="left" class="error_msg" style="padding-bottom:10px;width:344px !important;display:none;">
  </div>
        <div class="Serch_fir_left"></div>
        <div class="Serch_fir_middal">
           <input type="email" class = "input_login" name="email" id="email" placeholder="Enter Your Email" size="45" required/>       
	   </div>
        <div class="Serch_fir_right"></div>
      </div>
      <div id="Btn_MiddalSpace_innar2">
        <div class="Serch_Secod_left"></div>
        <div class="Serch_Secod_middal">
          <input name="password" type="password" align="middle" id="pass" class="textfill" value="Password" onFocus="this.value=''" required/>
        </div>
        <div class="Serch_Secod_right"></div>
      </div>
    </div>
    <div class="login_cnt">
      <input type="submit" name="login" class="button_text"  value="Login" id="login_btn" />
      <a href="forgotPassword.php" class="forgot_password" > Forgot Password? </a>
    </div>
    
  </form>
  <br/>
</div>
 </div>
</div>
</div>
   <div class="reveal-modal" id="mssg_pop" >
                               <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
                                <div class="pop_div">
								<p class="over_det_text"></p>
								</div>
								<button type="button" class="close-reveal-modal popy1" >OK</button>
                            </div> 
							  
<script type="text/javascript">
       
 $(window).load(function(){
            var mssg = $.trim($('.error_msg').html());
       $('.over_det_text').html(mssg);
           if(mssg.length > 0){
        $('#mssg_pop').reveal();
       } 
}) 
</script>
		<div id="second_box_main" align="center" >
			</div>
</div>
</div>

<!--Mid Area End -->
</div>

<footer>
    <div id="footer" class="footer column-full">
      <div class="container-ibc">
        <p> &copy; Transputec All rights reserved</p>
      </div>
    </div>
  </footer>


</body>
</html></div>
</div>
<!--end second box-->
</div>

</body>
</html>