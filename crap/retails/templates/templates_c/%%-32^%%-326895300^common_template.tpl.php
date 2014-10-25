<?php /* Smarty version 2.6.0, created on 2014-01-17 08:47:45
         compiled from common_template.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <!--Mid Area Start -->
<!--<div class="mid_wrapper<?php if ($this->_tpl_vars['middle_file'] == 'signup.tpl' || $this->_tpl_vars['middle_file'] == 'forgotPassword.tpl' || $this->_tpl_vars['middle_file'] == 'contactUs.tpl' || $this->_tpl_vars['middle_file'] == 'login.tpl' || $this->_tpl_vars['middle_file'] == 'pages.tpl' || $this->_tpl_vars['middle_file'] == 'createGroups.tpl' || $this->_tpl_vars['middle_file'] == 'addStaff.tpl' || $this->_tpl_vars['middle_file'] == 'configScenario.tpl' || $this->_tpl_vars['middle_file'] == 'registrationsuccess.tpl'): ?>_signup<?php endif; ?>" >-->
<?php if ($this->_tpl_vars['middle_file'] != 'index.tpl'): ?>
     <div class="main-container">

     </div><?php endif; ?>
<div class="mid_wrapper" >
	<?php if ($this->_tpl_vars['middle_file'] == 'signup.tpl' || $this->_tpl_vars['middle_file'] == 'createGroups.tpl' || $this->_tpl_vars['middle_file'] == 'addLocation.tpl' || $this->_tpl_vars['middle_file'] == 'addStaff.tpl' || $this->_tpl_vars['middle_file'] == 'configScenario.tpl' || $this->_tpl_vars['bottom_file'] == 'plans.tpl' || $this->_tpl_vars['middle_file'] == 'forgotPassword.tpl' || $this->_tpl_vars['middle_file'] == 'resendLink.tpl' || $this->_tpl_vars['middle_file'] == 'contactUs.tpl' || $this->_tpl_vars['middle_file'] == 'login.tpl' || $this->_tpl_vars['middle_file'] == 'pages.tpl' || $this->_tpl_vars['middle_file'] == 'registrationsuccess.tpl'): ?>
	<?php endif; ?> <!-- <?php if ($this->_tpl_vars['middle_file'] == 'signup.tpl'): ?><div  style="position:relative; top:100px; left:-61px; width:125px;float:left;"><img src="images/signup.png" alt="" /></div><?php endif; ?> -->
	<?php if ($this->_tpl_vars['middle_file'] != 'signup.tpl' && $this->_tpl_vars['middle_file'] != 'createGroups.tpl' && $this->_tpl_vars['middle_file'] != 'addLocation.tpl' && $this->_tpl_vars['middle_file'] != 'addStaff.tpl' && $this->_tpl_vars['middle_file'] != 'configScenario.tpl' && $this->_tpl_vars['middle_file'] != 'index.tpl' && $this->_tpl_vars['middle_file'] != 'index_alt.tpl' && $this->_tpl_vars['bottom_file'] != 'plans.tpl' && $this->_tpl_vars['middle_file'] != 'forgotPassword.tpl' && $this->_tpl_vars['middle_file'] != 'resendLink.tpl' && $this->_tpl_vars['middle_file'] != 'contactUs.tpl' && $this->_tpl_vars['middle_file'] != 'login.tpl' && $this->_tpl_vars['middle_file'] != 'pages.tpl' && $this->_tpl_vars['middle_file'] != 'registrationsuccess.tpl'): ?>
   </div> 
   
	 <div class="main">
		<div class="main2">

	<?php endif; ?>

	<?php if ($this->_tpl_vars['middle_file'] != ''): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['middle_file'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
	<div id="second_box_main" align="center" >
		<?php if ($this->_tpl_vars['bottom_file'] != ''): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['bottom_file'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
	</div>
</div>
</div>

<!--Mid Area End -->
</div>
<?php if ($this->_tpl_vars['ses_varid'] != ""):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer_ses.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  else:  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>
</div>
</div>
<!--end second box-->
</div>

</body>
</html>