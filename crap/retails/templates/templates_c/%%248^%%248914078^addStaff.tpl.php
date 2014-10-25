<?php /* Smarty version 2.6.0, created on 2013-07-03 15:24:55
         compiled from addStaff.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'addStaff.tpl', 270, false),array('modifier', 'urldecode', 'addStaff.tpl', 279, false),)), $this); ?>
<div style="margin-left: 17px; margin-top: 8px; width: 700px; color:#4F5D75;">

 <div style="width: 855px; margin-left:115px">
 
	 <div class="tourNavLeftTop">
		<div class="tourNavRightTop"></div>
	</div>
	<div class="tourNavBody">
		<div class="tourNavRightBottom">
		
			<div class="tourNavItem"><a href="plans.php">Choose plan</a></div>
			<div class="tourNavItem"><a href="#">Create account</a></div>
			<div class="tourNavItem"><a href="addLocation.php">Office location</a></div>
			<div class="tourNavItem"><a href="createGroups.php">Create Groups</a></div>
			<div class="tourNavItemActiveLeft">
				<div class="tourNavItemActiveRight">Step 4 - Add Staff</div>
			</div>
			<div class="tourNavItemNonLink">Configure Scenario</div>
			
		</div>
	</div>
	<p></p>
	<div class="regtopleft">
		<div class="regtopright">
			<div class="planCreateAccStep4a">
				<div class="signupStepTxt1">Add Staff</div><?php if ($this->_tpl_vars['checkGroupsStaff'] == true): ?><div style="float:right; width:100px;"><a href="configScenario.php" style="font-size: 18px; text-decoration: underline;">Next&raquo;</a></div><?php endif; ?>
			</div>
		</div>
	<div class="signupStepTxt3b"  style="min-height:120px !important;">
		
        <div style="width: 700px; margin-left:-20px;"> 
                 
       <?php echo '
<script type="text/javascript">
		function handleSelect(elm)
		{
			if(elm.value == "addsuperior")
			{
				document.getElementById(\'div_depart\').innerHTML = document.getElementById(\'div_add_superior\').innerHTML;
				document.getElementById(\'div_view\').style.display = "block";
			}
		}
		function handledepartment(deptid,checkdepID="")
		{
			var deptid = deptid.value;
			//document.getElementById(\'dept_id\').value = deptid;
			$("#dept_id").val(deptid);
			
			if(checkdepID!="")
				deptid=document.getElementById(\'department\').value;
			
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
						// alert(response);
						if(response!=0)
						{
							document.getElementById(\'superiorname\').innerHTML = response;
						}
						else
						{
							
							document.getElementById(\'superiorname\').innerHTML = " <option>Select Superior:</option><option value=\'addsuperior\' style=\'color:#00F;\'>Add Superior</option>";
						}
					}
				}
					var url="selectsuperior.php";
					url=url+"?departid="+deptid;
					httpxml.onreadystatechange=stateck;
					httpxml.open("GET",url,true);
					httpxml.send(null);
			}
			//return true;
		</script>
 
        <script type="text/javascript" >
		function deptvalidation()
		{
			var j = document.getElementById(\'department\').value;
			if(j==0)
			{
				alert(\'Please select group\');
				focus();
				return false;
			}
		}
		</script>
'; ?>

<?php echo $this->_tpl_vars['var_msg']; ?>

<?php echo $this->_tpl_vars['msg']; ?>

<table  width="100%" cellspacing="0" cellpadding="0" style="padding:8px;">
        <tr>
          <td style="padding:10px;"><form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" 
          onsubmit="return deptvalidation();" >
              <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
              <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
              <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
              <table width="90%" border="0" cellspacing="0" cellpadding="5">
                 <tr><td width="25%"><strong>Import Staff</strong></td>
                 <td width="14%"><a title="Upload staff from an excel file" href="#" onClick="show_popup('upload_dept_csv');" ><img src="images/Excel.png" height="20" width="20" style="padding-top:2px;" border="none"  /></a></td>
                 <td width="59%">You can easily import all your staff and their associated departments from a spread sheet. Click here to see an example of the format.  Download file - <a href="download.php?download_file=examplestaff.xls" target="_blank">example.xls </a></td>
                 <td width="2%"></td>
                 </tr>

				<tr >
                  <td><strong>Group Name:<sup style="color:#F03;">*</sup></strong></td>
                  <td colspan="2"><select name="department" id="department" class="validate[required] select-one select_cmb"> <!--onchange="javascript:handledepartment(this);"-->
                      <option value="0">Select Group</option>
                      <?php if (count($_from = (array)$this->_tpl_vars['data_department'])):
    foreach ($_from as $this->_tpl_vars['department_all']):
?>
                      <option value="<?php echo $this->_tpl_vars['department_all']['departmentId']; ?>
" <?php if ($this->_tpl_vars['department_all']['departmentId'] == $this->_tpl_vars['deptId']): ?> selected="selected" <?php endif; ?> >
                      <?php echo $this->_tpl_vars['department_all']['locationname']; ?>
 &raquo; <?php echo $this->_tpl_vars['department_all']['departmentname']; ?>

                      </option>
                      <?php endforeach; unset($_from); endif; ?>
                    </select></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><strong>Name:<sup style="color:#F03;">*</sup></strong></td>
                  <td colspan="2"><input type="text" class = "validate[required] input_login" name="name" id="name" value="<?php echo $this->_tpl_vars['name']; ?>
" size="45"/></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><strong>Surname:<sup style="color:#F03;">*</sup></strong></td>
                  <td colspan="2"><input type="text" class = "validate[required] input_login" name="surname" id="surname" value="<?php echo $this->_tpl_vars['surname']; ?>
" size="45" /></td>
                  <td>&nbsp;</td>
                </tr>
              
                <tr>
                  <td><strong>Email:<sup style="color:#F03;">*</sup></strong></td>
                  <td colspan="2"><input type="text" class = "validate[required,custom[email]] input_login" name="email" id="email" value="<?php echo $this->_tpl_vars['email']; ?>
" size="45"  onblur="checkemail(this.value)" /></td>
                  <td><span id="msg">&nbsp;</span></td>
                </tr>
				<?php if ($this->_tpl_vars['action'] == 'Update'): ?>
                <tr>
                  <td><strong>Password:<sup style="color:#F03;">*</sup></strong></td>
                  <td colspan="2"><input type="password" class = "validate[required] input_login" name="password" id="password" value="<?php echo $this->_tpl_vars['password']; ?>
" size="45" /></td>
                  <td>&nbsp;</td>
                </tr>
				<?php endif; ?>
                <tr>
                  <td><strong>Phone:<sup style="color:#F03;">*</sup></strong></td>
                  <td colspan="2"><input type="text" class = "validate[required,custom[phone]] input_login" name="phone" id="phone" value="<?php echo $this->_tpl_vars['phone']; ?>
" size="45" /></td>
                  <td>&nbsp;</td>
                </tr>
		 <tr>
                  <td><strong>User Role :</strong></td>
                  <td colspan="2"><select name="userrole" class="select_cmb">
                      <?php if ($this->_tpl_vars['userrole'] == '1'): ?>
                      <option  value="1" selected="selected">Admin</option>
                      <option  value="0">User</option>
                      <?php elseif ($this->_tpl_vars['userrole'] == '0'): ?>
                      <option  value="0"selected="selected">User</option>
                      <option  value="1" >Admin</option>
                      <?php else: ?>
                      <option  value="1">Admin</option>
                      <option  value="0">User</option>
                      <?php endif; ?>
                    </select></td>
                  <td>&nbsp;</td>
                </tr>
                <?php if ($this->_tpl_vars['action'] == 'Update'): ?>
                <tr>
                  <td><strong>Status :</strong></td>
                  <td colspan="2"><select name="eStatus" class="select_cmb">
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
                    </select></td>
                  <td>&nbsp;</td>
                </tr>
		
                <?php endif; ?>
                <tr>
                  <td colspan="4">
                    <input type="submit" id="submit" name="add" class="button_text" value="<?php if ($this->_tpl_vars['update_status'] != ""): ?>Update<?php else: ?>Submit<?php endif; ?>">                   </tr>
              </table>
            </form></td>
        </tr>
      </table></td>
  </tr>
</table>

<div id="div_superior" align="center" style="display:none;">
  <div align='center' style=' margin-left:50px; margin-top:-180px; height:300px;'><img src='images/ajax_loader_circle.gif' alt='Loading...' border='0' /></div>
</div>
<div class="popupsuperior" id="div_view" style="display:none;">
	<div style="background-color:#094D7A; height:20px; color:#FFF; font-weight:bold; text-align:left; padding-left:5px;">Add Superior
  <div style="margin-left:490px;  margin-top:-19px;" onClick="document.getElementById('div_view').style.display='none'">
  <img src="images/icons/delete.png" alt="Close" style="margin-right:1px;" /></div>
  </div>
  <div id="div_depart" style="text-decoration:none;  margin-top:10px;"> &nbsp; </div>
</div>

      
       </div>
		
	  </div>
	  
	  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="border_bg_color">
              <tr>
                <td colspan="2" ><form name="frmdept" method="post" action="<?php echo $this->_tpl_vars['page_name']; ?>
" >
                    <table  width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" class="select_cmb1" >Select Group :
                          <select name="seldepartment" class="select_cmb" onChange="frmdept.submit();">
                            <?php if ($this->_tpl_vars['tdata'] == ''): ?>
                            <option value=""  >-- Select Group --</option>
                            <?php endif; ?>
                            <?php if (count($_from = (array)$this->_tpl_vars['tdata'])):
    foreach ($_from as $this->_tpl_vars['trdata']):
?>
                            <option value="<?php echo $this->_tpl_vars['trdata']['departmentId']; ?>
" <?php if ($this->_tpl_vars['seldepartment'] == $this->_tpl_vars['trdata']['departmentId']): ?> selected="selected" <?php endif; ?>>
                            <?php echo $this->_tpl_vars['trdata']['locationname']; ?>
 &raquo; <?php echo $this->_tpl_vars['trdata']['departmentName']; ?>

                            </option>
                            <?php endforeach; unset($_from); endif; ?>
                          </select></td>
                      </tr>
                    </table>
                  </form></td>
              </tr>
              <tr>
                <td><table border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF" class="tablesorter" id="tablesorter-demo"  style="background-color:#E6EEEE; color:#385BBF; font-family:Tahoma,Arial,Helvetica,sans-serif; font-size:11px;" rel="<?php echo $this->_tpl_vars['RECLIMIT']; ?>
">
                   
                    <tbody>
                   
                       <tr>
                        <th width="25%" height="30" align="left" bgcolor="#FFFFFF" style=" padding:5px 15px;">Name</th>
                        <th width="25%" align="left" bgcolor="#FFFFFF" style=" padding:5px 15px;">Surname</th>
                        <th width="15%" align="center" bgcolor="#FFFFFF">Record Status</th>
                        <th width="20%" bgcolor="#FFFFFF" style="text-align:center;">Actions</th>
                      </tr>
                     <?php if ($this->_tpl_vars['count_db_res'] > 0): ?>
                      <?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>
					  
                     <tr>
                      
                        <td style="background:#FFFFFF !important; padding:5px 15px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['name'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</td>
                        <td style="background:#FFFFFF !important; padding:5px 15px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['surname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</td>
                        <td align="center" style="background:#FFFFFF !important;" id="status_<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
"><?php if ($this->_tpl_vars['currdata']['eStatus'] == '1'): ?>
                          <img src="images/icons/active.gif" title="Active" alt="Active" />
                          <?php elseif ($this->_tpl_vars['currdata']['eStatus'] == '0'): ?>
                          <img src="images/icons/inactive.gif" title="Inactive" alt="Inactive" />
                          <?php endif; ?>                        </td>
                         
                        <td align="center" style="background:#FFFFFF !important;">
                       <a title="Update User" href="<?php echo $this->_tpl_vars['add_file']; ?>
?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['companyuserId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
&action=Update&page=<?php echo $this->_tpl_vars['curr_page']; ?>
"><img src="images/icons/edit1.png" alt="Edit" border="0" /></a>&nbsp;<span style="vertical-align:top; color:#000;">|</span>&nbsp; <a title="Delete User" href="<?php echo $this->_tpl_vars['view_file']; ?>
?id=<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
&action=Delete" class="confirm"> <img src="images/icons/delete.png" alt="Delete" border="0" /></a> <br/></td>
                  </tr>
                      <span style="display:none;"><?php echo $this->_tpl_vars['totdata']++; ?>
</span>
                      <?php endforeach; unset($_from); endif; ?>
                      <?php else: ?>
                      <tr>
                        <td colspan="5" align="center" class="error_msg"><font color="#FF0000">Records not available.</font></td>
                      </tr>
                      <?php endif; ?>
                     
                      </tbody>
                    
                  </table></td>
              </tr>
              <tr>
                <td  bgcolor="#e6EEEE"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-top:1px solid #c4c4c4;">
                    <tr>
                      <td><?php if ($this->_tpl_vars['arr_page_vars']['no_of_pages'] > 1): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <?php endif; ?></td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0"  style="border-top:1px solid #c4c4c4;">
                          <tr>
                            <td align="right" class="action_menu">
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
            </table>
	  
	  <div class="regbottomleft">
		<div class="regbottomright"></div>
	</div>
	
	
	</div>
	
	
	
	
</div>	
</div>
<div class="popup" id="div_view" style="display:none; width:300px; ">
 
  <div id='upload_dept_csv' style="display:none;" >
    <div style="padding:10px;" >
      <form method="post" name="frm_csv_upload" enctype="multipart/form-data" >
	  	 Select Group :
		 <select name="csvdeptid" id="csvdeptid" class="validate[required] select-one select_cmb" onChange="javascript:handledepartment(this);">
                      <?php if (count($_from = (array)$this->_tpl_vars['data_department'])):
    foreach ($_from as $this->_tpl_vars['department_all']):
?>
                      <option value="<?php echo $this->_tpl_vars['department_all']['departmentId']; ?>
" <?php if ($this->_tpl_vars['department_all']['departmentId'] == $this->_tpl_vars['deptId']): ?> selected="selected" <?php endif; ?> >
                      <?php echo $this->_tpl_vars['department_all']['locationname']; ?>
 &raquo; <?php echo $this->_tpl_vars['department_all']['departmentname']; ?>
 
                      </option>
                      <?php endforeach; unset($_from); endif; ?>
                    </select>
					<br>
        Select file :
        <input type="file" name="csv" />
        <input type="submit" name="csvdeptupload" value="Submit" class="button_text"/>
        <br />
       
      </form>
    </div>
  </div>
  <div style="margin-left:500px;" onClick="document.getElementById('div_view').style.display='none'"><img src="images/icons/delete.png" alt="Close" style="cursor:pointer;" title="Close" /></div>
  <div id="div_depart" style="text-decoration:none;padding:10px;"> &nbsp; </div>
</div>