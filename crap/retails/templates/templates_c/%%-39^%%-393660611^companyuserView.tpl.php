<?php /* Smarty version 2.6.0, created on 2013-12-03 10:51:50
         compiled from companyuserView.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign', 'companyuserView.tpl', 658, false),array('modifier', 'capitalize', 'companyuserView.tpl', 660, false),)), $this); ?>

<script src="js/jquery-1.10.2.min.js"></script>
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

          
          <script src="js/bootstrap.js"></script>
<script src="js/jquery.popupoverlay.js"></script>

<script type="text/javascript" src="js/jquery.reveal.js"></script>
<link href="js/reveal.css" type="text/css" rel="stylesheet">

<script>
    $(function() {
    // $(\'#my_modal\').popup();
    });
        
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
$(\'#editname\').val(comuname);
$(\'#editsurname\').val(comusurname); 
    
                                                       
           $(\'#editemail\').val(comuemail);
$(\'#editphone\').val(comuphone);
$(\'#editrole\').val(comurole);
         $(\'#comuid\').val(x);	      
               
           
           }    
  </script>
  
  
  
   <script>
    $(function() {
      $(\'#my_modaladd\').popup();
         
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
            function clickerdepp_delete(g) 
            {
                
                    $(\'#my_modaldelete\').reveal();
                      var urldelete ="companyuserView.php?id="+g+"&action=Delete";
                         
                          
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
     // $(\'#my_modaldelete\').popup();
    });
        
        
  </script>
  
                
                            <script>
    $(function() {
      $(\'#my_modalupgrade\').popup();
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

  
  <!--<script src="js/confirm/avg_ls_dom.js" type="text/javascript"></script> -->
<!--<script src="js/confirm/jquery-ui.js"></script> -->
<!--<script src="js/confirm/jquery_002.js"></script>-->

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
	$(document).ready(function() {
	$(".menu_msg").each( function() {
   alert($(this).val());
	});
});
	$(function() {
		//$(".confirm").easyconfirm();
		//$("#alert").click(function() {
		//});
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
					$(\'#editphone\').val(m);
					$(\'#comuid\').val(x);
					$(\'#editstat\').val(z);
					$(\'#editrole\').val(r);
						
		
	} 
</script> 
<script type="text/javascript">
    $(\'#search_bttn\').click(function(){
alert(\'there\');
  if($.trim($(\'.form-control\').val())!=\'\'){
            $(\'#frmsearch\').submit();
}



})
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
	}$(document).ready(function() {	            $(".deptId").click(function() {	                    document.getElementById(\'div_depart\').innerHTML = \'<div id="upload_dept_csv" ><div style="padding-top:10px;" ><form method="post" name="frm_csv_upload" enctype="multipart/form-data" ><input type="hidden" name="csvdeptid" id="csvdeptid" value="\' + $(this).attr("deptId") + \'" />Select file :<input type="file" name="csv" /><input type="submit" name="csvdeptupload" value="Submit" class="button_text"/><br /><br />Download file - <a href="download.php?download_file=examplestaff.xls" target="_blank">example.xls </a></form></div></div>\';	                    document.getElementById(\'div_view\').style.display = "block";		    });	});

function getUsers(){
   var groupid = $(\'#grp_sel\').val();
   var keyword = $(\'#keyword\').val();
          $.ajax({
                  url:"usersearch.php",
                  type:"POST",
                  data:{groupid:groupid,keyword:keyword},
                  success:function(resp){
                         $(\'#user_srch_res tbody\').html(resp);
                     }    
                  })

}  

</script> 
'; ?>

<div class="main" style="margin-top:0px !important;">
		    <div class="justified-nav-bar column-full">
      <ul class="nav nav-justified">
     
        <li><a href="editProfile.php?id=<?php echo $this->_tpl_vars['ses_varid']; ?>
&action=Update">Company</a></li>
        <li><a href="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>javascript: void(0)<?php else: ?>locationView.php<?php endif; ?>" style="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>background-color:#f5f6f8; color:#cccccc;<?php endif; ?>" class="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>my_modalupgrade_open<?php endif; ?>" onclick="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>upgrade()<?php endif; ?>">Locations</a></li>
        <li><a href="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>javascript: void(0)<?php else: ?>departmentView.php<?php endif; ?>"style="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>background-color:#f5f6f8; color:#cccccc;<?php endif; ?>" class="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>my_modalupgrade_open<?php endif; ?>" onclick="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>upgrade()<?php endif; ?>">Groups</a></li>
        <li class="active"><a href="companyuserView.php">Users</a></li>
        <li><a href="scenarioView.php">Scenario</a></li>
      </ul></div>
        
        
       <!-- 
      <div class="location">

  
  <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" 
          onsubmit="return deptvalidation();" >
    <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
    <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
    <div class="create">
      <div class="company">
      
        <label>Group Name:</label>
        <select name="department" id="department" class="validate[required] select-one select_cmb" >
 
          <option value="0">Select Group</option>
          
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
                    
        </select>
              </div>
      <div class="company">
        <label>Name:</label>
        <input type="text" class = "validate[required] input_login" name="name" id="name" value="<?php echo $this->_tpl_vars['name']; ?>
" 

size="45"/>
      </div>
      <div class="company">
        <label>Surname:</label>
        <input type="text" class = "validate[required] input_login" name="surname" id="surname" 

value="<?php echo $this->_tpl_vars['surname']; ?>
" size="45" />
      </div>
      <div class="company">
        <label>Email:</label>
        <input type="text" class = "validate[required,custom[email]] input_login" name="email" id="email" 

value="<?php echo $this->_tpl_vars['email']; ?>
" size="45" />
        <span id="msg">&nbsp;</span> </div>
      <?php if ($this->_tpl_vars['action'] == 'Update'): ?>
      <div class="company">
        <label>Password:</label>
        <input type="password" class = "validate[required] input_login" name="password" 

id="password" value="<?php echo $this->_tpl_vars['password']; ?>
" size="45" />
      </div>
      <?php endif; ?>
      <div class="company">
        <label>Phone:</label>
        <input type="text" class = "validate[required,custom[phone]] input_login" name="phone" id="phone" 

value="<?php echo $this->_tpl_vars['phone']; ?>
" size="45" />
      </div>
      <div class="company">
        <label>User Role:</label>
        <select name="userrole" class="select_cmb">
          
                      <?php if ($this->_tpl_vars['userrole'] == '1'): ?>
                      	
          <option  value="1" selected="selected">Admin</option>
          <option  value="2">Key Holder</option>
          <option  value="0">User</option>
          
                      <?php elseif ($this->_tpl_vars['userrole'] == '0'): ?>
                      	
          <option  value="0" selected="selected">User</option>
          <option  value="1" >Admin</option>
          <option  value="2">Key Holder</option>
          
                      <?php elseif ($this->_tpl_vars['userrole'] == '2'): ?>
                      	
          <option  value="2" selected="selected">Key Holder</option>
          <option  value="1" >Admin</option>
          <option  value="0">User</option>
                         
                      <?php else: ?>
                      	
          <option  value="1">Admin</option>
          <option  value="2">Key Holder</option>
          <option  value="0">User</option>
          
                      <?php endif; ?>
                    
        </select>
      </div>
      <?php if ($this->_tpl_vars['action'] == 'Update'): ?>
      <div class="company">
        <label>Status:</label>
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
      <?php endif; ?>
      <div class="company editprofilebutton editprofilebutton2 company02">
        <input type="submit" id="submit" name="add" class="button_text" value="Submit">
         </div>
    </div>
  </form>
</div>
       -->
       
       
       

<div id="my_modaladd" class="over_laydesign">
  <div class="edit_pop edit_pop2">
    <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;" class="my_modaladd_close" href="#"><img src="img/close_btn.png" alt="Close" border="0" /></a>
      <h2 style="text-align:left;margin-left: 70px;padding: 0 0 20px; border-bottom:1px solid #b7b7b7" class="over_hed"> Create User</h2>
    </div>
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
          <select name="department" id="department" class="validate[required] select-one select_cmb" <?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>disabled="disabled"<?php endif; ?>>
		  <?php if ($this->_tpl_vars['ses_plan'] != '30 Day Free'): ?><option value="0">Select Group</option><?php endif; ?>
            
            
              
          
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
                    
        
            
          </select>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label"> Name </label>
        <div class="controls over_select">
          <input type="text" class = "validate[required] input_text edit_scenario_name" name="name" id="name" value="<?php echo $this->_tpl_vars['name']; ?>
" size="45" placeholder="Name"/ required>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label"> Sur Name </label>
        <div class="controls over_select">
          <input type="text" class = "validate[required] input_text edit_scenario_name" name="surname" id="surname" value="<?php echo $this->_tpl_vars['surname']; ?>
" size="45" placeholder="Sur 
Name"/ required>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label"> Email </label>
        <div class="controls over_select">
          <input type="email" class = "validate[required] input_text edit_scenario_name" name="email" id="email" value="<?php echo $this->_tpl_vars['email']; ?>
" size="45" placeholder="Email"/ required>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label"> Phone </label>
        <div class="controls over_select">
          <input type="text" class = "validate[required,custom[phone]] input_login edit_scenario_name" name="phone" id="phone" value="<?php echo $this->_tpl_vars['phone']; ?>
" size="45" placeholder="Phone"/ required>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">User Role</label>
        <div class="controls over_select edit_scenario_radio">
          <select name="userrole" class="validate[required] select-one select_cmb select_cmb0002" required>
            
              
         <?php if ($this->_tpl_vars['userrole'] == '1'): ?>
                      	
          
              
            <option  value="1" selected="selected">Admin</option>
            <option  value="2">Key Holder</option>
            <option  value="0">User</option>
            
              
          
                      <?php elseif ($this->_tpl_vars['userrole'] == '0'): ?>
                      	
          
              
            <option  value="0" selected="selected">User</option>
            <option  value="1" >Admin</option>
            <option  value="2">Key Holder</option>
            
              
          
                      <?php elseif ($this->_tpl_vars['userrole'] == '2'): ?>
                      	
          
              
            <option  value="2" selected="selected">Key Holder</option>
            <option  value="1" >Admin</option>
            <option  value="0">User</option>
            
              
                         
                      <?php else: ?>
                      	
          
              
            <option  value="1">Admin</option>
            <option  value="2">Key Holder</option>
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
      <div class="over_but" style="padding-top:15px; float:right; padding-right:14px;">
        <div class="control-group bur_siz"> </div>
        <div class="ove_button">
          <input type="submit" id="submit" name="add"  class="overButton" value="Submit" style="margin:0px 12px 0px 20px;width:100px;">
          <button type="button" class="overButton over_cancle" onclick="history.back(-1);return false;">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div> 
       
       
       
       
       
        <div id="home-content" class="column-full">
        <div class="heading column-full">
          <h2> You can import all your users from a spreadsheet as long as you follow our format. <a href="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>javascript: void(0)<?php else: ?>download.php?download_file=examplestaff.xls<?php endif; ?>" class="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>my_modalupgrade_open<?php endif; ?>">Click here</a> for example format. </h2>
         
        
          
          <a href="" class="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>my_modalupgrade_open btn button-skyblue<?php else: ?>my_modalimport_open btn button-blue<?php endif; ?>" onclick="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>upgrade()<?php else: ?>clickimport();<?php endif; ?>" >
<!--            onclick="show_popup('upload_csv');"-->
              <span class="icon-bg import-groups">Import Users</span>
          </a>
        </div>
        <div class="adduser-control">
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
          <!--      <form name="frmsearch" method="post" action="<?php echo $this->_tpl_vars['page_name']; ?>
" id="frmsearch">
                    <input type="hidden" name="action" value="Search">
                    <input type="hidden" name="srname" value="">
                    <input type="hidden" name="option" value="name"  />
                    <input type="hidden" name="keyname" value="">
                    
                    -->
                    <input type="hidden" name="department_id" value="<?php echo $this->_tpl_vars['seldepartment']; ?>
" />
          <div class="col-md-4">
            <div class="input-group">
                <input name="keyword" id="keyword" type="text" class="form-control" placeholder="Search User" value="<?php echo $this->_tpl_vars['keyword']; ?>
" onkeyup="getUsers()">
              <span class="input-group-addon glyphicon glyphicon-search" id="search_bttn" onclick="getUsers()"></span> </div>
          </div>
       <!--      </form>-->
          <div class="col-md-4">
              
            <p class="al-r"> <a href="#" class="btn button-blue my_modaladd_open">Add User</a></p>
            
          </div>
        </div>
        <!--<button class="my_modal_open">hell</button>-->
        <table id="user_srch_res" class="table table-striped table-hover" width="100%" border="0" cellspacing="5" cellpadding="5">
          <thead>
          <th><span>Name</span><span class="sort-data"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>
            <th><span>Surname</span><span class="sort-data"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>
            <th><span>Group Name</span><span class="sort-data"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>
            <th class="al-c"><span>Status</span><span class="sort-data"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>
            <th class="al-c"> Actions</th>
          </thead>
          <tbody>
            <tr>
            <?php if ($this->_tpl_vars['count_db_res'] > 0): ?>
                <?php echo smarty_function_assign(array('var' => 'totdata','value' => '0'), $this);?>

                <?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>
              <td><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['name'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</td>
              
              <input  id='comuname_<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
' type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['name'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
">
                  <input  id='comuemail_<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
' type="hidden" value="<?php echo $this->_tpl_vars['currdata']['email']; ?>
">
                   <input  id='comuphone_<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
' type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['phone'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
">
                   <input  id='comurole_<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
' type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['userrole'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
">
              <td><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['surname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</td>
                <input  id='comusurname_<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
' type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['surname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
">
              <td><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['departmentName'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>

                  <input  id='comudeptid_<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
' type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['departmentId'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
"></td>
              <td class="al-c success-text" id="status_<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
"><?php if ($this->_tpl_vars['currdata']['eStatus'] == '1'): ?>Active<?php elseif ($this->_tpl_vars['currdata']['eStatus'] == '0'): ?>Inactive<?php endif; ?> </td><input  id='comustat_<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
' type="hidden" value="<?php echo $this->_tpl_vars['currdata']['eStatus']; ?>
">
              <td class="control-buttons">
                  
<a title="Edit Company User" href="#" onClick="clickerdepp(<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
);" class="my_modal_open" data-popup-order="0">Edit</a>
<?php if ($this->_tpl_vars['currdata']['userrole'] != '1'): ?>

<a title="Delete Company User" onClick="clickerdepp_delete(<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
);" href="#" class="my_modaldelete_open">Delete</a>              
  <?php endif; ?>           
</td>              
     <!--             
      <a   title="Edit User" href="" onClick="clickercomu(<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
);" class="topopup">Edit</a>
      <a  title="Delete Incident" href="<?php echo $this->_tpl_vars['view_file']; ?>
?id=<?php echo $this->_tpl_vars['currdata']['companyuserId']; ?>
&action=Delete" class="confirm">Delete</a></td>
     -->      
     </tr>
     
                <?php echo smarty_function_assign(array('var' => 'comuid','value' => $this->_tpl_vars['currdata']['companyuserId'],'scope' => 'global'), $this);?>

                
                
                <span style="display:none;"><?php echo $this->_tpl_vars['totdata']++; ?>
</span> <?php endforeach; unset($_from); endif; ?>
                
                <?php else: ?>
           <tr><td colspan="5" style="color:red;">No Records Available</td></tr>
                <?php endif; ?>
                    
                <input  type="hidden" name="no" value="<?php echo $this->_tpl_vars['count_db_res']; ?>
">
              </tbody>  
        </table>
        
                                   <?php if ($this->_tpl_vars['arr_page_vars']['no_of_pages'] > 1): ?>
                
                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                
                                        <?php endif; ?>
                                         <div style="height:25px;"></div>           
      </div>
  
	

<!--
<div id="toPopup" class="over_laydesign"> 
        <div class="close"></div>
       	<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
		<div id="popup_content"> 
            <div class="over_hedtag">
	     <a style="padding: 0px 0.4em; float: right;" class="my_modal_close" href="#"></a>
	    <h2 style="text-align:center;" class="over_hed">Edit User</h2>
      </div>
           <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" 
         >
    <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
    <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
    <div class="create">
      
      <div class="company">
        <label>Group Name:</label>
        <select name="editdepartment" id="editdept" class="validate[required] select-one select_cmb" >
          <!--

onchange="javascript:handledepartment(this);"
          <option value="0">Select Group</option>
          
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
                    
        </select>
      </div>
      <div class="company">
        <label>Name:</label>
        <input type="text" class = "validate[required] input_login" name="name" id="editname" value="<?php echo $this->_tpl_vars['name']; ?>
" 

size="45"/>
      </div>
      <div class="company">
        <label>Surname:</label>
        <input type="text" class = "validate[required] input_login" name="surname" id="editsurname" 

value="<?php echo $this->_tpl_vars['surname']; ?>
" size="45" />
      </div>
      <div class="company">
        <label>Email:</label>
        <input type="text" class = "validate[required,custom[email]] input_login" name="email" id="editemail" 

value="<?php echo $this->_tpl_vars['email']; ?>
" size="45" />
        <span id="msg">&nbsp;</span> </div>
      <div class="company">
        <label>Phone:</label>
        <input type="text" class = "validate[required,custom[phone]] input_login" name="phone" id="editphone" 

value="<?php echo $this->_tpl_vars['phone']; ?>
" size="45" />
      </div>
      <div class="company">
        <label>User Role:</label>
        <select name="userrole" id="editrole" class="select_cmb">
          <option  value="1">Admin</option>
          <option  value="2">Key Holder</option>
          <option  value="0">User</option>
        </select>
      </div>
     
      <div class="company">
        <label>Status:</label>
        <select name="eStatus" id="editstat" class="select_cmb">
      
          <option  value="1">Active</option>
          <option  value="0">Inactive</option>
          
        </select>
      </div>
      
 <input  id='comuid' type="hidden" name = "id">
     
      <div class="company editprofilebutton editprofilebutton2 company02 company03"> 
        <input type="submit" id="submit" name="update" class="button_text" value="Update">
        <input type="button" style="background-color:#ACACAC !important;" value="Cancel" class="button_text" onclick="history.back(-1);return false;">
   </div>
    </div>
  </form>
           </div>
            <p align="center"><a href="#" class="livebox"></a></p>
        </div>  <div class="loader"></div>
	    <div id="backgroundPopup"></div>
        <div id="my_modal" class="over_laydesign">
      <div class="over_hedtag">
	     <a style="padding: 0px 0.4em; float: right;" class="my_modal_close" href="#"></a>
	    <h2 style="text-align:center;" class="over_hed">Edit User</h2>
      </div>
  <form class="form-horizontal">   
          <div class="control-group over_size">
            <label for="select01" class="control-label">Group Name</label>
            <div class="controls over_select">
              <select id="select01" class="over_select_siz">
                <option>Devepeople</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>  
          
          <div class="control-group over_size">
            <label for="select01" class="control-label">Name</label>
            <div class="controls over_select">
              <input name="" type="text" placeholder="Bill">
            </div>
          </div>
          <div class="control-group over_size">
            <label for="select01" class="control-label">Surname</label>
            <div class="controls over_select">
              <input name="" type="text" placeholder="Gates">
            </div>
          </div>
          <div class="control-group over_size">
            <label for="select01" class="control-label">Email</label>
            <div class="controls over_select">
              <input name="" type="text" placeholder="bill@test.com">
            </div>
          </div>
          <div class="control-group over_size">
            <label for="select01" class="control-label">Mobile Phone</label>
            <div class="controls over_select">
              <input name="" type="text" placeholder="02085841400">
            </div>
          </div>
          <div class="control-group over_size">
            <label for="select01" class="control-label">User Role</label>
            <div class="controls over_select">
              <select id="select01" class="over_select_siz">
                <option>Admin</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          
          <div class="control-group over_size">
            <label for="select01" class="control-label">Statu</label>
            <div class="controls over_select">
            <label><span class="over_radio"><input type="radio"  checked="checked" value="0" id="sendnow" name="sendnow"></span> <span class="over_spn">Active</span></label>
            <label><span class="over_radio"><input type="radio"  checked="checked" value="0" id="sendnow" name="sendnow"></span>  <span class="over_spn">Inactive</span></label> 
            </div>
          </div>
          <div class="over_but">
          <div class="control-group bur_siz">
           
            </div>
            <div class="ove_button">
            	<button type="submit" class="overButton">import</button>
            	<button type="submit" class="overButton over_cancle">cancel</button>
            </div>
            
          	
          </div>
        </form>
  </div>
<div class="popup" id="div_view" style="display:none; background:#000 !important; padding:30% !important;">  <div class="close" onclick="document.getElementById('div_view').style.display='none'"></div>  <span class="ecs_tooltip">Press Esc to close<span class="arrow"></span></span>  <div id='upload_csv' style="display:none;" >    <div style="vertical-align:middle; " >      <form method="post" name="frm_csv_upload" enctype="multipart/form-data" >        Select file :        <input type="file" name="csv" accept="application/msexcel"  required/></br>                       Status :              <select name="eStatus" id= "select" class="select_cmb" style="float:right;margin-right:139px !important;width:233px !important;padding-left:5px !important;">                <option  value="1">Active</option>                <option  value="0">Inactive</option>              </select>              <input  id='deptid' type="hidden" name = "id"></br></br></br>            		<input type="submit" style="float:left;width:100px !important; height: 27px !important;margin-left:65px !important;" name="csvupload" value="Submit" class="button_text"/>        		<input type="hidden" value="adduser" />        <br />        <br />        Download file - <a href="download.php?download_file=example.xls" target="_blank">example.xls </a>      </form>    </div>  </div>  <div id='upload_dept_csv' style="display:none;" >    <div style="padding-top:10px;" >      <form method="post" name="frm_csv_upload" enctype="multipart/form-data" >        <input type="text" name="csvdeptid" id="csvdeptid" value="" />        Select file :        <input type="file" name="csv" />        <input type="submit" name="csvdeptupload" value="Submit" class="button_text" style="width:100px !important; height: 27px !important;"/>        <br />        <br />        Download file - <a href="download.php?download_file=examplestaff.xls" target="_blank">example.xls </a>      </form>    </div>  </div>  <div id="div_depart" style="text-decoration:none;padding:50px;background-color:#ffffff;border:0px;"> &nbsp; </div></div>
</div>
      
    -->  
      
      
      <!--------------new pop p ----------------------------------------->
      
        <!-- <button class="my_modal_open" data-popup-order="0">Click Me</button>-->
 
    <div id="my_modal" class="over_laydesign reveal-modal" style="">
        <div class="edit_pop edit_pop2">
      <div class="over_hedtag">
	     <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#">
      <img src="img/close_btn.png" alt="Close" border="0" /> </a>
      <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 70px;padding: 0 0 20px;" class="over_hed">Edit User</h2>
      
    </div>
    <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" class="form-horizontal">
      <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
      <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Group Name</label>
        <div class="controls over_select edit_scenario_radio">
            <select name="editdepartment" id="editdept" class="over_select_siz"  <?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>disabled="disabled"<?php endif; ?> required="required">
          
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
             <?php endif; ?>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Name</label>
        <div class="controls over_select">
          <input type="text" class = "validate[required] input_login edit_scenario_name" name="name" id="editname" value="<?php echo $this->_tpl_vars['name']; ?>
" size="45" placeholder="Name"/>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">SurName</label>
        <div class="controls over_select">
          <input type="text" class = "validate[required] input_login edit_scenario_name" name="surname" id="editsurname" value="<?php echo $this->_tpl_vars['surname']; ?>
" size="45" placeholder="SurName"/>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Email</label>
        <div class="controls over_select">
          <input type="text" class = "validate[required,custom[email]] input_login edit_scenario_name" name="email" id="editemail" value="<?php echo $this->_tpl_vars['email']; ?>
" size="45" placeholder="Email"/>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Phone</label>
        <div class="controls over_select">
          <input type="text" class = "validate[required,custom[phone]] input_login edit_scenario_name" name="phone" id="editphone" value="<?php echo $this->_tpl_vars['phone']; ?>
" size="45" placeholder="Phone"/>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">User Role</label>
        <div class="controls over_select edit_scenario_radio">
          <select name="userrole" id="editrole" class="over_select_siz"  >
            <option  value="1">Admin</option>
            <option  value="2">Key Holder</option>
            <option  value="0">User</option>
          </select>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Status</label>
        <div class="controls over_select edit_scenario_radio">
          <label><span class="over_radio">
            <input type="radio"  checked="checked" value="1" id="active" name="eStatus" >
            </span> <span class="over_spn">Active</span></label>
          <label><span class="over_radio">
            <input type="radio"  value="0" id="inactive" name="eStatus" >
            </span> <span class="over_spn">Inactive</span></label>
        </div>
      </div>
      <input  id='comuid' type="hidden" name = "id">
      <div class="over_but" style="padding-top:15px; float:right; padding-right:14px;">
        <div class="control-group bur_siz"> </div>
        <div class="ove_button">
          <input type="submit" id="submit" name="update"  class="overButton" value="Update" style="margin:0px 12px 0px 20px;width:100px;">
          <button type="button" class="overButton over_cancle" onclick="history.back(-1);return false;">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>

              <!-- delete pop up....----->
              
              	  <div id="my_modaldelete" class="over_laydesign reveal-modal">
      <div class="over_hedtag">
<div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> </div>
  <div class="over_delete delete_scenario">
    <p class="over_det_text"><strong style="padding:0 !important;">Are you sure you want to Delete this Company User View?</strong></p>
    <p class="over_text_det">If you delete you can't recover this Company User View anymore</p>
    <div class="ove_button delete_scenario_button"> <a href="" id="deleteurl" style="width: 125px !important;height:35px !important;text-align:center !important;line-height:35px !important;color:#fff !important; float:left; background:#1e8ece; text-decoration: none; margin:18px 0 0 150px;" class="overButton over_mid delete_scenario_conform" >Delete</a> 

    </div>
            </div>
        </div>
  </div>
    
              
              
      
      <!-- import users -->
      
      
        <div id="my_modalimport" class="over_laydesign">
<div class="edit_pop3">
  <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;" class="my_modalimport_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> 
                    
      
      <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 0;
  padding: 0 0 20px 0;" class="over_hed">Import Users</h2></div>
 
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
                
              <input type="file"  name="csv" class="uploadattach wB edit_scenario_name" accept="application/msexcel">
              <div class="file_name01" id="Browse001"><strong>Browse</strong><span class="file_name01_mssg"></span></div>
            </div>
          </div>
      
      
           <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Sample Format File</label>
            <div class="controls fileType withButton edit_scenario_radio">
             Download file - <a href="download.php?download_file=examplestaff.xls" target="_blank">example.xls </a>     
            </div>
          </div>
      
      
       <div class="over_but" style="padding-top:15px; float:right; padding-right:14px;">
                                    <div class="control-group bur_siz"> </div>
              
          <div class="ove_button">
                <input type="submit" name="csvupload" value="Import" class="overButton" style="margin:0px 12px 0px 20px;width:100px;"
/>
            	
            	<button type="submit" class="my_modalimport_close overButton over_cancle">cancel</button>
            </div>
            
          	
          </div>
        </form>
  </div>
      </div>
      
      
      
                         <!-- Upgrade pop up....----->
<div id="my_modalupgrade" class="over_laydesign">
<div class="edit_pop5">
  <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modalupgrade_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> </div>
  <div class="over_delete">
    <p class="over_det_text">&nbsp;</p>
    <p class="over_text_det" style="text-align:center;font-weight:bold;font-family:18px;">Upgrade your plan to Activate </p>
    <p class="over_text_det" style="text-align:center;font-weight:bold;font-family:18px;">this function</p>
    <div class="ove_button" style="width:400px !important;">
    	<a href="plans.php" id="up_grade">Upgrade Your Plan</a>
    </div>
  </div>
</div>
</div>