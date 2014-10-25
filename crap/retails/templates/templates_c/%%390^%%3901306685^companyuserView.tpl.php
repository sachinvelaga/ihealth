<?php /* Smarty version 2.6.0, created on 2014-01-09 00:42:50
         compiled from companyuserView.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign', 'companyuserView.tpl', 675, false),)), $this); ?>
<script src="js/validation/jquery.js"></script>
<link rel="stylesheet" href="js/sorting/themes/blue/style.css" type="text/css" media="print, projection, screen" />
<script type="text/javascript" src="js/sorting/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/jlist.js"></script>
<?php echo '<!--<script type="text/javascript" src="js/jlist.js"></script>-->
<link rel="stylesheet" href="js/confirm/jquery-ui.css" type="text/css">
<script src="js/confirm/avg_ls_dom.js" type="text/javascript"></script>
<script src="js/confirm/jquery-ui.js"></script>
<script src="js/confirm/jquery_002.js"></script>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<!-- <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet">-->
<link href="css/StyleSheet.css" type="text/css" rel="stylesheet">
<script src="js/jquery.popupoverlay.js"></script>
<script type="text/javascript" src="js/jquery.reveal.js"></script>
<link href="js/reveal.css" type="text/css" rel="stylesheet">

<script>
    $(function() {
      $(\'#my_modaladd\').popup({
        beforeopen: function() {
            $(\'.add_user_err\').html(\'\');
          }

        });         
      $(\'#my_modalimport\').popup();
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
        
       function clickerdepp(x) { 
           $(\'#my_modal\').reveal();
         //  $(\'#my_modal\').popup();
               
               var comuname = document.getElementById(\'comuname_\'+x).value;
					var comusurname = document.getElementById(\'comusurname_\'+x).value;
					var comudeptid = document.getElementById(\'comudeptid_\'+x).value;
					
					var comuemail = document.getElementById(\'comuemail_\'+x).value;
					var comuphone = document.getElementById(\'comuphone_\'+x).value;
					var comurole = document.getElementById(\'comurole_\'+x).value;
               
             var userstat = $.trim($(\'#roleval_\'+x).val());
   if(userstat == \'Super Admin\'){
   $(\'#superhide\').hide();
   }else{
   $(\'#superhide\').show();
   }
                               
                                var comustat = document.getElementById(\'comustat_\'+x).value;		
                          // $(\'#editdept\').val(y);
                               if(comustat==1)
                                   {
                                   document.getElementById(\'active\').checked = true;
                                       }
                                           else
                                               {
                                                    document.getElementById("inactive").checked = true;
                                                   }
           $(\'#editdept\').val(comudeptid);
		   $(\'#prevdept\').val(comudeptid);
$(\'#editname\').val(comuname);
$(\'#prevname\').val(comuname);
$(\'#editsurname\').val(comusurname); 
 $(\'#prevsurname\').val(comusurname);   
                                                       
           $(\'#editemail\').val(comuemail);
		   $(\'#prevemail\').val(comuemail);
		    $(\'#prevstatus\').val(comustat);
$(\'#editphone\').val(comuphone);
$(\'#prevphone\').val(comuphone);
$(\'#editrole\').val(comurole);
$(\'#prevrole\').val(comurole);
         $(\'#comuid\').val(x);	      
               
           
           }    
  </script>
  
 

 <script>
 
            function clickerdepp_delete(g) 
            {
                
                    $(\'#my_modaldelete\').reveal();
					$(\'#duserid\').val(g);
					 var page = $(\'#pageno\').val();
                      var urldelete ="companyuserView.php?page="+page+"&id="+g+"&action=Delete";
                         
                          
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
      $(\'#my_modalupgrade\').popup();
    });
        
      
/*********************************||Form Validations||***************************************/ 
/*********************************||Import Users||*******************************************/
 $(document).on(\'click\',\'#import_user_btn\',function(){
  $(\'.import_user_err\').html(\'\');
   var file = $.trim($(\'#imp_user_file\').val());
   //alert(file.length);
       if(file.length == 0){
	   $(\'.import_user_err\').html(\'Please choose the file!!!\').show();
          return false;
       }

});  

/*********************************||Add Users||*******************************************/
 $(document).on(\'click\',\'#create_user_btn\',function(e){
     $(\'.add_user_err\').html(\'\');
   var name = $.trim($(\'#name\').val());
   var surname = $.trim($(\'#surname\').val());
   var email = $.trim($(\'#email\').val());
   var phone = $.trim($(\'#phone\').val());
var dept = $.trim($(\'#department\').val());
var userrole = $.trim($(\'#useradd\').val()); 
    var page = $(\'#pageno\').val();
       if(name.length == 0){
          $(\'.add_user_err\').html(\'Name is required\').show(); 
          return false;
       }else if(surname.length == 0){
          $(\'.add_user_err\').html(\'Surname is required\').show();  
          return false;
       }else if (!/^[a-z0-9!#$%&\'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&\'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(email)){
          $(\'.add_user_err\').html(\'Invalid Email\').show();  
          return false;
       }else if(!/^\\d{10,20}$/.test(phone)){
           $(\'.add_user_err\').html(\'Mobile Number Should Be 10 and Above Digits\').show();  
          return false;
       }else{
	      e.preventDefault();
	             $.ajax({
                  url:"emailcheckadd.php",
                  type:"POST",
				  data:{email:email,dept:dept,name:name,surname:surname,phone:phone,userrole:userrole},
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                               if(trim_resp ==\'error1\'){
                                     $(\'.add_user_err\').html(\'Email Already Exists!!!\').show();
				      return false;
				}else if(trim_resp ==\'error2\'){
                                     $(\'.add_user_err\').html(\'Staff could not be added.Try again!!!\').show();
				      return false;
                                }
                                else if(trim_resp == \'added\'){
                                   $(\'.add_user_err\').html(\'Staff added successfully\').show();
									$(\'.menu_msg\').html(\'Staff added successfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'U3RhZmYgYWRkZWQgc3VjY2Vzc2Z1bGx5\';
									$(\'#my_modaladd\').popup(\'hide\');
										 $(\'.add_user_err\').html(\'\');
										 $(\'#name\').val(\'\');
										 $(\'#surname\').val(\'\');
										 $(\'#email\').val(\'\');
										 $(\'#phone\').val(\'\');
										 $(\'#grp_sel\').val(dept);
											getUsers();
									$(\'.pop_div\').html(\'Staff added successfully\');
										$(\'#mssg_pop .popy\').html(\'OK\');
										$(\'#mssg_pop\').reveal();
					}, 1); 
                               }
                        }    
                  });
	   }     
});  
/*********************************||Edit Users||*******************************************/
$(document).on(\'click\',\'#edit_user_btn\',function(e){
     $(\'.edit_user_err\').html(\'\');
   var name = $.trim($(\'#editname\').val());
    var prevname = $.trim($(\'#prevname\').val());
   var surname = $.trim($(\'#editsurname\').val());
    var prevsurname = $.trim($(\'#prevsurname\').val());
   var email = $.trim($(\'#editemail\').val());
   var id = $.trim($(\'#comuid\').val());
   var prevemail = $.trim($(\'#prevemail\').val());
    var prevstatus = $.trim($(\'#prevstatus\').val());
	 var status = $.trim($(\'#estatus input[name=eStatus]:checked\').val());
  var userrole = $.trim($(\'#editrole\').val());
var prevuserrole = $.trim($(\'#prevrole\').val());   
   var phone = $.trim($(\'#editphone\').val()); 
   var prevphone = $.trim($(\'#prevphone\').val()); 
 var dept = $.trim($(\'#editdept\').val()); 
var prevdept = $.trim($(\'#prevdept\').val()); 
		 var page = $(\'#pageno\').val();
       if(name.length == 0){
          $(\'.edit_user_err\').html(\'Name is required\').show(); 
          return false;
       }else if(surname.length == 0){
          $(\'.edit_user_err\').html(\'Surname is required\').show();  
          return false;
       }else if (!/^[a-z0-9!#$%&\'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&\'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(email)){
          $(\'.edit_user_err\').html(\'Invalid Email\').show();  
          return false;
       }else if(!/^\\d{10,20}$/.test(phone)){
           $(\'.edit_user_err\').html(\'Mobile Number Should Be 10 and Above Digits\').show();  
          return false;
       }else if(name == prevname && surname == prevsurname && email==prevemail && status==prevstatus && userrole==prevuserrole && phone == prevphone && dept == prevdept){
         
		$(\'#my_modal\').trigger(\'reveal:close\')
          return false;
       }else if(email != prevemail){
	   e.preventDefault();
	        $.ajax({
                  url:"emailcheck.php",
                  type:"POST",
				  data:{id:id,email:email,dept:dept,name:name,surname:surname,phone:phone,userrole:userrole,status:status},
                  success:function(resp){
			        var trim_resp = $.trim(resp);
                               if(trim_resp ==\'error1\'){
                                     $(\'.edit_user_err\').html(\'Email Already Exists!!!\').show();
									return false;
				}else if(trim_resp ==\'error2\'){
                                     $(\'.edit_user_err\').html(\'User could not be Updated.Try again!!!\').show();
									return false;
                                }
                                else if(trim_resp == \'added\'){
                                   $(\'.edit_user_err\').html(\'Record is Updated\').show();
									$(\'.menu_msg\').html(\'Record is Updated\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'UmVjb3JkIGlzIFVwZGF0ZWQ\';
											$(\'#my_modal\').popup(\'hide\');
										 $(\'.edit_user_err\').html(\'\');
										 $(\'#name\').val(\'\');
										 $(\'#surname\').val(\'\');
										 $(\'#email\').val(\'\');
										 $(\'#phone\').val(\'\');
										 $(\'#grp_sel\').val(dept);
										getUsers();
									$(\'.pop_div\').html(\'Record is Updated\');
										$(\'#mssg_pop .popy\').html(\'OK\');
										$(\'#mssg_pop\').reveal();
					}, 1); 
                               }
                     }    
                  });
	   }else{
	   e.preventDefault();
	        $.ajax({
                  url:"emailcheckedit.php",
                  type:"POST",
				  data:{id:id,email:email,dept:dept,name:name,surname:surname,phone:phone,userrole:userrole,status:status},
                  success:function(resp){
			        var trim_resp = $.trim(resp);
                               if(trim_resp ==\'error1\'){
                                     $(\'.edit_user_err\').html(\'Email Already Exists!!!\').show();
									return false;
				}else if(trim_resp ==\'error2\'){
                                     $(\'.edit_user_err\').html(\'User could not be Updated.Try again!!!\').show();
									return false;
                                }
                                else if(trim_resp == \'added\'){
                                   $(\'.edit_user_err\').html(\'Record is Updated\').show();
									$(\'.menu_msg\').html(\'Record is Updated\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'UmVjb3JkIGlzIFVwZGF0ZWQ\';
											$(\'#my_modal\').popup(\'hide\');
										 $(\'.edit_user_err\').html(\'\');
										 $(\'#name\').val(\'\');
										 $(\'#surname\').val(\'\');
										 $(\'#email\').val(\'\');
										 $(\'#phone\').val(\'\');
										 $(\'#grp_sel\').val(dept);
										getUsers();
									$(\'.pop_div\').html(\'Record is Updated\');
										$(\'#mssg_pop .popy\').html(\'OK\');
										$(\'#mssg_pop\').reveal();
					}, 1); 
                               }
                     }    
                  });
	   }     
});  

  </script>

 <script>
            function upgrade() 
            {
                
                    $(\'#my_modalupgrade\').popup();
                      var urlupgrade ="plans.php";
                         
                          
             var upgradeurll = document.getElementById("upgradeurl"); 
                // if(delurl)
                    // {
                         //alert(delurl);
            upgradeurll.href = urlupgrade;
//}
     
                          
                          
             }   
            </script>
 <script>
$(function() {
      
	$(":file").change(function(){
	var filename = $(":file").val().replace(/.*(\\/|\\\\)/, \'\');
	$(this).next(\'.file_name01\').children(\'.file_name01_mssg\').html(filename);
 });
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
  $(".switch switch-green input[type=checkbox]").click(function(){
    if ($(this).attr("checked") == "checked"){
      $(this + " input").attr("checked") = "checked";
    } else {
      $(this + " input").attr("checked") = "";
    }
  });
});
 $(document).on(\'click\',\'#deleteurl\',function(e){
   var userid = $.trim($(\'#duserid\').val());
    e.preventDefault();
	   $.ajax({
                  url:"userdelete.php",
                  type:"POST",
                  data:{userid:userid},
				         success:function(resp){
                              var trim_resp = $.trim(resp);
                    if(trim_resp ==\'error2\'){
                                     $(\'.group_err\').html(\'User could not be added.Try again!!!\').show();
				      return false;
                                }
                                else if(trim_resp == \'deleted\'){
									$(\'.menu_msg\').html(\'User added successfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'R3JvdXAgYWRkZWQgc3VjY2Vzc2Z1bGx5\';
									    var page = $(\'#pageno\').val();
										$(\'#my_modaldelete\').popup(\'hide\');
										getUsers();
									$(\'.pop_div\').html(\'User Deleted successfully\');
										$(\'#mssg_pop .popy\').html(\'OK\');
										$(\'#mssg_pop\').reveal();
       
					}, 10); 
                               }
                        } 
                   
                  });

});
	$(document).ready(function() {
	$(".menu_msg").each( function() {
   //alert($(this).val());
	});
});

	function clickercomu(x) {
					var y = document.getElementById(\'comuname_\'+x).value;
					var p = document.getElementById(\'comusurname_\'+x).value;
					var a = document.getElementById(\'comudeptid_\'+x).value;
					var z = document.getElementById(\'comustat_\'+x).value;
					var e = document.getElementById(\'comuemail_\'+x).value;
					var m = document.getElementById(\'comuphone_\'+x).value;
					var r = document.getElementById(\'comurole_\'+x).value;
				    $(\'#editname\').val(y);
					$(\'#editsurname\').val(p);
					$(\'#editdept\').val(a);
					$(\'#editemail\').val(e);
					$(\'#prevemail\').val(e);
					$(\'#editphone\').val(m);
					$(\'#comuid\').val(x);
					$(\'#editstat\').val(z);
					$(\'#editrole\').val(r);
						
		
	} 
</script> 
<script type="text/javascript">
    $(\'#search_bttn\').click(function(){
  if($.trim($(\'.form-control\').val())!=\'\'){
            $(\'#frmsearch\').submit();
}



});
		function deptvalidation()
		{
			var j = document.getElementById(\'department\').value;
			if(j==0)
			{
				alert(\'Please select group\');
				focus();
				return false;
			}
		}
	function changestatus(userid, status) {
		var httpxml;
		try {
			// Firefox, Opera 8.0+, Safari
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
				}
			}
		}
		

		var url = "updateuserstatus.php";
		url = url + "?did=" + userid + "&status=" + status;
		//httpxml.onreadystatechange = stateck;
		httpxml.open("GET", url, true);
		httpxml.send(null);
	}
      
           
$(document).ready(function() {	       
     $(".deptId").click(function() {	   
                 document.getElementById(\'div_depart\').innerHTML = \'<div id="upload_dept_csv" ><div style="padding-top:10px;" ><form method="post" name="frm_csv_upload" enctype="multipart/form-data" ><input type="hidden" name="csvdeptid" id="csvdeptid" value="\' + $(this).attr("deptId") + \'" />Select file :<input type="file" name="csv" /><input type="submit" name="csvdeptupload" value="Submit" class="button_text"/><br /><br />Download file - <a href="download.php?download_file=examplestaff.xls" target="_blank">example.xls </a></form></div></div>\';	      
              document.getElementById(\'div_view\').style.display = "block";	
	    });	});

function getUsers(){
   var groupid = $(\'#grp_sel\').val();
   var keyword = $(\'#keyword\').val();
   var sort = $(\'#sort_par\').val();
    var page = $(\'#pageno\').val();
	
          $.ajax({
                  url:"usersearch.php",
                  type:"POST",
                  data:{groupid:groupid,keyword:keyword,sort:sort,page:page},
                  success:function(resp){
                         $(\'#user_srch_res tbody\').html(resp);
	 var pagination = $.trim($(\'#arr_page_vars\').val());
	 if(page>1){
	 		var check = document.getElementsByTagName(\'td\')[0].innerHTML;
								if(check == \'No Records Available\'){
							var newpage = --page;
							$(\'#pageno\').val(newpage);
							getUsers();
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
function nextuser(){
var page = $(\'#pageno\').val();
var nextpage = ++page;
$(\'#pageno\').val(nextpage);
getUsers();
}
function prevuser(){

var page = $(\'#pageno\').val();

var nextpage = --page;

$(\'#pageno\').val(nextpage);
getUsers();
}
 function tsort(el,el_id){
     if(! el.hasClass(\'active\')){
         $(\'#user_srch_res .sort_trig\').removeClass(\'active\').show();
            el.addClass(\'active\');
            el.siblings().hide();      
  }else{
        $(\'#user_srch_res .sort_trig\').removeClass(\'active\');        
           el.siblings().addClass(\'active\').show();
           el.hide();
           var par = el_id.split(\'-\');
               if( par[1] == \'a\'){
                  el_id = par[0]+\'-d\';}
               else if(par[1] == \'d\'){
                  el_id = par[0]+\'-a\';}      
    }
         $(\'#sort_par\').val(el_id);
          getUsers(); 
    
}
 $(window).load(function(){
         
       getUsers();
       
});

</script> 
'; ?>
 
<div style="margin-top:20px">
<div class="main" style="margin-top:0px !important;">
  <div class="justified-nav-bar column-full">
    <ul class="nav nav-justified">
      <li><a href="editProfile.php">Company</a></li>
      <li><a href="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>javascript: void(0)<?php else: ?>locationView.php<?php endif; ?>" style="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>background-color:#f5f6f8; color:#cccccc;<?php endif; ?>" class="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>my_modalupgrade_open<?php endif; ?>" onclick="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>upgrade()<?php endif; ?>">Locations</a></li>
      <li><a href="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>javascript: void(0)<?php else: ?>departmentView.php<?php endif; ?>"style="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>background-color:#f5f6f8; color:#cccccc;<?php endif; ?>" class="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>my_modalupgrade_open<?php endif; ?>" onclick="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>upgrade()<?php endif; ?>">Groups</a></li>
      <li class="active"><a href="companyuserView.php">Users</a></li>
      <li><a href="scenarioView.php">Scenario</a></li>
    </ul>
  </div>
  <div id="home-content" class="column-full">
    <div class="heading column-full" style=" margin:0 0 0 0!important; padding: !important;">
      <h2 style="text-align: left !important; width:82%;"> You can import all your users from a spreadsheet as long as you follow our format. <a href="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>javascript: void(0)<?php else: ?>download.php?download_file=examplestaff.xls<?php endif; ?>" class="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>my_modalupgrade_open<?php endif; ?>">Click here</a> for example format. </h2>
      <a href="" class="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>my_modalupgrade_open btn button-skyblue<?php else: ?>my_modalimport_open btn button-blue<?php endif; ?>" onclick="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>upgrade()<?php else: ?>clickimport();<?php endif; ?>" style="margin-right:0!important;"> 
      <!--            onclick="show_popup('upload_csv');"--> 
      <span class="icon-bg import-groups">Import Users</span> </a> </div>
    <div class="adduser-control" style="margin-top:30px;"> 
      <!--     <form name="frmdept" id="user_srch" method="post"  >-->
      <div class="col-md-4"> 
        <!--   action="<?php echo $this->_tpl_vars['page_name']; ?>
" -->
        
        <select class="form-control" onChange="getUsers()" id="grp_sel" name="departmentView" <?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>disabled="disabled"<?php endif; ?>>
          
            
        
       	<?php if ($this->_tpl_vars['tdata'] == ''): ?>
            <option value=""  >-- Select Group --</option>
        <?php endif; ?>
        <?php if (count($_from = (array)$this->_tpl_vars['tdata'])):
    foreach ($_from as $this->_tpl_vars['trdata']):
?>
            <?php if ($this->_tpl_vars['trdata']['eStatus'] == 1): ?>
                <option value="<?php echo $this->_tpl_vars['trdata']['departmentId']; ?>
" <?php if ($this->_tpl_vars['seldepartment'] == $this->_tpl_vars['trdata']['departmentId']): ?> selected="selected" <?php endif; ?>> <?php echo $this->_tpl_vars['trdata']['locationname']; ?>
 &raquo; <?php echo $this->_tpl_vars['trdata']['departmentName']; ?>
 </option>
            <?php endif; ?>
        <?php endforeach; unset($_from); endif; ?>
            
      
          </select>
        </div>
        <input type="hidden" name="department_id" value="<?php echo $this->_tpl_vars['seldepartment']; ?>
" />
		<input type="hidden" name="arr_page_vars" value="<?php echo $this->_tpl_vars['arr_page_vars']; ?>
">
        <div class="col-md-4">
          <div class="input-group">
            <input name="keyword" id="keyword" type="text" class="form-control" placeholder="Search User" value="<?php echo $this->_tpl_vars['keyword']; ?>
" onkeyup="getUsers()">
            <span class="input-group-addon glyphicon glyphicon-search" id="search_bttn" onclick="getUsers()"></span> </div>
        </div>
        <!--      </form>-->
        <div class="col-md-4">
          <p class="al-r"> <a href="#" class="btn button-blue my_modaladd_open" style="margin-right:-10px; width:170px;">Add User</a></p>
        </div>
      </div>
      <?php if ($this->_tpl_vars['var_msg']): ?> <span class="menu_msg" style="color:red;display:none;"> <?php echo $this->_tpl_vars['var_msg']; ?>
 </span> <?php endif; ?>
      <input type="hidden" name="sort_par" id="sort_par" value=""/>
      <!--<button class="my_modal_open">hell</button>-->
      <table id="user_srch_res" class="table table-striped table-hover" width="100%" border="0" cellspacing="5" cellpadding="5">
        <thead>
        <th width="17%"><span>Name</span><span class="sort-data" ><i class="icon-bg asc sort_trig" onclick="tsort($(this),'f1-a')"></i><i class="icon-bg desc sort_trig" onclick="tsort($(this),'f1-d')"></i></span></th>
          <th width="17%"><span>Surname</span><span class="sort-data" ><i class="icon-bg asc sort_trig" onclick="tsort($(this),'f2-a')"></i><i class="icon-bg desc sort_trig" onclick="tsort($(this),'f2-d')"></i></span></th>
          <th width="17%"><span>Group Name</span><span class="sort-data" ><i class="icon-bg asc sort_trig" onclick="tsort($(this),'f3-a')"></i><i class="icon-bg desc sort_trig" onclick="tsort($(this),'f3-d')"></i></span></th>
          <th width="17%"><span>Role</span><span class="sort-data" ><i class="icon-bg asc sort_trig" onclick="tsort($(this),'f4-a')"></i><i class="icon-bg desc sort_trig" onclick="tsort($(this),'f4-d')"></i></span></th>
          <th width="17%" class="al-c"><span>Status</span><span class="sort-data" ><i class="icon-bg asc sort_trig" onclick="tsort($(this),'f5-a')"></i><i class="icon-bg desc sort_trig" onclick="tsort($(this),'f5-d')"></i></span></th>
          <th width="17%" class="al-c"> Actions</th>
            </thead>
        <tbody>
    
        <input  type="hidden" name="no" value="<?php echo $this->_tpl_vars['count_db_res']; ?>
">
          </tbody>
        
      </table>
	  <input type="hidden" id="pageno" value="<?php echo $this->_tpl_vars['curr_page']; ?>
"/>
<div  class="select-02_right" id="paginationdiv" style="display:none;text-align:right; padding-bottom:8px;padding-right:0!important;">
         		
		   		 <img src="images/paging/previous.png" border="0" id="pageprev" style="cursor:pointer;" onclick="prevuser()" />
				  <img src="images/paging/previous_disable.png" id="prevnill" border="0" style="cursor:text;" />	
        	<span id="pagination" style="font-size: 14px;color:#999; float: center; padding-top:6px;"></span>
			<img src="images/paging/next_disable.png" border="0" id="nextnill" style="cursor:text;" />
		  <img src="images/paging/next.png" title="Next" border="0" id="pagenext" style="cursor:pointer;" onclick="nextuser()" />
	
</div>
      <div style="height:25px;"></div>
    </div>
    
    <!--------------new pop p -----------------------------------------> 
    
    <!-- <button class="my_modal_open" data-popup-order="0">Click Me</button>-->
    
    <div id="my_modal" class="over_laydesign well reveal-modal" style="width:470px;">
      <div class="edit_pop edit_pop2">
        <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
          <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 58px;padding: 0 0 20px 20px; width:464px; margin-top:-5px;" class="over_hed edit_user_head">Edit User</h2>
        </div>
        <div class="edit_user_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
        <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
          <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
          <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
		  <input type="hidden" id="prevdept" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
          <div class="control-group over_size edit_scenario edit_scenario_company">
            <label for="select01" class="control-label">Group Name</label>
            <div class="controls over_select edit_scenario_radio">
              <select name="editdepartment" id="editdept" class="over_select_siz"  <?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>disabled="disabled"<?php endif; ?> required="required" style="border:1px solid #DEDEDE !important; font-size: 14px; color: #2A2A2A !important;">
                
            
          
<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>		  
            
           
                 <?php echo smarty_function_assign(array('var' => 'c','value' => 1), $this);?>


             <?php if (count($_from = (array)$this->_tpl_vars['data_department'])):
    foreach ($_from as $this->_tpl_vars['department_all']):
?>
                      <?php if ($this->_tpl_vars['department_all']['eStatus'] == 1): ?>
	                      <?php if ($this->_tpl_vars['c'] == 1): ?>
                                  <?php echo smarty_function_assign(array('var' => 'frst','value' => $this->_tpl_vars['department_all']['departmentId']), $this);?>

                                <?php endif; ?>
            
            <option value="<?php echo $this->_tpl_vars['department_all']['departmentId']; ?>
" > <?php echo $this->_tpl_vars['department_all']['locationname']; ?>
 &raquo; <?php echo $this->_tpl_vars['department_all']['departmentname']; ?>
 </option>
            
            
                     <?php echo smarty_function_assign(array('var' => 'c','value' => $this->_tpl_vars['c']+1), $this);?>

                      <?php endif; ?>
                      <?php endforeach; unset($_from); endif; ?>
                      <?php else: ?>
                           <?php if (count($_from = (array)$this->_tpl_vars['data_department'])):
    foreach ($_from as $this->_tpl_vars['department_all']):
?>
                      <?php if ($this->_tpl_vars['department_all']['eStatus'] == 1): ?>
	                      
          
            
            <option value="<?php echo $this->_tpl_vars['department_all']['departmentId']; ?>
" > <?php echo $this->_tpl_vars['department_all']['locationname']; ?>
 &raquo; <?php echo $this->_tpl_vars['department_all']['departmentname']; ?>
 </option>
            
            
         
                      <?php endif; ?>
                      <?php endforeach; unset($_from); endif; ?>
             <?php endif; ?> 
          
          
          
              </select>
              <?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>
              <input type="hidden" name="editdepartment" value="<?php echo $this->_tpl_vars['frst']; ?>
">
              <?php endif; ?> </div>
          </div>
          <div class="control-group over_size edit_scenario edit_scenario_company">
            <label for="select01" class="control-label">Name</label>
            <div class="controls over_select">
              <input type="text" class = " input_login edit_scenario_name" name="name" id="editname" value="<?php echo $this->_tpl_vars['name']; ?>
" size="45" placeholder="Name" required/>
            </div>
          </div>
          <div class="control-group over_size edit_scenario edit_scenario_company">
            <label for="select01" class="control-label">SurName</label>
            <div class="controls over_select">
              <input type="text" class = "input_login edit_scenario_name" name="surname" id="editsurname" value="<?php echo $this->_tpl_vars['surname']; ?>
" size="45" placeholder="SurName" required/>
            </div>
          </div>
          <div class="control-group over_size edit_scenario edit_scenario_company">
            <label for="select01" class="control-label">Email</label>
            <div class="controls over_select">
			 <input type="hidden" name="prevemail" id="prevemail" value="">
			 <input type="hidden" name="prevstatus" id="prevstatus" value="">
			  <input type="hidden" name="prevname" id="prevname" value="">
			 <input type="hidden" name="prevsurname" id="prevsurname" value="">
			  <input type="hidden" name="prevphone" id="prevphone" value="">
			 <input type="hidden" name="prevrole" id="prevrole" value="">
              <input type="email"  class = "validate[required,custom[email]] input_login edit_scenario_name" name="email" id="editemail" value="<?php echo $this->_tpl_vars['email']; ?>
" size="45" placeholder="Email" required/>
            </div>
          </div>
          <div class="control-group over_size edit_scenario edit_scenario_company">
            <label for="select01" class="control-label">Phone</label>
            <div class="controls over_select">
              <input type="number" min= "8"  class = " input_login edit_scenario_name" name="phone" id="editphone" value="<?php echo $this->_tpl_vars['phone']; ?>
" size="45" placeholder="Phone"/ required>
            </div>
          </div>
          <div class="control-group over_size edit_scenario edit_scenario_company" id = "superhide">
            <label for="select01" class="control-label">User Role</label>
            <div class="controls over_select edit_scenario_radio">
              <select name="userrole" id="editrole" class="over_select_siz" style="border:1px solid #DEDEDE !important; font-size: 14px; color: #2A2A2A !important;">
                
            
          <?php if ($this->_tpl_vars['ses_head'] == '3'): ?>
            <option  value="1">Admin</option>
            <option  value="2">Key Holder</option>
            <option  value="0">User</option>
            <?php elseif ($this->_tpl_vars['ses_head'] == '2'): ?>
             <option  value="2">Key Holder</option>
            <option  value="0">User</option>
            <?php elseif ($this->_tpl_vars['ses_head'] == '1'): ?>
            <option  value="0">User</option>
            <?php endif; ?>
          </select>
        </div>
      </div>
      <div class="control-group over_size edit_scenario edit_scenario_company">
        <label for="select01" class="control-label">Status</label>
        <div class="controls over_select edit_scenario_radio" id="estatus">
          <label><span class="over_radio">
            <input type="radio"  checked="checked" value="1" id="active" name="eStatus" >
            </span> <span class="over_spn">Active</span></label>
          <label><span class="over_radio">
            <input type="radio"  value="0" id="inactive" name="eStatus" >
            </span> <span class="over_spn">Inactive</span></label>
        </div>
      </div>
      <input  id='comuid' type="hidden" name = "id">
      <div class="over_but over_but_t" style="padding-top:15px; float:right; padding-right:14px;">
        <div class="control-group bur_siz"> </div>
        <div class="ove_button">
          <input type="submit" id="edit_user_btn" name="update"  class="overButton" value="Update" style="margin:0px 12px 0px 20px;width:120px; text-align: center;">
          <button type="button" class="overButton over_cancle" onclick="$('#my_modal').trigger('reveal:close');" style=" width:120px; text-align: center;">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>

              <!-- delete pop up....----->
              
              	  <div id="my_modaldelete" class="over_laydesign well reveal-modal user_delete01 pop_mid" style="height: 263px;padding: 40px 40px 40px 37px;width: 521px; margin-top: 135px !important;">
      <div class="over_hedtag">
        <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> </div>
        <div class="over_delete delete_scenario">
		<input type="hidden" name="userid" id="duserid">
          <p class="over_det_text"><strong style="padding:0 !important;">Are you sure you want to Delete this Company User?</strong></p>
          <p class="over_text_det">If you delete you can't recover this Company User anymore</p>
          <div class="ove_button delete_scenario_button"> <a href="" id="deleteurl" style="width: 125px !important;height:35px !important;text-align:center !important;line-height:35px !important;color:#fff !important; float:left; background:#1e8ece; text-decoration: none; margin:18px 0 0 150px;" class="overButton over_mid delete_scenario_conform" >Delete</a> </div>
        </div>
      </div>
    </div>
    
    <!-- import users -->
    
    <div id="my_modalimport" class="over_laydesign well">
      <div class="edit_pop3 edit_pop03">
        <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;" class="my_modalimport_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
          <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 0;
  padding: 0 0 20px 0;" class="over_hed">Import Users</h2>
        </div>
		 <div class="import_user_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
       
        <form method="post" name="frm_csv_upload" enctype="multipart/form-data" class="form-horizontal">
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Select Group</label>
           
            <div class="controls over_select edit_scenario_radio">
                
      <select  class="form-control select_cmb0002" name="selectdepartment" >
       	<?php if ($this->_tpl_vars['tdataa'] == ''): ?>
           
        <?php endif; ?>
        <?php if (count($_from = (array)$this->_tpl_vars['tdata'])):
    foreach ($_from as $this->_tpl_vars['trdataa']):
?>
            <?php if ($this->_tpl_vars['trdataa']['eStatus'] == 1): ?>
                <option value="<?php echo $this->_tpl_vars['trdataa']['departmentId']; ?>
" > <?php echo $this->_tpl_vars['trdataa']['departmentName']; ?>
 </option>
            <?php endif; ?>
        <?php endforeach; unset($_from); endif; ?>
            </select>            
                
  
            </div>
           
          </div>  
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Upload File</label>
            <div class="controls fileType withButton">
                
              <input type="file"  name="csv" id="imp_user_file" class="uploadattach wB edit_scenario_name" accept="application/msexcel">
              <div class="file_name01 controls_03" id="Browse001"><strong>Browse</strong><span class="file_name01_mssg"></span></div>
            </div>
          </div>
      
      
           <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Sample Format File</label>
            <div class="controls fileType withButton edit_scenario_radio"> Download file - <a href="download.php?download_file=examplestaff.xls" target="_blank">example.xls </a> </div>
          </div>
          <div class="over_but" style="padding-top:15px; float:right; padding-right:14px;">
            <div class="control-group bur_siz"> </div>
            <div class="ove_button">
              <input type="submit" name="csvupload" id="import_user_btn" value="Import" class="overButton" style="margin:0px 10px 0px 20px;width:120px;"/>
              <button type="button" class="my_modalimport_close overButton over_cancle" style="width: 120px;">cancel</button>
            </div>
            
          	
          </div>
        </form>
      </div>
    </div>
    
    <!-- Upgrade pop up....----->
    <div id="my_modalupgrade" class="over_laydesign well">
      <div class="edit_pop5">
        <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modalupgrade_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> </div>
        <div class="over_delete">
          <p class="over_det_text">&nbsp;</p>
          <p class="over_text_det" style="text-align:center;font-weight:bold;font-family:18px;">Upgrade your plan to Activate </p>
          <p class="over_text_det" style="text-align:center;font-weight:bold;font-family:18px;">this function</p>
          <div class="ove_button" style="width:400px !important;"> <a href="plans.php" id="up_grade">Upgrade Your Plan</a> </div>
        </div>
      </div>
    </div>
    <div id="my_modaladd" class="over_laydesign well">
      <div class="edit_pop edit_pop2 edit_pop20">
        <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;" class="my_modaladd_close" href="#"><img src="img/close_btn.png" alt="Close" border="0" /></a>
          <h2 style="text-align:left;margin-left: 70px;padding: 0 0 20px; border-bottom:1px solid #b7b7b7" class="over_hed"> Create User</h2>
        </div>
        <div class="add_user_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
        <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return deptvalidation();">
          <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
          <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
          <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Group Name</label>
            <div class="controls over_select edit_scenario_radio">
			             <select name="department" id="department" class="over_select_siz"  <?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>disabled="disabled"<?php endif; ?> required="required" style="border:1px solid #DEDEDE !important; font-size: 14px; color: #2A2A2A !important;">
                
            
          
<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>		  
            
           
                 <?php echo smarty_function_assign(array('var' => 'c','value' => 1), $this);?>


             <?php if (count($_from = (array)$this->_tpl_vars['data_department'])):
    foreach ($_from as $this->_tpl_vars['department_all']):
?>
                      <?php if ($this->_tpl_vars['department_all']['eStatus'] == 1): ?>
	                      <?php if ($this->_tpl_vars['c'] == 1): ?>
                                  <?php echo smarty_function_assign(array('var' => 'frst','value' => $this->_tpl_vars['department_all']['departmentId']), $this);?>

                                <?php endif; ?>
            
            <option value="<?php echo $this->_tpl_vars['department_all']['departmentId']; ?>
" > <?php echo $this->_tpl_vars['department_all']['locationname']; ?>
 &raquo; <?php echo $this->_tpl_vars['department_all']['departmentname']; ?>
 </option>
            
            
                     <?php echo smarty_function_assign(array('var' => 'c','value' => $this->_tpl_vars['c']+1), $this);?>

                      <?php endif; ?>
                      <?php endforeach; unset($_from); endif; ?>
                      <?php else: ?>
                           <?php if (count($_from = (array)$this->_tpl_vars['data_department'])):
    foreach ($_from as $this->_tpl_vars['department_all']):
?>
                      <?php if ($this->_tpl_vars['department_all']['eStatus'] == 1): ?>
	                      
          
            
            <option value="<?php echo $this->_tpl_vars['department_all']['departmentId']; ?>
" > <?php echo $this->_tpl_vars['department_all']['locationname']; ?>
 &raquo; <?php echo $this->_tpl_vars['department_all']['departmentname']; ?>
 </option>
            
            
         
                      <?php endif; ?>
                      <?php endforeach; unset($_from); endif; ?>
             <?php endif; ?> 
          
          
          
              </select>
              <?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>
              <input type="hidden" name="department"  id="department" value="<?php echo $this->_tpl_vars['frst']; ?>
">
              <?php endif; ?>
             
            </div>
          </div>
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label"> Name </label>
            <div class="controls over_select">
              <input type="text" class = " input_text edit_scenario_name" name="name" id="name" value="<?php echo $this->_tpl_vars['name']; ?>
" size="45" placeholder="Name"/ required>
            </div>
          </div>
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label"> Surname </label>
            <div class="controls over_select">
              <input type="text" class = " input_text edit_scenario_name" name="surname" id="surname" value="<?php echo $this->_tpl_vars['surname']; ?>
" size="45" placeholder="Sur 
Name"/ required>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label"> Email </label>
        <div class="controls over_select">
          <input type="email" class = " input_text edit_scenario_name" name="email" id="email" value="<?php echo $this->_tpl_vars['email']; ?>
" size="45" placeholder="Email"/ required>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label"> Phone </label>
        <div class="controls over_select">
          <input type="number" min= "8" class = "input_login edit_scenario_name" name="phone" id="phone" value="<?php echo $this->_tpl_vars['phone']; ?>
" size="45" placeholder="Phone"/ required>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">User Role</label>
        <div class="controls over_select edit_scenario_radio">
          <select name="userrole" id="useradd" class=" select-one select_cmb select_cmb0002" required>
            
        <?php if ($this->_tpl_vars['ses_head'] == '3'): ?>
            <option  value="1">Admin</option>
            <option  value="2">Key Holder</option>
            <option  value="0" selected="selected">User</option>
            <?php elseif ($this->_tpl_vars['ses_head'] == '2'): ?>
             <option  value="2">Key Holder</option>
            <option  value="0" selected="selected">User</option>
            <?php elseif ($this->_tpl_vars['ses_head'] == '1'): ?>
            <option  value="0" selected="selected">User</option>
            <?php endif; ?>
                    
        
            
          </select>
        </div>
      </div>
      <?php if ($this->_tpl_vars['action'] == 'Update'): ?>
      <div class="control-group over_size">
        <label for="select01" class="control-label">Status</label>
        <div class="controls over_select">
          <select name="eStatus" class="select_cmb">
            
              
          
                      <?php if ($this->_tpl_vars['eStatus'] == '1'): ?>
                      
          
              
            <option  value="1" selected="selected">Active</option>
            <option  value="0">Inactive</option>
            
              
          
                      <?php elseif ($this->_tpl_vars['eStatus'] == '0'): ?>
                      
          
              
            <option  value="1">Active</option>
            <option  value="0" selected="selected">Inactive</option>
            
              
          
                      <?php else: ?>
                      
          
              
            <option  value="1">Active</option>
            <option  value="0">Inactive</option>
            
              
          
                      <?php endif; ?>
                    
        
            
          
          
              </select>
            </div>
          </div>
          <?php endif; ?>
          <div class="over_but" style="padding-top:15px; float:right; padding-right:13px;">
            <div class="control-group bur_siz"> </div>
            <div class="ove_button">
              <input type="submit" id="create_user_btn" name="add"  class="overButton" value="Submit" style="margin:0px 12px 0px 20px;width:120px; text-align: center;">
              <button type="button" class="overButton over_cancle my_modaladd_close" style="width: 120px; text-align:center;">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="reveal-modal" id="mssg_pop" > <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
      <div class="pop_div"></div>
      <button type="button" class="close-reveal-modal popy" onclick="reset()"></button>
    </div>
  </div>
</div>
<?php echo ' 
<script type="text/javascript">    
 $(window).load(function(){
            var mssg = $.trim($(\'.menu_msg\').html());
       $(\'.pop_div\').html(mssg);
           if(mssg.length > 90){
		   $(\'#mssg_pop .popy\').hide();
        $(\'#mssg_pop\').reveal();
       }else if(mssg.length > 0){
	   $(\'#mssg_pop .popy\').html(\'OK\');
        $(\'#mssg_pop\').reveal();
	   } 
}); 
</script>
 '; ?>
                          