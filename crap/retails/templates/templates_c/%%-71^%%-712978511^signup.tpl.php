<?php /* Smarty version 2.6.0, created on 2013-09-14 13:20:15
         compiled from signup.tpl */ ?>
<div style="margin-left: 17px; margin-top: 8px; width: 700px; color:#4F5D75;">

<form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data">
  <input type="hidden" name="plan" value="<?php echo $this->_tpl_vars['signupplan']; ?>
" />
  <input type="hidden" name="duration" value="<?php echo $this->_tpl_vars['planduration']; ?>
" />
				 <input type="hidden" name="amount" value="<?php echo $this->_tpl_vars['planamount']; ?>
">
				 <input type="hidden" name="userslimit" value="<?php echo $this->_tpl_vars['planuserslimit']; ?>
">
 <div style="width: 835px; margin-left:115px;padding-top:5px;">
 
	 <div class="tourNavLeftTop">
		<div class="tourNavRightTop"></div>
	</div>
	<div class="tourNavBody">
		<div class="tourNavRightBottom">
		
						<div class="tourNavItem"><a href="plans.php">Choose plan</a></div>
				<div class="tourNavItemActiveLeft">
					<div class="tourNavItemActiveRight">Step 2 - Create account</div>
				</div>
								<div class="tourNavItemNonLink">Add Location</div>
								<div class="tourNavItemNonLink">Create Groups</div>
								<div class="tourNavItemNonLink">Add Staff</div>
								<div class="tourNavItemNonLink">Configure Scenario</div>	
								
		</div>
	</div>
 
    <div style="margin-left: 17px; margin-top: 8px; width: 495px;">
        
          <?php if ($this->_tpl_vars['errormsg']): ?>
         <font class="error_msg">
            <?php echo $this->_tpl_vars['errormsg']; ?>

           </font>
          <?php endif; ?>
      </div> 
	  
	  <div class="regtopleft">
		<div class="regtopright">
			<div class="planCreateAccStep1">
				<div class="signupStepTxt1">You have chosen:</div>
				<div class="signupStepTxt1"> - <?php if ($this->_tpl_vars['planduration'] == '30 Days'): ?>
					 FREE 30 day trial 
					<?php else: ?>
					<?php echo $this->_tpl_vars['planduration']; ?>

					<?php echo $this->_tpl_vars['signupplan']; ?>

					Plan
					<?php endif; ?></div>
			</div>
		</div>
		<?php if ($this->_tpl_vars['planduration'] != '30 Days'): ?>
		<div class="signupStepTxt2">which will allow you to add up to <span class="signupAmountProjects"><?php echo $this->_tpl_vars['planuserslimit']; ?>
</span>
		 user(s) at a time.</div>
		 <?php endif; ?>
	</div>
	
	<div class="regbottomleft">
		<div class="regbottomright"></div>
	</div>
	
	<p></p>
	<div class="regtopleft">
		<div class="regtopright">
			<div class="planCreateAccStep2">
				<div class="signupStepTxt1">Your company/team name</div>
			</div>
		</div>
		<p class="signupStepTxt3">
			What is the name of your company, team or organization?
		</p>
		<p class="signupStepTxt3a">
			<input type="text" class = "validate[required] textcomp" name="companyname" id="companyname" size="45" value="<?php echo $this->_tpl_vars['companyname']; ?>
" />
		</p>
	</div>
	<div class="regbottomleft">
		<div class="regbottomright"></div>
	</div>
	<p></p>
	<div class="regtopleft">
		<div class="regtopright">
			<div class="planCreateAccStep3">
				<div class="signupStepTxt1">Create your administrator account</div>
			</div>
		</div>
		<div class="signupStepTxt3b">
		This is the master log-in for your account. Once you&#039;ve created your administrator account below, you will be able to add as many team members to your account as you&#039;d like. Each person will have their own log-in information.
		<br><br>
		
        <div style="width: 600px;"> 
                 
         <div class="signuptext">Company Logo:</div>
          <div class="signuptextright"><input type="file" class = "input_login input_text" name="companylogo" id="companylogo" size="29"  value="<?php echo $this->_tpl_vars['companylogo']; ?>
"/></div>
        
	 <div class="signuptext">Administrator's First Name:<sup style="color:#F03;">*</sup></div>
          <div class="signuptextright"><input type="text" class="validate[required] input_login" name="contactpersonfirst" id="contactpersonfirst" size="45"  value="<?php echo $this->_tpl_vars['contactpersonfirst']; ?>
" /></div>
		  
		 <div class="signuptext">Administrator's Last Name:<sup style="color:#F03;">*</sup></div>
          <div class="signuptextright"><input type="text" class="validate[required] input_login" name="contactpersonlast" id="contactpersonlast" size="45"  value="<?php echo $this->_tpl_vars['contactpersonlast']; ?>
" /></div> 
 
       <div class="signuptext">Company Address:<sup style="color:#F03;">*</sup></div>
       <div class="signuptextright"><textarea name="address" id="address" class="validate[required]" rows="4" cols="35"><?php echo $this->_tpl_vars['address']; ?>
</textarea></div>
        
       <div class="signuptext">City:<sup style="color:#F03;">*</sup></div>
       <div class="signuptextright"><input type="text" class = "validate[required] input_login" name="city" id="city" size="45" value="<?php echo $this->_tpl_vars['city']; ?>
" /></div>
          
        <div class="signuptext">Zipcode/Postcode:<sup style="color:#F03;">*</sup></div>
         <div class="signuptextright"><input type="text" class = "validate[required] input_login" name="zipcode" id="zipcode" size="45" value="<?php echo $this->_tpl_vars['zipcode']; ?>
" /></div>
         
         <div class="signuptext">State/County:<sup style="color:#F03;">*</sup></div>
          <div class="signuptextright"><input type="text" class = "validate[required] input_login" name="state" id="state" size="45" value="<?php echo $this->_tpl_vars['state']; ?>
"/></div>
         
        <div class="signuptext">Country:<sup style="color:#F03;">*</sup></div>
          <div class="signuptextright"><select name="country" class="select_cmb">
              <?php if (count($_from = (array)$this->_tpl_vars['data_country'])):
    foreach ($_from as $this->_tpl_vars['country_all']):
?>
              <?php if ($this->_tpl_vars['country_all']['countryId'] == 225 && $this->_tpl_vars['countryId'] == ""): ?>
              <option value="<?php echo $this->_tpl_vars['country_all']['countryId']; ?>
" selected="selected">
              <?php echo $this->_tpl_vars['country_all']['printable_name']; ?>

              </option>
              <?php else: ?>
              <option value="<?php echo $this->_tpl_vars['country_all']['countryId']; ?>
" <?php if ($this->_tpl_vars['country_all']['countryId'] == $this->_tpl_vars['countryId']): ?> selected="selected" <?php endif; ?> >
              <?php echo $this->_tpl_vars['country_all']['printable_name']; ?>

              </option>
              <?php endif; ?>
              <?php endforeach; unset($_from); endif; ?>
            </select>
			</div>
       
         <div class="signuptext">Website:<sup style="color:#F03;">*</sup></div>
          <div class="signuptextright"><input type="text" class = "validate[required,custom[website]] input_login" name="website" id="website" size="45" value="<?php echo $this->_tpl_vars['website']; ?>
"/></div>
         
         <div class="signuptext">Email:<sup style="color:#F03;">*</sup></div>
          <div class="signuptextright"><input type="text" class = "validate[required,custom[email]] input_login" name="email" id="email" size="45" onBlur="checkemail(this.value);" /></div>
         
        <div class="signuptext">Password:<sup style="color:#F03;">*</sup></div>
        <div class="signuptextright"><input type="password" class = "validate[required,minSize[6]] input_login" name="password" id="password" size="45"  value="<?php echo $this->_tpl_vars['password']; ?>
"/></div>
          
       </div>
	   <p>&nbsp;</p>
		
		</div>
	</div>
	<div class="regbottomleft">
		<div class="regbottomright"></div>
	</div>
	
	<p></p>
	<div class="planLeftTopC">
		<div class="planRightTopC">
			<div class="planCreateAccStep4">
				<div class="signupStepTxt1">Review plan, accept terms and complete signup</div>
			</div>
		</div>
		<div class="signupStepTxt4b">
			
			<p></p>
			
			 <div style="width: 500px;"> 
                 
				<div class="signuptextplan">Your selected plan:</div>
				<div class="signuptextplanright"> <?php if ($this->_tpl_vars['planduration'] == '30 Days'): ?>
					 FREE 30 day trial 
					<?php else: ?>
					<?php echo $this->_tpl_vars['planduration']; ?>

					<?php echo $this->_tpl_vars['signupplan']; ?>

					Plan
					<?php endif; ?>
					</div>
				<?php if ($this->_tpl_vars['planduration'] == '30 Days'): ?>	
				<div class="signuptextplan">Price: </div>
				<div class="signuptextplanright">Free</div>
				 <?php else: ?>
				 	<div class="signuptextplan">Price: </div>
				<div class="signuptextplanright">&pound; <?php echo $this->_tpl_vars['planamount']; ?>
,- / <?php if ($this->_tpl_vars['planduration'] == 'Yearly'): ?> Year<?php endif;  if ($this->_tpl_vars['planduration'] == 'Monthly'): ?> Month<?php endif; ?>
				 </div>
				<div class="signuptextplan">Manage users: </div>
				  <div class="signuptextplanright"> <?php echo $this->_tpl_vars['planuserslimit']; ?>
</div>
				 <?php endif; ?>
				<!--<div class="signuptextplan">Your free trial will end: </div>
				  <div class="signuptextplanright"> at midnight on 2013-04-18</div>-->
				<p>&nbsp;</p>
				<div class="signuptextplan"></div>
				<div class="signuptextplanright"> <input type="submit" name="btn_signup" class="button_text_form" value="Submit" id="signup"/></div>
			</div>
		
			<p>&nbsp;</p>
			
		</div>
	</div>
	<div class="planLeftBottomC">
		<div class="planRightBottomC"></div>
	</div>
</div>	
</form>
</div>