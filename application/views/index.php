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
   <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />
   <link href="<?php echo base_url();?>assets/css/style_responsive.css" rel="stylesheet" />
   <link href="<?php echo base_url();?>assets/css/style_default.css" rel="stylesheet" id="style_color" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="<?php echo base_url();?>assets/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-daterangepicker/daterangepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/uniform/css/uniform.default.css" />
   <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
         <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="index.html">
            <img src="<?php echo base_url();?>assets/img/logo2.png" alt="logo" />
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
            <img src="<?php echo base_url();?>assets/img/menu-toggler.png" alt="" />
            </a>          
            <!-- END RESPONSIVE MENU TOGGLER -->            
            <!-- BEGIN TOP NAVIGATION MENU -->              
            <ul class="nav pull-right">
               <!-- BEGIN NOTIFICATION DROPDOWN -->   
              
               <!-- END NOTIFICATION DROPDOWN -->
               <!-- BEGIN INBOX DROPDOWN -->
              
               <!-- END INBOX DROPDOWN -->
               <!-- BEGIN TODO DROPDOWN -->
               
               <!-- END TODO DROPDOWN -->
               <!-- BEGIN USER LOGIN DROPDOWN -->
               <li class="dropdown user">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img alt="" src="<?php echo base_url();?>uploads/<?php echo $this->session->userdata("user_prof_pic");?>" height="29" width="29"/>
                  <span class="username"><?php echo $this->session->userdata("user_username");?></span>
                  <i class="icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a href="extra_profile.html"><i class="icon-user"></i> My Account</a></li>
                      
                     <li class="divider"></li>
                     <li><a href="<?php echo base_url();?>index.php/welcome/logout"><i class="icon-key"></i> Log Out</a></li>
                  </ul>
               </li>
               <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU --> 
         </div>
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div class="page-container row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar nav-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->         
         <ul>
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
               <form class="sidebar-search">
                  <div class="input-box">
                     <a href="javascript:;" class="remove"></a>
                     <input type="text" placeholder="Search..." />            
                     <input type="button" class="submit" value=" " />
                  </div>
               </form>
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
           <li 
                
                <?php if ($page_location=='Dashboard'){?>
					class="start active"
                    <?php }?>
                    >
					<a href="<?php echo site_url();?>/welcome/home">
					<i class="icon-home"></i> 
					<span class="title">Dashboard</span>
                    <?php if ($page_location=='Dashboard'){?>
					<span class="selected"></span>
                    <?php }?>
					</a>
				</li>
				
				<li <?php if ($page_location=='Booking'){?>
					class="start active"
                    <?php }?>>
					<a href="<?php echo site_url();?>/welcome/booking_tents">
					<i class="icon-bar-chart"></i> 
					<span class="title">Tents & Merchandise</span>
                    <?php if ($page_location=='Booking'){?>
					<span class="selected"></span>
                    <?php }?>
					</a>
				</li>
				
				<li <?php if ($page_location=='Profiles'){?>
					class="start active"
                    <?php }?>>
					<a href="<?php echo site_url();?>/welcome/profiles">
					<i class="icon-user"></i> 
					<span class="title">Company Profiles</span>
                    <?php if ($page_location=='Profiles'){?>
					<span class="selected"></span>
                    <?php }?>
					</a>
				</li>
               
                <li <?php if ($page_location=='Queries'){?>
					class="start active"
                    <?php }?>>
                    <a href="<?php echo site_url();?>/welcome/query_page">
                    <i class="icon-bookmark-empty"></i> 
                    <span class="title">Queries</span>
                    <?php if ($page_location=='Queries'){?>
					<span class="selected"></span>
                    <?php }?>
                    </a>
                </li>
         </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <div id="portlet-config" class="modal hide">
            <div class="modal-header">
               <button data-dismiss="modal" class="close" type="button"></button>
               <h3>portlet Settings</h3>
            </div>
            <div class="modal-body">
               <p>Here will be a configuration form</p>
            </div>
         </div>
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN STYLE CUSTOMIZER -->
                  <div class="color-panel hidden-phone">
                     <div class="color-mode-icons icon-color"></div>
                     <div class="color-mode-icons icon-color-close"></div>
                     <div class="color-mode">
                        <p>THEME COLOR</p>
                        <ul class="inline">
                           <li class="color-black current color-default" data-style="default"></li>
                           <li class="color-blue" data-style="blue"></li>
                           <li class="color-brown" data-style="brown"></li>
                           <li class="color-purple" data-style="purple"></li>
                           <li class="color-white color-light" data-style="light"></li>
                        </ul>
                        <label class="hidden-phone">
                        <input type="checkbox" class="header" checked value="" />
                        <span class="color-mode-label">Fixed Header</span>
                        </label>                    
                     </div>
                  </div>
                  <!-- END BEGIN STYLE CUSTOMIZER -->   
                  <h3 class="page-title">
                     Dashboard
                     <small>Welcome to Airshow Booking Module</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="<?php echo site_url();?>/welcome/home">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
            
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat blue">
								<div class="visual">
									<i class="icon-globe"></i>
								</div>
								<div class="details">
									<div class="number">
										KSH 8M
									</div>
									<div class="desc">
                                    MAC III<BR>									
										Title Sponsor
									</div>
								</div>
								<a class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat green">
								<div class="visual">
									<i class="icon-bar-chart"></i>
								</div>
								<div class="details">
									<div class="number">KSH 5M</div>
									<div class="desc">MAC II<BR>									
										Major Sponsor</div>
								</div>
								<a class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						<div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
							<div class="dashboard-stat purple">
								<div class="visual">
									<i class="icon-globe"></i>
								</div>
								<div class="details">
									<div class="number">KSH 3M</div>
									<div class="desc">
                                    MAC I<BR>									
										Major Sponsor</div>
								</div>
								<a class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat yellow">
								<div class="visual">
									<i class="icon-bar-chart"></i>
								</div>
								<div class="details">
									<div class="number">KSH 1.5M</div>
									<div class="desc">Corp. Responsibility</div>
								</div>
								<a class="more" href="<?php echo site_url();?>/welcome/booking_tents">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>						
							</div>
						</div>
					</div>
          
         
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      2013 &copy; Metronic by keenthemes.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-angle-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="<?php echo base_url();?>assets/js/jquery-1.8.3.min.js"></script>    
   <script src="<?php echo base_url();?>assets/breakpoints/breakpoints.js"></script>       
   <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url();?>assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
   <script src="<?php echo base_url();?>assets/js/jquery.blockui.js"></script>
   <script src="<?php echo base_url();?>assets/js/jquery.cookie.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="assets/js/excanvas.js"></script>
   <script src="assets/js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="<?php echo base_url();?>assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script src="<?php echo base_url();?>assets/js/app.js"></script>     
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>
