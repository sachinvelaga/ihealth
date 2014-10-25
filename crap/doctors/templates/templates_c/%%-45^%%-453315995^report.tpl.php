<?php /* Smarty version 2.6.0, created on 2014-07-09 13:25:32
         compiled from report.tpl */ ?>
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
<link href="../css/table.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/mmeenuu.css" />
<script type="text/javascript" src="../js/jquery.min.js"></script>
 <script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script>
<link href="../css/reveal.css" rel="stylesheet" >
<script type="text/javascript" src="../js/jquery.reveal.js"></script>
<script type="text/javascript">
function classlist(){
 var selctedschool = $(\'#selctedschool\').val();
 var schoolid 	= $.trim($(\'#school-div\').val());
 $(\'#standard_\'+selctedschool).hide();
  $(\'#standard_\'+schoolid).show();
  $(\'#classnos\').hide();
  $(\'#selctedschool\').val(schoolid);
  if(schoolid == 0){
$(\'#main-doc\').hide();
  $(\'#classnos\').show();
   $(\'#section-div\').hide();
  }
}
function sectionslist(){
 var schoolid 	= $.trim($(\'#school-div\').val());
 var classno = $.trim($(\'#standard_\'+schoolid).val());
 $.ajax({
                  url:"sections.php",
                  type:"POST",
				  data:{schoolID:schoolid,classno:classno},
                  success:function(resp){
				$(\'#section-div\').html(resp);
                        }    
                  });
 
}

function bloodv(){
	$(\'#activediv\').val(\'view\');
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"bloodviewed.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-blood\').html(resp);
                        }    
                  });
 
}
function blooduv(){
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"bloodunviewed.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-blood\').html(resp);
                        }    
                  });
 
}
function bloodrv(){
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"bloodreconsult.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-blood\').html(resp);
                        }    
                  });
 
}

function dentalv(){
	$(\'#activediv\').val(\'view\');
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"dentalviewed.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-blood\').html(resp);
                        }    
                  });
 
}
function dentaluv(){
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"dentalunviewed.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-blood\').html(resp);
                        }    
                  });
 
}
function dentalrv(){
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"dentalreconsult.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-blood\').html(resp);
                        }    
                  });
 
}
function visionv(){
	$(\'#activediv\').val(\'view\');
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"visionviewed.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-vision\').html(resp);
                        }    
                  });
 
}
function visionuv(){
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"visionunviewed.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-vision\').html(resp);
                        }    
                  });
 
}
function visionrv(){
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"visionreconsult.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-vision\').html(resp);
                        }    
                  });
 
}
function hearv(){
	$(\'#activediv\').val(\'view\');
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"hearingviewed.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-hearing\').html(resp);
                        }    
                  });
 
}
function hearuv(){
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"hearingunviewed.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-hearing\').html(resp);
                        }    
                  });
 
}
function hearrv(){
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"hearingreconsult.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-hearing\').html(resp);
                        }    
                  });
 
}
function fitnessv(){
	$(\'#activediv\').val(\'view\');
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"fitnessviewed.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-fitness\').html(resp);
                        }    
                  });
 
}
function fitnessuv(){
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"fitnessunviewed.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-fitness\').html(resp);
                        }    
                  });
 
}
function fitnessrv(){
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"fitnessreconsult.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-fitness\').html(resp);
                        }    
                  });
 
}
function pftv(){
	$(\'#activediv\').val(\'view\');
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"pftviewed.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-pft\').html(resp);
                        }    
                  });
 
}
function pftuv(){
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"pftunviewed.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-pft\').html(resp);
                        }    
                  });
 
}
function pftrv(){
 var person 	= $(\'#candidate\').val();
 $.ajax({
                  url:"pftreconsult.php",
                  type:"POST",
				  data:{person:person},
                  success:function(resp){
				$(\'#viewed-pft\').html(resp);
                        }    
                  });
 
}
function dentaldiv(){
	var x = $(\'#candidate\').val();
	$(\'#dental_\'+x).attr(\'class\',\'green1\');
	$(\'#vision_\'+x).attr(\'class\',\'\');
	$(\'#hear_\'+x).attr(\'class\',\'\');
	$(\'#pft_\'+x).attr(\'class\',\'\');
	$(\'#fit_\'+x).attr(\'class\',\'\');
	$(\'#eye_\'+x).attr(\'class\',\'\');
	$(\'#statusdiv\').val(\'dental\');
	$(\'#view-act\').attr(\'class\',\'active\');
$(\'#unview-act\').attr(\'class\',\'\');
$(\'#review-act\').attr(\'class\',\'\');
	$(\'#viewed-blood\').show();
	$(\'#report-act\').show();
	$(\'#viewed-vision\').hide();
	$(\'#viewed-hearing\').hide();
	$(\'#health_detail_1\').hide();
	$(\'#viewed-fitness\').hide();
	dentalv();
	}
	function visiondiv(){
	var x = $(\'#candidate\').val();
	$(\'#dental_\'+x).attr(\'class\',\'\');
	$(\'#pft_\'+x).attr(\'class\',\'\');
	$(\'#vision_\'+x).attr(\'class\',\'green1\');
	$(\'#hear_\'+x).attr(\'class\',\'\');
	$(\'#eye_\'+x).attr(\'class\',\'\');
	$(\'#fit_\'+x).attr(\'class\',\'\');
	$(\'#statusdiv\').val(\'vision\');
	$(\'#view-act\').attr(\'class\',\'active\');
$(\'#unview-act\').attr(\'class\',\'\');
$(\'#review-act\').attr(\'class\',\'\');
	$(\'#report-act\').show();
	$(\'#viewed-blood\').hide();
	$(\'#viewed-vision\').show();
	$(\'#viewed-hearing\').hide();
	$(\'#viewed-pft\').hide();
	$(\'#health_detail_1\').hide();
	$(\'#viewed-fitness\').hide();
	visionv();
	}
		function hearingdiv(){
	var x = $(\'#candidate\').val();
	$(\'#dental_\'+x).attr(\'class\',\'\');
	$(\'#vision_\'+x).attr(\'class\',\'\');
	$(\'#pft_\'+x).attr(\'class\',\'\');
	$(\'#hear_\'+x).attr(\'class\',\'green1\');
	$(\'#fit_\'+x).attr(\'class\',\'\');
	$(\'#eye_\'+x).attr(\'class\',\'\');
	$(\'#statusdiv\').val(\'hearing\');
	$(\'#view-act\').attr(\'class\',\'active\');
$(\'#unview-act\').attr(\'class\',\'\');
$(\'#review-act\').attr(\'class\',\'\');
	$(\'#report-act\').show();
	$(\'#viewed-blood\').hide();
	$(\'#viewed-vision\').hide();
	$(\'#viewed-hearing\').show();
	$(\'#viewed-pft\').hide();
	$(\'#health_detail_1\').hide();
	$(\'#viewed-fitness\').hide();
	hearv();
	}
		function fitnessdiv(){
	var x = $(\'#candidate\').val();
	$(\'#dental_\'+x).attr(\'class\',\'\');
	$(\'#vision_\'+x).attr(\'class\',\'\');
	$(\'#hear_\'+x).attr(\'class\',\'\');
	$(\'#eye_\'+x).attr(\'class\',\'\');
	$(\'#pft_\'+x).attr(\'class\',\'\');
	$(\'#fit_\'+x).attr(\'class\',\'green1\');
	$(\'#statusdiv\').val(\'fitness\');
	$(\'#view-act\').attr(\'class\',\'active\');
$(\'#unview-act\').attr(\'class\',\'\');
$(\'#review-act\').attr(\'class\',\'\');
	$(\'#report-act\').show();
	$(\'#viewed-blood\').hide();
	$(\'#viewed-vision\').hide();
	$(\'#viewed-hearing\').hide();
	$(\'#viewed-pft\').hide();
	$(\'#health_detail_1\').hide();
	$(\'#viewed-fitness\').show();
	fitnessv();
	}
			function eyediv(){
	var x = $(\'#candidate\').val();
	$(\'#dental_\'+x).attr(\'class\',\'\');
	$(\'#vision_\'+x).attr(\'class\',\'\');
	$(\'#hear_\'+x).attr(\'class\',\'\');
	$(\'#eye_\'+x).attr(\'class\',\'green1\');
	$(\'#fit_\'+x).attr(\'class\',\'\');
	$(\'#pft_\'+x).attr(\'class\',\'\');
	$(\'#statusdiv\').val(\'fitness\');
	$(\'#view-act\').attr(\'class\',\'active\');
$(\'#unview-act\').attr(\'class\',\'\');
$(\'#review-act\').attr(\'class\',\'\');
	$(\'#report-act\').show();
	$(\'#viewed-blood\').hide();
	$(\'#viewed-vision\').hide();
	$(\'#viewed-hearing\').hide();
	$(\'#viewed-fitness\').hide();
	$(\'#viewed-pft\').hide();
	$(\'#health_detail_1\').show();
	
	}
				function pftdiv(){
	var x = $(\'#candidate\').val();
	$(\'#dental_\'+x).attr(\'class\',\'\');
	$(\'#vision_\'+x).attr(\'class\',\'\');
	$(\'#hear_\'+x).attr(\'class\',\'\');
	$(\'#eye_\'+x).attr(\'class\',\'\');
	$(\'#pft_\'+x).attr(\'class\',\'green1\');
	$(\'#fit_\'+x).attr(\'class\',\'\');
	$(\'#statusdiv\').val(\'pft\');
	$(\'#view-act\').attr(\'class\',\'active\');
$(\'#unview-act\').attr(\'class\',\'\');
$(\'#review-act\').attr(\'class\',\'\');
	$(\'#report-act\').show();
	$(\'#viewed-blood\').hide();
	$(\'#viewed-vision\').hide();
	$(\'#viewed-hearing\').hide();
	$(\'#viewed-fitness\').hide();
	$(\'#viewed-pft\').show();
	$(\'#health_detail_1\').hide();
	pftv();
	}
	

function viewedsection(){
	$(\'#view-act\').attr(\'class\',\'active\');
$(\'#unview-act\').attr(\'class\',\'\');
$(\'#review-act\').attr(\'class\',\'\');
	var section = $(\'#statusdiv\').val();
	$(\'#activediv\').val(\'view\');
	if(section == \'dental\'){
		 dentalv();
		}else if(section == \'vision\'){
			visionv();
			}else if(section == \'hearing\'){
			hearv();
			}else if(section == \'fitness\'){
			fitnessv();
			}else if(section == \'pft\'){
			pftv();
			}
	}
	function unviewedsection(){
		$(\'#activediv\').val(\'unview\');
		$(\'#view-act\').attr(\'class\',\'\');
$(\'#unview-act\').attr(\'class\',\'active\');
$(\'#review-act\').attr(\'class\',\'\');
	var section = $(\'#statusdiv\').val();
	if(section == \'dental\'){
		 dentaluv();
		}else if(section == \'vision\'){
			visionuv();
			}else if(section == \'hearing\'){
			hearuv();
			}else if(section == \'fitness\'){
			fitnessuv();
			}else if(section == \'pft\'){
			pftuv();
			}
	}
function reviewedsection(){
	$(\'#activediv\').val(\'review\');
	$(\'#view-act\').attr(\'class\',\'\');
$(\'#unview-act\').attr(\'class\',\'\');
$(\'#review-act\').attr(\'class\',\'active\');
	var section = $(\'#statusdiv\').val();
	if(section == \'dental\'){
		 dentalrv();
		}else if(section == \'vision\'){
			visionrv();
			}else if(section == \'hearing\'){
			hearrv();
			}else if(section == \'fitness\'){
			fitnessrv();
			}else if(section == \'pft\'){
			pftrv();
			}
	}
function getstudents(){
 var schoolid 	= $.trim($(\'#school-div\').val());
 var classno = $.trim($(\'#standard_\'+schoolid).val());
 var section = $.trim($(\'#person-sec\').val());
 if(section <= 0){
	  $(\'#main-doc\').hide();
	  return false;
	 }
 if(section == "first"){
	 presen_sec = \'1\';
	 }else{
		 presen_sec = section;
		 }
 $.ajax({
                  url:"getstudents.php",
                  type:"POST",
				  data:{schoolid:schoolid,classno:classno,section:presen_sec},
                  success:function(resp){
					  $(\'#main-doc\').show();
				$(\'#test-acor\').html(resp);
                        }    
                  });
	}
function studentstore(x){
	$(\'#candidate\').val(x);
	var prevacc = $(\'#prev-acc\').val();
	if(prevacc == null||prevacc==\'\'){
		$("#acc_"+x).attr(\'class\',\'active\');
		$(\'#prev-acc\').val(x);
		
		}else{
			$("#acc_"+prevacc).attr(\'class\',\'\');
			$("#acc_"+x).attr(\'class\',\'active\');
			$(\'#prev-acc\').val(x);
			}
	
	}
function commentupdate(y){
	var comment = $(\'#commentbox_\'+y).val();
	var commenton = $(\'#statusdiv\').val();
	var actsection = $(\'#activediv\').val();
	var x = $(\'#cmnttype_\'+y).val();
	var u = $(\'#updatetype_\'+y).val();
	if(comment.length==0){
		alert("Please input the comment!!!");
		return false;
		}

			var cstat = "1";
			
	 $.ajax({
                  url:"commentupdt.php",
                  type:"POST",
				  data:{mainid:y,comment:comment,commenton:commenton,cstat:cstat},
                  success:function(resp){
					  var trim_resp = $.trim(resp);
					  if(trim_resp == \'1\'){
						  if(commenton=="dental"){
							  if(actsection == "view"){
								  dentalv();
								  }else if(actsection == "unview"){
								  dentaluv();
								  }else  if(actsection == "review"){
								  dentalrv();
								  }
							  }else if(commenton=="vision"){
									  $(\'#myModal\').trigger(\'reveal:close\');
								    if(actsection == "view"){
								  visionv();
								  }else if(actsection == "unview"){
								  visionuv();
								  }else  if(actsection == "review"){
								  visionrv();
								  }
								  }else if(commenton=="hearing"){
								    if(actsection == "view"){
								  hearv();
								  }else if(actsection == "unview"){
								  hearuv();
								  }else  if(actsection == "review"){
								  hearrv();
								  }
								  }else if(commenton=="fitness"){
								    if(actsection == "view"){
								  fitnessv();
								  }else if(actsection == "unview"){
								  fitnessuv();
								  }else  if(actsection == "review"){
								  fitnessrv();
								  }
								  }else if(commenton=="pft"){
									  $(\'#myModal\').trigger(\'reveal:close\');
								    if(actsection == "view"){
										
								  pftv();
								  }else if(actsection == "unview"){
								  pftuv();
								  }else  if(actsection == "review"){
								  pftrv();
								  }
								  }
						  }
                        }    
                  });
	}
function view(x){
	$(\'.pftcomment\').attr("id","commentbox_"+x);
	var comment = $(\'#pftcomment_\'+x).val();
	$(\'#commentbox_\'+x).val(comment);
	if(comment.length == 0){
		$(\'#commenttype\').html(\'<a href="javascript:" onclick="commentupdate(\'+x+\')">Comment</a>\');
		}else{
			$(\'#commenttype\').html(\'<a href="javascript:" onclick="commentupdate(\'+x+\')">Update</a></br><a href="javascript:" onclick="commentreconsult(\'+x+\')">Reconsult</a>\');
			}
							
$(\'.reveal-modal\').css({"width":"90%","margin-left":"2%"});
							$(\'#content\').html($(\'#pftreport_\'+x).html());
							$(\'#myModal\').reveal({ animation : \'none\'});
	}
	function viewvision(x){
	$(\'.pftcomment\').attr("id","commentbox_"+x);
	var comment = $(\'#visioncomment_\'+x).val();
	$(\'#commentbox_\'+x).val(comment);
	if(comment.length == 0){
		$(\'#commenttype\').html(\'<a href="javascript:" onclick="commentupdate(\'+x+\')">Comment</a>\');
		}else{
			$(\'#commenttype\').html(\'<a href="javascript:" onclick="commentupdate(\'+x+\')">Update</a></br><a href="javascript:" onclick="commentreconsult(\'+x+\')">Reconsult</a>\');
			}
							
$(\'.reveal-modal\').css({"width":"90%","margin-left":"2%"});
							$(\'#content\').html($(\'#visionreport_\'+x).html());
							$(\'#myModal\').reveal({ animation : \'none\'});
	}
function commentreconsult(y){
	var comment = $(\'#commentbox_\'+y).val();
	var commenton = $(\'#statusdiv\').val();
	var actsection = $(\'#activediv\').val();
	var x = $(\'#cmnttype_\'+y).val();
	var u = $(\'#updatetype_\'+y).val();
	if(comment.length==0){
		alert("Please input the comment!!!");
		return false;
		}
		var cstat = "2";
	
	 $.ajax({
                  url:"commentupdt.php",
                  type:"POST",
				  data:{mainid:y,comment:comment,commenton:commenton,cstat:cstat},
                  success:function(resp){
					  var trim_resp = $.trim(resp);
					  if(trim_resp == \'1\'){
						  if(commenton=="dental"){
							  if(actsection == "view"){
								  dentalv();
								  }else if(actsection == "unview"){
								  dentaluv();
								  }else  if(actsection == "review"){
								  dentalrv();
								  }
							  }else if(commenton=="vision"){
									  $(\'#myModal\').trigger(\'reveal:close\');
								    if(actsection == "view"){
								  visionv();
								  }else if(actsection == "unview"){
								  visionuv();
								  }else  if(actsection == "review"){
								  visionrv();
								  }
								  }else if(commenton=="hearing"){
								    if(actsection == "view"){
								  hearv();
								  }else if(actsection == "unview"){
								  hearuv();
								  }else  if(actsection == "review"){
								  hearrv();
								  }
								  }else if(commenton=="fitness"){
								    if(actsection == "view"){
								  fitnessv();
								  }else if(actsection == "unview"){
								  fitnessuv();
								  }else  if(actsection == "review"){
								  fitnessrv();
								  }
								  }else if(commenton=="pft"){
									  $(\'#myModal\').trigger(\'reveal:close\');
								    if(actsection == "view"){
										
								  pftv();
								  }else if(actsection == "unview"){
								  pftuv();
								  }else  if(actsection == "review"){
								  pftrv();
								  }
								  }
						  }
                        }    
                  });
	}
	$(document).on(\'click\',\'#updatelink\',function(){
		$(\'#updatetype\').val(\'update\');
		
		});
			$(document).on(\'click\',\'#reconsultlink\',function(){
		$(\'#updatetype\').val(\'reconsult\');
		
		});
</script>
<script src="js/prefixfree.js" type="text/javascript"></script>
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
            	<div style="width:100%; margin: 20px;">
                
                <div id="health-tab" style="height:auto;padding-bottom:10px;">
<div class="container_table_details" >
	<div class="schools-div">
		<div class="school-name">
		     <div class="form-group" style="height:35px !important;weight:103% !important;">
          		<div class="col-sm-4">
            <select id="school-div" name="country" onchange="classlist()" class="form-control" required>
			
				<option value="0">Select School</option>
				<?php echo $this->_tpl_vars['school']; ?>

            </select>
         		 </div>
       		 </div>
		</div>
        <div class="class-name">
		     <div class="form-group" style="height:35px !important;weight:103% !important;">
          		<div class="col-sm-4">
		   <input type="hidden" id="selctedschool"/>
		  <?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['currdata']):
?>
	<?php echo $this->_tpl_vars['currdata']; ?>

		<?php endforeach; unset($_from); endif; ?> 
          		</div>
        	</div>
		</div>
	</div>
	<div class="sections-div">
		<div style="float:left;width:50%;">
		     <div class="form-group" style="height:35px !important;weight:103% !important;">
          <div id="section-div" class="col-sm-4">
           
		
          </div>
        </div>
		</div>
		<div id="exist" style="float:right;width:50%;">
		
		</div>
	</div>
</div>
<div id="main-doc" style="height:auto;width:100%;margin-top:40px;display:none;">
<div style="width:99%;">

<!-----Students Div Start--->
<div style="width:20%;float:left;height:300px;border:1px solid #eee;overflow:auto;margin-left:13px;border-radius:4px;padding: 2px 2px 2px 2px;">
<input id="candidate" type="hidden" value="1234">
<input id="prev-acc" type="hidden" value="">
<div id="accordian">
			
            <div id="test-acor">
            
            </div>
</div>

</div>
<!-----Students Div End--->


<!-----Report Div Start--->
<div id="report-act" style="width:77%;float:right;display:none;">
			<div class="utter-navbar main-tool">
				<div id="connections-menu">
                <input id="statusdiv" type="hidden" value="">
                <input id="updatetype" type="hidden" value="">
                <input id="activediv" type="hidden" value="">
					<ul id="connect-ul"> 
						<li id="view-act" class="active"><a onClick="viewedsection()" href="javascript:" data-original-title="">Viewed</a></li>
						<li id="unview-act"><a href="javascript:" onClick="unviewedsection()" data-original-title="">Not Viewed</a></li>
						<li id="review-act"><a href="javascript:" onClick="reviewedsection()" data-original-title="">Re-Consult</a></li>
					</ul>           
						<div class="clear"></div>
				</div>
						<div class="tab-content">
							<div id="tab-all" class="tab-pane active main-content-tab">
									<div class="live-stream"  style="width:85% !important;">
										<div class="post-title" style="padding:0 !important;margin-right: -3px !important">
											<div class="container_table_details">
													Details
											</div>
													<div class="clear"></div>

										</div>
                                        <div class="row-fluid">
										<div style="height:auto;border-radius: 0 4px 4px;border-right:0 none;margin-left:3px; margin-top:3px;">
<!-- Report Content--->

<div id="viewed-blood">
</div>
<div id="viewed-vision">

</div>
<div id="viewed-hearing">

</div>
<div id="viewed-fitness">

</div>
<div id="viewed-pft">

</div>
<!-- Report Content End--->
<!-- Vision Content --->
<div id="health_detail_1" class="container_table" style="border:none;height:auto !important;display:none;">
<div id="visionreport" class="hidereport" style="width:100%; height:auto;">
    		<div style="width:100%; height:30px; text-align:center; font-size: 16px; color:#007dc2;">
        		<p align="center"> Vision Report</p>
    		</div>
            <div style="width:100%; margin-bottom: 5px;">
        		<table style="width:100%;">
                <thead>
                	<th style="width:48%;">  <p align="center" style="color:#007dc2;">Person Details</p> </th>
                    <th style="width:48%;"> 
                <p align="center" style="color:#007dc2;">Symptoms/Findings</p> </th>
                </thead>
                <tr>
                	<td style="width:48%;"><table style="width:100%;">
				<tr style="width:100%;">
  					<td style="width:50%; border:2px solid #eee;text-align:right;">Person ID :</td>
  					<td style="width:50%; border:2px solid #eee;text-align: left; padding-left: 20px;">1234</td>
				</tr>
                <tr style="width:100%;">
  					<td style="width:50%; border:2px solid #eee;text-align:right;">Name :</td>
  					<td style="width:50%; border:2px solid #eee;text-align: left;padding-left: 20px;">Harish</td>
				</tr>
                <tr style="width:100%;">
  					<td style="width:50%; border:2px solid #eee;text-align:right;">Age/Gender :</td>
  					<td style="width:50%; border:2px solid #eee;text-align: left;padding-left: 20px;">10/Male</td>
				</tr>
                <tr style="width:100%;">
                	<td style="width:50%; border:2px solid #eee;text-align:right;">Report Generated At :</td>
  					<td style="width:50%; border:2px solid #eee;text-align: left;padding-left: 20px;">30-06-1991</td>
				</tr>
                <tr style="width:100%;">
                	<td style="width:50%; border:2px solid #eee;text-align:right;">Reported By :</td>
  					<td style="width:50%; border:2px solid #eee;text-align: left;padding-left: 20px;">Shilpa</td>
				</tr>
               </table> </td>
                    <td style="width:48%;"> <table style="width:100%;">
				<thead style="width:100%;">
  					<th style="width:50%; border:2px solid #eee;text-align:center;">Symptoms</th>
  					<th style="width:50%; border:2px solid #eee;text-align:center;">Findings</th>
				</thead>
                <tr style="width:100%; height:97px;">
  					<td style="width:50%; border:2px solid #eee;">Comments</td>
  					<td style="width:50%; border:2px solid #eee;">Comments</td>
				</tr>
               </table> </td>
                </tr>
                </table>
    		</div>
        	
            <div style="width:100%; height:200px;;">
        		<table style="width:100%;">
                	<thead>
                    	<th style="width:50%; text-align:center;color:#007dc2;border-right:4px solid #fff;"> Right Eye</th>
                        <th  style="width:50%; text-align:center;color:#007dc2;"> Left Eye</th>
                    </thead>
                    <tr>
        <td  style="width:50%; text-align:center;color:#007dc2;">
           <table style="width:100%;"> 
            <thead> 
            	<th style="width:25%; text-align:center;"></th>
            	<th style="width:25%;text-align:center;">SPH</th>
                <th style="width:25%;text-align:center;">CYL</th>
                <th style="width:25%;text-align:center;">Axis</th>
            </thead>
             <tr> 
             	<td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">Far</td>
            	<td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">-2</td>
                <td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">90</td>
                <td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">80</td>
            </tr>
             <tr> 
             	<td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">Rear</td>
            	<td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">-1</td>
                <td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">90</td>
                <td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">60</td>
            </tr>
            </table></td>
    <td  style="width:50%; text-align:center;color:#007dc2;"> 
         <table style="width:100%;"> 
            <thead>
             	<th style="width:25%;text-align:center;"></th>
            	<th style="width:25%;text-align:center;">SPH</th>
                <th style="width:25%;text-align:center;">CYL</th>
                <th style="width:25%;text-align:center;">Axis</th>
            </thead>
             <tr> 
             	<td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">Far</td>
            	<td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">-3</td>
                <td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">90</td>
                <td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">80</td>
            </tr>
             <tr> 
             	<td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">Rear</td>
            	<td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">-4</td>
                <td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">90</td>
                <td style="width:25%;text-align:center;border:1px solid #CCC;height:20px;">70</td>
            </tr>
            </table></td>
                    </tr>
                </table>
    		</div>
            <div style="width:100%; height:30px; text-align:center; font-size: 16px; color:#007dc2;">
        		<p align="center"> Retina Report</p>
    		</div>
            <div style="width: 100%; height:auto">
            	<table style="width:100%;">
                	<tr style="width:100%;">
                    	<td style="width:50%;"><img style="height:300px;width:100%;" src="../retina/retina.jpg" alt="retina"> </td>
                        <td style="width:50%;"><img style="height:300px;width:100%;" src="../retina/retina1.jpg" alt="retina"> </td>
                    </tr>
                    <tr style="width:100%;">
                    	<td style="width:50%;"><img style="height:300px;width:100%;" src="../retina/retina3.jpg" alt="retina"> </td>
                        <td style="width:50%;"><img style="height:300px;width:100%;" src="../retina/retina4.jpg" alt="retina"> </td>
                    </tr>
                </table>
            </div>
        </div>
        
        </div>

<!-- Vision Content End--->

										
										</div>
                                        </div>
									</div>
							</div>
						</div>
			</div>

<!-----Report Div End--->
</div>

</div>
</div>
</div>
                </div>
            </div>
        </div>
    	<div style="width:14%; float:right; position:fixed; top:0; right:0;">
       <?php echo $this->_tpl_vars['user']; ?>
 
        </div>
    </div>
<div class="main-content" style="margin-left:100px; display:none;">
<div style="width:87% !important;height:90px;border-bottom: 4px solid #a5c451;">
<div class="logo">
<a href="../index.php"><img src="../images/logo1 copy.png" alt="hareesh vadugula" class="image-logo"></a>
</div>

</div>
<div class="row">
<div class="span9 utter-navbar main-tool" style="width:75% !important;">
<div id="connections-menu">
            <ul id="connect-ul"> 
			 <li><a href="index.php" data-original-title="">My Profile</a></li>
			  <li id="hel" class="active"><a href="javascript:" data-original-title="">School Report</a></li>
          	  </ul>   
						<!-- customize utter -->
			
			<!-- end customize utter -->         
            <div class="clear"></div>
			</div>
<div class="tab-content">
	<div id="tab-all" class="tab-pane active main-content-tab">
		<div id="all">
			<div class="live-stream">
				<div class="post-title" style="padding:0 !important;">
					<div class="container_table_details">
						Details
					</div>
                    <div class="clear"></div>
				</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="myModal" class="reveal-modal" data-reveal>
<div style="width:100%; text-align:center;border-bottom:4px solid #A5C451; " >
    <a href="../index.php" title="Innovedic-ehealth"><img src="../images/logo1 copy.png" width="170" height="50" alt="" /></a>
   
	<a class="close-reveal-modal">&#215;</a>
    </div>
    <table style="width:100%">
		<tr>
			<td style="width:33%; text-align:center;">Comment</td>
			<td style="width:33%; text-align:center;"><textarea name="comments" class="pftcomment" style="margin-bottom:2px;width:90%; height:auto; "></textarea></td>
            <td style="width:33%; text-align:center;"><div id="commenttype"></div></td>
            </tr></table>
   <div id="content" style="margin-top: 50px;">
  
    </div>
</div>
<?php echo '
<style type="text/css">
#footer {
   position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:87%;
   margin-left: 100px !important;
   border-top: 4px solid #a5c451 !important;
   background:#fff !important;
}

/* IE 6 */
* html #footer {
   position:absolute;
   margin-left: 100px !important;
   width:87% !important;
   top:expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+\'px\');
}
</style>
<script type="text/javascript">
$( window ).load(function() {
$( \'#stdtab\' ).attr(\'class\',\'sactive\');
});
</script>
'; ?>


    </body>
</html>