a:4:{s:8:"template";a:1:{s:9:"login.tpl";b:1;}s:9:"timestamp";i:1399529444;s:7:"expires";i:1399529444;s:13:"cache_serials";a:0:{}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

 <style>
            /* css for this page */
            body { font: 14px/24px 'Helvetica Neue', Arial, sans-serif; color: #333; width: 960px; margin: 30px 20px;background: #fff; margin-left:30px !important;}
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
                background: url('img-demo/callout_bg.gif') repeat;
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
                background: url('img-demo/sprite.png') 24px 356px;
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
                background: url('img-demo/sprite.png') 100% 253px;
                display: block;
            }

            .call_out a:hover.alt_btn { background: url('img-demo/sprite.png') 24px 408px }
            .call_out a:hover.alt_btn span { background: url('img-demo/sprite.png') 100% 304px }
			#first-sec {box-shadow: -1px 1px 4px #909090 inset, 1px 1px 8px #909090 inset; height:408px !important;background-image: url('images/job.jpg');background-size:1020px 420px; background-repeat:no-repeat;padding-top:10px; border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;margin-left:48px;margin-top:1px;filter: blur(5px);-ms-filter: blur(5px);-o-filter: blur(15px);-moz-filter: blur(15px);z-index: 1;position:absolute;}
			#second-sec { box-shadow: -1px 1px 4px #909090 inset, 1px 1px 8px #909090 inset; height:408px !important;background-image: url('images/doctors.jpg');background-size:1020px 420px; background-repeat:no-repeat;padding-top:10px; border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;margin-left:48px;margin-top:1px;filter: blur(5px);-ms-filter: blur(5px);-o-filter: blur(15px);-moz-filter: blur(15px);z-index: 1;position:absolute;}
			#third-sec {box-shadow: -1px 1px 4px #909090 inset, 1px 1px 8px #909090 inset; height:408px !important;background-image: url('images/marriage.jpg');background-size:1020px 420px; background-repeat:no-repeat;padding-top:10px; border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;margin-left:48px;margin-top:1px;filter: blur(5px);-ms-filter: blur(5px);-o-filter: blur(15px);-moz-filter: blur(15px);z-index: 1;position:absolute;}
		
        </style>
        <title>Login Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		 <link rel="stylesheet" type="text/css" href="css/liteaccordion.css"/>
		 <link rel="stylesheet" href="css/bootstrap.min.css">  <link rel="stylesheet" href="css/main-log.css">

  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>


   
    <title>Login</title>
<link href="css/StyleSheet.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/foggy.min.js"></script>
     <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		      <script type="text/javascript" src="js/liteaccordionlog.jquery.js"></script>
<script type="text/javascript">
	$(document).on('click','#jsubmit',function(e){
   var email = $.trim($('#jemail').val());
   var pass = $.trim($('#jpass').val());
   
         if(email.length == 0||!/^[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(email)){
          $('.jadd_user_err').html('Invalid Email!!!!').show(); 
         alert('Invalid Email');
		 return false;
       }else if(pass.length == 0){
           $('.jadd_user_err').html('Please Enter the password!!').show();
			alert('Please Enter the password!!');
          return false;
       }else{
	      e.preventDefault();
	             $.ajax({
                  url:"joblogin.php",
                  type:"POST",
				  data:{email:email,pass:pass},
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                               if(trim_resp =='0'){
							$('.jadd_user_err').html('Wrong Credentials!!!').show();
							alert('Wrong Credentials!!!');
				      return false;
								}else if(trim_resp == '1'){
							  location.href = "index.php";
                                       setTimeout(function() {
										 $('.jadd_user_err').html('');
					}, 1); 
                               }
                        }    
                  });
	   }     
}); 
$(document).on('click','#general-h2',function(){
$('#first-sec').show();
$('#second-sec').hide();
$('#third-sec').hide();
}); 
$(document).on('click','#doctors-h2',function(){
$('#first-sec').hide();
$('#second-sec').show();
$('#third-sec').hide();
}); 
$(document).on('click','#retail-h2',function(){
$('#first-sec').hide();
$('#second-sec').hide();
$('#third-sec').show();
}); 
 </script>


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
   
 <li style="float:left;margin-right:20px;"><a href="index.php" style="color:#168ECE !important;">Home</a></li>       
		   
    <li style="float:right;"><a style="color:#168ECE !important;margin-right:28px" href="login.php">Log In</a></li>
    <li style="float:right;"><a style="color:#168ECE !important;margin-right:14px" href="register.php">Sign Up</a></li>
	
   </div>
        </ul>
           
         
      </div>
    </div>
	  <div id="one" align="center" style="margin-top:10px!important;">
            <ol>
			
			 <li>
                    <h2 id="general-h2"><span>General</span></h2>
					
<div id="first-sec" style="margin-left:60px;">
	<div style="overflow:auto;width:1024px;height:500px;">
					<div class="registered" style="display:none;margin-top:200px;clear:both;text-align:center;font-size: 12px;color: #168ECE">Registration Successful....! </br>Click <a href="index.php">here</a> to go to home page for login.</div>
     
					  <div id="third-reg">
	<div class="content column-full container">
      <div class="page-header">
        <h1>Job Portal Login</h1>
      </div>
	  <div class="jadd_user_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
        
      <form action="#" method="post">
  <div class="container" style="margin-top;20px;">

    <div class="row">
      <div class="span4 offset4 well">

        <legend>Please Sign In</legend>

        <input type="text" id="jemail" class="span4" name="jemail" placeholder="Email Address">
        <input type="password" id="jpass" class="span4" name="jpass" placeholder="Password">

        <!--<label class="checkbox">
          <input type="checkbox" name="remember" value="1"> Remember Me
        </label>-->

        <button type="submit" id="jsubmit" name="submit" class="btn btn-info btn-block">Sign in</button>
		    </form>
		
      </div>
    </div>
	  </div>
    </div>

		</div>
		</div>
		<figcaption class="ap-caption">Job Portal</figcaption>
                    </div>
                </li>
                <li>
                    <h2 id="doctors-h2"><span>Doctor's</span></h2>
<div id="second-sec" style="margin-left:60px;display:none;">
					<div style="overflow:auto;width:1024px;height:500px;">
					  <div>
					<div class="content column-full container">
      <div class="page-header">
        <h1>Doctor's Login</h1>
      </div>
       <form action="login.php" method="post">
  <div class="container" style="margin-top;20px;">

    <div class="row">
      <div class="span4 offset4 well">

        <legend>Please Sign In</legend>

        <input type="text" id="email" class="span4" name="email" placeholder="Email Address">
        <input type="password" id="password" class="span4" name="password" placeholder="Password">

        <!--<label class="checkbox">
          <input type="checkbox" name="remember" value="1"> Remember Me
        </label>-->

        <button type="submit" name="submit" class="btn btn-info btn-block">Sign in</button>
		    </form>
		
      </div>
    </div>
	  </div>
    </div>

		</div>
		</div>
		<figcaption class="ap-caption">Doctor's</figcaption>
                    </div>
                </li>
				<li>
      <h2 id="retail-h2"><span>Retail</span></h2>
<div id="third-sec" style="margin-left:60px;display:none;">
					<div style="overflow:auto;width:1024px;height:500px;">
					  <div>
						<div class="content column-full container">
      <div class="page-header">
        <h1>Retail Login</h1>
      </div>
        <form action="login.php" method="post">
  <div class="container" style="margin-top;20px;">

    <div class="row">
      <div class="span4 offset4 well">

        <legend>Please Sign In</legend>

        <input type="text" id="email" class="span4" name="email" placeholder="Email Address">
        <input type="password" id="password" class="span4" name="password" placeholder="Password">

        <!--<label class="checkbox">
          <input type="checkbox" name="remember" value="1"> Remember Me
        </label>-->

        <button type="submit" name="submit" class="btn btn-info btn-block">Sign in</button>
		    </form>
			
      </div>
    </div>
	  </div>
    </div>

		</div>
		</div>
		<figcaption class="ap-caption">Retail</figcaption>
                    </div>
					
                </li>
            </ol>
            <noscript>
                <p>Please enable JavaScript to get the full experience.</p>
            </noscript>
        </div>

		

		 <script>
                 $('#one').liteAccordion({ theme : 'light', rounded : true, enumerateSlides : true, firstSlide : 1, linkable : true, easing: 'easeInOutQuart' });
                $('.first').foggy({
   blurRadius: 2,          // In pixels.
   opacity: 0.8,           // Falls back to a filter for IE.
   cssFilterSupport: true  // Use "-webkit-filter" where available.
 }); 
            </script>
		
    </body>
</html>



