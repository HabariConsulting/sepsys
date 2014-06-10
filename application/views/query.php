<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Airshow</title>
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
            <img src="<?php echo base_url();?>assets/img/logo.png" alt="logo" />
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
                  <img alt="" src="<?php echo base_url();?>assets/img/avatar1_small.jpg" />
                  <span class="username">Bob Nilson</span>
                  <i class="icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
                     <li><a href="#"><i class="icon-tasks"></i> My Account</a></li>
                     <li class="divider"></li>
                     <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
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
           <li class="start active ">
					<a href="index.html">
					<i class="icon-home"></i> 
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>
				
				<li class="">
					<a href="charts.html">
					<i class="icon-bar-chart"></i> 
					<span class="title">Booking Of Tents</span>
					</a>
				</li>
				
				<li class="">
					<a href="login.html">
					<i class="icon-user"></i> 
					<span class="title">Company Profiles</span>
					</a>
				</li>
               
                <li class="has-sub ">
                    <a href="login.html">
                    <i class="icon-bookmark-empty"></i> 
                    <span class="title">Queries</span>
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
                     Queries
                     <small>Post your queries here</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
  <div class="row-fluid">
					 
						<div class="">
							<!-- BEGIN PORTLET-->
							<div class="portlet">
								<div class="portlet-title line">
									 
									<div class="tools">
										<a href="javascript:;" class="collapse"></a>
										<a href="#portlet-config" data-toggle="modal" class="config"></a>
										<a href="javascript:;" class="reload"></a>
										<a href="javascript:;" class="remove"></a>
									</div>
								</div>
								<div class="portlet-body" id="chats">
									<div class="scroller" data-height="343px" data-always-visible="1" data-rail-visible1="1">
										<ul class="chats">
											<li class="in">
												<img class="avatar" alt="" src="<?php echo base_url();?>assets/img/avatar1.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Bob Nilson</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
											<li class="out">
												<img class="avatar" alt="" src="<?php echo base_url();?>assets/img/avatar2.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Lisa Wong</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
											<li class="in">
												<img class="avatar" alt="" src="<?php echo base_url();?>assets/img/avatar1.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Bob Nilson</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
											<li class="out">
												<img class="avatar" alt="" src="<?php echo base_url();?>assets/img/avatar3.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Richard Doe</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
											<li class="in">
												<img class="avatar" alt="" src="<?php echo base_url();?>assets/img/avatar3.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Richard Doe</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
											<li class="out">
												<img class="avatar" alt="" src="<?php echo base_url();?>assets/img/avatar1.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Bob Nilson</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
											<li class="in">
												<img class="avatar" alt="" src="<?php echo base_url();?>assets/img/avatar3.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Richard Doe</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
													sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="chat-form">
										<div class="input-cont">   
											<input class="m-wrap" type="text" placeholder="Type a message here..." />
										</div>
										<div class="btn-cont"> 
											<span class="arrow"></span>
											<a href="javascript:;" class="btn blue icn-only"><i class="icon-ok icon-white"></i></a>
										</div>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
					</div>
            
            
            <!-- END PAGE CONTENT-->         
    
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
