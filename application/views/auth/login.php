<!--<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>-->

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
    


    <form class="form-vertical login-form" action="<?php echo base_url();?>index.php/auth/login" method="post">
      <h4 class="form-title">Login to your account</h4>
      <div class="alert alert-error hide">
        <button class="close" data-dismiss="alert"></button>
        <span><?php echo $message;?></span>
      </div>
      <div class="control-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Username/Email</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-user"></i>
            <?php
              $identity=array(
                'name'=>'identity',                
                'placeholder'=>'Username/Email',
                'class'=>'m-wrap placeholder-no-fix',
                );
            ?>
                <?php echo form_input($identity);?>
              <!--<input class="m-wrap placeholder-no-fix" type="text" placeholder="Username/Email" name="$identity"/>-->
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-lock"></i>
            <?php
              $password=array(
                'name'=>'password',
                'type'=>'password',
                'placeholder'=>'Password',
                'class'=>'m-wrap placeholder-no-fix',
                );
            ?>
            <?php echo form_input($password);?>
            <!--<input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="$password"/>-->
          </div>
        </div>
      </div>
      <div class="form-actions">
        <label class="checkbox">
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>Remember me
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
      <h3 class="">Forgot Password ?</h3>
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
        Send <i class="m-icon-swapright m-icon-white"></i>
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
    2014 &copy; School Engagement Programme
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