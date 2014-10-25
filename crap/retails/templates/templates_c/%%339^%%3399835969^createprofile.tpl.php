<?php /* Smarty version 2.6.0, created on 2014-01-09 00:46:19
         compiled from createprofile.tpl */ ?>
<?php echo '

<script type="text/javascript" src="js/jlist.js"></script>
<link rel="stylesheet" href="js/confirm/jquery-ui.css" type="text/css">
<script src="js/confirm/avg_ls_dom.js" type="text/javascript"></script>
<script src="js/confirm/jquery-ui.js"></script>
<script src="js/confirm/jquery_002.js"></script>
<link rel="stylesheet" href="js/sorting/themes/blue/style.css" type="text/css" media="print, projection, screen" />
<script type="text/javascript" src="js/sorting/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/jlist.js"></script>
 <script type="text/javascript">
 var RecaptchaOptions = {
    theme : \'white\'
 };
  $(window).load(function(){
$(\'#captcha_pl\').find(\'#recaptcha_privacy\').css(\'font-size\',\'12px\');
});
 </script>
 
 '; ?>


 <div class="content column-full container">
      <div class="page-header">
          <h4 style="color:red;"><?php echo $this->_tpl_vars['errormessage']; ?>
</h4>
          
          <h4 style="color:red;"><?php echo $this->_tpl_vars['succmessage']; ?>
</h4>
          <h4 style="color:red;"><?php echo $this->_tpl_vars['caperrormessage']; ?>
</h4>
        <h1>Company Details</h1>
      </div>
     <form class="form-horizontal" role="form" name="createprofile" method="POST" action="createprofile.php" style="margin: 20px 0 0 0;">
  
 <input type="hidden" name="plan" value="30 Day Free" />
  <input type="hidden" name="duration" value="30 Days" />
	<input type="hidden" name="amount" value="<?php echo $this->_tpl_vars['planamount']; ?>
">
	<input type="hidden" name="userslimit" value="<?php echo $this->_tpl_vars['planuserslimit']; ?>
">
	
   <input type="hidden" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" />
   <input type="hidden" name="cid" value="<?php echo $this->_tpl_vars['cid']; ?>
"/>
  <input type="hidden" name="hid" value="<?php echo $this->_tpl_vars['hid']; ?>
"/> 
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Company Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="companyname" value="<?php echo $this->_tpl_vars['companyname']; ?>
" required>
          </div>
        
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line1 </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="address" value="<?php echo $this->_tpl_vars['address']; ?>
" required>
          </div>
        </div>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line2 </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="address1" value="<?php echo $this->_tpl_vars['address1']; ?>
">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">City</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="city" value="<?php echo $this->_tpl_vars['city']; ?>
" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">State/County</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="state" value="<?php echo $this->_tpl_vars['state']; ?>
" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Zipcode/Postalcode</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="zipcode" value="<?php echo $this->_tpl_vars['zipcode']; ?>
" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Country</label>
          <div class="col-sm-4">
            <select name="country" class="form-control" required>
            	<?php if (count($_from = (array)$this->_tpl_vars['data_country'])):
    foreach ($_from as $this->_tpl_vars['country_all']):
?>
								<option value="<?php echo $this->_tpl_vars['country_all']['countryId']; ?>
" <?php if ($this->_tpl_vars['country_all']['countryId'] == 225): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['country_all']['printable_name']; ?>
</option>
			<?php endforeach; unset($_from); endif; ?>
            </select>
          </div>
        </div>
    
      <div class="page-header">
        <h1>Add User</h1>
      </div>
        <div class="form-group" style="margin-top:20px;">
          <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="name" value"<?php echo $this->_tpl_vars['name']; ?>
" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Surname</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="surname" value"<?php echo $this->_tpl_vars['surname']; ?>
"  required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" id="inputPassword3" name="password" value="<?php echo $this->_tpl_vars['password']; ?>
" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Mobile Phone</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" id="inputPassword3" name="phone" value="<?php echo $this->_tpl_vars['phone']; ?>
" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">User Role</label>
          <div class="col-sm-4">
            <p class="form-control-static" style="padding:0 !important;margin: 7px 0 0 0;">Admin</p>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Status</label>
          <div class="col-sm-4">
            <p class="form-control-static" style="padding:0 !important;margin: 7px 0 0 0;">Active</p>
          </div>
        </div>
        
        <div class="form-group ">
          <label for="inputPassword3" class="col-sm-3 control-label"></label>
          <div class="col-sm-4">
           <input type="checkbox" required> I accept all <a href="#">Terms and Conditions</a>
          </div>
        </div>
        <div class="form-group ">
          <label for="inputPassword3" class="col-sm-3 control-label"></label>
          <div class="col-sm-4" id="captcha_pl">
<!--           <img src="img/recaptcha.jpg" alt="">-->
           <?php echo $this->_tpl_vars['captchawidget']; ?>

          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label" style="color:#fff;">.</label>
          <div class="col-sm-4">
            <input type="submit" class="form-control" style="text-align:center !important; color:#fff !important;" id="inputPassword3" name="btn_signup" value="Sign up and Continue" required>
          </div>
        </div>
        
      </form>
    </div>