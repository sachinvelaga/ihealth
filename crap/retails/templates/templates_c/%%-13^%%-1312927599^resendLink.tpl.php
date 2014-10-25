<?php /* Smarty version 2.6.0, created on 2013-12-03 08:43:05
         compiled from resendLink.tpl */ ?>
<div class="main">
<div align="center"  style="margin-left: 218px;  margin-top:0;  width: 550px;"> <br/>
  <div align="center" class="error_msg" style="width:960px !important; text-align:center;"> <?php if ($this->_tpl_vars['err_msg']): ?>
    (
    <?php echo $this->_tpl_vars['err_msg']; ?>

    )
    <?php endif; ?> </div>
  <br/>
  <div id="BtnSpace">
    <div id="Btn_LeftSpace"></div>
    <div class="Btn"></div>
    <div id="Btn_RightSpace"></div>
  </div>
  <div id="BtnSpace1">
    <div id="Btn_LeftSpace1"></div>
    <form name="frmAdd" id="frmAdd" method="post">
      <div class="header_home header_home001" style="text-align:left;">Resend Account Verification link</div>
      <div id="Btn_MiddalSpace1" style="margin-top:10px; text-align:left;">
        <div id="Btn_MiddalSpace_innar1">
          <div class="Serch_fir_left"></div>
          <div class="Serch_fir_middal">
          <div class="resend_ta1">
          <h3 style="width:295px !important; text-align:left;">Resend Verification Link</h3>
            <input name="email" id="email" type="text" class="validate[required] input_login" value="Enter your Email"  onFocus="this.value=''" />
            <input type="submit" value="Submit" class="button_text" name="btnForgotPwd" id="btnForgotPwd" title="Resend Verification" style="width:100px; height:30px; margin:10px 0 0 0;" />
            </div>
          </div>
          <div class="Serch_fir_right"></div>
        </div>
      </div>
      <div style="text-align:left;"> <br/>
        
        
      </div>
    </form>
    <br/>
  </div>
</div>
</div>