<?php /* Smarty version 2.6.0, created on 2013-12-25 23:53:31
         compiled from settingView.tpl */ ?>
<?php echo '
<link rel="stylesheet" href="js/confirm/jquery-ui.css" type="text/css">
<script src="js/confirm/avg_ls_dom.js" type="text/javascript"></script>
<script src="js/confirm/jquery-ui.js"></script>
<script src="js/confirm/jquery_002.js"></script>
<script type="text/javascript">
	$(function() {
		$(".confirm").easyconfirm();
		$("#alert").click(function() {
		
			document.frmAdd.submit();
		});		
	});
	</script>
'; ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0" >
<tr>
  <td width="32"><img src="images/icons/tools.png" alt="<?php echo $this->_tpl_vars['manager']; ?>
" class="header_home_img" /></td>
  <td width="10">&nbsp;</td>
  <td class="header_home"> Manage&nbsp;<?php echo $this->_tpl_vars['manager']; ?>
</td>  
</tr>
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tablesorter" style="border:1px solid #c4c4c4;padding-left:8px;padding-bottom:5px;" >
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="menu_bar_bg">
    	<span style="float:left;">Setting View</span>
        <span class="menu_msg"><?php if ($this->_tpl_vars['var_msg']): ?>(<?php echo $this->_tpl_vars['var_msg']; ?>
)<?php endif; ?></span>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="border_bg_color">
  <tr>
    <td>
    
    <table class="tablesorter" border="0" cellpadding="0" cellspacing="1">    
    <form name="frmAdd" id="frmAdd" method="post">
    <input type="hidden" name="hid_count" value="<?php echo $this->_tpl_vars['count_db_res']; ?>
" />
    <thead>
      <tr>
        <th width="20%">Setting For</th>
        <th width="20%">Setting Values</th>
      </tr>
    </thead>
    <tbody>  
      <?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>
      <tr>   
        <td><?php echo $this->_tpl_vars['currdata']['vDesc']; ?>
<input type="hidden" name="hid_vName[]" id="vName" value="<?php echo $this->_tpl_vars['currdata']['vName']; ?>
" /></td>
        <td><input type="text" name="vValue[]" id="vValue" value="<?php echo $this->_tpl_vars['currdata']['vValue']; ?>
" class="validate[required] input_text" size="100" /></td>               
      </tr>
      <?php endforeach; unset($_from); endif; ?>      
  </tbody>
  <tbody>
  <tr>
  	<td>&nbsp;</td>
    <td><input type="submit" name="btnUpdate" id="alert" value="Update" class="confirm button_text" /></td>
  </tr>  
  </tbody> 
  </form> 
  </table>
  
  	</td>
  </tr>
  <tr>
  	<td bgcolor="#e6EEEE"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-top:1px solid #c4c4c4;">
          <tr>
            <td align="right" class="action_menu">&nbsp;</td>
          </tr>	
          </table></td>
  		</tr>
	</table>
	</td>
  </tr>
</table></td>
  </tr>
</table>