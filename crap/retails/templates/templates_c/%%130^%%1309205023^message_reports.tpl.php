<?php /* Smarty version 2.6.0, created on 2013-12-25 06:46:28
         compiled from message_reports.tpl */ ?>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/validation/jquery.js"></script>

<?php echo '
  
'; ?>



<!--body content -->
    <div class="content column-full container">
      
      <div class="page-header repo_hed">
        <h1 class="no-b">Scenario <span><?php echo $this->_tpl_vars['scenarioname']; ?>
</span> Location <span><?php echo $this->_tpl_vars['locationname']; ?>
</span>Launched <span class="span_tex_col"><?php echo $this->_tpl_vars['launchedtime']; ?>
</span></h1>
        
      </div>
      <div class="scrolldiv">
      	<table class="table table-striped table-hover" width="100%" border="0" cellspacing="3" cellpadding="3">
        <thead>
          <th width="10%" class="td_pad"><span>Date</span><span class="sort-data"></span></th>
          <th width="10%" class="al-c td_pad"><span>Time</span><span class="sort-data"></span></th>
		  <th width="20%" class="al-c td_pad"><span>Acknowledged Time</span><span class="sort-data"></span></th>
          <th width="20%" class="al-c td_pad">Message</th>
         
        </thead>
          
		   <?php if (count($_from = (array)$this->_tpl_vars['datam'])):
    foreach ($_from as $this->_tpl_vars['cur']):
?>
            <?php echo $this->_tpl_vars['cur']['message']; ?>

            <?php endforeach; unset($_from); endif; ?>
  
      </table>
      </div>
      
      
      
      
        
      
    </div>
    
   
    <!--body content end-->