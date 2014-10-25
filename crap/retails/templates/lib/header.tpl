 {literal}
 
        <link rel="stylesheet" type="text/css" href="css/log.css"/>
 {/literal}
 <div class="container-ibc"> 
    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header" style="width:30%;float:left;">
        <div class="logo-ibc"> <a href="index.php"><img class="img-responsive" src="images/logo.png" alt="iBC" style="max-width:100%;height:100px;margin-left:125px;"></a> </div>
      </div>
      <div id="main-menu" class="navbar-collapse collapse">
     
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--header area -->
    <div class="navigation hide-below-767">
      <div id="signin-block" style="width:50%;float:right;">
   
               <ul style="margin-top:40px;">
          
	{if $ses_id}
    
    <li style="float:right;margin-right:110px;"><a href="logout.php" style="color:#168ECE !important;" class="myButton">Log Out</a></li>
	<li style="float:right;margin-right:20px;"><a href="#" style="color:#168ECE !important;" class="myButton">{$user}</a></li>
    
	{else}
	   
    <li style="float:right;margin-right:170px;"><a href="register.php" style="color:#168ECE !important;" class="myButton">Register</a></li>
    <li style="float:right;margin-right:-105px;"><a href="login.php" style="color:#168ECE !important;" class="myButton">Log In</a></li>
   </div>
{/if}
        </ul>
           
         
      </div>
    </div>