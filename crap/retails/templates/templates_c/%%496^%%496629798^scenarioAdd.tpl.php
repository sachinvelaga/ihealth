<?php /* Smarty version 2.6.0, created on 2013-12-11 01:26:44
         compiled from scenarioAdd.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign', 'scenarioAdd.tpl', 224, false),array('modifier', 'capitalize', 'scenarioAdd.tpl', 231, false),)), $this); ?>
<?php echo ' 
<script type="text/javascript">
$( document ).ready(function() {
$( "#enable_messages" ).click(function() {
	$("#messages").show();
	$("#enable_messages").hide();
	$("#disable_messages").show();
});
});
$( document ).ready(function() {
$( "#disable_messages" ).click(function() {
	$("#messages").hide();
	$("#enable_messages").show();
	$("#disable_messages").hide();
	
});
});
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

<br/>

           <div class="scenario">
           <div class="next" style="margin-right:14px !important;">
		<a href="scenarioView.php">&lsaquo;&lsaquo;&nbsp;BACK</a>
	</div>
           <span>All fields are required</span>
		   <div class="scenario-cnt">

            <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" onSubmit="return chkdate();">
              <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
              <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
              <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
           <div class="scenario-detail">
           
           <label>Scenario Name:</label>
		   <div class="scenario-detail-ta_1">
<input style="width:290px !important;" class = "validate[required] input_login" name="scenarioname" id="scenarioname" value="<?php echo $this->_tpl_vars['scenarioname']; ?>
" type="text">
		   </div>
           </div>
		   <div class="scenario-detail1">
           <label>Associated Deparments:</label>
           <div class="scenario-detail-ta_1">
           <select name="department[]" id="selectdept" multiple="multiple" class="validate[required]" onclick="Getdepartments();" style="width:301px; height:90px !important; float:left;">
                      

                      <?php if (count($_from = (array)$this->_tpl_vars['data_department'])):
    foreach ($_from as $this->_tpl_vars['department_all']):
?>

                      <?php if ($this->_tpl_vars['department_all']['deptStatus'] == 1): ?>
			 <option value="<?php echo $this->_tpl_vars['department_all']['departmentId']; ?>
" <?php echo $this->_tpl_vars['department_all']['isselected']; ?>
 > <?php echo $this->_tpl_vars['department_all']['locationname']; ?>
 &raquo; <?php echo $this->_tpl_vars['department_all']['departmentname']; ?>
 </option>
                      
					  <?php endif; ?>
                      <?php endforeach; unset($_from); endif; ?> 

                    
                    </select>
		   
          <p>To select multiple departments hold CTRL or SHIFT key</p>
		  </div>
           </div>
           <div id="filtercontact" style="display:none;"><br><input type="text" name="filtercontacts" id="filtercontacts" style="display:none;" value=""><a href="javascript:Getdepartments()"  style="background:#69B4DE; color: #000000; margin-left: 10px; padding: 4px 15px; display:none;">Search</a></div>
		   <div class="scenario-detail2">
           <label>Key Contacts</label>
		   <div class="scenario-detail-ta_1">
            <select name="selectedcontacts[]" id="selectedcontact" multiple="multiple" class="validate[required]" style="width:301px; height:90px !important; float:left;" >
                      <option>Select Name:</option>
                      

                      <?php if (count($_from = (array)$this->_tpl_vars['data_user'])):
    foreach ($_from as $this->_tpl_vars['contact_all']):
?>

                      
                      <option value="<?php echo $this->_tpl_vars['contact_all']['companyuserId']; ?>
" <?php echo $this->_tpl_vars['contact_all']['isselected']; ?>
 > <?php echo $this->_tpl_vars['contact_all']['name']; ?>
 </option>
                      

                      <?php endforeach; unset($_from); endif; ?>

                    
                    </select>
           <p>To select multiple departments hold CTRL or SHIFT key</p>
		   </div>
           </div>
		   
           <div class="scenario-detail">
           <label>Action:</label>
		   <div class="scenario-detail-ta_1">
           <textarea name = 'action_name'id='action_name' Value='<?php echo $this->_tpl_vars['page_name']; ?>
' class='validate[required]' cols="7" rows="10" style="height:105px;"></textarea>
           </div>
           </div>
           <div>
          <div style="clear:both">
		  <?php if ($this->_tpl_vars['curr_page']): ?>
          <?php if ($this->_tpl_vars['curr_page'] > 1): ?>
   <span id="disable_messages" style="width:35% !important; padding: 5px 0px 5px !important; margin-left:234px !important; text-align:center !important;  font-size:16px !important;"><a href="javascript:;" >Click Here </a>to hide old messages</span>
          <span id="enable_messages" style="width:35% !important; padding: 5px 0px 5px !important; margin-left:234px !important;text-align:center !important;display:none; font-size:16px !important;"><a href="javascript:;" >Click Here </a>to show old messages</span>
 
          <?php else: ?>
  <span id="disable_messages" style="width:35% !important; padding: 5px 0px 5px !important; margin-left:234px !important; text-align:center !important; display:none; font-size:16px !important;"><a href="javascript:;" >Click Here </a>to hide old messages</span>
          <span id="enable_messages" style="width:35% !important; padding: 5px 0px 5px !important; margin-left:234px !important; text-align:center !important; font-size:16px !important;"><a href="javascript:;" >Click Here </a>to show old messages</span>
           
          <?php endif; ?>
		 
                  </div>
          <div style="<?php if ($this->_tpl_vars['curr_page'] == 1 && $this->_tpl_vars['check'] == 1): ?>display:none; clear:both;<?php endif; ?>" id="messages">
<table width="70%" height="30%" border="0" cellspacing="0" cellpadding="0" style="float:right;">
	<tr>
		<td width="100%">
		<table width="100%" border="0" cellspacing="0" cellpadding="7">

			<tr>
				<td width="100%" class="tbl_brder">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="border_bg_color">
                
					<tr>
                      <tr style="width:20% !important;">
                        <td> 
                                        <?php if ($this->_tpl_vars['arr_page_vars']['no_of_pages'] > 1): ?>
                
                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                
                                        <?php endif; ?></td>
									</tr>
						<td>
						<table id="tablesorter-demo" class="tablesorter"  style="background-color:#E6EEEE; color:#385BBF; font-family:Tahoma,Arial,Helvetica,sans-serif; font-size:5px;" rel="<?php echo $this->_tpl_vars['RECLIMIT']; ?>
" border="0" cellpadding="0" cellspacing="1">
							<tbody>
                          

								<tr class="header-title-bg">
									<th height="35" align="center" width="70%"class="line1"  style="padding-left:15px; text-align: left;">Old Messages</th>
									<th width="30%" align="center"class="line1">Date Added On</th>
								</tr>
                                
								<?php if ($this->_tpl_vars['count_db_res'] > 0): ?>
								<?php echo smarty_function_assign(array('var' => 'totdata','value' => '0'), $this);?>

								<?php if (count($_from = (array)$this->_tpl_vars['incData'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>

								<tr class="<?php if ($this->_tpl_vars['totdata']%2 == 0): ?>list-green-bg1<?php else: ?>list-pink-bg1<?php endif; ?>">
									<td width="70%" style="">
									<p style="padding-left:10px !important; font-weight:bold;">
                               
										<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['message'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>

									</p>
                                    </td>
                                    		<td width="30%" style="">
									<p style="padding-left:10px !important; font-weight:bold;">
                               
										<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['dateAdded'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>

									</p>
                                    </td>
									</tr>
								<?php echo smarty_function_assign(array('var' => 'totdata','value' => $this->_tpl_vars['totdata']+1), $this);?>


								<?php endforeach; unset($_from); endif; ?>

								<?php else: ?>
								<tr>
									<td align="center" class="error_msg" colspan="3"><font color="#FF0000">Records not available.</font></td>
								</tr>
								<?php endif; ?>
							</tbody>

						</table></td>
					</tr>
					<tr>
						<td  bgcolor="#e6EEEE">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-top:5px solid #545453; margin-top: 4px">
					            
							<tr>
								<td>
								<table width="100%" border="0" cellspacing="0" cellpadding="0"  style="border-top:1px solid #c4c4c4;">
									<tr>
										<td align="right" class="action_menu"></td>
									</tr>
								</table></td>
							</tr>
						</table></td>
					</tr>
				</table></td>
			</tr>
		</table></td>
	</tr>
	</td>

	</tr>

</table>
<?php endif; ?>
           </div>
           </div>
             <div class="scenario-detail">
           <label>Upload Scenario Icon:</label>
		   <div class="scenario-detail-ta_1">
           <div class="scenario_ta_file">
           		<input name="scenarioFile" type="file" class="scenario_file_filed"/>
                
           </div>
           <p style=" float:left; margin: 5px 0 0 7px;">Maximum size:1024KB</p>
           </div>
           </div>
           
           <div class="scenario-detail1">
           <div class="company1">
           <?php if ($this->_tpl_vars['action'] == 'Update'): ?>
			<label>Status:</label>
			<select name="eStatus" class="select1_cmb">
                      

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

                    
                    </select>
                      <?php endif; ?>
		</div>
           </div>
            
          <div class="button button001">
          <?php if ($this->_tpl_vars['action'] == 'Update'): ?>
          <div class="submit-1">
  <input type="submit" id="submit" name="update" class="button_text" value="Save" style="width: 100px !important; height:30px !important">
          </div>
          <?php else: ?>
           <div class="submit-1">
       <input type="submit" id="submit" name="add" class="button_text" value="Submit" style="width: 100px !important; height:30px !important">
          </div>
          <?php endif; ?>
          <div class="cancel">
        <input type="button" value="Cancel" id="cancel" style="width: 100px !important; height:30px !important" class="button_text" onClick="history.back(-1);return false;">
          </div>
           </div>
           </div>
         </form>
           </div>
            <p align="center"><a href="#" class="livebox"></a></p>
    