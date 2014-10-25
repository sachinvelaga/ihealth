<?php /* Smarty version 2.6.0, created on 2013-09-30 15:47:09
         compiled from companyuserAdd.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'companyuserAdd.tpl', 97, false),)), $this); ?>
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
		function handledepartment(deptid="",checkdepID="")
		{
			var deptid = deptid.value;
			//document.getElementById(\'dept_id\').value = deptid;
			$("#dept_id").val(deptid);
			
			if(checkdepID!="")
				deptid=document.getElementById(\'department\').value;

			
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
						//alert(response);
						if(response!=0)
						{
							document.getElementById(\'filtercontact\').style.display = "block";
							document.getElementById(\'superiorname\').innerHTML = response;
						}
						else
						{
							
							document.getElementById(\'superiorname\').innerHTML = " <option>Select Superior:</option><option value=\'addsuperior\' style=\'color:#00F;\'>Add Superior</option>";
						}
					}
				}
					var url="selectsuperior.php";
					url=url+"?departid="+deptid+"&fltVal="+filterVal;
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

	<div class="regtopleft">
		<div class="regtopright">
			<div class="planCreateAccStepSimple">
				<div class="signupStepTxt1"> <?php if ($this->_tpl_vars['action'] == 'Update'): ?>
            Edit
            <?php else: ?>
            Add
            <?php endif; ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['manager'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'Manager', '') : smarty_modifier_replace($_tmp, 'Manager', '')); ?>

             &nbsp; <span class="menu_msg" >
            <?php if ($this->_tpl_vars['msg']): ?>
            (
            <?php echo $this->_tpl_vars['msg']; ?>
 
            )
            <?php endif; ?>
            </span></div>
			</div>
		</div>
		<div class="signupStepTxt3b" style="min-height:200px;">
          <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" 
          onsubmit="return deptvalidation();" >
              <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
              <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
              <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
			  
              <div style="width: 900px;">
               <div style="width: 450px; float:left;"> 
				  
				  <div class="signuptext">Group Name:<sup style="color:#F03;">*</sup></div>
                   <div class="editprofile"><select name="department" id="department" class="validate[required] select-one select_cmb" ><!--onchange="javascript:handledepartment(this);"-->
                      <option value="0">Select Group</option>
                      <?php if (count($_from = (array)$this->_tpl_vars['data_department'])):
    foreach ($_from as $this->_tpl_vars['department_all']):
?>
                      <?php if ($this->_tpl_vars['department_all']['eStatus'] == 1): ?>
	                      <option value="<?php echo $this->_tpl_vars['department_all']['departmentId']; ?>
" <?php if ($this->_tpl_vars['department_all']['departmentId'] == $this->_tpl_vars['deptId']): ?> selected="selected" <?php endif; ?> >
	                      <?php echo $this->_tpl_vars['department_all']['locationname']; ?>
 &raquo; <?php echo $this->_tpl_vars['department_all']['departmentname']; ?>
 
	                      </option>
                      <?php endif; ?>
                      <?php endforeach; unset($_from); endif; ?>
                    </select></div>
				  <div class="signuptext">Name:<sup style="color:#F03;">*</sup></div>
                    <div class="editprofile"><input type="text" class = "validate[required] input_login" name="name" id="name" value="<?php echo $this->_tpl_vars['name']; ?>
" size="45"/></div>
					
					<div class="signuptext">Surname:<sup style="color:#F03;">*</sup></div>
					
					<div class="editprofile"><input type="text" class = "validate[required] input_login" name="surname" id="surname" value="<?php echo $this->_tpl_vars['surname']; ?>
" size="45" /></div>
					
					<!--<div id="superior">
					
					<div class="signuptext">Superior Name :</div>
					
					<div class="editprofile" style="float:left;">
					<div id="filtercontact" style="margin:5px 0px; <?php if ($this->_tpl_vars['id'] == ""): ?> display:none;<?php endif; ?>">Filter Superior Name:<br><input type="text" name="filtercontacts" id="filtercontacts" value=""><a href="javascript:handledepartment('',1)"  style="background:#69B4DE; color: #000000; margin-left: 10px; padding: 4px 15px;">Search</a></div><select name="superiorname" id="superiorname" class="select_cmb" onchange="javascript:handleSelect(this)">
                        <option>Select Name:</option>
                        <?php if (count($_from = (array)$this->_tpl_vars['data_superior'])):
    foreach ($_from as $this->_tpl_vars['companyuser_all']):
?>
                        <option value="<?php echo $this->_tpl_vars['companyuser_all']['companyuserId']; ?>
" <?php if ($this->_tpl_vars['companyuser_all']['companyuserId'] == $this->_tpl_vars['superiorname']): ?> selected="selected" <?php endif; ?> >
                        <?php echo $this->_tpl_vars['companyuser_all']['name']; ?>

                        </option>
                        <?php endforeach; unset($_from); endif; ?>
                        
                      </select></div>
                </div>-->
				</div>
				
				 <div style="width: 450px; float:left;"> 
				<div class="signuptext">Email:<sup style="color:#F03;">*</sup></div>
					
					<div class="editprofile"><input type="text" class = "validate[required,custom[email]] input_login" name="email" id="email" value="<?php echo $this->_tpl_vars['email']; ?>
" size="45" /><span id="msg">&nbsp;</span></div>
				<?php if ($this->_tpl_vars['action'] == 'Update'): ?>
               <div class="signuptext">Password:<sup style="color:#F03;">*</sup></div>
					
					<div class="editprofile"><input type="password" class = "validate[required] input_login" name="password" id="password" value="<?php echo $this->_tpl_vars['password']; ?>
" size="45" /></div>
				<?php endif; ?>
                <div class="signuptext">Phone:<sup style="color:#F03;">*</sup></div>
                  <div class="editprofile"><input type="text" class = "validate[required,custom[phone]] input_login" name="phone" id="phone" value="<?php echo $this->_tpl_vars['phone']; ?>
" size="45" /></div>
                   <div class="signuptext">User Role :</div>
                  <div class="editprofile"><select name="userrole" class="select_cmb">
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
                    </select></div>
                <?php if ($this->_tpl_vars['action'] == 'Update'): ?>
               
                   <div class="signuptext">Status :</div>
                  <div class="editprofile"><select name="eStatus" class="select_cmb">
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
					</div>
		
                <?php endif; ?>
				</div>
                 <div class="editprofilebutton"><?php if ($this->_tpl_vars['action'] == 'Update'): ?>
                    <input type="submit" id="submit" name="update" class="button_text" value="Save">
                    <?php else: ?>
                    <input type="submit" id="submit" name="add" class="button_text" value="Submit">
                    <input type="button" value="Reset" class="button_text" onclick="reset();return false;">
                    <?php endif; ?>
                    <input type="button" value="Cancel" class="button_text" onclick="history.back(-1);return false;"></td>
              </div>
            </form>
			</div>
	</div>
	<div class="regbottomleft">
		<div class="regbottomright"></div>
	</div>
</div>
<!--<div id="div_add_superior" style="display:none;">
  <?php echo '
  <script type="text/javascript">
 	function checksuperiorform(form)
	{
		 var username = encodeURI(form.superior_name.value);
		 var usersurname = encodeURI(form.superior_surname.value);
		 var useremail = encodeURI(form.superior_email.value);
		 var userpassword = encodeURI(form.superior_password.value);
		 var userphone = encodeURI(form.superior_phone.value);
		 var add = form.addsuperior.value;
		 var deptid = encodeURI(form.dept_id.value);
		
		 if(deptid == "")
		 {
			 deptid = $("#dept_id").val();
			 
		 }
		var ck_email = /^([\\w-]+(?:\\.[\\w-]+)*)@((?:[\\w-]+\\.)*\\w[\\w-]{0,66})\\.([a-z]{2,6}(?:\\.[a-z]{2})?)$/i; 
		var email = document.getElementById(\'superior_email\');
		if(username<1)
		{
			alert("Name must be filled out");
			document.getElementById(\'superior_name\').focus();
			return false;
		}
		if(usersurname<1)
		{
			alert("Surname Must be filled out");
			document.getElementById(\'superior_surname\').focus();
			return false;
		}
		if(useremail<1)
		{
			alert("Email Must be filled out");
			document.getElementById(\'superior_email\').focus();
			return false;
		}
		if(!useremail.match(ck_email))
		{
			alert("Email address not valid");
			document.getElementById(\'superior_email\').focus();
			return false;
		}
		if(userpassword<1)
		{
			alert("Password Must be filled out");
			document.getElementById(\'superior_password\').focus();
			return false;
		}
		if(userphone<1)
		{
			alert("Phone Must be filled out");
			document.getElementById(\'superior_phone\').focus();
			return false;
		}
		if(isNaN(userphone))
		{
			alert("Phone Must be in Numeric");
			document.getElementById(\'superior_phone\').focus();
			return false;
		}
		
			var httpxml;
			document.getElementById(\'div_superior\').style.display = "block";
			
				try
				{
					// Firefox, Opera 8.0+, Safari
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
			var url=\'addsuperior.php?name=\'+username+\'&surname=\'+usersurname+\'&email=\'+useremail+\'&password=\'+userpassword+\'&phone=\'+userphone+\'&deptid=\'+deptid+\'&submit=\'+add;
			httpxml.open(\'GET\',url,true);
			httpxml.onreadystatechange=function()
  			{
  				if (httpxml.readyState==4 && httpxml.status==200)
    			{
					var response=httpxml.responseText
					
						if(response!=0)
						{
							//document.getElementById(\'div_view\').style.display = "block";
							if(response == 2)
							{
								alert("Email Already Exist");
								document.getElementById(\'div_view\').style.display = "block";
								document.getElementById(\'superior_email\').focus();
							}
							else
							{
								document.getElementById(\'superiorname\').innerHTML = response;
							}
						}
						else
						{
							alert("Superior Name Not Added");
						}
					}
					else
					{
						document.getElementById(\'div_view\').style.display = "none";
						document.getElementById(\'div_superior\').style.display = "none";
					}
			}
			httpxml.send();
		return true;	
	}
 </script>
  '; ?>

  <form name="frmAdd" id = "frmAdd" method="post">
    <input type="hidden" name="deptid" id="dept_id" value="<?php echo $this->_tpl_vars['deptId']; ?>
" />
    <input type="hidden" name="hid" value="0" />
    <table>
      <tr>
        <td>Name:<sup style="color:#F03;">*</sup></td>
        <td><input type="text" class = "input_login" name="superior_name" id="superior_name" size="45"/></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Surname:<sup style="color:#F03;">*</sup></td>
        <td><input type="text" class = "input_login" name="superior_surname" id="superior_surname" size="45" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Email:<sup style="color:#F03;">*</sup></td>
        <td><input type="text" class = "input_login" name="superior_email" id="superior_email" size="45"  /></td>
        <td><span id="msg">&nbsp;</span></td>
      </tr>
      <tr>
        <td>Password:<sup style="color:#F03;">*</sup></td>
        <td><input type="password" class = "input_login" name="superior_password" id="superior_password" size="45" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Phone:<sup style="color:#F03;">*</sup></td>
        <td><input type="text" class = "input_login" name="superior_phone" id="superior_phone" size="45" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><input type="button" id="submit" name="addsuperior" class="button_text" value="Submit" onclick="checksuperiorform(this.form);">
          <input type="button" value="Reset" class="button_text" onclick="reset();return false;">
         
      </tr>
    </table>
  </form>
</div>
<div id="div_superior" align="center" style="display:none;">
  <div align='center' style=' margin-left:50px; margin-top:-180px; height:300px;'><img src='images/ajax_loader_circle.gif' alt='Loading...' border='0' /></div>
</div>
<div class="popupsuperior" id="div_view" style="display:none;">
	<div style="background-color:#094D7A; height:20px; color:#FFF; font-weight:bold; text-align:left; padding-left:5px;">Add Superior
  <div style="margin-left:490px;  margin-top:-19px;" onclick="document.getElementById('div_view').style.display='none'">
  <img src="images/icons/delete.png" alt="Close" style="margin-right:1px;" /></div>
  </div>
  <div id="div_depart" style="text-decoration:none;  margin-top:10px;"> &nbsp; </div>
</div>-->