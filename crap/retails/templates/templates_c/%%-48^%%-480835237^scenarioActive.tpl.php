<?php /* Smarty version 2.6.0, created on 2013-12-03 06:05:46
         compiled from scenarioActive.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign', 'scenarioActive.tpl', 488, false),array('modifier', 'capitalize', 'scenarioActive.tpl', 499, false),array('modifier', 'urldecode', 'scenarioActive.tpl', 555, false),)), $this); ?>

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
    <script type="text/javascript" src="js/validation/validationEngine.js"></script>
    
<link rel="stylesheet" href="js/confirm/jquery-ui.css" type="text/css">
<script src="js/confirm/avg_ls_dom.js" type="text/javascript"></script>
<script src="js/confirm/jquery-ui.js"></script>
<script src="js/confirm/jquery_002.js"></script>

<!--<script type="text/javascript" src="js/jquery-1.5.1.js"></script>-->
   

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
    $(function() {
     $(\'#my_modal\').popup();
    });
        
     </script>
     
     <script>
    $(function() {
      $(\'#my_modalclosepop\').popup();
          
       $(\'#my_modaldeactivate\').popup();    
           
            $(\'#my_modallaunch\').popup();   
                $(\'#message_pop\').popup();
    });
  </script>
     
  
  <script>
  
  function clickclose()
      {
         $(\'#my_modalclosepop\').popup(); 
          }  
  
    function clickdeactivate()
      {
         $(\'#my_modaldeactivate\').popup(); 
          }  
              
                  function clicklaunch()
      {
         $(\'#my_modallaunch\').popup(); 
          }  
  
  </script>
  
  
  
  
  
  
  
     <script>
       function clickerdepp(x,assoid,pageid) { 
           
           $(\'#my_modal\').popup();
               
              var scenarioname1 = document.getElementById(\'scenarionamee_\'+x).value;
                 var scenarioname1 = scenarioname1.replace(/(^\\s+|\\s+$)/g,\' \');
//					var comusurname = document.getElementById(\'comusurname_\'+x).value;
//					var comudeptid = document.getElementById(\'comudeptid_\'+x).value;
//					
//					var comuemail = document.getElementById(\'comuemail_\'+x).value;
//					var comuphone = document.getElementById(\'comuphone_\'+x).value;
//					var comurole = document.getElementById(\'comurole_\'+x).value;
               
          
                               
                                var scenariostat1 = document.getElementById(\'scenariostat_\'+x).value;
                                   
                          // $(\'#editdept\').val(y);
var opt1 = \'<option  value="1" selected="selected">Enable for use</option><option  value="0">Disable</option>\';   
var opt0 =\'<option  value="1">Enable for use</option><option  value="0" selected="selected">Disable</option>\';
                      
		var optnull = \'<option  value="1">Active</option><option  value="0">Inactive</option>\';  
                                        
                               if(scenariostat1==1)
                                   {
                                
                                   document.getElementById(\'eoption\').innerHTML = opt1;
                                       }
                                           else if(scenariostat1==0)
                                               {
                                                  
                                                  document.getElementById(\'eoption\').innerHTML = opt0;
                                                   }
                                         else
                                             {
                                                
                                                document.getElementById(\'eoption\').innerHTML = optnull; 
                                                 }
                                                       
                                                       
//           $(\'#editdept\').val(comudeptid);
$(\'#scenarioname\').val(scenarioname1);
//$(\'#editsurname\').val(comusurname); 
//    
//                                                       
//           $(\'#editemail\').val(comuemail);
//$(\'#editphone\').val(comuphone);
//$(\'#editrole\').val(comurole);
         $(\'#scenarioid\').val(x); 	      
             
          
           var urlupdate ="scenarioActivateAll.php?id="+x+"&aid="+assoid+"&action=Update"+"&page="+pageid+"&edit="+pageid;
                         
                          
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
                      var urldelete ="scenarioInactive.php?id="+g+"&action=Delete";
                         
                          
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
	function password_form(sid,aid, act) {
		var str;
		if(act == "activate") {
			str = "Are you sure you want to activate this Incident? All related staff will be send a notification.";
		}
		else if(act=="initiate") {
			str = "Are you sure you want to initiate this Incident?";
				$(document).ready(function() {
                                    var scenarionameee = document.getElementById(\'scenarionamee_\'+aid).value;
                                    $("#launchname").text(document.getElementById(\'scenarionamee_\'+aid).value);
                                    $("#launchlocation").text(document.getElementById(\'scenarionlocation_\'+aid).value);
                                    $("#Activated").text(document.getElementById(\'scenarionactp_\'+aid).value);
                                    $("#actdate").text(document.getElementById(\'scenarionactd_\'+aid).value);
                                     });
		}else if(act=="unactivate") {
			str = "Are you sure you want to unactivate this Incident?";
		}	
		else if(act=="deactivate"){
			str = "Are you sure you want to deactivate this Incident?";
		}
		
			document.getElementById(\'div_depart\').innerHTML = document.getElementById("password_form").innerHTML;
			document.getElementById(\'div_view\').style.display = "block";

			s_id = sid;
			a_id = aid;
			action = act;
			
		
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
                                            //alert(\'aaaaa\');return false;
						location.href = "activationAdd.php?sid=" +s_id+"&aid="+a_id;
					}
					else if(action=="initiate") {
					
						location.href = "scenarioInitiate.php?sid="+s_id+"&aid="+a_id;
					}else if(action=="unactivate") {
						location.href = "update.php?sid=" +s_id+"&aid="+a_id;
					}					
					else if(action=="deactivate"){
						location.href = "deactivateAdd.php?sid=" +s_id+"&aid="+a_id;
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


<div class="location">
	Select the 'Activated Scenarios' option to see all scenarios that are currently active
	<br>
	<p>
		
	</p>
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
<div class="breadcrumb">
	<?php echo $this->_tpl_vars['breadcrumb']; ?>

</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">    
	<tr>
		<td width="100%">
		<table width="100%" border="0" cellspacing="0" cellpadding="7">
	
            
			<tr>
				<td width="946px !important;" class="tbl_brder">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="border_bg_color">
					<tr>
						<td>
						<table id="tablesorter-demo" class="table table-striped table-hover"   rel="<?php echo $this->_tpl_vars['RECLIMIT']; ?>
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

          <th><span>Locations</span><span class="sort-data"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>
            <th><span>Reports</span><span class="sort-data"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>
            <th class="al-c"><span>Notifications</span><span class="sort-data"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>
            
           
<th class="al-c"><span>Status</span><span class="sort-data"><i class="icon-bg"></i><i class="icon-bg"></i></span></th>


<th class="al-c"> Actions</th>
          </thead>                                      
          
          <tbody class="table1">
								<?php if ($this->_tpl_vars['count_db_res'] > 0): ?>
								<?php echo smarty_function_assign(array('var' => 'totdata','value' => '0'), $this);?>

								<?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>

								<tr class="<?php if ($this->_tpl_vars['totdata']%2 == 0): ?>list-green-bg<?php else: ?>list-pink-bg<?php endif; ?>" style="color:#000!important;">
									<td  align="left" style=" padding:0 0 0 10px!important;">
                                         
                                                                        <?php if ($this->_tpl_vars['currdata']['scenicon'] != ""): ?> <img style="float:left;padding-right:5px;" src="images/scenarioicons/<?php echo $this->_tpl_vars['currdata']['scenicon']; ?>
 " title="<?php echo $this->_tpl_vars['currdata']['scenarioname']; ?>
" alt="<?php echo $this->_tpl_vars['currdata']['scenarioname']; ?>
" width="45px" /> <?php endif; ?>
                                                                </td>
                                                                <td  align="left" style=" padding:0 0 0 10px!important;">
                                           <p style="padding: 13px 0px 0px 10px ! important;" >
                                            <input type = "hidden" id="scenarionamee_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="<?php echo $this->_tpl_vars['currdata']['scenarioname']; ?>
" />
                                            <?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>

                                        </p></td>
                                                                
   <td align="center" style=" padding:13px 0 0 10px!important;"><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['locationname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
</td>
 <input type = "hidden" id="scenarionlocation_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="<?php echo $this->_tpl_vars['currdata']['locationname']; ?>
" />
 
 <input type = "hidden" id="scenarionactp_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="<?php echo $this->_tpl_vars['currdata']['userEmail']; ?>
" />
                    
 <input type = "hidden" id="scenarionactd_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="<?php echo $this->_tpl_vars['currdata']['createdOn']; ?>
" />                        
            <td align="center" style=" padding:13px 0 0 10px!important;">
                                    <?php if ($this->_tpl_vars['currdata']['isActive'] == '1'): ?>
                                        <a href="viewResponsePie.php?sid=<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
" style="color:#168ece !important; text-decoration:none;" title="View Responses">View Responses</a>
                                    <?php else: ?>
                                        No Reports
					<?php endif; ?>
					</td>
                                        
                                        
              <!--reports -->                          
 <td align="center" style="<?php if ($this->_tpl_vars['currdata']['isActive'] == '1'): ?> padding:13px 0 0 10px!important;<?php else: ?> padding:3px 0 0 10px!important;<?php endif; ?>"> <?php if ($this->_tpl_vars['currdata']['isActive'] == '1'): ?> <a href="#" class="message_pop_open" title="Update Incidents" onClick="show_popup(<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
);" style="color:#168ece">Send Message</a>
    <?php else: ?>
									<p style="padding:0;margin:0; color:#168ece">
										View
									</p> <?php endif; ?> </td>
 

 <!-- notifications -->
 
 <?php if ($this->_tpl_vars['currdata']['eStatus'] == '1'): ?>
 <td align="center" style=" padding:13px 0 0 10px!important;"> 
 <p style="color:red">
     <?php if ($this->_tpl_vars['currdata']['isActive'] == '0'): ?> 
         <?php if ($this->_tpl_vars['currdata']['isAuthenticated'] == '0'): ?> 
             Closed
											<?php else: ?> 
												<?php if ($this->_tpl_vars['currdata']['launch'] == $this->_tpl_vars['companyuser']): ?> 
													Awaiting Launch										
												<?php else: ?>
													Confirm Launch 																						
												<?php endif; ?>
											<?php endif; ?>
										<?php elseif ($this->_tpl_vars['currdata']['isActive'] == '1'): ?> 
												<?php if ($this->_tpl_vars['currdata']['isAuthenticated'] == '1'): ?> 
												Launched
										<?php else: ?> 
												<?php if ($this->_tpl_vars['currdata']['deact'] == $this->_tpl_vars['companyuser']): ?> 
													Awaiting Closure										
												<?php else: ?>
													 Confirm Closure																						
												<?php endif; ?>
											<?php endif; ?>
										<?php endif; ?> </p></td>
									<?php elseif ($this->_tpl_vars['currdata']['eStatus'] == '0'): ?>
									<td align="center">
									<p style="padding:0;margin:0;">
										
                                                                           <!-- Please <a  title="Edit Incident" style="text-decoration: underline;" href="<?php echo $this->_tpl_vars['add_file']; ?>
?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
&aid=<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
&action=Update&page=<?php echo $this->_tpl_vars['curr_page']; ?>
">edit</a> to complete setup-->
                                                                            Please <a  title="Edit Incident" style="text-decoration: underline;" class="my_modal_open" href="" onClick="clickerdepp(<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,<?php echo $this->_tpl_vars['curr_page']; ?>
);">Edit</a> to complete setup
									</p></td>
									<?php endif; ?>
 
 <!-- active -->
                                                                 
                                                                
                                                                
                                                                
                                                                
                                                                
 
               
               <input  id='scenariostat_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
' type="hidden" value="<?php echo $this->_tpl_vars['currdata']['eStatus']; ?>
">        
                                 
                                                            <?php if ($this->_tpl_vars['currdata']['eStatus'] == '1'): ?> 
 <td align="center" style=" padding:13px 0 0 10px!important;"> 
     <?php if ($this->_tpl_vars['currdata']['isActive'] == '0'): ?> 
         <?php if ($this->_tpl_vars['currdata']['isAuthenticated'] == '0'): ?> 
             <a href="#" onClick="javascript:password_form(<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,'initiate')" style="text-align:center; color:#00C; text-decoration:none;" title="Initiate Incident" class="topopup">Launch</a> 
											<?php else: ?> 
												<?php if ($this->_tpl_vars['currdata']['launch'] == $this->_tpl_vars['companyuser']): ?> 
													Awaiting Launch										
												<?php else: ?>
													<a href="#" onClick="javascript:password_form(<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,'activate')" style="text-align:center; color:#00C; text-decoration:none;" title="Re-Confirm Activation" class="topopup">Launch</a> 																						
												<?php endif; ?>
											<?php endif; ?>
										<?php elseif ($this->_tpl_vars['currdata']['isActive'] == '1'): ?> 
												<?php if ($this->_tpl_vars['currdata']['isAuthenticated'] == '1'): ?> 
												<a href="#" onClick="javascript:password_form(<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,'deactivate')" style="text-align:center; color:#00C; text-decoration:none;" title="Deactive Incident" class="topopup">Deactivate</a>
										<?php else: ?> 
												<?php if ($this->_tpl_vars['currdata']['deact'] == $this->_tpl_vars['companyuser']): ?> 
													Awaiting Close										
												<?php else: ?>
													<a href="#" onClick="javascript:password_form(<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,'unactivate')" style="text-align:center; color:#00C; text-decoration:none;" title="Re-Confirm Deactivation" class="topopup">Close</a> 																						
												<?php endif; ?>
											<?php endif; ?>
										<?php endif; ?> </td>
									<?php elseif ($this->_tpl_vars['currdata']['eStatus'] == '0'): ?>
									<td align="center">
									<p style="padding:0;margin:0;">
										
                                                                           <!-- Please <a  title="Edit Incident" style="text-decoration: underline;" href="<?php echo $this->_tpl_vars['add_file']; ?>
?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
&aid=<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
&action=Update&page=<?php echo $this->_tpl_vars['curr_page']; ?>
">edit</a> to complete setup-->
                                                                            Please <a  title="Edit Incident" style="text-decoration: underline;" class="my_modal_open" href="" onClick="clickerdepp(<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,<?php echo $this->_tpl_vars['curr_page']; ?>
);">Edit</a> to complete setup
									</p></td>
									<?php endif; ?>
                                    
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
								 <tr><td colspan="7" style="color:red;">No Records Available</td></tr>
								<?php endif; ?>
							</tbody>

							<tr>
						
							</tr>
						
							</table>
                       </td>
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
							
							<div class="company company010" style = "width:777px !important;">
				<label>Password:</label>
				<input type="password" class = "validate[required]" name="password" atr="pass" style="width:273px !important;"/>
			</div>
			<div class="company editprofilebutton editprofilebutton2 company02 company03" 
            style="float:left!important;" >
				
				<input type="button" class="button_text" value="Submit" style="margin-left:140px !important; margin-bottom:10px;" onclick="return activateNow()"/>
				
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
			<div id="toPopup">

		<div class="close"></div>
		<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
		<div id="popup_content">
		 <h2 style="border-bottom:1px solid #eee; padding-bottom:20px;">Enter Password</h2>
			<!--your content start-->
				<div id="div_depart" style="text-decoration:none;padding:10px;">
								&nbsp;
		</div>
		</div>
		<p align="center">
			<a href="#" class="livebox"></a>
		</p>
	</div>
	<!--your content end-->
	 <div class="loader"></div>
	    <div id="backgroundPopup"></div>
</div>
          	  <div id="my_modal" class="over_laydesign">
      <div class="over_hedtag">
	     <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modal_close" href="#">
     
		 
              <img src="img/close_btn.png" alt="Close" border="0" />
             </a>       
             
             
	    <h2 style="text-align:center;" class="over_hed">Edit Scenario View</h2>
      </div>
  
      <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" class="form-horizontal" action="">
          
           <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
    <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
    
    
     <div class="control-group over_size">
            <label for="select01" class="control-label">Scenario Name</label>
            <div class="controls over_select">
             <input type="text" class = "validate[required] input_login" name="scenarioname" id="scenarioname" value="<?php echo $this->_tpl_vars['scenarioname']; ?>
" size="45" placeholder="Scenario Name"/>
              
            </div>
          </div>
    
    
             
         <div class="control-group over_size">
            <label for="select01" class="control-label">Associated Deparments</label>
            <div class="controls over_select">
<select name="department[]" id="selectdept" multiple="multiple" class="validate[required] over_select_siz" onclick="Getdepartments();" style="width:301px; height:90px !important; float:left;"  >
                 <?php if (count($_from = (array)$this->_tpl_vars['data_department'])):
    foreach ($_from as $this->_tpl_vars['department_all']):
?>

                      <?php if ($this->_tpl_vars['department_all']['deptStatus'] == 1): ?>
			 <option value="<?php echo $this->_tpl_vars['department_all']['departmentId']; ?>
" <?php echo $this->_tpl_vars['department_all']['isselected']; ?>
 > <?php echo $this->_tpl_vars['department_all']['locationname']; ?>
 &raquo; <?php echo $this->_tpl_vars['department_all']['departmentname']; ?>
 </option>
                      
					  <?php endif; ?>
                      <?php endforeach; unset($_from); endif; ?> 

                    
                    </select>
                      
                      <p>To select multiple departments hold CTRL or SHIFT key</p>
            </div>
          </div>  
                      
           <div id="filtercontact" style="display:none;"><br><input type="text" name="filtercontacts" id="filtercontacts" style="display:none;" value=""><a href="javascript:Getdepartments()"  style="background:#69B4DE; color: #000000; margin-left: 10px; padding: 4px 15px; display:none;">Search</a></div>            
           <br/>           
      <div class="control-group over_size">
            <label for="select01" class="control-label">Key Contacts</label>
            <div class="controls over_select"  >
 <select name="selectedcontacts[]" id="selectedcontact" multiple="multiple" class="validate[required]" style="width:301px; height:90px !important; float:left;" >
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
           <p>To select multiple departments hold CTRL or SHIFT key</p>
            </div>
          </div>                   
          
                      
                      
       <div class="control-group over_size">
            <label for="select01" class="control-label">Action</label>
            <div class="controls over_select">
           
           <textarea name = 'action_name'id='action_name' Value='<?php echo $this->_tpl_vars['page_name']; ?>
' class='validate[required]' cols="7" rows="10" style="height:105px;" required ></textarea>   
            </div>
          </div>
            
                     
         <!--   
         
      <div class="control-group over_size">
            <label for="select01" class="control-label">Old Messages</label>
            <div class="controls over_select">
          
       <?php if ($this->_tpl_vars['curr_page']): ?>
          <?php if ($this->_tpl_vars['curr_page'] > 1): ?>
   <span id="disable_messages" style="width:35% !important; padding: 5px 0px 5px !important; margin-left:234px !important; text-align:center !important;  font-size:16px !important;"><a href="javascript:;" >Click Here </a>to hide old messages</span>
          <span id="enable_messages" style="width:35% !important; padding: 5px 0px 5px !important; margin-left:234px !important;text-align:center !important;display:none; font-size:16px !important;"><a href="javascript:;" >Click Here </a>to show old messages</span>
 
  <?php else: ?>
  <span id="disable_messages" style="width:35% !important; padding: 5px 0px 5px !important; margin-left:234px !important; text-align:center !important; display:none; font-size:16px !important;"><a href="javascript:;" >Click Here </a>to hide old messages</span>
          <span id="enable_messages" style="width:35% !important; padding: 5px 0px 5px !important; margin-left:234px !important; text-align:center !important; font-size:16px !important;"><a href="javascript:;" >Click Here </a>to show old messages</span>
           
          <?php endif; ?>
          
            </div>
          </div>

        -->  
          <!--
             <div style="<?php if ($this->_tpl_vars['curr_page'] == 1 && $this->_tpl_vars['check'] == 1): ?>display:none; clear:both;<?php endif; ?>" id="messages">
<table width="70%" height="30%" border="0" cellspacing="0" cellpadding="0" style="float:right;">
	<tr>
		<td width="100%">
		<table width="100%" border="0" cellspacing="0" cellpadding="7">

			<tr>
				<td width="100%" class="tbl_brder">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="border_bg_color">
                
					<tr>
                      <tr style="width:20% !important;">
                        <td> 
                                        <?php if ($this->_tpl_vars['arr_page_vars']['no_of_pages'] > 1): ?>
                
                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                
                                        <?php endif; ?></td>
									</tr>
						<td>
						<table id="tablesorter-demo" class="tablesorter"  style="background-color:#E6EEEE; color:#385BBF; font-family:Tahoma,Arial,Helvetica,sans-serif; font-size:5px;" rel="<?php echo $this->_tpl_vars['RECLIMIT']; ?>
" border="0" cellpadding="0" cellspacing="1">
							<tbody>
                          

								<tr class="header-title-bg">
									<th height="35" align="center" width="70%"class="line1"  style="padding-left:15px; text-align: left;">Old Messages</th>
									<th width="30%" align="center"class="line1">Date Added On</th>
								</tr>
                                
								<?php if ($this->_tpl_vars['count_db_res'] > 0): ?>
								<?php echo smarty_function_assign(array('var' => 'totdata','value' => '0'), $this);?>

								<?php if (count($_from = (array)$this->_tpl_vars['incData'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>

								<tr class="<?php if ($this->_tpl_vars['totdata']%2 == 0): ?>list-green-bg1<?php else: ?>list-pink-bg1<?php endif; ?>">
									<td width="70%" style="">
									<p style="padding-left:10px !important; font-weight:bold;">
                               
										<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['message'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>

									</p>
                                    </td>
                                    		<td width="30%" style="">
									<p style="padding-left:10px !important; font-weight:bold;">
                               
										<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['dateAdded'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>

									</p>
                                    </td>
									</tr>
								<?php echo smarty_function_assign(array('var' => 'totdata','value' => $this->_tpl_vars['totdata']+1), $this);?>


								<?php endforeach; unset($_from); endif; ?>

								<?php else: ?>
								<tr>
									<td align="center" class="error_msg" colspan="3"><font color="#FF0000">Records not available.</font></td>
								</tr>
								<?php endif; ?>
							</tbody>

						</table></td>
					</tr>
					<tr>
						<td  bgcolor="#e6EEEE">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-top:5px solid #545453; margin-top: 4px">
					            
							<tr>
								<td>
								<table width="100%" border="0" cellspacing="0" cellpadding="0"  style="border-top:1px solid #c4c4c4;">
									<tr>
										<td align="right" class="action_menu"></td>
									</tr>
								</table></td>
							</tr>
						</table></td>
					</tr>
				</table></td>
			</tr>
		</table></td>
	</tr>
	</td>

	</tr>

</table>
<?php endif; ?>
           </div>       
          
    -->      
          
          
       <!--   
            
       <div class="control-group over_size">
            <label for="select01" class="control-label">Upload Scenario Icon</label>
            <div class="controls over_select">
          <input name="scenarioFile" type="file" class="scenario_file_filed"/>  
         
            </div>
             <p style=" float:left; margin: 5px 0 0 7px;">Maximum size:1024KB</p>
          </div>  
            
              -->
              
              <br/>
      <div class="control-group over_size" style="float:left;">
            <label for="select01" class="control-label">Status</label>
            <div class="controls over_select">
                
<!--            <label><span class="over_radio"><input type="radio"  checked="checked" value="1" id="active" name="eStatus" ></span> <span class="over_spn">Active</span></label>
            <label><span class="over_radio"><input type="radio"  value="0" id="inactive" name="eStatus" ></span>  <span class="over_spn">Inactive</span></label> -->
           <select name="eStatus" class="select1_cmb" id="eoption">
                      

                                  </select>
                      
            
            </div>
          </div> 
           
           <br/><br/>
           
            <input  id="scenarioid" type="hidden" name = "id">
            
            
          <div class="over_but" style="padding-top:15px;">
          <div class="control-group bur_siz">
           
            </div>
            <div class="ove_button">
               <input type="submit" id="submit1" name="updatee"  class="overButton" value="Update" style="margin:0px 30px 0px 20px;width:100px;">
            	
            	<button type="button" class="my_modal_close" >Cancel</button>
            </div>
            
          	
          </div>
        </form>
  </div>

              <!-- delete pop up....----->
              
              	  <div id="my_modaldelete" class="over_laydesign">
      <div class="over_hedtag">
	     <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modaldelete_close" href="#">
		 
              <img src="img/close_btn.png" alt="Close" border="0" />
             </a>
	    
      </div>
  		<div class="over_delete">
        	<p class="over_det_text">Are you sure you want to Delete this Scenario</p>
            <p class="over_text_det">If you delete you can't recover this Scenario View anymore</p>
            <div class="ove_button">
                <a href="" id="deleteurl" style="color:#fff;background-color:#1e8ece;" class="overButton over_mid" >Confirm Delete</a>
				
            	
                      <script>
          // }
                
            </script>
            </div>
        </div>
  </div>
              
 


<!-----------------add pop up ------------------------------------------------------------>

<div id="my_modaladd" class="over_laydesign" style="width:500px;">
      <div class="over_hedtag">
	     <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modaladd_close" href="#">
     
		 
              <img src="img/close_btn.png" alt="Close" border="0" />
             </a>       
             
             
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
                      
                      <p>To select multiple departments hold CTRL or SHIFT key</p>
            </div>
          </div>  
                      
           <div id="filtercontactadd" style="display:none;"><br><input type="text" name="filtercontacts" id="filtercontactsadd" style="display:none;" 
value=""><a href="javascript:Getdepartmentsadd()"  style="background:#69B4DE; color: #000000; margin-left: 10px; padding: 4px 15px; 
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
           <p>To select multiple departments hold CTRL or SHIFT key</p>
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
            
                     
    
          <br/>   <br/>   
          
       
          
          
            
       <div class="control-group over_size" style="float:left;">
            <label for="select01" class="control-label" style="float:left;">Upload Scenario Icon</label>
            <br/>   <br/>   
            <div class="controls over_select">
          <input name="scenarioFile" type="file" class="scenario_file_filed"/>  
          <p style=" float:left; margin: 5px 0 0 7px;">Maximum size:1024KB</p>
            </div>
            
          </div>  
            
    
            
         
           
          <!--  <input  id='scenarioid' type="hidden" name = "id"> -->
            
            
          <div class="over_but" style="margin:41px 13px 4px 2px;float:left;" >
          <div class="control-group bur_siz">
           
            </div>
            <div class="ove_button">
               <input type="submit" id="submit" name="add"  class="overButton" value="Submit" style="margin:0px 30px 0px 20px;width:100px;">
            	
            	<button type="button" class="my_modaladd_close" >Cancel</button>
            </div>
            
          	
          </div>
        </form>
  </div>
 
<!--- message popup-->
 <div class="popup" id="div_view" >
         <div id='message_pop'  >
             <div style="vertical-align:middle; text-align:center;color:#168ece !important" >
                 
            <form method="post" name="frm_udpate_inc" action="" enctype="multipart/form-data">
              <input type="hidden" name="scenID" id="scenID" value="" />
               <input type="hidden" name="assocID" id="assocID" value="" />
													Enter your message:
													<br>
													<textarea name="updateInc" id="updateInc" rows="5" cols="40"  style="height:120px !important;"></textarea>
													<br />
													<br />

													<input type="submit" name="updateInident" value="Submit" class="button_text"/>

												</form>
											</div>
										</div>

										
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
           
		   var fld = document.getElementById(\'selectdept\');
			var values = [];
			for (var i = 0; i < fld.options.length; i++) {
			    if (fld.options[i].selected) {
    			    values.push(fld.options[i].value);
				}

			}
			
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
 

function show_popup(associd,scenid){
    $(\'#assocID\').val(associd); $(\'#scenID\').val(scenid);
        
     $(\'#message_pop\').popup();

}


</script> 
'; ?>

<br/>                       



<!--------close ------------->



<div id="my_modalclosepop" class="over_laydesign">
      <div class="over_hedtag">
	     <a style="padding: 0px 0.4em; float: right;" class="my_modalclosepop_close" href="#">
              <img src="img/close_btn.png" alt="Close" border="0" />
             </a>
<!--	    <h2 style="text-align:center;" class="over_hed">Close Scenario</h2>-->
      </div>
  <form class="form-horizontal">   
          <div class="control-group over_size">
            <label for="select01" class="control-label">Scenario Name</label>
            <div class="controls over_select">
             <p class="name_scena"> Fir in Building </p>
            </div>
          </div>  
          
          <div class="control-group over_size">
            <label for="select01" class="control-label">Location</label>
            <div class="controls">
             <p class="name_scena"> Wembley</p>
            </div>
          </div>
          <div class="control-group over_size">
            <label for="select01" class="control-label">Deactivated by</label>
            <div class="controls">
             <p class="name_scena"> Rickie Sehgal</p>
            </div>
          </div>
          <div class="control-group over_size">
            <label for="select01" class="control-label">Date</label>
            <div class="controls">
             <p class="name_scena"> 28.10.2013</p>
            </div>
          </div>
          <div class="control-group over_size">
            <label for="select01" class="control-label">Time</label>
            <div class="controls">
             <p class="name_scena"> 02:00:00</p>
            </div>
          </div>
          
          <div class="control-group over_size">
            <label for="select01" class="control-label">Closure Message</label>
            <div class="controls">
              <textarea name="" cols="28" rows="10" style="height:100px !important; " class="text_size"></textarea>
            </div>
          </div>
          <br/><br/> <br/><br/>
          
          <div class="over_but">
          <div class="control-group bur_siz">
           
            </div>
            <div class="ove_button" style="padding-top:44px;">
            	<button type="submit" class="overButton">Close</button>
            	<button type="submit" class="my_modalclosepop_close overButton over_cancle">cancel</button>
            </div>
            
          	
          </div>
        </form>
  </div>


<!-- deactivate scenario -->


 <div id="my_modaldeactivate" class="over_laydesign">
      <div class="over_hedtag">
	     <a style="padding: 0px 0.4em; float: right;" class="my_modaldeactivate_close" href="#">
             
             <img src="img/close_btn.png" alt="Close" border="0" />
             </a>
	   
      </div>
  <form class="form-horizontal">   
          <div class="control-group over_size">
            <label for="select01" class="control-label">Scenario Name</label>
            <div class="controls over_select">
             <p class="name_scena"> Fir in Building </p>
            </div>
          </div>  
          
          <div class="control-group over_size">
            <label for="select01" class="control-label">Location</label>
            <div class="controls">
             <p class="name_scena"> Wembley</p>
            </div>
          </div>
          
          <div class="control-group over_size">
            <label for="select01" class="control-label">Closure Message</label>
            <div class="controls">
              <textarea name="" cols="" rows="" class="text_size"></textarea>
            </div>
          </div>
          
          
          <div class="over_but">
          <div class="control-group bur_siz">
           
            </div>
            <div class="ove_button" style="padding-top:44px;">
            	<button type="submit" class="overButton">Deactiavte</button>
            	<button type="submit" class="my_modaldeactivate_close overButton over_cancle">cancel</button>
            </div>
            
          	
          </div>
        </form>
  </div>


<!-- launch scenario -->



  <div id="my_modallaunch" class="over_laydesign">
      <div class="over_hedtag">
	     <a style="padding: 0px 0.4em; float: right;" class="my_modallaunch_close" href="#">
              <img src="img/close_btn.png" alt="Close" border="0" />
             </a>
	
      </div>
  <form class="form-horizontal">   
          <div class="control-group over_size">
            <label for="select01" class="control-label">Scenario Name</label>
            <div class="controls over_select">
             <p class="name_scena" id = "launchname"> Major Storm </p>
            </div>
          </div>  
          
          <div class="control-group over_size">
            <label for="select01" class="control-label">Location</label>
            <div class="controls">
             <p class="name_scena" id = "launchlocation"> Cambridge</p>
            </div>
          </div>
          <div class="control-group over_size">
            <label for="select01" class="control-label">Group</label>
            <div class="controls">
            <div class="addnam addhigh">
             <p class="name_scena sub_clas" style="width:60%;" id = "launchdept">transdev</p>
             </div>
            </div>
          </div>
          <div class="control-group over_size">
            <label for="select01" class="control-label">Activated by</label>
            <div class="controls">
             <p class="name_scena" id = "Activated">Rickie Sehgle</p>
            </div>
          </div>
          <div class="control-group over_size">
            <label for="select01" class="control-label">Date</label>
            <div class="controls">
             <p class="name_scena" id="actdate"> 28.10.2013</p>
            </div>
          </div>
          <div class="control-group over_size">
            <label for="select01" class="control-label">Time</label>
            <div class="controls">
             <p class="name_scena" id = "actTime"> 02:00:00</p>
            </div>
          </div>
          <div class="control-group over_size">
            <label for="select01" class="control-label">Action to be Taken</label>
            <div class="controls">
              <textarea name="" cols="" rows="" class="text_size"></textarea>
            </div>
          </div>
          <div class="control-group over_size">
            <label for="select01" class="control-label">Key Contacts</label>
            <div class="controls">
              <textarea name="" cols="" rows="" class="text_size"></textarea>
            </div>
          </div>
          
          
          <div class="over_but">
          <div class="control-group bur_siz">
           
            </div>
            <div class="ove_button" style="padding-top:44px;">
            	<button type="submit" class="overButton">Launch</button>
            	<button type="submit" class="my_modallaunch_close overButton over_cancle">cancel</button>
            </div>
            
          	
          </div>
        </form>
  </div>