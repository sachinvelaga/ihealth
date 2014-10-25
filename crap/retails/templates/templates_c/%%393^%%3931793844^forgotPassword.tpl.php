<?php /* Smarty version 2.6.0, created on 2014-01-09 00:46:05
         compiled from forgotPassword.tpl */ ?>
<script src="js/validation/jquery.js"></script>


<link rel="stylesheet" href="js/sorting/themes/blue/style.css" type="text/css" media="print, projection, screen" />
<script type="text/javascript" src="js/sorting/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/jlist.js"></script>
<?php echo '<!--<script type="text/javascript" src="js/jlist.js"></script>-->
<link rel="stylesheet" href="js/confirm/jquery-ui.css" type="text/css">




<script src="js/confirm/avg_ls_dom.js" type="text/javascript"></script>
<script src="js/confirm/jquery-ui.js"></script>
<script src="js/confirm/jquery_002.js"></script>

<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<!-- <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet">-->
<link href="css/StyleSheet.css" type="text/css" rel="stylesheet">

          
          <script src="js/bootstrap.js"></script>
<script src="js/jquery.popupoverlay.js"></script>	   

 <style>
  /* Add these styles once per website */
  .popup_background {
    z-index: 2000; /* any number */
  }
  .popup_wrapper {
    z-index: 2001; /* any number + 1 */
  }
  /* Add inline-block support for IE7 */
  .popup_align,
  .popup_content {
    display: inline;
    zoom: 1;
  }
  </style>
              
   <script>
			 
	
    $(function() {
      $(\'#my_modalupgrade\').popup();
	    
    });
$(document).on(\'click\',\'#btnForgotPwd\',function(e){
 $(\'.log_err\').html(\'\');
   var email = $(\'#email\').val();
	var company = $(\'#company\').val();
	var display = $(\'.companytest\').css(\'display\');
	if(display == \'block\'){
	if(company.length == 0){
	    $(\'.log_err\').html(\'Please Enter the Company Name!!!\').show();
          return false;
       }
	}
       if(email.length == 0){
	    $(\'.log_err\').html(\'Please Enter the Email!!!\').show();
          return false;
       }else if (!/^[a-z0-9!#$%&\'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&\'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(email)){
          $(\'.log_err\').html(\'Invalid Email\').show();  
          return false;
       }else if(email.length > 0 && company.length >0){
	    e.preventDefault();
	   $.ajax({
                  url:"companycheck.php",
                  type:"POST",
                  data:{email:email,company:company},
				         success:function(resp){
						 var trim_resp = $.trim(resp);
                            
									$(\'.pop_div\').html(trim_resp);
          
										$(\'#mssg_pop\').reveal();
       
					 
                               
                        } 
                   
                  });
	   }else{
	    e.preventDefault();
	   $.ajax({
                  url:"logcheck.php",
                  type:"POST",
                  data:{email:email},
				         success:function(resp){
						 var trim_resp = $.trim(resp);
                              if(trim_resp == \'another\'){
							  
							  $(\'.companytest\').show();
							  return false;
							  }else{
									$(\'.pop_div\').html(resp);
          
										$(\'#mssg_pop\').reveal();
       
					 
                               }
                        } 
                   
                  });
	   }

}); 
  </script>

 <script>
            function upgrade() 
            {
                
                    $(\'#my_modalupgrade\').popup();
                      var urlupgrade ="plans.php";
                         
                          
             var upgradeurll = document.getElementById("upgradeurl"); 
                // if(delurl)
                    // {
                         //alert(delurl);
            upgradeurll.href = urlupgrade;
//}
     
                          
                          
             }

 $(function() {
      
	$(":file").change(function(){
	var filename = $(":file").val().replace(/.*(\\/|\\\\)/, \'\');
	$(this).siblings(\'.file_name01\').children(\'.file_name01_mssg\').html(filename);
 });
    });			   
		 
			  
            </script>


'; ?>


<link href="css/main.css" type="text/css" rel="stylesheet">

<div class="main" style="background:#fff !important;">
	<div class="main2">
    	<div class="password1" style="height:432px !important;">
      <h2>Password Reset</h2>
      <div id="BtnSpace">
        <div id="Btn_LeftSpace"></div>
        <div class="Btn"></div>
        <div id="Btn_RightSpace"></div>
      </div>
      <div align="center" class="error_msg"><?php if ($this->_tpl_vars['err_msg']): ?>
        (
        <?php echo $this->_tpl_vars['err_msg']; ?>

        )
        <?php endif; ?> </div>
      <br/>
      <div class="header_home" style="text-align:left;">Forgot Password</div>
      <div id="BtnSpace">
        <div id="Btn_LeftSpace"></div>
        <div class="Btn"></div>
        <div id="Btn_RightSpace"></div>
      </div>
      <div id="BtnSpace1">
      <div id="Btn_LeftSpace1"></div>
	   <div class="log_err" style="display:none;clear:both;text-align:left;font-size: 12px;color: #168ECE"></div>
 
      <form name="frmAdd" id="frmAdd" method="post">
        <div id="Btn_MiddalSpace1" style="margin-top:10px;">
          <div id="Btn_MiddalSpace_innar1">
            <div class="Serch_fir_left"></div>
			  <div id="forget" class="Serch_fir_middal companytest" style="display:none;" >
				  <input name="company" id="company" type="text" class="validate[required] input_login" placeholder="Company Name" onFocus="this.value=''" style="width:283px !important;" required/>
               </div>
            <div id="forget" class="Serch_fir_middal">
				   <input name="email" id="email" type="text" class="validate[required] input_login" placeholder="Enter your Email" onFocus="this.value=''"  />
            </div>
            <div class="Serch_fir_right"></div>
          </div>
        </div>
        </div>
        <div class="pass_btn_blog">
          <input type="submit" value="Submit" class="button_text" name="btnForgotPwd" id="btnForgotPwd" title="Forgot Password" style="width: 100px !important; height:30px !important; margin: 0 !important;"/>
        </div>
      </form>
      <br/>
    </div>
    </div>
	   <div class="reveal-modal" id="mssg_pop" >
                               <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
                                <div class="pop_div">
								<p class="over_det_text"></p>
								</div>
								<button type="button" class="close-reveal-modal popy" >OK</button>
                            </div> 
</div>