<?php /* Smarty version 2.6.0, created on 2013-07-03 15:25:28
         compiled from configScenario.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ckeditor', 'configScenario.tpl', 142, false),array('modifier', 'urldecode', 'configScenario.tpl', 266, false),)), $this); ?>
<?php echo ' 
<script type="text/javascript">

 	function checkassocdepartment()

	{
		if (document.frmAdd.elements["department[]"].selectedIndex == -1) {
				alert("Please select atleast one department.");
				$(\'#selectdept\').focus();
				return false;
		}

		if (document.frmAdd.elements["selectedcontacts[]"].selectedIndex == -1) {
				alert("Please select atleast one contact.");
				$(\'#selectedcontact\').focus();
				return false;
		}

	//return true;

	}

 function Getdepartments()
       {
		   var fld = document.getElementById(\'selectdept\');
			var values = [];
			for (var i = 0; i < fld.options.length; i++) {
			    if (fld.options[i].selected) {
    			    values.push(fld.options[i].value);
				}

			}
			
			var filterVal = document.getElementById(\'filtercontacts\').value;
			
			
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
						document.getElementById(\'filtercontact\').style.display = "block";
						document.getElementById(\'selectedcontact\').innerHTML = "";
						document.getElementById(\'selectedcontact\').innerHTML = response;
					}
				}
				
				var url="selectcontacts.php";
				url = url+"?deptarray="+values+"&fltVal="+filterVal;
				httpxml.onreadystatechange=stateck;
				httpxml.open("GET",url,true);
				httpxml.send(null);

	   }

	   jQuery.validator.addMethod("action_name", function(value, element) { 
		 var textData = editor.getData();
		//alert(textData);
		  if(textData.length>0) return true;

    return false;

}, "No data in editor");
 

</script> 
'; ?>

<div style="margin-left: 17px; margin-top: 8px; width: 700px; color:#4F5D75;">

 <div style="width: 855px; margin-left:105px">
 
	 <div class="tourNavLeftTop">
		<div class="tourNavRightTop"></div>
	</div>
	<div class="tourNavBody">
		<div class="tourNavRightBottom">
		
			<div class="tourNavItem"><a href="plans.php">Choose plan</a></div>
			<div class="tourNavItem"><a href="plans.php">Create account</a></div>
			<div class="tourNavItem"><a href="addLocation.php">Office location</a></div>
			<div class="tourNavItem"><a href="createGroups.php"> Create Groups</a></div>
			<div class="tourNavItem"><a href="addStaff.php">Add Staff</a></div>

			<div class="tourNavItemActiveLeft">
				<div class="tourNavItemActiveRight">Step 5 - Configure Scenario</div>
			</div>
			
		</div>
	</div>
	<p></p>
	<div class="regtopleft">
		<div class="regtopright">
			<div class="planCreateAccStep3">
				<div class="signupStepTxt1">Configure Scenario</div>
			</div>
		</div>
	<div class="signupStepTxt3b"  style="min-height:120px !important;">
		
        <div style="width: 650px;"> 
		<?php if (isset ( $this->_tpl_vars['addScen'] ) && $this->_tpl_vars['addScen'] == 'add'): ?>
		 <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" onsubmit="return chkdate();">
              <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
              <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
              <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
              <table width="100%" border="0" cellspacing="10" cellpadding="0">
                <tr>
                  <td>Scenario Name:<sup style="color:#F03;">*</sup></td>
                  <td><input type="text" class = "validate[required] input_login" name="scenarioname" id="scenarioname" value="<?php echo $this->_tpl_vars['scenarioname']; ?>
" size="45" style="width:590px;"/></td>
                </tr>
                <tr>
                  <td>Action:<sup style="color:#F03;">*</sup></td>
                  <td><?php if ($this->_tpl_vars['ermsg'] != ""): ?><span class="msg" style="color:#F00;"><?php echo $this->_tpl_vars['ermsg']; ?>
</span><br><?php endif;  echo smarty_function_ckeditor(array('InstanceName' => 'action_name','id' => 'action_name','Value' => $this->_tpl_vars['action_name'],'width' => 600,'height' => 200,'toolbar' => 'Basic','class' => 'validate[required]'), $this);?>

				  </td>
                </tr>
<tr>
                  <td>Upload file:</td>
                  <td><input type="file" name="scenarioFile" id="scenarioFile" /></td>
                </tr>
                <tr>
                  <td>Associated Departments:<sup style="color:#F03;">*</sup></td>
                  <td><select name="department[]" id="selectdept" multiple="multiple" class="validate[required]" onclick="Getdepartments();">
                      

                      <?php if (count($_from = (array)$this->_tpl_vars['data_department'])):
    foreach ($_from as $this->_tpl_vars['department_all']):
?>

                      
			 <option value="<?php echo $this->_tpl_vars['department_all']['departmentId']; ?>
" <?php echo $this->_tpl_vars['department_all']['isselected']; ?>
 > <?php echo $this->_tpl_vars['department_all']['locationname']; ?>
 &raquo; <?php echo $this->_tpl_vars['department_all']['departmentname']; ?>
 </option>
                      

                      <?php endforeach; unset($_from); endif; ?> 

                    
                    </select></td>
                </tr>
                <tr>
                  <td></td>
                  <td><span class="msg" style="color:#F00;">To select multiple departments hold CTRL or SHIFT key</span></td>
                </tr>
                <tr>
                  <td>Key Contacts:<sup style="color:#F03;">*</sup></td>
                  <td>
				 <div id="filtercontact" style="margin:5px 0px; display:none;">Filter Key Contacts<br><input type="text" name="filtercontacts" id="filtercontacts" value=""><a href="javascript:Getdepartments()"  style="background:#69B4DE; color: #000000; margin-left: 10px; padding: 4px 15px;">Search</a></div>
				  <select name="selectedcontacts[]" id="selectedcontact" multiple="multiple" class="validate[required]">
                      <option>Select Name:</option>
                      

                      <?php if (count($_from = (array)$this->_tpl_vars['data_user'])):
    foreach ($_from as $this->_tpl_vars['contact_all']):
?>

                      
                      <option value="<?php echo $this->_tpl_vars['contact_all']['companyuserId']; ?>
" <?php echo $this->_tpl_vars['contact_all']['isselected']; ?>
 > <?php echo $this->_tpl_vars['contact_all']['name']; ?>
 </option>
                      

                      <?php endforeach; unset($_from); endif; ?>

                    
                    </select></td>
                </tr>
                <tr>
                  <td></td>
                  <td><span class="msg" style="color:#F00;">To select multiple key contacts hold CTRL or SHIFT key</span></td>
                </tr>
                <?php if ($this->_tpl_vars['addAction'] == 'Update'): ?>
                <tr>
                  <td>Status :</td>
                  <td><select name="eStatus" class="select_cmb">
                      

                      <?php if ($this->_tpl_vars['eStatus'] == '1'): ?>
				<option  value="1" selected="selected">Enable for use</option>
				<option  value="0">Disable</option>
                      <?php elseif ($this->_tpl_vars['eStatus'] == '0'): ?>

				<option  value="1">Enable for use</option>
				<option  value="0" selected="selected">Disable</option>
                       <?php else: ?>
				<option  value="1">Active</option>
				<option  value="0">Inactive</option>
                      
                      <?php endif; ?>

                    
                    </select></td>
                  <td>&nbsp;</td>
                </tr>
                <?php endif; ?>
                <tr>
                  <td colspan="3"><?php if ($this->_tpl_vars['addAction'] == 'Update'): ?>
                    <input type="submit" id="submit" name="update" class="button_text" value="Save">
                    <?php else: ?>
                    <input type="submit" id="submit" name="add" class="button_text" value="Submit">
                    <input type="button" value="Reset" class="button_text" onclick="reset();return false;">
                    <?php endif; ?>
                    <input type="button" value="Cancel" class="button_text" onclick="history.back(-1);return false;"></td>
                </tr>
              </table>
            </form> 
		
		<?php else: ?>	
			
		 <form name="frmlist" id="frmlist" method="post" action="<?php echo $this->_tpl_vars['page_name']; ?>
">
            <table width="100%" border="0" cellspacing="1" cellpadding="1" class="border_bg_color">
		<tr>
			<td colspan="4">
			<?php if ($this->_tpl_vars['var_msg'] != ""): ?><br><?php echo $this->_tpl_vars['var_msg']; ?>
<br><?php endif; ?>
				<p>To help setting up your account we have provided a list of all the common scenarios.</p> <p>You can delete the ones not needed and also add your own by clicking on Add Scenario. Once the list is up to date click on Done.</p>			</td>
		</tr>
			 			<tr height="25">
			 			  <th colspan="4" align="center" bgcolor="#FFFFFF">&nbsp;</th>
 			  </tr>
			 			<tr height="25">
					   <th width="20%" align="center" bgcolor="#FFFFFF"> </th>
                        <th width="45%" colspan="2" bgcolor="#FFFFFF" align="left"><a href="<?php echo $this->_tpl_vars['page_name']; ?>
?addScen=add" title="Click here to add scenario">Add New Scenario </a></th>
						 <th width="25%" bgcolor="#FFFFFF" align="center"><a href="departmentView.php" title="Click here if you have completed your steps.">Next&raquo; </a></th>
                      </tr>    
       				
                      <input type="hidden" name="action" value="Search">
                      <input type="hidden" name="srname" value="">
                      <input type="hidden" name="keyname" value="">
                      <tr height="25">
                        <th colspan="4" align="center" bgcolor="#FFFFFF">&nbsp;</th>
                      </tr>
                      <tr height="25">
					   <th width="20%" align="center" bgcolor="#FFFFFF"> </th>
                        <th width="45%" align="center"  bgcolor="#FFFFFF"> Scenario Name</th>
                        <th width="15%" align="center"  bgcolor="#FFFFFF">Status</th>
                        <th width="25%" align="center" bgcolor="#FFFFFF"> Actions</th>
                      </tr>
                      <?php if ($this->_tpl_vars['count_db_res'] > 0): ?>
                      
                      <?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>
                      <tr>
					  <td  align="center" bgcolor="#FFFFFF"><?php if ($this->_tpl_vars['currdata']['scenicon'] != ""): ?> <img width="45px" src="images/scenarioicons/<?php echo $this->_tpl_vars['currdata']['scenicon']; ?>
 " title="<?php echo $this->_tpl_vars['currdata']['scenarioname']; ?>
" alt="<?php echo $this->_tpl_vars['currdata']['scenarioname']; ?>
" /> <?php endif; ?></td>
                        <td  bgcolor="#FFFFFF"><?php echo $this->_tpl_vars['currdata']['scenarioname']; ?>
</td>
                        <td align="center" bgcolor="#FFFFFF" id="status_<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
"><?php if ($this->_tpl_vars['currdata']['eStatus'] == '1'): ?> <img src="images/icons/active.png" title="Active" alt="Active" /> <?php elseif ($this->_tpl_vars['currdata']['eStatus'] == '0'): ?> <img src="images/icons/inactive.png" title="Inactive" alt="Inactive" /> <?php endif; ?> </td>
                        
                        <td align="center" bgcolor="#FFFFFF"><a  title="Edit Scenario" href="<?php echo $this->_tpl_vars['add_file']; ?>
?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
&aid=<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
&action=Update&page=<?php echo $this->_tpl_vars['curr_page']; ?>
&addScen=add"><img src="images/icons/edit1.png" alt="Edit" border="0" /></a>&nbsp;<span style="vertical-align:top;">|</span>&nbsp;<a title="Delete Scenario" href="<?php echo $this->_tpl_vars['view_file']; ?>
?id=<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
&action=Delete" class="confirm"> <img src="images/icons/delete.png" alt="Delete" border="0" /></a></td>
                      </tr>
                      <?php endforeach; unset($_from); endif; ?>
                      
                      <?php else: ?>
                      <tr>
                        <td align="center" class="error_msg" colspan="7" bgcolor="#FFFFFF"><font color="#FF0000">Records not available.</font></td>
                      </tr>
                      <?php endif; ?>
                     
                      
                      <input  type="hidden" name="no" value="<?php echo $this->_tpl_vars['count_db_res']; ?>
">
                  </table>
         </form>
      <?php endif; ?>
       </div>
		
		</div>
	</div>
	<div class="regbottomleft">
		<div class="regbottomright"></div>
	</div>
	
	
	
</div>	


</div>
