<?php /* Smarty version 2.6.0, created on 2014-05-17 08:41:26
         compiled from login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo '

    <title>Login</title>
<script type="text/javascript">
$(document).on(\'click\',\'#jsubmit\',function(e){
   var userid 	= $.trim($(\'#userid\').val());
   var pass = $.trim($(\'#pass\').val());
 
         if(userid.length == 0){
          $(\'.jadd_user_err\').html(\'Invalid ID!!!!\').show(); 
         alert(\'Invalid ID\');
		 return false;
       }else if(pass.length == 0){
           $(\'.jadd_user_err\').html(\'Please Enter the password!!\').show();
			alert(\'Please Enter the password!!\');
          return false;
       }else{
	      e.preventDefault();
	             $.ajax({
                  url:"logincheck.php",
                  type:"POST",
				  data:{userid:userid,pass:pass},
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                               if(trim_resp ==\'0\'){
							$(\'.jadd_user_err\').html(\'Wrong Credentials!!!\').show();
							alert(\'Wrong Credentials!!!\');
				      return false;
								}else if(trim_resp == \'1\'){
							  location.href = "index.php";
                                       setTimeout(function() {
										 $(\'.jadd_user_err\').html(\'\');
					}, 1); 
                               }
                        }    
                  });
	   }     
}); 
</script>
'; ?>

     
      <form action="#" method="post">
  <div class="container" style="margin-top;20px;">
 
    <div class="row">
      <div class="span4 offset4 well" style="margin-top:160px;">
<div class="jadd_user_err" style="align:center;display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
 
        <legend>Please Sign In</legend>

        <input type="text" id="userid" class="span4" name="id" placeholder="User ID" required>
        <input type="password" id="pass" class="span4" name="pass" placeholder="Password" required>

        <!--<label class="checkbox">
          <input type="checkbox" name="remember" value="1"> Remember Me
        </label>-->

        <button type="submit" id="jsubmit" name="submit" class="btn btn-info btn-block">Sign in</button>
		    </form>
		
      </div>
    </div>
	</div>