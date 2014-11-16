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
<div id="layout">
    <header class="site-header">
        <h1 class="logo">
            <img src="../img/logo.png">
        </h1>
        <nav class="site-nav">
            <a href="#">Who are we?</a>
            <a href="#">Contact Us</a>
            <a href="#" class="login-link">Login</a>
        </nav>
    </header>
    <nav class="carousel">
        <div class="items">
            <div class="item fade-in" data-id="eye"></div>
            <div class="item" data-id="ear"></div>
            <div class="item" data-id="teeth"></div>
            <div class="item" data-id="lungs"></div>
            <div class="item" data-id="brain"></div>
        </div>
        <div class="index">
            <span data-id="eye"></span>
            <span data-id="ear"></span>
            <span data-id="teeth"></span>
            <span data-id="lungs"></span>
            <span data-id="brain"></span>
        </div>
    </nav>
</div>
<div class="login-popup-content" id="login-popup" style="display:none;">
  <script type="text/javascript">
    $(".fancybox-inner input.submit-button").on("click",function(){
       alert('123');
   });
  </script>
  <div class="login-container" id="login-container">
   <div class="login-logo-container">
       <div><img src="<?php echo base_url('/img/web-images/logo.png')?>" alt="logo" class="login-img"></div>
   </div>
  <div class="login-form">
   <div id="logindiv"> 
       <p><input type="name" class="form-field" placeholder="User ID"></p>
     <p><input type="password" class="form-field" placeholder="Password"></p>
       <p id="lower">
        <input type="button" value="SIGN IN" class="submit-button">
    </p>
    </div>
  </div>
</div>
</div>


