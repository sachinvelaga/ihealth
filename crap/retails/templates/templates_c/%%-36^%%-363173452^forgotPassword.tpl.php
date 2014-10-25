<?php /* Smarty version 2.6.0, created on 2013-11-28 02:54:45
         compiled from forgotPassword.tpl */ ?>

<div class="password_cnt" style="min-height:500px;">
    <div align="center"  style="margin-left: 218px;  margin-top: 0px;  width: 238px;">
	<div class="log-in-details">
<h2>Password Reset</h2>
<div id="BtnSpace">
  <div id="Btn_LeftSpace"></div>
  <div class="Btn"></div>
  <div id="Btn_RightSpace"></div>
</div>
    <div align="center" class="error_msg">
      <?php if ($this->_tpl_vars['err_msg']): ?>
      (
      <?php echo $this->_tpl_vars['err_msg']; ?>

      )
      <?php endif; ?>
    </div>
    <br/>
	
       <div class="header_home" style="text-align:left;">Forgot Password</div>
    <div id="BtnSpace">
      <div id="Btn_LeftSpace"></div>
      <div class="Btn"></div>
      <div id="Btn_RightSpace"></div>
    </div>
    <div id="BtnSpace1">
      <div id="Btn_LeftSpace1"></div>
      <form action="forgotPassword.php" name="frmAdd" id="frmAdd" method="post">
        <div id="Btn_MiddalSpace1" style="margin-top:10px;">
          <div id="Btn_MiddalSpace_innar1">
            <div class="Serch_fir_left"></div>
            <div id="forget" class="Serch_fir_middal">
              <input name="email" id="email" type="text" class="validate[required] input_login" value="Enter your Email" onFocus="this.value=''"  />
            </div>
            <div class="Serch_fir_right"></div>
          </div>
          </div>
        </div>
        <div style="float:left;">
        <br/>
         <input type="submit" value="Submit" class="button_text" name="btnForgotPwd" id="btnForgotPwd" title="Forgot Password" style="width: 100px !important; height:30px !important;"/>
        </div>
      </form>
      <br/>
    </div>
    </div>
</div>