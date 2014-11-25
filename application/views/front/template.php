<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Lobi | Sparring</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() ?>assets/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url() ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/css/pages/profile.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/chosen-bootstrap/chosen/chosen.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/select2/select2_metro.css" />
    <link href="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>	assets/plugins/bootstrap-datepicker/css/datepicker.css" />



	<!-- END GLOBAL MANDATORY STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-boxed page-header-fixed <?php echo $pageType != 'page' ? 'page-sidebar-fixed': '' ?>">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.html">
                	<img src="<?php echo base_url() ?>images/system/logo.png" alt="logo" style="width: 100px" />
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="<?php echo base_url() ?>assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->     
                <?php if($pageType != 'page'): ?>       
				<!-- BEGIN TOP NAVIGATION MENU -->              
				<ul class="nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->   
					<li class="dropdown" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-warning-sign"></i>
						<span class="badge">6</span>
						</a>
						<ul class="dropdown-menu extended notification">
							<li>
								<p>You have 14 new notifications</p>
							</li>
							<li>
								<a href="#">
								<span class="label label-success"><i class="icon-plus"></i></span>
								New user registered. 
								<span class="time">Just now</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								Server #12 overloaded. 
								<span class="time">15 mins</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-warning"><i class="icon-bell"></i></span>
								Server #2 not respoding.
								<span class="time">22 mins</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-info"><i class="icon-bullhorn"></i></span>
								Application error.
								<span class="time">40 mins</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								Database overloaded 68%. 
								<span class="time">2 hrs</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-important"><i class="icon-bolt"></i></span>
								2 user IP blocked.
								<span class="time">5 hrs</span>
								</a>
							</li>
							<li class="external">
								<a href="#">See all notifications <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<li class="dropdown" id="header_inbox_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-envelope"></i>
						<span class="badge">5</span>
						</a>
						<ul class="dropdown-menu extended inbox">
							<li>
								<p>You have 12 new messages</p>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo"><img src="./assets/img/avatar2.jpg" alt="" /></span>
								<span class="subject">
								<span class="from">Lisa Wong</span>
								<span class="time">Just Now</span>
								</span>
								<span class="message">
								Vivamus sed auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>  
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo"><img src="./assets/img/avatar3.jpg" alt="" /></span>
								<span class="subject">
								<span class="from">Richard Doe</span>
								<span class="time">16 mins</span>
								</span>
								<span class="message">
								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>  
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo"><img src="./assets/img/avatar1.jpg" alt="" /></span>
								<span class="subject">
								<span class="from">Bob Nilson</span>
								<span class="time">2 hrs</span>
								</span>
								<span class="message">
								Vivamus sed nibh auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>  
								</a>
							</li>
							<li class="external">
								<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li>
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<li class="dropdown" id="header_task_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-tasks"></i>
						<span class="badge">5</span>
						</a>
						<ul class="dropdown-menu extended tasks">
							<li>
								<p>You have 12 pending tasks</p>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">New release v1.2</span>
								<span class="percent">30%</span>
								</span>
								<span class="progress progress-success ">
								<span style="width: 30%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">Application deployment</span>
								<span class="percent">65%</span>
								</span>
								<span class="progress progress-danger progress-striped active">
								<span style="width: 65%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">Mobile app release</span>
								<span class="percent">98%</span>
								</span>
								<span class="progress progress-success">
								<span style="width: 98%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">Database migration</span>
								<span class="percent">10%</span>
								</span>
								<span class="progress progress-warning progress-striped">
								<span style="width: 10%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">Web server upgrade</span>
								<span class="percent">58%</span>
								</span>
								<span class="progress progress-info">
								<span style="width: 58%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">Mobile development</span>
								<span class="percent">85%</span>
								</span>
								<span class="progress progress-success">
								<span style="width: 85%;" class="bar"></span>
								</span>
								</a>
							</li>
							<li class="external">
								<a href="#">See all tasks <i class="m-icon-swapright"></i></a>
							</li>
						</ul>
					</li>
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php if(isset($user_me['id'])): ?>
						<span class="username"><?php echo $user_me['name'] ?> &nbsp;</span>	
                		<img alt="" style="height:28px" src="http://graph.facebook.com/<?php echo $user_me['id'] ?>/picture" />
						<?php else: ?>
                        <span class="username">My Account &nbsp;</span>
                        <img alt="" src="http://localhost/sparring/assets/img/avatar1_small.jpg" />
                        <?php endif; ?>
						</a>
						<ul class="dropdown-menu">
							<li><a href="extra_profile.html"><i class="icon-user"></i> Profil Saya</a></li>
							<li><a href="page_calendar.html"><i class="icon-group"></i> Tim Saya</a></li>
							<li><a href="inbox.html"><i class="icon-cogs"></i> Pengaturan</a></li>
							<li class="divider"></li>
                            <li><a href="#"><i class="icon-question-sign"></i> Bantuan</a></li>
							<li class="divider"></li>
							<li><a href="extra_lock.html"><i class="icon-bullhorn"></i> Laporkan Masalah</a></li>
                            <li class="divider"></li>
							<?php if(!isset($user_me['id'])): ?>
							<li><a href="<?php echo site_url('home/logout') ?>"><i class="icon-signout"></i> Keluar</a></li>
                            <?php else: ?>
                            <li><a href="<?php echo $logout_url; ?>"><i class="icon-signout"></i> Keluar</a></li>
                            <?php endif; ?>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU --> 
                <?php endif; ?>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<div class="container">
		<!-- BEGIN CONTAINER -->  
		<div class="page-container row-fluid">
        	<?php if($pageType != 'page'): ?>
			<!-- BEGIN SIDEBAR -->
			<div class="page-sidebar nav-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->        
				<ul class="page-sidebar-menu">
					<li>
                    	<br>	
						<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                        <div class="input-icon left" >
                        	<i class="icon-hospital" style="color:#FFF !important"></i>
                            <div class="row-fluid">
                            <select id="select2_sample1" class="select2 span12 orange">
                                <option value="Yogyakarta" selected>Yogyakarta</option>
                                <option value="Denpasar">Denpasar</option>
                            </select>
                            </div>
						</div>
						<!-- END RESPONSIVE QUICK SEARCH FORM -->
					</li>
                    <br>
                    <!--<h3>Olahraga</h3>-->
                    <li class="active">
                        <a href="#" ><i class="icon-dribble" style="color:#28b779 !important"></i> Futsal</a>
                        <ul class="sub-menu" >
                            <li class="active">
                                <a href="layout_horizontal_sidebar_menu.html">Tantangan Terbuka</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Papan Pengumuman</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Venue</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Tabel Peringkat</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Kegiatan</a>
                            </li>
                        </ul>
					</li>
                    <li class="">
                        <a href="#" ><i class="icon-trophy" style="color:#28b779 !important"></i>  Sepakbola</a>
                        <ul class="sub-menu" >
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Tantangan Terbuka</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Papan Pengumuman</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Venue</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Tabel Peringkat</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Kegiatan</a>
                            </li>
                        </ul>
					</li>
                    <li class="">
                        <a href="#"><i class="icon-heart" style="color:#28b779 !important"></i>  Bulutangkis</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Tantangan Terbuka</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Papan Pengumuman</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Venue</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Tabel Peringkat</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Kegiatan</a>
                            </li>
                        </ul>
					</li>
                    <li class="">
                        <a href="#" ><i class="icon-group" style="color:#28b779 !important"></i>  Bola Basket</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Tantangan Terbuka</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Papan Pengumuman</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Venue</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Tabel Peringkat</a>
                            </li>
                            <li>
                                <a href="layout_horizontal_sidebar_menu.html">Kegiatan</a>
                            </li>
                        </ul>
					</li>
                    <li>
                    	<div class="portlet box" style="border:none !important;">
                        <div class="portlet-body">
                    	<form class="horizontal-form">
						<h3>Filter</h3>
                        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                        <div class="control-group">
                        	<!--<label class="control-label">Venue</label>-->
                            <div class="controls">
                                <div class="input-icon left">
                                    <i class="icon-map-marker"></i>
                                    <div class="row-fluid">
                                    <select id="select2_sample1" class="select3 span12" placeholder="Venue">
                                        <option value=""></option>
                                        <option value="Yogyakarta">MU Futsal - Jl. Kusumangegara</option>
                                        <option value="Denpasar">Pelle Futsal - Babarsari</option>
                                        <option value="Denpasar">Jogja Land Futsal - Jl. Timoho</option>
                                        <option value="Denpasar">Galaxy Futsal - Jl. Wonosari</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                        	<!--<label class="control-label">Type</label>-->
                            <div class="controls">
                                <div class="input-icon left">
                                    <i class="icon-hospital"></i>
                                    <div class="row-fluid">
                                    <select id="select2_sample1" class="select3 span12" placeholder="Type">
                                        <option value=""></option>
                                        <option value="Yogyakarta">50:50</option>
                                        <option value="Denpasar">Kalah Bayar</option>
                                        <option value="Denpasar">Reward</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                        	<!--<label class="control-label">Tanggal</label>-->
                            <div class="controls">
                                <div class="input-icon left" >
                                    <i class="icon-calendar"></i>
                                    <input class="m-wrap span12 date-picker" readonly  type="text" value="" placeholder="Tanggal main" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                        	<label class="control-label">Rata-rata usia: <span id="slider-range-amount"></span></label>
                            <div class="controls">
                                <div id="slider-range" class="slider bg-grey"></div>
                            </div>
                        </div>
                        <div class="control-group">
                        	<label class="control-label">Jam: <span id="slider-snap-inc-amount"></span></label>
                            <div class="controls">
                                <div id="slider-snap-inc" class="slider bg-grey"></div>
                            </div>
                        </div>
                        </form>
						</div>
						</div>
						<!-- END RESPONSIVE QUICK SEARCH FORM -->
					</li>
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
			<!-- END SIDEBAR -->
            <?php endif; ?>
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
					<!-- BEGIN PAGE CONTENT-->
                    <?php $this->load->view($content); ?>
					
					<!-- END PAGE CONTENT-->
				</div>
				<!-- END PAGE CONTAINER--> 
			</div>
			<!-- END PAGE -->          
		</div>
          
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="<?php echo base_url() ?>assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo base_url() ?>assets/plugins/excanvas.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/respond.min.js"></script>  
	<![endif]-->        
	<script src="<?php echo base_url() ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/select2/select2.min.js"></script>

	<script src="<?php echo base_url() ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?php echo base_url() ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-knob/js/jquery.knob.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

	<!-- END CORE PLUGINS -->
	<script src="<?php echo base_url() ?>assets/scripts/app.js"></script>  
    <script src="<?php echo base_url() ?>assets/scripts/ui-sliders.js"></script>
  
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		   UISliders.initSliders();

			
		   $('.select2').select2({
				allowClear: false,
				background: 'green'
			});
			
			$('.select3').select2({
				allowClear: false,
				background: 'grey'
			});
			
			$( ".ui-date-picker" ).datepicker();
			$('.date-picker').datepicker({
				language: 'en',
				rtl : App.isRTL()	
			});
			
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>