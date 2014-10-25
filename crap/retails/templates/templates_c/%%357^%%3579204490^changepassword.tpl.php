<?php /* Smarty version 2.6.0, created on 2013-12-20 07:44:42
         compiled from changepassword.tpl */ ?>
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

 $(function() {
      
	$(":file").change(function(){
	var filename = $(":file").val().replace(/.*(\\/|\\\\)/, \'\');
	$(this).siblings(\'.file_name01\').children(\'.file_name01_mssg\').html(filename);
 });
    });			   
		 
			  
            </script>


'; ?>

<div class="change_password_cnt">
	<form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data">
              <input type="hidden" name="action" value="<?php echo $this->_tpl_vars['action']; ?>
">
              <input type="hidden" name="hid_viewPage" value="<?php echo $this->_tpl_vars['view_page']; ?>
">
              <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
              <div class="space">
                      <div class="changed_1">
                        <div class="space_ta_1">
                          <label>Current Password :</label>
                          <div class="current_password1 current_password02">
                            <input type="password" class="validate[required] input_text" name="password" id="password" maxlength="45" size="45" >
                          </div>
                        </div>
                        <div class="space_ta_1">
                          <label>New Password :</label>
                          <div class="current_password1 current_password02">
                            <input type="password" class="valideate[required] input_text" name="newpwd" id="newpwd" size="45" />
                          </div>
                        </div>
                        <div class="space_ta_1">
                          <label>Confirm Password :</label>
                          <div class="current_password1 current_password02">
                            <input type="password" class="validate[required] input_text" name="confirmpwd" id="confirmpwd" maxlength="45" size="45">
                          </div>
                        </div>
                      </div>
                     <div class="change_button change_button02">
                      <?php if ($this->_tpl_vars['action'] == 'Change'): ?>
                        <input type="submit" id="submit" name="update" class="button_text" value="Update" >
                        <?php else: ?>
                        <input type="submit" id="submit" name="add" class="button_text" value="Submit" >
                        <input type="button" value="Reset" class="button_text" onclick="reset();return false;">
                        <?php endif; ?>
                        <input type="button" value="Cancel" id="cancel" class="button_text" onclick="history.back(-1);return false;">
                      </div>
                    </div>
            </form>
</div>