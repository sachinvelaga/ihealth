<?php /* Smarty version 2.6.0, created on 2013-04-18 10:44:22
         compiled from staffRegistraion.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign', 'staffRegistraion.tpl', 151, false),array('modifier', 'capitalize', 'staffRegistraion.tpl', 156, false),)), $this); ?>
<?php echo '
<link rel="stylesheet" href="js/sorting/themes/blue/style.css" type="text/css" media="print, projection, screen" />
<script type="text/javascript" src="js/sorting/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/jlist.js"></script>
<link rel="stylesheet" href="js/confirm/jquery-ui.css" type="text/css">
<script src="js/confirm/avg_ls_dom.js" type="text/javascript"></script>
<script src="js/confirm/jquery-ui.js"></script>
<script src="js/confirm/jquery_002.js"></script>
<script type="text/javascript">
	$(function() {
		$(".confirm").easyconfirm();
		$("#alert").click(function() {
		});		
	}); 
</script>
<script type="text/javascript">
	function changestatus(userid,status)
	{
		var httpxml;
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
			function stateck() 
			{
				if(httpxml.readyState==4)
				{
					var response = httpxml.responseText;
					//alert(response);
					if(response == 1)
					{
						document.getElementById(\'status_\'+userid).innerHTML = "<img src=\'images/icons/active.gif\' />";
					}
					else
					{
						document.getElementById(\'status_\'+userid).innerHTML = "<img src=\'images/icons/inactive.gif\' />";
					}
					//window.location.href="companyuserView.php?var_msg="+response;
					
				}  
			}
				var url="updateuserstatus.php";
				url=url+"?did="+userid+"&status="+status;
				httpxml.onreadystatechange=stateck;
				httpxml.open("GET",url,true);
				httpxml.send(null);
		}
</script>  
'; ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr class="list-green-bg">
    <td width="32"><img src="images/icons/tools.png" alt="<?php echo $this->_tpl_vars['manager']; ?>
" class="header_home_img" /></td>
    <td width="10">&nbsp;</td>
    <td class="header_home">View Staff Registrations</td>
  </tr>
</table>
</td>
</tr>
</table>
<div class="breadcrumb"><?php echo $this->_tpl_vars['breadcrumb']; ?>
</div>
<br/> 
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_brder1">
  <tr>
    <td width="100%" ><table width="100%" border="0" cellspacing="0" cellpadding="10">
       <?php if ($this->_tpl_vars['var_msg']): ?>
        <tr>
          <td class="menu_bar_bg" ><span class="menu_msg">
            (
            <?php echo $this->_tpl_vars['var_msg']; ?>
 
            )
            </span></td>
        </tr>
       <?php endif; ?>
        <tr>
          <td width="100%" class="tbl_brder"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="border_bg_color">
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
                            <?php echo $this->_tpl_vars['trdata']['departmentName']; ?>

                            </option>
                            <?php endforeach; unset($_from); endif; ?>
                          </select></td>
                      </tr>
                    </table>
                  </form></td>
              </tr>
              <tr>
                <td><table id="tablesorter-demo" class="tablesorter"  style="background-color:#E6EEEE; color:#385BBF; font-family:Tahoma,Arial,Helvetica,sans-serif; font-size:11px;" rel="<?php echo $this->_tpl_vars['RECLIMIT']; ?>
" border="0" cellpadding="0" cellspacing="1">
                    <thead>
                      <tr>
                        <th align="right" width="20%"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <form name="frmsearch" method="post" action="<?php echo $this->_tpl_vars['page_name']; ?>
" >
                              <input type="hidden" name="action" value="Search">
                              <input type="hidden" name="srname" value="">
                              <input type="hidden" name="option" value="name"  />
                              <input type="hidden" name="keyname" value="">
                              <input type="hidden" name="department_id" value="<?php echo $this->_tpl_vars['seldepartment']; ?>
" />
                              <tr>
                                <td class="search_menu"></td>
                                <td><input name="keyword" type="text" class="input_text" size="28" value="<?php echo $this->_tpl_vars['keyword']; ?>
" /></td>
                                <td width="32"><input title="Search" name="Search" type="image" src="images/icons/search.jpg" alt="Search" onClick="return valid()" /></td>
                              </tr>
                            </form>
                          </table>
                        </th>
                        <th colspan="4" style="text-align:right; padding-right:20px;"><a href="companyuserAdd.php" title="Add User">Add Staff</a></th>
                        
                     </tr>
                    </thead>
                    <tbody>
                    <form name="frmlist" id="frmlist" method="post" action="<?php echo $this->_tpl_vars['page_name']; ?>
">
                      <input type="hidden" name="action" value="Search">
                      <input type="hidden" name="srname" value="">
                      <input type="hidden" name="keyname" value="">
                       <tr class="header-title-bg">
                        <th height="25" width="25%" align="center">Name</th>
                        <th width="25%" align="center">Surname</th>
                        <th width="15%" align="center">Application Activated</th>
                       
                      </tr>
                     <?php if ($this->_tpl_vars['count_db_res'] > 0): ?>
                      <?php echo smarty_function_assign(array('var' => 'totdata','value' => '0'), $this);?>

                      <?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>
					  
                     <tr class="<?php if ($this->_tpl_vars['totdata']%2 == 0): ?>list-green-bg<?php else: ?>list-pink-bg<?php endif; ?>">
                      
                        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['name'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</td>
                        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['surname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</td>
                        <td align="center" id="status_<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
"><?php if ($this->_tpl_vars['currdata']['chngpwdStatus'] == '1'): ?>
                          <img src="images/icons/active.png" title="Active" alt="Active" />
                          <?php elseif ($this->_tpl_vars['currdata']['chngpwdStatus'] == '0'): ?>
                          <img src="images/icons/inactive.png" title="Inactive" alt="Inactive" />
                          <?php endif; ?>
                        </td>
                        
                      </tr>
                      <span style="display:none;"><?php echo $this->_tpl_vars['totdata']++; ?>
</span>
                      <?php endforeach; unset($_from); endif; ?>
                      <?php else: ?>
                      <tr>
                        <td colspan="5" align="center" class="error_msg"><font color="#FF0000">Records not available.</font></td>
                      </tr>
                      <?php endif; ?>
                      <input  type="hidden" name="no" value="<?php echo $this->_tpl_vars['count_db_res']; ?>
">
                    </form>
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
            </table></td>
        </tr>
      </table></td>
   
  </tr>
</table>