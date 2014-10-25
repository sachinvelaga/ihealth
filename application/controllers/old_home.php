<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="i-health is an innovative peadiatric preventive medication solution. This will maximize the doctors efforts and monitor each and every child vitals on regular basis. i-health for healthy future generation.">
		<meta name="author" content="i-health">
        <meta name="keywords" content="ihealth, i-health, i-health care, iheath care, child health care, preventive medication, health care, paediatric health, child eye care, child lung care, child ear care, ehealth, innovative health care, health archive, electronic health records, digitized health records, online health records, remote doctors, edoctors." />
<title> i-health </title>

<link rel="icon" href="favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link href="css/styles.css" rel="stylesheet" type="text/css" /> 
<script src="http://d3js.org/d3.v3.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/table.css" />
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="css/home.css" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/mmeenuu.css" />
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all">
<link rel="stylesheet" href="css/styleslide.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all">
<link rel="stylesheet" href="css/circle.css" type="text/css" media="all">
<noscript>
<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
</noscript>
    
<!-- Start WOWSlider.com HEAD section -->


<!-- End WOWSlider.com HEAD section -->

<style type="text/css">
<!--
.style8 {font-size: 11px}
.style9 {
	font-family: "Gisha";
	font-size: 24px;
	color: #007dc2;
	margin-right: 310px;
}
.style14 {
	font-family: "Gisha";
	font-size: 16px;
	color: #070ED8;
}
.style17 {
	font-size: 16px;
	color: #272126;
}
.style23 {
	width: 508px;
	line-height: 24px;
	color: #110E0E;
	font-size: 18px;
	margin-top: 15px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 19px;
}
.style25 {
	color: #110E0E
}
.styles9{
	color: #007DC2;
	font-family: "Gisha";
	font-size: 24px;
	height:40px;
	width:100%;
	}
	 @media screen and (max-width: 1200px) {
  p {
  font-size:  10px !important;
  line-height: 19px !important;
  }
  #saryutab{
	  
  line-height: 17px !important;
	  }
	  #sary{
		 height: 40vh !important; 
		  }
		  #sarydiv{
			  padding-top:32px !important;
			  }
			  #anildiv{
				   padding-top:6px !important;}
			  #rajdiv{
				   padding-top:6px !important;}
  }
.boxdiss:hover{
	background-image:url(../../images/images/12.png);

	}
	.foottext {
line-height: 30px;
font-size: 16px;
}
IMG.displayed {
    display: block;
    margin-left: auto;
    margin-right: auto;
	height: 22vh; }
...
-->
path {
    fill: #2c3e50;
    stroke-width: 0px;
}
</style>
<link href="css/reveal.css" rel="stylesheet" >
<script type="text/javascript">
$( document ).ready(function() {
   if (navigator.appName == "Microsoft Internet Explorer"){
        alert('Please use Mozilla or Chrome for better View...!!');
}
 }) ;
var data = [{"age":"1-5","population":2000},
            {"age":"6-10","population":1000},
            {"age":"11-15","population":3000},
            {"age":"16-20","population":1200},
            {"age":"21-25","population":900},          {"age":"26-30","population":1500},
            {"age":"31-35","population":600},{"age":"36-40","population":1200},
            {"age":"41-45","population":900}];
var margin = {top:40,left:40,right:40,bottom:40};
width = 650;
height = 650;
radius = Math.min(width-100,height-100)/2;
var color = d3.scale.ordinal()
.range(["#e53517", "#6b486b", "#ffbb78","#7ab51d","#6b486b","#e53517","#7ab51d","#ff7f0e","#ffc400"]);
var arc = d3.svg.arc()  
         .outerRadius(radius -130)
         .innerRadius(radius - 10);
var arcOver = d3.svg.arc()  
.outerRadius(radius +50)
.innerRadius(0);
var svg = d3.select("#svgContent").append("svg")
          .attr("width",width)
          .attr("height",height)
          .append("g")
          .attr("transform","translate("+width/2+","+height/2+")");
div = d3.select("body")
.append("div") 
.attr("class", "tooltip");
var pie = d3.layout.pie()
          .sort(null)
          .value(function(d){return d.population;});
var g = svg.selectAll(".arc")
        .data(pie(data))
        .enter()
        .append("g")
        .attr("class","arc")
         .on("mousemove",function(d){
        	var mouseVal = d3.mouse(this);
        	div.style("display","none");
        	div
        	.html("age:"+d.data.age+"</br>"+"population:"+d.data.population)
            .style("left", (d3.event.pageX+12) + "px")
            .style("top", (d3.event.pageY-10) + "px")
            .style("opacity", 1)
            .style("display","block");
        })
        .on("mouseout",function(){div.html(" ").style("display","none");})
        .on("click",function(d){
        	if(d3.select(this).attr("transform") == null){
        	d3.select(this).attr("transform","translate(42,0)");
        	}else{
        		d3.select(this).attr("transform",null);
        	}
        });
        
        
		g.append("path")
		.attr("d",arc)
		.style("fill",function(d){return color(d.data.age);});

		            svg.selectAll("text").data(pie(data)).enter()
		             .append("text")
		             .attr("class","label1")
		             .attr("transform", function(d) {
		      		   var dist=radius+15;
		    		   var winkel=(d.startAngle+d.endAngle)/2;
		    		   var x=dist*Math.sin(winkel)-4;
		    		   var y=-dist*Math.cos(winkel)-4;
		    		   
		    		   return "translate(" + x + "," + y + ")";
		            })
		            .attr("dy", "0.35em")
		            .attr("text-anchor", "middle")
		            
		    	    .text(function(d){
		    	      return d.value;
		    	    });
		    	    
		    	   
		
//start of the circle//
var data = [ {name: "one", value: 100},
			{name: "two", value:  100},
			{name: "three", value:  100},
			{name: "four", value:  100},
			{name: "five", value:  100},
           {name: "six", value:  100}];

var margin = {top: 0, right: 0, bottom: 0, left: 0};
	width = 400 - margin.left - margin.right;
	height = width - margin.top - margin.bottom;

var chart = d3.select("#newss")
				.append('svg')
			    .attr("width", width + margin.left + margin.right)
			    .attr("height", height + margin.top + margin.bottom)
			   .append("g")
    			.attr("transform", "translate(" + ((width/2)+margin.left) + "," + ((height/2)+margin.top) + ")");


var radius = Math.min(width, height) / 2;

var color = d3.scale.ordinal()
	.range(["#3399FF", "#5DAEF8", "#86C3FA", "#ADD6FB", "#D6EBFD", "#D6EBFD"]);

var arc = d3.svg.arc()
    .outerRadius(radius)
    .innerRadius(radius - 50);

var pie = d3.layout.pie()
    .sort(null)
    .startAngle(1.17*Math.PI)
    .endAngle(3.17*Math.PI)
    .value(function(d) { return d.value; });


var g = chart.selectAll(".arc")
  .data(pie(data))
.enter().append("g")
  .attr("class", "arc");

g.append("path")
  .attr("d", arc);
  
 //end of the circle//
function changepass(){
	var userid 	= $.trim($('#mainid').val());
		var pass1 	= $.trim($('#password1').val());
   var pass2 = $.trim($('#password2').val());
    if(pass1 != pass2){
          $('.jadd_user_err').html('Password Not Matched!!!!').show(); 
         alert('Password Not Matched!!!!');
		 return false;
       }else{
	             $.ajax({
                  url:"changepass.php",
                  type:"POST",
				  data:{pass2:pass2,userid:userid},
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                                 if(trim_resp =='0'){
							$('.jadd_user_err').html('Error In password Change!!!').show();
							alert('Error In password Change!!!');
				      return false;
								}else if(trim_resp == 's'){
									$('.jadd_user_err').html('Password Changed Successfully');
										 $('#changediv').hide();
							  location.href = "schools/index.php";
                                       setTimeout(function() {
										 $('.jadd_user_err').html('');
										 $('#logindiv').show();
					}, 2000); 
                               }else if(trim_resp == 'p'){
								   $('.jadd_user_err').html('Password Changed Successfully');
										 $('#changediv').hide();
							  location.href = "parents/index.php";
                                       setTimeout(function() {
										 $('.jadd_user_err').html('');
										 $('#logindiv').show();
					}, 2000); 
                               }else if(trim_resp == 'd'){
								   $('.jadd_user_err').html('Password Changed Successfully');
										 $('#changediv').hide();
							  location.href = "doctors/index.php";
                                       setTimeout(function() {
										 $('.jadd_user_err').html('');
										 $('#logindiv').show();
					}, 2000); 
                               }else if(trim_resp == 'n'){
								   $('.jadd_user_err').html('Password Changed Successfully');
										 $('#changediv').hide();
							  location.href = "nurses/index.php";
                                       setTimeout(function() {
										 $('.jadd_user_err').html('');
										 $('#logindiv').show();
					}, 2000); 
                               }
							   }
				  });
	   }
	}
function hello(){
	var userid 	= $.trim($('#mainid').val());
   var pass = $.trim($('#mainpass').val());
         if(userid.length == 0){
          $('.jadd_user_err').html('Invalid ID!!!!').show(); 
         alert('Invalid ID');
		 return false;
       }else if(pass.length == 0){
           $('.jadd_user_err').html('Please Enter the password!!').show();
			alert('Please Enter the password!!');
          return false;
       }else{
	             $.ajax({
                  url:"logall.php",
                  type:"POST",
				  data:{userid:userid,pass:pass},
                  success:function(resp){
					  
				          var trim_resp = $.trim(resp);
                               if(trim_resp =='0'){
							$('.jadd_user_err').html('Wrong Credentials!!!').show();
							alert('Wrong Credentials!!!');
				      return false;
								}else if(trim_resp == 's'){
							  location.href = "schools/index.php";
                                       setTimeout(function() {
										 $('.jadd_user_err').html('');
					}, 1); 
                               }else if(trim_resp == 'p'){
							  location.href = "parents/index.php";
                                       setTimeout(function() {
										 $('.jadd_user_err').html('');
					}, 1); 
                               }else if(trim_resp == 'd'){
							  location.href = "doctors/index.php";
                                       setTimeout(function() {
										 $('.jadd_user_err').html('');
					}, 1); 
                               }else if(trim_resp == 'n'){
							  location.href = "nurses/index.php";
                                       setTimeout(function() {
										 $('.jadd_user_err').html('');
					}, 1); 
                               }else if(trim_resp == 'change'){
								   
										 $('.jadd_user_err').html('');
										 $('#logindiv').hide();
										 $('#changediv').show();
										
                               }
                        }    
                  });
	   }     
	}

$(document).on('click','#hometab',function(){
$('#hometab').attr('class','active');
$('#doctab').attr('class','');
$('#asctab').attr('class','');
$('#svctab').attr('class','');
$('#hosptab').attr('class','');
$('#schtab').attr('class','');
$('.homemain').hide();
$('#homepage').show();
}); 
function changedp(x){
	$('.'+x+' IMG').attr('src','images/images/hover'+x+'.png');
	}
	function removedp(x){
	$('.'+x+' IMG').attr('src','images/images/'+x+'.png');
	}
	function selectdp(x){
		var prev = $('#activepic').val();
		if(prev==0){
			$('.'+x+' IMG').attr('src','images/images/hover'+x+'.png');
			$('#activepic').val(x);
			}else{$('.'+prev+' IMG').attr('src','images/images/'+prev+'.png');
				$('.'+x+' IMG').attr('src','images/images/hover'+x+'.png');
			$('#activepic').val(x);
				}
	
	}
	function deselectdp(x){
	$('.'+x+' IMG').attr('src','images/images/'+x+'.png');
	}
$(document).on('click','#doctab',function(){
$('#hometab').attr('class','');
$('#doctab').attr('class','active');
$('#asctab').attr('class','');
$('#svctab').attr('class','');
$('#hosptab').attr('class','');
$('#schtab').attr('class','');
$('.homemain').hide();
$('#doctorspage').show();
}); 
$(document).on('click','#schtab',function(){
$('#hometab').attr('class','');
$('#doctab').attr('class','');
$('#svctab').attr('class','');
$('#asctab').attr('class','active');
$('#hosptab').attr('class','');
$('#schtab').attr('class','active');
$('.homemain').hide();
$('#schoolspage').show();
}); 
$(document).on('click','#hosptab',function(){
$('#hometab').attr('class','');
$('#doctab').attr('class','');
$('#asctab').attr('class','active');
$('#hosptab').attr('class','active');
$('#schtab').attr('class','');
$('.homemain').hide();
$('#hospitalspage').show();
}); 
$(document).on('click','#svctab',function(){
$('#hometab').attr('class','');
$('#doctab').attr('class','');
$('#svctab').attr('class','active');
$('#schtab').attr('class','');
$('.homemain').hide();
$('.servicehide').hide();
$('#hktab').show();
$('.sactive').attr('class','');
$('#hk1tab').attr('class','sactive');
$('#servicepage').show();
});
$(document).on('click','#asctab',function(){
$('#hometab').attr('class','');
$('#doctab').attr('class','');
$('#asctab').attr('class','active');
$('#svctab').attr('class','');
$('#hosptab').attr('class','');
$('#schtab').attr('class','');
$('.homemain').hide();
$('.sactive').attr('class','');
$('#s1tab').attr('class','sactive');
$('.assochide').hide();
$('#schoolspage').show();
$('#associatepage').show();
});
$(document).on('click','#s1tab',function(){
$('.sactive').attr('class','');
$('#s1tab').attr('class','sactive');
$('.assochide').hide();
$('#schoolspage').show();
});
$(document).on('click','#h1tab',function(){
$('.sactive').attr('class','');
$('#h1tab').attr('class','sactive');
$('.assochide').hide();
$('#hospitalpage').show();
}); 
$(document).on('click','#hk1tab',function(){
$('.sactive').attr('class','');
$('#hk1tab').attr('class','sactive');
$('.servicehide').hide();
$('#hktab').show();
});
$(document).on('click','#ns1tab',function(){
$('.sactive').attr('class','');
$('#ns1tab').attr('class','sactive');
$('.servicehide').hide();
$('#nstab').show();
});
$(document).on('click','#os1tab',function(){
$('.sactive').attr('class','');
$('#os1tab').attr('class','sactive');
$('.servicehide').hide();
$('#ostab').show();
});
$(document).on('click','#ds1tab',function(){
$('.sactive').attr('class','');
$('#ds1tab').attr('class','sactive');
$('.servicehide').hide();
$('#dstab').show();
});
$(document).on('click','#ots1tab',function(){
$('.sactive').attr('class','');
$('#ots1tab').attr('class','sactive');
$('.servicehide').hide();
$('#otstab').show();
});
$(document).on('click','#ps1tab',function(){
$('.sactive').attr('class','');
$('#ps1tab').attr('class','sactive');
$('.servicehide').hide();
$('#pstab').show();
});
$(document).on('click','#es1tab',function(){
$('.sactive').attr('class','');
$('#es1tab').attr('class','sactive');
$('.servicehide').hide();
$('#estab').show();
});
$(document).on('click','#eh1tab',function(){
$('.sactive').attr('class','');
$('#eh1tab').attr('class','sactive');
$('.servicehide').hide();
$('#ehtab').show();
});
$(document).on('click','#hi1tab',function(){
$('.sactive').attr('class','');
$('#hi1tab').attr('class','sactive');
$('.servicehide').hide();
$('#hitab').show();
});
function loginpop(){
$('#signinhead').html(' <h3> Sign In </h3>');
$('#model_content').show();
$('#contact_info').hide();
$('#myModal').reveal({ animation : 'none'});

}
function contactpop(){
$('#contact_info').show();
$('#model_content').hide();
$('#myModal').reveal({ animation : 'none'});

}
function contactshift(){
$('#contact_info').show();
$('#model_content').hide();
}
function logoset(){
 $.ajax({
                  url:"gpdf.php",
                  type:"POST",
                  success:function(resp){
					  alert(resp);
							window.open("example.pdf");
				
                        }    
                  });  
}
function dlltest(){
 $.ajax({
                  url:"dlltest.php",
                  type:"POST",
                  success:function(resp){
					  alert(resp);
					  return false;							window.open("example.pdf");
				
                        }    
                  });  
}
function OpenInNewTab(url) {
  window.open(url);
}
function scrollup() {
 
		var page = $("#page").val();
		
			if(page == 1){
				return false;
				}
			var up = parseFloat( $("#page").val()) - 1; 
		
		 $('html, body').animate({
        scrollTop: $('#box_' + up).offset().top
    }, 1000);
	$("#page").val(up);
	if(up == 1){
		$('.pagedown').show();
			$('.pageup').hide();
			}else{
				$('.pagedown').show();
				$('.pageup').show();
				}
}
function scrolldown() {
  
		var page = $("#page").val();
		
			if(page == 5){
				
				return false;
			}
		var down = parseFloat( $("#page").val()) + 1; 
		
		 $('html, body').animate({
        scrollTop: $('#box_'+ down).offset().top
    }, 1000);
	
		$("#page").val(down);
		if(down == 5){
		$('.pageup').show();
			$('.pagedown').hide();
			}else{
				$('.pageup').show();
				$('.pagedown').show();
				}
}
 function chartest(){
	 var x = $.trim($('#mainid').val());
	 var first = x.charAt(0);
	 if(first=="p"){
		 $('#signinhead').html(' <h3> Welcome to Parent Portal</h3>');
		 }else if(first=="n"){
			 	$('#signinhead').html(' <h3> Welcome to Nurse Portal</h3>');
			 }else if(first=="s"){
				 	$('#signinhead').html(' <h3> Welcome to School Portal</h3>');
			 	}else if(first=="d"){
						$('#signinhead').html(' <h3>Welcome to Doctor Portal</h3>');
			 }else{
				 $('#signinhead').html(' <h3> Sign In </h3>');
				 }
	 } 
	 function testing(x){
$('#midimage').hide();
$('.midcont').hide();
$('#midcontent'+x).show();
		 }
		  function boxing(){
$('.midcont').hide();
$('#midimage').show();}

$(document).on('click','#parentsec',function(){
//$('.sectact').attr('class','section4');
//$('#parentsec').attr('class','sectact');
//$('.servicecont').hide();
//$('#parentcont').show();
});
$(document).on('click','#studentsec',function(){
$('.sectact').attr('class','section4');
$('#studentsec').attr('class','sectact');
$('.servicecont').hide();
$('#studentcont').show();
});
$(document).on('click','#schoolsec',function(){
$('.sectact').attr('class','section4');
$('#schoolsec').attr('class','sectact');
$('.servicecont').hide();
$('#schoolcont').show();
});
$(document).on('click','#nursesec',function(){
$('.sectact').attr('class','section4');
$('#nursesec').attr('class','sectact');
$('.servicecont').hide();
$('#nursecont').show();
});
$(document).on('click','#reportssec',function(){
$('.sectact').attr('class','section4');
$('#reportssec').attr('class','sectact');
$('.servicecont').hide();
$('#reportscont').show();
});
$(document).on('click','#checkupsec',function(){
$('.sectact').attr('class','section4');
$('#checkupsec').attr('class','sectact');
$('.servicecont').hide();
$('#checkcont').show();
});
</script>

  <link href="css/facybox.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="css/facybox_urls.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="css/faceplant.css" media="screen" rel="stylesheet" type="text/css" />
  
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script src="js/facybox.js" type="text/javascript"></script>
 <script type="text/javascript">

	function fancypop(){
		jQuery.facybox( '<div style="left:4%; text-align: center;">  <img style="padding-bottom:3%;" class="image-logo" alt="logo" src="images/logo.png"/></br><div class="jadd_user_err" style="align:center;display:none;clear:both;text-align:center;font-size: 15px;color: red"></div></br> <div id="logindiv"> <input onkeypress="chartest()" id="mainid" class="signininput" type="text" placeholder="User ID" required/> <input id="mainpass" class="signininput" type="password" placeholder="Password" required/></br><input style="background:#1ED085 no-repeat; border-radius: 0px !important; width: 54% !important;" onclick="hello()" class="signinbutton" type="submit" Value="SIGN IN" required/></div><div id="changediv" style="display:none;"><input id="password1" class="signininput" type="password" placeholder="Password" required/> <input id="password2" class="signininput" type="password" placeholder="Confirm Password" required/></br><input style="background:#1ED085 no-repeat; border-radius: 0px !important; width: 54% !important; color: #ffffff !important;" onclick="changepass()" class="signininput" type="submit" Value="SUBMIT" required/></div></div>' );
		
		
		}
  </script>

<script type="text/javascript">
function clickcontent(x){
	var slideno = $('#slideno').val();
	$('#Image'+slideno).removeClass('active');
	$('#Image'+x).addClass('active');
	$('#table'+slideno).attr('class','').css({opacity: 1.0});
	$('#table'+x).attr('class','servact').css({opacity:0.5});
	$('.stage2').hide();
	$('#scroll_'+x).show().css({opacity: 1.0});
	$('#slideno').val(x);
	$('#tableno').val(x);
	$("#scrollpage").val(x);
}
function slideSwitch(){
	
	var slideno = $('#slideno').val();
	var inc = 1;
	var slideinc = parseInt(slideno) + inc;
	if(slideinc===6){
		$('#slideno').val(inc);
	var $active = $('#Image'+slideno);
	var $next = $('#Image1');
		}else{
			$('#slideno').val(slideinc);
	var $active = $('#Image'+slideno);
	var $next = $('#Image'+slideinc);
			}
	
    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
	}
/*function slideSwitch1() {
	var slideno = $('#slideno').val();
	var inc = 1;
	var slideinc = parseInt(slideno) + inc;
	//alert(slideinc);
    var $active = $('#slideshow IMG.active');
    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');
		
    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');
    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}*/
function tableSwitch() {
  	var slideno = $('#tableno').val();
	var inc = 1;
	var slideinc = parseInt(slideno) + inc;
	if(slideinc===6){
		$('#tableno').val(inc);
	var $active = $('#table'+slideno);
	var $next = $('#table1');
		}else{
			$('#tableno').val(slideinc);
	var $active = $('#table'+slideno);
	var $next = $('#table'+slideinc);
			}
	
    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');
	$('#tableserv td').css({opacity: 1.0});
    $next.css({opacity: 0.0})
        .addClass('servact')
        .animate({opacity: 0.5}, 1000, function() {
            $active.removeClass('servact last-active');
        });
}
function slideSwitch(){
	
	var slideno = $('#slideno').val();
	var inc = 1;
	var slideinc = parseInt(slideno) + inc;
	if(slideinc===6){
		$('#slideno').val(inc);
	var $active = $('#Image'+slideno);
	var $next = $('#Image1');
		}else{
			$('#slideno').val(slideinc);
	var $active = $('#Image'+slideno);
	var $next = $('#Image'+slideinc);
			}
	
    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
	}
function contentSwitch() {
    var page = $("#scrollpage").val();
	var increase = parseFloat( $("#scrollpage").val()) + 1;
	$('.stage2').hide();
	$('.stage2').css({opacity: 0.0});
	$('#scroll_'+increase).show() .animate({opacity: 1.0}, 1000, function() {});
	if(increase==5){
		$("#scrollpage").val(0);
		}else{
		$("#scrollpage").val(increase);
	}
}
$(function() {
    setInterval( "slideSwitch()", 5000 );
	setInterval( "tableSwitch()", 5000 );
	setInterval( "contentSwitch()", 5000 );
});
function plusshow(x){
	$('#tabc'+x).show();
	}
function plushide(x){
	$('#tabc'+x).hide();
	}
	function opendoc(x){
		window.location.href="doctor.php?doc="+x;
		}
</script>


        <link rel="stylesheet" type="text/css" href="css/style5.css" />
</head>
<body style="padding-top:0px !important; margin-top:-10px !important; font-family: Gisha !important; overflow:hidden;">
<div id = "svgContent"></div>

<input id="page" type="hidden" value="1" />
<input id="scrollpage" type="hidden" value="1" />
<div class="pageup" style=" display:none;position: fixed; right:10px; top:10%;"><a href="javascript:" onclick="scrollup()"><img height="20" width="40" src="images/arrowup.png"></a></div><div class="pagedown" style="position: fixed; right:10px; bottom:10%;"> <a href="javascript:" onclick="scrolldown()"><img  height="20" width="40" src="images/arrowdown.png"> </a></div>
<div class="homepage">
<!------Page 1 start------>
<input type="hidden" id="slideno" value="1"/>
<input type="hidden" id="tableno" value="1"/>
<div id="box_1" style="width:100%; height:94vh; background-size: 100% 100%;">
<div id="slideshow">
    <img id="Image1" src="images/New/eyebg.jpg" alt="Slideshow Image 1" class="active" />
    <img id="Image2" src="images/New/earbg.jpg" alt="Slideshow Image 2" />
    <img id="Image3" src="images/New/teethbg.jpg" alt="Slideshow Image 3" />
    <img id="Image4" src="images/New/lun.jpg" alt="Slideshow Image 4" />
    <img id="Image5" src="images/New/brainbg.jpg" alt="Slideshow Image 5" />
</div>
<div id="hadr" style="width:98%; height:auto; text-align:center;  border-width:1px; top:2%; left:1%; position:absolute; background-color:rgb(49, 212, 231); opacity: 0.6;">
				<div  style="width:20%; float:left;height:auto;">
                <a  href="index.php"><img id="headlogo" height="80" class="image-logo" alt="logo" src="images/New/logo.png"></a>
                </div>
                <div  id="headdiv" style="width:78%; float:right; height:auto; text-align:right; font-family:'Gisha'; font-size:14px; margin-top:20px; color:#31d4e7;">
            <div style="width:100%;">
             <ul id="menu" style="float:right; width:50%; padding:0px !important; list-style:none outside none;">
                <li><a href='doctor.php'>Who are we ?</a></li>
                </ul>
                </div>
                </div>
              
</div>
<div id="middle-contantdiv" style="width:40%; height:auto; text-align:center; background-color:#31d4e7; opacity:0.7; top:39%; left:30%; position:absolute;">
<p id="middle-contant" style="line-height:normal; color:#FFFFFF; padding: 10px; font-family: Microsoft Tai Le; font-size:26px;">i-health is a process to redefine the</br>
Physical, Mental & Social well being of Life</p></div> 


</div>
<div id="box_2" style="height:7.7vh; background-color:#CCC;">
<div id="serv" style="width:100%; height:auto; text-align:center; bottom:0; position:absolute;">
<table id="tableserv" style="width:100%; border:0px !important;">
<tr style="width:100%;">
<td id="table1" class="servact" onclick="clickcontent(1)" style="width:19%; background-color:#31d4e7; height:auto; border-right:1px solid #FFFFFF !important;"><img class="servimg" src="images/New/eye.png" /></td>
<td id="table2" class="" onclick="clickcontent(2)" style="width:19%; background-color:#31d4e7; height:auto; border-right:1px solid #FFFFFF !important; border-left:1px solid #FFFFFF !important;"><img class="servimg" src="images/New/ear.png" /></td>
<td id="table3" class="" onclick="clickcontent(3)" style="width:19%; background-color:#31d4e7; height:auto; border-right:1px solid #FFFFFF !important; border-left:1px solid #FFFFFF !important;"><img class="servimg" src="images/New/teeth.png" /></td>
<td id="table4" class="" onclick="clickcontent(4)" style="width:19%; background-color:#31d4e7; height:auto; border-right:1px solid #FFFFFF !important; border-left:1px solid #FFFFFF !important;"><img class="servimg" src="images/New/lungs.png" /></td>
<td id="table5" class="" onclick="clickcontent(5)" style="width:19%; background-color:#31d4e7; height:auto; border-left:1px solid #FFFFFF !important;"><img class="servimg" src="images/New/brain.png" /></td>
</tr>
</table>
</div>
</div>
<!------Page 1 end------>
<!------Page 2 start------>

<div id="scrolling">
<div id="scroll_1" class="stage2" style=" height: 94vh; width:100%;">
<div style="height:24vh; ">
<div id="visdiv" style="width:90%; text-align: left; padding-left:4%; padding-top: 2%;">
<span id="caption" style="font-size:48px; color:#31d4e7;"> The twinkle in your child's eye...  </span></br>

</div>

</div>
<div style="height:70vh;">
<div style="width:90%; margin-left:4%; height:100%;">
  	<div style="width:26%; float:left;">
    <div class="menu_simplemain" style="width:100%; height:auto; float:right;">
<img src="images/New/eye img.jpg" />
</div>
    
    </div>
   <div style="width:69%; float:right;">
   <div align="justify" style="width: 100%;">
   <span id="captiontext" style="font-size:18px;  line-height:30px;">Your child's eyes see a beautiful world. However, modern day education and the new age kid (what with all the hours in front of all kinds of screens) make for ever decreasing eye-health. </span>
   </div>
   <p style="padding: 0 0 0 0 !important">&nbsp;</p>
   <div align="justify" style="width: 100%;"></br>
   
 <div style="width: 100%; float:right;"><span id="captiontext" style="padding-top: 20px;font-size:24px;">"Surveys show that 10-15 in every 100 children have vision defects and 70% of these children are unaware of their abnormality."</span>
 </div>
 </div>
<p style="padding: 0 0 0 0 !important">&nbsp;</p>
 
   <div align="justify" style=";width: 100%;">
<span id="captiontext" style="font-size:18px; line-height:30px; padding-top:10px;"> We truly understand the required eye-care for your cild. In entirely non-invasive and non-mediatric fashion, we check for all the essentials in quick time. We all wish to see the world through a child's eyes, don't we?</span>
</div>
   </div>
</div>
</div>
</div>
<div id="scroll_2" class="stage2" style=" height: 94vh; width:100%;display: none;">
<div style="height:24vh; ">
<div id="visdiv" style="width:90%; text-align: left; padding-left:4%; padding-top: 2%;">
<span id="caption" style="font-size:48px; color:#31d4e7;"> The sounds of silence...</span></br>

</div>

</div>
<div style="height:70vh;">
<div style="width:90%; margin-left:4%; height:100%;">
  	<div style="width:26%; float:left;">
    <div class="menu_simplemain" style="width:100%; height:auto; float:right;">
<img src="images/New/ear img.jpg" />
</div>
    
    </div>
   <div style="width:69%; float:right;">
   <div align="justify" style="width: 100%;">
   <span id="captiontext" style="font-size:18px;  line-height:30px;">Hearing disabilities are often the silent killers. In a child, these are often the most easy to neglect and consequently the most difficult to identify or cure. When was the last time you even wondered about how your child's hearing abilities are doing these days?

</span>
   </div><p style="padding: 0 0 0 0 !important">&nbsp;</p>
   <div align="justify" style="width: 100%;">
  
 <div style="width: 100%; float:right;"><span id="captiontext" style="padding-top: 20px;font-size:24px;">"At least 12-14% children have hard wax or ear infection or drainage, all of which could affect their hearing abilities.
"</span>
 </div>
 </div><p style="padding: 0 0 0 0 !important">&nbsp;</p>   <div align="justify" style=" padding-top: 10px !important;width: 100%;">
<span id="captiontext" style="font-size:18px; line-height:30px; "> We perform all elementary checks to ensure your child's hearing abilities are up to mark. We will also identify any symptoms of potential disabilities. The naughty kid may not listen to you but we'll make sure they at least hear you alright!</span>
</div>
   </div>
</div>
</div>
</div>
<div id="scroll_3" class="stage2" style=" height: 94vh; width:100%;display: none;">
<div style="height:24vh; ">
<div id="visdiv" style="width:90%; text-align: left; padding-left:4%; padding-top: 2%;">
<span id="caption" style="font-size:48px; color:#31d4e7;"> Come on! Show your teeth, smile away...</span></br>

</div>

</div>
<div style="height:70vh;">
<div style="width:90%; margin-left:4%; height:100%;">
  	<div style="width:26%; float:left;">
    <div class="menu_simplemain" style="width:100%; height:auto; float:right;">
<img src="images/New/teeth img.jpg" />
</div>
    
    </div>
   <div style="width:69%; float:right;">
   <div align="justify" style="width: 100%;">
   <span id="captiontext" style="font-size:18px;  line-height:30px;">A sore tooth is one of the worst feelings to bear with. Not least if your kid is having trouble with it! Often dental problems are not painful in the very early stages. And it is important to detect them before they flare up. </span>
   </div>
   <p style="padding: 0 0 0 0 !important">&nbsp;</p>
   <div align="justify" style="width: 100%;">
   
 <div style="width: 100%; float:right;"><span id="captiontext" style="padding-top: 20px;font-size:24px;">"Indian Dental Association's (IDA) study found that 7 in 10 Indian kids suffer from gum diseases."</span>
 </div>
 </div><p style="padding: 0 0 0 0 !important">&nbsp;</p>
   <div align="justify" style=" padding-top: 10px !important;width: 100%;">
<span id="captiontext" style="font-size:18px; line-height:30px; padding-top:10px;"> Yellowing of teeth, irregular teeth, cavities are all misleadingly harmless. Nevertheless, identifying problems like cavities early enough is crucial to avoiding more serious issues like a root canal. You never want your kid to hide a smile, do you?</span>
</div>
   </div>
</div>
</div>
</div>
<div id="scroll_4" class="stage2" style=" height: 94vh; width:100%;display: none;">
<div style="height:24vh; ">
<div id="visdiv" style="width:90%; text-align: left; padding-left:4%; padding-top: 2%;">
<span id="caption" style="font-size:48px; color:#31d4e7;">A breath of fresh air...</span></br>

</div>

</div>
<div style="height:70vh;">
<div style="width:90%; margin-left:4%; height:100%;">
  	<div style="width:26%; float:left;">
    <div class="menu_simplemain" style="width:100%; height:auto; float:right;">
<img src="images/New/lungs img.jpg"/>
</div>
    
    </div>
   <div style="width:69%; float:right;">
   <div align="justify" style="width: 100%;">
   <span id="captiontext" style="font-size:18px;  line-height:30px;">Apart from unnecessary ailments resulting from increased pollution, unavoidable commuting to school in traffic, etc., asthma and COPD diseases are those to be weary of. We keep track of your child's lung performance and health with care and attention to prevention of potential problems.</span>
   </div>
   <p style="padding: 0 0 0 0 !important">&nbsp;</p>
   <div align="justify" style="width: 100%;">
  
 <div style="width: 100%; float:right;"><span id="captiontext" style="padding-top: 20px;font-size:24px;">"10% of all children suffer from some form of Pulmonological disorder."</span>
 </div>
 </div><p style="padding: 0 0 0 0 !important">&nbsp;</p>
   <div align="justify" style=" padding-top: 10px !important;width: 100%;">
<span id="captiontext" style="font-size:18px; line-height:30px; "> Breathe easy. Breathe fresh. </span>
</div>
   </div>
</div>
</div>
</div>
<div id="scroll_5" class="stage2" style=" height: 94vh; width:100%;display: none;">
<div style="height:24vh; ">
<div id="visdiv" style="width:90%; text-align: left; padding-left:4%; padding-top: 2%;">
<span id="caption" style="font-size:48px; color:#31d4e7;"> What do you really know about your child? </span></br>

</div>

</div></br>
<div style="height:70vh;">
<div style="width:90%; margin-left:4%; height:100%;">
  	<div style="width:26%; float:left;">
    <div class="menu_simplemain" style="width:100%; height:auto; float:right;">
<img src="images/New/teeth img.jpg" />
</div>
    
    </div>
   <div style="width:69%; float:right;">
   <div align="justify" style="width: 100%;">
   <span id="captiontext" style="font-size:18px;  line-height:30px;">You probably know that your kid's growing tall. That your child is growing in weight. But how often do you actually keep track? Do you know how your child's BMI is changing as he/she is growing up? Do you know if they know the importance of psychotherapy and physiotherapy? </span>
   </div>
   
   <p style="padding: 0 0 0 0 !important">&nbsp;</p>
   <div align="justify" style="width: 100%;">
   
 <div style="width: 100%; float:right;"><span id="captiontext" style="padding-top: 20px;font-size:24px;">"One in three of the world's malnourished children lives in India."</span>
 </div>
 </div><p style="padding: 0 0 0 0 !important">&nbsp;</p>
   <div align="justify" style=" padding-top: 10px !important;width: 100%;">
<span id="captiontext" style="font-size:18px; line-height:30px;">We, at i-health, keep track of your child with special attention to the above and more. Including adolescence awareness programs, nutritional services based on your child's physical and mental health, nutritional training services and a whole lot of others, we will tell you what you need to know about your child but did not, until now!</span>
</div>
   </div>
</div>
</div>
</div>
</div>
<!------Page 2 end------>
<!------Page 3 start------>


<div id="box_3" style="width:100%; height:100vh;">
	<div style="width:100%; height:6vh; background:#2ecc71; text-align:center; padding-top: 1%; color: #FFFFFF;">
<span style="font-size:18px; font-family:Microsoft Tai Le;"> technology + innovation + wellbeing = i-health </span>
    </div>
    <div id="doctordetails" style="width:100%; height:94vh;background:url(images/New/rect.png) no-repeat,url(images/New/doct.png) no-repeat; background-size: 100% 100%;">
    <div style="width:100%; padding-left: 4%; padding-top: 2%;">
    <span style="color: #2ecc71;font-size: 48px;"> What our Team is saying ...</span>
    </div>
    <div class="box" style="width:80%; height:500px">
    <div class="box_1 boxdiss" onclick="opendoc(1)" onmouseover="plusshow(1)"  onmouseout="plushide(1)"  style="width:22%; height:53.6vh; float:left; background:#FFF; border: solid #2ecc71 !important; margin-top:20px; margin-left:5%;">
    <table style=" border: 0 !important; margin-top:-3px;">
    <tr style="height: 45vh;">
    <td  style="padding: 0 !important;"><p style="text-align:justify; color:#000000; line-height:23px;">I take great pleasure in mentoring the teams at i-health. Being a parent, my utmost priority towards my child is her health and wellbeing. In spite of the acquaintance with medical practices, I fear to miss at times towards monitoring of my child vitals on regular basis. In present system, the children are exposed to many threats which may have adverse effect on healthy being at later stages of life. Children are... <a href='doctor.php?doc=1' style="color:#2ecc71;"><i>more>></i></a> <br/></td>
    </tr>
    <tr style="height: vh;">
    <td style="padding: 0 !important; bottom: 0 !important; ">
    <div style="width:100%">
    <div style="width:55%; float:left; margin-left:13px;">
    <span style="text-align:left; color:#333;"><b>Dr. Anil</b></br>Medical Advisor  Cardio Physician</span></div>
    <div id="anildiv" style="width:28%; float:right;">
    <img id="tabc1" align="right" src="images/images/plus.png" style="width:100%; height:100%;display:none;"/></img>
    </div>
    </div></td>
    </tr>
    </table>
    
    </div>
    <div class="box_2 boxdiss" onclick="opendoc(2)" onmouseover="plusshow(2)" onmouseout="plushide(2)"  style="width:22%; height:53.6vh; background:#FFF; border: solid #2ecc71 !important; margin-top:60px; margin-left:13%; float:left;">
   <table style=" border: 0 !important; margin-top: -3px;">
    <tr id="sary" style="height: 45vh;">
    <td  style="padding: 0 !important;"><p id="saryutab" style="text-align:justify; color:#000000; line-height:23px;">It is a matter of pride for me, to be part of this great initiative for preventive medication for children. Ever so often, we come across paediatric patients in a very advanced stage of abnormality; those that could have easily been diagnosed and cured with minimal pain and effort, at a much earlier stage. The essential difficulty with paediatrics is that children don't recognize the abnormality...<a href='doctor.php?doc=2' style="color:#2ecc71;"><i>more>></i></a><br/></td>
    </tr>
    <tr style="height: 1vh;">
    <td style="padding: 0 !important; bottom: 0 !important;">
   <div style="width:100%">
    <div style="width:55%; float:left; margin-left:13px;;">
    <span style="text-align:left; color:#333;"><b>Dr. Sarayu Reddy</b></br>Co-founder <br/> General Physician</span></div>
    <div id="sarydiv" style="width:28%; float:right;">
    <img id="tabc2" align="right" src="images/images/plus.png" style="width:100%; height:100%;display:none;"/></img>
    </div>
    </div>
   </td>
    </tr>
    </table>
    </div>
    <div class="box_3 boxdiss" onclick="opendoc(3)" onmouseover="plusshow(3)" onmouseout="plushide(3)" style="width:22%; height:53.8vh; background:#FFF; border: solid #2ecc71 !important; margin-top:125px; margin-left:13%;; float:left;">
    <table style=" border: 0 !important; margin-top:-3px;">
    <tr style="height: 45vh;">
    <td  style="padding: 0 !important;"><p style="text-align:justify; color:#000000; margin-right:0px; line-height:23px; ">We've all heard the saying, "Prevention is better than cure". Nevertheless, not many of us really act accordingly. One example lies in the way we raise our children in the modern day. Be it due to a lack of awareness or constraints of time or the unavailability of appropriate technological or medical solutions, we constantly jeopardize the well-being of our children. And that too, in times when we ought....<a href='doctor.php?doc=3' style="color:#2ecc71;"><i>more>></i></a></td>
    </tr>
    <tr style="height: 1vh;">
    <td style="padding: 0 !important; bottom: 0 !important;">
   <div style="width:100%">
    <div style="width:55%; float:left; margin-left:13px;">
    <span style="text-align:left; color:#333;"><b>Mr. Rajesh Reddy</b></br>Co-founder</span></div>
    <div id="rajdiv" style="width:28%; float:right;">
    <img id="tabc3" align="right" src="images/images/plus.png" style="width:100%; height:100%;display:none;"/></img>
    </div>
    </div>
   </td>
    </tr>
    </table>
    </div>
    </div>
    
    </div>

<!------Page 3 end------>
<!------Page 4 start------>
<div id="box_4" style="width:97%; height:100vh;">

	<div id="background">
			
			<div id="Whatwedo" style="width:350px; height:250px; top:40px; "><img src="images/images/Whatwedo.png"></div>
			<div id="Ellipse3" style="width:550px; height:250px; left:370px; top:100px;" > <img src="images/images/Ellipse3.png">
            
          
            </div>
			<div id="Ellipse4" style="top:200px; left:468px;">
           <div id="midimage">
            <img src="images/images/Ellipse4.png">
            </div>
              <div class="midcont" id="midcontent1" style="display:none;text-align:center; width:240px !important; padding-left:50px; padding-top:35px; font-size:14px;">
              <p style="font-size:24px;">Child</p>
            <p>Full Time Nurse</br>Preventive Health Care</br>Regular Health Checkup</br>Physical Doctor Examination<br/>Emergency Procedures</br>Homely Approach</br>
            </p>
            </div>
             <div class="midcont" id="midcontent2" style="display:none;text-align:center; width:240px !important; padding-left:50px; padding-top:35px; font-size:14px;">
              <p style="font-size:24px;">Nurse</p>
            <p>Personal Care</br>Regular Checkups</br>Full Time Availability</br>Emergency Procedures</br>Awareness Programs</br>Training Programs</p>
            </div>
             <div class="midcont" id="midcontent3" style="display:none;text-align:center; width:240px !important; padding-left:50px; padding-top:35px; font-size:14px;">
              <p style="font-size:24px;">Parent</p>
            <p>100% Visibility</br>Doctor's Information</br>Nutritionist Suggessions</br>Awarenress Programs</br>Regular Reports</br>Personal Care</br></p>
            </div>
             <div class="midcont" id="midcontent4" style="display:none;text-align:center; width:240px !important; padding-left:50px; padding-top:35px; font-size:14px;">
              <p style="font-size:24px;">School</p>
            <p>Unique Model</br>Full Time Nurse</br>Hassle Free Environment</br>Doctors Regular Camps</br>Awarenress Programs </br>Detailed Reports</p>
            </div>
             <div class="midcont" id="midcontent5" style="display:none;text-align:center; width:240px !important; padding-left:50px; padding-top:35px; font-size:14px;">
              <p style="font-size:24px;">Doctor</p>
            <p>Parent Interaction</br>Preventive Medication</br>Preliminary Reports Screening</br>Regular Physical Checkups</br>Specialized Doctors</br>Expert Nutritionist</p>
            </div>
             <div class="midcont" id="midcontent6" style="display:none;text-align:center; width:240px !important; padding-left:50px; padding-top:35px; font-size:14px;">
              <p style="font-size:24px;">Report</p>
            <p>24x7 Availability</br>Maintans Archieos</br>Reports View/Download/Print</br>Dedication Servers</br>Dialy Updations</br>Data Security</p>
            </div>
            </div>
	<input type="hidden" id="activepic" value="0">
			<div id="VectorSmartObject_0" class="success" onclick="selectdp('success')" style="width:120px; height:70px; top:95px; left:590px;  "><img id="succ" onclick="testing(1)" src="images/images/success.png"></div>
            <div id="layer_9" class="nurse" onclick="selectdp('nurse')" style="width:70px; height:70px; top:550px; left:610px;"><img onclick="testing(2)" src="images/images/nurse.png"></div>
			<div id="layer_8" class="parent" onclick="selectdp('parent')" style="width:70px; height:70px; top:220px; left:420px;"><img onclick="testing(3)" src="images/images/parent.png"></div>
			<div id="layer_12" class="school" onclick="selectdp('school')" style="width:70px; height:70px; top:424px; left:413px;"><img onclick="testing(4)" src="images/images/school.png"></div>
			<div id="layer_10" class="scedule" onclick="selectdp('scedule')" style="width:70px; height:70px; top:425px; left:810px;"><img onclick="testing(5)" src="images/images/scedule.png"></div>
			<div id="layer_11" class="report" onclick="selectdp('report')" style="width:70px; height:70px; top:228px; left:806px;"><img onclick="testing(6)" src="images/images/report.png"></div>
			
		</div>

</div>




<!------Page 4 start------>
<div id="box_5" style="width:100%; height:100vh;">
<div style="width:100%; height:88vh; background-image:url(images/New/child.jpg); background-size: 100% 100%;">
</div>
<div style="width:100%; height:12vh; background:#2ecc71;">
	<div style="width:100%; height:auto; float:left; color: #FFFFFF;">

<div style="width:80%; float:right;">
<div style="width:80%; float:left;">
  <p align="center" style="line-height:22px;">
  		Innovedic Consulting Private Limited</br>
 
       3rd Floor, Sri Nidhi Envoy, #3, 4rth "C" Cross, Second Main, Kasturi Nagar, Bangalore-560043.</br>Email : info@i-health.co, info@innovedicgroup.co | Ph : 080-68888664</p>
      </div>
      <div style="width:20%; float:right; line-height:20px; margin-top:25px;">
   <a target="_blank" href="https://www.facebook.com/profile.php?id=100004950157831"><img width="30" height="30"   src="images/facebook.png" /></a>
   <a target="_blank" href="https://twitter.com/ihealth2014"><img width="30" height="30" style="margin-left:12px;"   src="images/twitter.png" /></a>
   <a target="_blank" href="https://www.linkedin.com/home?goback=&report%2Esuccess=7l1b7Q2BePWUX2EV2Q745-JN8u3vqsau4_OmhJJaF_pq1n0u5kyW-SJBXM3PibRs8ysmMHJa5iOmbOYJpW_-_NJB5WQv1WJ02iTZW1Rr4TpWYp0wWareo_"><img width="30" height="30" style="margin-left:12px;"   src="images/linkedin.png" /></a>
   
      </div>
      </div>
   </div>
	 </div>
</div>

</div>
<!------Page 4 end------>
</div>



<!-- top panel starts here -->



<!.....POPUP...>

<div id="myModal" class="reveal-modal" data-reveal style="position:fixed;">
<div style="width:100%; text-align:center;border-bottom:4px solid #A5C451; " >
    <a href="index.php" title="Innovedic-ehealth"><img src="images/logo1 copy.png" width="170" height="50" alt="" /></a>
    </div>
<div id="model_content" style="margin-bottom:20px !important;">
	
    <div id="signinhead" style="width:100%; text-align:center;color: #A5C451;" >
          
    </div>
       
         
     
    
</div>
<div id="contact_info" style="margin-top:10px !important; display: none;">
  <p align="center"><a title="Innovedic e-health" href="https://www.google.co.in/maps/@13.007797,77.6595819,18z?hl=en" class="pirobox" target="_blank"><img width="420" height="310" alt="Innovedic Map" src="images/map_thumb.jpg"></a></p>
  <p align="center">
  		Visit:
		<a href="http://www.innovedicgroup.com" target="_blank">Innovedic Group</a>
 </br>3rd Floor, Sri Nidhi Envoy, #3, 4rth &quot;C&quot; Cross
      Second Main, Kasturi Nagar, Bangalore-560043.</br>Email : info@innovedic-ehealth.com, info@innovedicgroup.com | Ph : 080-68888664</p>
</div>
	<a class="close-reveal-modal">&#215;</a>
</div>
<!-- <!...end....>
{literal} -->
<script type="text/javascript">

$(document).ready(function() {
	// navigation click actions	
	$(document).keydown(function(event){
		
		var page = $("#page").val();
		if (event.keyCode == 40){
			if(page == 5){
				$('.pagedown').hide();
				return false;
				}else{
					$('.pagedown').show();
					}
		var down = parseFloat( $("#page").val()) + 1; 
		
		 $('html, body').animate({
        scrollTop: $('#box_'+ down).offset().top
    }, 1000);
	
		$("#page").val(down);
		if(down == 5){
			$('.pageup').show();
			$('.pagedown').hide();
			}else{
				$('.pageup').show();
				$('.pagedown').show();
				}
		} else if (event.keyCode == 38){
			if(page == 0){
				return false;
				}
			var up = parseFloat( $("#page").val()) - 1; 
		
		 $('html, body').animate({
        scrollTop: $('#box_' + up).offset().top
    }, 1000);
	$("#page").val(up);
	if(up == 1){
			$('.pagedown').show();
			$('.pageup').hide();
			}else{
				$('.pagedown').show();
				$('.pageup').show();
				}
			}
	});
});
$(document).ready(function(){
var phpScript='controller.php';
var keyPressed='';

	$("button").click(function(){
		
		keyPressed=$(this).val(); // get value of key pressed
		
		$.post(phpScript,{data:keyPressed},function(response){
			alert(response);
		});
	});
});
</script>
	<!-- If you want to look at the uncompressed version you find it at
	     js/jquery.smoothDivScroll-1.3.js -->

	<!-- Plugin initialization -->
 
{/literal}
</body>
</html>

