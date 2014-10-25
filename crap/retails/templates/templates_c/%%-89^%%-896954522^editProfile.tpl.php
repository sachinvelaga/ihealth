<?php /* Smarty version 2.6.0, created on 2014-01-17 10:16:29
         compiled from editProfile.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'editProfile.tpl', 237, false),)), $this); ?>
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
		 
	function imageupload(){
 var scenarioFile = new FormData($(\'#scenarioFileupload\')[0]);
		  $.ajax({
                  url:"profileimage.php",
                  type:"POST",
				  data:scenarioFile,
				  cache: false,
                contentType: false,
                processData: false,
				multiple: true,
                  success:function(resp){
				  
				  if(resp == \'NA\'){
				  $(\'#imageadd\').val(\'\');
				  }else{
				  $(\'#imageadd\').val(resp);
				   $(\'#prof_image\').attr("src","imageUpload/"+resp);
				  }
				  }
});
}
function pdfupload(){
 var scenariopdf = new FormData($(\'#scenariopdfupload\')[0]);
		  $.ajax({
                  url:"profilepdf.php",
                  type:"POST",
				  data:scenariopdf,
				  cache: false,
                contentType: false,
                processData: false,
				multiple: true,
                  success:function(resp){
				  if(resp == \'NA\'){
				  $(\'#pdfadd\').val(\'\');
				  }else{
				  $(\'#pdfadd\').val(resp);
				   $(\'#prof_plan\').attr("href","planUpload/"+resp);
				  }
				  }
});
} 
 $(document).on(\'click\',\'#submit\',function(e){
     $(\'.add_user_err\').html(\'\');
   var name = $.trim($(\'.contactpersonfirst\').val());
   var surname = $.trim($(\'.contactpersonlast\').val());
   var company = $.trim($(\'.companyname\').val());
   var logo = $.trim($(\'#imageadd\').val());
    var prevlogo = $.trim($(\'#image\').val());
    var website = $.trim($(\'.website\').val());
   var plan = $.trim($(\'#pdfadd\').val());
    var prevplan = $.trim($(\'#pdf\').val());
    var email = $.trim($(\'.email\').val());
	var prevemail = $.trim($(\'#prevemail\').val());
   var status = $.trim($(\'.estatus\').val());
   var add1 = $.trim($(\'.address\').val());
   var add2 = $.trim($(\'.address1\').val());
   var city = $.trim($(\'.city\').val());
   var zip = $.trim($(\'.zipcode\').val());
   var state = $.trim($(\'.state\').val());
   var person = name+\' \'+surname;
   var country = $.trim($(\'#country\').val());
      if(logo.length>0){
      	var mainlogo = logo;
      	
      }else{
      	mainlogo = prevlogo;
      }
      if(plan.length>0){
      	var mainpdf = plan;
      	
      }else{
      	mainpdf = prevplan;
      }
       if(name.length == 0){
          $(\'.add_user_err\').html(\'Name is required\').show(); 
          return false;
       }else if(surname.length == 0){
          $(\'.add_user_err\').html(\'Surname is required\').show();  
          return false;
       }else if(company.length == 0){
          $(\'.add_user_err\').html(\'Company Name is required\').show();  
          return false;
       }else if(email.length == 0){
          $(\'.add_user_err\').html(\'Email is required\').show();  
          return false;
       }else if(add1.length == 0){
          $(\'.add_user_err\').html(\'Address 1 is required\').show();  
          return false;
       }else if(city.length == 0){
          $(\'.add_user_err\').html(\'City is required\').show();  
          return false;
       }else if(zip.length == 0){
          $(\'.add_user_err\').html(\'Zipcode is required\').show();  
          return false;
       }else if(state.length == 0){
          $(\'.add_user_err\').html(\'State is required\').show();  
          return false;
       }else if(country.length == 0){
          $(\'.add_user_err\').html(\'Country is required\').show();  
          return false;
       }else if (!/^[a-z0-9!#$%&\'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&\'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(email)){
          $(\'.add_user_err\').html(\'Invalid Email\').show();  
          return false;
       }else{
	      e.preventDefault();
	             $.ajax({
                  url:"profileadd.php",
                  type:"POST",
				  data:{name:name,prevemail:prevemail,surname:surname,company:company,logo:mainlogo,website:website,plan:mainpdf,email:email,status:status,add1:add1,add2:add2,city:city,zip:zip,state:state,country:country},
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                               if(trim_resp ==\'error1\'){
                                     $(\'.add_user_err\').html(\'Email Already Exists!!!\').show();
				      return false;
				}else if(trim_resp ==\'error2\'){
                                     $(\'.add_user_err\').html(\'Staff could not be added.Try again!!!\').show();
				      return false;
                                }
                                else if(trim_resp == \'added\'){
									$(\'#sesuser\').val(person);
									$(\'#cname\').val(company);								   
                                       setTimeout(function() {
									   var var_msg = \'U3RhZmYgYWRkZWQgc3VjY2Vzc2Z1bGx5\';
								
									$(\'.pop_div\').html(\'Profile updated successfully\');
										$(\'#mssg_pop .popy1\').html(\'OK\');
										$(\'#mssg_pop\').reveal();
					}, 1); 
                               }
                        }    
                  });
	   }     
}); 		  
            </script>


'; ?>

<div style="margin-top:20px">
  <div class="justified-nav-bar column-full">
    <ul class="nav nav-justified">
      <li class="active"><a href="editProfile.php">Company</a></li>
      <li><a href="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>javascript: void(0)<?php else: ?>locationView.php<?php endif; ?>" style="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>background-color:#f5f6f8; color:#cccccc;<?php endif; ?>" class="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>my_modalupgrade_open<?php endif; ?>" onclick="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>upgrade()<?php endif; ?>">Locations</a></li>
      <li><a href="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>javascript: void(0)<?php else: ?>departmentView.php<?php endif; ?>"style="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>background-color:#f5f6f8; color:#cccccc;<?php endif; ?>" class="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>my_modalupgrade_open<?php endif; ?>" onclick="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>upgrade()<?php endif; ?>">Groups</a></li>
      <li><a href="companyuserView.php">Users</a></li>
      <li><a href="scenarioView.php">Scenario</a></li>
    </ul>
  </div>
  <div class="add_user_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
       
  <div class="justified-nav-bar column-full" style=" border-bottom:none !important; margin-top:20px;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" height="500px !important;">
    <tr>
      <td style="background-color:#FFF !important;" height="500px !important;"><div class="col-md-7 content-list contact_input">
<div id="frmAdd" class="form-horizontal" role="form" enctype="multipart/form-data" method="post" name="frmAdd">            
			<input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
            <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
            <div class="form-group form-group002">
              <label for="inputEmail3" class="col-sm-3 control-label"> Administrator's First name</label>
              <div class="col-sm-4">
                <input type="text" name="contactpersonfirst" class="validate[required] form-control contactpersonfirst" id="inputEmail3 contactpersonfirst" placeholder="" required value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactpersonfirst'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
">
              </div>
            </div>
            <div class="form-group form-group002">
              <label for="inputEmail3" class="col-sm-3 control-label"> Administrator's Last name</label>
              <div class="col-sm-4">
                <input type="text" name = "contactpersonlast" class="contactpersonlast validate[required] form-control" id="contactpersonlast inputEmail3" placeholder="" required value="<?php echo ((is_array($_tmp=$this->_tpl_vars['contactpersonlast'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
">
              </div>
            </div>
            <div class="form-group form-group002">
              <label for="inputEmail3" class="col-sm-3 control-label">Company Name</label>
              <div class="col-sm-4">
                <input type="text" name="companyname" class="validate[required] form-control companyname" id="inputEmail3 companyname" placeholder="" required value="<?php echo ((is_array($_tmp=$this->_tpl_vars['companyname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
">
              </div>
            </div>
              <form enctype="multipart/form-data" id="scenarioFileupload"> 
            <div class="form-group form-group002">
            	<input type="hidden" id="imageadd" name="imageadd" value="">
            	<input type="hidden" id="image" name="image" value="<?php echo $this->_tpl_vars['companylogo']; ?>
">
              <label for="inputPassword3" class="col-sm-3 control-label"> Company Logo</label>
              <div class="col-sm-4">
                <input type="file"  accept="image/*" multiple name="companylogo[]" type="file" onchange="imageupload()" class="form-control form-control003 companylogo" id="inputEmail3 temp" value="<?php echo $this->_tpl_vars['companylogo']; ?>
" placeholder="" >
                <div class="file_name01">
                  <input type="" class=" form-control file_name0002" id="inputEmail3 companyname"  placeholder="">
                  <strong>Browse</strong><span class="file_name01_mssg"></span></div>
                <img src="imageUpload/<?php echo $this->_tpl_vars['companylogo']; ?>
" id="prof_image" style="width:35px !important; height:35px !important;float:right;position:absolute; top:0; right:-65px !important;"/> </div>
            </div>
            </form>
            <div class="form-group form-group002">
              <label for="inputPassword3" class="col-sm-3 control-label">Website</label>
              <div class="col-sm-4">
                <input type="text" name="website" class="form-control website" id="website inputPassword3" placeholder=""  value="<?php echo $this->_tpl_vars['website']; ?>
">
              </div>
            </div>
             <form enctype="multipart/form-data" id="scenariopdfupload"> 
            <div class="form-group form-group002">
            	<input type="hidden" id="pdfadd" name="pdfadd" value="">
				<input type="hidden" id="prevemail" name="prevemail" value="<?php echo $this->_tpl_vars['email']; ?>
">
            	<input type="hidden" id="pdf" name="pdf" value="<?php echo $this->_tpl_vars['companyplan']; ?>
">
              <label for="inputPassword3" class="col-sm-3 control-label"> Plan</label>
              <div class="col-sm-4">
                <input type="file" class="form-control form-control003" name="companyplan[]"  type="file" onchange="pdfupload()" id="companyplan inputEmail3" size="29" value="<?php echo $this->_tpl_vars['companyplan']; ?>
" style="margin:-1px 0 0 0 !important;">
                <a href="planUpload/<?php echo $this->_tpl_vars['companyplan']; ?>
" id="prof_plan" style=" position: absolute;right: -105px;top: 5px;"><img src="images/icons/pdf-icon.png" style="width:35px !important; height:35px !important;float:right;position:absolute; top:-7px; right:41px !important;"/> </a>
                <div class="file_name01">
                  <input type="" class=" form-control file_name0002" id="inputEmail3 companyname"  placeholder="">
                  <strong>Browse</strong><span class="file_name01_mssg"></span></div>
              </div>
            </div>
            </form>
            <div class="form-group form-group002">
              <label for="inputPassword3" class="col-sm-3 control-label">Email</label>
              <div class="col-sm-4">
                <input type="email" name="email" class="validate[required] form-control email" id="email inputPassword3" placeholder="" value="<?php echo $this->_tpl_vars['email']; ?>
" required>
              </div>
            </div>
            <div class="form-group form-group002">
              <label for="inputPassword3" class="col-sm-3 control-label"> Status</label>
              <div class="col-sm-4">
                <p class="editprofile">
                  <select name="eStatus" class="form-control" id="estatus">
                    
                  

							<?php if ($this->_tpl_vars['eStatus'] == '1'): ?>

								<option  value="1" selected="selected">Active</option>

								<option  value="0">Inactive</option>

							<?php elseif ($this->_tpl_vars['eStatus'] == '0'): ?>

								<option  value="1">Active</option>

								<option  value="0" selected="selected">Inactive</option>

							<?php else: ?>

								<option  value="1">Active</option>

								<option  value="0">Inactive</option>

							<?php endif; ?>



                      </select>

					</p>
       <!--     <select class="form-control">
            	<?php if (count($_from = (array)$this->_tpl_vars['data_country'])):
    foreach ($_from as $this->_tpl_vars['country_all']):
?>
								<option value="<?php echo $this->_tpl_vars['country_all']['countryId']; ?>
" <?php if ($this->_tpl_vars['country_all']['countryId'] == $this->_tpl_vars['countryId']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['country_all']['printable_name']; ?>
</option>
			<?php endforeach; unset($_from); endif; ?>
            </select> -->
          </div>
        </div>
        <div class="form-group form-group002">
          <label for="inputPassword3" class="col-sm-3 control-label">Address Line1</label>
          <div class="col-sm-4">
            <input type="text" name="address" id="address" required class="validate[required] form-control address" value="<?php echo $this->_tpl_vars['address']; ?>
"/>
          </div>
        </div>
             <div class="form-group form-group002">
          <label for="inputPassword3" class="col-sm-3 control-label">Address Line2</label>
          <div class="col-sm-4">
             <input type="text" name="address1" id="address1" class="form-control address1" value="<?php echo $this->_tpl_vars['address1']; ?>
"/>
          </div>
        </div>
        <div class="form-group form-group002">
          <label for="inputPassword3" class="col-sm-3 control-label">City</label>
          <div class="col-sm-4">
            <input type="text" name="city" id="city inputPassword3" class="city validate[required] form-control" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['city'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
" placeholder="" required>
          </div>
        </div>
        
        <div class="form-group form-group002">
          <label for="inputPassword3" class="col-sm-3 control-label">Zipcode/Postcode</label>
          <div class="col-sm-4">
            <input type="text" name="zipcode" id="zipcode inputPassword3" class="zipcode validate[required]  form-control" placeholder="" value="<?php echo $this->_tpl_vars['zipcode']; ?>
" required>
          </div>
        </div>
        
        <div class="form-group form-group002">
          <label for="inputPassword3" class="col-sm-3 control-label">State/County</label>
          <div class="col-sm-4">
            <input type="text" name="state" id="state inputPassword3"  class="state validate[required]  form-control" placeholder="" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['state'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
" required>
          </div>
        </div>
        
        <div class="form-group form-group002">
          <label for="inputPassword3" class="col-sm-3 control-label">Country</label>
          
          <div class="col-sm-4">
            <select name="country" class="form-control" id="country">
            	<?php if (count($_from = (array)$this->_tpl_vars['data_country'])):
    foreach ($_from as $this->_tpl_vars['country_all']):
?>
								<option value="<?php echo $this->_tpl_vars['country_all']['countryId']; ?>
" <?php if ($this->_tpl_vars['country_all']['countryId'] == $this->_tpl_vars['countryId']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['country_all']['printable_name']; ?>
</option>
			<?php endforeach; unset($_from); endif; ?>

                      
              
                </select>
                
                
              </div>
            </div>
            <div class="form-group form-group002">
          <label for="inputPassword3" class="col-sm-3 control-label" style="color:#fff !important">.</label>
           <?php if ($this->_tpl_vars['ses_head'] == '3'): ?>
          <div class="col-sm-4">
		 
          <input type="submit" name="update" id="submit" class="validate[required] form-control edit_sub" value="Update" placeholder="" required style="color:#fff !important; text-align: center !important;">
              </div>
			  <?php endif; ?>
            </div>
            <!--<div class="form-group">
              <div class="col-sm-offset-3 col-sm-4"> 
               
                <?php if ($this->_tpl_vars['action'] == 'Update'): ?>
                <input type="submit" id="submit" name="update" class="btn button-blue column-full button_text" value="Update">
                <?php else: ?>
                <input type="submit" id="submit" name="add" class="btn button-blue column-full button_text" value="Submit" style="width:100px !important; height:30px !important;">
                <input type="button" value="Reset" class="btn button-blue column-full button_text" onclick="reset();return false;" style="width:100px !important; height:30px !important; float:left; ">
                <?php endif; ?> </div>
            </div>-->
            </div>
          
        </div>
      </div>
    
    <div class="regbottomleft">
      <div class="regbottomright"></div>
    </div>
    <p></p>
      </td>
    
      </tr>
    
  </table>
</div>
  <div class="reveal-modal" id="mssg_pop" >
                               <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
                                <div class="pop_div">
								<p class="over_det_text"></p>
                                <button type="button" class="close-reveal-modal popy1" >OK</button>
								</div>
                            </div> 
<!-- Upgrade pop up....----->
<div id="my_modalupgrade" class="over_laydesign">
  <div class="edit_pop5">
    <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modalupgrade_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> </div>
    <div class="over_delete">
      <p class="over_det_text">&nbsp;</p>
      <p class="over_text_det" style="text-align:center;font-weight:bold;font-size:18px;">Upgrade your plan to Activate </p>
      <p class="over_text_det" style="text-align:center;font-weight:bold;font-size:18px;">this function</p>
      <div class="ove_button" style="width:400px !important;"> <a href="plans.php" id="up_grade">Upgrade Your Plan</a> </div>
    </div>
  </div>
</div>
</div>