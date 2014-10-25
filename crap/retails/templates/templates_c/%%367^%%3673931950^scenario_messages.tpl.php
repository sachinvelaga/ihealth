<?php /* Smarty version 2.6.0, created on 2014-01-09 00:45:44
         compiled from scenario_messages.tpl */ ?>
<script src="js/jquery-1.10.2.min.js"></script>
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
 
</script> 
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
          <th width="20%" class="al-c td_pad">Message</th>
		  <th width="20%" class="al-c td_pad">Users Acknowledged</th>
			<th width="20%" class="al-c td_pad">Report</th>
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
	<?php echo '
  <script type="text/javascript">
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
</script> '; ?>