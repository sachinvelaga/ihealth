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
  	margin-top: 100px;
    border : 1px solid #FF8454;
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
<div class="login-container">
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
<script type="text/javascript">
$(document).ready(function(){
	$(".submit-button").click(function(){
        alert('hi');
	})
})


</script>