<?php /* Smarty version 2.6.0, created on 2013-12-14 21:17:35
         compiled from ping.tpl */ ?>
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
          
          <script src="js/bootstrap.js"></script>
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
                
                    $(\'#my_modaldelete\').popup();
                      var urldelete ="departmentView.php?id="+g+"&action=Delete";
                         
                          
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
       if(file.length == 0){
          return false;
       }

})
/*********************************||Create Group||*******************************************/  
 $(document).on(\'click\',\'#addgroup_btn\',function(){
   var name = $.trim($(\'#departmentname\').val());
       if(name.length == 0){
          return false;
       }

})    
/*********************************||Edit Group||*******************************************/    
$(document).on(\'click\',\'#editgroup_btn\',function(){
   var name = $.trim($(\'#departmentnamee\').val());
       if(name.length == 0){
          return false;
       }

})   
    </script> 
<script type="text/javascript">
	$(document).ready(function() {	
            $(".deptId").click(function() {	
                    document.getElementById(\'div_depart\').innerHTML = \'<div id="upload_dept_csv" ><div style="padding-top:10px;" ><form method="post" name="frm_csv_upload" enctype="multipart/form-data" ><input type="hidden" name="csvdeptid" id="csvdeptid" value="\' + $(this).attr("deptId") + \'" />Select file :<input type="file" name="csv" /><input type="submit" name="csvdeptupload" value="Submit" class="button_text"/><br /><br />Download file - <a href="download.php?download_file=examplestaff.xls" target="_blank">example.xls </a></form></div></div>\';	
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
          $.ajax({
                  url:"groupsearch.php",
                  type:"POST",
                  data:{locationid:location,keyword:keyword},
                  success:function(resp){
                         $(\'#group_srch_res tbody\').html(resp);
                     }    
                  })

}  
</script> 
'; ?>

<div style="margin-top:-30px">
<div style="margin: 40px 0 0 0;">
    	
      <form action="ping.php" method="post">
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
			  <input type ="submit" name="ping" onclick="ping.php">
            </div>
          </div>
          
		  </div>
		  </div>
		  </form>
   <div class="reveal-modal" id="mssg_pop" >
                               <a style="padding: 0px 0.4em; float: right;color:#000;" class="close-reveal-modal" href="#"> <img src="img/close_btn.png" alt="Close" border="0" /> </a>
                                <div class="pop_div"></div>
								<button type="button" class="close-reveal-modal popy" >OK</button>
								
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
   