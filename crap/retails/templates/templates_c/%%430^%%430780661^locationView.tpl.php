<?php /* Smarty version 2.6.0, created on 2014-01-09 00:42:38
         compiled from locationView.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign', 'locationView.tpl', 451, false),array('modifier', 'capitalize', 'locationView.tpl', 454, false),)), $this); ?>
<link rel="stylesheet" href="js/sorting/themes/blue/style.css" type="text/css" media="print, projection, screen" />
<script type="text/javascript" src="js/sorting/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/jlist.js"></script>
<?php echo '<script type="text/javascript" src="js/jlist.js"></script>
<link rel="stylesheet" href="js/confirm/jquery-ui.css" type="text/css">
<script src="js/confirm/avg_ls_dom.js" type="text/javascript"></script>
<script src="js/confirm/jquery-ui.js"></script><script src="js/confirm/jquery_002.js">
</script>

<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<!-- <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet">-->
<link href="css/StyleSheet.css" type="text/css" rel="stylesheet">

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.popupoverlay.js"></script>

<script type="text/javascript" src="js/jquery.reveal.js"></script>
<link href="js/reveal.css" type="text/css" rel="stylesheet">

<script>
    $(function() {
     $(\'#my_modal\').popup();
         
         
    });
        
        
       function clickerdepp(x) { 
           
           $(\'#my_modal\').popup();
               
               
           var y = document.getElementById(\'locname_\'+x).value;
                               
                                var z = document.getElementById(\'locstat_\'+x).value;		
                          // $(\'#editdept\').val(y);
                               if(z==1)
                                   {
                                   document.getElementById(\'active\').checked = true;
                                       }
                                           else
                                               {
                                                    document.getElementById("inactive").checked = true;
                                                   }
                //$(\'#select\').val(z);					
$(\'#editname\').val(y);				
$(\'#prevlocation\').val(y);	
$(\'#prevstatus\').val(z);        	    
       $(\'#locationid\').val(x);        
               
               
           
           }
        
  </script>

 <script>
            function clickerdepp_delete(g) 
            {
                
                    $(\'#my_modaldelete\').popup();
					 var page = $(\'#pageno\').val();
					 $(\'#locationId\').val(g);
                        
                          
             var delurl = document.getElementById("deleteurl"); 
                // if(delurl)
                    // {
                         //alert(delurl);
            delurl.href = urldelete;
//}
     
                          
                          
             }   
            </script>
              
                            <script>
    $(function() {
      $(\'#my_modaldelete\').popup();
    });
  </script>
  
  
  
   <script>
    $(function() {
      $(\'#my_modaladd\').popup();
    });
        
        
     function clickerdepp_add()
         {
            $(\'#my_modaladd\').popup(); 
             }
  $(document).on(\'click\',\'#deleteurl\',function(e){
   var locid = $.trim($(\'#locationId\').val());
    e.preventDefault();
	   $.ajax({
                  url:"locdelete.php",
                  type:"POST",
                  data:{locid:locid},
			success:function(resp){
			
                 var trim_resp = $.trim(resp);
                    if(trim_resp ==\'error2\'){
                                     $(\'.group_err\').html(\'Locaion could not be added.Try again!!!\').show();
				      return false;
                                }
                                else if(trim_resp == \'deleted\'){
									$(\'.menu_msg\').html(\'Location Deleted successfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'R3JvdXAgYWRkZWQgc3VjY2Vzc2Z1bGx5\';
									    var page = $(\'#pageno\').val();
										$(\'#my_modaldelete\').popup(\'hide\');
										getl();
									$(\'.pop_div\').html(\'Location Deleted successfully\');
          
										$(\'#mssg_pop\').reveal();
       
					}, 10); 
                               }
                        } 
                   
                  })

});       
        
  </script>

 <style>
  /* Add these styles once per website */
  .popup_background {
    z-index: 2000; /* any number */
  }
  .popup_wrapper {
    z-index: 2001; /* any number + 1 */
  }
  /* Add inline-block support for IE7 */
  .popup_align,
  .popup_content {
    display: inline;
    zoom: 1;
  }
  </style>




<script type="text/javascript">	
$(document).ready(function() {	
$(".menu_msg").each( function() {   
//alert($(this).val());	
});});	

$(function() {		
$(".confirm").easyconfirm();		
//alert("kavita");		
$("#alert").click(function() {		
});	}); 		

function clicker(x) {					
var y = document.getElementById(\'locname_\'+x).value;		
var z = document.getElementById(\'locstat_\'+x).value;	
  $(\'#editname\').val(y);				
        $(\'#select\').val(z);				
        $(\'#locationid\').val(x);		
            
                     } 
$(document).ready(function() {  
$(".switch switch-green input[type=checkbox]").click(function(){   
 if ($(this).attr("checked") == "checked"){     
 $(this + " input").attr("checked") = "checked";    
} else {     
 $(this + " input").attr("checked") = "";    }  });});

$(\'.trigger\').click(function(e) {        
  e.preventDefault();            
$(\'#toPopup\').reveal();     });

/*********************************||Form Validations||***************************************/ 
/*********************************||Add location||***************************************/  
function locationsearch(){
$(\'.addloc_err\').html(\'\');
 var loc_name = $.trim($(\'#locationname\').val());
 //alert(loc_name);
  
$.ajax({
                  url:"locsearch.php",
                  type:"POST",
                  data:{locname:loc_name},
                  success:function(resp){
                         if(resp>0){
						  $(\'.addloc_err\').html(\'Location Name Already Exists!!!\').show();
						  return false;
						 }
                     }    
                  })
}  
$(document).on(\'click\',\'#add_loc\',function(e){
$(\'.addloc_err\').html(\'\');
     var loc_name = $.trim($(\'#locationname\').val());
	  var page = $(\'#pageno\').val();
       if(loc_name.length == 0){
	    $(\'.addloc_err\').html(\'Please Enter Location Name!!!\').show();
          return false;
          }
          else{
          e.preventDefault();
		  $.ajax({
                        url:"locsearch.php",
                        type:"POST",
                        data:{locname:loc_name},
                        success:function(resp){
                              var trim_resp = $.trim(resp);
                               if(trim_resp ==\'error1\'){
                                     $(\'.addloc_err\').html(\'Location Name Already Exists!!!\').show();
				      return false;
				}else if(trim_resp ==\'error2\'){
                                     $(\'.addloc_err\').html(\'Location could not be added.Try again!!!\').show();
				      return false;
                                }
                                else if(trim_resp == \'added\'){
                                   $(\'.addloc_err\').html(\'Location added successfully\').show();
									$(\'.menu_msg\').html(\'Location added successfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'Location added successfully\';
										$(\'#my_modaladd\').popup(\'hide\');
										 $(\'.addloc_err\').html(\'\');
										 $(\'#locationname\').val(\'\');
										getl();
									$(\'.pop_div\').html(\'Location added successfully\');
          
										$(\'#mssg_pop\').reveal();
					}, 10); 
                               }
                        }    
                    })
		      
		  }
     })
/*********************************||Edit location||***************************************/   
 $(document).on(\'click\',\'#submit_edit\',function(e){
  $(\'.editloc_err\').html(\'\');
     var loc_name = $.trim($(\'.edit_loc_name\').val());
	 var locid = $.trim($(\'#locationid\').val());
	 var prevlocation = $.trim($(\'#prevlocation\').val());
	 var prevstatus = $.trim($(\'#prevstatus\').val());
	 var estatus = $.trim($(\'#estatus input[name=eStatus]:checked\').val());
       if(loc_name.length == 0){
	   $(\'.editloc_err\').html(\'Please fill the location name!!!\').show();
          return false;
          }else if(loc_name == prevlocation  && estatus == prevstatus){
		  $(\'#my_modal\').popup(\'hide\');
		  return false;
		  }else{
		e.preventDefault();
		  $.ajax({
                        url:"locsearchedit.php",
                        type:"POST",
                        data:{locname:loc_name,prevloc:prevlocation,locid:locid,estatus:estatus},
                        success:function(resp){
                              var trim_resp = $.trim(resp);
                               if(trim_resp ==\'error1\'){
                                     $(\'.editloc_err\').html(\'Location Name Already Exists!!!\').show();
				      return false;
				}else if(trim_resp ==\'error2\'){
                                     $(\'.editloc_err\').html(\'Location could not be Updated.Try again!!!\').show();
				      return false;
                                }
                                else if(trim_resp == \'added\'){
                                   $(\'.editloc_err\').html(\'Location added successfully\').show();
									$(\'.menu_msg\').html(\'Location added successfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'Location Updated successfully\';
										$(\'#my_modal\').popup(\'hide\');
										 $(\'.editloc_err\').html(\'\');
										getl();
									$(\'.pop_div\').html(\'Location Updated successfully\');
          
										$(\'#mssg_pop\').reveal();
					}, 10); 
                               }
                        }    
                    })
		  }
     })  

 function getl(){
  
    var sort = $(\'#sort_par\').val();
   var page = $(\'#pageno\').val();
          $.ajax({
                  url:"locationsearch.php",
                  type:"POST",
                  data:{page:page,sort:sort},
                  success:function(resp){
                         $(\'#location_list tbody\').html(resp);
						 		var pagination = $.trim($(\'#arr_page_vars\').val());
								if(page>1){
								var check = document.getElementsByTagName(\'td\')[0].innerHTML;
								if(check == \'No Records Available\'){
							var newpage = --page;
							$(\'#pageno\').val(newpage);
							getl();
								}
								}
			$(\'#paginationdiv\').show();
			if(page==1){
			 $(\'#pageprev\').hide();
			 $(\'#pagenext\').show();
			 $(\'#prevnill\').show();
			}else{
			 $(\'#pageprev\').show();
			$(\'#prevnill\').hide();
			}
			if(page==pagination){
			 $(\'#pagenext\').hide();
			 $(\'#pageprev\').show();
			 $(\'#nextnill\').show();
			}else{
			 $(\'#pagenext\').show();
			$(\'#nextnill\').hide();
			}
           if(pagination > 1){
		   
	
			var ppage = page;
			var pagenext = ++page;
			var pagep = --page;
			var pageprev = --pagep;
       $(\'#pagination\').html(ppage+\'&nbsp;of&nbsp;\'+pagination);
       }else{
	   
	   $(\'#origpage\').hide();
	   $(\'#paginationdiv\').hide();
	   }
                     }    
                  })

}
 $(window).load(function(){
           
       getl();
      
});
//function tsort(el,el_id){
//     if(! el.hasClass(\'active\')){
//         $(\'#location_list .sort_trig\').removeClass(\'active\');
//        el.addClass(\'active\');
//       $(\'#sort_par\').val(el_id);
//          getl(); 
//  }
//    
//}  	
 function nextgroup(){
var page = $(\'#pageno\').val();
var nextpage = ++page;
$(\'#pageno\').val(nextpage);
getl();
}
function prevgroup(){

var page = $(\'#pageno\').val();

var nextpage = --page;

$(\'#pageno\').val(nextpage);
getl();
}
 function tsort(el,el_id){
     if(! el.hasClass(\'active\')){
         $(\'#location_list .sort_trig\').removeClass(\'active\').show();
            el.addClass(\'active\');
            el.siblings().hide();      
  }else{
        $(\'#location_list .sort_trig\').removeClass(\'active\');        
           el.siblings().addClass(\'active\').show();
           el.hide();
           var par = el_id.split(\'-\');
               if( par[1] == \'a\'){
                  el_id = par[0]+\'-d\';}
               else if(par[1] == \'d\'){
                  el_id = par[0]+\'-a\';}      
    }
         $(\'#sort_par\').val(el_id);
          getl(); 
    
}

</script>
'; ?>

<div style="margin-top:20px">
  <div class="main">
    <div class="justified-nav-bar column-full">
      <ul class="nav nav-justified">
     
        <li><a href="editProfile.php">Company</a></li>
        <li  class="active"><a href="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>javascript: void(0)<?php else: ?>locationView.php<?php endif; ?>" style="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>background-color:#f5f6f8; color:#cccccc;<?php endif; ?>">Locations</a></li>
        <li><a href="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>javascript: void(0)<?php else: ?>departmentView.php<?php endif; ?>"style="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>background-color:#f5f6f8; color:#cccccc;<?php endif; ?>">Groups</a></li>
        <li><a href="companyuserView.php">Users</a></li>
        <li><a href="scenarioView.php">Scenario</a></li>
      </ul>
    </div>
    <?php if ($this->_tpl_vars['var_msg']): ?> <span class="menu_msg" type="hidden" style="color:red;display:none;"> <?php echo $this->_tpl_vars['var_msg']; ?>
 </span> <?php endif; ?>
    <div id="my_modaladd" class="over_laydesign well">
      <div class="edit_pop5">
        <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;" 
class="my_modaladd_close" href="#"><img src="img/close_btn.png" alt="Close" 
border="0" /></a>
	   <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 0;
  padding: 0 0 20px 0;" class="over_hed">Add Location</h2>
      </div>
   <div class="addloc_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>

      <form id="frmAdd_loc" method="post" enctype="multipart/form-data" class="form-horizontal">
                   
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Add Location</label>
            <div class="controls over_select">
             
              <input type="text" class = "validate[required] input_text edit_scenario_name" name="locationname" id="locationname" value="<?php echo $this->_tpl_vars['locationname']; ?>
" size="45" placeholder="Location" required autocomplete="off" />
            </div>
          </div>
          <div class="over_but" style=" float:right; padding-right:14px; margin:25px 0 0 0;">
            <div class="control-group bur_siz"> </div>
            <div class="ove_button">
              <input type="submit" id="add_loc" name="add" class="overButton" value="Submit" style="margin:0px 10px 0px 20px;width:120px;">

               <button type="button" class="my_modaladd_close my_modaladd_close2" style="width: 120px;">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="page-header" style="border: none !important; padding:67px 0 0 0;">
      <h2 class="company_page_header">Your company may have several locations. Use the Add Location button below to creat new locations</h2>
    </div>
    <p class="al-r"><a href="#" class="btn button-blue my_modaladd_open"  onClick="clickerdepp_add();">Add Location</a></p>
    <table class="table table-striped table-hover" id="location_list" width="100%" border="0" cellspacing="5" rel="<?php echo $this->_tpl_vars['RECLIMIT']; ?>
" cellpadding="5">
      <thead>
      <th width="35%"><span>Location</span><span class="sort-data"><i class="icon-bg asc sort_trig" onclick="tsort($(this),'f1-a')"></i><i class="icon-bg desc sort_trig" onclick="tsort($(this),'f1-d')"></i></span></th>
        <th width="35%" class="al-c"><span>Status</span><span class="sort-data"><i class="icon-bg asc sort_trig" onclick="tsort($(this),'f2-a')"></i><i class="icon-bg desc sort_trig" onclick="tsort($(this),'f2-d')"></i></span></th>
        <th width="35%" class="al-c"> Actions</th>
        
          </thead>
		  <input type="hidden" name="sort_par" id="sort_par" value=""/>
		   <input type="hidden" name="pageno" id="pageno" value="<?php echo $this->_tpl_vars['curr_page']; ?>
"/>
		  <tbody>
		  <?php if ($this->_tpl_vars['count_db_res'] > 0): ?>							
        <?php echo smarty_function_assign(array('var' => 'totdata','value' => '0'), $this);?>
					
        <?php if (count($_from = (array)$this->_tpl_vars['dataGroup'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>
      <tr>
        <td width="35%" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['locationname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</td>
        <input  id='locname_<?php echo $this->_tpl_vars['currdata']['locationId']; ?>
' type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['locationname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
">
        <td width="35%" align="left" class="al-c success-text" id="status_<?php echo $this->_tpl_vars['currdata']['locationId']; ?>
"> <?php if ($this->_tpl_vars['currdata']['eStatus'] == '1'): ?>Active<?php elseif ($this->_tpl_vars['currdata']['eStatus'] == '0'): ?>Inactive<?php endif; ?>
          <input  id='locstat_<?php echo $this->_tpl_vars['currdata']['locationId']; ?>
' type="hidden" value="<?php echo $this->_tpl_vars['currdata']['eStatus']; ?>
"></td>
        <td class="control-buttons" align="left" width="35%"><!--
			<a href="" onClick="clicker(<?php echo $this->_tpl_vars['currdata']['locationId']; ?>
);" class="topopup">Edit</a>
			<a title="Delete Incident" href="<?php echo $this->_tpl_vars['view_file']; ?>
?id=<?php echo $this->_tpl_vars['currdata']['locationId']; ?>
&action=Delete" class="confirm">Delete</a>
			--> 
          <a title="Edit Location" href="" onClick="clickerdepp(<?php echo $this->_tpl_vars['currdata']['locationId']; ?>
);" class="my_modal_open" data-popup-order="0">Edit</a> <a title="Delete Location" onClick="clickerdepp_delete(<?php echo $this->_tpl_vars['currdata']['locationId']; ?>
);" href="" class="my_modaldelete_open">Delete</a></td>
      </tr>
      <?php echo smarty_function_assign(array('var' => 'locid','value' => $this->_tpl_vars['currdata']['locationId'],'scope' => 'global'), $this);?>
	
      
      <?php echo smarty_function_assign(array('var' => 'totdata','value' => $this->_tpl_vars['totdata']+1), $this);?>
	
      <?php endforeach; unset($_from); endif; ?>							
      <?php else: ?>
      <tr>
        <td width="35%" colspan="7" style="color:red;">No Records Available</td>
      </tr>
      <?php endif; ?>
	  </tbody>
    </table>
<div  class="select-02_right" id="paginationdiv" style="display:none;text-align:right; padding-bottom:8px;padding-right:0!important;">
         		
		   		 <img src="images/paging/previous.png" border="0" id="pageprev" style="cursor:pointer;" onclick="prevgroup()" />
				  <img src="images/paging/previous_disable.png" id="prevnill" border="0" style="cursor:text;" />	
        	<span id="pagination" style="font-size: 14px;color:#999; float: center; padding-top:6px;"></span>
			<img src="images/paging/next_disable.png" border="0" id="nextnill" style="cursor:text;" />
		  <img src="images/paging/next.png" title="Next" border="0" id="pagenext" style="cursor:pointer;" onclick="nextgroup()" />
	
</div>
    <div id="toPopup">
      <div class="close"></div>
      <span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
      <div id="popup_content"> <!--your content start-->
        <h2>Edit Location</h2>
        <div class="create">
          <div class="company">
          <label>Location Name:</label>
          <!--<form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data">-->
            <input type="text" class = "validate[required] input_text" name="locationname" id="editname" />
            </div>
            <div class="company">
              <label>Status :</label>
              <select name="eStatus1" id="select" class="select_cmb select_cmb2">
                <option  value="1">Active</option>
                <option  value="0">Inactive</option>
              </select>
              <input  id='locationid' type="hidden" name = "id">
            </div>
            <div class="company editprofilebutton editprofilebutton2 company02 company03" style="float:left!important;" >
              <input type="submit" id="submit" name="add" class="button_text" value="Update" onClick="updatestatus();">
              <input type="button" style="background-color:#ACACAC !important;" value="Cancel" class="button_text" >
            </div>
          </form>
        </div>
      </div>
      <p align="center"><a href="#" class="livebox"></a></p>
    </div>
    <div class="loader"></div>
    <div id="backgroundPopup"></div>
  </div>
  
  <!-- <button class="my_modal_open" data-popup-order="0">Click Me</button>-->
  
  <div id="my_modal" class="over_laydesign well">
    <div class="edit_pop5">
      <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;" class="my_modal_close" href="#"><img src="img/close_btn.png" alt="Close" border="0" /></a>
        <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 0;
  padding: 0 0 20px 0;" class="over_hed">Edit Location</h2>
      </div>
    <div class="editloc_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>

      <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="control-group over_size edit_scenario">
          <label for="select01" class="control-label">Location Name</label>
          <div class="controls over_select">
		  <input type="hidden" id = "prevlocation" name="prevlocation"/>
		    <input type="hidden" id = "prevstatus" name="prevstatus"/>
            <input type="text" class = "validate[required] input_text edit_scenario_name edit_loc_name" name="locationname" id="editname" size="45" placeholder="Location"/>
          </div>
        </div>
        <div class="control-group over_size edit_scenario">
          <label for="select01" class="control-label">Status</label>
          <div class="controls over_select edit_scenario_radio"  id = "estatus">
            <label><span class="over_radio">
              <input type="radio"  checked="checked" value="1" id="active" name="eStatus" >
              </span> <span class="over_spn">Active</span></label>
            <label><span class="over_radio">
              <input type="radio"  value="0" id="inactive" name="eStatus" >
              </span> <span class="over_spn">Inactive</span></label>
          </div>
        </div>
        <input  id="locationid" type="hidden" name = "id">
        <div class="over_but" style="float:right;padding-right:14px; margin:20px 0 0 0;">
          <div class="control-group bur_siz"> </div>
          <div class="ove_button">
            <input type="submit" id="submit_edit" name="add" class="overButton" value="Update" style="margin:0 10px 0 0;width:120px !important;">
            <button type="button" class="overButton over_cancle my_modal_close" style="width: 120px; margin:0;">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  
  <!-- edit pop up end....-----> 
  <!-- delete pop up....----->
  
  <div id="my_modaldelete" class="over_laydesign well">
    <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modaldelete_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> </div>
    <div class="over_delete delete_scenario">
      <p class="over_det_text"><strong style="padding:0 !important;">Are you sure you want to Delete this Location ?</strong></p>
      <p class="over_text_det">If you delete you can't recover this Location anymore</p>
      <div class="ove_button delete_scenario_button"> 
	  <input type="hidden" id="locationId" name="loc"/>
        <!--                <a href="" id="deleteurl" style="color:#fff;background-color:#1e8ece;" class="overButton over_mid" >Confirm Delete</a>--> 
        <a href="" id="deleteurl" style="width: 125px !important;height:35px !important;text-align:center !important;line-height:35px !important;color:#fff !important; float:left; background:#1e8ece; text-decoration: none; margin:18px 0 0 150px;" class="overButton over_mid delete_scenario_conform" >Confirm Delete</a> 
        <script>
          // }
                
            </script>
            </div>
        </div>
  </div>
</div>
<div class="reveal-modal" id="mssg_pop" > <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
  <div class="pop_div"></div>
  <button type="button" class="close-reveal-modal popy" onclick = "reset()" style="width:100px; text-align: center;">OK</button>
</div>
<?php echo ' 

<script type="text/javascript">
  
 $(window).load(function(){
            var mssg = $.trim($(\'.menu_msg\').html());
       $(\'.pop_div\').html(mssg);
           if(mssg.length > 0){
        $(\'#mssg_pop\').reveal();
       } 
}) 
 
</script>
 '; ?>
  	

	