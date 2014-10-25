<?php /* Smarty version 2.6.0, created on 2013-10-22 03:59:37
         compiled from pushNotificationAdd.tpl */ ?>
<?php echo ' 
<script type="text/javascript">

$(document).ready(function() { 

   

});

</script> 
<script type="text/javascript" language="javascript">

function checkCount(txtarea_id)

{

	var used_count = document.getElementById(txtarea_id).value.length;

	var remaining_count = 150 - used_count;

	if(remaining_count > 0)

	{

		document.getElementById(\'span_id\').innerHTML = "<font color=\\"#009933\\">Remaining "+remaining_count+" characters</font>";

	}

	else

	{

		document.getElementById(txtarea_id).value = (document.getElementById(txtarea_id).value).substring(0,150)

		document.getElementById(\'span_id\').innerHTML = "<font color=\\"#FF0000\\">Remaining 0 characters</font>";

	}	

	

}

function chkValidSubmit() 

{

	if (document.getElementById(\'push_text\').value.length < 1 )

	{

		alert("Please enter Push Notification Text!");

		$(\'push_text\').focus();

		return false;

	}

	

	if(document.getElementById(\'push_text\').value.length > 150)

	{

		alert("Text length must be less than 150 characters!");

		$(\'push_text\').focus();

		return false;

	}	

	

	return true;

}

</script>
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

<?php if (! $this->_tpl_vars['var_msg']): ?> 
<br/>
<?php endif; ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="10">
        <?php if ($this->_tpl_vars['var_msg']): ?>
        <tr>
          <td colspan="2" class="menu_bar_bg"><span class="menu_msg"> (
            
            <?php echo $this->_tpl_vars['var_msg']; ?>
 
            
            ) </span></td>
        </tr>
        <?php endif; ?>
        <tr align="center">
          <td width="100%" class="tbl_brder"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="border_bg_color">
              <tr>
              <h2 class="note">Notification:</h2>
                <td><table id="tablesorter-demo" class="tablesorter"  border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                      <form name="frmAdd" id="frmAdd" method="post">
                          <input type="hidden" name="action" value="Update">
                          <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
                          <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
                          <div class="subject">
                          <table border="0" cellspacing="0" cellpadding="0" class="table4" style="padding:10px; float:left;">
                          
                            <tr>
                              <td><p>
                                  <select name="seldepartment" class="select_cmb">
                                    
                                    

                                  <?php if ($this->_tpl_vars['tdata'] == ''): ?>   

                                  
                                    
                                    <option value="" selected="selected">--Select Group --</option>
                                    
                                    

                                  <?php endif; ?>

                                  
                                    
                                    <option value="All" > All Groups </option>
                                    
                                    

                              	  <?php if (count($_from = (array)$this->_tpl_vars['tdata'])):
    foreach ($_from as $this->_tpl_vars['trdata']):
?>

                                   
                                    
                                    <option value="<?php echo $this->_tpl_vars['trdata']['departmentId']; ?>
" <?php if ($this->_tpl_vars['seldepartment'] == $this->_tpl_vars['trdata']['departmentId']): ?> selected="selected" <?php endif; ?>> <?php echo $this->_tpl_vars['trdata']['locationname']; ?>
 &raquo; <?php echo $this->_tpl_vars['trdata']['departmentName']; ?>
 </option>
                                    
                                    

                       		  	  <?php endforeach; unset($_from); endif; ?>

                               
                                  
                                  </select>
                                </p>
				    <p> <span>Subject Text :</span>
				    
				    <input type="text"  class="validate[required] push_subject" name="push_subject" id="push_subject"  style="width:360px;" onkeypress="checkCount('push_subject');">
					</p>
                                <p><span>Push Notification Text :</span>
				
                                <textarea  class="validate[required] push_text" name="push_text" id="push_text"  style="width:350px;"  onkeypress="checkCount('push_text');" ><?php echo $this->_tpl_vars['push_text']; ?>
</textarea></p>
                                
                                <p><input type="submit" id="submit" name="add" class="button_text" value="Send" style="width: 100px !important; height:30px !important; padding-left:32px !important;"/></p></td>
                            </tr>
                          </table>
                        </form>
                        </td>
                    </tr>
                    	
                  </table>
                  </div>
                                    </td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>