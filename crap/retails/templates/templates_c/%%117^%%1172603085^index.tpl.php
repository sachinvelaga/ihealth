<?php /* Smarty version 2.6.0, created on 2014-04-29 21:32:53
         compiled from index.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Saturn Life</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Direction-Aware Hover Effect with CSS3 and jQuery" />
        <meta name="keywords" content="hover, css3, jquery, effect, direction, aware, depending, thumbnails" />
        <meta name="author" content="Codrops" />
		<?php echo '
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link href=\'http://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic\' rel=\'stylesheet\' type=\'text/css\' />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <style type="text/css">
<!--
.style1 {
	font-size: larger;
	font-weight: bold;
}
-->
        </style>
<noscript><link rel="stylesheet" type="text/css" href="css/noJS.css"/></noscript>
        <link rel="stylesheet" type="text/css" href="css/log.css"/>
        <link rel="stylesheet" type="text/css" href="css/style1.css"/>
   	'; ?>

    </head>
    
    <body>
    <div class="bd">
    	<a href="login.php" style="color:#168ECE !important;float:right;margin-right:20px;margin-top:30px;">Log In</a>
    	<a href="register.php" style="color:#168ECE !important;float:right;margin-right:10px;margin-top:30px;">Sign Up</a>
    </div>
	<div>
		

	  <ul class="da-thumbs">
					
	    		<li><div id="wrapper">
			  	<a href="#" class="pic">
			  	<img src="images/Layer3.png" class="hover" />
              	<h2 class="text"><a href="jobs/index.php"><span class="style1">Doctor's Forum</span></a></h2>
   		</a></li>
                        
  <li><div id="wrapper">
			  	<a href="#" class="pic">
			  	<img src="images/Layer3copy.png" class="hover" />
   	  <h2 class="text"><a href="#"><span class="style1">Matrimony</span></a></h2>
	  </a></li>
                        
  <li><div id="wrapper">
			  	<a href="#" class="pic">
			  	<img src="images/Layer3copy2.png" class="hover" />
   	  <h2 class="text"><a href="#"><span class="style1">Jobs Portal</span></a></h2>
	  </a></li>
                        
  <li><div id="wrapper">
			  	<a href="#" class="pic">
			  	<img src="images/Layer3copy3.png" class="hover" />
   	  <h2 class="text"><a href="#"><span class="style1">Retail</span></a></h2>
      </a></li>
                        
				</ul>
                
		  
    </div>
        <div id="ctr">
        
        <img src="images/Layer1.png">    </div>
		<?php echo '
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(\' #da-thumbs > li \').each( function() { $(this).hoverdir(); } );

			});
		</script>
		'; ?>

    </body>
</html>