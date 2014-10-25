<?php /* Smarty version 2.6.0, created on 2013-09-30 19:28:35
         compiled from locationAdd.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'locationAdd.tpl', 18, false),)), $this); ?>
<table class="tbl_brder"  width="100%" cellspacing="0" cellpadding="0" style="padding:8px;">
  <tr>
    <td>
	<form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data">

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="menu_title"> <?php if ($this->_tpl_vars['action'] == 'Update'): ?>
            
		   Edit
            
            <?php else: ?>
            
		  Add
            
            <?php endif; ?>
            
            <?php echo ((is_array($_tmp=$this->_tpl_vars['manager'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'Manager', '') : smarty_modifier_replace($_tmp, 'Manager', '')); ?>
  <span class="menu_msg"> <?php if ($this->_tpl_vars['msg']): ?>
            
            (
            
            <?php echo $this->_tpl_vars['msg']; ?>

            
            )
            
            <?php endif; ?> </span></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" style="padding:10px;">
		   <div style="width: 700px;"> 
          <?php if (isset ( $this->_tpl_vars['var_msg'] ) && $this->_tpl_vars['var_msg'] != ""): ?><br><?php echo $this->_tpl_vars['var_msg']; ?>
<br><?php endif; ?>       
        
		   <div class="signuptext" style="margin-top:7px;">Office location:</div>
          <div style="width: 435px; float:left;"><input type="text" class = "validate[required] input_text" name="locationname" id="locationname" value="<?php echo $this->_tpl_vars['locationname']; ?>
" size="45"/></div>
         
       <div class="signuptext"  style="margin-top:7px;"></div>
       <div style="width: 435px; float:left;"> <input type="submit" id="submit" name="add" class="button_text" value="<?php if ($this->_tpl_vars['submitValue'] != ""):  echo $this->_tpl_vars['submitValue'];  else: ?>Submit<?php endif; ?>"></div>
        
      
       </div>
		  </td>
        </tr>
      </table>
	  </form>
	  </td>
  </tr>
</table>