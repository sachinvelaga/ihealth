<?php /* Smarty version 2.6.0, created on 2013-09-30 20:44:03
         compiled from departmentAdd.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'departmentAdd.tpl', 10, false),)), $this); ?>
<table class="tbl_brder"  width="100%" cellspacing="0" cellpadding="0" style="padding:8px;">
	<tr>
		<td>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td align="left" class="menu_title"><?php if ($this->_tpl_vars['action'] == 'Update'): ?>
				Edit
				<?php else: ?>
				Add<?php endif; ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['manager'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'Manager', '') : smarty_modifier_replace($_tmp, 'Manager', '')); ?>
</td>
			</tr>
			<tr>
				<td bgcolor="#FFFFFF" style="padding:10px;">
				<form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data">
					<input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
					<input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
					<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
					<table width="40%" border="0" cellspacing="0" cellpadding="5">
						<p>
							<span> Location Name : </span>
							<select name="locationname" id="locationname" class="validate[required] select-one select_cmb">
								<?php if (count($_from = (array)$this->_tpl_vars['data_locationname'])):
    foreach ($_from as $this->_tpl_vars['locationname_all']):
?>
								<option value="<?php echo $this->_tpl_vars['locationname_all']['locationId']; ?>
" <?php if ($this->_tpl_vars['locationname_all']['locationId'] == $this->_tpl_vars['locationId']): ?> selected="selected" <?php endif; ?> > <?php echo $this->_tpl_vars['locationname_all']['locationname']; ?>
 </option>
								<?php endforeach; unset($_from); endif; ?>
							</select>
						</p>
						<p>
							<span> Group Name : </span>
							<input type="text" class = "validate[required] input_text" name="departmentname" id="departmentname" value="<?php echo $this->_tpl_vars['departmentname']; ?>
" size="45"/>
						</p>
						<?php if ($this->_tpl_vars['action'] == 'Update'): ?>
						<p>
							<span>Status :</span>
							<select name="eStatus" class="select_cmb">
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
						</p>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['action'] == 'Update'): ?>
						<input type="submit" id="submit" name="update" class="button_text" value="Save">
						<?php else: ?>
						<input type="submit" id="submit" name="add" class="button_text" value="Submit">
						<input type="button" value="Reset" class="button_text" onclick="reset();return false;">
						<?php endif; ?>
						<input type="button" value="Cancel" class="button_text" onclick="history.back(-1);return false;">
					</table>
				</form></td>
			</tr>
		</table></td>
	</tr>
</table>