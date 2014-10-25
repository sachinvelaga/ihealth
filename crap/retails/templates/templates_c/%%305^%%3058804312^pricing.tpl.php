<?php /* Smarty version 2.6.0, created on 2013-12-05 01:07:56
         compiled from pricing.tpl */ ?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<!-- <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet">-->
<link href="css/StyleSheet.css" type="text/css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<?php echo '
<style>
.page-header h2 {
    height: 24px !important;
    line-height: 44px !important;
    margin: 0 !important;
    padding: 0 !important;
}
</style>
'; ?>

</head>

 <div class="content column-full container">
      <div id="home-content" class="column-full">
        <div class="heading column-full">
          <h2 style="clear:both; width:100%;"> Pricing for iBC Plans</h2>
          <h3>You can choose and upgrade your plan after you register for FREE TRIAL.</h3> </div>
        <div class="row content-columns content-columns1">
          
          <div class="col-md-4 content-list">
            <div class="page-header hed_silv">
              <h2> Silver Plan </h2>
            </div>
            <div class="hed_silv_user">
            	<h2>1-100 users</h2>
                <div class="mont_plan">
                	<div class="mont">
                    <p>Monthly Plan</p>
                    
                    <h3> &#163; 5<sup>.95</sup></h3>
                    <p>/month</p>
                    </div>
                    <div class="year">
                    	<p>Yearly Plan</p>
                         <h3> &#163; 55<sup>.95</sup></h3>
                    <p>/year</p>
                    </div>
                </div>
            </div>
          </div>
          
          <div class="col-md-4 content-list">
            <div class="page-header hed_silv Gold_01">
              <h2>Gold Plan</h2>
            </div>
            <div class="hed_silv_user">
            	<h2>101-500 users</h2>
                <div class="mont_plan">
                	<div class="mont">
                    <p>Monthly Plan</p>
                     <h3> &#163; 7<sup>.95</sup></h3>
                    <p>/month</p>
                    </div>
                    <div class="year">
                    	<p>Yearly Plan</p>
                         <h3> &#163; 77<sup>.95</sup></h3>
                    <p>/year</p>
                    </div>
                </div>
            </div>
            
          </div>
          <div class="col-md-4 content-list">
            <div class="page-header hed_silv platinum_01">
              <h2>Platinum Plan </h2>
            </div>
            <div class="hed_silv_user">
            	<h2>500 &amp; More users</h2>
                <div class="mont_plan">
                	<div class="mont">
                    <p>Monthly Plan</p>
                     <h3> &#163; 9<sup>.95</sup></h3>
                    <p>/month</p>
                    </div>
                    <div class="year">
                    	<p>Yearly Plan</p>
                         <h3> &#163; 99<sup>.95</sup></h3>
                    <p>/year</p>
                    </div>
                </div>
            </div>
            
          </div>
        </div>
           <?php if (! $this->_tpl_vars['ses_varid']): ?>
	    <div class="reg">
           <a class="btn button-blue month_but" href="createprofile.php" role="button" style="margin:30px 0 0 0;">Click Here To Register</a>
         </div>
	  <?php endif; ?>
      </div>
    </div>