<?php /* Smarty version 2.6.0, created on 2013-07-03 15:24:51
         compiled from createGroups.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'createGroups.tpl', 80, false),array('modifier', 'urldecode', 'createGroups.tpl', 84, false),array('function', 'assign', 'createGroups.tpl', 85, false),)), $this); ?>
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
			<div class="tourNavItem"><a href="addLocation.php">Office location</a></div>
			<div class="tourNavItemActiveLeft">
				<div class="tourNavItemActiveRight">Step 3 - Create Groups</div>
			</div>
			<div class="tourNavItemNonLink">Add Staff</div>
			<div class="tourNavItemNonLink">Configure Scenario</div>
			
		</div>
	</div>
	<p></p>
	<div class="regtopleft">
		<div class="regtopright">
			<div class="planCreateAccStep3">
				<div class="signupStepTxt1">Create Group</div><?php if ($this->_tpl_vars['checkGroups'] == true): ?><div style="float:right; width:100px;"><a href="addStaff.php" style="font-size: 18px; text-decoration: underline;">Next&raquo;</a></div><?php endif; ?>
			</div>
		</div>
	<div class="signupStepTxt3b"  style="min-height:140px !important;">
		
        <div style="width: 700px;"> 
          <?php if (isset ( $this->_tpl_vars['var_msg'] ) && $this->_tpl_vars['var_msg'] != ""): ?><br><?php echo $this->_tpl_vars['var_msg']; ?>
<br><?php endif; ?>       
         <div class="signuptext" style="margin-top:7px;">Import Groups:</div>
          <div style="width: 55px; float:left;"><a href="#" title="Upload staff from an excel file" onclick="show_popup('upload_csv');"><img src="images/Excel.png" height="25" width="25" style="vertical-align:middle;" border="none"  /></a></div>
		  <div style="width: 400px; float:left;">[You can easily import all your staff and their associated departments from a spread sheet. Click here to see an example of the format.]  Download file - <a href="download.php?download_file=example.xls" target="_blank">example.xls </a></div>
		  
		  <div class="signuptext" style="margin-top:7px;">Location Name:</div>
          <div style="width: 435px; float:left;">
		  <select name="locationname" id="locationname" class="validate[required] select-one select_cmb">
                      <?php if (count($_from = (array)$this->_tpl_vars['data_locationname'])):
    foreach ($_from as $this->_tpl_vars['locationname_all']):
?>
                      <option value="<?php echo $this->_tpl_vars['locationname_all']['locationId']; ?>
" <?php if ($this->_tpl_vars['locationname_all']['locationId'] == $this->_tpl_vars['locationId']): ?> selected="selected" <?php endif; ?> >
                      <?php echo $this->_tpl_vars['locationname_all']['locationname']; ?>

                      </option>
                      <?php endforeach; unset($_from); endif; ?>
                    </select>
		  </div>
		   <div class="signuptext" style="margin-top:7px;">Group Name:</div>
          <div style="width: 435px; float:left;"><input type="text" class = "validate[required] input_text" name="departmentname" id="departmentname" value="<?php echo $this->_tpl_vars['departmentname']; ?>
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
                        <th height="35" align="center" width="20%" style="padding-left:5px;">Group Name</th>
						 <th height="35" align="center" width="20%" style="padding-left:5px;">Location Name</th>
                        <th width="15%" align="center">Record Status</th>
                        <th width="15%" style="text-align:center;">Actions</th>
                      </tr>
                      <?php if ($this->_tpl_vars['count_db_res'] > 0): ?>
                      
                      <?php if (count($_from = (array)$this->_tpl_vars['dataGroup'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>
					  
                     <tr style="background:#fff; color:#000;">
                        <td width="15%"><p> <?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['departmentname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
 </p></td>
						 <td width="15%"><p> <?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['locationname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
 </p></td>
                        <td align="center" style="padding: 13px 0px ! important;" id="status_<?php echo $this->_tpl_vars['currdata']['departmentId']; ?>
"><?php if ($this->_tpl_vars['currdata']['eStatus'] == '1'): ?> <img src="images/icons/active.gif" title="Active" alt="Active" /> <?php elseif ($this->_tpl_vars['currdata']['eStatus'] == '0'): ?> <img src="images/icons/inactive.gif" title="Inactive" alt="Inactive" /> <?php endif; ?></td>
                       
                        <td align="center" style="padding: 13px 0px ! important;"><a title="Update Group" href="<?php echo $this->_tpl_vars['add_file']; ?>
?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['departmentId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
&action=Update"><img src="images/icons/edit1.png" alt="Edit" border="0" /></a>&nbsp;<span style="vertical-align:top; color:#000;">|</span>&nbsp; <a title="Delete Group" href="<?php echo $this->_tpl_vars['view_file']; ?>
?id=<?php echo $this->_tpl_vars['currdata']['departmentId']; ?>
&action=Delete" class="confirm"> <img src="images/icons/delete.png" alt="Delete" border="0" /></a></td>
			<?php echo smarty_function_assign(array('var' => 'deptid','value' => $this->_tpl_vars['currdata']['departmentId'],'scope' => 'global'), $this);?>

			
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

<div class="popup" id="div_view" style="display:none; ">
  <div id='upload_csv' style="display:none;" >
    <div style="vertical-align:middle; " >
      <form method="post" name="frm_csv_upload" enctype="multipart/form-data" >
        Select file :
        <input type="file" name="csv" accept="application/msexcel" />
        <input type="submit" name="csvupload" value="Submit" class="button_text"/>
        <input type="hidden" value="adduser" />
       
      </form>
    </div>
  </div>
  <div style="margin-left:500px;" onclick="document.getElementById('div_view').style.display='none'"><img src="images/icons/delete.png" alt="Close" style="cursor:pointer;" title="Close" /></div>
  <div id="div_depart" style="text-decoration:none;padding:10px;"> &nbsp; </div>
</div>