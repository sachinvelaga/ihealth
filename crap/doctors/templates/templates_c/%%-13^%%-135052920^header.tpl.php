<?php /* Smarty version 2.6.0, created on 2014-06-13 09:08:54
         compiled from header.tpl */ ?>
<?php echo '
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery.min.js"></script>
 <script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script>
<link href="../css/reveal.css" rel="stylesheet" >
<script type="text/javascript" src="../js/jquery.reveal.js"></script>
'; ?>

<div style="width:100%">
<div style="width:4%; float:left; height:70px;">&nbsp;</div>
<div class="header">
<div class="logo">
<a href="../index.php"><img src="../images/logo1 copy.png" alt="hareesh vadugula" class="image-logo"></a>
</div>
<?php if ($this->_tpl_vars['ses_id']): ?>
<div class="header-container">
<div id="connections-menu">
            <ul id="connect-ul" style="float:right;"> 
              <!--<li class="active"><a data-toggle="tab" href="#tab_all">All</a></li>
              <li><a data-toggle="tab" href="#tab_connections">Connections</a></li>
              <li><a data-toggle="tab" href="#tab_tracker">Tracker</a></li>-->
              <li><div style="width:35px;height:35px;margin-top:16px;margin-right:2px;"><img src="../profilepics/<?php echo $this->_tpl_vars['ses_image']; ?>
"></div></li>
			  <li style="margin-top:15px;"><a href="index.php" data-original-title=""><?php echo $this->_tpl_vars['logged_user']; ?>
</a></li>
			  <li style="margin-top:15px;"><a href="logout.php" data-original-title="Log Out">Log Out</a></li>
            </ul>   
			<!-- customize utter -->
			
			<!-- end customize utter -->         
            <div class="clear"></div>
          </div>
		  </div>
		  <?php endif; ?>
</div>
<div style="width:4%; float:right;height:70px;">&nbsp;</div>
</div>