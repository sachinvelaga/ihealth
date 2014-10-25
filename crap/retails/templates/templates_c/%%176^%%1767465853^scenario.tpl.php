<?php /* Smarty version 2.6.0, created on 2014-01-17 10:16:30
         compiled from scenario.tpl */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign', 'scenario.tpl', 1233, false),array('modifier', 'capitalize', 'scenario.tpl', 1239, false),array('modifier', 'urldecode', 'scenario.tpl', 1294, false),)), $this); ?>
<script src="js/jquery-1.10.2.min.js"></script>
<?php echo ' 
<script src="js/validation/jquery.js"></script>
<link rel="stylesheet" href="js/sorting/themes/blue/style.css" type="text/css" media="print, projection, screen" />
<script type="text/javascript" src="js/sorting/jquery.tablesorter.js"></script> 
<script type="text/javascript" src="js/jlist.js"></script> 
<script src="rmm-js/jquery.min.js" type="text/javascript"></script> 
<script src="js/script1.js" type="text/javascript"></script> 
<script src="rmm-js/responsivemobilemenu.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/validation/validationEngine.js"></script>
<link rel="stylesheet" href="js/confirm/jquery-ui.css" type="text/css">
<script src="js/confirm/avg_ls_dom.js" type="text/javascript"></script> 
<script src="js/confirm/jquery-ui.js"></script> 
<script src="js/confirm/jquery_002.js"></script> 
<script type="text/javascript" src="js/jquery.reveal.js"></script>
<link href="js/reveal.css" type="text/css" rel="stylesheet">
<!--<script type="text/javascript" src="js/jquery-1.5.1.js"></script>-->

<style>
.check_boxes{
	width: 257px;
	float:left;
	margin: 5px 0px 0px -7px;
	padding: 0px;
	border: 1px solid #CCC;
    max-height:100px;
}
.check_boxess{
	width: 260px;
	float:left;
	margin: 55px 0px 0px -7px;
	padding:0px;
	border: 1px solid #CCC;
    max-height:100px;
}
.check_boxes ul{
	width: 257px;
	float:left;
	margin:0;
	max-height:100px;
	overflow: auto;
}
.check_boxess ul{
	width: 257px;
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
	padding: 0 4px;
}
.check_boxess ul li{
	width: 120px;
	float:left;
	height: 30px;
	line-height:30px;
	list-style:none;
	padding: 0 4px;
}

.check_boxes ul li .check_name{
	font-size: 14px;
	color:#999;
	padding: 0;	
}
.check_boxess ul li .check_name{
	font-size: 14px;
	color:#999;
	padding: 0;	
}



</style>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<!-- <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet">-->
<link href="css/StyleSheet.css" type="text/css" rel="stylesheet">
<script src="js/jquery.popupoverlay.js"></script> 
<script type="text/javascript">
    $(function() {
     $(\'#my_modalact\').popup();
    });
 

    $(function() {
      $(\'#my_modalclosepop\').popup();
          $(\'#my_modaldelete\').popup();
       $(\'#my_modaldeactivate\').popup();    
           
            $(\'#my_modallaunch\').popup();   
                $(\'#message_pop\').popup();
    });

  $(document).on(\'click\',\'#launch\',function(e){
 // e.preventDefault();
     $(\'.launch_scn_err\').html(\'\');

			var action = $(\'#launch_msg\').val();
         if(action.length == 0){
                $(\'.launch_scn_err\').html(\'Action required\').show();
               return false;
           }else {
		     callthis($(\'#my_modallaunch\'));
		   }      
});
  $(document).on(\'click\',\'#sendmessage\',function(e){
 // e.preventDefault();
     $(\'.message_scn_err\').html(\'\');
			var action = $(\'#updateInc\').val();
			var sid = $(\'#scenID\').val();
			var aid = $(\'#assocID\').val();
         if(action.length == 0){
                $(\'.message_scn_err\').html(\'Please Enter the message!!\').show();
               return false;
           }else {
		   e.preventDefault();
		    $.ajax({
                  url:"sendmessage.php",
                  type:"POST",
				  data:{msg:action,sid:sid,aid:aid},
			
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                              if(trim_resp == \'added\'){
                                   $(\'.message_scn_err\').html(\'Message sent successfully\').show();
									$(\'.menu_msg\').html(\'Message sent successfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'Scenario added successfully\';
										$(\'#message_pop\').popup(\'hide\');
										 $(\'.message_scn_err\').html(\'\');
										 $(\'#updateInc\').val(\'\');
										getActScenario();
									$(\'.pop_div\').html(\'Message sent successfully\');
          
										$(\'#mssg_pop\').reveal();
					}, 10); 
                               }else{
							   $(\'.err_mssg_pwd_form\').html(trim_resp);
							   return false;
							   }
                               
                        }
						
                  });
		   }      
});
  $(document).on(\'change\',\'#actstatus\',function(){
 // e.preventDefault();
 var stat = $(\'#actstatus input[name=actionstatus]:checked\').val();
 $(\'#pageno\').val(\'1\');
 $(\'#sort_par\').val(\'\');
 action = \'\';
 if(stat == \'Inactive\'){
 getInactScenario();
 }else{
 getActScenario();
 }
 
});
  $(document).on(\'click\',\'#close\',function(e){
 // e.preventDefault();
     $(\'.close_scn_err\').html(\'\');

			var action = $(\'#close_msg\').val();
         if(action.length == 0){
                $(\'.close_scn_err\').html(\'Action required\').show();
               return false;
           }else {
		     callthis($(\'#my_modalclosepop\'));
		   }      
});
$(document).on(\'click\',\'#act_scn_btn\',function(e){
     $(\'.act_scn_err\').html(\'\');
      var dep_count = 0;var cont_count = 0;
          var scenarioname = $(\'#scenarionamea\').val();
          var action_name_act = $(\'#action_name_acta\').val();    
          var location = $(\'#selectlocation\').val();
		  var dept = new Array();
		  var contact = new Array();
		  
          $(\'div#selectdept input[type="checkbox"]:not(.checkall)\').each(function() {
               if ($(this).is(\':checked\')) {
			   dept.push($(this).val());
               dep_count++;
               }
            });
          $(\'div#selectedcontact input[type="checkbox"]\').each(function() {
               if ($(this).is(\':checked\')) {
			   contact.push($(this).val());
               cont_count++;
               }
            });
          if(scenarioname.length == 0){
                $(\'.act_scn_err\').html(\'Name is required\').show();
               return false;
             }else if(location.length == 0){
                $(\'.act_scn_err\').html(\'Choose a location\').show();
               return false;
             }else if(action_name_act.length == 0){
                $(\'.act_scn_err\').html(\'Action required\').show();
               return false;
           }else if(dep_count == 0){
                $(\'.act_scn_err\').html(\'Group not chosen\').show();
                return false;
           }else if( cont_count == 0){
                $(\'.act_scn_err\').html(\'Choose atleast one contact\').show();
                return false;
           }else{
		    callthis($(\'#my_modalact\'));
      }      

});
  $(document).on(\'click\',\'#deactivate\',function(e){
 // e.preventDefault();
     $(\'.deact_scn_err\').html(\'\');

			var action = $(\'#deact_msg\').val();
         if(action.length == 0){
                $(\'.deact_scn_err\').html(\'Closure Message required\').show();
               return false;
           }else {
		     callthis($(\'#my_modaldeactivate\'));
		   }      
});
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
						document.getElementById(\'locationlistt\').innerHTML = "";
                                                    
						document.getElementById(\'locationlistt\').innerHTML = response;
					}
				}
				
				var url="locationlist.php";
				url = url+"?sid="+x;
				httpxml.onreadystatechange=stateck;
				httpxml.open("GET",url,true);
				httpxml.send(null);

	   }


  

		 function getLocation()
       {
            var lid =  $(\'#selectlocation :selected\').val();
	        $(\'#selectedcontact\').html(\'\');
                    $(\'.key_cont\').hide();
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
  

       function clickerdeppact(x,pageid) { 
           
             $(\'#selectlocation\').val($(\'#selectlocation option:eq(1)\').val());
			  $(\'#selectdept\').html(\'\');
			  $(\'#selectcontact\').html(\'\');
           $(\'#my_modalact\').popup();
              
              var scenarioname1 = document.getElementById(\'scenarionameea_\'+x).value;
			
                var scenarioname1 = scenarioname1.replace(/(^\\s+|\\s+$)/g,\' \');
				
//					var comusurname = document.getElementById(\'comusurnamea_\'+x).value;
//					var comudeptid = document.getElementById(\'comudeptida_\'+x).value;
//					
//					var comuemail = document.getElementById(\'comuemaila_\'+x).value;
//					var comuphone = document.getElementById(\'comuphonea_\'+x).value;
//					var comurole = document.getElementById(\'comurolea_\'+x).value;
               
                               
                                var scenariostat1 = document.getElementById(\'scenariostata_\'+x).value;
								 
                                  var scenarioact = document.getElementById(\'scenarioacta_\'+x).value; 
								  //alert(x);
								   var scenariokey = document.getElementById(\'scenariokeya_\'+x).innerHTML; 
								  // alert(scenariokey);
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
                                                       
                                                       
//           $(\'#editdepta\').val(comudeptid);
$(\'#scenarionamea\').val(scenarioname1);
$(\'#action_name_acta\').val(scenarioact);
$(\'#key_cona\').val(scenariokey);
//$(\'#editsurnamea\').val(comusurname); 
//    
//                                                       
//           $(\'#editemaila\').val(comuemail);
//$(\'#editphone\').val(comuphone);
//$(\'#editrole\').val(comurole);
         $(\'#scenarioid\').val(x); 	      
             
          
           var urlupdate ="scenarioActivateAll.php?id="+x+"&action=Update"+"&page="+pageid+"&edit="+pageid;
                         
                          
             var actionurl = document.getElementById("frmAdd"); 
              
            actionurl.action = urlupdate;
          
          
             
           locationlist(x);
           }
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
     function callthis(el){
      el.popup(\'hide\');
	  
$(\'#toPopup\').popup(\'show\');
}  
	var s_id;
	var action;
	function password_form(sid,aid, act) {
         // my_modalclosepop
         // my_modallaunch
		 //alert(act);
		var str;
		if(act == "activate") {
		
			str = "Are you sure you want to activate this Incident? All related staff will be send a notification.";
			$("#launchname").text(document.getElementById(\'scenarionamee_\'+aid).value);
			 $("#launchlocation").text(document.getElementById(\'scenarionlocation_\'+aid).value);
			  $("#Activated").text(document.getElementById(\'scenariouser_\'+aid).value);
			 $("#actdate").text(document.getElementById(\'scenariodate_\'+aid).value);
			  $("#acttime").text(document.getElementById(\'scenariotime_\'+aid).value);
			  var scenariokey = document.getElementById(\'scenariokey_\'+aid).innerHTML;
			   var scenariodept = document.getElementById(\'scenariodept_\'+aid).innerHTML;
			   var scenariomsg = document.getElementById(\'scenarionaction_\'+aid).value
			  $(\'#key_con\').val(scenariokey);
			  $(\'#launch_msg\').val(scenariomsg);
			   $(\'#launchdept\').text(scenariodept);
		        $(\'#my_modallaunch\').popup(\'show\');
                   }
		else if(act=="initiate") {
			str = "Are you sure you want to initiate this Incident?";
				
                                    var scenarionameee = document.getElementById(\'scenarionamee_\'+aid).value;
                                    $("#launchname").text(document.getElementById(\'scenarionamee_\'+aid).value);
                                    $("#launchlocation").text(document.getElementById(\'scenarionlocation_\'+aid).value);
                                    $("#Activated").text(document.getElementById(\'scenarionactp_\'+aid).value);
                                    $("#actdate").text(document.getElementById(\'scenarionactd_\'+aid).value);
                        $(\'#my_modallaunch\').popup(\'show\');                
                                    
		}	else if(act=="Cancel") {
			str = "Are you sure you want to initiate this Incident?";
				
                                    var scenarionameee = document.getElementById(\'scenarionamee_\'+aid).value;
                                    $("#launchname").text(document.getElementById(\'scenarionamee_\'+aid).value);
                                    $("#launchlocation").text(document.getElementById(\'scenarionlocation_\'+aid).value);
                                    $("#Activated").text(document.getElementById(\'scenarionactp_\'+aid).value);
                                    $("#actdate").text(document.getElementById(\'scenarionactd_\'+aid).value);
                        $(\'#my_modaldelete\').popup(\'show\');                
                                    
		}else if(act=="unactivate") {
				
			 $("#close_scen").text(document.getElementById(\'scenarionamee_\'+aid).value);
			 $("#close_loc").text(document.getElementById(\'scenarionlocation_\'+aid).value);
			  $("#close_by").text(document.getElementById(\'scenariouser_\'+aid).value);
			 $("#close_date").text(document.getElementById(\'scenariodate_\'+aid).value);
			  $("#close_time").text(document.getElementById(\'scenariotime_\'+aid).value);
                            $(\'#my_modalclosepop\').popup(\'show\');
		}	
		else if(act=="deactivate"){
			str = "Are you sure you want to deactivate this Incident?";
		     var scenarionameee = document.getElementById(\'scenarionamee_\'+aid).value;
                                    $("#deact_name").text(document.getElementById(\'scenarionamee_\'+aid).value);
                                    $("#deact_loc").text(document.getElementById(\'scenarionlocation_\'+aid).value);
                            $(\'#my_modaldeactivate\').popup(\'show\');
		}else if(act=="activate"){
		             $(\'#selectlocation\').val($(\'#selectlocation option:eq(1)\').val());
			  $(\'#selectdept\').html(\'\');
			  $(\'#selectcontact\').html(\'\');
         
              locationlist(x);
              var scenarioname1 = document.getElementById(\'scenarionameea_\'+x).value;
			
                var scenarioname1 = scenarioname1.replace(/(^\\s+|\\s+$)/g,\' \');
 
                                var scenariostat1 = document.getElementById(\'scenariostata_\'+x).value;
								 
                                  var scenarioact = document.getElementById(\'scenarioacta_\'+x).value; 
								 
								   var scenariokey = document.getElementById(\'scenariokeya_\'+x).innerHTML; 

$(\'#scenarionamea\').val(scenarioname1);
$(\'#action_name_acta\').val(scenarioact);
$(\'#key_cona\').val(scenariokey);

         $(\'#scenarioid\').val(x); 	      
    $(\'#my_modalact\').popup();
           
		}
		s_id = sid;
			a_id = aid;
			action = act;
			document.getElementById(\'div_depart\').innerHTML = document.getElementById("password_form").innerHTML;
			document.getElementById(\'div_view\').style.display = "block";

			
			
			
		
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

 $(document).on(\'click\',\'#submit_bttn\',function(e){
           e.preventDefault();
            activateNow();
})

	function activateNow() {
            $(\'.err_mssg_pwd_form\').html(\'\');
                var page = $(\'.page_num\').val();
				var scenarionameact = $(\'#scenarionamea\').val();
		var x=$("#div_depart").find("input[atr=\'pass\']").val();
		if (x==null || x=="")
		  {
		   $(\'.err_mssg_pwd_form\').html(\'Password can\\\'t be empty!!!\');
		  	//alert("Password can\'t be empty!!!");
		  	return false;
		  }

		$.ajax({type: "post",url:"checkpassword.php",data : {password : x},async:false,cache:false,dataType:"html",success:
			function(data){
				if(data == "success") {
				//alert(action);
				// $(\'#frmAdd\').submit();
                    
					if(action=="activate") {
                                            //alert(\'aaaaa\');return false;
											
					var msg = $(\'#launch_msg\').val();
					$.ajax({
                  url:"activationAjax.php",
                  type:"POST",
				  data:{sid:s_id,msg:msg,aid:a_id},
			
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                              if(trim_resp == \'added\'){
                                   $(\'.err_mssg_pwd_form\').html(\'Scenario Launched succesfully\').show();
									$(\'.menu_msg\').html(\'Scenario Launched succesfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'Scenario added successfully\';
										$(\'#toPopup\').popup(\'hide\');
										 $(\'.err_mssg_pwd_form\').html(\'\');
										getActScenario();
									$(\'.pop_div\').html(\'Scenario Launched succesfully\');
          
										$(\'#mssg_pop\').reveal();
					}, 10); 
                               }else{
							   $(\'.err_mssg_pwd_form\').html(trim_resp);
							   return false;
							   }
                               
                        }
						
                  });
					
					}
					else if(action=="initiate") {
					
						location.href = "scenarioInitiate.php?page="+page+"&sid="+s_id+"&aid="+a_id;
					}else if(action=="Cancel") {					
						var sname = $(\'#scenarionamee_\'+a_id).val();
						var sact = $(\'#scenarios_\'+a_id).val();
					$.ajax({
                  url:"cancelAjax.php",
                  type:"POST",
				  data:{sid:s_id,aid:a_id,sact:sact,sname:sname},
			
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                              if(trim_resp == \'added\'){
                                   $(\'.err_mssg_pwd_form\').html(\'Scenario Cancelled succesfully\').show();
									$(\'.menu_msg\').html(\'Scenario Cancelled succesfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'Scenario added successfully\';
										$(\'#toPopup\').popup(\'hide\');
										 $(\'.err_mssg_pwd_form\').html(\'\');
										getActScenario();
									$(\'.pop_div\').html(\'Scenario Cancelled succesfully\');
          
										$(\'#mssg_pop\').reveal();
					}, 10); 
                               }else{
							   $(\'.err_mssg_pwd_form\').html(trim_resp);
							   return false;
							   }
                               
                        }
						
                  });
					
					}else if(action=="unactivate") {
					var msg = $(\'#close_msg\').val();
					$.ajax({
                  url:"updateAjax.php",
                  type:"POST",
				  data:{sid:s_id,msg:msg,aid:a_id},
			
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                              if(trim_resp == \'added\'){
                                   $(\'.err_mssg_pwd_form\').html(\'Scenario succesfully Closed\').show();
									$(\'.menu_msg\').html(\'Scenario succesfully Closed\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'Scenario added successfully\';
										$(\'#toPopup\').popup(\'hide\');
										 $(\'.err_mssg_pwd_form\').html(\'\');
										getActScenario();
									$(\'.pop_div\').html(\'Scenario succesfully Closed\');
          
										$(\'#mssg_pop\').reveal();
					}, 10); 
                               }else{
							   $(\'.err_mssg_pwd_form\').html(trim_resp);
							   return false;
							   }
                               
                        }
						
                  });
					}					
					else if(action=="deactivate"){
					
					var msg = $(\'#deact_msg\').val();
			$.ajax({
                  url:"deactivateAjax.php",
                  type:"POST",
				  data:{sid:s_id,msg:msg,aid:a_id},
			
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                              if(trim_resp == \'added\'){
                                   $(\'.err_mssg_pwd_form\').html(\'Scenario succesfully Deactivated\').show();
									$(\'.menu_msg\').html(\'Scenario succesfully Deactivated\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'Scenario added successfully\';
										$(\'#toPopup\').popup(\'hide\');
										 $(\'.err_mssg_pwd_form\').html(\'\');
										getActScenario();
									$(\'.pop_div\').html(\'Scenario succesfully Deactivated\');
          
										$(\'#mssg_pop\').reveal();
					}, 10); 
                               }else{
							   $(\'.err_mssg_pwd_form\').html(trim_resp);
							   return false;
							   }
                               
                        }
						
                  });
					}else if(scenarionameact.length>0){
					
				  var dep_count = 0;var cont_count = 0;
				  var id = $(\'#scenarioid\').val();
          var scenarioname = $(\'#scenarionamea\').val();
          var action_name_act = $(\'#action_name_acta\').val();    
          var location = $(\'#selectlocation\').val();
		  var dept = new Array();
		  var contact = new Array();
		  
          $(\'div#selectdept input[type="checkbox"]:not(.checkall)\').each(function() {
               if ($(this).is(\':checked\')) {
			   dept.push($(this).val());
               dep_count++;
               }
            });
         
          $(\'div#selectedcontact input[type="checkbox"]\').each(function() {
               if ($(this).is(\':checked\')) {
			   contact.push($(this).val());
               cont_count++;
               }
            });
			
			 $.ajax({
                  url:"scenarioActivate.php",
                  type:"POST",
				  data:{scenarioname:scenarioname,id:id,departments:dept,key_con:contact,action:action_name_act,location:location},
			
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                              if(trim_resp == \'added\'){
                                   $(\'.err_mssg_pwd_form\').html(\'Scenario Activated succesfully\').show();
									$(\'.menu_msg\').html(\'Scenario Activated succesfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'Scenario added successfully\';
										$(\'#toPopup\').popup(\'hide\');
										 $(\'.err_mssg_pwd_form\').html(\'\');
										getInactScenario();
									$(\'.pop_div\').html(\'Scenario Activated succesfully\');
          
										$(\'#mssg_pop\').reveal();
					}, 10); 
                               }else{
							   $(\'.err_mssg_pwd_form\').html(trim_resp);
							   return false;
							   }
                               
                        }
						
                  });
					}
				}
				else {
					 $(\'.err_mssg_pwd_form\').html(\'Wrong password, please try again!!!\');
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
function getActScenario(){
 
   var sort = $(\'#sort_par\').val();
    var page = $(\'#pageno\').val();
          $.ajax({
                  url:"Actscenariodetails.php",
                  type:"POST",
                  data:{sort:sort,page:page},
                  success:function(resp){
				 // alert(resp);
                         $(\'#tablesorter-demo\').html(resp);
		var pagination = $.trim($(\'#arr_page_vars\').val());
		if(page>1){
			var check = document.getElementsByTagName(\'td\')[0].innerHTML;
								if(check == \'No Records Available\'){
							var newpage = --page;
							$(\'#pageno\').val(newpage);
							getActScenario();
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
//function tsort(el,el_id){
//     if(! el.hasClass(\'active\')){
//         $(\'#tablesorter-demo .sort_trig\').removeClass(\'active\');
//        el.addClass(\'active\');
//       $(\'#sort_par\').val(el_id);
//          getActScenario(); 
//  }
//    
//}

function tsort(el,el_id){
     if(! el.hasClass(\'active\')){
         $(\'#tablesorter-demo .sort_trig\').removeClass(\'active\').show();
            el.addClass(\'active\');
            el.siblings().hide();      
  }else{
        $(\'#tablesorter-demo .sort_trig\').removeClass(\'active\');        
           el.siblings().addClass(\'active\').show();
           el.hide();
           var par = el_id.split(\'-\');
               if( par[1] == \'a\'){
                  el_id = par[0]+\'-d\';}
               else if(par[1] == \'d\'){
                  el_id = par[0]+\'-a\';}      
    }
         $(\'#sort_par\').val(el_id);
		 var actstatus = $.trim($(\'#actstatus input[name=actionstatus]:checked\').val());
		 if(actstatus == \'Inactive\'){
		 getInactScenario();
		 }else{
          getActScenario(); 
		  }
    
}
 function getInactScenario(){
 
   var sort = $(\'#sort_par\').val();
    var page = $(\'#pageno\').val();
          $.ajax({
                  url:"Inactscenariodetails.php",
                  type:"POST",
                  data:{sort:sort,page:page},
                  success:function(resp){
				 // alert(resp);
                         $(\'#tablesorter-demo\').html(resp);
						 var pagination = $.trim($(\'#arr_page_vars\').val());
		if(page>1){
			var check = document.getElementsByTagName(\'td\')[0].innerHTML;
								if(check == \'No Records Available\'){
							var newpage = --page;
							$(\'#pageno\').val(newpage);
							getInactScenario();
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
function nextinscen(){
var page = $(\'#pageno\').val();
var nextpage = ++page;
$(\'#pageno\').val(nextpage);
getInactScenario();
}
function previnscen(){

var page = $(\'#pageno\').val();

var nextpage = --page;

$(\'#pageno\').val(nextpage);
getInactScenario();
}
function nextascen(){
var page = $(\'#pageno\').val();
var nextpage = ++page;
$(\'#pageno\').val(nextpage);
getActScenario();
}
function prevascen(){

var page = $(\'#pageno\').val();

var nextpage = --page;

$(\'#pageno\').val(nextpage);
getActScenario();
}
$(document).on(\'click\',\'#pageprev\',function(){
 var stat = $(\'#actstatus input[name=actionstatus]:checked\').val();
 if(stat == \'Inactive\'){
 previnscen();
 }else{
 prevascen();
 }
 
});
$(document).on(\'click\',\'#pagenext\',function(){
 var stat = $(\'#actstatus input[name=actionstatus]:checked\').val();
 if(stat == \'Inactive\'){
 nextinscen();
 }else{
 nextascen();
 }
 
});
 $(window).load(function(){
         
       getInactScenario();
       
});

$(\'#selectdept\').on(\'click\',\'.check\', function(){
alert(\'hello\');
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
  
});

</script> 
'; ?>

<input type="hidden" name="page_num" class="page_num" value="<?php echo $this->_tpl_vars['curr_page']; ?>
">
<div class="location">
  <h2>Select the 'Activated Scenarios' option to see all scenarios that are currently active</h2>
</div>

<!--
<div class="completed" style="margin-right:14px !important;">
	<a href="companyView.php"><h4>Completed and go to my dashboard</h4></a>
</div>
-->
</td>
</tr>
</table>
<div class="clear"></div>
<div class="location">

 <div id="actstatus" style="float:right;">
        <input type="radio" value="Inactive"  name="actionstatus" id="inactive" onclick="" checked="checked" />
        &nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Inactive Scenarios</strong>
        <input type="radio" value="Active" name="actionstatus" id="active" onclick=""  />
        &nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Activated Scenarios </strong>
</div>		
  <!--- <form name="frmstatus" id="frmstatus" method="REQUEST" enctype="multipart/form-data" >
    <div style="float:right;"  >
      <div style="float:right;"  > <?php if ($this->_tpl_vars['activeinactive'] == 'activeyes'): ?>
        <input type="radio" value="Inactive"  name="actionstatus" id="inactive" onclick="document.frmstatus.submit();" />
        &nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Inactive Scenarios</strong>
        <input type="radio" value="Active" name="actionstatus" id="active" onclick="document.frmstatus.submit();" checked="checked" />
        &nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Activated Scenarios</strong> <?php elseif ($this->_tpl_vars['activeinactive'] == 'inactiveyes'): ?>
        <input type="radio" value="Inactive"  name="actionstatus" id="inactive" onclick="document.frmstatus.submit();" checked="checked" />
        &nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Inactive Scenarios</strong>
        <input type="radio" value="Active" name="actionstatus" id="active" onclick="document.frmstatus.submit();"  />
        &nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Activated Scenarios </strong> <?php else: ?>
        <input type="radio" value="Inactive"  name="actionstatus" id="inactive" onclick="document.frmstatus.submit();" checked="checked" />
        &nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Inactive Scenarios</strong>
        <input type="radio" value="Active" name="actionstatus" id="active" onclick="document.frmstatus.submit();"  />
        &nbsp;<strong style="font-size: 16px; color:#676767; font-weight: normal;">Activated Scenarios </strong> <?php endif; ?> </div>
    </div>
  </form>--->
  </form>
</div>
<div class="breadcrumb"> //<?php echo $this->_tpl_vars['breadcrumb']; ?>
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
		  <input type="hidden" name="sort_par" id="sort_par" value=""/>
		  <input type="hidden" id="pageno" value="<?php echo $this->_tpl_vars['curr_page']; ?>
"/>
        <table id="tablesorter-demo" class="table table-striped table-hover"   rel="<?php echo $this->_tpl_vars['RECLIMIT']; ?>
" border="0" cellpadding="5" cellspacing="5">
          <!--						style="background-color:#E6EEEE; color:#385BBF; font-family:Tahoma,Arial,Helvetica,sans-serif; font-size:11px;"	--> 
          <!--<form name="frmlist" id="frmlist" method="post" action="<?php echo $this->_tpl_vars['page_name']; ?>
">
								<input type="hidden" name="action" value="Search">
								<input type="hidden" name="srname" value="">
								<input type="hidden" name="keyname" value="">-->
          
 
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
            <td  align="left" style=" padding:0 0 0 10px!important;"><p style="padding: 10px 0px 0px 0 ! important;" >
                <input type = "hidden" id="scenarionamee_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="<?php echo $this->_tpl_vars['currdata']['scenarioname']; ?>
" />
                <?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>
 </p></td>
            <td align="left" style=" padding:10px 0 0 10px!important;"><?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['locationname'])) ? $this->_run_mod_handler('capitalize', true, $_tmp, true) : smarty_modifier_capitalize($_tmp, true)); ?>

            <input type = "hidden" id="scenarionlocation_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="<?php echo $this->_tpl_vars['currdata']['locationname']; ?>
" />
            <input type = "hidden" id="scenarionactp_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="<?php echo $this->_tpl_vars['currdata']['userEmail']; ?>
" />
            <input type = "hidden" id="scenarionaction_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="<?php echo $this->_tpl_vars['currdata']['action']; ?>
" />
            <input type = "hidden" id="scenarionactd_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="<?php echo $this->_tpl_vars['currdata']['createdOn']; ?>
" />
            <div id='scenariokey_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
' style="display:none;"><?php echo $this->_tpl_vars['currdata']['keycontacts']; ?>
</div>
            <div id='scenariodept_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
' style="display:none;"><?php echo $this->_tpl_vars['currdata']['deptname']; ?>
</div></td>
            <td align="left" style=" padding:10px 0 0 10px!important;"> <?php if ($this->_tpl_vars['currdata']['isActive'] == '1'): ?> <a href="reports.php?aid=<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" style="color:#168ece !important; text-decoration:none;" title="View Responses">View Responses</a> <?php else: ?>
              No Reports
              <?php endif; ?> </td>
            
            <!--reports -->
            
              <td align="center" style="<?php if ($this->_tpl_vars['currdata']['isActive'] == '1'): ?> padding:13px 0 0 10px!important;<?php else: ?> padding:7px 0 0 10px!important;<?php endif; ?>">
            <?php if ($this->_tpl_vars['currdata']['isActive'] == '1'): ?> <a href="#" class="message_pop_open" title="Update Incidents" onClick="show_popup(<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
);" style="color:#168ece">Send Message</a> <?php else: ?>
            <p style="padding:0;margin:0; color:#168ece"> Send Message </p>
            <?php endif; ?>
            </td>
          
          
          <!-- notifications --> 
          
          <?php if ($this->_tpl_vars['currdata']['eStatus'] == '1'): ?>
          
            <td align="center" style=" padding:7px 0 0 10px!important;"><p style="color:red"> <?php if ($this->_tpl_vars['currdata']['isActive'] == '0'): ?> 
                <?php if ($this->_tpl_vars['currdata']['isAuthenticated'] == '0'): ?> 
				<?php if ($this->_tpl_vars['currdata']['cancel'] == '0'): ?> Closed <?php else: ?> Cancelled <?php endif; ?> 
                <input type = "hidden" id="scenarios_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="c" />
                <?php else: ?> 
                <?php if ($this->_tpl_vars['currdata']['launch'] == $this->_tpl_vars['companyuser']): ?> 
                Awaiting Launch
                <input type = "hidden" id="scenarios_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="al" />
                <?php else: ?>
                Confirm Launch
                <input type = "hidden" id="scenarios_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="cl" />
                <?php endif; ?>
                <?php endif; ?>
                <?php elseif ($this->_tpl_vars['currdata']['isActive'] == '1'): ?> 
                <?php if ($this->_tpl_vars['currdata']['isAuthenticated'] == '1'): ?> 
                Launched
                <input type = "hidden" id="scenarios_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="l" />
                <?php else: ?> 
                <?php if ($this->_tpl_vars['currdata']['deact'] == $this->_tpl_vars['companyuser']): ?> 
                Awaiting Closure
                <input type = "hidden" id="scenarios_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="ac" />
                <?php else: ?>
                Confirm Closure
                <input type = "hidden" id="scenarios_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
" value="cc" />
                <?php endif; ?>
                <?php endif; ?>
                <?php endif; ?> </p></td>
            <?php elseif ($this->_tpl_vars['currdata']['eStatus'] == '0'): ?>
            <td align="center"><p style="padding:0;margin:0;"> 
                
                <!-- Please <a  title="Edit Incident" style="text-decoration: underline;" href="<?php echo $this->_tpl_vars['add_file']; ?>
?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
&aid=<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
&action=Update&page=<?php echo $this->_tpl_vars['curr_page']; ?>
">edit</a> to complete setup--> 
                Please <a  title="Edit Incident" style="text-decoration: underline;" class="my_modal_open" href="" onClick="clickerdepp(<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,<?php echo $this->_tpl_vars['curr_page']; ?>
);">Edit</a> to complete setup </p></td>
            <?php endif; ?> 
            
            <!-- active -->
            
            <input  id='scenariostat_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
' type="hidden" value="<?php echo $this->_tpl_vars['currdata']['eStatus']; ?>
">
            <input  id='scenariouser_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
' type="hidden" value="<?php echo $this->_tpl_vars['currdata']['username']; ?>
">
            <input  id='scenariodate_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
' type="hidden" value="<?php echo $this->_tpl_vars['currdata']['date']; ?>
">
            <input  id='scenariotime_<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
' type="hidden" value="<?php echo $this->_tpl_vars['currdata']['time']; ?>
">
                        <?php if ($this->_tpl_vars['currdata']['eStatus'] == '1'): ?>
            <td align="center" style=" padding:10px 0 0 10px!important;"> <?php if ($this->_tpl_vars['currdata']['isActive'] == '0'): ?> 
              <?php if ($this->_tpl_vars['currdata']['isAuthenticated'] == '0'): ?>
              
              <?php if ($this->_tpl_vars['currdata']['cancel'] == '0'): ?> Closed <?php else: ?> Cancelled <?php endif; ?> 
              <!-- <a href="#" onClick="javascript:password_form(<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,'initiate')" style="text-align:center; color:#00C; text-decoration:none;" title="Initiate Incident" >Launch</a> --> 
              <?php else: ?> 
              <?php if ($this->_tpl_vars['currdata']['launch'] == $this->_tpl_vars['companyuser']): ?> <a href="#" onClick="javascript:password_form(<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,'Cancel')" style="text-align:center; color:#00C; text-decoration:none;" title="Cancel" >Cancel</a> <?php else: ?> <a href="#" onClick="javascript:password_form(<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,'activate')" style="text-align:center; color:#00C; text-decoration:none;" title="Re-Confirm Activation" >Launch</a> <?php endif; ?>
              <?php endif; ?>
              <?php elseif ($this->_tpl_vars['currdata']['isActive'] == '1'): ?> 
              <?php if ($this->_tpl_vars['currdata']['isAuthenticated'] == '1'): ?> <a href="#" onClick="javascript:password_form(<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,'deactivate')" style="text-align:center; color:#00C; text-decoration:none;" title="Deactive Incident" >Deactivate</a> <?php else: ?> 
              <?php if ($this->_tpl_vars['currdata']['deact'] == $this->_tpl_vars['companyuser']): ?> <a href="#" onClick="javascript:password_form(<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,'Cancel')" style="text-align:center; color:#00C; text-decoration:none;" title="Cancel" >Cancel</a> <?php else: ?> <a href="#" onClick="javascript:password_form(<?php echo $this->_tpl_vars['currdata']['scenarioId']; ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,'unactivate')" style="text-align:center; color:#00C; text-decoration:none;" title="Re-Confirm Deactivation" >Close</a> <?php endif; ?>
              <?php endif; ?>
              <?php endif; ?> </td>
            <?php elseif ($this->_tpl_vars['currdata']['eStatus'] == '0'): ?>
            <td align="center"><p style="padding:0;margin:0;"> 
                
                <!-- Please <a  title="Edit Incident" style="text-decoration: underline;" href="<?php echo $this->_tpl_vars['add_file']; ?>
?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
&aid=<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
&action=Update&page=<?php echo $this->_tpl_vars['curr_page']; ?>
">edit</a> to complete setup--> 
                Please <a  title="Edit Incident" style="text-decoration: underline;" class="my_modal_open" href="" onClick="clickerdepp(<?php echo ((is_array($_tmp=$this->_tpl_vars['currdata']['scenarioId'])) ? $this->_run_mod_handler('urldecode', true, $_tmp) : urldecode($_tmp)); ?>
,<?php echo $this->_tpl_vars['currdata']['associationId']; ?>
,<?php echo $this->_tpl_vars['curr_page']; ?>
);">Edit</a> to complete setup </p></td>
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
          <tr>
            <td colspan="7" style="color:red;">No Records Available</td>
          </tr>
          <?php endif; ?>
            </tbody>
          
          
        </table>
        </td>
      
        </tr>
      
    </table>
      </td>
    
      </tr>
    
  </table>
    </td>
  
    </tr>
  
    </td>
  
    </tr>
  
</table>
<div  class="select-02_right" id="paginationdiv" style="display:none;text-align:right; padding-bottom:8px;padding-right:0!important;">
         		
		   		 <img src="images/paging/previous.png" border="0" id="pageprev" style="cursor:pointer;" onclick="" />
				  <img src="images/paging/previous_disable.png" id="prevnill" border="0" style="cursor:text;" />	
        	<span id="pagination" style="font-size: 14px;color:#999; float: center; padding-top:6px;"></span>
			<img src="images/paging/next_disable.png" border="0" id="nextnill" style="cursor:text;" />
		  <img src="images/paging/next.png" title="Next" border="0" id="pagenext" style="cursor:pointer;" onclick="" />
	
</div> 
							<!--							<div class="popup" id="div_view" style="display:none; "  >
							<div id='password_form' style="display:none;" >
							<div style="vertical-align:middle; " >
							<form name="pass_form" id="pass_form" method="post" name="frm_csv_upload" >
							<form id="pass_form" method="post" >
							<div class="company company010">
				<label>Password:</label>
				<input type="password" class = "validate[required]" name="password" atr="pass" style="width:273px !important;"/><spam id="passwordalert"></spam>
			</div>
			<div class="company editprofilebutton editprofilebutton2 company02 company03" 
            style="float:left!important;" >
				<input type="hidden" name="actscen" id = "actscen" value=""/>
				<input type="button" id="submit_bttn" class="button_text" value="Submit" style="margin-left:140px !important; margin-bottom:10px;" onclick="return activateNow()"/>
                                <button type="button" id="submit_bttn" class="button_text" style="margin-left:140px !important; margin-bottom:10px;" onclick="return activateNow()">Submit</button>
			</div>

							</form>
							</div>
							</div>

							</div>-->

							<div id="toPopup" class="" style="left:0;top:0"> 
  <!--toPopup_close--> 
  <a style="padding: 0px 0.4em; float: right;color:#000;" class="toPopup_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> <span style="display: none;" class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
  <div id="popup_content">
                                <h2 style="border-bottom:1px solid #eee; padding-bottom:20px;">Enter Password</h2>
                                <!--your content start-->
                                <div id="div_depart" style="text-decoration:none;padding:10px;">
      <div style="vertical-align:middle; "> 
                                    <!--onsubmit="return activateNow()"-->
                                    <form id="pass_form" method="post" >
          <div class="company company010">
                                        <label>Password:</label>
                                        <input class="validate[required]" id="pwd_frm_field" name="password" atr="pass" style="width:273px !important;" type="password" >
                                      </div>
          <div class="company editprofilebutton editprofilebutton2 company02 company03" style="float:left!important;">
                                        <button class="button_text" value="button" id="submit_bttn" style="margin-left:140px !important; margin-bottom:10px;" type="submit">Submit</button>
                                      </div>
        </form>
                                  </div>
    </div>
                                <div class="err_mssg_pwd_form" style="clear:both;color: #06F"></div>
                              </div>
  <p align="center"> <a href="#" class="livebox"></a> </p>
</div>

							<!--toPopup end-->

							</div>
                            </div>
<div id="my_modalact" class="over_laydesign well">
  <div class="edit_pop">
    <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modalact_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
      <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 0;
  padding: 0 0 20px 0;" class="over_hed">Activate Scenario</h2>
    </div>
       <div class="act_scn_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
    <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data" class="form-horizontal" action="">
      <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
      <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Scenario Name</label>
        <div class="controls over_select">
          <input type="text" class = "validate[required] input_login edit_scenario_name" name="scenarioname" id="scenarionamea" value="<?php echo $this->_tpl_vars['scenarioname']; ?>
" size="45" placeholder="Scenario Name"/>
        </div>
      </div>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Action</label>
        <div class="controls over_select">
          <textarea name = 'action_name'id='action_name_acta'  class='validate[required] edit_scenario_name' cols="7" rows="10" style="height:100px !important; width:304px;" required ></textarea>
        </div>
      </div>
     
        <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Key Contacts</label>
        <div class="controls over_select">
          <textarea name = 'key_con'id='key_cona'  class='validate[required] edit_scenario_name' cols="7" rows="10" style="height:100px !important; width:304px;" required ></textarea>
        </div>
      </div>
            <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Select Location</label>
        <div class="controls over_select edit_scenario_radio" id="locationlistt">
        
         <select name="location" id="selectlocation" class="validate[required] select_cmb0002" onchange="getLocation()" required>

          <option value="">Select Location:</option>
          
                      

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
          
          <div id="selectdept" style="overflow:auto;height:90px;" class="check_boxes"  > </div>
        </div>
      </div>
      <div style="clear:both;height:1px;"></div>
      <div id="filtercontacta" style="display:none;"> <br>
        <input type="text" name="filtercontacts" id="filtercontacts" style="display:none;" value="">
        <a href="javascript:Getdepartments()"  style="background:#69B4DE; color: #000000; margin-left: 10px; padding: 4px 15px; display:none;">Search</a></div>
          <div class="control-group over_size edit_scenario key_cont" style="display:none;">
        <label for="select01" class="control-label" style="margin-top:55px;">Add Contacts</label>
        <div class="controls over_select edit_scenario_radio" >
        <div class="check_boxes" id="selectedcontact" style="margin-top:55px;overflow:auto;height:90px;">
            
     <!--    <div class="controls over_select" >
           
          <select name="selectedcontacts[]" id="selectedcontact" multiple="multiple" class="validate[required] edit_scenario_name" style="width:301px; height:90px !important; float:left;" onchange="validateselectedit()" required>
            <option>Select Name:</option>
            
                                        
                                        
          
                      

                     <?php if (count($_from = (array)$this->_tpl_vars['data_user'])):
    foreach ($_from as $this->_tpl_vars['contact_all']):
?>

                      
                      
          
                                        
                                        
            <option value="<?php echo $this->_tpl_vars['contact_all']['companyuserId']; ?>
" <?php echo $this->_tpl_vars['contact_all']['isselected']; ?>
 > <?php echo $this->_tpl_vars['contact_all']['name']; ?>
 </option>
            
                                        
                                        
          
                      

                      <?php endforeach; unset($_from); endif; ?>
                        
          </select> --> 
        </div>
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
      <div class="over_but" style="float:right; padding-right:80px; margin: 65px 0 0 0;">
                                    <div class="control-group bur_siz"> </div>
                                    <div class="ove_button">
          <input type="button" id="act_scn_btn" name="updatee" class="overButton" value="Launch" style="margin:0px 10px 0px 20px;width:120px;">
          <button type="button" class="my_modalact_close my_modaladd_close2" style="width:120px">Cancel</button>
        </div>
      </div>
    </form>
  </div>
    </div> 
                            <!--------------new pop p -----------------------------------------> 

                            <!-- <button class="my_modal_open" data-popup-order="0">Click Me</button>--> 
                            <!--			<div id="toPopup" style="left:0;top:0">

		<div class="close toPopup_close"></div>
		<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
		<div id="popup_content">
		 <h2 style="border-bottom:1px solid #eee; padding-bottom:20px;">Enter Password</h2>
			your content start
				<div id="div_depart" style="text-decoration:none;padding:10px;">
								&nbsp;
		</div>
		</div>
		<p align="center">
			<a href="#" class="livebox"></a>
		</p>
	</div>--> 
                            <!--your content end-->
                          
   

                            <!-- delete pop up....----->

                            <div id="my_modaldelete" class="over_laydesign well reveal-modal pop_midd" style="height: 263px;padding: 40px 40px 40px 37px;width: 521px;">
  <div class="over_hedtag">
                                <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modaldelete_close close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> </div>
                                <div class="over_delete delete_scenario act_algn">
      <p class="over_det_text"><strong style="padding:0 !important;">Are you sure you want to Delete this Scenario?</strong></p>
      <p class="over_text_det">If you delete you can't recover this Scenario anymore</p>
      <div class="ove_button delete_scenario_button del_mid"> <a href="#" onclick="callthis($('#my_modaldelete'))" style="width: 125px !important;height:35px !important;text-align:center !important;line-height:35px !important;color:#fff !important; float:left; background:#1e8ece; text-decoration: none; margin:18px 0 0 150px;" class="overButton over_mid delete_scenario_conform" >Delete</a> </div>
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
      <label for="select01" class="control-label">Associated Groups</label>
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
                                
                                <!--           <div id="filtercontactadd" style="display:none;"><br><input type="text" name="filtercontacts" id="filtercontactsadd" style="display:none;" 
value=""><a href="javascript:Getdepartmentsadd()"  style="background:#69B4DE; color: #000000; margin-left: 10px; padding: 4px 15px; 
display:none;">Search</a></div> --> 
                                
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
                                    <button type="button" class="my_modaladd_close" >Cancel</button>
                                  </div>
    </div>
                              </form>
</div>

                            <!--- message popup-->
 <div class="popup" id="div_view" >
         <div id='message_pop'  class="well">
             <div class="over_hedtag">
	     <a style="padding: 0px 0.4em; float: right;color:#000;" class="message_pop_close" href="#">
     
		 
              <img src="img/close_btn.png" alt="Close" border="0" />
             </a>       
             
             
	    <h2 style="text-align:left; border-bottom: 1px solid #dedede; padding-bottom:20px;" class="over_hed">Enter your message:</h2>
      </div>
             <div style="vertical-align:middle; text-align:center;color:#168ece !important" >
                <div class="message_scn_err" style="display:none;clear:both;text-align:center;font-size: 12px ;color: #168ECE"></div>
      
            <form method="post" name="frm_udpate_inc" id="frm_udpate_inc" action="" enctype="multipart/form-data">
              <input type="hidden" name="scenID" id="scenID" value="" />
               <input type="hidden" name="assocID" id="assocID" value="" />
													
													<br>
		<textarea name="updateInc" id="updateInc" rows="5" cols="40"  style="height:120px !important; width: 100%"></textarea>
													<br />
													<br />
<input type="submit" name="updateInident" id="sendmessage" value="Submit" class="button_text"/>					
<input type="submit" style="color:white !important; padding:9px 20px 9px 26px !important; margin : 13px 9px 4px 10px !important" value="CANCEL" class="message_pop_close"/>
												</form>
                                                
											</div>
										</div>

										
									</div> 
   <?php if ($this->_tpl_vars['var_msg']): ?>
        
         <span class="menu_msg" type="hidden" style="color:red;display:none;"> 
            
            <?php echo $this->_tpl_vars['var_msg']; ?>

            
             </span>
      
        <?php endif; ?>  
                      
     <div class="reveal-modal" id="mssg_pop" >
                               <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
                                <div class="pop_div">
								<p class="over_det_text"></p>
                                                                <button type="button" class="close-reveal-modal popy" >OK</button>
								</div>
                            </div>    

 <?php echo ' 
<script type="text/javascript">
       
 $(window).load(function(){
            var mssg = $.trim($(\'.menu_msg\').html());
       $(\'#mssg_pop .over_det_text\').html(mssg);
           if(mssg.length > 0){
        $(\'#mssg_pop\').reveal();
       } 
}) 

 
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
                var values = [];
            $(\'div#selectdept input[type="checkbox"]:not(.checkall)\').each(function() {
               if ($(this).is(\':checked\')) {
                values.push($(this).val()); 
               }
            });
               
         var filterVal = $(\'#filtercontacts\').val();
           if(values.length>0){
                  $.ajax({
                     url:"selectcontacts.php",
                     type:"GET",
                     data:{deptarray:values,fltVal:filterVal},
                     success:function(resp){
                           $(\'#filtercontact\').css(\'display\',\'block\');
			   $(\'#selectedcontact\').html(resp);    
			   $(\'.key_cont\').show();    
                         
                       }
                     })
            }else{
               $(\'#selectedcontact\').html(\'\');  
                    $(\'.key_cont\').hide();    
              }
		
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
			
			//var filterVal = document.getElementById(\'filtercontactsadd\').value;
			
			
                            
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
						//document.getElementById(\'filtercontactadd\').style.display = "block";
						document.getElementById(\'selectedcontactadd\').innerHTML = "";
                                                    
						document.getElementById(\'selectedcontactadd\').innerHTML = response;
					}
				}
				
				var url="selectcontacts.php";
				url = url+"?deptarray="+values;
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



<div id="my_modalclosepop" class="over_laydesign well">
<div class="edit_pop4">
      <div class="over_hedtag">
	     <a style="padding: 0px 0.4em; float: right;" class="my_modalclosepop_close" href="#">
              <img src="img/close_btn.png" alt="Close" border="0" />
             </a>
             <h2 style="text-align:left; border-bottom: 1px solid #b7b7b7; font-weight: normal;margin-left: 0;
  padding: 0 0 20px 0;" class="over_hed">
Inactivate Scenario</h2>
      </div>
	  <div class="close_scn_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
    
  <form class="form-horizontal">   
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Scenario Name</label>
            <div class="controls over_select">
             <p class="name_scena edit_scenario_name" id="close_scen"></p>
            </div>
          </div>  
          
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Location</label>
            <div class="controls">
             <p class="name_scena edit_scenario_name" id="close_loc"></p>
            </div>
          </div>
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Deactivated by</label>
            <div class="controls">
             <p class="name_scena edit_scenario_name" id="close_by"></p>
            </div>
          </div>
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Date</label>
            <div class="controls">
             <p class="name_scena edit_scenario_name" id="close_date"></p>
            </div>
          </div>
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Time</label>
            <div class="controls">
             <p class="name_scena edit_scenario_name" id="close_time"></p>
            </div>
          </div>
          
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Closure Message</label>
            <div class="controls">
              <textarea name="close_msg" id="close_msg" cols="28" rows="10" style="height:100px !important; " class="text_size edit_scenario_name"></textarea>
            </div>
          </div>
 
          
          <div class="over_but">
          <div class="control-group bur_siz">
           
            </div>
            <div class="ove_button" style="padding-bottom:10px; float:right; padding-right:14px; margin: 15px 0 0 0;">
            	<button type="button" class="overButton" id="close" style="width:120px; margin: 0 10px 0 20px;">Close</button>
            	<button type="submit" class="my_modalclosepop_close overButton over_cancle" style="width:120px;">cancel</button>
            </div>
            
          	
          </div>
        </form>
  </div>

</div>
<!-- deactivate scenario -->


 <div id="my_modaldeactivate" class="over_laydesign well">
   <div class="edit_pop5">
      <div class="over_hedtag">
	     <a style="padding: 0px 0.4em; float: right;" class="my_modaldeactivate_close" href="#">
             
             <img src="img/close_btn.png" alt="Close" border="0" />
             </a>
	   <h2 style="text-align:left;margin-left: 0;padding: 0 0 20px 0; border-bottom:1px solid #b7b7b7" class="over_hed">Deactivate Scenario</h2>
      </div>
	  <div class="deact_scn_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
    
  <form class="form-horizontal">   
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Scenario Name</label>
            <div class="controls over_select">
             <p class="name_scena edit_scenario_name02 edit_scenario_name03" id="deact_name"></p>
            </div>
          </div>  
          
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Location</label>
            <div class="controls">
             <p class="name_scena edit_scenario_name02 edit_scenario_name03" id="deact_loc"></p>
            </div>
          </div>
          
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Closure Message</label>
            <div class="controls">
              <textarea name="deact_msg" id="deact_msg" cols="10" rows="10" style="height: 60px !important;" class="text_size edit_scenario_name02 edit_scenario_name04"></textarea>
            </div>
          </div>
          
          
          <div class="over_but">
          <div class="control-group bur_siz">
           
            </div>
            <div class="ove_button" style="float:right; padding-right:12px;">
            	<button type="button" class="overButton" id="deactivate" style="margin:0px 12px 0px 20px;width:120px; text-align: center;">Deactivate</button>
            	<button type="button" class="my_modaldeactivate_close overButton over_cancle" style="width:120px;">cancel</button>
            </div>
            
          	
          </div>
        </form>
  </div>
</div>

<!-- launch scenario -->



  <div id="my_modallaunch" class="over_laydesign well" style="padding-bottom:10px !important;">
  <div class="edit_pop5">
      <div class="over_hedtag">
	     <a style="padding: 0px 0.4em; float: right;" class="my_modallaunch_close" href="#">
              <img src="img/close_btn.png" alt="Close" border="0" />
             </a>
			<h2 style="text-align:left;margin-left: 0;padding: 0 0 20px 0; border-bottom:1px solid #b7b7b7" class="over_hed">Launch Scenario</h2>
      </div>
	  <div class="launch_scn_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
    
  <form class="form-horizontal">   
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Scenario Name</label>
            <div class="controls over_select">
             <p class="name_scena edit_scenario_name02 edit_scenario_name03" id = "launchname"></p>
            </div>
          </div>  
          
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Location</label>
            <div class="controls">
             <p class="name_scena edit_scenario_name02" id = "launchlocation"> </p>
            </div>
          </div>
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Group</label>
            <div class="controls">
            <div class="addnam addhigh">
             <p class="name_scena sub_clas edit_scenario_name02" style="width:60%;" id = "launchdept"></p>
             </div>
            </div>
          </div>
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Activated by</label>
            <div class="controls">
             <p class="name_scena edit_scenario_name02" id = "Activated"></p>
            </div>
          </div>
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Date</label>
            <div class="controls">
             <p class="name_scena edit_scenario_name02" id="actdate"></p>
            </div>
          </div>
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Time</label>
            <div class="controls">
             <p class="name_scena edit_scenario_name02" id = "acttime"></p>
            </div>
          </div>
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Action to be Taken</label>
            <div class="controls">
              <textarea name="launch_msg" id="launch_msg" cols="10" rows="10" style="height: 60px !important;" class="text_size edit_scenario_name02 edit_scenario_name04" required></textarea>
            </div>
          </div>
          <div class="control-group over_size edit_scenario">
            <label for="select01" class="control-label">Key Contacts</label>
            <div class="controls">
              <textarea name="key_con" id="key_con" cols="10" rows="10" style="height: 60px !important;" class="text_size edit_scenario_name02 edit_scenario_name04"></textarea>
            </div>
          </div>
          
          
          <div class="over_but">
          <div class="control-group bur_siz">
           
            </div>
            <div class="ove_button" style="padding-top:0; float: right; padding-right: 13px;">
            	<button type="button" class="overButton" id="launch" style="margin:0px 12px 0px 20px;width:120px; text-align: center;">Launch</button>
            	<button type="submit" class="my_modallaunch_close overButton over_cancle" style="width:120px;">cancel</button>
            </div>
            
          	
          </div>
        </form>
  </div>
  </div>