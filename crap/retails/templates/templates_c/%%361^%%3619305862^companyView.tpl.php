<?php /* Smarty version 2.6.0, created on 2014-01-09 00:42:27
         compiled from companyView.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'companyView.tpl', 61, false),)), $this); ?>
<script src="js/validation/jquery.js"></script>
<script src="js/highcharts.js"></script>
<script src="js/responseBar.js"></script>
<script src="js/responsePie_new.js"></script>
<?php echo '
<script type="text/javascript">

function response_chart(a,b,c){

 var el = $(\'#user_resp_pie_\'+c);
                               var chartdata = [];
                                 var p1,p2;
                                     if(a==0&&b==0){
                                          p1=p2=0;
                                       }else{
                                           p1 = a/(a+b);
                                           p2 = b/(a+b);
                                          }
                                     
                                     chartdata[\'c_data\'] = [{name:\'Acknowledged\',y:p1, color:\'#2f7ed8\'},{name:\'Not Acknowledged\',y:p2, color:\'#0d233a\'}];
                                 
                         get_me_a_pie(el,chartdata);
}
 
$(window).load(function(){
    $(\'.chart_data\').each(function(){
       var scn_id = parseInt($(this).attr(\'id\').replace(\'chart_info_\',\'\'));
       var arr = ($(this).val()).split(\'-\');
       var ack = parseInt(arr[0]);
       var unack = parseInt(arr[1]);
           if(!(ack == 0 && unack == 0)){
             response_chart(ack,unack ,scn_id);
          }     
      });
}); 
</script> 
'; ?>

	
 <body >
 <?php if ($this->_tpl_vars['var_msg']): ?>
        
         <span class="menu_msg" type="hidden" style="color:red;display:none;"> 
            
            <?php echo $this->_tpl_vars['var_msg']; ?>

            
             </span>
      
        <?php endif; ?>
<div class="content column-full container">
      <div id="home-content" class="column-full">
        <div class="heading column-full">
          <h2 style="text-align:left !important;"> Plan <span><?php echo $this->_tpl_vars['signupplan']; ?>
</span>, Managed users <span><?php if ($this->_tpl_vars['signupplan'] == 'Silver'): ?> 1-100<?php endif;  if ($this->_tpl_vars['signupplan'] == 'Gold'): ?> 101-500<?php endif;  if ($this->_tpl_vars['signupplan'] == 'Platinum'): ?> 500& More <?php endif; ?> </span><br>
            If you would like to upgrade your plan use this option. </h2>
          <a href="plans.php" class="btn button-blue" style="position:relative; z-index:9;">Upgrade Your Plan</a> </div>
		
		    <?php if ($this->_tpl_vars['count_db_res'] > 0): ?>	
		  								
          <?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>
		  
        <div class="row content-columns">
          <h1 class="no-b" style="margin:0 0 0 15px;">Scenario <span><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</span> Location <span><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['locationname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</span></h1>
          <div class="col-md-4 content-list">
            <div class="page-header statistic">
              <h2> Statistics </h2>
            </div>
            <ul class="statistic_cnt">
<?php if ($this->_tpl_vars['currdata']['eStatus'] == '1'): ?>
     <?php if ($this->_tpl_vars['currdata']['isActive'] == '0'): ?> 
         <?php if ($this->_tpl_vars['currdata']['isAuthenticated'] == '0'): ?>	
			   
              <li><span class="close_01">Closed by</span><span><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['ClosedBy'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</span></li>
              <li><span class="close_01">Closed Date</span><span><?php echo $this->_tpl_vars['currdata']['closeddate']; ?>
</span></li>
              <li><span class="close_01">Closed Time</span><span><?php echo $this->_tpl_vars['currdata']['closedtime']; ?>
</span></li>
              <li><span class="close_01">Number of Users</span><span><?php echo $this->_tpl_vars['currdata']['totalusers']; ?>
</span></li>
              <li><span class="close_01">Activated Users</span><span><?php echo $this->_tpl_vars['currdata']['active_users']; ?>
</span></li>
					<?php else: ?> 
												
		     <li><span class="close_01">Launched by</span><span><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['LaunchedBy'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</span></li>
              <li><span class="close_01">Launched Date</span><span><?php echo $this->_tpl_vars['currdata']['Launcheddate']; ?>
</span></li>
              <li><span class="close_01">Launched Time</span><span><?php echo $this->_tpl_vars['currdata']['Launchedtime']; ?>
</span></li>
			  <li><span class="close_01">Number of Users</span><span><?php echo $this->_tpl_vars['currdata']['totalusers']; ?>
</span></li>
              <li><span class="close_01">Activated Users</span><span><?php echo $this->_tpl_vars['currdata']['active_users']; ?>
</span></li>									
											
											<?php endif; ?>
										<?php else: ?> 
												<?php if ($this->_tpl_vars['currdata']['isAuthenticated'] == '1'): ?> 
			<li><span class="close_01">Launched by</span><span><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['Activatedby'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</span></li>
              <li><span class="close_01">Launched Date</span><span><?php echo $this->_tpl_vars['currdata']['activateddate']; ?>
</span></li>
              <li><span class="close_01">Launched Time</span><span><?php echo $this->_tpl_vars['currdata']['activatedtime']; ?>
</span></li>
			  <li><span class="close_01">Number of Users</span><span><?php echo $this->_tpl_vars['currdata']['totalusers']; ?>
</span></li>
              <li><span class="close_01">Activated Users</span><span><?php echo $this->_tpl_vars['currdata']['active_users']; ?>
</span></li>
												<?php else: ?> 
												
	       <li><span class="close_01">Deactivated by</span><span><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['Deactivatedby'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</span></li>
              <li><span class="close_01">Deactivated Date</span><span><?php echo $this->_tpl_vars['currdata']['deactivedate']; ?>
</span></li>
              <li><span class="close_01">Deactivated Time</span><span><?php echo $this->_tpl_vars['currdata']['deactivetime']; ?>
</span></li>
              <li><span class="close_01">Number of Users</span><span><?php echo $this->_tpl_vars['currdata']['totalusers']; ?>
</span></li>
              <li><span class="close_01">Activated Users</span><span><?php echo $this->_tpl_vars['currdata']['active_users']; ?>
</span></li>								<?php endif; ?>
											<?php endif; ?>
										<?php endif; ?>  
	<li><span class="close_01">Current Status</span><span class="alert-text">		  
<?php if ($this->_tpl_vars['currdata']['eStatus'] == '1'): ?>
     <?php if ($this->_tpl_vars['currdata']['isActive'] == '0'): ?> 
         <?php if ($this->_tpl_vars['currdata']['isAuthenticated'] == '0'): ?> 
            Closed
											<?php else: ?> 
												
													Awaiting Launch										
											
											<?php endif; ?>
										<?php else: ?> 
												<?php if ($this->_tpl_vars['currdata']['isAuthenticated'] == '1'): ?> 
												Launched
												<?php else: ?> 
											Awaiting Closure
											<?php endif; ?>
											<?php endif; ?>
										<?php endif; ?>
			  
			  
             </span></li>
            </ul>
          </div>
          <div class="col-md-4 content-list list-left " >
        <input type="hidden" class="chart_data" id="chart_info_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" name="chart_info_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="<?php echo $this->_tpl_vars['currdata']['ackw']; ?>
-<?php echo $this->_tpl_vars['currdata']['unackw']; ?>
">
            <div class="page-header statistic">
              <h2> Report </h2>
            </div>
            <ul class="statistic_cnt">
              <li><span class="close02">Acknowledged </span><span class="close03"><?php echo $this->_tpl_vars['currdata']['ackw']; ?>
</span></li>
              <li><span class="close02">Not acknowledged</span><span class="close03"><?php echo $this->_tpl_vars['currdata']['unackw']; ?>
</span></li>
            </ul>
            <div style="height:57px !important;overflow: auto;">
            
       
			</div>
			<div style="height:230px !important;">
            <div class="al-c" id= "user_resp_pie_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
"></div>
			</div>
            <p class="al-r"><a role="button" href="reports.php" class="btn button-blue">View More</a></p>
          </div>
          <div class="col-md-4 content-list acknowledgements">
            <div class="page-header statistic">
              <h2> Acknowledgements </h2>
            </div>
                 <div class="scrl">
			        <?php if ($this->_tpl_vars['currdata']['userdata']): ?>
             <?php echo $this->_tpl_vars['currdata']['userdata']; ?>

			 <?php else: ?>
			 <ul><li>
			 No Acknowledgements!!
			 </li></ul>
			 <?php endif; ?>
         
            <ul class="statistic_cnt">
            <li></li>
            </ul>
			</div>
            
            
            <p class="al-r"><a role="button" href="scenario_messages.php?aid=<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" class="btn button-blue">View More</a></p>
          </div>
		   
        </div>
		
		<?php endforeach; unset($_from); endif; ?>
		
		<?php endif; ?>

        <div class="row content-columns">
          <div class="col-md-4 content-list">
            <div class="page-header statistic">
              <h2> Start </h2>
            </div>
            <ul class="statistic_cnt">
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
    </div>
	<div class="reveal-modal" id="mssg_pop" >
                               <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
                                <div class="pop_div"></div>
								<button type="button" class="close-reveal-modal popy" >OK</button>
								
   </div>    

</body>
  <?php echo ' 
<script type="text/javascript">    
 $(window).load(function(){
            var mssg = $.trim($(\'.menu_msg\').html());
       $(\'.pop_div\').html(mssg);
           if(mssg.length > 0){
        $(\'#mssg_pop\').reveal();
       } 
}); 
</script>
 '; ?>
 