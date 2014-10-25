<?php /* Smarty version 2.6.0, created on 2013-10-29 05:56:01
         compiled from contactUs.tpl */ ?>
<div align="center"  style="margin-left: 207px;  margin-top: 0;  width: 500px;">
<?php if ($this->_tpl_vars['var_msg']): ?>
 <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr>
       <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
      <tr>
      <td class="header_home">Thank you</td>
      </tr>
        <tr><td>
		<span class="error_msg">
			<?php echo $this->_tpl_vars['var_msg']; ?>

		</span>
		</td>
		</tr>
		</table>
		</td>
		</tr>
		</table>

<?php else: ?>

<form method="post" name="frmAdd" id="frmAdd">
<div class="contact_us">
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
       <td>
       <div class="contact_details">
       <h2 class="log-in-details">Contact Us</h2>
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
      
      <tr>
      <td  colspan="2" class="header_home">Contact Form</td>
      </tr>
        <tr>
          <td  valign="middle" class="login_txt">Your Name:<sup style="color:#F03;">*</sup></td>
          <td  valign="top" align="left"><input type="text" class = "validate[required] input_login" name="name" id="name" size="45" value="<?php echo $this->_tpl_vars['name']; ?>
" /></td>
          </tr>
        <tr>
          <td  valign="middle" class="login_txt">Your Email:<sup style="color:#F03;">*</sup></td>
          <td valign="top" align="left"><input type="text" class = "validate[required,custom[email]] input_login" name="email" id="email" size="45" value="<?php echo $this->_tpl_vars['email']; ?>
" /></td>
          <td></td>
        </tr>
        <tr>
          <td  valign="middle" class="login_txt">Your Message:<sup style="color:#F03;">*</sup></td>
          <td  valign="top" align="left"><textarea name="message" id="message" class="validate[required]" rows="4" cols="33"></textarea></td>
          <td></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="btn_submit" class="button_text_form" value="Send" id="signup"  />
          </td>
        </tr>
        
      </table>
      </div>
        </td>
        </tr>
  </table>
  </div>
</form>
<?php endif; ?>

</div>