<?php /* Smarty version 2.6.0, created on 2014-01-09 00:44:00
         compiled from reports.tpl */ ?>
<!--<script src="js/jquery-1.10.2.min.js"></script>-->
<?php echo ' 
<script src="js/validation/jquery.js"></script> 
<script src="js/highcharts.js"></script> 
<script src="js/responseBar.js"></script> 
<script src="js/responsePie_new.js"></script> 
<link rel="stylesheet" href="js/sorting/themes/blue/style.css" type="text/css"/>
<script src="js/sorting/jquery.tablesorter.min.js"></script> 
<script src="js/modernizr-2.6.1.min.js"></script> 
<script type="text/javascript">  
$.fn.scrollView = function () {
  return this.each(function () {
    $(\'html, body\').animate({
      scrollTop: $(this).offset().top
    }, 1000);
  });
} 

  $(document).on(\'click\',\'.scrolldiv #user_rep_tbl .scenario_full_trig\',function(){
            var id = $(this).attr(\'id\').replace(\'scn-\',\'\');
            var name = $(this).children(\'span\').html();
            var loc = $(this).siblings(\'td.scn_location01\').html();
                $(\'.scn_name\').html(name);
                $(\'.scn_loc_name\').html(loc);
                $(\'#kpi_report\').show();
                    return false;
                    $.ajax({
                            url:"kpi_report.php",
                            type:"POST",
                            data:{},
                            success:function(resp){
                              
                              }
                            })
            // ajax call to get scenario details
        
  });

  $(document).on(\'click\',\'.scenario_report #scen-rept .scen_name\',function(){
            var id = $(this).attr(\'id\').replace(\'scen_name_\',\'\');
              location.href = "scenario_messages.php?aid="+id;
        
  });

$(window).load(function(){
        var str = $(\'.ping_str\').html();      
         var opt = generate_bar_data(str);      
          var el = $(\'#bar_container\');      
        get_me_bar(el,opt);

    })
        function generate_bar_data(str){
       var frag = str.split(",");
           var count_arr = [0,0,0,0,0,0,0,0,0,0,0,0];
                
         var el_count = frag.length;       
       for(var i=0; i<el_count; i++)
       { frag[i] = +frag[i]; } 
         frag.sort(function(a,b){return a-b});  
             for(var j=0;j<el_count;j++){
             var g = frag[j];
             
                 if(0< g && g <=5) {                       
                     count_arr[0] += 1;}                          
                 else if(6<=g && g<=10){
                     count_arr[1] += 1;}   
                 else if(11<=g && g<=15){
                     count_arr[2] += 1;}    
                 else if(16<=g && g<=20){
                     count_arr[3] += 1; }   
                 else if( 21<=g && g<=25){
                     count_arr[4] += 1;  }
                 else if( 26<=g && g<=30){
                     count_arr[5] += 1; } 
                 else if( 31<=g && g<=35){
                     count_arr[6] += 1;}    
                 else if( 36<=g && g<=40){
                     count_arr[7] += 1;  }
                 else if( 41<=g && g<=45){
                     count_arr[8] += 1; }   
                 else if( 46<=g && g<=50){
                     count_arr[9] += 1; } 
                 else if( 51<=g && g<=55){
                     count_arr[10] += 1; } 
                 else if( g >= 56){
                     count_arr[11] += 1; }   
            }
         var opt = [];      
           
         opt[\'total_users\'] =    eval(count_arr.join(\'+\'));   
         var arr_len = count_arr.length;
           if(opt[\'total_users\']>0){
            for(var i=0;i<arr_len;i++){
              count_arr[i] = count_arr[i]*100/opt[\'total_users\'];
            }
         }
           
      
     // opt[\'interval\'] = [{x: \'5\', color: \'#339933\'},{x: \'10\', color: \'#339933\'},{x: \'15\', color: \'#339933\'},{x: \'20\', color: \'#0099FF\'},{x: \'25\', color: \'#0099FF\'},{x: \'30\', color: \'#0099FF\'},{x: \'35\', color: \'#0099FF\'},{x: \'40\', color: \'#0099FF\'},{x: \'45\', color: \'#0099FF\'},{x: \'50\', color: \'#CC0001\'},{x: \'55\', color: \'#CC0001\'},{x: \'60+\', color: \'#CC0001\'}];
        opt[\'interval\'] = [\'5\',\'10\',\'15\',\'20\',\'25\',\'30\',\'35\',\'40\',\'45\',\'50\',\'55\',\'60+\'];
//        opt[\'no_of_users\'] = frag;
         opt[\'no_of_users\'] =     count_arr;
           
     return opt;
}
function barchart_gen(){


var rad_fl = $(".ping_rep_rad:checked").val();
       $.ajax({
              url:"ping_report.php",
              type:"POST",
              data:{rad_fl:rad_fl},
              success:function(resp){
                  var str = $.trim(resp);                      
//                   if(str!=\'\'){                         
                    var opt = generate_bar_data(str);      
                    var el = $(\'#bar_container\');      
                   get_me_bar(el,opt); 
//                  } 
              }
            })

       }

function ureport_gen(){
     $(\'#kpi_report\').hide();
      var user = $("#user_report_form #select01").val();
      var interval = $("#user_report_form .sendnow:checked").val();
      var name =   $("#user_report_form #select01 option:selected").text();   
      if(user != 0){
        // $("#user_report_form").submit();
             $.ajax({
                 url:"user_report.php",
                 type:"POST",
                 data:{user_sel:user,sendnow:interval},
                 success:function(resp){
                //   alert(resp);
                     $("#sel_userrep").html(name);
                         var obj = JSON.parse(resp);
                          if(obj.length>0){
                             if(! $.isEmptyObject(obj[0])){                                 
                                 var el = $(\'#user_resp_pie\');
                                     var chartdata = [];
                                 var p1,p2,p3,p4;
                                     if(obj[0][\'tot_mssg\']==0){
                                          p1=p2=p3=p4=0;
                                       }else{
                                           p1 = obj[0][\'best\']*100/obj[0][\'tot_mssg\'];
                                           p2 = obj[0][\'avg\']*100/obj[0][\'tot_mssg\'];
                                           p3 = obj[0][\'worst\']*100/obj[0][\'tot_mssg\'];
                                           p4 = obj[0][\'noresp\']*100/obj[0][\'tot_mssg\'];
                                          }
                                     
                                     chartdata[\'c_data\'] = [{name:\'Best Response\',y:p1, color:\'#339933\'},{name:\'Average Response\',y:p2, color:\'#0099FF\'},{name:\'Worst Response\',y:p3,color:\'#CC0001\'},{name:\'No Response\',y:p4,color:\'#000\'}];
                                 
                         get_me_a_pie(el,chartdata);
                                
                                 
                                 var htm= \'<ul><li><span>Total No. of Scenario Messages  \'+obj[0][\'tot_mssg\']+\'</span></li>\';
                                        htm += \'<li><span>Best Response  \'+obj[0][\'best\']+\'</span></li>\';
                                        htm += \'<li><span>Average Response  \'+obj[0][\'avg\']+\'</span></li>\';
                                        htm += \'<li><span>Worst Response  \'+obj[0][\'worst\']+\'</span></li>\';
                                        htm += \'<li><span>No Response  \'+obj[0][\'noresp\']+\'</span></li> </ul>\';
                                 $(\'#user_resp_rep\').html(htm);
                            }
                             if(obj[1].length>0){
                                 $(\'#user_rep_tbl tbody\').html(obj[1]);
								$("#user_rep_tbl").trigger("update");								 
                            }
                          }
                       //   $(\'#user_rep_tbl tbody\').html(resp);
                    } 
                    })
       }     
}  
function scn_rep_gen(){
       var scn_fltr = $(\'.scn_fltr:checked\').val();
                   $.ajax({ 
                          url:"scenario_report.php",
                          type:"POST",
                          data:{scn_fltr:scn_fltr},
                          success:function(resp){
                               $(\'#scen-rept tbody\').html(resp);
                           }
                               })



}    
function remove_closed(){
    var this_el = $(\'.tgl_closed\');
     if(this_el.is(\':checked\')){
           this_el.addClass(\'filter_on\');
       $(\'.scenario_report #scn_rep_tbl tbody tr.scn-item\').each(function(){           
          var stat = $(this).attr(\'scn_stat\');
          if(stat == 4){              
             $(this).hide();
            }    
      })          
     }else{        
      this_el.removeClass(\'filter_on\');
          $(\'#scn_rep_tbl tr\').show();    
}

}    
$(document).ready(function(){
 $("#user_rep_tbl").tablesorter();
  $("#scen-rept").tablesorter();
})

</script> 
'; ?>
 

<!--body content -->
<div class="content column-full container">
  <div class="page-header repo_hed">
    <h2 class="haeding_of_report">Ping Report</h2>
    <div class="reports_radio">
      <label><span class="over_radio">
        <input type="radio"  onclick="barchart_gen()" checked="checked" value="r1" class="ping_rep_rad" name="ping_rep_rad">
        </span> <span class="over_spn ovr_text">This Week </span></label>
      <label><span class="over_radio">
        <input type="radio"  onclick="barchart_gen()" value="r2" class="ping_rep_rad" name="ping_rep_rad">
        </span> <span class="over_spn ovr_text">This Month </span></label>
      <label><span class="over_radio">
        <input type="radio"  onclick="barchart_gen()" value="r3" class="ping_rep_rad" name="ping_rep_rad">
        </span> <span class="over_spn ovr_text">Last Month</span></label>
      <p class="kpi_min">KPI-30mins</p>
    </div>
  </div>
    <span class="ping_str" style="display:none;"><?php echo $this->_tpl_vars['ping_data_str']; ?>
</span>
   <?php if ($this->_tpl_vars['associd']): ?> <span class="associd" style="display:none;"> <?php echo $this->_tpl_vars['associd']; ?>
 </span> <?php endif; ?>
  <div class="user_report" id="bar_container"> 
    <!--  <img class="img-responsive" src="img/reports-chart_bar.jpg" alt="reports-chart_bar"> --> 
  </div>
  <div class="page-header repo_hed" style="border-bottom: none; border-top:1px solid #EEEEEE;padding-top:20px;">
    <h2 style="width:100%;text-align:left;">User Report for <span id="sel_userrep">---</span></h2>
    <form name="user_report_form" id="user_report_form" method="POST" action="">
      <div class="col-md-5" style="width: 29%; margin-left:-25px; margin-right:10px; float:left;">
        <div class="control-group over_size edit_scenario">
          <div class="controls over_select edit_scenario_radio">
            <select id="select01" class="over_select_siz select_cmb0002" name="user_sel" onchange="ureport_gen()">
              <option value="0">Select user</option>
              
                     <?php if (count($_from = (array)$this->_tpl_vars['users_list'])):
    foreach ($_from as $this->_tpl_vars['users']):
?>
                     	                      
          
              <option value="u<?php echo $this->_tpl_vars['users']['companyuserId']; ?>
-d<?php echo $this->_tpl_vars['users']['departmentId']; ?>
" > <?php echo $this->_tpl_vars['users']['fullname']; ?>
 </option>
              
          
                     
                      <?php endforeach; unset($_from); endif; ?>
                    
              
            
            </select>
          </div>
        </div>
      </div>
      <div class="reports_radio col-md-4 col-md-04" style="">
        <label><span class="over_radio">
          <input type="radio"  onclick="ureport_gen()" checked="checked" value="1" id="w" class="sendnow" name="sendnow">
          </span> <span class="over_spn ovr_text">This Week </span></label>
        <label><span class="over_radio">
          <input type="radio"  onclick="ureport_gen()"  value="2" id="tm" class="sendnow" name="sendnow">
          </span> <span class="over_spn ovr_text">This Month </span></label>
        <label><span class="over_radio">
          <input type="radio"  onclick="ureport_gen()"  value="3" id="lm" class="sendnow" name="sendnow">
          </span> <span class="over_spn ovr_text">Last Month</span></label>
      </div>
    </form>
  </div>
  <div class="scrolldiv" id="thistbl" style="padding:50px 0 0 0 !important;">
    <table class="table table-striped table-hover val-m tablesorter" id="user_rep_tbl" width="100%" border="0" cellspacing="5" cellpadding="5" style="float: left;text-align: center">
      <thead>
      <th width="6%"></th>
      <th width="15%">Scenario </th>
        <th width="15%"> Location </th>
        <th width="15%">Launched</th>
        <th class="al-c" width="15%"> Time Gap </th>
        <th class="al-c" width="15%"> Messages </th>
        <th class="al-c" width="15%"> Acknowledged </th>
        <th class="al-c" width="15%"> Status</th>
          </thead>
      <tbody>
      
      <?php if (isset ( $this->_tpl_vars['user_report'] )): ?>
      
      <?php if (count($_from = (array)$this->_tpl_vars['user_report'])):
    foreach ($_from as $this->_tpl_vars['ureport']):
?>
      <?php echo $this->_tpl_vars['ureport']['associationId']; ?>
 
      
      <!--       <tr>
            <td width="20%"><span class="scenario-bg icon-a text_alig"><?php echo $this->_tpl_vars['ureport']['scenarioname']; ?>
 </span></td>
            
            <td><?php echo $this->_tpl_vars['ureport']['location_id']; ?>
  </td>
            <td width="20%" class="control-buttons"><?php echo $this->_tpl_vars['ureport']['launched_datetime']; ?>
 </td>
            <td width="15%"> 00:10:00 </td>
            <td>100  </td>
            <td width="15%" class="control-buttons">100 </td>
            <td width="15%" class="control-buttons"><?php echo $this->_tpl_vars['ureport']['scenario_status']; ?>
</td>
            
          </tr> --> 
      
      <?php endforeach; unset($_from); endif; ?>
      <?php else: ?>
      <tr>
        <td width="15%" colspan="7">No User selected</td>
      </tr>
      <?php endif; ?>
        </tbody>
      
      
      <!--      <tr>
            <td width="20%"><span class="scenario-bg icon-a text_alig">Fire in Building  </span></td>
            
            <td>Wembley  </td>
            <td width="20%" class="control-buttons">12.11.2013-10:00:00 </td>
            <td width="15%">00:10:00 </td>
            <td>100  </td>
            <td width="15%" class="control-buttons">100  </td>
            <td width="15%" class="control-buttons">Launched</td>
            
          </tr>
          <tr>
            <td width="35%"><span class="scenario-bg icon-b text_alig"> Fire in Building </span></td>
            <td>Wembley  </td>
            <td width="20%" class="control-buttons">12.11.2013-10:00:00 </td>
            <td width="15%">00:10:00 </td>
            <td>100  </td>
            <td width="15%" class="control-buttons">100  </td>
            <td width="15%" class="control-buttons">Launchede</td>
          </tr>
          <tr>
            <td width="35%"><span class="scenario-bg icon-c text_alig"> Fire in Building</span></td>
             <td>Wembley  </td>
            <td width="20%" class="control-buttons">12.11.2013-10:00:00 </td>
            <td width="15%">00:10:00 </td>
            <td>100  </td>
            <td width="15%" class="control-buttons">100  </td>
            <td width="15%" class="control-buttons">Launchede</td>
          </tr>
          <tr>
            <td width="35%"><span class="scenario-bg icon-d text_alig">Fire in Building</span></td>
              <td>Wembley </td>
            <td width="20%" class="control-buttons">12.11.2013-10:00:00 </td>
            <td width="15%">00:10:00 </td>
            <td>100  </td>
            <td width="15%" class="control-buttons">100  </td>
            <td width="15%" class="control-buttons">Launchede</td>
          </tr>
           <tr>
            <td width="35%"><span class="scenario-bg icon-d text_alig">Fire in Building</span></td>
              <td>Wembley  </td>
            <td width="20%" class="control-buttons">12.11.2013-10:00:00 </td>
            <td width="15%">00:10:00 </td>
            <td>100  </td>
            <td width="15%" class="control-buttons">100  </td>
            <td width="15%" class="control-buttons">Launchede</td>
          </tr> <tr>
            <td width="35%"><span class="scenario-bg icon-d text_alig">Fire in Building</span></td>
              <td>Wembley  </td>
            <td width="20%" class="control-buttons">12.11.2013-10:00:00 </td>
            <td width="15%">00:10:00 </td>
            <td>100  </td>
            <td width="15%" class="control-buttons">100  </td>
            <td width="15%" class="control-buttons">Launchede</td>
          </tr>
           <tr>
            <td width="35%"><span class="scenario-bg icon-d text_alig">Fire in Building</span></td>
              <td>Wembley  </td>
            <td width="20%" class="control-buttons">12.11.2013-10:00:00 </td>
            <td width="15%">00:10:00 </td>
            <td>100  </td>
            <td width="15%" class="control-buttons">100  </td>
            <td width="15%" class="control-buttons">Launchede</td>
          </tr>
           <tr>
            <td width="35%"><span class="scenario-bg icon-d text_alig">Fire in Building</span></td>
              <td>Wembley  </td>
            <td width="20%" class="control-buttons">12.11.2013-10:00:00 </td>
            <td width="15%">00:10:00 </td>
            <td>100  </td>
            <td width="15%" class="control-buttons">100  </td>
            <td width="15%" class="control-buttons">Launchede</td>
          </tr>
           
         -->
      
    </table>
  </div>
  <div class="row content-columns">
    <div class="col-md-5 content-list content-list02" id="user_resp_rep"> </div>
    <div class="col-md-5 content-list list-left " id="user_resp_pie"> 
      
      <!-- <p class="al-c"><img alt="chart" src="img/reports-chart_rep.jpg"></p> --> 
      
    </div>
  </div>
  <div class="row content-columns" id="kpi_report" style="display:none;">
    <h1 class="no-b">Scenario <span class="scn_name">Fire in Building</span> Location <span class="scn_loc_name">Wembley</span></h1>
    <div class="col-md-4 content-list scroll_div" id="b_kpi_users">
      <table width="100%"  class="table table-striped table-hover val-m"  border="0" >
        <thead>
        <th><span>Who Broke KPI</span><span class="sort-data arrow_icon"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>
            </thead>
        <tr>
          <td>Edmund Beavan</td>
        </tr>
        <tr>
          <td>Garry Bonneville</td>
        </tr>
        <tr>
          <td>Edmund Beavan</td>
        </tr>
        <tr>
          <td>Garry Bonneville</td>
        </tr>
        <tr>
          <td>Edmund Beavan</td>
        </tr>
        <tr>
          <td>Garry Bonneville</td>
        </tr>
        <tr>
          <td>Edmund Beavan</td>
        </tr>
        <tr>
          <td>Garry Bonneville</td>
        </tr>
        <tr>
          <td>Edmund Beavan</td>
        </tr>
      </table>
    </div>
    <div class="col-md-4 content-list list-left scroll_div " id="noAck_users">
      <table width="100%"  class="table table-striped table-hover val-m"  border="0" >
        <thead>
        <th><span>Who Didn't Acknowledge</span><span class="sort-data arrow_icon"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>
            </thead>
        <tr>
          <td>Edmund Beavan</td>
        </tr>
        <tr>
          <td>Garry Bonneville</td>
        </tr>
        <tr>
          <td>Edmund Beavan</td>
        </tr>
        <tr>
          <td>Garry Bonneville</td>
        </tr>
        <tr>
          <td>Edmund Beavan</td>
        </tr>
        <tr>
          <td>Garry Bonneville</td>
        </tr>
        <tr>
          <td>Edmund Beavan</td>
        </tr>
        <tr>
          <td>Garry Bonneville</td>
        </tr>
        <tr>
          <td>Edmund Beavan</td>
        </tr>
      </table>
    </div>
    <div class="col-md-4 content-list acknowledgements">
      <p class="al-c"><img alt="chart" src="img/reports-chart_botm.jpg"></p>
    </div>
  </div>
  <h1>Scenario Report</h1>
  <div class="reports_radio">
    <label><span class="over_radio">
      <input type="radio" class="scn_fltr" checked="checked" value="f1" name="scn_fltr" onclick="scn_rep_gen()">
      </span> <span class="over_spn ovr_text">This Week</span></label>
    <label><span class="over_radio">
      <input type="radio" class="scn_fltr" value="f2"  name="scn_fltr" onclick="scn_rep_gen()">
      </span> <span class="over_spn ovr_text">This Month </span></label>
    <label><span class="over_radio">
      <input type="radio" class="scn_fltr" value="f3"  name="scn_fltr" onclick="scn_rep_gen()">
      </span> <span class="over_spn ovr_text">Last Month</span></label>
    <p class="check01">
      <input name="tgl_closed" class="tgl_closed" onclick="remove_closed()" type="checkbox" value="1">
      &nbsp;&nbsp;<span>Remove Closed Scenario</span></p>
  </div>
  <div class="scenario_report">
    <table id="scen-rept" class="table table-striped table-hover report_table tablesorter" width="100%" border="0" cellspacing="5" cellpadding="5" >
      <colgroup>
      <col style="width:5%">
      <col style="width:20%">
      <col style="width:20%">
      <col style="width:20%">
      <col style="width:20%">
      </colgroup>
      <thead>
      <th style="width:5%;">&nbsp;</th>
        <th style="width:20%;"><span>Scenario Name</span></th>
        <th style="width:20%;"><span>Location</span></th>
        <th style="width:20%;"><span>Details</span></th>
        <th style="width:20%;" class="al-c"><span>Current Status</span></th>
          </thead>
      <tbody>
      
      <?php echo $this->_tpl_vars['scenario_rep']; ?>

        </tbody>
      
      
      <!--       
          <tr>
          	<td width="5%"><span class="scenario-bg icon-c"></span></td>
            <td>Fire in building</td>
            <td>Wembley</td>
            <td width="40%"><div class="detail01">
            	<ul>
                	<li>
                    	<div class="lunch">
                        	<span>Activated On</span>
                            <span>Activated by</span>
                    	</div>
                        <div class="date01">
                        	<span>10.10.2013-05:01:25</span>
                            <span>Rickie Sehgal</span>
                        </div>
                    </li>
                    <li>
                    	<div class="lunch">
                        	<span>Launched On</span>
                            <span>Launched by</span>
                    	</div>
                        <div class="date01">
                        	<span>10.10.2013-05:02:41</span>
                            <span>Sony Sehgal</span>
                        </div>
                    </li>
                    <li>
                    	<div class="lunch">
                        	<span>Deactivated On</span>
                            <span>Deactivated by</span>
                    	</div>
                        <div class="date01">
                        	<span>11.10.2013-14:45:00</span>
                            <span>Anish Patel</span>
                        </div>
                    </li>
                    <li class="last01">
                    	<div class="lunch">
                        	<span>Closed On</span>
                            <span>Closed by</span>
                    	</div>
                        <div class="date01">
                        	<span>11.10.2013-14:50:02</span>
                            <span>James Bond</span>
                        </div>
                    </li>
                </ul>
            </div></td>
            <td class="al-c success-text">Closed</td>
            
          </tr>
          
          <tr>
          	<td width="5%"><span class="scenario-bg icon-c"></span></td>
            <td>Fire in building</td>
            <td>Guildhall</td>
            <td width="40%"><div class="detail01">
            	<ul>
                	<li>
                    	<div class="lunch">
                        	<span>Activated On</span>
                            <span>Activated by</span>
                    	</div>
                        <div class="date01">
                        	<span>07.10.2013-05:01:25</span>
                            <span>Rickie Sehgal</span>
                        </div>
                    </li>
                    <li>
                    	<div class="lunch">
                        	<span>Launched On</span>
                            <span>Launched by</span>
                    	</div>
                        <div class="date01">
                        	<span>07.10.2013-05:02:41</span>
                            <span>Sony Sehgal</span>
                        </div>
                    </li>
                    <li class="last01">
                    	<div class="lunch">
                        	<span>Deactivated On</span>
                            <span>Deactivated by</span>
                    	</div>
                        <div class="date01">
                        	<span>18.10.2013-14:45:00</span>
                            <span>Anish Patel</span>
                        </div>
                    </li>
                    
                </ul>
            </div></td>
            <td class="al-c success-text">Closed</td>
            
          </tr>
          
          
          <tr>
          	<td width="5%"><span class="scenario-bg icon-d"></span></td>
            <td>Flood</td>
            <td>Cambridge</td>
            <td width="40%"><div class="detail01">
            	<ul>
                	<li>
                    	<div class="lunch">
                        	<span>Activated On</span>
                            <span>Activated by</span>
                    	</div>
                        <div class="date01">
                        	<span>05.09.2013-05:01:25</span>
                            <span>Rickie Sehgal</span>
                        </div>
                    </li>
                    <li class="last01">
                    	<div class="lunch">
                        	<span>Launched On</span>
                            <span>Launched by</span>
                    	</div>
                        <div class="date01">
                        	<span>05.09.2013-05:02:41</span>
                            <span>Sony Sehgal</span>
                        </div>
                    </li>
                </ul>
            </div></td>
            <td class="al-c success-text">Closed</td>
            
          </tr>
          
          <tr>
          	<td width="5%"><span class="scenario-bg icon-d"></span></td>
            <td>Flood</td>
            <td>Canterbury</td>
            <td width="40%"><div class="detail01">
            	<ul>
                	<li class="last01">
                    	<div class="lunch">
                        	<span>Activated On</span>
                            <span>Activated by</span>
                    	</div>
                        <div class="date01">
                        	<span>05.09.2013-05:01:25</span>
                            <span>Rickie Sehgal</span>
                        </div>
                    </li>
                </ul>
            </div></td>
            <td class="al-c success-text">Closed</td>
            
          </tr>
          
          <tr>
          	<td width="5%"><span class="scenario-bg icon-c"></span></td>
            <td>Fire in building</td>
            <td>Wembley</td>
            <td width="40%"><div class="detail01">
            	<ul>
                	<li>
                    	<div class="lunch">
                        	<span>Activated On</span>
                            <span>Activated by</span>
                    	</div>
                        <div class="date01">
                        	<span>10.10.2013-05:01:25</span>
                            <span>Rickie Sehgal</span>
                        </div>
                    </li>
                    <li>
                    	<div class="lunch">
                        	<span>Launched On</span>
                            <span>Launched by</span>
                    	</div>
                        <div class="date01">
                        	<span>10.10.2013-05:02:41</span>
                            <span>Sony Sehgal</span>
                        </div>
                    </li>
                    <li>
                    	<div class="lunch">
                        	<span>Deactivated On</span>
                            <span>Deactivated by</span>
                    	</div>
                        <div class="date01">
                        	<span>11.10.2013-14:45:00</span>
                            <span>Anish Patel</span>
                        </div>
                    </li>
                    <li class="last01">
                    	<div class="lunch">
                        	<span>Closed On</span>
                            <span>Closed by</span>
                    	</div>
                        <div class="date01">
                        	<span>11.10.2013-14:50:02</span>
                            <span>James Bond</span>
                        </div>
                    </li>
                </ul>
            </div></td>
            <td class="al-c success-text">Closed</td>
            
          </tr>
          
          <tr>
          	<td width="5%"><span class="scenario-bg icon-c"></span></td>
            <td>Fire in building</td>
            <td>Guildhall</td>
            <td width="40%"><div class="detail01">
            	<ul>
                	<li>
                    	<div class="lunch">
                        	<span>Activated On</span>
                            <span>Activated by</span>
                    	</div>
                        <div class="date01">
                        	<span>07.10.2013-05:01:25</span>
                            <span>Rickie Sehgal</span>
                        </div>
                    </li>
                    <li>
                    	<div class="lunch">
                        	<span>Launched On</span>
                            <span>Launched by</span>
                    	</div>
                        <div class="date01">
                        	<span>07.10.2013-05:02:41</span>
                            <span>Sony Sehgal</span>
                        </div>
                    </li>
                    <li class="last01">
                    	<div class="lunch">
                        	<span>Deactivated On</span>
                            <span>Deactivated by</span>
                    	</div>
                        <div class="date01">
                        	<span>18.10.2013-14:45:00</span>
                            <span>Anish Patel</span>
                        </div>
                    </li>
                    
                </ul>
            </div></td>
            <td class="al-c success-text">Closed</td>
            
          </tr>
          
          
          <tr>
          	<td width="5%"><span class="scenario-bg icon-d"></span></td>
            <td>Flood</td>
            <td>Cambridge</td>
            <td width="40%"><div class="detail01">
            	<ul>
                	<li>
                    	<div class="lunch">
                        	<span>Activated On</span>
                            <span>Activated by</span>
                    	</div>
                        <div class="date01">
                        	<span>05.09.2013-05:01:25</span>
                            <span>Rickie Sehgal</span>
                        </div>
                    </li>
                    <li class="last01">
                    	<div class="lunch">
                        	<span>Launched On</span>
                            <span>Launched by</span>
                    	</div>
                        <div class="date01">
                        	<span>05.09.2013-05:02:41</span>
                            <span>Sony Sehgal</span>
                        </div>
                    </li>
                </ul>
            </div></td>
            <td class="al-c success-text">Closed</td>
            
          </tr>
          
          <tr>
          	<td width="5%"><span class="scenario-bg icon-d"></span></td>
            <td>Flood</td>
            <td>Canterbury</td>
            <td width="40%"><div class="detail01">
            	<ul>
                	<li class="last01">
                    	<div class="lunch">
                        	<span>Activated On</span>
                            <span>Activated by</span>
                    	</div>
                        <div class="date01">
                        	<span>05.09.2013-05:01:25</span>
                            <span>Rickie Sehgal</span>
                        </div>
                    </li>
                </ul>
            </div></td>
            <td class="al-c success-text">Closed</td>
            
          </tr>
          -->
    </table>
  </div>
  <div class="user_report user_report2">
    <ul>
      <li class="colour1"><strong><span>Currently</span>Activated</strong><b><?php echo $this->_tpl_vars['cur_act']; ?>
</b></li>
      <li class="colour2"><strong><span>Currently</span>Launched</strong><b><?php echo $this->_tpl_vars['cur_lau']; ?>
</b></li>
      <li class="colour3"><strong><span>Currently</span>Deactivated</strong><b><?php echo $this->_tpl_vars['cur_deact']; ?>
</b></li>
      <li class="colour4"><strong><span>Currently</span>Closed</strong><b><?php echo $this->_tpl_vars['cur_clo']; ?>
</b></li>
      <li class="colour1"><strong><span>Total</span>Activated</strong><b><?php echo $this->_tpl_vars['tot_act']; ?>
</b></li>
      <li class="colour2"><strong><span>Total</span>Launched</strong><b><?php echo $this->_tpl_vars['tot_lau']; ?>
</b></li>
      <li class="colour3"><strong><span>Total</span>Deactivated</strong><b><?php echo $this->_tpl_vars['tot_deact']; ?>
</b></li>
      <li class="colour4"><strong><span>Total</span>Closed</strong><b><?php echo $this->_tpl_vars['tot_clo']; ?>
</b></li>
    </ul>
  </div>
</div>

<!--body content end--> 
<?php echo ' 
<script>
    $(\'#bar_container\').find(\'.highcharts-grid path:nth-child(1)\').attr(\'stroke\',\'#00CC33\');
    $(\'#bar_container\').find(\'.highcharts-grid path:nth-child(2)\').attr(\'stroke\',\'#3399FF\');
    $(\'#bar_container\').find(\'.highcharts-grid path:nth-child(3)\').attr(\'stroke\',\'#FF0000\');
	 $(window).load(function(event){
    var associd = $.trim($(\'.associd\').html());
     if(associd > 0){
	   event.preventDefault();
  $(\'#scn-\'+associd).scrollView();
	   } 
})
    </script> 
 	
'; ?>