<?php /* Smarty version Smarty-3.1.19, created on 2014-10-14 08:42:43
         compiled from "templates/lib/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1850092401543ce203bc8fa2-20122936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4c36d219246a9c842116d446a88077a5537b3cb' => 
    array (
      0 => 'templates/lib/index.tpl',
      1 => 1404421946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1850092401543ce203bc8fa2-20122936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'account' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543ce203c1a897_13657144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543ce203c1a897_13657144')) {function content_543ce203c1a897_13657144($_smarty_tpl) {?><!DOCTYPE html>
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

<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/mmeenuu.css" />
<script type="text/javascript" src="../js/jquery.min.js"></script>
 <script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script>
<link href="../css/reveal.css" rel="stylesheet" >
<script type="text/javascript" src="../js/jquery.reveal.js"></script>
 
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
            	<div style="width:100%; margin: 20px;"> <?php echo $_smarty_tpl->tpl_vars['account']->value;?>
</div>
            </div>
        </div>
    	<div style="width:14%; float:right; position:fixed; top:0; right:0;">
       <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 
        </div>
    </div>

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
   top:expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+'px');
}
</style>
<script type="text/javascript">
$( window ).load(function() {
$( '#acctab' ).attr('class','sactive');
});
</script>


    </body>
</html><?php }} ?>
