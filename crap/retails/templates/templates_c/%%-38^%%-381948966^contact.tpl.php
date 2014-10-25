<?php /* Smarty version 2.6.0, created on 2013-12-02 09:46:19
         compiled from contact.tpl */ ?>
<link href="cssnew/bootstrap.css" type="text/css" rel="stylesheet">
<!-- <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet">-->
<link href="cssnew/StyleSheet.css" type="text/css" rel="stylesheet">
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.js"></script>
 <div class="content column-full container">
      <div class="page-header">
	  <?php if ($this->_tpl_vars['var_msg']): ?>
	  	<span class="error_msg">
			<?php echo $this->_tpl_vars['var_msg']; ?>

		</span>
		<?php endif; ?>
        <h1>Contact Us</h1>
      </div>
      
      <div class="col-md-7 content-list contact_input">
      <form class="form-horizontal" role="form" method="post" action="contact.php">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Full Name</label>
          <div class="col-sm-4">
            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="" required>
          </div>
          
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Company Name</label>
          <div class="col-sm-4">
            <input type="text" name = "company" class="form-control" id="inputEmail3" placeholder="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Job Title</label>
          <div class="col-sm-4">
            <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-4">
            <input type="email" name="email" class="form-control" id="inputPassword3" placeholder="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Phone</label>
          <div class="col-sm-4">
            <input type="text" name = "phone" class="form-control" id="inputPassword3" placeholder="" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Country</label>
          <div class="col-sm-4">
           <select class="form-control" id="form_status2">
            	<?php if (count($_from = (array)$this->_tpl_vars['data_country'])):
    foreach ($_from as $this->_tpl_vars['country_all']):
?>
								<option value="<?php echo $this->_tpl_vars['country_all']['countryId']; ?>
" <?php if ($this->_tpl_vars['country_all']['countryId'] == $this->_tpl_vars['countryId']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['country_all']['printable_name']; ?>
</option>
			<?php endforeach; unset($_from); endif; ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Message</label>
          <div class="col-sm-4">
            <textarea name= "message" cols="10" rows="10" class="form-control" id="inputPassword3" style="min-height:100px;" required></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-4">
            <button type="submit" name="btn_submit" class="btn button-blue column-full">Submit</button>
          </div>
        </div>
      </form>
     </div> 
     
      <div class="col-md-4 content-list list-left ">
      <h3 style="margin-top:0px;">Location</h3>
      <p>Transputec Computers plc</p>
      <p>Transputec House</p>
      <p>19 Heather Park Drive</p>
      <p>Wembley</p>
      <p>London, HA0 1SS</p>
      <h6>Email us >></h6>
      <p>enquiries@transputec.com</p>
      <p>support@transputec.com</p>
      <h6>Call us >></h6>
      <p>+44 (0) 20 8584 1400</p>
      </div>
      
    </div>