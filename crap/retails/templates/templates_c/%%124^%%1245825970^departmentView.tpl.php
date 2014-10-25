<?php /* Smarty version 2.6.0, created on 2014-01-09 00:42:44
         compiled from departmentView.tpl */ ?>
<link rel="stylesheet" href="js/sorting/themes/blue/style.css" type="text/css" media="print, projection, screen" />
<script type="text/javascript" src="js/sorting/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/jlist.js"></script>

<?php echo '<script type="text/javascript" src="js/jlist.js"></script>
<link rel="stylesheet" href="js/confirm/jquery-ui.css" type="text/css">
<script src="js/confirm/avg_ls_dom.js" type="text/javascript"></script> 
<script src="js/confirm/jquery-ui.js"></script> 
<script src="js/confirm/jquery_002.js"></script> 

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
     $(\'#my_modalimport\').popup();     
       
         
    });
        
        
       function clickerdepp(x) { 
           
           $(\'#my_modal\').popup();
               
               
           var y = document.getElementById(\'deptname_\'+x).value;
                                var a = document.getElementById(\'deptlocid_\'+x).value;	
                                var z = document.getElementById(\'deptstat_\'+x).value;		
                           $(\'#departmentnamee\').val(y);
                               if(z==1)
                                   {
                                   document.getElementById(\'active\').checked = true;
                                       }
                                           else
                                               {
                                                    document.getElementById("inactive").checked = true;
                                                   }
                $(\'#select\').val(z);					
$(\'#editlocation\').val(a);				
        $(\'#deptid\').val(x);			    
        $(\'#prevname\').val(y);   
 $(\'#prevstatus\').val(z); 	
               
               
           
           }
        
  </script>
   <script>
  $(function() {
      
	$(":file").change(function(){
	var filename = $(":file").val().replace(/.*(\\/|\\\\)/, \'\');
	$(this).next(\'.file_name01\').children(\'.file_name01_mssg\').html(filename);
 });
    });	
function reset(){
{assign var="var_msg" value=""}
} 
  </script>
   <script>
    $(function() {
      $(\'#my_modaladd\').popup();
    });
        
  
     function clickerdepp_add()
         {
            $(\'#my_modaladd\').popup(); 
             }
        
       function clickimport()
         {
            $(\'#my_modalimport\').popup();  
             }   
       
        
        
        
  </script>
  

 <script>
            function clickerdepp_delete(g)
            {
                var locid = $(\'#deptlocid_\'+g).val();
					$(\'#locationid\').val(locid);
					$(\'#depid\').val(g);
                    $(\'#my_modaldelete\').popup();
					 var page = $(\'#pageno\').val();
					
                      var urldelete ="departmentView.php?page="+page+"&id="+g+"&lid="+locid+"&action=Delete";
                         
                          
             var delurl = document.getElementById("deleteurl"); 
                // if(delurl)
                    // {
                        // alert(delurl);
            delurl.href = urldelete;
//}
     
                          
                          
             }   
            </script>
              
                            <script>
    $(function() {
      $(\'#my_modaldelete\').popup();
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
$(function() {		
$(".confirm").easyconfirm();		
//alert("kavita");		
$("#alert").click(function() {		});	}); 
    function clickerdep(x) {	
                                var y = document.getElementById(\'deptname_\'+x).value;
                                var a = document.getElementById(\'deptlocid_\'+x).value;	
                                var z = document.getElementById(\'deptstat_\'+x).value;		
                           $(\'#editdept\').val(y);			
                $(\'#select\').val(z);					
$(\'#editlocation\').val(a);				
        $(\'#deptid\').val(x);			
                                                } 	
$(document).ready(function() {	
$(".menu_msg").each( function() {   
alert($(this).val());	
});});
 
/*********************************||Form Validations||***************************************/ 
/*********************************||Import Group||*******************************************/
 $(document).on(\'click\',\'#import_group_btn\',function(){
   var file = $.trim($(\'.uploadattach\').val());
   $(\'.import_group_err\').html(\'\');
       if(file.length == 0){
	     $(\'.import_group_err\').html(\'Please choose the file!!!\').show();
          return false;
       }

});
 $(document).on(\'click\',\'#deleteurl\',function(e){
   var deptid = $.trim($(\'#depid\').val());
    e.preventDefault();
	   $.ajax({
                  url:"deptdelete.php",
                  type:"POST",
                  data:{deptid:deptid},
				         success:function(resp){
                              var trim_resp = $.trim(resp);
                    if(trim_resp ==\'error2\'){
                                     $(\'.group_err\').html(\'Group could not be added.Try again!!!\').show();
				      return false;
                                }
                                else if(trim_resp == \'deleted\'){
									$(\'.menu_msg\').html(\'Group added successfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'R3JvdXAgYWRkZWQgc3VjY2Vzc2Z1bGx5\';
									    var page = $(\'#pageno\').val();
										$(\'#my_modaldelete\').popup(\'hide\');
										getGroups();
									$(\'.pop_div\').html(\'Group Deleted successfully\');
          
										$(\'#mssg_pop\').reveal();
       
					}, 10); 
                               }
                        } 
                   
                 });

});
$(document).on(\'load\',\'#group_srch_res tbody\',function(){
            var pagination = $.trim($(\'#arr_page_vars\').val());
			var lid =  $.trim($(\'#locationdata\').val())
			alert(pagination);
           if(pagination > 1){
		    $(\'#paginationdiv\').show();
       $(\'#pagination\').html(\'1&nbsp;of&nbsp;\'+pagination);
	   $(\'#pagenext\').attr(\'href\',\'departmentView.php?&lid=&page=2\');
	   
       } 
});
/*********************************||Create Group||*******************************************/  
 $(document).on(\'click\',\'#addgroup_btn\',function(e){
  $(\'.group_err\').html(\'\');
   var name = $.trim($(\'#departmentname\').val());
    var locid = $.trim($(\'#locationname\').val());
 
       if(name.length == 0){
	    $(\'.group_err\').html(\'Please Enter the Group Name!!!\').show();
          return false;
       }else{
	    e.preventDefault();
	   $.ajax({
                  url:"deptsearch.php",
                  type:"POST",
                  data:{locid:locid,deptname:name},
				         success:function(resp){
                              var trim_resp = $.trim(resp);
                               if(trim_resp ==\'error1\'){
                                     $(\'.group_err\').html(\'Group Name Already Exists!!!\').show();
				      return false;
				}else if(trim_resp ==\'error2\'){
                                     $(\'.group_err\').html(\'Group could not be added.Try again!!!\').show();
				      return false;
                                }
                                else if(trim_resp == \'added\'){
                                   $(\'.group_err\').html(\'Group added successfully\').show();
									$(\'.menu_msg\').html(\'Group added successfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'R3JvdXAgYWRkZWQgc3VjY2Vzc2Z1bGx5\';
									    var page = $(\'#pageno\').val();
										$(\'#my_modaladd\').popup(\'hide\');
										 $(\'.group_err\').html(\'\');
										 $(\'#departmentname\').val(\'\');
										  $(\'#locationdata\').val(locid);
										getGroups();
									$(\'.pop_div\').html(\'Group added successfully\');
          
										$(\'#mssg_pop\').reveal();
       
					}, 10); 
                               }
                        } 
                   
                  });
	   }

});    
/*********************************||Edit Group||*******************************************/    
$(document).on(\'click\',\'#editgroup_btn\',function(e){
 $(\'.editgroup_err\').html(\'\');
   var name = $.trim($(\'#departmentnamee\').val());
    var locid = $.trim($(\'#editlocation\').val());
	var depid = $.trim($(\'#deptid\').val());
	var prevname = $.trim($(\'#prevname\').val());
	var prevstatus = $.trim($(\'#prevstatus\').val());
	var estatus = $.trim($(\'#estatus input[name=eStatus]:checked\').val());

           if(name.length == 0){
	    $(\'.editgroup_err\').html(\'Please Enter the Group Name!!!\').show();
          return false;
       }else if(name == prevname && estatus == prevstatus){
	    $(\'#my_modal\').popup(\'hide\');
	   return false;
	  
	   }else{
	    e.preventDefault();
	   $.ajax({
                  url:"deptsearchedit.php",
                  type:"POST",
                  data:{locid:locid,deptname:name,prevname:prevname,deptid:depid,estatus:estatus},
				         success:function(resp){
                              var trim_resp = $.trim(resp);
                               if(trim_resp ==\'error1\'){
                                     $(\'.editgroup_err\').html(\'Group Name Already Exists!!!\').show();
				      return false;
				}else if(trim_resp ==\'error2\'){
                                     $(\'.editgroup_err\').html(\'Group could not be added.Try again!!!\').show();
				      return false;
                                }
                                else if(trim_resp == \'added\'){
                                   $(\'.editgroup_err\').html(\'Record is Updated\').show();
									$(\'.menu_msg\').html(\'Record is Updated\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'R3JvdXAgYWRkZWQgc3VjY2Vzc2Z1bGx5\';
									    var page = $(\'#pageno\').val();
										$(\'#my_modal\').popup(\'hide\');
										 $(\'.editgroup_err\').html(\'\');
										 $(\'#departmentname\').val(\'\');
										  $(\'#locationdata\').val(locid);
										getGroups();
									$(\'.pop_div\').html(\'Record is Updated\');
          
										$(\'#mssg_pop\').reveal();
       
					}, 10); 
                               }
                        } 
                   
                  });
	   }

});   
    </script> 
<script type="text/javascript">
	$(document).ready(function() {	
            $(".deptId").click(function() {	
                    document.getElementById(\'div_depart\').innerHTML = \'<div id="upload_dept_csv" ><div style="padding-top:10px;" ><form method="post" name="frm_csv_upload" enctype="multipart/form-data" ><input type="hidden" name="csvdeptid" id="csvdeptid" value="\' + $(this).attr("deptId") + \'" />Select file :<input type="file" name="csv" /><input type="submit" name="csvdeptupload" value="Submit" class="button_text"/><br /><br />Download file - <a href="download.php?download_file=example.xls" target="_blank">example.xls </a></form></div></div>\';	
                    document.getElementById(\'div_view\').style.display = "block";		
    });	});
     function alertbox(x){ alert(x); }	
    function changestatus(deptid) {	
            var httpxml;		
    try {			// Firefox, Opera 8.0+, Safari			
    httpxml = new XMLHttpRequest();		
    } catch (e) {			
    // Internet Explorer			
    try {				
    httpxml = new ActiveXObject("Msxml2.XMLHTTP");			
    } catch (e) {			
            try {				
            httpxml = new ActiveXObject("Microsoft.XMLHTTP");	
                            } catch (e) {		
                            alert("Your browser does not support AJAX!");	
                                    return false;	
                            }			}		}		
    
function stateck() {			
    if (httpxml.readyState == 4) {			
            var response = httpxml.responseText;				
    //alert(response);				
    if (response == 1) {				
            document.getElementById(\'status_\' + deptid).innerHTML = "<img src=\'images/green-circle.png\' title=\'Active\' />";
            document.getElementById(\'addstaff_\' + deptid).innerHTML = \'<a href="companyuserAdd.php?department=\' + deptid + \'"><img src="images/icons/useradd.gif" height="20" width="20" title="Add Staff Member" /></a>\';		
                            document.getElementById(\'uploadexcel_\' + deptid).innerHTML = \'<a href="#" class="deptId" deptId=\' + deptid + \'><img src="images/Excel.png" height="20" width="20" style="padding-top:2px;" border="none" title="Upload staff from an excel file" /></a>\';		

    $(".deptId").click(function() {	
              document.getElementById(\'div_depart\').innerHTML = \'<div id="upload_dept_csv" ><div style="padding-top:10px;" ><form method="post" name="frm_csv_upload" enctype="multipart/form-data" ><input type="hidden" name="csvdeptid" id="csvdeptid" value="\' + $(this).attr("deptId") + \'" />Select file :<input type="file" name="csv" /><input type="submit" name="csvdeptupload" value="Submit" class="button_text"/><br /><br />Download file - <a href="download.php?download_file=examplestaff.xls" target="_blank">example.xls </a></form></div></div>\';						document.getElementById(\'div_view\').style.display = "block";		
                            });				
    } else {				
            document.getElementById(\'status_\' + deptid).innerHTML = "<img src=\'images/red-circle.png\' title=\'Inactive\' />";				
            document.getElementById(\'addstaff_\' + deptid).innerHTML = \'<img src="images/icons/useraddina.gif" height="20" width="20" />\';		
                            document.getElementById(\'uploadexcel_\' + deptid).innerHTML = \'<img src="images/Excelina.png" height="20" width="20" style="padding-top:2px;" border="none"  />\';			
            }			}		}		
    var url = "updatedepartment.php";		
    url = url + "?did=" + deptid;		
    httpxml.onreadystatechange = stateck;		
    httpxml.open("GET", url, true);		
    httpxml.send(null);	}



 function getGroups(){
   var location = $(\'#locationdata\').val();
   var keyword = $(\'#keyword\').val();
    var sort = $(\'#sort_par\').val();
   var page = $(\'#pageno\').val();
   
          $.ajax({
                  url:"groupsearch.php",
                  type:"POST",
                  data:{locationid:location,keyword:keyword,page:page,sort:sort},
                  success:function(resp){
                         $(\'#group_srch_res tbody\').html(resp);
		var pagination = $.trim($(\'#arr_page_vars\').val());
		if(page>1){
			var check = document.getElementsByTagName(\'td\')[0].innerHTML;
								if(check == \'No Records Available\'){
							var newpage = --page;
							$(\'#pageno\').val(newpage);
							getGroups();
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
                 });

}
function nextgroup(){
var page = $(\'#pageno\').val();
var nextpage = ++page;
$(\'#pageno\').val(nextpage);
getGroups();
}
function prevgroup(){

var page = $(\'#pageno\').val();

var nextpage = --page;

$(\'#pageno\').val(nextpage);
getGroups();
}
//function tsort(el,el_id){
//     if(! el.hasClass(\'active\')){
//         $(\'#group_srch_res .sort_trig\').removeClass(\'active\');
//        el.addClass(\'active\');
//       $(\'#sort_par\').val(el_id);
//          getGroups(); 
//  }
//    
//} 
function tsort(el,el_id){
     if(! el.hasClass(\'active\')){
         $(\'#group_srch_res .sort_trig\').removeClass(\'active\').show();
            el.addClass(\'active\');
            el.siblings().hide();      
  }else{
        $(\'#group_srch_res .sort_trig\').removeClass(\'active\');        
           el.siblings().addClass(\'active\').show();
           el.hide();
           var par = el_id.split(\'-\');
               if( par[1] == \'a\'){
                  el_id = par[0]+\'-d\';}
               else if(par[1] == \'d\'){
                  el_id = par[0]+\'-a\';}      
    }
         $(\'#sort_par\').val(el_id);
          getGroups(); 
    
}    
  
    
    
 $(window).load(function(){
            var locationd = $(\'#locationdata\').val();
      
           if(locationd.length > 0){
       getGroups();
       } 
});

</script> 
'; ?>

<div style="margin-top:20px">
  <div>
    <div class="justified-nav-bar column-full">
      <ul class="nav nav-justified">
        <li><a href="editProfile.php">Company</a></li>
        <li><a href="locationView.php">Locations</a></li>
        <li class="active"><a href="departmentView.php">Groups</a></li>
        <li><a href="companyuserView.php">Users</a></li>
        <li><a href="scenarioView.php">Scenario</a></li>
      </ul>
    </div>
    <div id="home-content" class="column-full">
      <div id="my_modaladd" class="over_laydesign well">
        <div class="edit_pop4">
          <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;" 
class="my_modaladd_close" href="#"><img src="img/close_btn.png" alt="Close" 
border="0" /></a>
            <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 0;
  padding: 0 0 20px 0;" class="over_hed"> Create Group</h2>
          </div>
		  <div class="group_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
 
          <form name="frmAdd" id="frmAdd" method="post" 
enctype="multipart/form-data" class="form-horizontal">


<input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
      <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
	   <input type="hidden" id="pageno" value="<?php echo $this->_tpl_vars['curr_page']; ?>
">
		  <input type="hidden" name="lid" value="<?php echo $this->_tpl_vars['lid']; ?>
">




           
         <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Select Location</label>
            <div class="controls over_select edit_scenario_radio">
<select name="locationname" id="locationname" class="validate[required] 
select-one select_cmb select_cmb0002">
          		
	<?php if (count($_from = (array)$this->_tpl_vars['data_locationname'])):
    foreach ($_from as $this->_tpl_vars['locationname_all']):
?>		
		
	<?php if ($this->_tpl_vars['locationname_all']['eStatus'] == 1): ?>				
	
          
                  
                  <option value="<?php echo $this->_tpl_vars['locationname_all']['locationId']; ?>
"> <?php echo $this->_tpl_vars['locationname_all']['locationname']; ?>
 </option>
                  
                  
          	
	<?php endif; ?>					<?php endforeach; unset($_from); endif; ?>			
	
        
                
                </select>
              </div>
            </div>
            <div class="control-group over_size edit_scenario">
              <label for="select01" class="control-label"> Group Name </label>
              <div class="controls over_select">
                <input type="text" class = "validate[required] input_text edit_scenario_name" name="departmentname" id="departmentname" value="<?php echo $this->_tpl_vars['departmentname']; ?>
" size="45" placeholder="Group" onchange="deptsearch();"/>
              </div>
            </div>
            <div class="over_but">
              <div class="control-group bur_siz"> </div>
              <div class="ove_button" style="float:right; padding-right:16px; margin:35px 0 0 0;">
                <input type="submit" id="addgroup_btn" name="Add" class="overButton" value="Submit" style="margin:0px 10px 0px 20px;width:120px;">
                <button type="button" class="my_modaladd_close my_modaladd_close2" style="width:120px;">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="heading column-full" style=" margin:24px 0 0 0!important; padding: !important;">
        <h2 style="text-align: left !important; margin: 0 !important; width:80%;"> You can import all your groups from a spreadsheet as long as you follow our format. <a href="download.php?download_file=example.xls">Click here</a> for example format. </h2>
        <a href="" class="my_modalimport_open btn button-blue" onclick="clickimport();" style="margin:6px 0 0 0;"> <span class="icon-bg import-groups">Import Groups</span> </a> </div>
      <div class="adduser-control" style="margin-top:30px;"> 
        <!-- action="<?php echo $this->_tpl_vars['page_name']; ?>
" -->
        <form name="frmdept" id="frmdept" method="post"  >
          <div class="col-md-4" style="float:left;">
		  <input type="hidden" name="locationdata" value="<?php echo $this->_tpl_vars['locationdata']; ?>
">
            <select name="locationdata" id="locationdata" class="form-control" onChange="getGroups()">
  <?php if ($this->_tpl_vars['tdata'] == ''): ?>	
	
                        										
	<?php endif; ?>
    <?php if (count($_from = (array)$this->_tpl_vars['dataLocation'])):
    foreach ($_from as $this->_tpl_vars['trdata']):
?>
	<?php if ($this->_tpl_vars['trdata']['eStatus'] == 1): ?>													
	
                      <option value="<?php echo $this->_tpl_vars['trdata']['locationId']; ?>
" <?php if ($this->_tpl_vars['locationdata'] == $this->_tpl_vars['trdata']['locationId']): ?> selected="selected" <?php endif; ?>> <?php echo $this->_tpl_vars['trdata']['locationname']; ?>
	
                      <?php endif; ?> </option>
                        												
	<?php endforeach; unset($_from); endif; ?>	
            </select>
       
          </div>
          <div class="col-md-4" style="float:left;">
            <div class="input-group">
              <input name="keyword" id="keyword" type="text" class="form-control" onKeyup="getGroups()" placeholder="Search Groups" value="<?php echo $this->_tpl_vars['keyword']; ?>
">
              <span class="input-group-addon glyphicon glyphicon-search" onClick="getGroups()"></span> </div>
            <!--  onClick="frmdept.submit();"-->
          </div>
        </form>
        <div class="col-md-4" style="float:right;">
          <p class="al-r" style="float:right;"> <a href="#" class="btn button-blue my_modaladd_open" style="width:175px !important;">Add Group</a> </p>
        </div>
      </div>
      </form>
	   <input type="hidden" name="sort_par" id="sort_par" value=""/>
      <table class="table table-striped table-hover" id="group_srch_res" width="100%" border="0" cellspacing="5" cellpadding="5">
        <thead>
        <th width="25%"><span>Location</span><span class="sort-data"><i class="icon-bg asc sort_trig" onclick="tsort($(this),'f1-a')"></i><i class="icon-bg desc sort_trig" onclick="tsort($(this),'f1-d')"></i></span></th>
          <th width="25%"><span>Group Name</span><span class="sort-data"><i class="icon-bg asc sort_trig" onclick="tsort($(this),'f2-a')"></i><i class="icon-bg desc sort_trig" onclick="tsort($(this),'f2-d')"></i></span></th>
          <th width="25%" class="al-c"><span>Status</span><span class="sort-data"><i class="icon-bg asc sort_trig" onclick="tsort($(this),'f3-a')"></i><i class="icon-bg desc sort_trig" onclick="tsort($(this),'f2-d')"></i></span></th>
          <th width="25%" class="al-c"> Actions</th>
            </thead>
        <tbody>
        
          </tbody>
        
      </table>
<div  class="select-02_right" id="paginationdiv" style="display:none;text-align:right; padding-bottom:8px;padding-right:0!important;">
         		
		   		 <img src="images/paging/previous.png" border="0" id="pageprev" style="cursor:pointer;" onclick="prevgroup()" />
				  <img src="images/paging/previous_disable.png" id="prevnill" border="0" style="cursor:text;" />	
        	<span id="pagination" style="font-size: 14px;color:#999; float: center; padding-top:6px;"></span>
			<img src="images/paging/next_disable.png" border="0" id="nextnill" style="cursor:text;" />
		  <img src="images/paging/next.png" title="Next" border="0" id="pagenext" style="cursor:pointer;" onclick="nextgroup()" />
	
</div>
	  </div>
  </div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl_brder1" align="center" >
    <tr>
      <td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="10">
          <?php if ($this->_tpl_vars['var_msg']): ?> <span class="menu_msg" type="hidden" style="color:red;display:none;"> <?php echo $this->_tpl_vars['var_msg']; ?>
 </span> <?php endif; ?>
          <tr>
            <td width="100%" class="tbl_brder" ></td>
          </tr>
        </table></td>
    </tr>
  
</table>

<div id="toPopup">
              <div class="close"></div>
              <span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
              <div id="popup_content">
              <!--your content start-->
              <h2>Edit Group</h2>
              <div class="create">
          
          <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data">
            <div class="company">
              <label>Group Name:</label>
              <input type="text" class = "validate[required] input_text" name="departmentname" id="editdept" size="45"/>
            </div>
            <div class="company">
              <label>Select Location:</label>
              <select name="locationname" id="editlocation" class="validate[required] select-one select_cmb">
                  	
	<?php if (count($_from = (array)$this->_tpl_vars['data_locationname'])):
    foreach ($_from as $this->_tpl_vars['locationname_all']):
?>	
	<?php if ($this->_tpl_vars['locationname_all']['eStatus'] == 1): ?>					
	
                <option value="<?php echo $this->_tpl_vars['locationname_all']['locationId']; ?>
"> <?php echo $this->_tpl_vars['locationname_all']['locationname']; ?>
 </option>
                  	
	<?php endif; ?>					<?php endforeach; unset($_from); endif; ?>				
	
              
            
            </select>
          </div>
          <div class="company">
            <label>Status :</label>
            <select name="eStatus" id= "select" class="select_cmb">
              <option  value="1">Active</option>
              <option  value="0">Inactive</option>
            </select>
            <input  id='deptid' type="hidden" name = "id">
			<input  id='prevname' type="hidden" name = "prevname">
			<input  id='prevstatus' type="hidden" name = "prevstatus">
          </div>
          <div class="company editprofilebutton editprofilebutton2 company02 company03" style="float:left!important;" >
            <input type="submit" id="submit" name="update" class="button_text" value="Update">
            <input type="button" style="background-color:#ACACAC !important;" value="Cancel" class="button_text" >
          </div>
        </form>
      </div>
    </div>
    <p align="center"><a href="#" class="livebox"></a></p>
  </div>
  <div class="loader"></div>
  <div id="backgroundPopup"></div>
  <div class="popup" id="div_view" style="display:none; background:#000 !important; padding:30% !important;">
    <div class="close" onclick="document.getElementById('div_view').style.display='none'"></div>
    <span class="ecs_tooltip">Press Esc to close<span class="arrow"></span></span>
    <div id='upload_csv' style="display:none;" >
      <div style="vertical-align:middle; " >
        <form method="post" name="frm_csv_upload" enctype="multipart/form-data" >
          Select file :
          <input type="file" name="csv" accept="application/msexcel" />
          <input type="submit" style="float:right;width:100px !important; height: 27px !important;" name="csvupload1" value="Submit" class="button_text"/>
          <input type="hidden" value="adduser" />
          <br />
          <br />
          Download file - <a href="download.php?download_file=example.xls" target="_blank">example.xls </a>
        </form>
      </div>
    </div>
    <div id='upload_dept_csv' style="display:none;" >
      <div style="padding-top:10px;" >
        <form method="post" name="frm_csv_upload" enctype="multipart/form-data" >
          <input type="text" name="csvdeptid" id="csvdeptid" value="" />
          Select file :
          <input type="file" name="csv" />
          <input type="submit" name="csvdeptupload" value="Submit" class="button_text" style="width:100px !important; height: 27px !important;"/>
          <br />
          <br />
          Download file - <a href="download.php?download_file=example.xls" target="_blank">example.xls </a>
        </form>
      </div>
    </div>
    <div id="div_depart" style="text-decoration:none;padding:50px;background-color:#ffffff;border:0px;"> &nbsp; </div>
  </div>
  
  <!-- <button class="my_modal_open" data-popup-order="0">Click Me</button>-->
  
  <div id="my_modal" class="over_laydesign well">
    <div class="edit_pop4">
      <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;" class="my_modal_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
        <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 0;
  padding: 0 0 20px 0;" class="over_hed">Edit Department</h2>
      </div>
  <div class="editgroup_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
      <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" class="form-horizontal">
                   
          <div class="control-group over_size edit_scenario" >
            <label for="select01" class="control-label">Group Name</label>
            <div class="controls over_select edit_scenario_radio" style="float:left;"  >
             <input type="text" class="validate[required] input_text edit_scenario_name" name="departmentname" id="departmentnamee" value="" size="45" placeholder="Group" style="margin:4px 0 0 -4px;float:left;"/>
             
<!--              <input type="text" class = "over_select_siz select_cmb0002" name="departmentname" id="editdept" size="45" placeholder="Group" style="line-height:1px;border:1px solid;"/>-->
            </div>
          </div>
         <br/>
      
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Select Location</label>
            <div class="controls over_select edit_scenario_radio">
              <select id="editlocation" class="over_select_siz select_cmb0002" name="locationname" style="width:300px;">
                  
              <?php if (count($_from = (array)$this->_tpl_vars['data_locationname'])):
    foreach ($_from as $this->_tpl_vars['locationname_all']):
?>	
	<?php if ($this->_tpl_vars['locationname_all']['eStatus'] == 1): ?>					
	
                <option value="<?php echo $this->_tpl_vars['locationname_all']['locationId']; ?>
"> <?php echo $this->_tpl_vars['locationname_all']['locationname']; ?>
 </option>
                  	
	<?php endif; ?>					<?php endforeach; unset($_from); endif; ?>	
              
            
            </select>
          </div>
        </div>
        <div class="control-group over_size edit_scenario">
          <label for="select01" class="control-label">Status</label>
          <div class="controls over_select edit_scenario_radio" id="estatus">
            <label><span class="over_radio">
              <input type="radio"  value="1" id="active" name="eStatus" >
              </span> <span class="over_spn">Active</span></label>
            <label><span class="over_radio">
              <input type="radio"  value="0" id="inactive" name="eStatus" >
              </span> <span class="over_spn">Inactive</span></label>
          </div>
        </div>
        <input  id='deptid' type="hidden" name = "id">
        <div class="over_but" style="float:right; padding-right:14px;">
          <div class="control-group bur_siz"> </div>
          <div class="ove_button">
            <input type="submit" id="editgroup_btn" name="update" class="overButton" value="Update" style="margin:0px 10px 0px 20px;width:120px;">
            <button type="button" class="overButton over_cancle my_modal_close" style="width:120px;">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- delete pop up....----->
  
  <div id="my_modaldelete" class="over_laydesign well">
  	<input type="hidden" id="depid" name="depid" value="">
    <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modaldelete_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> </div>
    <div class="over_delete delete_scenario">
      <p class="over_det_text"><strong style="padding:0 !important;">Are you sure you want to Delete this Group?</strong></p>
      <p class="over_text_det">If you delete you can't recover this Group anymore</p>
      <div class="ove_button delete_scenario_button"> <a href="#" id="deleteurl" style="width: 125px !important;height:35px !important;text-align:center !important;line-height:35px !important;color:#fff !important; float:left; background:#1e8ece; text-decoration: none; margin:18px 0 0 150px;" class="overButton over_mid delete_scenario_conform" >OK</a> 
        <script>
          // }
                
            </script> 
			<input type="hidden" id="locationid" name="locationiddel" value="">
      </div>
    </div>
  </div>
  
  <!-- import users -->
  
  <div id="my_modalimport" class="over_laydesign well">
    <div class="edit_pop4 edit_pop04">
      <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;" class="my_modalimport_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
        <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 0;
  padding: 0 0 20px 0;" class="over_hed">Import Group</h2>
	    
      </div>
 <div class="import_group_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
       
      <form method="post" name="frm_csv_upload" enctype="multipart/form-data" class="form-horizontal"> 
          <div class="control-group over_size edit_scenario" style="width:450px;"> 
            <label for="select01" class="control-label">Select Location</label>
			
			<div class="controls over_select" style="width:255px; margin: 5px -4px 0;float:right;">
			 <select name="selectlocation" class="form-control" >
  <?php if ($this->_tpl_vars['tdataa'] == ''): ?>	
	
                        										
	<?php endif; ?>
    <?php if (count($_from = (array)$this->_tpl_vars['dataLocation'])):
    foreach ($_from as $this->_tpl_vars['trdataa']):
?>
	<?php if ($this->_tpl_vars['trdataa']['eStatus'] == 1): ?>													
	
                      <option value="<?php echo $this->_tpl_vars['trdataa']['locationId']; ?>
" > <?php echo $this->_tpl_vars['trdataa']['locationname']; ?>
	
                      <?php endif; ?> </option>
                        												
	<?php endforeach; unset($_from); endif; ?>	
            </select>
          </div>
        </div>
        <div class="control-group over_size edit_scenario">
          <label for="select01" class="control-label">Upload File</label>
          <div class="controls fileType withButton">
            <input type="file"  name="csv" class="uploadattach wB edit_scenario_name" accept= "application/msexcel" style="padding:0;">
            <div class="file_name01 controls_04" id="Browse001"><strong>Browse</strong><span class="file_name01_mssg"></span></div>
          </div>
        </div>
        <div class="control-group over_size edit_scenario">
          <label for="select01" class="control-label">Sample Format File</label>
          <div class="controls fileType withButton edit_scenario_radio"> Download file - <a href="download.php?download_file=example.xls" target="_blank">example.xls </a> </div>
        </div>
        <div class="over_but" style=" float:right; padding-right:14px;">
          <div class="control-group bur_siz"> </div>
          <div class="ove_button">
            <input type="submit" name="csvupload" value="Import" id="import_group_btn" class="overButton" style="margin:0px 10px 0px 20px;width:120px;"/>
            <button type="button" class="my_modalimport_close overButton over_cancle" style="width:120px;">cancel</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<div class="reveal-modal" id="mssg_pop" > <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
  <div class="pop_div"></div>
  <button type="button" class="close-reveal-modal popy" onclick="reset()">OK</button>
</div>
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
   