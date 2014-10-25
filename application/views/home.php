<style type="text/css">
  .login-img {
  	height: 65px;
  	width: 185px;
  	padding-top: 10px;
  }
  .login-container{
  	width:500px;
  	text-align: center;
  	margin:0 auto;
  }
  .submit-button{
  	background: #1ED085 no-repeat;
	border-radius: 0px !important;
	width: 54% !important;
	cursor: pointer;
	-webkit-appearance: button;
	height: 38px !important;
	font-size: 16px;
	font-weight: bolder;
	color: #ffffff;
	text-shadow: none !important;
  }
  .form-field{
  	padding: 4px 6px;
	margin-bottom: 10px;
	font-size: 14px;
	line-height: 20px;
	color: #555555;
	vertical-align: middle;
	width: 50%;
	height: 30px;
	border-radius: 0;
  }
</style>
<div class="home-main-container">
  <div class="login"><a href="#" class="login-link">Login</a></div> 
  <div class="login-popup-content" id="login-popup" style="display:none;">
  <div class="login-container" id="login-container">
   <div class="login-logo-container">
       <div><img src="<?php echo base_url('/img/web-images/logo.png')?>" alt="logo" class="login-img"></div>
   </div>
  <div class="login-form">
   <div id="logindiv"> 
       <p><input type="name" class="form-field" placeholder="User ID"></p>
	   <p><input type="password" class="form-field" placeholder="Password"></p>
       <p id="lower">
	      <input type="submit" value="SIGN IN" class="submit-button">
		</p>
    </div>
  </div>
</div>
</div>
     
</div>


<script type="text/javascript">
  $(document).ready(function() {
   $('.login-link').bind('click', function(e) {
        $.fancybox({ 
                 type:'inline',
                content:$("#login-popup").html()
         }); 
     });
  });
  
</script>