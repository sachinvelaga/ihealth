<?php /* Smarty version 2.6.0, created on 2014-01-10 03:13:05
         compiled from companyViewtrial.tpl */ ?>
  
    <div class="content column-full" style="margin-bottom:48px !important;">
      <div id="home-content" class="column-full">
        <div class="heading column-full">
          <h2 style="text-align:left !important;"> Plan <span>30 Days Trail</span>, Managed users <span>1-100</span><br>
            If you would like to upgrade your plan use this option. </h2>
          <a href="plans.php" class="btn button-blue">Upgrade Your Plan</a> </div>
        <h1>Ping Report</h1>
        <div class="content-list column-full">
          <ul>
         <li><span class="close_01">Last Ping Date</span><span><?php echo $this->_tpl_vars['pingdate']; ?>
</span></li>
            <li><span class="close_01">Last Ping Time</span><span><?php echo $this->_tpl_vars['pingtime']; ?>
</span></li>
            <li><span class="close_01">Number of Users</span><span><?php echo $this->_tpl_vars['totalusers']; ?>
</span></li>
            <li><span class="close_01">Activated Users</span><span><?php echo $this->_tpl_vars['actusers']; ?>
</span></li>
            <li><span class="close_01">Pinged</span><span><?php echo $this->_tpl_vars['totalping']; ?>
</span></li>
          </ul>
        </div>
      </div>
    </div>
  