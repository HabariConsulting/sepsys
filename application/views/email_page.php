<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>Metronic Admin Dashboard Template</title>
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
 
    <!-- END LOGIN FORM -->        
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="form-vertical login-form" action="index.html">
      <h3 class="">Email Already Exists</h3>
      <p>Sorry the email you chose already exists, please choose another</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-icon left">
             
             
          </div>
        </div>
      </div>
      <div class="form-actions">
        <a href="<?php echo site_url();?>/welcome"><button type="button" id="" class="btn">
        <i class="m-icon-swapleft"></i> Back
        </button></a>
                   
      </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    
    <!-- END REGISTRATION FORM -->
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div class="copyright">
    2013 &copy; Kenya Airshow Festival
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