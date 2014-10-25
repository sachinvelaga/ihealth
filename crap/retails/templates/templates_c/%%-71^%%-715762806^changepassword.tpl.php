<?php /* Smarty version 2.6.0, created on 2013-11-20 15:33:45
         compiled from changepassword.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'changepassword.tpl', 7, false),)), $this); ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0" style=" background-color:#FFF !important; padding-bottom: 20px; margin-bottom: 215px;"  class="table2">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="menu_bar_bg">
    	<span style="float:left;font-size:14px;font-weight:bold;padding-left:10px; display: none;"> <?php echo ((is_array($_tmp=$this->_tpl_vars['manager'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'Manager', '') : smarty_modifier_replace($_tmp, 'Manager', '')); ?>
</span>
        <span class="menu_msg" s><?php if ($this->_tpl_vars['var_msg']): ?>(<?php echo $this->_tpl_vars['var_msg']; ?>
)<?php endif; ?></span>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">
    <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data">
	<input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
    <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
	<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
    <table width="100%" border="0" cellspacing="0" cellpadding="10">    	
      <tr>
        <td style=" background-color:#FFF !important;" >
        <div class="space">
        <div class="changed_1" style="margin-left:100px !important;">
            <div class="space_ta_1">
                <label>Current Password :</label>
                <div class="current_password1">
                <input type="password" class="validate[required] input_text" name="password" id="password" maxlength="45" size="45" >
                </div>
            </div>
            
             <div class="space_ta_1">
                <label>New Password :</label>
                <div class="current_password1">
                <input type="password" class="valideate[required] input_text" name="newpwd" id="newpwd" size="45" />
                </div>
            </div>
            
             <div class="space_ta_1">
                <label>Confirm Password :</label>
                <div class="current_password1">
                <input type="password" class="validate[required] input_text" name="confirmpwd" id="confirmpwd" maxlength="45" size="45">
                </div>
            </div>
            </div>
           <?php if ($this->_tpl_vars['action'] == 'Change'): ?>
					<input type="submit" id="submit" name="update" class="button_text" value="Update" style="width: 100px !important; height:30px !important;margin-left:200px !important;">
				<?php else: ?>
					<input type="submit" id="submit" name="add" class="button_text" value="Submit" style="width: 100px !important; height:30px !important;margin-left:200px !important;">
					<input type="button" value="Reset" class="button_text" onclick="reset();return false;" style="width: 100px !important; height:30px !important;">
				<?php endif; ?>
					<input type="button" value="Cancel" id="cancel" class="button_text" onclick="history.back(-1);return false;" style="width: 100px !important; height:30px !important;">	
                    </div>
        </td>
      </tr>     
    </table>
    </form> 
	</td>
  </tr>
</table></td>
  </tr>
</table>