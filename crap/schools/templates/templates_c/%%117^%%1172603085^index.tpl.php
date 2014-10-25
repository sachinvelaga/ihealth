<?php /* Smarty version 2.6.0, created on 2014-07-03 10:42:52
         compiled from index.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Innovedic e-health </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Direction-Aware Hover Effect with CSS3 and jQuery" />
        <meta name="keywords" content="hover, css3, jquery, effect, direction, aware, depending, thumbnails" />
        <meta name="author" content="Codrops" />
        <link rel="icon" href="../favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<?php echo '
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/mmeenuu.css" />
<script type="text/javascript" src="../js/jquery.min.js"></script>
 <script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script>
<link href="../css/reveal.css" rel="stylesheet" >
<script type="text/javascript" src="../js/jquery.reveal.js"></script>
'; ?>
 
    </head>
    
    <body>
<div style="width:100%; overflow: hidden;">
    	<div style="width:85%; height:700px; float:left;border-right:4px solid #a5c451; position:absolute; overflow:hidden;">
        	<div style="100%; min-height: 90px;">
            	<div style="width:30%; float:left;height:90px;">
                <a href="../index.php"><img class="image-logo" alt="hareesh vadugula" src="../images/logo1 copy.png"></a>
                </div>
            </div>
            <div style="width:100%;min-height:500px; border-top:4px solid #a5c451; overflow: hidden;">
            	<div style="width:100%; margin: 20px;"> <?php echo $this->_tpl_vars['account']; ?>
</div>
            </div>
        </div>
    	<div style="width:14%; float:right; position:fixed; top:0; right:0;">
       <?php echo $this->_tpl_vars['user']; ?>
 
        </div>
    </div>
<?php echo '
<style type="text/css">

#footer {
   position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:84%;
   margin-left: 73px !important;
   border-top: 4px solid #a5c451 !important;
   background:#fff !important;
}

/* IE 6 */
* html #footer {
   position:absolute;
   margin-left: 73px !important;
   width:84% !important;
   top:expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+\'px\');
}
</style>
<script type="text/javascript">
$( window ).load(function() {
$( \'#acctab\' ).attr(\'class\',\'sactive\');
});
</script>
'; ?>


    </body>
</html>