
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
                <h1>Masuk</h1>
                <form class="form-search" action="<?php echo site_url('home/login') ?>" method="post">
                    <div class="control-group">
                        <div class="groups">
                            <input type="text" class="" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="groups">
                            <input type="password" name="password" class="" placeholder="Password">
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
                                <button type="submit" class="btn orange">Masuk</button>
                        </div>
                    </div>
                    <div class="relogin">
                            <a>Tidak bisa masuk ?</a>
                    </div>
                </form>
                <h1>Daftar</h1>
                <div class="control-group">
                    <div class="groups">
                        <a href="<?php echo site_url('register'); ?>" class="btn orange">Daftar dengan email</a>
                    </div>
                </div>
                <div class="relogin"><a>atau</a></div><br>
                <div class="control-group">
                    <div class="groups">
                        <a class="btn blue" href="<?php echo $login_url ?>">Daftar lewat Facebook</a>
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
                <p>Jenuh dengan lawan yang itu-itu aja?<br>
                Pingin cari tantangan & temen baru?<br>
                Cari tahu seberapa hebat kemampuan kamu</p>
                <br>
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
                <h2>&gt;&gt;&gt; <a href="" class="btn purple big">Apa itu Sparing.id?</a> &lt;&lt;&lt;</h2>
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
		<div class="page-footer" style="color:#fff;text-align:center !important">
			Tentang Kami | Cara Pengunaan | Syarat & Ketentuan | Pernyataan | 2013 &copy; Sparring.co.id.
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