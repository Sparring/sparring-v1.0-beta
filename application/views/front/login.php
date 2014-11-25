
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Selamat Datang | Sparring</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="assets/css/pages/lock.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
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
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<div class="page-lock">
		<div class="page-body">
           <div class="page-lock-info">
                <!--<h1>Masuk</h1>-->
                <form class="form-search" action="<?php echo site_url('home/login') ?>" method="post" style="text-align:left !important">
                	<div class="row-fluid">
                    <div class="control-group">
                    	<label class="control-label">Email</label>
                        <div class="groups">
                            <input type="text" class="m-wrap span12" name="email" placeholder="Alamat email anda">
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label">Kata sandi</label>
                        <div class="groups">
                            <input type="password" name="password" class="m-wrap 	span12" placeholder="Kata sandi anda">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="groups">
                            <label class="checkbox">
                            	<input type="checkbox" name="keep" > Biarkan saya tetap masuk
                        	</label>
                            	
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="groups">
                            <button type="submit" class="btn orange span12">Masuk</button>    
                        </div>
                    </div>
                    <div class="relogin span12">
                            Saya tidak bisa masuk! <a href="">Bantu saya!</a>
                    </div>
                    </div>
                </form>
                <h4>Belum punya akun?</h4>
                <div class="row-fluid">
                <div class="control-group">
                    <div class="groups">
                        <a href="<?php echo site_url('register'); ?>" class="btn green span12">Daftar dengan email</a>
                    </div>
                </div>
                </div>
                <div class="row-fluid">
                <div class="relogin span12">atau</div>
                </div>
                <div class="row-fluid">
                <div class="control-group">
                    <div class="groups">
                        <a class="btn blue span12" href="<?php echo $login_url ?>">Daftar lewat Facebook</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="page-lock-banner">
            	<h1>Welcome Broooo!!</h1>
                <br>
                <br>
                <br>
                
            	<img src="images/system/Graphic1.png" >
                <br>
                <br>
                <p style="color:#CCC !important">Jenuh dengan lawan yang itu-itu aja?<br>
                Pingin cari tantangan & temen baru?<br>
                Cari tahu seberapa hebat kemampuan kamu</p>
                <!--<h1>Welcome Broooo!!</h1>
                <p>Jenuh dengn lawan yang itu-itu aja?</p>
                <p>Pingin cari tantangan & temen baru?</p>
                <p>Cari tahu seberapa hebat kemampuan kamu</p>
                <br>
                <br>
                <h2>Gabung Sekarang!</h2>
                <p>Bangun tim bersama teman-temanmu <br> dan bermain dengan sportlover lainnya di kota mu</p>
                <br>
                <br>-->
                <h2><a href="" class="btn orange big">Apa itu ZonaTanding?</a></h2>
                <div class="page-footer" style="color:#486f7a;text-align:center !important">
			Tentang Kami | Cara Pengunaan | Syarat & Ketentuan | Pernyataan | 2013 &copy; Sparring.co.id.
		</div>
            </div>
            <!--<div class="page-lock-info">
                <h1>Daftar Sekarang!</h1>
				<form class="form-search" action="index.html">
					<div class="control-group">
                    	<div class="groups">
                        	<input type="text" class="m-wrap" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group">
                    	<div class="groups">
                        	<input type="text" class="m-wrap" placeholder="Password">
                        </div>
                    </div>
                    <div class="control-group">
                    	<div class="groups">
                        	<input type="text" class="m-wrap" placeholder="Ulangi Password">
                        </div>
                    </div>
                    <div class="control-group">
                    	<div class="groups">
                        	<input type="text" class="m-wrap" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="control-group">
                    	<div class="groups">
                        	<button type="submit" class="btn green">Daftar dengan email</button>
                        </div>
                    </div>
                    <div class="relogin"><a>atau</a></div><br>
                    <div class="control-group">
                    	<div class="groups">
                        	<a class="btn blue" href="<?php echo $login_url ?>">Daftar lewat Facebook</a>
                        </div>
                    </div>
				</form>
			</div>
            <img class="page-lock-img" src="assets/img/profile/profile.jpg" alt="">-->
			
		</div>
		
	</div>
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->   
	<script src="assets/scripts/app.js"></script>  
	<script src="assets/scripts/lock.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		   //Lock.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>