<?php /* Smarty version 2.6.0, created on 2013-07-03 15:24:44
         compiled from addLocation.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'addLocation.tpl', 66, false),array('modifier', 'urldecode', 'addLocation.tpl', 69, false),array('function', 'assign', 'addLocation.tpl', 70, false),)), $this); ?>
<div style="margin-left: 17px; margin-top: 8px; width: 700px; color:#4F5D75;">

<form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data">
 <div style="width: 855px; margin-left:115px">
 
	 <div class="tourNavLeftTop">
		<div class="tourNavRightTop"></div>
	</div>
	<div class="tourNavBody">
		<div class="tourNavRightBottom">
		
			<div class="tourNavItem"><a href="plans.php">Choose plan</a></div>
			<div class="tourNavItem"><a href="plans.php">Create account</a></div>
			<div class="tourNavItemActiveLeft">
				<div class="tourNavItemActiveRight">Step 3 - Office location</div>
			</div>
			<div class="tourNavItemNonLink">Create Groups</div>
			<div class="tourNavItemNonLink">Add Staff</div>
			<div class="tourNavItemNonLink">Configure Scenario</div>
			
		</div>
	</div>
	<p></p>
	<div class="regtopleft">
		<div class="regtopright">
			<div class="planCreateAccStep3">
				<div class="signupStepTxt1">Office location</div><div style="float:right; width:100px;"><a href="createGroups.php" style="font-size: 18px; text-decoration: underline;">Next&raquo;</a></div>
			</div>
		</div>
	<div class="signupStepTxt3b"  style="min-height:140px !important;">
		
        <div style="width: 700px;"> 
          <?php if (isset ( $this->_tpl_vars['var_msg'] ) && $this->_tpl_vars['var_msg'] != ""): ?><br><?php echo $this->_tpl_vars['var_msg']; ?>
<br><?php endif; ?>       
        
		   <div class="signuptext" style="margin-top:7px;">Office location:</div>
          <div style="width: 435px; float:left;"><input type="text" class = "validate[required] input_text" name="locationname" id="locationname" value="<?php echo $this->_tpl_vars['locationname']; ?>
" size="45"/></div>
         
       <div class="signuptext"  style="margin-top:7px;"></div>
       <div style="width: 435px; float:left;"> <input type="submit" id="submit" name="add" class="button_text" value="<?php if ($this->_tpl_vars['submitValue'] != ""):  echo $this->_tpl_vars['submitValue'];  else: ?>Submit<?php endif; ?>"></div>
        
      
       </div>
		
		
		</div>
		
		<table id="tablesorter-demo" class="tablesorter"  style="background-color: #E6EEEE;
    color: #385BBF;
    font-family: Tahoma,Arial,Helvetica,sans-serif;
    font-size: 11px;
    margin-left: 10px;
    text-align: center;
    width: 815px;" rel="<?php echo $this->_tpl_vars['RECLIMIT']; ?>
" border="0" cellpadding="0" cellspacing="1">
                    
                    <tbody>
                      <tr style="background:#fff; color:#000;">
                        <th height="35" align="center" width="20%" style="padding-left:5px;">Location Name</th>
                        <th width="15%" align="center">Record Status</th>
                        <th width="15%" style="text-align:center;">Actions</th>
                      </tr>
                      <?php if ($this->_tpl_vars['count_db_res'] > 0): ?>
                      
                      <?php if (count($_from = (array)$this->_tpl_vars['dataGroup'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>
					  
                     <tr style="background:#fff; color:#000;">
                        <td width="15%"><p> <?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['locationname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
 </p></td>
                        <td align="center" style="padding: 13px 0px ! important;" id="status_<?php echo $this->_tpl_vars['currdata']['locationId']; ?>
"><?php if ($this->_tpl_vars['currdata']['eStatus'] == '1'): ?> <img src="images/icons/active.gif" title="Active" alt="Active" /> <?php elseif ($this->_tpl_vars['currdata']['eStatus'] == '0'): ?> <img src="images/icons/inactive.gif" title="Inactive" alt="Inactive" /> <?php endif; ?></td>
                       
                        <td align="center" style="padding: 13px 0px ! important;"><a title="Update Group" href="<?php echo $this->_tpl_vars['add_file']; ?>
?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['locationId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
&action=Update"><img src="images/icons/edit1.png" alt="Edit" border="0" /></a>&nbsp;<span style="vertical-align:top; color:#000;">|</span>&nbsp; <a title="Delete Group" href="<?php echo $this->_tpl_vars['view_file']; ?>
?id=<?php echo $this->_tpl_vars['currdata']['locationId']; ?>
&action=Delete" class="confirm"> <img src="images/icons/delete.png" alt="Delete" border="0" /></a></td>
			<?php echo smarty_function_assign(array('var' => 'deptid','value' => $this->_tpl_vars['currdata']['locationId'],'scope' => 'global'), $this);?>

			
                      </tr>

                      <?php endforeach; unset($_from); endif; ?>
                      
                      <?php else: ?>
                      <tr>
                        <td align="center" class="error_msg" colspan="3"><font color="#FF0000">Records not available.</font></td>
                      </tr>
                      <?php endif; ?>
                      </tbody>
                    
                  </table>
		
		
		
		<div class="regbottomleft">
			<div class="regbottomright"></div>
		</div>
	
	</div>
	
</div>	
</form>
</div>
