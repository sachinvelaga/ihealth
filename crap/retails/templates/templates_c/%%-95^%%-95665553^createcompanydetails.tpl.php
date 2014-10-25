<?php /* Smarty version 2.6.0, created on 2013-10-29 07:21:59
         compiled from createcompanydetails.tpl */ ?>

<?php echo '
<link rel="stylesheet" href="js/sorting/themes/blue/style.css" type="text/css" media="print, projection, screen" />
<script type="text/javascript" src="js/sorting/jquery.tablesorter.js"></script> 
<script type="text/javascript" src="js/jlist.js"></script>
<link rel="stylesheet" href="js/confirm/jquery-ui.css" type="text/css">
<link rel="stylesheet" href="cssss/style.css">
<script src="js/confirm/avg_ls_dom.js" type="text/javascript"></script> 
<script src="js/confirm/jquery-ui.js"></script> 
<script src="js/confirm/jquery_002.js"></script> 
<script type="text/javascript">
$( document ).ready(function() {
$("#companyplan").change(function(){
	var plan = $("#companyplan").val();
	if(plan==2){
		$("#chooseplan").show();
		}else{
			$("#chooseplan").hide();
			}
	
});
});
</script>
'; ?>

<div class="main-container">
  <div class="pre-registration">
  <div class="arrow active">
    <p>Pre registration steps</p>
  </div>
  <div class="grey">
  <ul>
  <li><a href="plans.php">1<span>Choose Plan</span></a></li>
  <li><a href="#" >2<span >Create Profile</span></a></li>
  <li><a class="active" href="createcompanydetails.php">3<span class="active">Create Company Details</span></a></li>
   <li><a href="javascript:void(0);">4<span>Payment</span></a></li>
  </ul>
  </div>
  </div>
  <div class="post-registration">
  <div class="arrow-orange">
  <p>Post registration steps</p>
  </div>
  <div class="orange">
  <ul>
  <li><a href="#">1<span>Add Location</span></a></li>
  <li><a href="#">2<span>Create Groups</span></a></li>
  <li><a href="#">3<span>Add Users</span></a></li>
  <li><a href="#">4<span>Configure Scenarios</span></a></li>
  </ul>
  </div>
  </div>
   <div class="plan"><a href="javascript:void(0);">Create Profile</a>
  </div>
  <div class="border"></div>
  <div class="container">
	<div class="trial">
		You have chosen:<span>&nbsp;  &pound; <?php echo $this->_tpl_vars['planamount']; ?>
 <?php if ($this->_tpl_vars['planduration'] == 'Yearly'): ?> Year<?php endif;  if ($this->_tpl_vars['planduration'] == 'Monthly'): ?> Month<?php endif; ?></span>
	</div>
	<div class="trial-users">
  Managed Users: <span><?php echo $this->_tpl_vars['planuserslimit']; ?>
</span>
	</div>
	<div class="next">
		<a href="createprofile.php" onClick="createprofile.php">&lsaquo;&lsaquo;&nbsp;BACK</a>
	</div>
</div>
<div class="grey-border"></div>
  <form id="createprofile" name="createprofile" action="createcompanydetails.php" method="post" enctype="multipart/form-data">
 <div class="activate">
  <h6>You will receive an account acivation conformation message with administrator url at your email address after submitting the form. Please click on that url to complete the remaining registration process. <span>(for other plans this message would be slightly different with payment procedure details.)</span></h6>
  </div>
  <div class="detail">
  <h2>Create your company details</h2>
  
      <input type="hidden" name="plan" value="<?php echo $this->_tpl_vars['signupplan']; ?>
" />
  <input type="hidden" name="duration" value="<?php echo $this->_tpl_vars['planduration']; ?>
" />
				 <input type="hidden" name="amount" value="<?php echo $this->_tpl_vars['planamount']; ?>
">
				 <input type="hidden" name="userslimit" value="<?php echo $this->_tpl_vars['planuserslimit']; ?>
">
   <input type="hidden" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" />
   <input type="hidden" name="cid" value="<?php echo $this->_tpl_vars['cid']; ?>
"/>
   <input type="hidden" name="hid" value="<?php echo $this->_tpl_vars['hid']; ?>
"/>
  
  <h6>Add your company name and location below. You can add multiple location of your company after registration.</h6>
  
  <div class="company">
  
  <label>Company Name:</label>
  <input type="text"   name="companyname" id="companyname"  value="<?php echo $this->_tpl_vars['companyname']; ?>
" required>
  </div>
  
  
<!--  <div class="company">
  
  <label>Company Code:</label>
  <input type="text"   name="companycode" id="companycode"  value="<?php echo $this->_tpl_vars['companycode']; ?>
" required>
  </div>-->
  
  
  
  <div class="company">
  
  <label>Company Logo:</label>
  <input type="file"   name="companylogo" id="companylogo"  value="" required class="fileupload">
  </div>
  
    <div class="company">
  
  <label>Company Plan:</label>
  <select name="companyplan" id="companyplan" onchange="plan()">

          <option value="0">Select Plan</option>
           <option value="1">Generic Plan</option>
           <option value="2">Company Plan</option>
           </select>

  </div>
  
    
  <div class="company" id="chooseplan" style="display:none;">
  
  <label>Choose Plan:</label>
  <input type="file"   name="chooseplan"  value="" class="fileupload">
  </div>
  
  
  
  
   <div class="company">
  <label>Company Address:</label>
   <input name="address" id="address" value="<?php echo $this->_tpl_vars['address']; ?>
" type="text" required>
  </div>
  
  
  
    <div class="company">
  
  <label>City:</label>
  <input type="text"   name="city" id="city"  value="<?php echo $this->_tpl_vars['city']; ?>
" required>
  </div>
   <div class="company">
  <label>State:</label>
   <input name="state" id="state" value="<?php echo $this->_tpl_vars['state']; ?>
" type="text" required>
  </div>
  
      <div class="company">
  
  <label>Zipcode/Postcode:</label>
  <input type="text"   name="zipcode" id="zipcode"  value="<?php echo $this->_tpl_vars['zipcode']; ?>
" required>
  </div>
   <div class="company">
  <label>Country:</label>
    <select name="country" id="country" type="text">
			<?php if (count($_from = (array)$this->_tpl_vars['data_country'])):
    foreach ($_from as $this->_tpl_vars['country_all']):
?>
								<option value="<?php echo $this->_tpl_vars['country_all']['countryId']; ?>
" <?php if ($this->_tpl_vars['country_all']['countryId'] == $this->_tpl_vars['countryId']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['country_all']['printable_name']; ?>
</option>
			<?php endforeach; unset($_from); endif; ?>
  </select>
  </div>
  
  
  <div class="company">
  <label>Website:</label>
   <input type="text" name="website" id="website"   required >
  
  </div>
  
<div class="sub">
  <div class="submit">

  <input type="submit" style="padding:0  !important;line-height:32px !important; text-align:center;height:30px !important; width:301px !important;" class="submit" value="Submit and send confirmation" id="companybtn_signup"  name="companybtn_signup"/>

 
   <p style="float:left !important;">for other plans this should be ‘submit and go to next step’ or ‘submit and make payment’</p>
<!--</a>-->
  </div>
    </div>
    
    
  </div>
  
  </form>
  </div>
  </div>
</div>