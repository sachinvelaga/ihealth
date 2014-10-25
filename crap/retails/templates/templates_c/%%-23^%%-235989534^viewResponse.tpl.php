<?php /* Smarty version 2.6.0, created on 2013-10-25 07:16:42
         compiled from viewResponse.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign', 'viewResponse.tpl', 80, false),)), $this); ?>
<link rel="stylesheet" href="js/sorting/themes/blue/style.css" type="text/css" media="print, projection, screen" />
<script type="text/javascript" src="js/sorting/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/REMOVEFILES/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/REMOVEFILES/jquery-1.4.2.min.js"></script>

<?php echo ' 
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
'; ?>

<div class="view_responce_cnt">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="32"><img src="images/icons/tools.png" alt="<?php echo $this->_tpl_vars['manager']; ?>
" class="header_home_img" /></td>
        <td width="10">&nbsp;</td>
        <td class="header_home"> Manage&nbsp;
          
          <?php echo $this->_tpl_vars['manager']; ?>
</td>
        <td valign="middle" align="right"></td>
      </tr>
    </table>
    <div class="breadcrumb breadcrumb2"> <?php echo $this->_tpl_vars['breadcrumb']; ?>
 </div> 

       <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="100%">
		<table width="100%" border="0" cellspacing="0" cellpadding="7">

			<tr>
				<td width="100%" class="tbl_brder">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="border_bg_color">
					<tr>
               
						<td>
						<table id="tablesorter-demo" class="tablesorter"  style="background-color:#E6EEEE; color:#385BBF; font-family:Tahoma,Arial,Helvetica,sans-serif; font-size:11px;" rel="<?php echo $this->_tpl_vars['RECLIMIT']; ?>
" border="0" cellpadding="0" cellspacing="1">
													<thead>

                                						<tr>
                                <form name="frmdept" method="post" action="<?php echo $this->_tpl_vars['page_name']; ?>
" >
								<div class="select-01" style="width:100%">
                               <form name="frmlist" id="frmlist" method="post" action="<?php echo $this->_tpl_vars['page_name']; ?>
">
                          <input type="hidden" name="action" value="Search">
                          <input type="hidden" name="srname" value="">
                          <input type="hidden" name="keyname" value="">
                                    </form>
                                     <?php if ($this->_tpl_vars['arr_page_vars']['no_of_pages'] > 1): ?>
                
                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                
                                        <?php endif; ?>
                                </div>
							</tr>
							</thead>
                            <tbody>
                          

								<tr class="header-title-bg">
									<th height="35" align="center" width="25%"class="line1"  style="padding-left:15px; text-align: left;">User Name</th>
									<th width="25%" align="center"class="line1">Department Name</th>
									<th width="15%" style="text-align:center;" class="line1">Response Status</th>
								</tr>
                                
								<?php if ($this->_tpl_vars['count_db_res'] > 0): ?>
								<?php echo smarty_function_assign(array('var' => 'totdata','value' => '0'), $this);?>

								<?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>

                    
								<tr class="<?php if ($this->_tpl_vars['totdata']%2 == 0): ?>list-green-bg<?php else: ?>list-pink-bg<?php endif; ?>">
									<td width="25%" height="10%">
									<p style="padding-left:10px !important;padding-top:3px !important;">
                               
										 <?php echo $this->_tpl_vars['currdata']['name']; ?>

                              
                              &nbsp;
                              
                              <?php echo $this->_tpl_vars['currdata']['surname']; ?>

									</p>
                                    </td>
                                    <td width="25%" height="10%" align="center">
									<p style="padding-left:10px !important text-align:center !important;">
                             <?php echo $this->_tpl_vars['currdata']['departmentname']; ?>

									</p>
                                    </td>
                                   		<td align="center" style="font-size:14px !important;" id="status_<?php echo $this->_tpl_vars['currdata']['locationId']; ?>
">
<?php if ($this->_tpl_vars['currdata']['responseStatus'] == '1'): ?><h3 style="color:green; font-size:14px !important; padding:3px !important;">Acknowledged</h3><?php elseif ($this->_tpl_vars['currdata']['responseStatus'] == '0'): ?><h3 style="color: #5d5c5d!important; font-size:14px !important; padding:3px !important;">Not Responded</h3><?php endif; ?> 
                                    <input  id='locstat_<?php echo $this->_tpl_vars['currdata']['locationId']; ?>
' type="hidden" value="<?php echo $this->_tpl_vars['currdata']['eStatus']; ?>
">
                                   
                                    </td>
									

								</tr>
								<?php echo smarty_function_assign(array('var' => 'totdata','value' => $this->_tpl_vars['totdata']+1), $this);?>


								<?php endforeach; unset($_from); endif; ?>

								<?php else: ?>
								<tr>
									<td align="center" class="error_msg" colspan="3"><font color="#FF0000">Records not available.</font></td>
								</tr>
								<?php endif; ?>
                                 	<input  type="hidden" name="no" value="<?php echo $this->_tpl_vars['count_db_res']; ?>
">
								</form>
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
</div>