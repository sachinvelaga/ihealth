<?php /* Smarty version 2.6.0, created on 2013-12-02 08:44:10
         compiled from secondbox.tpl */ ?>
<?php echo '
<style>
.year{
	width:94% !important;
}
</style>
'; ?>

<div class="main">
  <div class="plan-para">
    <p>Please choose your plan. You can upgrade your plan anytime.</p>
    <p>If you select Starter plan, you don't have to go through payment procedure now and your account will be be deactivated automatically after 30 days from your account activation if you don't upgrade your plan within your Free trial days.</p>
  </div>
  <div class="boxes">
    <div class="starter">
      <div class="first-blue">Starter</div>
      <div class="year">1-100<span> users</span></div>
      <div class="grey-matter"><img src="images/30days.png" width="148" height="78"> </div>
      <div class="free1">
      <?php if ($this->_tpl_vars['ses_varid']): ?>
      <form method="post" name="frm_free" action="payment.php">
      <?php else: ?>
      <form method="post" name="frm_free" action="createprofile.php">
        <?php endif; ?>
        <input type="hidden" name="hid" value="30 Day Free" />
        <input name="planuserslimit" type="hidden" value="1-100" />
        <input name="monthlyplanamount" type="hidden" value="0" />
        <input name="annualplanamount" type="hidden" value="0" />
        <label>
          <input name="planduration" type="radio" value="30 Days" id="r1" checked="checked" />
          Free Plan</label>
        </div>
        <div class="try" style="margin-top:9px;">
          <input type="button" name="submit_starter" value="TRY THIS" class="try" 
  style="margin-top:-15px; margin-right:2px; text-align:center;" onClick="document.frm_free.submit();" />
        </div>
      </form>
    </div>
    <div class="starter">
      <div class="first-blue1">silver</div>
      <div class="year">1-100<span> users</span></div>
      <div class="free2">
      <!--Silver Plan Start --> 
      <?php if ($this->_tpl_vars['ses_varid']): ?>
      <form method="post" name="frm_silver" action="payment.php">
      <?php else: ?>
      <form method="post" name="frm_silver" action="createprofile.php">
        <?php endif; ?>
        <input type="hidden" name="hid" value="Silver" />
        <input name="planuserslimit" type="hidden" value="1-100" />
        <input name="monthlyplanamount" type="hidden" value="5.95" />
        <input name="annualplanamount" type="hidden" value="55.95" />
        <label>
          <input name="planduration" type="radio" value="Monthly" checked="checked" id="r2" />
          Monthly Plan<img src="images/euro1.png" width="99" height="54"></label>
        <div class="form-border"></div>
        <label>
          <input name="planduration" type="radio" value="Yearly" id="r3" />
          Yearly Plan<img src="images/euro2.png" width="99" height="54"></label>
        </div>
        <div class="try">
          <input type="button" name="submit_silver" value="PURCHASE" class="try" 
  style="margin-top:-15px; margin-right:2px; text-align:center;" onClick="document.frm_silver.submit();" />
        </div>
      </form>
    </div>
    <div class="starter">
      <div class="gold">gold</div>
      <div class="year">101-500<span> users</span></div>
      <!--<div class="grey-matter">30<span> DAys</span>
  <br>
  <p>Free Trial</p>
  </div>-->
      <div class="free2">
      <?php if ($this->_tpl_vars['ses_varid']): ?>
      <form method="post" name="frm_gold" action="payment.php">
      <?php else: ?>
      <form method="post" name="frm_gold" action="createprofile.php">
        <?php endif; ?>
        <input type="hidden" name="hid" value="Gold" />
        <input name="planuserslimit" type="hidden" value="101-500" />
        <input name="monthlyplanamount" type="hidden" value="7.95" />
        <input name="annualplanamount" type="hidden" value="77.95" />
        <label>
          <input name="planduration" type="radio" value="Monthly"  checked="checked" id="rd4"/>
          Monthly Plan<img src="images/7euro.png" width="99" height="54"></label>
        <div class="form-border"></div>
        <label>
          <input name="planduration" type="radio" value="Yearly"  id="rd5"/>
          Yearly Plan<img src="images/77.png" width="99" height="54"></label>
        </div>
        <div class="try">
          <input type="button" name="submit_gold" value="PURCHASE" class="try" 
  style="margin-top:-15px; margin-right:2px; text-align:center;" onClick="document.frm_gold.submit();" />
        </div>
      </form>
    </div>
    <div class="starter">
      <div class="platinum">platinum</div>
      <div class="year">500 &amp; More<span> users</span></div>
      <!--<div class="grey-matter">30<span> DAys</span>
  <br>
  <p>Free Trial</p>
  </div>-->
      <div class="free2">
      <?php if ($this->_tpl_vars['ses_varid']): ?>
      <form name="frm_platinum" method="post" action="payment.php">
      <?php else: ?>
      <form name="frm_platinum" method="post" action="createprofile.php">
        <?php endif; ?>
        <input type="hidden" name="hid" value="Platinum" />
        <input name="planuserslimit" type="hidden" value="500 &amp; More" />
        <input name="monthlyplanamount" type="hidden" value="9.95" />
        <input name="annualplanamount" type="hidden" value="99.95" />
        <label>
          <input type="radio" name="planduration" value="Monthly" id="r6" checked="checked">
          Monthly Plan<img src="images/9euro.png" width="99" height="54"></label>
        <div class="form-border"></div>
        <label>
          <input type="radio" name="planduration" value="Yearly" id="r7">
          Yearly Plan<img src="images/99.png" width="99" height="54"></label>
        </div>
        <div class="try"> 
          <!--<a href="" onclick="javascript:document.frm_platinum.submit();">-->
          <input type="button" name="submit_platinum" value="PURCHASE" class="try" style="margin-top:-15px; margin-right:2px; text-align:center;" onClick="document.frm_platinum.submit();"  />
          <!--  </a>--> 
          
        </div>
        <!--<input type="submit" name="submit_platinum" value="" id="signup_platinum"  />-->
        
      </form>
    </div>
  </div>
</div>
</div>