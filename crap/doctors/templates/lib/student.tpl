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
	
     
    </head>
    
    <body>
	{include file=header.tpl}
		
{literal}
    <title>Student Details</title>
<script type="text/javascript">
$(document).on('click','#submit',function(e){
   var sfname 	= $.trim($('#sfname').val());
    if(sfname.length == 0){
          $('.jadd_user_err').html('Please fill the Student First Name!!!!').show(); 
		 return false;
       }
   var slname 	= $.trim($('#slname').val());
    if(slname.length == 0){
          $('.jadd_user_err').html('Please fill the Student Last Name!!!!').show(); 
		 return false;
       }
   var sid 	= $.trim($('#sid').val());
    if(sid.length == 0){
          $('.jadd_user_err').html('Please fill the Student ID!!!!').show(); 
		 return false;
       }
   var schoolid 	= $.trim($('#schoolid').val());
   var fname 	= $.trim($('#fname').val());
    if(fname.length == 0){
          $('.jadd_user_err').html('Please fill the Student Father Name!!!!').show(); 
		 return false;
       }
   var mname 	= $.trim($('#mname').val());
    if(mname.length == 0){
          $('.jadd_user_err').html('Please fill the Student Mother Name!!!!').show(); 
		 return false;
       }
   var dob 	= $.trim($('#dob').val());
    if(dob.length == 0){
          $('.jadd_user_err').html('Please fill the Student Date of Birth!!!!').show(); 
		 return false;
       }
   var standard 	= $.trim($('#standard').val());
    if(standard.length == 0){
          $('.jadd_user_err').html('Please fill the Student standard!!!!').show(); 
		 return false;
       }
   var section 	= $.trim($('#section').val());
   if(section.length == 0){
          $('.jadd_user_err').html('Please fill the Student section!!!!').show(); 
		 return false;
       }
   var gender 	= $.trim($('#gender').val());
   var address 	= $.trim($('#address').val());
   if(address.length == 0){
          $('.jadd_user_err').html('Please fill the Student address!!!!').show(); 
		 return false;
       }
   var city 	= $.trim($('#city').val());
   if(city.length == 0){
          $('.jadd_user_err').html('Please fill the Student city!!!!').show(); 
		 return false;
       }
   var pincode 	= $.trim($('#pincode').val());
   if(pincode.length == 0){
          $('.jadd_user_err').html('Please fill the Student pincode!!!!').show(); 
		 return false;
       }
   var blood 	= $.trim($('#blood').val());
   if(blood.length == 0){
          $('.jadd_user_err').html('Please fill the Student blood group!!!!').show(); 
		 return false;
       }
   var email 	= $.trim($('#email').val());
   var phone 	= $.trim($('#phone').val());
   if(phone.length == 0){
          $('.jadd_user_err').html('Please fill the Guardian Phone number!!!!').show(); 
		 return false;
       }
   var gtype 	= $.trim($('#gtype').val());
 
         if(schoolid == 0){
          $('.jadd_user_err').html('Please Select the School!!!!').show(); 
         alert('Please Select the School');
		 return false;
       }else if(gender == 0){
           $('.jadd_user_err').html('Please Select the Gender!!').show();
			alert('Please Select the Gender!!');
          return false;
       }else if(gtype == 0){
           $('.jadd_user_err').html('Please Select the Gaurdian!!').show();
			alert('Please Select the Gaurdian!!');
          return false;
       }else if (!/^[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(email)){
         $('.jadd_user_err').html('Invalid Email ID!!').show();
			alert('Invalid Email ID!!');
          return false;
       }else{
	      e.preventDefault();
	             $.ajax({
                  url:"student-add.php",
                  type:"POST",
				  data:{section:section,standard:standard,sfname:sfname,slname:slname,sid:sid,schoolid:schoolid,fname:fname,mname:mname,dob:dob,gender:gender,address:address,city:city,pincode:pincode,blood:blood,email:email,phone:phone,gtype:gtype},
                  success:function(resp){
				          var trim_resp = $.trim(resp);
                                if(trim_resp =='2'){
							$('.jadd_user_err').html('Student Details Already Exist!!!').show();
							alert('Student Details Already Exist!!!');
				      return false;
								}else if(trim_resp =='0'){
							$('.jadd_user_err').html('Wrong Credentials!!!').show();
							alert('Wrong Credentials!!!');
				      return false;
								}else if(trim_resp == '1'){
									$('.jadd_user_err').html('Person Added Successfully!!!').show();
							  alert('Person Added Successfully!!!');
                                       setTimeout(function() {
										 $('#sfname').val('');
										 $('#slname').val('');
										 $('#sid').val('');
										 $('#schoolid').val(0);
										 $('#fname').val('');
										 $('#mname').val('');
										 $('#dob').val('');
										 $('#standard').val('');
										 $('#section').val('');
										 $('#gender').val(0);
										 $('#address').val('');
										 $('#city').val('');
										 $('#pincode').val('');
										 $('#blood').val('');
										 $('#email').val('');
										 $('#phone').val('');
										 $('#gtype').val('');
					}, 1); 
                               }
                        }    
                  });
	   }     
}); 
</script>
{/literal}
<div style="width:80%;margin-left:100px;text-align:center;margin-top:10px;height:auto;">
<div id="connections-menu">
            <ul id="connect-ul"> 
          	  <li><a href="index.php" data-original-title="">My Profile</a></li>
			  <li class="active"><a href="student.php" data-original-title="">Add Student</a></li>
			  <li><a href="report.php" data-original-title="">Student Report</a></li>
            </ul>   
			<!-- customize utter -->
			
			<!-- end customize utter -->         
            <div class="clear"></div>
			</div>
<div class="post-title" style="width:98% !important;">
<div class="jadd_user_err" style="align:center;display:none;clear:both;text-align:center;font-size: 12px;color: #168ECE"></div>
 
                    <h3 style="text-align:center;">Student Details</h3>	
                    <div class="clear"></div>
</div>
<div class="person-details1" style="margin-bottom:30px;border:1px solid #eee !important;width:100%;border-radius:0 0 5px 5px !important;height:auto;">   
	
     <form class="form-horizontal" role="form" name="studentadd" method="POST" action="javascript:" style="margin: 20px 0 0 0;">
<p>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Student First Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="sfname" name="fname" value="" required>
          </div>
        
        </div>
		</p>
		<p>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Student Last Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="slname" name="lname" value="" required>
          </div>
        
        </div>
		</p>
      <p>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Student ID </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="sid" name="sid" value="" required>
          </div>
        </div>
		</p>
		    <p>
        <div class="form-group" style="height:35px !important;weight:103% !important;">
          <label for="inputPassword3" class="col-sm-3 control-label">School Name</label>
          <div class="col-sm-4">
            <select id="schoolid" name="country" class="form-control" required>
				<option value="0">Select</option>
				<option value="1">Narayana</option>
            </select>
          </div>
        </div>
    </p>
		<p>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Standard</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="standard" name="standard" value="" required>
          </div>
        </div>
		</p>
		<p>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Section </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="section" name="section" value="" required>
          </div>
        </div>
		</p>
      <p>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Father Name </label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="fname" name="fathername" value="" required>
          </div>
        </div>
		</p>
      <p>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Mother Name</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="mname" name="mname" value="" required>
          </div>
        </div>
		</p>
      <p>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Date of Birth</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="dob" name="state" value="" required>
          </div>
        </div>
		</p>
	<p>
            <div class="form-group form-group002">
              <label for="inputPassword3" class="col-sm-3 control-label"> Profile Image</label>
              <div class="col-sm-4">
                <input type="file"  accept="image/*" multiple name="companylogo[]" type="file" onchange="imageupload()" class="form-control form-control003 companylogo" id="inputEmail3 temp" value="" placeholder="" >
                </div>
	</p>
      <p>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Address</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="address" name="address" value="" required>
          </div>
        </div>
		</p>
      <p>
        <div class="form-group" style="height:35px !important;weight:103% !important;">
          <label for="inputPassword3" class="col-sm-3 control-label">Gender</label>
          <div class="col-sm-4">
            <select id="gender" name="country" class="form-control" required>
				<option value="0" >Select</option>
				<option value="1">Male</option>
				<option value="2">Female</option>
            </select>
          </div>
        </div>
    </p>
      <p>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Blood Group</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="blood" name="name" value"" required>
          </div>
        </div>
		</p>
      <p>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">City</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="city" name="city" value""  required>
          </div>
        </div>
		</p>
      <p>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Pincode</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="pincode" name="pincode" value="" required>
          </div>
        </div>
		</p>
      <p>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Guardian Email </label>
          <div class="col-sm-4">
            <input type="email" class="form-control" id="email" name="email" value="" required>
          </div>
        </div>
		</p>
      <p>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">Guardian Phone</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="phone" name="phone" value="" required>
          </div>
        </div>
		</p>
		    <p>
        <div class="form-group" style="height:35px !important;weight:103% !important;">
          <label for="inputPassword3" class="col-sm-3 control-label">Guardian </label>
          <div class="col-sm-4">
            <select id="gtype" name="country" class="form-control" required>
				<option value="0">Select</option>
				<option value="1">Father</option>
				<option value="2">Mother</option>
            </select>
          </div>
        </div>
    </p>
		<p>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label" style="color:#fff;">.</label>
          <div class="col-sm-4">
            <input type="submit" id="submit" class="btn btn-info btn-block" style="width:150px !important; text-align:center !important; color:#fff !important;" name="btn_signup" value="Add Student" required>
          </div>
        </div>
        </p>
      </form>
    </div>
</div>
{literal}
<style type="text/css">

#footer {
   position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:90%;
   margin-left: 77px !important;
   border-top: 4px solid #a5c451 !important;
   background:#fff !important;
}

/* IE 6 */
* html #footer {
   position:absolute;
   margin-left: 77px !important;
   width:90% !important;
   top:expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+'px');
}
</style>
{/literal}
<div id="footer">
			<div style="clear: both"></div>
		</div>
    </body>
</html>