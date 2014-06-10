<!DOCTYPE html>
<html lang="en">

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
   <link href="<?php echo base_url();?>assets/css/style_light.css" rel="stylesheet" id="style_color" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
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
    <link href="<?php echo base_url();?>assets/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/jquery-tags-input/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/clockface/css/clockface.css" />
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
            <a class="brand" href="<?php echo site_url();?>/welcome/home">
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
                
              
               <!-- END TODO DROPDOWN -->
               <!-- BEGIN USER LOGIN DROPDOWN -->
       <li class="dropdown user">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img alt="" src="<?php echo base_url();?>uploads/jacksparrow.jpg" height="29" width="29"/>
                  <span class="username"><?php echo $this->session->userdata("username");?></span>
                  <i class="icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                  <?php if ($page_location=='Registration'){?>
                      &nbsp; <?php }else{?>
						 <li><a href="<?php echo base_url();?>index.php/auth/index"><i class="icon-user"></i> My Account</a></li>
                      
                     <li class="divider"></li>
						 <?php }?>
                     <li><a href="<?php echo base_url();?>index.php/auth/logout"><i class="icon-key"></i> Log Out</a></li>
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
					<a href="<?php echo site_url();?>/auth/index">
					<i class="icon-home"></i> 
					<span class="title">My profile</span>
                    <?php if ($page_location=='Dashboard'){?>
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
                     <?php echo $page_title;?>
                     <small><?php echo $page_sub_title;?></small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                         <?php if ($page_location=='Registration'){?>
                        <a href="#">Home</a> <?php }else{?>
                        <a href="<?php echo site_url();?>/welcome/home">Home</a>
						<?php }?>
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#"><?php echo $page_title;?></a>
                        
                     </li>
                     
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
            
            
            
    
   
    