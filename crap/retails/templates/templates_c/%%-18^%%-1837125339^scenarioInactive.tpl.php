<?php /* Smarty version 2.6.0, created on 2013-12-02 08:44:48
         compiled from scenarioInactive.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign', 'scenarioInactive.tpl', 584, false),array('modifier', 'capitalize', 'scenarioInactive.tpl', 590, false),array('modifier', 'urldecode', 'scenarioInactive.tpl', 592, false),)), $this); ?>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/validation/jquery.js"></script>
<link rel="stylesheet" href="js/sorting/themes/blue/style.css" type="text/css" media="print, projection, screen" />
<script type="text/javascript" src="js/sorting/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/jlist.js"></script>

<?php echo ' 
<script src="rmm-js/jquery.min.js" type="text/javascript"></script> 
<script src="js/script1.js" type="text/javascript"></script> 
<script src="rmm-js/responsivemobilemenu.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jlist.js"></script>
<link rel="stylesheet" href="js/confirm/jquery-ui.css" type="text/css">
<script src="js/confirm/avg_ls_dom.js" type="text/javascript"></script> 
<script src="js/confirm/jquery-ui.js"></script> 
<script src="js/confirm/jquery_002.js"></script> 

<!--<script type="text/javascript" src="js/jquery-1.5.1.js"></script>-->

<style>
.check_boxes{
	width: 260px;
	float:left;
	margin: 0;
	padding:0;
        max-height:100px;
}
.check_boxes ul{
	width: 260px;
	float:left;
	margin:0;
	max-height:100px;
	overflow: auto;
}
.check_boxes ul li{
	width: 120px;
	float:left;
	height: 30px;
	line-height:30px;
	list-style:none;
}

.check_boxes ul li .check_name{
	font-size: 14px;
	color:#999;
	padding: 0;	
}



</style>
<script type="text/javascript">
	$(function() {

		//$(".confirm").easyconfirm();

		//$("#alert").click(function() {

		//});

	});

</script>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<!-- <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet">-->
<link href="css/StyleSheet.css" type="text/css" rel="stylesheet">
<script src="js/bootstrap.js"></script> 
<script src="js/jquery.popupoverlay.js"></script> 
<script>
        function validateselect()
        {
            var selectChoose = document.getElementById(\'selectedcontact\');
            var maxOptions = 1;
            var optionCount = 0;
            for (var i = 0; i < selectChoose.length; i++) {
				
                if(selectChoose[i].selected) {
                    optionCount++;
                    if(optionCount > maxOptions) {
                        alert("You Can Select Only Two Contacts");
                       // return false;
						$(\'select option:not(:selected)\').each(function(){
 $(this).attr(\'disabled\', \'disabled\');
      //$(this).style.attr(\'color\', \'red\');
});
                    }
					
					else
					{
				$(\'select option:not(:selected)\').each(function(){
 $(this).removeAttr(\'disabled\', \'disabled\');	
 });	
					}
					//selectChoose[i].style.visibility = "disable";
                }
				
				
            }
            return true;
        }
            
            </script> 
<script>
    $(function() {
     $(\'#my_modal\').popup();
    });
        
     </script> 
<script>
		 function locationlist(x)
       {
			var httpxml;
				try
				{
					httpxml=new XMLHttpRequest();
				}
				catch (e)
				{
					// Internet Explorer
					try
					{
						httpxml=new ActiveXObject("Msxml2.XMLHTTP");
					}
					catch (e)

					{
					try
						{
							httpxml=new ActiveXObject("Microsoft.XMLHTTP");
						}
						catch (e)
						{
							alert("Your browser does not support AJAX!");
							return false;
						}

					}

				}

				function stateck() 

				{
					if(httpxml.readyState==4)
					{
						var response = httpxml.responseText;
						document.getElementById(\'filtercontact\').style.display = "block";
						document.getElementById(\'locationlist\').innerHTML = "";
                                                    
						document.getElementById(\'locationlist\').innerHTML = response;
					}
				}
				
				var url="locationlist.php";
				url = url+"?sid="+x;
				httpxml.onreadystatechange=stateck;
				httpxml.open("GET",url,true);
				httpxml.send(null);

	   }

	   jQuery.validator.addMethod("action_name", function(value, element) { 
		 var textData = editor.getData();
		//alert(textData);
		  if(textData.length>0) return true;

    return false;

}, "No data in editor");
 
		 function getLocation()
       {
            var lid =  $(\'#selectlocation :selected\').val();
	        
			var httpxml;
				try
				{
					httpxml=new XMLHttpRequest();
				}
				catch (e)
				{
					// Internet Explorer
					try
					{
						httpxml=new ActiveXObject("Msxml2.XMLHTTP");
					}
					catch (e)

					{
					try
						{
							httpxml=new ActiveXObject("Microsoft.XMLHTTP");
						}
						catch (e)
						{
							alert("Your browser does not support AJAX!");
							return false;
						}

					}

				}

				function stateck() 

				{
					if(httpxml.readyState==4)
					{
						var response = httpxml.responseText;
						document.getElementById(\'filtercontact\').style.display = "block";
						document.getElementById(\'selectdept\').innerHTML = "";
                                                    
						document.getElementById(\'selectdept\').innerHTML = response;
					}
				}
				
				var url="selectlocation.php";
				url = url+"?lid="+lid;
				httpxml.onreadystatechange=stateck;
				httpxml.open("GET",url,true);
				httpxml.send(null);

	   }

	   jQuery.validator.addMethod("action_name", function(value, element) { 
		 var textData = editor.getData();
		//alert(textData);
		  if(textData.length>0) return true;

    return false;

}, "No data in editor");
 

       function clickerdepp(x,pageid) { 
           
           $(\'#my_modal\').popup();
               
              var scenarioname1 = document.getElementById(\'scenarionamee_\'+x).value;
                 var scenarioname1 = scenarioname1.replace(/(^\\s+|\\s+$)/g,\' \');
//					var comusurname = document.getElementById(\'comusurname_\'+x).value;
//					var comudeptid = document.getElementById(\'comudeptid_\'+x).value;
//					
//					var comuemail = document.getElementById(\'comuemail_\'+x).value;
//					var comuphone = document.getElementById(\'comuphone_\'+x).value;
//					var comurole = document.getElementById(\'comurole_\'+x).value;
               
						locationlist(x);
                               
                                var scenariostat1 = document.getElementById(\'scenariostat_\'+x).value;
                                   
                          // $(\'#editdept\').val(y);
//var opt1 = \'<option  value="1" selected="selected">Enable for use</option><option  value="0">Disable</option>\';   
//var opt0 =\'<option  value="1">Enable for use</option><option  value="0" selected="selected">Disable</option>\';
//                      
//		var optnull = \'<option  value="1">Active</option><option  value="0">Inactive</option>\';  
//                                        
//                               if(scenariostat1==1)
//                                   {
//                                
//                                   document.getElementById(\'eoption\').innerHTML = opt1;
//                                       }
//                                           else if(scenariostat1==0)
//                                               {
//                                                  
//                                                  document.getElementById(\'eoption\').innerHTML = opt0;
//                                                   }
//                                         else
//                                             {
//                                                
//                                                document.getElementById(\'eoption\').innerHTML = optnull; 
//                                                 }
                                                       
                                                       
//           $(\'#editdept\').val(comudeptid);
$(\'#scenarioname\').val(scenarioname1);
//$(\'#editsurname\').val(comusurname); 
//    
//                                                       
//           $(\'#editemail\').val(comuemail);
//$(\'#editphone\').val(comuphone);
//$(\'#editrole\').val(comurole);
         $(\'#scenarioid\').val(x); 	      
             
          
           var urlupdate ="scenarioActivateAll.php?id="+x+"&action=Update"+"&page="+pageid+"&edit="+pageid;
                         
                          
             var actionurl = document.getElementById("frmAdd"); 
                // if(delurl)
                    // {
                         //alert(delurl);
            actionurl.action = urlupdate;
          
          
            // scenarioAdd.php?id=1145&aid=323&action=Update&page=1&edit=1
             
             
           
           }
        
  </script> 
<script>
            function clickerdepp_delete(g) 
            {
                
                    $(\'#my_modaldelete\').popup();
                      var urldelete ="scenarioAll.php?id="+g+"&action=Delete";
                         
                          
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
                
         var urladd ="scenarioActivateAll.php";
                       
                          
             var addactionurl = document.getElementById("frmAddpop"); 
                // if(delurl)
                    // {
                       
            addactionurl.action = urladd;            
                
             
                
                
             }
        
        
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
	var s_id;
	var action;
	function password_form(sid, act) {
		var str;
		if(act == "activate") {
			str = "Are you sure you want to activate this Incident? All related staff will be send a notification.";
		}
		else if(act=="initiate") {
			str = "Are you sure you want to initiate this Incident?";
		
		}else if(act=="unactivate") {
			str = "Are you sure you want to unactivate this Incident?";
		}	
		else if(act=="deactivate"){
			str = "Are you sure you want to deactivate this Incident?";
		}
		if (confirm(str)) {
			document.getElementById(\'div_depart\').innerHTML = document.getElementById("password_form").innerHTML;
			document.getElementById(\'div_view\').style.display = "block";

			s_id = sid;
			action = act;
			
		} else
			return false;
	}

	function changestatus(scenarioid) {

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

		function stateck() {

			if (httpxml.readyState == 4) {

				var response = httpxml.responseText;

				//alert(response);

				if (response == 1) {

					document.getElementById(\'status_\' + scenarioid).innerHTML = "<a href=\'#\' onClick=\'changestatus(" + scenarioid + ");\'><img src=\'images/green-circle.png\' /></a>";

				} else {

					document.getElementById(\'status_\' + scenarioid).innerHTML = "<a href=\'#\' onClick=\'changestatus(" + scenarioid + ");\'><img src=\'images/red-circle.png\' /></a>";

				}

			}

		}

		var url = "updatescenariostatus.php";

		url = url + "?did=" + scenarioid;

		httpxml.onreadystatechange = stateck;

		httpxml.open("GET", url, true);

		httpxml.send(null);

	}

	function activateScenario(scenID) {
		if (confirm("Are you sure you want to activate this Incident? All related staff will be send a notification.")) {
			location.href = "activationAdd.php?sid=" + scenID;
		} else
			return false;
	}

	function activateNow() {
		var x=$("#div_depart").find("input[atr=\'pass\']").val();
		if (x==null || x=="")
		  {
		  	alert("Password can\'t be empty!!!");
		  	return false;
		  }

		$.ajax({type: "post",url:"checkpassword.php",data : {password : x},async:false,cache:false,dataType:"html",success:
			function(data){
				if(data == "success") {
					if(action=="activate") {
						location.href = "activationAdd.php?sid=" + s_id;
					}
					else if(action=="initiate") {
						location.href = "scenarioInitiate.php?sid=" + s_id;
					}else if(action=="unactivate") {
						location.href = "update.php?sid=" + s_id;
					}					
					else if(action=="deactivate"){
						location.href = "deactivateAdd.php?sid=" + s_id;
					}
				}
				else {
					alert("Wrong password, please try again!!!");
					document.getElementById(\'div_depart\').innerHTML = document.getElementById("password_form").innerHTML;
			        document.getElementById(\'div_view\').style.display = "block";
				}
			}
		});
	}

	function deactivateScenario(scenID) {
		if (confirm("Are you sure you want to deactivate this Incident?")) {
			location.href = "deactivateAdd.php?sid=" + scenID;
		} else
			return false;
	}

</script> 
</script> 
'; ?>

<div class="location"> Select the 'Activated Scenarios' option to see all scenarios that are currently active <br>
  <p> </p>
</div>

<!--
<div class="completed" style="margin-right:14px !important;">
	<a href="companyView.php"><h4>Completed and go to my dashboard</h4></a>
</div>
-->
</td>
</tr>
</table>
<div class="grey-border" style="width:100%;"></div>
<div class="clear"></div>
<div class="location">
  <form name="frmstatus" id="frmstatus" method="post" enctype="multipart/form-data" >
                            <div style="float:right;"  >
                   <div style="float:right;"  >
                                <?php if ($this->_tpl_vars['activeinactive'] == 'activeyes'): ?>
        <input type="radio" value="Inactive"  name="actionstatus" id="inactive" onclick="document.frmstatus.submit();" />&nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Inactive Scenarios</strong>
                            <input type="radio" value="Active" name="actionstatus" id="active" onclick="document.frmstatus.submit();" checked="checked" />&nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Activated Scenarios</strong>
                          
                           
                           <?php elseif ($this->_tpl_vars['activeinactive'] == 'inactiveyes'): ?>
        <input type="radio" value="Inactive"  name="actionstatus" id="inactive" onclick="document.frmstatus.submit();" checked="checked" />&nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Inactive Scenarios</strong>
                            <input type="radio" value="Active" name="actionstatus" id="active" onclick="document.frmstatus.submit();"  />&nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Activated Scenarios
 </strong>                                                     
                           <?php else: ?>
        <input type="radio" value="Inactive"  name="actionstatus" id="inactive" onclick="document.frmstatus.submit();" checked="checked" />&nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Inactive Scenarios</strong>
                           <input type="radio" value="Active" name="actionstatus" id="active" onclick="document.frmstatus.submit();"  />&nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Activated Scenarios
</strong>    
                           <?php endif; ?>
                               
                            </div> 
                            </div>
            </form>
                        
                        
                        </form> 
</div>
<div class="breadcrumb"> <?php echo $this->_tpl_vars['breadcrumb']; ?>
 </div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="7">
  
        <tr>
          <td width="946px !important;" class="tbl_brder"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="border_bg_color">
              <tr>
                <td><table id="tablesorter-demo" class="table table-striped table-hover"   rel="<?php echo $this->_tpl_vars['RECLIMIT']; ?>
" border="0" cellpadding="5" cellspacing="5">
                    <!--						style="background-color:#E6EEEE; color:#385BBF; font-family:Tahoma,Arial,Helvetica,sans-serif; font-size:11px;"	--> 
                    <!--<form name="frmlist" id="frmlist" method="post" action="<?php echo $this->_tpl_vars['page_name']; ?>
">
								<input type="hidden" name="action" value="Search">
								<input type="hidden" name="srname" value="">
								<input type="hidden" name="keyname" value="">-->
                    
                    <thead>
                    <th><span></span><span class="sort-data"></span></th>
                      <th><span>Scenario Name</span><span class="sort-data"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>
                      
                      <!--           <th><span>Response</span><span class="sort-data"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>
            <th><span>Message</span><span class="sort-data"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>
            <th class="al-c"><span>Activate</span><span class="sort-data"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>
            
           
<th class="al-c"><span>Status</span><span class="sort-data"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>-->
                      
                      <th class="al-c"> Actions</th>
                      </thead>
                    <tbody class="table1">
                    
                    <?php if ($this->_tpl_vars['count_db_res'] > 0): ?>
                    <?php echo smarty_function_assign(array('var' => 'totdata','value' => '0'), $this);?>

                    <?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>
                    <tr class="<?php if ($this->_tpl_vars['totdata']%2 == 0): ?>list-green-bg<?php else: ?>list-pink-bg<?php endif; ?>" style="color:#000!important;">
                      <td  align="left" style=" padding:0 0 0 10px!important;"> <?php if ($this->_tpl_vars['currdata']['scenicon'] != ""): ?> <img style="float:left;padding-right:5px;" src="images/scenarioicons/<?php echo $this->_tpl_vars['currdata']['scenicon']; ?>
 " title="<?php echo $this->_tpl_vars['currdata']['scenarioname']; ?>
" alt="<?php echo $this->_tpl_vars['currdata']['scenarioname']; ?>
" width="45px" /> <?php endif; ?> </td>
                      <td  align="left" style=" padding:0 0 0 10px!important;"><p style="padding: 13px 0px 0px 10px ! important;" >
                          <input type = "hidden" id="scenarionamee_<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
" value="<?php echo $this->_tpl_vars['currdata']['scenarioname']; ?>
" />
                          <?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
 </p></td>
                      <input  id='scenariostat_<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
' type="hidden" value="<?php echo $this->_tpl_vars['currdata']['eStatus']; ?>
">
                      <td align="center" style=" padding:5px 0 0 10px!important;"><a title="Edit Scenario" href="" onClick="clickerdepp(<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
,<?php echo $this->_tpl_vars['curr_page']; ?>
);" class="my_modal_open" data-popup-order="0" style="color:#168ece;padding: 0 !important;margin:0 !important;">Activate</a> 
                        <!--<span style="color:#cbcbcb;padding:0px 1px 0px 1px;">|</span>--> 
                        <!--<a title="Delete Scenario" onClick="clickerdepp_delete(<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
);" href="" class="my_modaldelete_open" style="color:#168ece;padding: 0 !important;margin:0 !important;">Delete</a>              --></td>
                      
                      <!--
<a  title="Edit Incident" href="<?php echo $this->_tpl_vars['add_file']; ?>
?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
&aid=<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
&action=Update&page=<?php echo $this->_tpl_vars['curr_page']; ?>
&edit=<?php echo $this->_tpl_vars['curr_page']; ?>
" style="color:#168ece;padding: 0 !important;margin:0 !important;">Edit</a>&nbsp;<span class="line">|</span>&nbsp;
<a title="Delete Incident" href="<?php echo $this->_tpl_vars['view_file']; ?>
?id=<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
&action=Delete" class="confirm" style="color:#168ece;padding: 0 !important;margin:0 !important;">Delete</a></td>
--> 
                    </tr>
                    <?php echo smarty_function_assign(array('var' => 'totdata','value' => $this->_tpl_vars['totdata']+1), $this);?>

                    <?php endforeach; unset($_from); endif; ?>
                    
                    <?php else: ?>
                    <tr>
                      <td align="center" style=" padding:13px 0 0 10px!important;" class="error_msg" colspan="7"><font color="#FF0000">Records not available.</font></td>
                    </tr>
                    <?php endif; ?>
                    </tbody>
                    
                    <tr> </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  </td>
  
  </tr>
  
</table>
<?php if ($this->_tpl_vars['arr_page_vars']['no_of_pages'] > 1): ?>

							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

							<?php endif; ?>
<div class="popup" id="div_view" style="display:none; "  >
  <div id='password_form' style="display:none;" >
    <div style="vertical-align:middle; " >
      <form name="pass_form" id="pass_form" method="post" name="frm_csv_upload" >
      <div class="company" style = "width:880px !important;">
        <label>Password:</label>
        <input type="password" class = "validate[required]" name="password" atr="pass" style="width:273 !important;"/>
      </div>
      <div class="company editprofilebutton editprofilebutton2 company02 company03" style="float:left!important;" >
        <input type="button" class="button_text" value="Submit" style="margin-left:45px !important;" onclick="return activateNow()"/>
      </div>
      </form>
    </div>
  </div>
</div>

<!--toPopup end-->

</div>
</div>

<!--------------new pop p -----------------------------------------> 

<!-- <button class="my_modal_open" data-popup-order="0">Click Me</button>-->

<div id="my_modal" class="over_laydesign">
  <div class="edit_pop">
    <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modal_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
      <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 0;
  padding: 0 0 20px 0;" class="over_hed">Activate Scenario</h2>
    </div>
    <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" class="form-horizontal" action="">
      <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
      <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Scenario Name</label>
        <div class="controls over_select">
          <input type="text" class = "validate[required] input_login edit_scenario_name" name="scenarioname" id="scenarioname" value="<?php echo $this->_tpl_vars['scenarioname']; ?>
" size="45" placeholder="Scenario Name"/>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Select Location</label>
        <div class="controls over_select edit_scenario_radio" id="locationlistt">
        
         <select name="location" id="selectlocation" class="validate[required] select_cmb0002" onchange="getLocation()">

          <option>Select Location:</option>
          
                      

                     <?php if (count($_from = (array)$this->_tpl_vars['selectlocat'])):
    foreach ($_from as $this->_tpl_vars['locate_all']):
?>

                      
                      
          <option value="<?php echo $this->_tpl_vars['locate_all']['locationId']; ?>
"  > <?php echo $this->_tpl_vars['locate_all']['locationname']; ?>
 </option>
          
                      

                      <?php endforeach; unset($_from); endif; ?>

                     
                    
        </select>
        
        
        
        
        
        
        
        
        </div>
      </div>
      
      <!--         <div class="control-group over_size">
            <label for="select01" class="control-label">Associated Deparments</label>
            <div class="controls over_select">
<select name="department[]" id="selectdept" multiple="multiple" class="validate[required] over_select_siz" onclick="Getdepartments();" style="width:301px; height:90px !important; float:left;"  >
           
                    </select>
                      
                      <p>To select multiple departments hold CTRL or SHIFT key</p>
            </div>
          </div>  -->
      
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Associated Groups</label>
        <div class="controls over_select edit_scenario_radio"> 
          <!--<select name="department[]" id="selectdept" multiple="multiple" class="validate[required] over_select_siz" onclick="Getdepartments();" style="width:301px; height:90px !important; float:left;"  >
           
                    </select>-->
          
          <div id="selectdept" style="overflow:auto;" class="check_boxes"  > </div>
        </div>
      </div>
      <div style="clear:both;height:1px;"></div>
      <div id="filtercontact" style="display:none;"> <br>
        <input type="text" name="filtercontacts" id="filtercontacts" style="display:none;" value="">
        <a href="javascript:Getdepartments()"  style="background:#69B4DE; color: #000000; margin-left: 10px; padding: 4px 15px; display:none;">Search</a></div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Action</label>
        <div class="controls over_select">
          <textarea name = 'action_name'id='action_name' Value='<?php echo $this->_tpl_vars['page_name']; ?>
' class='validate[required] edit_scenario_name' cols="7" rows="10" style="height:100px !important; width:304px;" required ></textarea>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label" style="padding:35px 0 0 0;">Key Contacts</label>
        <div class="controls over_select"  >
          <select name="selectedcontacts[]" id="selectedcontact" multiple="multiple" class="validate[required] edit_scenario_name" style="width:301px; height:90px !important; float:left;" onchange="validateselectedit()" >
            <option>Select Name:</option>
            
                                        
                                        
          
                      

                     <?php if (count($_from = (array)$this->_tpl_vars['data_user'])):
    foreach ($_from as $this->_tpl_vars['contact_all']):
?>

                      
                      
          
                                        
                                        
            <option value="<?php echo $this->_tpl_vars['contact_all']['companyuserId']; ?>
" <?php echo $this->_tpl_vars['contact_all']['isselected']; ?>
 > <?php echo $this->_tpl_vars['contact_all']['name']; ?>
 </option>
            
                                        
                                        
          
                      

                      <?php endforeach; unset($_from); endif; ?>

                     
                    
        
                                      
                                      
          </select>
        </div>
      </div>
<!--      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Status</label>
        <div class="controls over_select edit_scenario_radio"> 
          
        
         
          <select name="eStatus" class="select1_cmb" id="eoption" style="margin:0 0 0 -5px; width:257px;">-->
            
                      
        
                                      
                                      
<!--          </select>
        </div>
      </div>-->


      <input  id="scenarioid" type="hidden" name = "id">
      <div class="over_but" style="float:right; padding-right:80px; margin: 20px 0 0 0;">
        <div class="control-group bur_siz"> </div>
        <div class="ove_button">
          <input type="submit" id="submit1" name="updatee"  class="overButton" value="Launch" style="margin:0px 10px 0px 20px;width:100px;">
          <button type="button" class="my_modal_close my_modaladd_close2" >Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- delete pop up....----->

<div id="my_modaldelete" class="over_laydesign">
  <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modaldelete_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> </div>
  <div class="over_delete">
    <p class="over_det_text">Are you sure you want to Delete this Scenario</p>
    <p class="over_text_det">If you delete you can't recover this Scenario View anymore</p>
    <div class="ove_button"> <a href="" id="deleteurl" style="color:#fff;background-color:#1e8ece;" class="overButton over_mid" >Confirm Delete</a> 
      <script>
          // }
                
            </script> 
    </div>
  </div>
</div>

<!-----------------add pop up ------------------------------------------------------------>

<div id="my_modaladd" class="over_laydesign" style="width:500px;">
  <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modaladd_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
    <h2 style="text-align:center;" class="over_hed">Add Scenario</h2>
  </div>
  <form name="frmAdd" id="frmAddpop" method="post" enctype="multipart/form-data" class="form-horizontal" action="">
    <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
    <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
    <div class="control-group over_size">
      <label for="select01" class="control-label">Scenario Name</label>
      <div class="controls over_select">
        <input type="text" class = "validate[required] input_login" name="scenarioname" id="scenarionameadd"  size="45" 
placeholder="Scenario Name"/>
      </div>
    </div>
    <div class="control-group over_size">
      <label for="select01" class="control-label">Associated Deparments</label>
      <div class="controls over_select">
        <select name="department[]" id="selectdeptadd" multiple="multiple" class="validate[required] over_select_siz" onclick="Getdepartmentsadd();" 
style="width:301px; height:90px !important; float:left;"  >
          
                 <?php if (count($_from = (array)$this->_tpl_vars['data_department'])):
    foreach ($_from as $this->_tpl_vars['department_all']):
?>

                      <?php if ($this->_tpl_vars['department_all']['deptStatus'] == 1): ?>
			 
          <option value="<?php echo $this->_tpl_vars['department_all']['departmentId']; ?>
" <?php echo $this->_tpl_vars['department_all']['isselected']; ?>
 > <?php echo $this->_tpl_vars['department_all']['locationname']; ?>
 &raquo; 
          <?php echo $this->_tpl_vars['department_all']['departmentname']; ?>
 </option>
          
                      
					  <?php endif; ?>
                      <?php endforeach; unset($_from); endif; ?> 

                    
                    
        </select>
      </div>
    </div>
    <div id="filtercontactadd" style="display:none;"><br>
      <input type="text" name="filtercontacts" id="filtercontactsadd" style="display:none;" 
value="">
      <a href="javascript:Getdepartmentsadd()"  style="background:#69B4DE; color: #000000; margin-left: 10px; padding: 4px 15px; 
display:none;">Search</a></div>
    <br/>
    <div class="control-group over_size">
      <label for="select01" class="control-label">Key Contacts</label>
      <div class="controls over_select"  >
        <select name="selectedcontacts[]" id="selectedcontactadd" multiple="multiple" class="validate[required]" style="width:301px; height:90px !important; 
float:left;" >
          <option>Select Name:</option>
          
                      

                     <?php if (count($_from = (array)$this->_tpl_vars['data_user'])):
    foreach ($_from as $this->_tpl_vars['contact_all']):
?>

                      
                      
          <option value="<?php echo $this->_tpl_vars['contact_all']['companyuserId']; ?>
" <?php echo $this->_tpl_vars['contact_all']['isselected']; ?>
 > <?php echo $this->_tpl_vars['contact_all']['name']; ?>
 </option>
          
                      

                      <?php endforeach; unset($_from); endif; ?>

                     
                    
        </select>
      </div>
    </div>
    <br/>
    <div class="control-group over_size">
      <label for="select01" class="control-label">Action</label>
      <div > 
        <!--           class="controls over_select"-->
        <textarea name ="action_name" id="action_name"   cols="27" rows="10" style="height:305px;" required ></textarea>
      </div>
    </div>
    <br/>
    <br/>
    <div class="control-group over_size" style="float:left;">
      <label for="select01" class="control-label" style="float:left;">Upload Scenario Icon</label>
      <br/>
      <br/>
      <div class="controls over_select">
        <input name="scenarioFile" type="file" class="scenario_file_filed"/>
        <p style=" float:left; margin: 5px 0 0 7px;">Maximum size:1024KB</p>
      </div>
    </div>
    
    <!--  <input  id='scenarioid' type="hidden" name = "id"> -->
    
    <div class="over_but" style="margin:41px 13px 4px 2px;float:left;" >
      <div class="control-group bur_siz"> </div>
      <div class="ove_button">
        <input type="submit" id="submit" name="add"  class="overButton" value="Submit" style="margin:0px 30px 0px 20px;width:100px;">
        <button type="button" class="my_modaladd_close my_modaladd_close2" >Cancel</button>
      </div>
    </div>
  </form>
</div>
<div id="toPopup">
  <div class="close"></div>
  <span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
  <div id="popup_content">
    <h2>Enter Password</h2>
    <!--your content start-->
    <div id="div_depart" style="text-decoration:none;padding:10px;"> &nbsp; </div>
  </div>
  <p align="center"> <a href="#" class="livebox"></a> </p>
</div>
<!--your content end-->
<div class="loader"></div>
<div id="backgroundPopup"></div>
</div>
<?php echo ' 
<script type="text/javascript">
$( document ).ready(function() {
$( "#enable_messages" ).click(function() {
	$("#messages").show();
	$("#enable_messages").hide();
	$("#disable_messages").show();
});
});

$( document ).ready(function() {
$( "#disable_messages" ).click(function() {
	$("#messages").hide();
	$("#enable_messages").show();
	$("#disable_messages").hide();
	
});
});
 	function checkassocdepartment()

	{
		if (document.frmAdd.elements["department[]"].selectedIndex == -1) {
				alert("Please select atleast one department.");
				$(\'#selectdept\').focus();
				return false;
		}

		if (document.frmAdd.elements["selectedcontacts[]"].selectedIndex == -1) {
				alert("Please select atleast one contact.");
				$(\'#selectedcontact\').focus();
				return false;
		}

	//return true;

	}


 function Getdepartments()
       {

           
//		   var fld = document.getElementById(\'selectdept\');
//			var values = [];
//			for (var i = 0; i < fld.options.length; i++) {
//			    if (fld.options[i].selected) {
//    			    values.push(fld.options[i].value);
//				}
//			} 
    
    
    var values = [];
$(\'div#selectdept input[type="checkbox"]\').each(function() {
    
   if ($(this).is(\':checked\')) {
       //values.push($(this).attr(\'name\'));
//values.push($(this).value);
    values.push($(this).val()); 
        
   }
});
			
			var filterVal = document.getElementById(\'filtercontacts\').value;
			
			
                            
			var httpxml;
				try
				{
					httpxml=new XMLHttpRequest();
				}
				catch (e)
				{
					// Internet Explorer
					try
					{
						httpxml=new ActiveXObject("Msxml2.XMLHTTP");
					}
					catch (e)

					{
					try
						{
							httpxml=new ActiveXObject("Microsoft.XMLHTTP");
						}
						catch (e)
						{
							alert("Your browser does not support AJAX!");
							return false;
						}

					}

				}

				function stateck() 

				{
					if(httpxml.readyState==4)
					{
						var response = httpxml.responseText;
						document.getElementById(\'filtercontact\').style.display = "block";
						document.getElementById(\'selectedcontact\').innerHTML = "";
                                                    
						document.getElementById(\'selectedcontact\').innerHTML = response;
					}
				}
				
				var url="selectcontacts.php";
				url = url+"?deptarray="+values+"&fltVal="+filterVal;
				httpxml.onreadystatechange=stateck;
				httpxml.open("GET",url,true);
				httpxml.send(null);

	   }

	   jQuery.validator.addMethod("action_name", function(value, element) { 
		 var textData = editor.getData();
		//alert(textData);
		  if(textData.length>0) return true;

    return false;

}, "No data in editor");
 

//new add pop up
    
    
    
//check add departments


function checkassocdepartmentadd()

	{
		if (document.frmAdd.elements["department[]"].selectedIndex == -1) {
				alert("Please select atleast one department.");
				$(\'#selectdeptadd\').focus();
				return false;
		}

		if (document.frmAdd.elements["selectedcontacts[]"].selectedIndex == -1) {
				alert("Please select atleast one contact.");
				$(\'#selectedcontactadd\').focus();
				return false;
		}

	//return true;

	}

 function Getdepartmentsadd()
       {
           
		   var fld = document.getElementById(\'selectdeptadd\');
			var values = [];
			for (var i = 0; i < fld.options.length; i++) {
			    if (fld.options[i].selected) {
    			    values.push(fld.options[i].value);
				}

			}
			
			var filterVal = document.getElementById(\'filtercontactsadd\').value;
			
			
                            
			var httpxml;
				try
				{
					httpxml=new XMLHttpRequest();
				}
				catch (e)
				{
					// Internet Explorer
					try
					{
						httpxml=new ActiveXObject("Msxml2.XMLHTTP");
					}
					catch (e)

					{
					try
						{
							httpxml=new ActiveXObject("Microsoft.XMLHTTP");
						}
						catch (e)
						{
							alert("Your browser does not support AJAX!");
							return false;
						}

					}

				}

				function stateck() 

				{
					if(httpxml.readyState==4)
					{
						var response = httpxml.responseText;
						document.getElementById(\'filtercontactadd\').style.display = "block";
						document.getElementById(\'selectedcontactadd\').innerHTML = "";
                                                    
						document.getElementById(\'selectedcontactadd\').innerHTML = response;
					}
				}
				
				var url="selectcontacts.php";
				url = url+"?deptarray="+values+"&fltVal="+filterVal;
				httpxml.onreadystatechange=stateck;
				httpxml.open("GET",url,true);
				httpxml.send(null);

	   }

	   jQuery.validator.addMethod("action_name", function(value, element) { 
		 var textData = editor.getData();
		//alert(textData);
		  if(textData.length>0) return true;

    return false;

}, "No data in editor");
 





function selectall_all()
    {
    //$(\'#selectall_id\').click(function(){

//alert("c!");

    $(\'div#selectdept input[type=checkbox]\').each(function() {

           $(this).attr(\'checked\', !$(this).attr(\'checked\'));

   });
//});  
    
    Getdepartments();
        
   }
    </script> 
<script>
$(\'#selectdept\').on(\'click\',\'.check\', function(){
    if($(this).hasClass(\'checkall\')){
        
    if($(this).hasClass(\'check_on\')){
        $(this).removeClass(\'check_on\');
        $(\'.check\').each(function(){ this.checked = false; });
    }else{
     $(this).addClass(\'check_on\');
       $(\'.check\').each(function(){ this.checked = true; });
    
    }
Getdepartments();
}
    else{
         $(\'.checkall\').each(function(){ this.checked = false; });
    }
  
})

</script> 
'; ?>
 <br/>