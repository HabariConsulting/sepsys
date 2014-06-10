<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>SEP</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/metro.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/style_responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/style_default.css" rel="stylesheet" id="style_color" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/uniform/css/uniform.default.css" />
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico" />
<script language="JavaScript" type="text/javascript">
<!--

function Toggle(obj){
var val=obj.value;
if (!obj.m){ obj.m=''; }
if (!obj.m.match(val)){ obj.m+=','+val+','; }
var hide=obj.m.split(',');
for (var zxc0=0;zxc0<hide.length;zxc0++){
if (document.getElementById(hide[zxc0])){
document.getElementById(hide[zxc0]).style.display='none';
}
}
var show=val.split(',');
for (var zxc1=0;zxc1<show.length;zxc1++){
if (document.getElementById(show[zxc1])){
document.getElementById(show[zxc1]).style.display='';
}
}
}

//-->
</script>
</head>

<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
  <!-- BEGIN LOGO -->
  <div class="logo">
    <img src="<?php echo base_url();?>assets/img/logo-big.png" alt="" /> 
  </div>
  <!-- END LOGO -->
  <!-- BEGIN LOGIN -->
  
  <div class="content">
    <!-- BEGIN LOGIN FORM -->
    


    <form id="mybb-login" class="form-vertical login-form" action="<?php echo base_url();?>index.php/welcome/login" method="post">
      <h3 class="form-title">Login to your account</h3>
      <div class="alert alert-error hide">
        <button class="close" data-dismiss="alert"></button>
        <span>Enter any username and passowrd.</span>
      </div>
      <div class="control-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-user"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="username"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-lock"></i>
            <input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="password"/>
          </div>
        </div>
      </div>
      <div class="form-actions">
        <label class="checkbox">
        <input type="checkbox" name="remember" value="1"/> Remember me
        </label>
        
        <input type="submit" name="login" value="Login" class="btn blue pull-right"/><i class="m-icon-swapright m-icon-white"></i>
                   
      </div>
      <div class="forget-password">
        <h4>Forgot your password ?</h4>
        <p>
          no worries, click <a href="javascript:;" class="" id="forget-password">here</a>
          to reset your password.
        </p>
      </div>
      <div class="create-account">
        <p>
          Don't have an account yet ?&nbsp; 
          <a href="javascript:;" id="register-btn" class="">Create an account</a>
        </p>
      </div>
    </form>
    <!-- END LOGIN FORM -->        
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="form-vertical forget-form" action="index.html">
      <h3 class="">Forget Password ?</h3>
      <p>Enter your e-mail address below to reset your password.</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-envelope"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email" />
          </div>
        </div>
      </div>
      <div class="form-actions">
        <button type="button" id="back-btn" class="btn">
        <i class="m-icon-swapleft"></i> Back
        </button>
        <button type="submit" class="btn blue pull-right">
        Submit <i class="m-icon-swapright m-icon-white"></i>
        </button>            
      </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <form class="form-vertical register-form" action="<?php echo base_url();?>index.php/welcome/myaccount" method="post">
      <h3 class="">Sign Up</h3>
      <p>Enter your account details below:</p>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Surname</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-user"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Surname" name="surname"/>
          </div>
        </div>
      </div>
    
     
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Othernames</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-user"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Othernames" name="othernames"/>
          </div>
        </div>
      </div>
       <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Gender</label>
        <div class="controls">
          <div class="">
            <i class=" "></i>
            <select class="wrapper_reg_slct" name="user_gender" style="color:#777;font-size:12px">
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Phone Number</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-user"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Phone/Mobile Number" name="phone_number"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Address</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-user"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Mailing Address eg. 5896-00100" name="mailing_address"/>
          </div>
        </div>
      </div>
       <div class="control-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Email</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-envelope"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-user"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="username"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-lock"></i>
            <input class="m-wrap placeholder-no-fix" type="password" id="register_password" placeholder="Password" name="password"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-ok"></i>
            <input class="m-wrap placeholder-no-fix" type="password" placeholder="Re-type Your Password" name="rpassword"/>
          </div>
        </div>
      </div>
 <div class="control-group">
                              
                       <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">User Type</label>
        <div class="controls">
          <div class="">
            <i class=""></i>
            <select onchange="Toggle(this);" class="wrapper_reg_slct" name="user_type" style="color:#777;font-size:12px">
            <option>Select option</option>
            <option value="TB1">Kemri-Wellcome Scientist</option>
            <option value="TB2" >Teacher</option>
            <option value="TB2,TB3" >Student</option>
            <option value="TB2,TB3,TB4">Alumni</option>
            </select>
          </div>
        </div>
      </div>
         <select name="dept_id" id="TB1" placeholder="Choose Department" style="display:none;color:#777;font-size:12px" class="wrapper_reg_slct">
           <option style="color:#999;font-size:12px">Select Department</option>
		   <?php foreach($depts_fetch as $rows){
		echo '<option value="'.$rows->dept_id.'">'.$rows->dept_name.'</option>';
		}?>
            </select>
 
        <select  name="school_id" id="TB2" placeholder="Choose School" style="display:none;color:#777;font-size:12px" class="wrapper_reg_slct">
           <option>Select School</option>
		   <?php foreach($schools_fetch as $rows){
		echo '<option value="'.$rows->school_id.'">'.$rows->school_name.'</option>';
		}?>
            </select>
  
<input class="wrapper_reg" name="year_in" id="TB3" placeholder="Year into school" style="display:none;" > 
<input class="wrapper_reg" name="year_out" id="TB4" placeholder="Year out of school" style="display:none;" > 
 
   
      <div class="form-actions">
        <button id="register-back-btn" type="button" class="btn">
        <i class="m-icon-swapleft"></i>  Back
        </button>
        <button type="submit" id="register-submit-btn" class="btn blue pull-right">
        Sign Up <i class="m-icon-swapright m-icon-white"></i>
        </button>            
      </div>
    </form>
    <!-- END REGISTRATION FORM -->
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div class="copyright">
    2013 &copy; School Engagement Programme
  </div>

  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  <script src="<?php echo base_url();?>assets/js/jquery-1.8.3.min.js"></script>
  <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>  
  <script src="<?php echo base_url();?>assets/uniform/jquery.uniform.min.js"></script> 
  <script src="<?php echo base_url();?>assets/js/jquery.blockui.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/app.js"></script>
  <script>
    jQuery(document).ready(function() {     
      App.initLogin();
    });
  </script>
  
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>