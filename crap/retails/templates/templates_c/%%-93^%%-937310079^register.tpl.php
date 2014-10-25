<?php /* Smarty version 2.6.0, created on 2014-04-29 20:57:57
         compiled from register.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
<?php echo '
 <style>
            /* css for this page */
            body { font: 14px/24px \'Helvetica Neue\', Arial, sans-serif; color: #333; width: 960px; margin: 30px 20px;background: #fff; margin-left:30px !important;}
            body > h2 { margin: 30px 0 15px; text-shadow: 1px 1px 0 white; border-bottom: 2px solid #333; padding-bottom: 5px }
            h1 { text-align: center; margin-bottom: 30px; text-shadow: 1px 1px 0 white }
            strong + p { margin-top: 0 }
            dt { font-weight: bold }
            dd { margin: 0 }
            figure { display: block; width: 100%; height: 100%; margin: 0 }
            .accordion.stitch .slide div { background: #333 }
            .social-buttons { width: 100%; text-align: center; margin-top: 30px }
            .social-buttons ul { display: inline-block; margin: 0 }
            .social-buttons li { float: left; list-style-type: none }
            .call_out {
                color: #444444;
                background: url(\'img-demo/callout_bg.gif\') repeat;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                -webkit-box-shadow: 1px 0 3px rgba(0, 0, 0, 0.08);
                -moz-box-shadow: 1px 0 3px rgba(0, 0, 0, 0.08);
                box-shadow: 1px 0 3px rgba(0, 0, 0, 0.08);
                margin-top: 20px;
            }

            .call_out .wrap {
                padding: 19px 20px 17px 20px;
                border: 1px solid #d7d4cb;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
            }

            .call_out h2 {
                font-family: Georgia, "Times New Roman", Times, serif;
                font-style: italic;
                text-shadow: 0 1px 0 rgba(255, 255, 255, 1);
                color: #444444;
                font-size: 18px;
                line-height: 20px;
                margin: 10px 0;
            }

            .call_out a.alt_btn {
                background: url(\'img-demo/sprite.png\') 24px 356px;
                display: block;
                padding: 0 0 0 23px;
                float: right;
                margin: -45px 0 0 0;
                font-family: Georgia, "Times New Roman", Times, serif;
                font-style: italic;
                font-size: 14px;
                color: #252525;
                text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.8);
                text-align: center;
                border: none;
                -webkit-box-shadow: 0;
                -moz-box-shadow: 0;
                box-shadow: 0;
                text-decoration: none;
                font-weight: bold;
            }

            .call_out a.alt_btn span {
                padding: 14px 23px 15px 0;
                background: url(\'img-demo/sprite.png\') 100% 253px;
                display: block;
            }

            .call_out a:hover.alt_btn { background: url(\'img-demo/sprite.png\') 24px 408px }
            .call_out a:hover.alt_btn span { background: url(\'img-demo/sprite.png\') 100% 304px }
			#first-sec { box-shadow: -1px 1px 4px #909090 inset, 1px 1px 8px #909090 inset; background-image: url(\'images/job.jpg\');background-size:1073px 1020px; background-repeat:no-repeat;padding-top:10px; border-radius: 6px;-moz-border-radius: 4px;-webkit-border-radius: 4px;margin-left:60px;margin-top:1px;filter: blur(5px);-ms-filter: blur(5px);-o-filter: blur(15px);-moz-filter: blur(15px);z-index: 1;position:absolute;}
			#second-sec { box-shadow: -1px 1px 4px #909090 inset, 1px 1px 8px #909090 inset; background-image: url(\'images/doctors.jpg\');background-size:1073px 1020px; background-repeat:no-repeat;padding-top:10px; border-radius: 6px;-moz-border-radius: 4px;-webkit-border-radius: 4px;margin-left:60px;margin-top:1px;filter: blur(5px);-ms-filter: blur(5px);-o-filter: blur(15px);-moz-filter: blur(15px);z-index: 1;position:absolute;}
			#third-sec { box-shadow: -1px 1px 4px #909090 inset, 1px 1px 8px #909090 inset; background-image: url(\'images/marriage.jpg\');background-size:1073px 1020px; background-repeat:no-repeat;padding-top:10px; border-radius: 6px;-moz-border-radius: 4px;-webkit-border-radius: 4px;margin-left:60px;margin-top:1px;filter: blur(5px);-ms-filter: blur(5px);-o-filter: blur(15px);-moz-filter: blur(15px);z-index: 1;position:absolute;}
			
        </style>
        <title>Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		 <link rel="stylesheet" type="text/css" href="css/liteaccordion.css"/>
<link href="css/StyleSheet.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/foggy.min.js"></script>
     <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		      <script type="text/javascript" src="js/liteaccordion.jquery.js"></script>
<script type="text/javascript">
$(document).on(\'click\',\'#jsubmit_register\',function(e){
   var fname = $.trim($(\'#jfname\').val());
   var sname = $.trim($(\'#jsname\').val());
   var fathername = $.trim($(\'#jfathername\').val());
   var email = $.trim($(\'#jemail\').val());
   var pass = $.trim($(\'#jpass\').val());
   var org = $.trim($(\'#jorg\').val());
   var degree = $.trim($(\'#jdegree\').val());
   var dob = $.trim($(\'#jdob\').val());
   var exp = $.trim($(\'#jexp\').val());
   var address = $.trim($(\'#jaddress\').val());
   var address1 = $.trim($(\'#jaddress1\').val());
   var phone = $.trim($(\'#jphone\').val());
   var city = $.trim($(\'#jcity\').val());
   var gender = $.trim($(\'#jgender\').val());
   var state = $.trim($(\'#jstate\').val());
   var country = $.trim($(\'#jcountry\').val());
   var zipcode = $.trim($(\'#jzipcode\').val());
   
         if(email.length == 0||!/^[a-z0-9!#$%&\'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&\'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(email)){
          $(\'.jadd_user_err\').html(\'Invalid Email!!!!\').show(); 
          return false;
       }else if(!/^\\d{10,20}$/.test(phone)){
           $(\'.jadd_user_err\').html(\'Mobile Number Should Be 10 and Above Digits\').show();
			alert(\'Mobile Number Should Be 10 and Above Digits\');
          return false;
       }else if(!/^\\d+$/.test(exp)){
           $(\'.jadd_user_err\').html(\'Experience Should Be Digits\').show(); 
			alert(\'Experience Should Be Digits\');
          return false;
       }else{
	      e.preventDefault();
	             $.ajax({
                  url:"jobuser.php",
                  type:"POST",
				  data:{fname:fname,sname:sname,fathername:fathername,email:email,phone:phone,pass:pass,gender:gender,org:org,degree:degree,dob:dob,exp:exp,address:address,address1:address1,city:city,state:state,country:country,zipcode:zipcode},
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                               if(trim_resp ==\'0\'){
							$(\'.jadd_user_err\').html(\'Email Already Exists!!!\').show();
							alert(\'Email Already Exists!!!\');
				      return false;
								}else if(trim_resp == \'1\'){
								 $(\'#third-reg\').hide();
                                   $(\'.registered\').show();
								  
								   
								   alert(\'Added successfully\');
                                       setTimeout(function() {
										 $(\'.jadd_user_err\').html(\'\');
					}, 1); 
                               }
                        }    
                  });
	   }     
}); 
$(document).on(\'click\',\'#general-h2\',function(){
$(\'#first-sec\').show();
$(\'#second-sec\').hide();
$(\'#third-sec\').hide();
}); 
$(document).on(\'click\',\'#doctors-h2\',function(){
$(\'#first-sec\').hide();
$(\'#second-sec\').show();
$(\'#third-sec\').hide();
}); 
$(document).on(\'click\',\'#retail-h2\',function(){
$(\'#first-sec\').hide();
$(\'#second-sec\').hide();
$(\'#third-sec\').show();
}); 
 </script>

'; ?>

    </head>
    <body>    
	 <div class="container-ibc"> 
    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header" style="width:30%;float:left;">
        <div class="logo-ibc"> </div>
      </div>
      <div id="main-menu" class="navbar-collapse collapse">
     
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--header area -->
    <div class="navigation hide-below-767">
      <div id="signin-block" style="width:100%;float:left;">
   
           <ul style="margin-top:-10px;">
  <li style="float:left;margin-right:20px;"><a href="index.php" style="color:#26CA00 !important;">Home</a></li>       
        
	<?php if ($this->_tpl_vars['ses_id']): ?>
    
    <li style="float:right;"><a href="logout.php" style="color:#26CA00 !important;">Log Out</a></li>
	<li style="float:right;"><a href="#" style="color:#26CA00 !important;"><?php echo $this->_tpl_vars['user']; ?>
</a></li>
    
	<?php else: ?>
	   
    <li style="float:right;"><a style="color:#26CA00 !important;margin-right:28px" href="login.php">Log In</a></li>
    <li style="float:right;"><a style="color:#26CA00 !important;margin-right:14px" href="register.php">Sign Up</a></li>
	
   </div>
<?php endif; ?>
        </ul>
           
         
      </div>
    </div>
	  <div id="one" align="center">
            <ol>
                <li>
                    <h2 style="width:392px !important;" id="general-h2"><span>General</span></h2>							
<div id="first-sec" style="height:1010px !important">
					<div style="overflow:auto;width:1024px;height:1020px;">
					<div class="registered" style="display:none;margin-top:200px;clear:both;text-align:center;font-size: 12px;color: #168ECE">Registration Successful....! </br>Click <a href="index.php">here</a> to go to home page for login.</div>
     
					  <div id="first-reg">
	<div class="content column-full container">
      <div class="page-header">
        <h1>Registration</h1>
      </div>
	  <div class="jadd_user_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
        
      <form class="form-horizontal" role="form" name="createprofile" method="POST" action="" style="margin: 20px 0 0 0;">
		<div class="form-group" style="margin-top:20px;">
          <label for="inputEmail3" class="col-sm-3 control-label">First Name*</label>
          <div class="col-sm-4">
            <input type="text" id="jfname" class="form-control" name="fname" value"" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Second Name*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jsname" name="surname" value""  required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Father's Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jfathername" name="fathername" value="">
          </div>
        </div>
		
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Email*</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" id="jemail" name="email" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Password*</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" id="jpass" name="password" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Mobile Phone*</label>
          <div class="col-sm-4">
            <input type="number"  class="form-control" id="jphone" name="phone" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Gender*</label>
          <div class="col-sm-4">
            <select name="gender" id="jgender" class="form-control-countries" required>
								<option value="0">Select</option>
								<option value="1">Male</option>
								<option value="2">Female</option>
            </select>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Date of Birth(dd-mm-yyyy)*</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" id="jdob" name="dob" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Qualification*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jdegree" name="degree" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Organization*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jorg" name="organization" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Experience(in months)*</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" id="jexp" name="experience" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line1 *</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jaddress" name="address" value="" required>
          </div>
        </div>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line2 </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jaddress1" name="address1" value="">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">City*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jcity" name="city" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">State/County*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jstate" name="state" value="" required>
          </div>
        </div>
		   <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Country*</label>
          <div class="col-sm-4">
            <select name="jcountry" id="jcountry" class="form-control-countries" required>
            	<?php if (count($_from = (array)$this->_tpl_vars['data_country'])):
    foreach ($_from as $this->_tpl_vars['country_all']):
?>
								<option value="<?php echo $this->_tpl_vars['country_all']['countryId']; ?>
" <?php if ($this->_tpl_vars['country_all']['countryId'] == 99): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['country_all']['printable_name']; ?>
</option>
			<?php endforeach; unset($_from); endif; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Zipcode/Postalcode*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jzipcode" name="zipcode" value="" required>
          </div>
        </div>
     
      <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label" style="color:#fff;">.</label>
          <div class="col-sm-4">
            <input type="submit" id="jsubmit_register" class="form-control-submit" style="background-color:#168ECE !important;text-align:center !important; color:#fff !important;" id="inputPassword3" name="btn_signup" value="Sign up and Continue" required>
          </div>
        </div>
      </form>
    </div>

		</div>
		</div>
		<figcaption class="ap-caption">Job Portal</figcaption>
                    </div>
                </li>
                <li>
<h2 id="doctors-h2"><span>Doctor's</span></h2>
<div id="second-sec" style="height:1010px !important;display:none;">
					<div style="overflow:auto;width:1024px;height:1020px;">
					  <div>
				<div class="content column-full container">
      <div class="page-header">
        <h1>Doctor's Registration</h1>
      </div>
      <form class="form-horizontal" role="form" name="createprofile" method="POST" action="" style="margin: 20px 0 0 0;">
		<div class="form-group" style="margin-top:20px;">
          <label for="inputEmail3" class="col-sm-3 control-label">First Name*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="fname" value"" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Second Name*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="surname" value""  required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Father's Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="fathername" value="" required>
          </div>
        </div>
		
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Email*</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" id="inputEmail3" name="email" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Password*</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" id="inputPassword3" name="password" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Mobile Phone*</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" id="inputPassword3" name="phone" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Gender*</label>
          <div class="col-sm-4">
            <select name="gender" class="form-control-countries" required>
								<option value="0">Select</option>
								<option value="1">Male</option>
								<option value="2">Female</option>
            </select>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Date of Birth(dd-mm-yyyy)*</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" id="inputPassword3" name="dob" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Qualification*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="degree" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Organization*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="organization" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Experience*</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" id="inputPassword3" name="experience" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line1 *</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="address" value="" required>
          </div>
        </div>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line2 </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="address1" value="">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">City*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="city" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">State/County*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="state" value="" required>
          </div>
        </div>
		   <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Country*</label>
          <div class="col-sm-4">
            <select name="country" class="form-control-countries" required>
            	<?php if (count($_from = (array)$this->_tpl_vars['data_country'])):
    foreach ($_from as $this->_tpl_vars['country_all']):
?>
								<option value="<?php echo $this->_tpl_vars['country_all']['countryId']; ?>
" <?php if ($this->_tpl_vars['country_all']['countryId'] == 99): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['country_all']['printable_name']; ?>
</option>
			<?php endforeach; unset($_from); endif; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Zipcode/Postalcode*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="zipcode" value="" required>
          </div>
        </div>
     
      <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label" style="color:#fff;">.</label>
          <div class="col-sm-4">
            <input type="submit" class="form-control-submit" style="background-color:#168ECE !important;text-align:center !important; color:#fff !important;" id="inputPassword3" name="btn_signup" value="Sign up and Continue" required>
          </div>
        </div>
      </form>
    </div>

		</div>
		</div>
		<figcaption class="ap-caption">Matrimony</figcaption>
                    </div>
                </li>
                <li>
                    <h2 id="retail-h2"><span>Retail</span></h2>
<div id="third-sec" style="height:1010px !important;display:none;">
					<div style="overflow:auto;width:1024px;height:1020px;">
					  <div>
					<div class="content column-full container">
      <div class="page-header">
        <h1>Retail's Registration</h1>
      </div>
     <form class="form-horizontal" role="form" name="createprofile" method="POST" action="" style="margin: 20px 0 0 0;">
		<div class="form-group" style="margin-top:20px;">
          <label for="inputEmail3" class="col-sm-3 control-label">First Name*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="fname" value"" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Second Name*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="surname" value""  required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Father's Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="fathername" value="" required>
          </div>
        </div>
		
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Email*</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" id="inputEmail3" name="email" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Password*</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" id="inputPassword3" name="password" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Mobile Phone*</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" id="inputPassword3" name="phone" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Gender*</label>
          <div class="col-sm-4">
            <select name="gender" class="form-control-countries" required>
								<option value="0">Select</option>
								<option value="1">Male</option>
								<option value="2">Female</option>
            </select>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Date of Birth(dd-mm-yyyy)*</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" id="inputPassword3" name="dob" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Qualification*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="degree" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Organization*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="organization" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Experience*</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" id="inputPassword3" name="experience" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line1 *</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="address" value="" required>
          </div>
        </div>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line2 </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="address1" value="">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">City*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="city" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">State/County*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="state" value="" required>
          </div>
        </div>
		   <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Country*</label>
          <div class="col-sm-4">
            <select name="country" class="form-control-countries" required>
            	<?php if (count($_from = (array)$this->_tpl_vars['data_country'])):
    foreach ($_from as $this->_tpl_vars['country_all']):
?>
								<option value="<?php echo $this->_tpl_vars['country_all']['countryId']; ?>
" <?php if ($this->_tpl_vars['country_all']['countryId'] == 99): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['country_all']['printable_name']; ?>
</option>
			<?php endforeach; unset($_from); endif; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Zipcode/Postalcode*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="zipcode" value="" required>
          </div>
        </div>
     
      <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label" style="color:#fff;">.</label>
          <div class="col-sm-4">
            <input type="submit" class="form-control-submit" style="background-color:#168ECE !important;text-align:center !important; color:#fff !important;" id="inputPassword3" name="btn_signup" value="Sign up and Continue" required>
          </div>
        </div>
      </form>
    </div>

		</div>
		</div>
		<figcaption class="ap-caption">Retail</figcaption>
                    </div>
                </li>
                <li>
                   </div>

		<?php echo '

		 <script>
                 $(\'#one\').liteAccordion({ theme : \'light\', rounded : true, enumerateSlides : true, firstSlide : 1, linkable : true, easing: \'easeInOutQuart\' });
                $(\'.first\').foggy({
   blurRadius: 2,          // In pixels.
   opacity: 0.8,           // Falls back to a filter for IE.
   cssFilterSupport: true  // Use "-webkit-filter" where available.
 }); 
            </script>
		'; ?>

    </body>
</html>




