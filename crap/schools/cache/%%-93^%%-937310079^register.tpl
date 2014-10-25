a:4:{s:8:"template";a:1:{s:12:"register.tpl";b:1;}s:9:"timestamp";i:1398852712;s:7:"expires";i:1398852712;s:13:"cache_serials";a:0:{}}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

 <style>
            /* css for this page */
            body { font: 14px/24px 'Helvetica Neue', Arial, sans-serif; color: #333; width: 960px; margin: 30px 20px;background: #fff; margin-left:30px !important;}
            body > h2 { margin: 30px 0 15px; text-shadow: 1px 1px 0 white; border-bottom: 2px solid #333; padding-bottom: 5px }
            h1 { text-align: center; margin-bottom: 30px; text-shadow: 1px 1px 0 white }
            strong + p { margin-top: 0 }
            dt { font-weight: bold }
            dd { margin: 0 }
            figure { display: block; width: 100%; height: 100%; margin: 0 }
            .accordion.stitch .slide div { background: #333 }
            .social-buttons { width: 100%; text-align: center; margin-top: 30px }
            .social-buttons ul { display: inline-block; margin: 0 }
            .social-buttons li { float: left; list-style-type: none }
            .call_out {
                color: #444444;
                background: url('img-demo/callout_bg.gif') repeat;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                -webkit-box-shadow: 1px 0 3px rgba(0, 0, 0, 0.08);
                -moz-box-shadow: 1px 0 3px rgba(0, 0, 0, 0.08);
                box-shadow: 1px 0 3px rgba(0, 0, 0, 0.08);
                margin-top: 20px;
            }

            .call_out .wrap {
                padding: 19px 20px 17px 20px;
                border: 1px solid #d7d4cb;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
            }

            .call_out h2 {
                font-family: Georgia, "Times New Roman", Times, serif;
                font-style: italic;
                text-shadow: 0 1px 0 rgba(255, 255, 255, 1);
                color: #444444;
                font-size: 18px;
                line-height: 20px;
                margin: 10px 0;
            }

            .call_out a.alt_btn {
                background: url('img-demo/sprite.png') 24px 356px;
                display: block;
                padding: 0 0 0 23px;
                float: right;
                margin: -45px 0 0 0;
                font-family: Georgia, "Times New Roman", Times, serif;
                font-style: italic;
                font-size: 14px;
                color: #252525;
                text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.8);
                text-align: center;
                border: none;
                -webkit-box-shadow: 0;
                -moz-box-shadow: 0;
                box-shadow: 0;
                text-decoration: none;
                font-weight: bold;
            }

            .call_out a.alt_btn span {
                padding: 14px 23px 15px 0;
                background: url('img-demo/sprite.png') 100% 253px;
                display: block;
            }

            .call_out a:hover.alt_btn { background: url('img-demo/sprite.png') 24px 408px }
            .call_out a:hover.alt_btn span { background: url('img-demo/sprite.png') 100% 304px }
			#first-sec { box-shadow: -1px 1px 4px #909090 inset, 1px 1px 8px #909090 inset; background-image: url('images/job.jpg');background-size:1073px 1020px; background-repeat:no-repeat;padding-top:10px; border-radius: 6px;-moz-border-radius: 4px;-webkit-border-radius: 4px;margin-left:60px;margin-top:1px;filter: blur(5px);-ms-filter: blur(5px);-o-filter: blur(15px);-moz-filter: blur(15px);z-index: 1;position:absolute;}
			#second-sec { box-shadow: -1px 1px 4px #909090 inset, 1px 1px 8px #909090 inset; background-image: url('images/doctors.jpg');background-size:1073px 1020px; background-repeat:no-repeat;padding-top:10px; border-radius: 6px;-moz-border-radius: 4px;-webkit-border-radius: 4px;margin-left:60px;margin-top:1px;filter: blur(5px);-ms-filter: blur(5px);-o-filter: blur(15px);-moz-filter: blur(15px);z-index: 1;position:absolute;}
			#third-sec { box-shadow: -1px 1px 4px #909090 inset, 1px 1px 8px #909090 inset; background-image: url('images/marriage.jpg');background-size:1073px 1020px; background-repeat:no-repeat;padding-top:10px; border-radius: 6px;-moz-border-radius: 4px;-webkit-border-radius: 4px;margin-left:60px;margin-top:1px;filter: blur(5px);-ms-filter: blur(5px);-o-filter: blur(15px);-moz-filter: blur(15px);z-index: 1;position:absolute;}
			
        </style>
        <title>Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		 <link rel="stylesheet" type="text/css" href="css/liteaccordion.css"/>
<link href="css/StyleSheet.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/foggy.min.js"></script>
     <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		      <script type="text/javascript" src="js/liteaccordion.jquery.js"></script>
<script type="text/javascript">
$(document).on('click','#jsubmit_register',function(e){
   var fname = $.trim($('#jfname').val());
   var sname = $.trim($('#jsname').val());
   var fathername = $.trim($('#jfathername').val());
   var email = $.trim($('#jemail').val());
   var pass = $.trim($('#jpass').val());
   var org = $.trim($('#jorg').val());
   var degree = $.trim($('#jdegree').val());
   var dob = $.trim($('#jdob').val());
   var exp = $.trim($('#jexp').val());
   var address = $.trim($('#jaddress').val());
   var address1 = $.trim($('#jaddress1').val());
   var phone = $.trim($('#jphone').val());
   var city = $.trim($('#jcity').val());
   var gender = $.trim($('#jgender').val());
   var state = $.trim($('#jstate').val());
   var country = $.trim($('#jcountry').val());
   var zipcode = $.trim($('#jzipcode').val());
   
         if(email.length == 0||!/^[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(email)){
          $('.jadd_user_err').html('Invalid Email!!!!').show(); 
          return false;
       }else if(!/^\d{10,20}$/.test(phone)){
           $('.jadd_user_err').html('Mobile Number Should Be 10 and Above Digits').show();
			alert('Mobile Number Should Be 10 and Above Digits');
          return false;
       }else if(!/^\d+$/.test(exp)){
           $('.jadd_user_err').html('Experience Should Be Digits').show(); 
			alert('Experience Should Be Digits');
          return false;
       }else{
	      e.preventDefault();
	             $.ajax({
                  url:"jobuser.php",
                  type:"POST",
				  data:{fname:fname,sname:sname,fathername:fathername,email:email,phone:phone,pass:pass,gender:gender,org:org,degree:degree,dob:dob,exp:exp,address:address,address1:address1,city:city,state:state,country:country,zipcode:zipcode},
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                               if(trim_resp =='0'){
							$('.jadd_user_err').html('Email Already Exists!!!').show();
							alert('Email Already Exists!!!');
				      return false;
								}else if(trim_resp == '1'){
								 $('#third-reg').hide();
                                   $('.registered').show();
								  
								   
								   alert('Added successfully');
                                       setTimeout(function() {
										 $('.jadd_user_err').html('');
					}, 1); 
                               }
                        }    
                  });
	   }     
}); 
$(document).on('click','#general-h2',function(){
$('#first-sec').show();
$('#second-sec').hide();
$('#third-sec').hide();
}); 
$(document).on('click','#doctors-h2',function(){
$('#first-sec').hide();
$('#second-sec').show();
$('#third-sec').hide();
}); 
$(document).on('click','#retail-h2',function(){
$('#first-sec').hide();
$('#second-sec').hide();
$('#third-sec').show();
}); 
 </script>


    </head>
    <body>    
	 <div class="container-ibc"> 
    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header" style="width:30%;float:left;">
        <div class="logo-ibc"> </div>
      </div>
      <div id="main-menu" class="navbar-collapse collapse">
     
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--header area -->
    <div class="navigation hide-below-767">
      <div id="signin-block" style="width:100%;float:left;">
   
           <ul style="margin-top:-10px;">
  <li style="float:left;margin-right:20px;"><a href="index.php" style="color:#26CA00 !important;">Home</a></li>       
        
		   
    <li style="float:right;"><a style="color:#26CA00 !important;margin-right:28px" href="login.php">Log In</a></li>
    <li style="float:right;"><a style="color:#26CA00 !important;margin-right:14px" href="register.php">Sign Up</a></li>
	
   </div>
        </ul>
           
         
      </div>
    </div>
	  <div id="one" align="center">
            <ol>
                <li>
                    <h2 style="width:392px !important;" id="general-h2"><span>General</span></h2>							
<div id="first-sec" style="height:1010px !important">
					<div style="overflow:auto;width:1024px;height:1020px;">
					<div class="registered" style="display:none;margin-top:200px;clear:both;text-align:center;font-size: 12px;color: #168ECE">Registration Successful....! </br>Click <a href="index.php">here</a> to go to home page for login.</div>
     
					  <div id="first-reg">
	<div class="content column-full container">
      <div class="page-header">
        <h1>Registration</h1>
      </div>
	  <div class="jadd_user_err" style="display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
        
      <form class="form-horizontal" role="form" name="createprofile" method="POST" action="" style="margin: 20px 0 0 0;">
		<div class="form-group" style="margin-top:20px;">
          <label for="inputEmail3" class="col-sm-3 control-label">First Name*</label>
          <div class="col-sm-4">
            <input type="text" id="jfname" class="form-control" name="fname" value"" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Second Name*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jsname" name="surname" value""  required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Father's Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jfathername" name="fathername" value="">
          </div>
        </div>
		
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Email*</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" id="jemail" name="email" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Password*</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" id="jpass" name="password" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Mobile Phone*</label>
          <div class="col-sm-4">
            <input type="number"  class="form-control" id="jphone" name="phone" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Gender*</label>
          <div class="col-sm-4">
            <select name="gender" id="jgender" class="form-control-countries" required>
								<option value="0">Select</option>
								<option value="1">Male</option>
								<option value="2">Female</option>
            </select>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Date of Birth(dd-mm-yyyy)*</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" id="jdob" name="dob" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Qualification*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jdegree" name="degree" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Organization*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jorg" name="organization" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Experience(in months)*</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" id="jexp" name="experience" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line1 *</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jaddress" name="address" value="" required>
          </div>
        </div>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line2 </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jaddress1" name="address1" value="">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">City*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jcity" name="city" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">State/County*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jstate" name="state" value="" required>
          </div>
        </div>
		   <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Country*</label>
          <div class="col-sm-4">
            <select name="jcountry" id="jcountry" class="form-control-countries" required>
            									<option value="1"  >Afghanistan</option>
											<option value="2"  >Albania</option>
											<option value="3"  >Algeria</option>
											<option value="4"  >American Samoa</option>
											<option value="5"  >Andorra</option>
											<option value="6"  >Angola</option>
											<option value="7"  >Anguilla</option>
											<option value="8"  >Antarctica</option>
											<option value="9"  >Antigua and Barbuda</option>
											<option value="10"  >Argentina</option>
											<option value="11"  >Armenia</option>
											<option value="12"  >Aruba</option>
											<option value="13"  >Australia</option>
											<option value="14"  >Austria</option>
											<option value="15"  >Azerbaijan</option>
											<option value="16"  >Bahamas</option>
											<option value="17"  >Bahrain</option>
											<option value="18"  >Bangladesh</option>
											<option value="19"  >Barbados</option>
											<option value="20"  >Belarus</option>
											<option value="21"  >Belgium</option>
											<option value="22"  >Belize</option>
											<option value="23"  >Benin</option>
											<option value="24"  >Bermuda</option>
											<option value="25"  >Bhutan</option>
											<option value="26"  >Bolivia</option>
											<option value="27"  >Bosnia and Herzegovina</option>
											<option value="28"  >Botswana</option>
											<option value="29"  >Bouvet Island</option>
											<option value="30"  >Brazil</option>
											<option value="31"  >British Indian Ocean Territory</option>
											<option value="32"  >Brunei Darussalam</option>
											<option value="33"  >Bulgaria</option>
											<option value="34"  >Burkina Faso</option>
											<option value="35"  >Burundi</option>
											<option value="36"  >Cambodia</option>
											<option value="37"  >Cameroon</option>
											<option value="38"  >Canada</option>
											<option value="39"  >Cape Verde</option>
											<option value="40"  >Cayman Islands</option>
											<option value="41"  >Central African Republic</option>
											<option value="42"  >Chad</option>
											<option value="43"  >Chile</option>
											<option value="44"  >China</option>
											<option value="45"  >Christmas Island</option>
											<option value="46"  >Cocos (Keeling) Islands</option>
											<option value="47"  >Colombia</option>
											<option value="48"  >Comoros</option>
											<option value="49"  >Congo</option>
											<option value="50"  >Congo, the Democratic Republic of the</option>
											<option value="51"  >Cook Islands</option>
											<option value="52"  >Costa Rica</option>
											<option value="53"  >Cote D'Ivoire</option>
											<option value="54"  >Croatia</option>
											<option value="55"  >Cuba</option>
											<option value="56"  >Cyprus</option>
											<option value="57"  >Czech Republic</option>
											<option value="58"  >Denmark</option>
											<option value="59"  >Djibouti</option>
											<option value="60"  >Dominica</option>
											<option value="61"  >Dominican Republic</option>
											<option value="62"  >Ecuador</option>
											<option value="63"  >Egypt</option>
											<option value="64"  >El Salvador</option>
											<option value="65"  >Equatorial Guinea</option>
											<option value="66"  >Eritrea</option>
											<option value="67"  >Estonia</option>
											<option value="68"  >Ethiopia</option>
											<option value="69"  >Falkland Islands (Malvinas)</option>
											<option value="70"  >Faroe Islands</option>
											<option value="71"  >Fiji</option>
											<option value="72"  >Finland</option>
											<option value="73"  >France</option>
											<option value="74"  >French Guiana</option>
											<option value="75"  >French Polynesia</option>
											<option value="76"  >French Southern Territories</option>
											<option value="77"  >Gabon</option>
											<option value="78"  >Gambia</option>
											<option value="79"  >Georgia</option>
											<option value="80"  >Germany</option>
											<option value="81"  >Ghana</option>
											<option value="82"  >Gibraltar</option>
											<option value="83"  >Greece</option>
											<option value="84"  >Greenland</option>
											<option value="85"  >Grenada</option>
											<option value="86"  >Guadeloupe</option>
											<option value="87"  >Guam</option>
											<option value="88"  >Guatemala</option>
											<option value="89"  >Guinea</option>
											<option value="90"  >Guinea-Bissau</option>
											<option value="91"  >Guyana</option>
											<option value="92"  >Haiti</option>
											<option value="93"  >Heard Island and Mcdonald Islands</option>
											<option value="94"  >Holy See (Vatican City State)</option>
											<option value="95"  >Honduras</option>
											<option value="96"  >Hong Kong</option>
											<option value="97"  >Hungary</option>
											<option value="98"  >Iceland</option>
											<option value="99"  selected="selected"  >India</option>
											<option value="100"  >Indonesia</option>
											<option value="101"  >Iran, Islamic Republic of</option>
											<option value="102"  >Iraq</option>
											<option value="103"  >Ireland</option>
											<option value="104"  >Israel</option>
											<option value="105"  >Italy</option>
											<option value="106"  >Jamaica</option>
											<option value="107"  >Japan</option>
											<option value="108"  >Jordan</option>
											<option value="109"  >Kazakhstan</option>
											<option value="110"  >Kenya</option>
											<option value="111"  >Kiribati</option>
											<option value="112"  >Korea, Democratic People's Republic of</option>
											<option value="113"  >Korea, Republic of</option>
											<option value="114"  >Kuwait</option>
											<option value="115"  >Kyrgyzstan</option>
											<option value="116"  >Lao People's Democratic Republic</option>
											<option value="117"  >Latvia</option>
											<option value="118"  >Lebanon</option>
											<option value="119"  >Lesotho</option>
											<option value="120"  >Liberia</option>
											<option value="121"  >Libyan Arab Jamahiriya</option>
											<option value="122"  >Liechtenstein</option>
											<option value="123"  >Lithuania</option>
											<option value="124"  >Luxembourg</option>
											<option value="125"  >Macao</option>
											<option value="126"  >Macedonia, the Former Yugoslav Republic of</option>
											<option value="127"  >Madagascar</option>
											<option value="128"  >Malawi</option>
											<option value="129"  >Malaysia</option>
											<option value="130"  >Maldives</option>
											<option value="131"  >Mali</option>
											<option value="132"  >Malta</option>
											<option value="133"  >Marshall Islands</option>
											<option value="134"  >Martinique</option>
											<option value="135"  >Mauritania</option>
											<option value="136"  >Mauritius</option>
											<option value="137"  >Mayotte</option>
											<option value="138"  >Mexico</option>
											<option value="139"  >Micronesia, Federated States of</option>
											<option value="140"  >Moldova, Republic of</option>
											<option value="141"  >Monaco</option>
											<option value="142"  >Mongolia</option>
											<option value="143"  >Montserrat</option>
											<option value="144"  >Morocco</option>
											<option value="145"  >Mozambique</option>
											<option value="146"  >Myanmar</option>
											<option value="147"  >Namibia</option>
											<option value="148"  >Nauru</option>
											<option value="149"  >Nepal</option>
											<option value="150"  >Netherlands</option>
											<option value="151"  >Netherlands Antilles</option>
											<option value="152"  >New Caledonia</option>
											<option value="153"  >New Zealand</option>
											<option value="154"  >Nicaragua</option>
											<option value="155"  >Niger</option>
											<option value="156"  >Nigeria</option>
											<option value="157"  >Niue</option>
											<option value="158"  >Norfolk Island</option>
											<option value="159"  >Northern Mariana Islands</option>
											<option value="160"  >Norway</option>
											<option value="161"  >Oman</option>
											<option value="162"  >Pakistan</option>
											<option value="163"  >Palau</option>
											<option value="164"  >Palestinian Territory, Occupied</option>
											<option value="165"  >Panama</option>
											<option value="166"  >Papua New Guinea</option>
											<option value="167"  >Paraguay</option>
											<option value="168"  >Peru</option>
											<option value="169"  >Philippines</option>
											<option value="170"  >Pitcairn</option>
											<option value="171"  >Poland</option>
											<option value="172"  >Portugal</option>
											<option value="173"  >Puerto Rico</option>
											<option value="174"  >Qatar</option>
											<option value="175"  >Reunion</option>
											<option value="176"  >Romania</option>
											<option value="177"  >Russian Federation</option>
											<option value="178"  >Rwanda</option>
											<option value="179"  >Saint Helena</option>
											<option value="180"  >Saint Kitts and Nevis</option>
											<option value="181"  >Saint Lucia</option>
											<option value="182"  >Saint Pierre and Miquelon</option>
											<option value="183"  >Saint Vincent and the Grenadines</option>
											<option value="184"  >Samoa</option>
											<option value="185"  >San Marino</option>
											<option value="186"  >Sao Tome and Principe</option>
											<option value="187"  >Saudi Arabia</option>
											<option value="188"  >Senegal</option>
											<option value="189"  >Serbia and Montenegro</option>
											<option value="190"  >Seychelles</option>
											<option value="191"  >Sierra Leone</option>
											<option value="192"  >Singapore</option>
											<option value="193"  >Slovakia</option>
											<option value="194"  >Slovenia</option>
											<option value="195"  >Solomon Islands</option>
											<option value="196"  >Somalia</option>
											<option value="197"  >South Africa</option>
											<option value="198"  >South Georgia and the South Sandwich Islands</option>
											<option value="199"  >Spain</option>
											<option value="200"  >Sri Lanka</option>
											<option value="201"  >Sudan</option>
											<option value="202"  >Suriname</option>
											<option value="203"  >Svalbard and Jan Mayen</option>
											<option value="204"  >Swaziland</option>
											<option value="205"  >Sweden</option>
											<option value="206"  >Switzerland</option>
											<option value="207"  >Syrian Arab Republic</option>
											<option value="208"  >Taiwan, Province of China</option>
											<option value="209"  >Tajikistan</option>
											<option value="210"  >Tanzania, United Republic of</option>
											<option value="211"  >Thailand</option>
											<option value="212"  >Timor-Leste</option>
											<option value="213"  >Togo</option>
											<option value="214"  >Tokelau</option>
											<option value="215"  >Tonga</option>
											<option value="216"  >Trinidad and Tobago</option>
											<option value="217"  >Tunisia</option>
											<option value="218"  >Turkey</option>
											<option value="219"  >Turkmenistan</option>
											<option value="220"  >Turks and Caicos Islands</option>
											<option value="221"  >Tuvalu</option>
											<option value="222"  >Uganda</option>
											<option value="223"  >Ukraine</option>
											<option value="224"  >United Arab Emirates</option>
											<option value="225"  >United Kingdom</option>
											<option value="226"  >United States</option>
											<option value="227"  >United States Minor Outlying Islands</option>
											<option value="228"  >Uruguay</option>
											<option value="229"  >Uzbekistan</option>
											<option value="230"  >Vanuatu</option>
											<option value="231"  >Venezuela</option>
											<option value="232"  >Viet Nam</option>
											<option value="233"  >Virgin Islands, British</option>
											<option value="234"  >Virgin Islands, U.s.</option>
											<option value="235"  >Wallis and Futuna</option>
											<option value="236"  >Western Sahara</option>
											<option value="237"  >Yemen</option>
											<option value="238"  >Zambia</option>
											<option value="239"  >Zimbabwe</option>
			            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Zipcode/Postalcode*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="jzipcode" name="zipcode" value="" required>
          </div>
        </div>
     
      <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label" style="color:#fff;">.</label>
          <div class="col-sm-4">
            <input type="submit" id="jsubmit_register" class="form-control-submit" style="background-color:#168ECE !important;text-align:center !important; color:#fff !important;" id="inputPassword3" name="btn_signup" value="Sign up and Continue" required>
          </div>
        </div>
      </form>
    </div>

		</div>
		</div>
		<figcaption class="ap-caption">Job Portal</figcaption>
                    </div>
                </li>
                <li>
<h2 id="doctors-h2"><span>Doctor's</span></h2>
<div id="second-sec" style="height:1010px !important;display:none;">
					<div style="overflow:auto;width:1024px;height:1020px;">
					  <div>
				<div class="content column-full container">
      <div class="page-header">
        <h1>Doctor's Registration</h1>
      </div>
      <form class="form-horizontal" role="form" name="createprofile" method="POST" action="" style="margin: 20px 0 0 0;">
		<div class="form-group" style="margin-top:20px;">
          <label for="inputEmail3" class="col-sm-3 control-label">First Name*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="fname" value"" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Second Name*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="surname" value""  required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Father's Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="fathername" value="" required>
          </div>
        </div>
		
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Email*</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" id="inputEmail3" name="email" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Password*</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" id="inputPassword3" name="password" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Mobile Phone*</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" id="inputPassword3" name="phone" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Gender*</label>
          <div class="col-sm-4">
            <select name="gender" class="form-control-countries" required>
								<option value="0">Select</option>
								<option value="1">Male</option>
								<option value="2">Female</option>
            </select>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Date of Birth(dd-mm-yyyy)*</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" id="inputPassword3" name="dob" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Qualification*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="degree" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Organization*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="organization" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Experience*</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" id="inputPassword3" name="experience" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line1 *</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="address" value="" required>
          </div>
        </div>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line2 </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="address1" value="">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">City*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="city" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">State/County*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="state" value="" required>
          </div>
        </div>
		   <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Country*</label>
          <div class="col-sm-4">
            <select name="country" class="form-control-countries" required>
            									<option value="1"  >Afghanistan</option>
											<option value="2"  >Albania</option>
											<option value="3"  >Algeria</option>
											<option value="4"  >American Samoa</option>
											<option value="5"  >Andorra</option>
											<option value="6"  >Angola</option>
											<option value="7"  >Anguilla</option>
											<option value="8"  >Antarctica</option>
											<option value="9"  >Antigua and Barbuda</option>
											<option value="10"  >Argentina</option>
											<option value="11"  >Armenia</option>
											<option value="12"  >Aruba</option>
											<option value="13"  >Australia</option>
											<option value="14"  >Austria</option>
											<option value="15"  >Azerbaijan</option>
											<option value="16"  >Bahamas</option>
											<option value="17"  >Bahrain</option>
											<option value="18"  >Bangladesh</option>
											<option value="19"  >Barbados</option>
											<option value="20"  >Belarus</option>
											<option value="21"  >Belgium</option>
											<option value="22"  >Belize</option>
											<option value="23"  >Benin</option>
											<option value="24"  >Bermuda</option>
											<option value="25"  >Bhutan</option>
											<option value="26"  >Bolivia</option>
											<option value="27"  >Bosnia and Herzegovina</option>
											<option value="28"  >Botswana</option>
											<option value="29"  >Bouvet Island</option>
											<option value="30"  >Brazil</option>
											<option value="31"  >British Indian Ocean Territory</option>
											<option value="32"  >Brunei Darussalam</option>
											<option value="33"  >Bulgaria</option>
											<option value="34"  >Burkina Faso</option>
											<option value="35"  >Burundi</option>
											<option value="36"  >Cambodia</option>
											<option value="37"  >Cameroon</option>
											<option value="38"  >Canada</option>
											<option value="39"  >Cape Verde</option>
											<option value="40"  >Cayman Islands</option>
											<option value="41"  >Central African Republic</option>
											<option value="42"  >Chad</option>
											<option value="43"  >Chile</option>
											<option value="44"  >China</option>
											<option value="45"  >Christmas Island</option>
											<option value="46"  >Cocos (Keeling) Islands</option>
											<option value="47"  >Colombia</option>
											<option value="48"  >Comoros</option>
											<option value="49"  >Congo</option>
											<option value="50"  >Congo, the Democratic Republic of the</option>
											<option value="51"  >Cook Islands</option>
											<option value="52"  >Costa Rica</option>
											<option value="53"  >Cote D'Ivoire</option>
											<option value="54"  >Croatia</option>
											<option value="55"  >Cuba</option>
											<option value="56"  >Cyprus</option>
											<option value="57"  >Czech Republic</option>
											<option value="58"  >Denmark</option>
											<option value="59"  >Djibouti</option>
											<option value="60"  >Dominica</option>
											<option value="61"  >Dominican Republic</option>
											<option value="62"  >Ecuador</option>
											<option value="63"  >Egypt</option>
											<option value="64"  >El Salvador</option>
											<option value="65"  >Equatorial Guinea</option>
											<option value="66"  >Eritrea</option>
											<option value="67"  >Estonia</option>
											<option value="68"  >Ethiopia</option>
											<option value="69"  >Falkland Islands (Malvinas)</option>
											<option value="70"  >Faroe Islands</option>
											<option value="71"  >Fiji</option>
											<option value="72"  >Finland</option>
											<option value="73"  >France</option>
											<option value="74"  >French Guiana</option>
											<option value="75"  >French Polynesia</option>
											<option value="76"  >French Southern Territories</option>
											<option value="77"  >Gabon</option>
											<option value="78"  >Gambia</option>
											<option value="79"  >Georgia</option>
											<option value="80"  >Germany</option>
											<option value="81"  >Ghana</option>
											<option value="82"  >Gibraltar</option>
											<option value="83"  >Greece</option>
											<option value="84"  >Greenland</option>
											<option value="85"  >Grenada</option>
											<option value="86"  >Guadeloupe</option>
											<option value="87"  >Guam</option>
											<option value="88"  >Guatemala</option>
											<option value="89"  >Guinea</option>
											<option value="90"  >Guinea-Bissau</option>
											<option value="91"  >Guyana</option>
											<option value="92"  >Haiti</option>
											<option value="93"  >Heard Island and Mcdonald Islands</option>
											<option value="94"  >Holy See (Vatican City State)</option>
											<option value="95"  >Honduras</option>
											<option value="96"  >Hong Kong</option>
											<option value="97"  >Hungary</option>
											<option value="98"  >Iceland</option>
											<option value="99"  selected="selected"  >India</option>
											<option value="100"  >Indonesia</option>
											<option value="101"  >Iran, Islamic Republic of</option>
											<option value="102"  >Iraq</option>
											<option value="103"  >Ireland</option>
											<option value="104"  >Israel</option>
											<option value="105"  >Italy</option>
											<option value="106"  >Jamaica</option>
											<option value="107"  >Japan</option>
											<option value="108"  >Jordan</option>
											<option value="109"  >Kazakhstan</option>
											<option value="110"  >Kenya</option>
											<option value="111"  >Kiribati</option>
											<option value="112"  >Korea, Democratic People's Republic of</option>
											<option value="113"  >Korea, Republic of</option>
											<option value="114"  >Kuwait</option>
											<option value="115"  >Kyrgyzstan</option>
											<option value="116"  >Lao People's Democratic Republic</option>
											<option value="117"  >Latvia</option>
											<option value="118"  >Lebanon</option>
											<option value="119"  >Lesotho</option>
											<option value="120"  >Liberia</option>
											<option value="121"  >Libyan Arab Jamahiriya</option>
											<option value="122"  >Liechtenstein</option>
											<option value="123"  >Lithuania</option>
											<option value="124"  >Luxembourg</option>
											<option value="125"  >Macao</option>
											<option value="126"  >Macedonia, the Former Yugoslav Republic of</option>
											<option value="127"  >Madagascar</option>
											<option value="128"  >Malawi</option>
											<option value="129"  >Malaysia</option>
											<option value="130"  >Maldives</option>
											<option value="131"  >Mali</option>
											<option value="132"  >Malta</option>
											<option value="133"  >Marshall Islands</option>
											<option value="134"  >Martinique</option>
											<option value="135"  >Mauritania</option>
											<option value="136"  >Mauritius</option>
											<option value="137"  >Mayotte</option>
											<option value="138"  >Mexico</option>
											<option value="139"  >Micronesia, Federated States of</option>
											<option value="140"  >Moldova, Republic of</option>
											<option value="141"  >Monaco</option>
											<option value="142"  >Mongolia</option>
											<option value="143"  >Montserrat</option>
											<option value="144"  >Morocco</option>
											<option value="145"  >Mozambique</option>
											<option value="146"  >Myanmar</option>
											<option value="147"  >Namibia</option>
											<option value="148"  >Nauru</option>
											<option value="149"  >Nepal</option>
											<option value="150"  >Netherlands</option>
											<option value="151"  >Netherlands Antilles</option>
											<option value="152"  >New Caledonia</option>
											<option value="153"  >New Zealand</option>
											<option value="154"  >Nicaragua</option>
											<option value="155"  >Niger</option>
											<option value="156"  >Nigeria</option>
											<option value="157"  >Niue</option>
											<option value="158"  >Norfolk Island</option>
											<option value="159"  >Northern Mariana Islands</option>
											<option value="160"  >Norway</option>
											<option value="161"  >Oman</option>
											<option value="162"  >Pakistan</option>
											<option value="163"  >Palau</option>
											<option value="164"  >Palestinian Territory, Occupied</option>
											<option value="165"  >Panama</option>
											<option value="166"  >Papua New Guinea</option>
											<option value="167"  >Paraguay</option>
											<option value="168"  >Peru</option>
											<option value="169"  >Philippines</option>
											<option value="170"  >Pitcairn</option>
											<option value="171"  >Poland</option>
											<option value="172"  >Portugal</option>
											<option value="173"  >Puerto Rico</option>
											<option value="174"  >Qatar</option>
											<option value="175"  >Reunion</option>
											<option value="176"  >Romania</option>
											<option value="177"  >Russian Federation</option>
											<option value="178"  >Rwanda</option>
											<option value="179"  >Saint Helena</option>
											<option value="180"  >Saint Kitts and Nevis</option>
											<option value="181"  >Saint Lucia</option>
											<option value="182"  >Saint Pierre and Miquelon</option>
											<option value="183"  >Saint Vincent and the Grenadines</option>
											<option value="184"  >Samoa</option>
											<option value="185"  >San Marino</option>
											<option value="186"  >Sao Tome and Principe</option>
											<option value="187"  >Saudi Arabia</option>
											<option value="188"  >Senegal</option>
											<option value="189"  >Serbia and Montenegro</option>
											<option value="190"  >Seychelles</option>
											<option value="191"  >Sierra Leone</option>
											<option value="192"  >Singapore</option>
											<option value="193"  >Slovakia</option>
											<option value="194"  >Slovenia</option>
											<option value="195"  >Solomon Islands</option>
											<option value="196"  >Somalia</option>
											<option value="197"  >South Africa</option>
											<option value="198"  >South Georgia and the South Sandwich Islands</option>
											<option value="199"  >Spain</option>
											<option value="200"  >Sri Lanka</option>
											<option value="201"  >Sudan</option>
											<option value="202"  >Suriname</option>
											<option value="203"  >Svalbard and Jan Mayen</option>
											<option value="204"  >Swaziland</option>
											<option value="205"  >Sweden</option>
											<option value="206"  >Switzerland</option>
											<option value="207"  >Syrian Arab Republic</option>
											<option value="208"  >Taiwan, Province of China</option>
											<option value="209"  >Tajikistan</option>
											<option value="210"  >Tanzania, United Republic of</option>
											<option value="211"  >Thailand</option>
											<option value="212"  >Timor-Leste</option>
											<option value="213"  >Togo</option>
											<option value="214"  >Tokelau</option>
											<option value="215"  >Tonga</option>
											<option value="216"  >Trinidad and Tobago</option>
											<option value="217"  >Tunisia</option>
											<option value="218"  >Turkey</option>
											<option value="219"  >Turkmenistan</option>
											<option value="220"  >Turks and Caicos Islands</option>
											<option value="221"  >Tuvalu</option>
											<option value="222"  >Uganda</option>
											<option value="223"  >Ukraine</option>
											<option value="224"  >United Arab Emirates</option>
											<option value="225"  >United Kingdom</option>
											<option value="226"  >United States</option>
											<option value="227"  >United States Minor Outlying Islands</option>
											<option value="228"  >Uruguay</option>
											<option value="229"  >Uzbekistan</option>
											<option value="230"  >Vanuatu</option>
											<option value="231"  >Venezuela</option>
											<option value="232"  >Viet Nam</option>
											<option value="233"  >Virgin Islands, British</option>
											<option value="234"  >Virgin Islands, U.s.</option>
											<option value="235"  >Wallis and Futuna</option>
											<option value="236"  >Western Sahara</option>
											<option value="237"  >Yemen</option>
											<option value="238"  >Zambia</option>
											<option value="239"  >Zimbabwe</option>
			            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Zipcode/Postalcode*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="zipcode" value="" required>
          </div>
        </div>
     
      <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label" style="color:#fff;">.</label>
          <div class="col-sm-4">
            <input type="submit" class="form-control-submit" style="background-color:#168ECE !important;text-align:center !important; color:#fff !important;" id="inputPassword3" name="btn_signup" value="Sign up and Continue" required>
          </div>
        </div>
      </form>
    </div>

		</div>
		</div>
		<figcaption class="ap-caption">Matrimony</figcaption>
                    </div>
                </li>
                <li>
                    <h2 id="retail-h2"><span>Retail</span></h2>
<div id="third-sec" style="height:1010px !important;display:none;">
					<div style="overflow:auto;width:1024px;height:1020px;">
					  <div>
					<div class="content column-full container">
      <div class="page-header">
        <h1>Retail's Registration</h1>
      </div>
     <form class="form-horizontal" role="form" name="createprofile" method="POST" action="" style="margin: 20px 0 0 0;">
		<div class="form-group" style="margin-top:20px;">
          <label for="inputEmail3" class="col-sm-3 control-label">First Name*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="fname" value"" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Second Name*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="surname" value""  required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Father's Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="fathername" value="" required>
          </div>
        </div>
		
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Email*</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" id="inputEmail3" name="email" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Password*</label>
          <div class="col-sm-4">
            <input type="password" class="form-control" id="inputPassword3" name="password" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Mobile Phone*</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" id="inputPassword3" name="phone" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Gender*</label>
          <div class="col-sm-4">
            <select name="gender" class="form-control-countries" required>
								<option value="0">Select</option>
								<option value="1">Male</option>
								<option value="2">Female</option>
            </select>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Date of Birth(dd-mm-yyyy)*</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" id="inputPassword3" name="dob" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Qualification*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="degree" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Organization*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="organization" value="" required>
          </div>
        </div>
		 <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Experience*</label>
          <div class="col-sm-4">
            <input type="number" class="form-control" id="inputPassword3" name="experience" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line1 *</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="address" value="" required>
          </div>
        </div>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Address Line2 </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" name="address1" value="">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">City*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="city" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">State/County*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="state" value="" required>
          </div>
        </div>
		   <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Country*</label>
          <div class="col-sm-4">
            <select name="country" class="form-control-countries" required>
            									<option value="1"  >Afghanistan</option>
											<option value="2"  >Albania</option>
											<option value="3"  >Algeria</option>
											<option value="4"  >American Samoa</option>
											<option value="5"  >Andorra</option>
											<option value="6"  >Angola</option>
											<option value="7"  >Anguilla</option>
											<option value="8"  >Antarctica</option>
											<option value="9"  >Antigua and Barbuda</option>
											<option value="10"  >Argentina</option>
											<option value="11"  >Armenia</option>
											<option value="12"  >Aruba</option>
											<option value="13"  >Australia</option>
											<option value="14"  >Austria</option>
											<option value="15"  >Azerbaijan</option>
											<option value="16"  >Bahamas</option>
											<option value="17"  >Bahrain</option>
											<option value="18"  >Bangladesh</option>
											<option value="19"  >Barbados</option>
											<option value="20"  >Belarus</option>
											<option value="21"  >Belgium</option>
											<option value="22"  >Belize</option>
											<option value="23"  >Benin</option>
											<option value="24"  >Bermuda</option>
											<option value="25"  >Bhutan</option>
											<option value="26"  >Bolivia</option>
											<option value="27"  >Bosnia and Herzegovina</option>
											<option value="28"  >Botswana</option>
											<option value="29"  >Bouvet Island</option>
											<option value="30"  >Brazil</option>
											<option value="31"  >British Indian Ocean Territory</option>
											<option value="32"  >Brunei Darussalam</option>
											<option value="33"  >Bulgaria</option>
											<option value="34"  >Burkina Faso</option>
											<option value="35"  >Burundi</option>
											<option value="36"  >Cambodia</option>
											<option value="37"  >Cameroon</option>
											<option value="38"  >Canada</option>
											<option value="39"  >Cape Verde</option>
											<option value="40"  >Cayman Islands</option>
											<option value="41"  >Central African Republic</option>
											<option value="42"  >Chad</option>
											<option value="43"  >Chile</option>
											<option value="44"  >China</option>
											<option value="45"  >Christmas Island</option>
											<option value="46"  >Cocos (Keeling) Islands</option>
											<option value="47"  >Colombia</option>
											<option value="48"  >Comoros</option>
											<option value="49"  >Congo</option>
											<option value="50"  >Congo, the Democratic Republic of the</option>
											<option value="51"  >Cook Islands</option>
											<option value="52"  >Costa Rica</option>
											<option value="53"  >Cote D'Ivoire</option>
											<option value="54"  >Croatia</option>
											<option value="55"  >Cuba</option>
											<option value="56"  >Cyprus</option>
											<option value="57"  >Czech Republic</option>
											<option value="58"  >Denmark</option>
											<option value="59"  >Djibouti</option>
											<option value="60"  >Dominica</option>
											<option value="61"  >Dominican Republic</option>
											<option value="62"  >Ecuador</option>
											<option value="63"  >Egypt</option>
											<option value="64"  >El Salvador</option>
											<option value="65"  >Equatorial Guinea</option>
											<option value="66"  >Eritrea</option>
											<option value="67"  >Estonia</option>
											<option value="68"  >Ethiopia</option>
											<option value="69"  >Falkland Islands (Malvinas)</option>
											<option value="70"  >Faroe Islands</option>
											<option value="71"  >Fiji</option>
											<option value="72"  >Finland</option>
											<option value="73"  >France</option>
											<option value="74"  >French Guiana</option>
											<option value="75"  >French Polynesia</option>
											<option value="76"  >French Southern Territories</option>
											<option value="77"  >Gabon</option>
											<option value="78"  >Gambia</option>
											<option value="79"  >Georgia</option>
											<option value="80"  >Germany</option>
											<option value="81"  >Ghana</option>
											<option value="82"  >Gibraltar</option>
											<option value="83"  >Greece</option>
											<option value="84"  >Greenland</option>
											<option value="85"  >Grenada</option>
											<option value="86"  >Guadeloupe</option>
											<option value="87"  >Guam</option>
											<option value="88"  >Guatemala</option>
											<option value="89"  >Guinea</option>
											<option value="90"  >Guinea-Bissau</option>
											<option value="91"  >Guyana</option>
											<option value="92"  >Haiti</option>
											<option value="93"  >Heard Island and Mcdonald Islands</option>
											<option value="94"  >Holy See (Vatican City State)</option>
											<option value="95"  >Honduras</option>
											<option value="96"  >Hong Kong</option>
											<option value="97"  >Hungary</option>
											<option value="98"  >Iceland</option>
											<option value="99"  selected="selected"  >India</option>
											<option value="100"  >Indonesia</option>
											<option value="101"  >Iran, Islamic Republic of</option>
											<option value="102"  >Iraq</option>
											<option value="103"  >Ireland</option>
											<option value="104"  >Israel</option>
											<option value="105"  >Italy</option>
											<option value="106"  >Jamaica</option>
											<option value="107"  >Japan</option>
											<option value="108"  >Jordan</option>
											<option value="109"  >Kazakhstan</option>
											<option value="110"  >Kenya</option>
											<option value="111"  >Kiribati</option>
											<option value="112"  >Korea, Democratic People's Republic of</option>
											<option value="113"  >Korea, Republic of</option>
											<option value="114"  >Kuwait</option>
											<option value="115"  >Kyrgyzstan</option>
											<option value="116"  >Lao People's Democratic Republic</option>
											<option value="117"  >Latvia</option>
											<option value="118"  >Lebanon</option>
											<option value="119"  >Lesotho</option>
											<option value="120"  >Liberia</option>
											<option value="121"  >Libyan Arab Jamahiriya</option>
											<option value="122"  >Liechtenstein</option>
											<option value="123"  >Lithuania</option>
											<option value="124"  >Luxembourg</option>
											<option value="125"  >Macao</option>
											<option value="126"  >Macedonia, the Former Yugoslav Republic of</option>
											<option value="127"  >Madagascar</option>
											<option value="128"  >Malawi</option>
											<option value="129"  >Malaysia</option>
											<option value="130"  >Maldives</option>
											<option value="131"  >Mali</option>
											<option value="132"  >Malta</option>
											<option value="133"  >Marshall Islands</option>
											<option value="134"  >Martinique</option>
											<option value="135"  >Mauritania</option>
											<option value="136"  >Mauritius</option>
											<option value="137"  >Mayotte</option>
											<option value="138"  >Mexico</option>
											<option value="139"  >Micronesia, Federated States of</option>
											<option value="140"  >Moldova, Republic of</option>
											<option value="141"  >Monaco</option>
											<option value="142"  >Mongolia</option>
											<option value="143"  >Montserrat</option>
											<option value="144"  >Morocco</option>
											<option value="145"  >Mozambique</option>
											<option value="146"  >Myanmar</option>
											<option value="147"  >Namibia</option>
											<option value="148"  >Nauru</option>
											<option value="149"  >Nepal</option>
											<option value="150"  >Netherlands</option>
											<option value="151"  >Netherlands Antilles</option>
											<option value="152"  >New Caledonia</option>
											<option value="153"  >New Zealand</option>
											<option value="154"  >Nicaragua</option>
											<option value="155"  >Niger</option>
											<option value="156"  >Nigeria</option>
											<option value="157"  >Niue</option>
											<option value="158"  >Norfolk Island</option>
											<option value="159"  >Northern Mariana Islands</option>
											<option value="160"  >Norway</option>
											<option value="161"  >Oman</option>
											<option value="162"  >Pakistan</option>
											<option value="163"  >Palau</option>
											<option value="164"  >Palestinian Territory, Occupied</option>
											<option value="165"  >Panama</option>
											<option value="166"  >Papua New Guinea</option>
											<option value="167"  >Paraguay</option>
											<option value="168"  >Peru</option>
											<option value="169"  >Philippines</option>
											<option value="170"  >Pitcairn</option>
											<option value="171"  >Poland</option>
											<option value="172"  >Portugal</option>
											<option value="173"  >Puerto Rico</option>
											<option value="174"  >Qatar</option>
											<option value="175"  >Reunion</option>
											<option value="176"  >Romania</option>
											<option value="177"  >Russian Federation</option>
											<option value="178"  >Rwanda</option>
											<option value="179"  >Saint Helena</option>
											<option value="180"  >Saint Kitts and Nevis</option>
											<option value="181"  >Saint Lucia</option>
											<option value="182"  >Saint Pierre and Miquelon</option>
											<option value="183"  >Saint Vincent and the Grenadines</option>
											<option value="184"  >Samoa</option>
											<option value="185"  >San Marino</option>
											<option value="186"  >Sao Tome and Principe</option>
											<option value="187"  >Saudi Arabia</option>
											<option value="188"  >Senegal</option>
											<option value="189"  >Serbia and Montenegro</option>
											<option value="190"  >Seychelles</option>
											<option value="191"  >Sierra Leone</option>
											<option value="192"  >Singapore</option>
											<option value="193"  >Slovakia</option>
											<option value="194"  >Slovenia</option>
											<option value="195"  >Solomon Islands</option>
											<option value="196"  >Somalia</option>
											<option value="197"  >South Africa</option>
											<option value="198"  >South Georgia and the South Sandwich Islands</option>
											<option value="199"  >Spain</option>
											<option value="200"  >Sri Lanka</option>
											<option value="201"  >Sudan</option>
											<option value="202"  >Suriname</option>
											<option value="203"  >Svalbard and Jan Mayen</option>
											<option value="204"  >Swaziland</option>
											<option value="205"  >Sweden</option>
											<option value="206"  >Switzerland</option>
											<option value="207"  >Syrian Arab Republic</option>
											<option value="208"  >Taiwan, Province of China</option>
											<option value="209"  >Tajikistan</option>
											<option value="210"  >Tanzania, United Republic of</option>
											<option value="211"  >Thailand</option>
											<option value="212"  >Timor-Leste</option>
											<option value="213"  >Togo</option>
											<option value="214"  >Tokelau</option>
											<option value="215"  >Tonga</option>
											<option value="216"  >Trinidad and Tobago</option>
											<option value="217"  >Tunisia</option>
											<option value="218"  >Turkey</option>
											<option value="219"  >Turkmenistan</option>
											<option value="220"  >Turks and Caicos Islands</option>
											<option value="221"  >Tuvalu</option>
											<option value="222"  >Uganda</option>
											<option value="223"  >Ukraine</option>
											<option value="224"  >United Arab Emirates</option>
											<option value="225"  >United Kingdom</option>
											<option value="226"  >United States</option>
											<option value="227"  >United States Minor Outlying Islands</option>
											<option value="228"  >Uruguay</option>
											<option value="229"  >Uzbekistan</option>
											<option value="230"  >Vanuatu</option>
											<option value="231"  >Venezuela</option>
											<option value="232"  >Viet Nam</option>
											<option value="233"  >Virgin Islands, British</option>
											<option value="234"  >Virgin Islands, U.s.</option>
											<option value="235"  >Wallis and Futuna</option>
											<option value="236"  >Western Sahara</option>
											<option value="237"  >Yemen</option>
											<option value="238"  >Zambia</option>
											<option value="239"  >Zimbabwe</option>
			            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Zipcode/Postalcode*</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputPassword3" name="zipcode" value="" required>
          </div>
        </div>
     
      <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label" style="color:#fff;">.</label>
          <div class="col-sm-4">
            <input type="submit" class="form-control-submit" style="background-color:#168ECE !important;text-align:center !important; color:#fff !important;" id="inputPassword3" name="btn_signup" value="Sign up and Continue" required>
          </div>
        </div>
      </form>
    </div>

		</div>
		</div>
		<figcaption class="ap-caption">Retail</figcaption>
                    </div>
                </li>
                <li>
                   </div>

		

		 <script>
                 $('#one').liteAccordion({ theme : 'light', rounded : true, enumerateSlides : true, firstSlide : 1, linkable : true, easing: 'easeInOutQuart' });
                $('.first').foggy({
   blurRadius: 2,          // In pixels.
   opacity: 0.8,           // Falls back to a filter for IE.
   cssFilterSupport: true  // Use "-webkit-filter" where available.
 }); 
            </script>
		
    </body>
</html>




