<?php /* Smarty version 2.6.0, created on 2014-01-10 03:24:09
         compiled from scenarioView.tpl */ ?>
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
<script type="text/javascript" src="js/jquery.reveal.js"></script>
<link href="js/reveal.css" type="text/css" rel="stylesheet">
<script type="text/javascript">

$(document).on(\'click\',\'#add_submit\',function(e){
 // e.preventDefault();
     $(\'.add_scn_err\').html(\'\');
      var scenarioFile = new FormData($(\'#scenarioFileupload\')[0]);
          var scenarioname = $(\'#scenarioname\').val();
          var action_name_add = $(\'#action_name_add\').val();
		  var image = $(\'#imageadd\').val();
		  if(image.length>0){
		  var newimage = $(\'#imageadd\').val();
		  }else{
		  newimage = \'\';
		  }
		 var pdf = $(\'#pdfadd\').val();
		   if(pdf.length>0){
		  var newpdf = $(\'#pdfadd\').val();
		  }else{
		  newpdf = \'default.pdf\';
		  }
		 /*
jQuery.each($(\'#scenarioFile\')[0].files, function(file) {
    scenarioFile.append(\'file\', file);
});

var scenarioPdf = new FormData();
jQuery.each($(\'#scenariopdf\')[0].files, function(file) {
    scenarioPdf.append(\'file\', file);
});*/
			//alert(scenarioFile);
          if(scenarioname.length == 0){
                $(\'.add_scn_err\').html(\'Name is required\').show();
               return false;
             }else if(action_name_add.length == 0){
                $(\'.add_scn_err\').html(\'Action required\').show();
               return false;
           }
		  else{
	      e.preventDefault();
	             $.ajax({
                  url:"scenariosearch.php",
                  type:"POST",
				  data:{scenarioname:scenarioname,action_name:action_name_add,image:newimage,pdf:newpdf},
			
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                               if(trim_resp ==\'error1\'){
                                     $(\'.add_scn_err\').html(\'Scenario Name Already Exists!!!\').show();
				      return false;
				}else if(trim_resp ==\'error2\'){
                                     $(\'.add_scn_err\').html(\'Staff could not be added.Try again!!!\').show();
				      return false;
                                } else if(trim_resp == \'added\'){
                                   $(\'.add_scn_err\').html(\'Scenario added successfully\').show();
									$(\'.menu_msg\').html(\'Scenario added successfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'Scenario added successfully\';
										$(\'#my_modaladd\').popup(\'hide\');
										 $(\'.add_scn_err\').html(\'\');
										getScenario();
									$(\'.pop_div\').html(\'Scenario added successfully\');
          
										$(\'#mssg_pop\').reveal();
					}, 10); 
                               }
                               
                        }
						
                  });
	   }      
});                
function imageupload(){
 var scenarioFile = new FormData($(\'#scenarioFileupload\')[0]);
		  $.ajax({
                  url:"action.php",
                  type:"POST",
				  data:scenarioFile,
				  cache: false,
                contentType: false,
                processData: false,
				multiple: true,
                  success:function(resp){
				  
				  if(resp == \'NA\'){
				  $(\'#imageadd\').val(\'\');
				  }else{
				  $(\'#imageadd\').val(resp);
				   $(\'#image_add\').attr("src","images/scenarioicons/"+resp);
				  }
				  }
});
}
function pdfupload(){
 var scenariopdf = new FormData($(\'#scenariopdfupload\')[0]);
		  $.ajax({
                  url:"actionpdf.php",
                  type:"POST",
				  data:scenariopdf,
				  cache: false,
                contentType: false,
                processData: false,
				multiple: true,
                  success:function(resp){
				  if(resp == \'NA\'){
				  $(\'#pdfadd\').val(\'\');
				  }else{
				  $(\'#pdfadd\').val(resp);
				   $(\'#pdf_add\').attr("src","images/icons/pdf-icon.png");
				   $(\'#scen_plan_add\').attr("href","scenarioPlan/"+resp);
				  }
				  }
});
} 
function editimageupload(){
 var scenarioFile = new FormData($(\'#editscenarioFileupload\')[0]);
		  $.ajax({
                  url:"action.php",
                  type:"POST",
				  data:scenarioFile,
				  cache: false,
                contentType: false,
                processData: false,
				multiple: true,
                  success:function(resp){
				  if(resp == \'NA\'){
				  $(\'#imageedit\').val(\'\');
				  }else{
				  $(\'#imageedit\').val(resp);
				  $(\'#image_icon\').attr("src","images/scenarioicons/"+resp);

				  }
				  }
});
}

function editpdfupload(){
 var scenariopdf = new FormData($(\'#editscenariopdfupload\')[0]);
		  $.ajax({
                  url:"actionpdf.php",
                  type:"POST",
				  data:scenariopdf,
				  cache: false,
                contentType: false,
                processData: false,
				multiple: true,
                  success:function(resp){
				  
				  if(resp == \'NA\'){
				  $(\'#pdfedit\').val(\'\');
				  }else{
				  $(\'#pdfedit\').val(resp);
				  $(\'#scen_plan\').attr("src","scenarioPlan/"+resp);
				  }
				  }
});
}       
$(document).on(\'click\',\'#edit_submit\',function(e){
 // e.preventDefault();
     $(\'.edit_scn_err\').html(\'\');
     
          var scenarioname = $(\'#scenarionameedit\').val();
		  
		   var id = $(\'#scenarioidd\').val();
          var action_name_edit = $(\'#action_name_edit\').val(); 
			var prescenarioname =$(\'#prevscenarionameedit\').val();
			
		var prevaction_name_edit =$(\'#prevaction_name_edit\').val();
		var prestatus = $(\'#prevstatus\').val();	
		var preimage = $(\'#previmage\').val();	
		var prepdf = $(\'#prevpdf\').val();
		var estatus = $.trim($(\'#estatus input[name=eStatus]:checked\').val());		
		  var image = $(\'#imageedit\').val();
		  var pdf = $(\'#pdfedit\').val();
		if(image.length>0){
		  var newimage = $(\'#imageedit\').val();
		  }else{
		  newimage = preimage;
		  }
		   if(pdf.length>0){
		  var newpdf = $(\'#pdfedit\').val();
		  }else{
		  newpdf = prepdf;
		  }
          if(scenarioname.length == 0){
                $(\'.edit_scn_err\').html(\'Name is required\').show();
               return false;
             }else if(action_name_edit.length == 0){
                $(\'.edit_scn_err\').html(\'Action required\').show();
               return false;
           }else if(action_name_edit.length == 0){
                $(\'.edit_scn_err\').html(\'Action required\').show();
               return false;
           }else if(scenarioname == prescenarioname && action_name_edit == prevaction_name_edit && estatus == prestatus && newimage == preimage && newpdf == prepdf){
               $(\'#my_modal\').popup(\'hide\');
               return false;
           }else{
	      e.preventDefault();
	             $.ajax({
                  url:"scenariosearchedit.php",
                  type:"POST",
				  data:{id:id,scenarioname:scenarioname,prescenarioname:prescenarioname,action_name:action_name_edit,image:newimage,pdf:newpdf,estatus:estatus},
			
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                               if(trim_resp ==\'error1\'){
                                     $(\'.edit_scn_err\').html(\'Scenario Name Already Exists!!!\').show();
				      return false;
				}else if(trim_resp ==\'error2\'){
                                     $(\'.edit_scn_err\').html(\'Staff could not be updated.Try again!!!\').show();
				      return false;
                                } else if(trim_resp == \'added\'){
                                   $(\'.edit_scn_err\').html(\'Scenario updated successfully\').show();
									$(\'.menu_msg\').html(\'Scenario updated successfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'Scenario updated successfully\';
										$(\'#my_modal\').popup(\'hide\');
										 $(\'.edit_scn_err\').html(\'\');
										getScenario();
									$(\'.pop_div\').html(\'Scenario updated successfully\');
          
										$(\'#mssg_pop\').reveal();
					}, 10); 
                               }
                               
                        }
						
                  });
	   }      
});

function nextscenario(){
var page = $(\'#pageno\').val();
var nextpage = ++page;
$(\'#pageno\').val(nextpage);
getScenario();
}
function prevscenario(){

var page = $(\'#pageno\').val();

var nextpage = --page;

$(\'#pageno\').val(nextpage);
getScenario();
}                  
</script> 
<script>
$(function() {
      
	$(":file").change(function(){
           // $(\'.scenario_file_filed\').change(function(){
	var filename = $(this).val().replace(/.*(\\/|\\\\)/, \'\');
	$(this).siblings(\'.file_name01\').children(\'.file_name01_mssg\').html(filename);
 });
    });	
    </script> 
<script>
        function validateselect()
        {
            var selectChoose = document.getElementById(\'selectedcontactadd\');
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
            
            
            
   
   
    function validateselectedit()
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
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<!-- <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet">-->
<link href="css/StyleSheet.css" type="text/css" rel="stylesheet">
<script src="js/jquery.popupoverlay.js"></script> 
<script>
    $(function() {
     $(\'#my_modal\').popup({
        beforeopen: function() {
            $(\'.edit_scn_err\').html(\'\');
          }

        });
    });
        
     </script> 
<script>
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
               
          
                               
                                var scenariostat1 = document.getElementById(\'scenariostat_\'+x).value;
								 var scenarioact = document.getElementById(\'scenarioact_\'+x).value;
                                    var scenarioicon = document.getElementById(\'scenarioicon_\'+x).value;
									var scenarioplan = document.getElementById(\'scenarioplan_\'+x).value;
                          // $(\'#editdept\').val(y);
var opt1 = \'<option  value="1" selected="selected">Enable for use</option><option  value="0">Disable</option>\';   
var opt0 =\'<option  value="1">Enable for use</option><option  value="0" selected="selected">Disable</option>\';
                      
		var optnull = \'<option  value="1">Active</option><option  value="0">Inactive</option>\';  
                                        
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
    
    
     if(scenariostat1==1)
                                   {
                                   document.getElementById(\'active\').checked = true;
                                       }
                                           else
                                               {
                                                    document.getElementById("inactive").checked = true;
                                                   }
    
                                                       
                                                       
//           $(\'#editdept\').val(comudeptid);
$(\'#scenarionameedit\').val(scenarioname1);
$(\'#prevscenarionameedit\').val(scenarioname1);
$(\'#prevstatus\').val(scenariostat1);
$(\'#previmage\').val(scenarioicon);
$(\'#prevpdf\').val(scenarioplan);
$(\'#action_name_edit\').val(scenarioact);
$(\'#prevaction_name_edit\').val(scenarioact);
$(\'#image_icon\').attr("src","images/scenarioicons/"+scenarioicon);
$(\'#pdf_icon\').attr("src","images/icons/pdf-icon.png");
$(\'#scen_plan\').attr("href","scenarioPlan/"+scenarioplan);
         $(\'#scenarioidd\').val(x); 	  
           var urlupdate ="scenarioView.php?id="+x+"&action=Update"+"&page="+pageid+"&edit="+pageid;
                         
                          
             var actionurl = document.getElementById("frmAdd"); 
               
            actionurl.action = urlupdate;
          
          
                     
             
           
           }
        
  </script> 
<script>
            function clickerdepp_delete(g) 
            {
                 var page = $(\'#pageno\').val();
                    $(\'#my_modaldelete\').popup();
					$(\'#scenid\').val(g);
                      var urldelete ="scenarioView.php?page="+page+"&id="+g+"&action=Delete";
                         
                          
             var delurl = document.getElementById("deleteurl");  
               
            delurl.href = urldelete;

      }   
  $(document).on(\'click\',\'#deleteurl\',function(e){
   var scenid = $.trim($(\'#scenid\').val());
    e.preventDefault();
	   $.ajax({
                  url:"scenariodelete.php",
                  type:"POST",
                  data:{scenid:scenid},
				         success:function(resp){
                              var trim_resp = $.trim(resp);
                    if(trim_resp ==\'error2\'){
                                     $(\'.group_err\').html(\'Group could not be added.Try again!!!\').show();
				      return false;
                                }
                                else if(trim_resp == \'deleted\'){
									$(\'.menu_msg\').html(\'Scenario Deleted successfully\'); 								   
                                       setTimeout(function() {
									   var var_msg = \'R3JvdXAgYWRkZWQgc3VjY2Vzc2Z1bGx5\';
									    var page = $(\'#pageno\').val();
										$(\'#my_modaldelete\').popup(\'hide\');
										getScenario();
									$(\'.pop_div\').html(\'Scenario Deleted successfully\');
          
										$(\'#mssg_pop\').reveal();
       
					}, 10); 
                               }
                        } 
                   
                  })

});
 </script> 
<script>
    $(function() {
      $(\'#my_modaldelete\').popup();
    });
  </script> 
<script>
    $(function() {
      $(\'#my_modaladd\').popup({
        beforeopen: function() {
            $(\'.add_scn_err\').html(\'\');
          }

        });
    });
        
        
     function clickerdepp_add()
         {
            
                $(\'#my_modaladd\').popup();    
                
         var urladd ="scenarioView.php";
                       
                          
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
function getLocation(el)
       {
            var lid =  $(\'#selectlocation\'+el+\' :selected\').val();
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
						document.getElementById(\'selectdept\'+el).innerHTML = "";
                                                    
						document.getElementById(\'selectdept\'+el).innerHTML = response;
					}
				}
				if(el==\'edit\'){
				var url="selectlocation.php";
				}else{
				url="selectlocationadd.php";
				}
				url = url+"?lid="+lid;
				httpxml.onreadystatechange=stateck;
				httpxml.open("GET",url,true);
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
            upgradeurll.href = urlupgrade;             
             }
                 
 function getScenario(){
 
   var sort = $(\'#sort_par\').val();
    var page = $(\'#pageno\').val();
          $.ajax({
                  url:"scenariodetails.php",
                  type:"POST",
                  data:{sort:sort,page:page},
                  success:function(resp){
				 // alert(resp);
                         $(\'#tablesorter-demo tbody\').html(resp);
						 var pagination = $.trim($(\'#arr_page_vars\').val());
		if(page>1){
			var check = document.getElementsByTagName(\'td\')[3].innerHTML;
								if(check == \'No Records Available\'){
							var newpage = --page;
							$(\'#pageno\').val(newpage);
							getScenario();
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
//          getScenario(); 
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
          getScenario(); 
    
}
 

    // Yes outside of the .ready space becouse this is a function not an event listner!
    function progress(e){
        if(e.lengthComputable){
            //this makes a nice fancy progress bar
            $(\'progress\').attr({value:e.loaded,max:e.total});
        }
    }   
            
    $(window).load(function(){
      
       getScenario();
      
});	
            </script> 

'; ?>

<div style="margin-top:20px">
  <div class="justified-nav-bar column-full">
    <ul class="nav nav-justified">
      <li><a href="editProfile.php">Company</a></li>
      <li><a href="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>javascript: void(0)<?php else: ?>locationView.php<?php endif; ?>" style="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>background-color:#f5f6f8; color:#cccccc;<?php endif; ?>" class="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>my_modalupgrade_open<?php endif; ?>" onclick="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>upgrade()<?php endif; ?>">Locations</a></li>
      <li><a href="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>javascript: void(0)<?php else: ?>departmentView.php<?php endif; ?>"style="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>background-color:#f5f6f8; color:#cccccc;<?php endif; ?>" class="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>my_modalupgrade_open<?php endif; ?>" onclick="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>upgrade()<?php endif; ?>">Groups</a></li>
      <li><a href="companyuserView.php">Users</a></li>
      <li  class="active"><a href="scenarioView.php">Scenario</a></li>
    </ul>
  </div>
  <div class="location">
    <h2>We have provided a list of all the common scenarios. You can add your own scenario by clicking on the Add Scenario button below.</h2>
  </div>
  <div class="add-new" style="width:251px;">
    <div id="toPopup">
      <div class="close"></div>
      <span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
      <div id="popup_content">
        <h2>Enter Password</h2>
        <!--your content start-->
        <div id="div_depart" style="text-decoration:none;padding:10px;">&nbsp;</div>
      </div>
      <p align="center"> <a href="#" class="livebox"></a> </p>
    </div>
    <!--your content end-->
    <div class="loader"></div>
    <div id="backgroundPopup"></div>
  </div>
  <!--toPopup end-->
  <!--<div class="completed" style="margin-right:14px !important;">-->
  <div class="add-new" style="width:225px;float:right;background-color:#1e8ece;text-align:center; text-transform:capitalize !important;"> 
    <!--	<a href="companyView.php"><h4>Completed and go to my dashboard</h4></a>--> 
    
    <a href="" style="width:221px;text-transform:capitalize !important;" class="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>my_modalupgrade_open btn button-skyblue<?php else: ?>my_modaladd_open btn button-blue<?php endif; ?>" onclick="<?php if ($this->_tpl_vars['ses_plan'] === '30 Day Free'): ?>upgrade()<?php else: ?>clickerdepp_add();<?php endif; ?>" > add scenario</a> </div>
  </td>
  </tr>
  </table>
  <div class="clear"></div>
  <div class="location"> List of Scenarios </div>
  <div class="breadcrumb"> <?php echo $this->_tpl_vars['breadcrumb']; ?>
 </div>
  <table width="100%" border="0"  cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="7">
          <?php if ($this->_tpl_vars['var_msg']): ?>
          <tr>
            <td class="menu_bar_bg"><span class="menu_msg" style="display:none;"> <?php echo $this->_tpl_vars['var_msg']; ?>
 </span></td>
          </tr>
          <?php endif; ?>
          <tr>
            <td width="946px !important;" class="tbl_brder">
			<table width="100%" border="0"  cellspacing="0" cellpadding="0" class="border_bg_color">
                <tr>
                  <td>
				   <input type="hidden" name="sort_par" id="sort_par" value=""/>
	<table id="tablesorter-demo" class="table table-striped table-hover"   rel="<?php echo $this->_tpl_vars['RECLIMIT']; ?>
" border="0" cellpadding="5" cellspacing="5">
                      <thead>
                      <th>&nbsp;</th>
                        <th width="75%"><span>Scenario Name</span><span class="sort-data"><i class="icon-bg asc sort_trig" onclick="tsort($(this),'f1-a')"></i><i class="icon-bg desc sort_trig" onclick="tsort($(this),'f1-d')"></i></span></th>
                        <th class="al-c"> Actions</th>
                          </thead>
                      <tbody class="table1">
                    
                        </tbody>
                      
                    </table></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
    </tr>
      </td>
    
      </tr>
    
  </table>
    <input type="hidden" id="pageno" value="<?php echo $this->_tpl_vars['curr_page']; ?>
"/>
 <div  class="select-02_right" id="paginationdiv" style="display:none;text-align:right; padding-bottom:8px;padding-right:0!important;">
         		
		   		 <img src="images/paging/previous.png" border="0" style="cursor:pointer;" id="pageprev" onclick="prevscenario()" />
				  <img src="images/paging/previous_disable.png" id="prevnill" border="0" style="cursor:text;" />	
        	<span id="pagination" style="font-size: 14px;color:#999; float: center; padding-top:6px;"></span>
			<img src="images/paging/next_disable.png" border="0" id="nextnill" style="cursor:text;" />
		  <img src="images/paging/next.png" title="Next" border="0"  style="cursor:pointer;" id="pagenext" onclick="nextscenario()" />
	
</div>
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

<!--------------edit new pop p -----------------------------------------> 

<!-- <button class="my_modal_open" data-popup-order="0">Click Me</button>-->

<div id="my_modal" class="over_laydesign well">
  <div class="edit_pop edit_pop03">
    <div class="over_hedtag"> <a style="padding: 0px; float: right;color:#000; margin:-2px 0 0 0" class="my_modal_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
      <h2 style="text-align:left; border-bottom:1px solid #b7b7b7; padding-bottom:20px; margin:-5px 0 0 0;" class="over_hed">Edit Scenario</h2>
    </div>
    <div class="edit_scn_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
      <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
      <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
	    <input type="hidden" name="prevscenarionameedit" id="prevscenarionameedit" value="">
		 <input type="hidden" name="prevstatus" id="prevstatus" value="">
		 <input type="hidden" name="previmage" id="previmage" value="">
		  <input type="hidden" name="prevpdf" id="prevpdf" value="">
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Scenario Name</label>
        <div class="controls over_select">
          <input type="text" class = "validate[required] input_login edit_scenario_name" name="scenarioname" id="scenarionameedit"  size="45" placeholder="Scenario Name"/>
        </div>
      </div>
	  	 
	    <form enctype="multipart/form-data" id="editscenarioFileupload"> 
      <div class="control-group over_size edit_scenario">
	   <input type="hidden" id="imageedit" name="imageedit" value="">
        <label for="select01" class="control-label">Upload Scenario Icon</label>
        <div class="controls over_select">
          <input accept="image/*" multiple name="scenarioFile[]" type="file" onchange="editimageupload()" class="scenario_file_filed edit_scenario_name" style="padding:0;"/>
          <div class="file_name01 controls_03" id="Browse001"><strong>Browse</strong><span class="file_name01_mssg"></span></div>
          <img src="" id="image_icon"/> </div>
      </div>
	  </form>
	  <input type="hidden" name="prevaction_name_edit" id="prevaction_name_edit" value="">
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Action</label>
        <div class="controls over_select">
          <textarea name = "action_name" id="action_name_edit"  class="validate[required] edit_scenario_name" cols="7" rows="10" style="height:100px !important; width:304px;" required ></textarea>
        </div>
      </div>

   
<form enctype="multipart/form-data" id="editscenariopdfupload"> 
      <div class="control-group over_size edit_scenario">
	  <input type="hidden" id="pdfedit" name="pdfedit" value="">
      
        <label for="select01" class="control-label">Upload PDF</label>
        <div class="controls over_select">
          <input accept="pdf/*" multiple name="scenariopdf[]" type="file" onchange="editpdfupload()" class="scenario_file_filed edit_scenario_name" style="padding:0 !important;"/>
          <div class="file_name01 controls_03" id="Browse001"><strong>Browse</strong><span class="file_name01_mssg"></span>
		  </br><a href="" id = "scen_plan" style="margin-left:202px;"> <img src="" id="pdf_icon"/></a></div>
        </div>
      </div>
	  </form>
	  <!--
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label" style="width:190px !important;">Number of Key Holders</label>
        <div class="controls over_select edit_scenario_radio">
          <input type="radio" value="2" checked="checked" />
          2 </div>
      </div>
	  
	        <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Select Location</label>
        <div class="controls over_select edit_scenario_radio" id="locationlistt">
        
         <select name="location" id="selectlocationedit" class="validate[required] select_cmb0002" onchange="getLocation('edit')" required>

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
      
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Associated Groups</label>
        <div class="controls over_select">
          <div id="selectdeptedit" style="overflow:auto;margin:10px 0 0 10px" class="check_boxes">
      
          </div>
        </div>
      </div>
      <div class="control-group over_size edit_scenario key_cont" style="display:none;">
        <label for="select01" class="control-label" style="">Key Contacts</label>
        <div class="controls over_select edit_scenario_radio" style="height:auto !important">
          <div class="check_boxes" id="selectedcontact"> </div>
        </div>
      </div>
	  -->
      <div class="control-group over_size edit_scenario">
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
      <div style="clear:both;height:1px;margin-top:5px;padding-top:15px;"></div>
      <div id="filtercontact" style="display:none;"><br>
        <input type="text" name="filtercontacts" id="filtercontacts" style="display:none;" value="">
        <a href="javascript:Getdepartments()"  style="background:#69B4DE; color: #000000; margin-left: 10px; padding: 4px 15px; display:none;">Search</a></div>
      <input  id="scenarioidd" type="hidden" name = "id">
      
      <div class="over_but" style="padding-top:15px; float:right; padding-right:82px;">
      
        <div class="control-group bur_siz"> </div>
        
        <div class="ove_button algn">
          <input type="submit" id="edit_submit" name="updatee"  class="overButton" value="Submit" style="margin:0px 12px 0px 20px;width:120px !important; padding:0; text-align: center;">
          
          <button type="button" class="my_modal_close my_modaladd_close my_modaladd_close2" style="padding: 0;text-align: center !important; width:120px !important;">Cancel</button>
        </div>
      </div>
  </div>
</div>

<!-- delete pop up....----->
<div id="my_modaldelete" class="over_laydesign well">
<input type="hidden" id="scenid" name="scenid" value="">
  <div class="over_hedtag"> <a style="padding: 0px 0.4em; float: right;color:#000;" class="my_modaldelete_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a> </div>
  <div class="over_delete delete_scenario">
    <p class="over_det_text"><strong>Are you sure you want to Delete this Scenario?</strong></p>
    <p class="over_text_det">If you delete you can't recover this scenario anymore</p>
    <div class="ove_button delete_scenario_button"> <a href="" id="deleteurl" style="width: 125px !important;height:35px !important;text-align:center !important;line-height:35px !important;color:#fff !important; float:left; background:#1e8ece; text-decoration: none; margin:18px 0 0 150px;" class="overButton over_mid delete_scenario_conform" >Delete</a> 
      <script>
          // }
                
            </script> 
    </div>
  </div>
</div>

<!-----------------add pop up ------------------------------------------------------------>

<div id="my_modaladd" class="over_laydesign well">
  <div class="edit_pop edit_pop03">
    <div class="over_hedtag"> <a style="padding: 0px; float: right;color:#000; margin:-2px 0 0 0" class="my_modaladd_close" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
      <h2 style="text-align:left; border-bottom:1px solid #b7b7b7; padding-bottom:20px; margin:-5px 0 0 0;" class="over_hed">Add Scenario</h2>
    </div>
    <div class="add_scn_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
       <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
      <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Scenario Name</label>
        <div class="controls over_select">
          <input type="text" class = "validate[required] input_login edit_scenario_name" name="scenarioname" id="scenarioname" value="<?php echo $this->_tpl_vars['scenarioname']; ?>
" size="45" placeholder="Scenario Name" required="required"/>
        </div>
      </div>
	   <form enctype="multipart/form-data" id="scenarioFileupload"> 
      <div class="control-group over_size edit_scenario">
	  <input type="hidden" id="imageadd" name="imageadd" value="">
        <label for="select01" class="control-label">Upload Scenario Icon</label>
        <div class="controls over_select" >
          <input id = "scenarioFile" accept="image/*" multiple name="scenarioFile[]" type="file" onchange="imageupload()" class="scenario_file_filed edit_scenario_name addscen" style="padding:0 !important;"/>
          <div class="file_name01 controls_03" id="Browse001"><strong>Browse</strong><span class="file_name01_mssg"></span></div>
        <img src="" id="image_add"/> </div>
      </div>
	  </form>
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Action</label>
        <div class="controls over_select">
          <textarea name = 'action_name'id='action_name_add' Value='<?php echo $this->_tpl_vars['page_name']; ?>
' class='validate[required] edit_scenario_name' cols="7" rows="10" style="height:100px !important; width:304px;" required ></textarea>
        </div>
      </div>
	  <form enctype="multipart/form-data" id="scenariopdfupload"> 
      <div class="control-group over_size edit_scenario">
	   <input type="hidden" id="pdfadd" name="pdfadd" value="">
        <label for="select01" class="control-label">Upload PDF</label>
        <div class="controls over_select" >
          <input  accept="pdf/*" multiple name="scenariopdf[]" id = "scenariopdf"  type="file" onchange="pdfupload()" class="scenario_file_filed edit_scenario_name" style="padding:0 !important;"/>
          <div class="file_name01 controls_03" id="Browse001"><strong>Browse</strong><span class="file_name01_mssg"></span></div>
         </br><a href="" id = "scen_plan_add" > <img src="" id="pdf_add"/></a>
        </div>
      </div>
	  </form>
	  <!--
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label" style="width: 190px !important;">Number of Key Holders</label>
        <div class="controls over_select edit_scenario_radio">
          <input type="radio" value="2" checked="checked" />
          2 </div>
      </div>
	  
	   <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Select Location</label>
        <div class="controls over_select edit_scenario_radio" id="locationlistt">
        
         <select name="location" id="selectlocationadd" class="validate[required] select_cmb0002" onchange="getLocation('add')" required>

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
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Associated Groups</label>
        <div class="controls over_select">
          <div id="selectdeptadd" style="overflow:auto;margin:10px 0 0 10px" class="check_boxes">
  
          </div>
        </div>
      </div>
      <div class="control-group over_size edit_scenario key_cont_add" style="display:none;">
        <label for="select01" class="control-label" style="">Key Contacts</label>
        <div class="controls over_select edit_scenario_radio" style="height:auto !important">
          <div class="check_boxes" id="selectedcontactadd"> </div>
        </div>
      </div>
	  -->
      <div class="control-group over_size edit_scenario">
        <label for="select01" class="control-label">Status</label>
        <div class="controls over_select edit_scenario_radio">
          <label><span class="over_radio">
            <input type="radio"  checked="checked" value="1" id="activee" name="eStatus" >
            </span> <span class="over_spn">Active</span></label>
          <label><span class="over_radio">
            <input type="radio"  value="0" id="inactivee" name="eStatus" >
            </span> <span class="over_spn">Inactive</span></label>
        </div>
      </div>
      <div style="clear:both;height:1px;margin-top:5px;padding-top:15px;"></div>
      <div id="filtercontactadd" style="display:none;"><br>
        <input type="text" name="filtercontacts" id="filtercontactsadd" style="display:none;" value="">
        <a href="javascript:Getdepartmentsadd()"  style="background:#69B4DE; color: #000000; margin-left: 10px; padding: 4px 15px; display:none;">Search</a></div>
      <input  id="scenarioid" type="hidden" name = "id">
      <div class="over_but" style="padding-top:15px; float:right; padding-right:82px;">
        <div class="control-group bur_siz"> </div>
        <div class="ove_button algn">
          <input type="submit" id="add_submit" name="add"  class="overButton" value="Submit" style="margin:0px 10px 0px 20px;width:120px;">
          <button type="button" class="my_modaladd_close my_modaladd_close2" style="width:120px;">Cancel</button>
        </div>
      </div>
  </div>
</div>

<!-----------------add pop up  end------------------------------------------------------------> 
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
<div class="reveal-modal" id="mssg_pop" > <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
  <div class="pop_div"></div>
  <button type="button" class="close-reveal-modal popy" >Ok</button>
</div>
</div>
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
$( document ).ready(function() {
     var values = [];
            $(\'div#selectdept input[type="checkbox"]:not(.checkall)\').each(function() {
               if ($(this).is(\':checked\')) {
                values.push($(this).val()); 
               }
            });
			if(values.length>0){
			alert(\'hello\');
			}
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
            $(\'div#selectdeptedit input[type="checkbox"]:not(.checkall)\').each(function() {
               if ($(this).is(\':checked\')) {
                values.push($(this).val()); 
               }
            });
                 //alert(values);
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
     var values = [];
            $(\'div#selectdeptadd input[type="checkbox"]:not(.checkall)\').each(function() {
               if ($(this).is(\':checked\')) {
                values.push($(this).val()); 
               }
            });
                
         var filterVal = $(\'#filtercontactsadd\').val();
           if(values.length>0){
                  $.ajax({
                     url:"selectcontacts.php",
                     type:"GET",
                     data:{deptarray:values,fltVal:filterVal},
                     success:function(resp){
                           $(\'#filtercontactadd\').css(\'display\',\'block\');
			   $(\'#selectedcontactadd\').html(resp);  
                           $(\'.key_cont_add\').show();    
                       }
                     })
            }else{
               $(\'#selectedcontactadd\').html(\'\');   
                    $(\'.key_cont_add\').hide(); 
              }
    
   }
 




</script> 
<script>
$(\'#selectdeptadd\').on(\'click\',\'.check\', function(){
    if($(this).hasClass(\'checkall\')){
        
    if($(this).hasClass(\'check_on\')){
        $(this).removeClass(\'check_on\');
        $(\'.check\').each(function(){ this.checked = false; });
    }else{
     $(this).addClass(\'check_on\');
       $(\'.check\').each(function(){ this.checked = true; });
    
    }
Getdepartmentsadd();
}
    else{
         $(\'.checkall\').each(function(){ this.checked = false; });
    }
  
})

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