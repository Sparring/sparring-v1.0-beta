<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1
Version: 1.3
Author: KeenThemes
Website: http://www.keenthemes.com/preview/?theme=metronic
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title><?php echo $this->configuration->get_profile()->row()->name ?> Admin </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link rel="icon" type="image/png" href="favicon.ico" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url(); ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/data-tables/DT_bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css"/>
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/jquery-nestable/jquery.nestable.css" />
	<link href="<?php echo base_url(); ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/chosen-bootstrap/chosen/chosen.css" rel="stylesheet" type="text/css"/>





	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
	<style>
		.center{
			text-align:center;	
		}
		
		.total{
			float:right;
			font-size:32px;
			font-family:'Lucida Sans Unicode'	
		}
		
		.btn-remove{
			padding:2px 4px;border-radius:50px;		
		}
		
		.rupiah{
			float:left;	
		}
	</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-sidebar-fixed ">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="<?php echo base_url() ?>">
				<img src="<?php echo base_url() ?>/Images/<?php echo $this->configuration->get_profile()->row()->logo ?>" alt="logo" style="height:25px;"/> <?php echo $this->configuration->get_profile()->row()->name ?>
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->            
				<!-- BEGIN TOP NAVIGATION MENU -->              
				<ul class="nav pull-right">
					
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="username">My Account</span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('adminDashboard/dashboard/profile') ?>"><i class="icon-user"></i> My Account</a></li>
                            <li class="divider"></li>
							<li><?php echo anchor('admin/login/logout', '<i class="icon-key"></i> Logout' ); ?></li>
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
	<div class="page-container">
		
		<!-- BEGIN SIDEBAR -->
        <?php $this->load->view('admin/sidebar'); ?>
        <!-- END SIDEBAR -->
        <!-- BEGIN PAGE -->
		<div class="page-content">	
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<?php $this->load->view('admin/breadcrumb'); ?>						
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<div id="dashboard">
					<div class="clearfix"></div>
					<div class="row-fluid">
					<?php $this->load->view($content); ?>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTAINER-->    
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?php echo base_url(); ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/data-tables/DT_bootstrap.js"></script>

	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script> 

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-nestable/jquery.nestable.js"></script>  
	<script src="<?php echo base_url(); ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>   
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>


	


	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url(); ?>assets/scripts/app.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/form-components.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/scripts/table-advanced.js"></script>     
	<script src="<?php echo base_url(); ?>assets/scripts/ui-modals.js"></script> 
	<script src="<?php echo base_url(); ?>assets/scripts/ui-nestable.js"></script>
	<script src="<?php echo base_url(); ?>assets/scripts/gallery.js"></script>  


	<!-- END PAGE LEVEL SCRIPTS -->  
	<script>
	var base_url = '<?php echo site_url(); ?>/';
	var base_url_image = '<?php echo base_url(); ?>/';
		jQuery(document).ready(function() {    
		   App.init();
		   TableAdvanced.init();
		   UIModals.init();
		   FormComponents.init();
		   UINestable.init();
		   Gallery.init();

		});
	</script>
	<script>
		var browser = navigator.vendor;

		var opens;
		function closeit() {
			opens.close();
		}
		
		function closePrint () {
		  document.body.removeChild(this.__container__);
		}
		
		function setPrint () {
		  this.contentWindow.__container__ = this;
		  this.contentWindow.onbeforeunload = closePrint;
		  this.contentWindow.onafterprint = closePrint;
		  this.contentWindow.focus(); // Required for IE
		  this.contentWindow.print();
		}
		
		function printPage (sURL) {
		  var oHiddFrame = document.createElement("iframe");
		  oHiddFrame.onload = setPrint;
		  oHiddFrame.style.visibility = "hidden";
		  oHiddFrame.style.position = "fixed";
		  oHiddFrame.style.right = "0";
		  oHiddFrame.style.bottom = "0";
		  oHiddFrame.src = sURL;
		  document.body.appendChild(oHiddFrame);
		}

		$(document).on('keypress','.qty',function(event){
			var qty = $(this).val();
			var len = qty.length;
			var val = event.which;
			myArray = new Array();
			myArray[0] = 48;
			myArray[1] = 49;
			myArray[2] = 50;
			myArray[3] = 51;
			myArray[4] = 52;
			myArray[5] = 53;
			myArray[6] = 54;
			myArray[7] = 55;
			myArray[8] = 56;
			myArray[9] = 57;
			
			if(val == 13){
				$(this).parent('form').submit();
			}else if($.inArray(val, myArray) == -1 || len == 3 ){
				$(this).focus();
				return false;
			}else {
				return true;	
			}
			
		});
		
		$(document).on('keypress','[data-type="number"]',function(event){
			var qty = $(this).val();
			var maxlength = $(this).attr('data-length');
			var len = qty.length;
			var val = event.which;
			myArray = new Array();
			myArray[0] = 48;
			myArray[1] = 49;
			myArray[2] = 50;
			myArray[3] = 51;
			myArray[4] = 52;
			myArray[5] = 53;
			myArray[6] = 54;
			myArray[7] = 55;
			myArray[8] = 56;
			myArray[9] = 57;
			
			if(val == 13){
				$(this).parent('form').submit();
			}else if($.inArray(val, myArray) == -1 || len == maxlength ){
				$(this).focus();
				return false;
			}else {
				return true;	
			}
			
		});
		
		$(document).on('click','.btn-remove',function(){
			var ID = $(this).attr('name');
			var row_id = $(this).parent().parent().attr('data-rowid');
			url = base_url + 'transaksi/transaksi/removeItem';
			$.post(url,{row_id : row_id},function(data){
				$('.table tr#'+ID).remove();
				$('.total-bayar').text(data);
			});
		});
		
		$(document).on('click','[data-type="batal-transaksi"]',function(){
			var confirmation = confirm('Anda yakin ingi membatalkan transaksi ini?');
			var url = base_url + 'transaksi/transaksi/batal';
			
			if(confirmation == true){
				$.post(url,function(data){
					$('.table tr[data-type="item"]').remove();
					$('input[name="dibayar"]').val('');
					$('input[name="diskon"]').val('');
					$('.total-bayar').text('0');
				});
			}
		});
		
		$(document).on('click','[data-type="simpan-transaksi"]',function(){
			var dibayar = $('input[name="dibayar"]').val();
			var diskon = $('input[name="diskon"]').val();
			var url = base_url + 'transaksi/transaksi/simpan';
			
			if(dibayar == '' || dibayar == '0'){
				alert('Silahkan isi uang pembayaran terlebih dahulu');
				$('input[name="dibayar"]').focus();
			}else{
				$.post(url,{dibayar : dibayar, diskon : diskon},function(data){
					
					if(data == 'error100'){
						alert('Transaksi gagal disimpan');
					}else{
						
						alert('Transaksi berhasil disimpan. Uang kembali Rp '+ data);
						$('*[data-type="item"]').remove();
						$('input[name="dibayar"]').val('');
						$('input[name="diskon"]').val('');
						$('.total-bayar').text('0');
						$('.proses_save').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> Tarnsaksi berhasil disimpan. Silahkan lanjutkan transaksi berikutnya</div>');
						//if(browser == 'Google Inc.'){
							document.getElementById('cetak_nota').click();
						/*}else{
							opens = window.open(base_url + 'transaksi/transaksi/cetak','asd','scrollbars=no,resizable=no, fullscreen=yes');
						}*/
						//document.body.removeChild();
					}
				});
			}
		});
		
		$(document).on('click','[data-type="remove-item"]',function(){
			$('input[name="kode_barcode"]').val('').focus();
			$('input[name="kode_barang"]').val('');
			$('input[name="nama_barang"]').val('');
			$('input[name="jumlah"]').val('');
			$('input[name="harga_satuan"]').val('');
			$('input[name="ID"]').val('');
		});
		
		
		$(document).on('submit','#add_item',function(){
			var ID = $('input[name="ID"]').val();
			var kode_barcode = $('input[name="kode_barcode"]').val();
			var kode_barang = $('input[name="kode_barang"]').val();
			var nama_barang = $('input[name="nama_barang"]').val();
			var jumlah = $('input[name="jumlah"]').val();
			var harga_satuan = $('input[name="harga_satuan"]').val();
			var total = $('.total-bayar').text();
			
			var subtotal = jumlah * harga_satuan;
			
			var exist = $('#tr'+ID).length;
			
			if(ID == '' ) return false;
			if(kode_barang == '' ) return false;
			if(kode_barcode == '' ) return false;
			if(nama_barang == '' ) return false;
			
			if(exist == 0){
				
				url = base_url + 'transaksi/transaksi/addItem';
				$.post(url,{ID : ID, jumlah : jumlah},function(data){
					if(data == 'error100'){
						alert('Gagal memasukkan barang. Stok tidak mencukupi');
					}else{
						data = data.split(':');
						html = '<tr id="tr'+ID+'" data-rowid="'+data[0]+'" data-id="'+ID+'" data-type="item"><td style="text-align:center">'+kode_barang+'</td>';
						html += '<td>'+nama_barang+'</td>';
						html += '<td style="text-align:center"><input type="text" style="width:30px;margin:0px;padding:0px 2px" class="qty" data-type="qty" value="'+jumlah+'" /></td>';
						html += '<td style="text-align:right"><span class="rupiah">Rp</span>'+harga_satuan+'</td>';
						html += '<td style="text-align:right" class="total_harga"><span class="rupiah">Rp</span><span class="harga_satuan">'+subtotal+'</span></td>';
						html += '<td><a  class="btn red mini btn-remove" name="tr'+ID+'"><i class="icon-remove"></i></a></td></tr>';
						$('.table').append(html);
						$('.total-bayar').text(data[1]);
						$('input[name="kode_barcode"]').val('').focus();
						$('input[name="kode_barang"]').val('');
						$('input[name="nama_barang"]').val('');
						$('input[name="jumlah"]').val('');
						$('input[name="harga_satuan"]').val('');
						$('input[name="ID"]').val('');

					}
				});
				
			}else{
				cur_qty = $('#tr'+ID+' .qty').val();
				row_id = $('#tr'+ID).attr('data-rowid');
				qty = parseInt(cur_qty) + parseInt(jumlah);
				subtotal = qty * harga_satuan;
				
				url = base_url + 'transaksi/transaksi/updateItem';
				$.post(url,{row_id : row_id, jumlah : qty, ID : ID},function(data){
					if(data == 'error100'){
						alert('Gagal melakukan perubahan. Stok tidak mencukupi');
						$('#tr'+ID+' .qty').val(cur_qty);
					}else{
						$('#tr'+ID+' .qty').val(qty);
						$('#tr'+ID+' .total_harga').html('<span class="rupiah">Rp</span>' +  subtotal);
						$('.total-bayar').text(data);
						
						$('input[name="kode_barcode"]').val('').focus();
						$('input[name="kode_barang"]').val('');
						$('input[name="nama_barang"]').val('');
						$('input[name="jumlah"]').val('');
						$('input[name="harga_satuan"]').val('');
						$('input[name="ID"]').val('');					
					}
				});

			}			
			
			return false;
		});
		
		$(document).on('keyup','input[name="diskon"]',function(){
			var diskon = $(this).val();
			var limit = diskon.length - 1
			
			url = base_url + 'transaksi/transaksi/updateDiskon';
			$.post(url,{diskon : diskon},function(data){
				if(data == 'error100'){
					$('input[name="diskon"]').val(diskon.substr(0,limit));
					alert('Diskon tidak boleh lebih besar dari total pembelian');
				}else{
					$('.total-bayar').text(data);
				}
			});
		});
		
		$(document).on('keyup','[data-type="qty"]',function(){
			var jumlah = $(this).val();
			var row_id = $(this).parent().parent().attr('data-rowid');
			var ID = $(this).parent().parent().attr('data-id');
			var harga_satuan = $('[data-rowid="'+row_id+'"] .harga_satuan').text();
			var total = $('.total-bayar').text();
			
			row_id = $('#tr'+ID).attr('data-rowid');
			subtotal = parseInt(jumlah) * parseInt(harga_satuan);
			
			url = base_url + 'transaksi/transaksi/updateItem';
			if(jumlah > 0 && jumlah != ''){
				$.post(url,{row_id : row_id, jumlah : jumlah, ID : ID},function(data){
					//alert(data);
					if(data == 'error100'){
						alert('Gagal melakukan perubahan. Stok tidak mencukupi');
						$('#tr'+ID+' .qty').val(cur_qty);
					}else{
						$('#tr'+ID+' .total_harga').html('<span class="rupiah">Rp</span>' +  subtotal);
						$('.total-bayar').text(data);
					}
				});
			}
		});
	</script>
	<script>
		
		// ====================
		// INI UNTUK ADD BARANG
		// ====================
		
		$(document).on('submit','#add_barang',function(){
			var url = base_url + 'barang/barang/addBarang';
			var kode_barang = $('#add_barang input[name="kode_barang"]').val();
			var kode_barcode = $('#add_barang input[name="kode_barcode"]').val();
			var nama_barang = $('#add_barang input[name="nama_barang"]').val();
			var id_kategori = $('#add_barang select[name="id_kategori"]').val();
			var id_merk = $('#add_barang select[name="id_merk"]').val();
			var stok = $('#add_barang input[name="stok"]').val();
			var stok_minimum = $('#add_barang input[name="stok_minimum"]').val();
			var harga_satuan = $('#add_barang input[name="harga_satuan"]').val();
			
			$.post(url, {
					kode_barang : kode_barang,
					kode_barcode : kode_barcode,
					nama_barang : nama_barang,
					id_kategori : id_kategori,
					id_merk : id_merk,
					stok : stok,
					stok_minimum : stok_minimum,
					harga_satuan : harga_satuan
					},
				function(data){
				//alert(data);
				if(data == 'valid'){
					$.ajax({
						url: base_url + 'barang/barang/vBarang',
						cache: false
					})
					.done(function( html ) {
						$( "a[href='#tab_barang']" ).click();
						$( "#data_barang" ).html( html );
					});
					$('#add_barang input').val('');
					$('#add_barang select').val('');
					$('#add_barang .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> Barang baru berhasil ditambahkan</div>');
				}else if(data == 'error103'){
					$('#add_barang .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Kode barcode sudah terdaftar</div>');
					$('#add_barang input[name="kode_barcode"]').focus();
				}else if(data == 'error100'){
					$('#add_barang .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama barang sudah terdaftar</div>');
					$('#add_barang input[name="nama_barang"]').focus();
				}else if(data == 'error101'){
					$('#add_barang .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama barang harus diisi</div>');
					$('#add_barang input[name="nama_barang"]').focus();
				}else if(data == 'error102'){
					$('#add_barang .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Harga satuan harus diisi</div>');
					$('#add_barang input[name="harga_satuan"]').focus();
				}else if(data == 'error104'){
					$('#add_barang .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Kode barang sudah terdaftar</div>');
					$('#add_barang input[name="kode_barang"]').focus();
				}
			});
			
			return false;
		});
		
		$(document).on('submit','#edit_barang',function(){
			var url = base_url + 'barang/barang/editBarang';
			var ID = $('#edit_barang input[name="ID"]').val();
			var kode_barang = $('#edit_barang input[name="kode_barang"]').val();
			var kode_barcode = $('#edit_barang input[name="kode_barcode"]').val();
			var nama_barang = $('#edit_barang input[name="nama_barang"]').val();
			var id_kategori = $('#edit_barang select[name="id_kategori"]').val();
			var id_merk = $('#edit_barang select[name="id_merk"]').val();
			var stok = $('#edit_barang input[name="stok"]').val();
			var stok_minimum = $('#edit_barang input[name="stok_minimum"]').val();
			var harga_satuan = $('#edit_barang input[name="harga_satuan"]').val();
			
			$.post(url, {
					ID : ID,
					kode_barang : kode_barang,
					kode_barcode : kode_barcode,
					nama_barang : nama_barang,
					id_kategori : id_kategori,
					id_merk : id_merk,
					stok : stok,
					stok_minimum : stok_minimum,
					harga_satuan : harga_satuan
					},
				function(data){
				if(data == 'valid'){
					$.ajax({
						url: base_url + 'barang/barang/vBarang',
						cache: false
					})
					.done(function( html ) {
						$( "a[href='#tab_barang']" ).click();
						$( "#data_barang" ).html( html );
					});
					//alert(data);
					$('#edit_barang .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> Barang berhasil diubah</span></div>');
				}else if(data == 'error103'){
					$('#edit_barang .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Kode barcode sudah terdaftar</div>');
					$('#edit_barang input[name="kode_barcode"]').focus();
				}else if(data == 'error100'){
					$('#edit_barang .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama barang sudah terdaftar</div>');
					$('#edit_barang input[name="nama_barang"]').focus();
				}else if(data == 'error101'){
					$('#edit_barang .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama barang harus diisi</div>');
					$('#edit_barang input[name="nama_barang"]').focus();
				}else if(data == 'error102'){
					$('#edit_barang .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Harga satuan harus diisi</div>');
					$('#edit_barang input[name="harga_satuan"]').focus();
				}else if(data == 'error104'){
					$('#add_barang .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Kode barang sudah terdaftar</div>');
					$('#add_barang input[name="kode_barang"]').focus();
				}
			});
			
			return false;
		});
		
		
		// ====================
		// INI UNTUK ADD BARANG MASUK
		// ====================
		
		$(document).on('submit','#add_barang_masuk',function(){
			var url = base_url + 'barang/barang/addBarangmasuk';
			var ID = $('#add_barang_masuk input[name="ID"]').val();
			var stok_masuk = $('#add_barang_masuk input[name="stok_masuk"]').val();
			var harga_satuan = $('#add_barang_masuk input[name="harga_satuan"]').val();
			
			$.post(url, {
					ID : ID,
					stok_masuk : stok_masuk,
					harga_satuan : harga_satuan
					},
				function(data){
				if(data == 'valid'){
					$.ajax({
						url: base_url + 'barang/barang/vBarangmasuk',
						cache: false
					})
					.done(function( html ) {
						$( "#data_barang_masuk" ).html( html );
					});
					$('#add_barang_masuk input').val('');
					$('#add_barang_masuk .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> Barang baru berhasil ditambahkan</div>');
				}else if(data == 'error100'){
					$('#add_barang_masuk .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Barang belum terdaftar</div>');
					$('#add_barang_masuk input[name="kode_barang"]').focus();
				}else if(data == 'error101'){
					$('#add_barang_masuk .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Kode barang harus diisi</div>');
					$('#add_barang_masuk input[name="kode_barang"]').focus();
				}else if(data == 'error102'){
					$('#add_barang_masuk .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Stok masuk harus diisi</div>');
					$('#add_barang_masuk input[name="stok_masuk"]').focus();
				}else if(data == 'error103'){
					$('#add_barang_masuk .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Harga satuan harus diisi</div>');
					$('#add_barang_masuk input[name="harga_satuan"]').focus();
				}
			});
			
			return false;
		});
		
		$(document).on('submit','#edit_barang_masuk',function(){
			var url = base_url + 'barang/barang/editBarangmasuk';
			var kode_barang_masuk = $('#edit_barang_masuk input[name="kode_barang_masuk"]').val();
			var kode_barang = $('#edit_barang_masuk input[name="kode_barang"]').val();
			var ID = $('#edit_barang_masuk input[name="ID"]').val();
			var stok_masuk = $('#edit_barang_masuk input[name="stok_masuk"]').val();
			var harga_satuan = $('#edit_barang_masuk input[name="harga_satuan"]').val();
			var old_ID = $('#edit_barang_masuk input[name="old_ID"]').val();
			var old_stok_masuk = $('#edit_barang_masuk input[name="old_stok_masuk"]').val();
			
			$.post(url, {
					kode_barang_masuk : kode_barang_masuk,
					ID : ID,
					kode_barang : kode_barang,
					stok_masuk : stok_masuk,
					harga_satuan : harga_satuan,
					old_ID : old_ID,
					old_stok_masuk : old_stok_masuk
					},
				function(data){
					//alert(data);
				if(data == 'valid'){
					$.ajax({
						url: base_url + 'barang/barang/vBarangmasuk',
						cache: false
					})
					.done(function( html ) {
						$( "#data_barang_masuk" ).html( html );
					});
					$('#edit_barang_masuk .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> Barang masuk baru berhasil diubah</div>');
				}else if(data == 'error100'){
					$('#edit_barang_masuk .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Barang belum terdaftar</div>');
					$('#edit_barang_masuk input[name="kode_barang"]').focus();
				}else if(data == 'error101'){
					$('#edit_barang_masuk .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Kode barang harus diisi</div>');
					$('#edit_barang_masuk input[name="kode_barang"]').focus();
				}else if(data == 'error102'){
					$('#edit_barang_masuk .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Stok masuk harus diisi</div>');
					$('#edit_barang_masuk input[name="stok_masuk"]').focus();
				}else if(data == 'error103'){
					$('#edit_barang_masuk .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Harga satuan harus diisi</div>');
					$('#edit_barang_masuk input[name="harga_satuan"]').focus();
				}
			});
			
			return false;
		});
		
		
		// =================================
		// INI UNTUK ADD KATEGORI	
		// =================================
		
		$(document).on('submit','#add_kategori',function(){
			var url = base_url + 'referensi/referensi/addKategori';
			var nama_kategori = $('#add_kategori input[name="nama_kategori"]').val();
			
			$.post(url, {nama_kategori : nama_kategori},function(data){
				if(data == 'valid'){
					$.ajax({
						url: base_url + 'referensi/referensi/vKategori',
						cache: false
					})
					.done(function( html ) {
						$( "a[href='#tab_kategori']" ).click();
						$( "#data_kategori" ).html( html );
					});
					$('input[name="nama_kategori"]').val('');
					$('#add_kategori .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> Kategori baru berhasil ditambahkan</span></div>');
				}else if(data=='error100'){
					$('#add_kategori .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama kategori sudah terdaftar</div>');
					$('#add_kategori input[name="nama_kategori"]').focus();
				}else if(data=='error101'){
					$('#add_kategori .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama kategori harus diisi</div>');
					$('#add_kategori input[name="nama_kategori"]').focus();
				}
			});
			
			return false;
		});
		
		$(document).on('submit','#edit_kategori',function(){
			var url = base_url + 'referensi/referensi/editKategori';
			var nama_kategori = $('#edit_kategori input[name="nama_kategori"]').val();
			var id_kategori = $('#edit_kategori input[name="id_kategori"]').val();
			
			$.post(url, {nama_kategori : nama_kategori, id_kategori : id_kategori},function(data){
				if(data == 'valid'){
					$.ajax({
						url: base_url + 'referensi/referensi/vKategori',
						cache: false
					})
					.done(function( html ) {
						$( "a[href='#tab_kategori']" ).click();
						$( "#data_kategori" ).html( html );
					});
					$('#edit_kategori .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> Kategori berhasil diubah</span></div>');
				}else if(data=='error100'){
					$('#edit_kategori .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama kategori sudah terdaftar</div>');
					$('#edit_kategori input[name="nama_kategori"]').focus();
				}else if(data=='error101'){
					$('#edit_kategori .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama kategori harus diisi</div>');
					$('#edit_kategori input[name="nama_kategori"]').focus();
				}
			});
			
			return false;
		});
		
		$(document).on('submit','#add_merk',function(){
			var url = base_url + 'referensi/referensi/addMerk';
			var nama_merk = $('input[name="nama_merk"]').val();
			
			$.post(url, {nama_merk : nama_merk},function(data){
				if(data == 'valid'){
					$.ajax({
						url: base_url + 'referensi/referensi/vMerk',
						cache: false
					})
					.done(function( html ) {
						$( "a[href='#tab_merk']" ).click();
						$( "#data_merk" ).html( html );
					});
					$('input[name="nama_merk"]').val('');
					$('#add_merk .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> Merk berhasil ditambah</span></div>');
				}else if(data=='error100'){
					$('#add_merk .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama merk sudah terdaftar</div>');
					$('#add_merk input[name="nama_merk"]').focus();
				}else if(data=='error101'){
					$('#add_merk .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama merk harus diisi</div>');
					$('#add_merk input[name="nama_merk"]').focus();
				}
			});
			
			return false;
		});
		
		$(document).on('submit','#edit_merk',function(){
			var url = base_url + 'referensi/referensi/editMerk';
			var nama_merk = $('#edit_merk input[name="nama_merk"]').val();
			var id_merk = $('#edit_merk input[name="id_merk"]').val();
			
			$.post(url, {nama_merk : nama_merk, id_merk : id_merk},function(data){
				if(data == 'valid'){
					$.ajax({
						url: base_url + 'referensi/referensi/vMerk',
						cache: false
					})
					.done(function( html ) {
						$( "a[href='#tab_merk']" ).click();
						$( "#data_merk" ).html( html );
					});
					$('#edit_merk .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> Merk berhasil diubah</span></div>');
				}else if(data=='error100'){
					$('#edit_merk .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama merk sudah terdaftar</div>');
					$('#edit_merk input[name="nama_merk"]').focus();
				}else if(data=='error101'){
					$('#edit_merk .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama merk harus diisi</div>');
					$('#edit_merk input[name="nama_merk"]').focus();
				}
			});
			
			return false;
		});
		
		$(document).on('click','.form-box',function(){
			status = $(this).attr('data-status');
			id = $(this).attr('name');
			$('*[name="'+id+'"]').attr('data-status', 'close');
			
			if(status == 'close'){
				$('#' + id ).slideDown(300);
				$('#' + id + ' .col-md-9 .message').html('');
				$(this).attr('data-status', 'open');
			}else{
				$('#' + id ).slideUp(300);
				$(this).attr('data-status', 'close');
			}
		});
		
		$(document).on('click','[name="test"]',function(){
			var box = $(this).parents('.portlet:first').parent();
			var name = box.attr('id');
			box.slideUp(300);
			$('*[name="'+name+'"]').attr('data-status','close');
		});
		
		$(document).on('click','.pagination button',function(){
			parentID = '#' + $(this).parent().parent().attr('id');
			target = '#' + $(this).parent().parent().attr('data-target');
			total = parseInt($(this).parent().parent().attr('data-total')) - 1;
			perpage = parseInt($(this).parent().parent().attr('data-perpage'));
			url = $(this).parent().parent().attr('data-url');
			action = $(this).attr('name');
			keyword = $(parentID + ' input[name="keyword"]').val();
			group_len = $('.group').length;
			if(group_len > 0){
				group = $('* .group[data-value="on"]').attr('data-group');
			}else{
				group = 'all';	
			}
			current = parseInt($(parentID + ' select[name="halaman"]').val());
			
			page = 0;
			
			if(action == 'left'){
				page = current - 1;
			}else if(action == 'right'){
				page = current + 1;
			}else if(action == 'first'){
				page = 0;
			}else if(action == 'last'){
				page = total;
			}
			
			if(page < 0){
				page = 0;
			}else if(page > total){
				page = total;
			}else{
				page = page;
			}
			
			
			
			if(page != current){
				$(parentID + ' select[name="halaman"]').val(page);
				page = page * perpage;
				$.post(url, {page : page, keyword : keyword, group : group},function(data){
					$( target ).html( data );
				});
			}
		});
		
		$(document).on('click','.group',function(){
			$('* .group[data-value="on"]').attr('data-value','off');
			$(this).attr('data-value','on');
			
			parentID = '#' + $(this).parent().parent().attr('id');
			target = '#' + $(this).parent().parent().attr('data-target');
			perpage = parseInt($(this).parent().parent().attr('data-perpage'));
			url = $(this).parent().parent().attr('data-url');
			page = parseInt($(parentID + ' select[name="halaman"]').val());
			group = $(this).attr('data-group');
			
			$(parentID + ' select[name="halaman"]').val(page);
			page = page * perpage;
			$.post(url, {page : page, keyword : keyword, group : group},function(data){
				$( target ).html( data );
			});
			
		});
		
		$(document).on('change','.pagination select[name="halaman"]',function(){
			parentID = '#' + $(this).parent().parent().attr('id');
			target = '#' + $(this).parent().parent().attr('data-target');
			perpage = parseInt($(this).parent().parent().attr('data-perpage'));
			url = $(this).parent().parent().attr('data-url');
			keyword = $(parentID + ' input[name="keyword"]').val();
			page = parseInt($(parentID + ' select[name="halaman"]').val());
			group_len = $('.group').length;
			if(group_len > 0){
				group = $('* .group[data-value="on"]').attr('data-group');
			}else{
				group = 'all';	
			}

			$(parentID + ' select[name="halaman"]').val(page);
			page = page * perpage;
			$.post(url, {page : page, keyword : keyword, group : group},function(data){
				$( target ).html( data );
			});

		});
		
		$(document).on('keyup','.pagination input[name="keyword"]',function(){
			parentID = '#' + $(this).parent().parent().attr('id');
			target = '#' + $(this).parent().parent().attr('data-target');
			perpage = parseInt($(this).parent().parent().attr('data-perpage'));
			url = $(this).parent().parent().attr('data-url');
			keyword = $(parentID + ' input[name="keyword"]').val();
			page = 0;
			group_len = $('.group').length;
			if(group_len > 0){
				group = $('* .group[data-value="on"]').attr('data-group');
			}else{
				group = 'all';	
			}

			$(parentID + ' select[name="halaman"]').val(page);
			$.post(url, {page : page, keyword : keyword, group : group},function(data){
				$( target ).html( data );
			});

		});
		
		function edit_kategori(ID){
			nama_kategori = $('#nama_kategori_'+ID).text();
			$('#edit_form_kategori input[name="nama_kategori"]').val(nama_kategori);
			$('#edit_form_kategori input[name="id_kategori"]').val(ID);
		}
		
		function edit_merk(ID){
			nama_merk = $('#nama_merk_'+ID).text();
			$('#edit_form_merk input[name="nama_merk"]').val(nama_merk);
			$('#edit_form_merk input[name="id_merk"]').val(ID);
		}
		
		function edit_barang(ID){
			kode_barang = $('#kode_barang_'+ID).text();
			kode_barcode = $('#kode_barcode_'+ID).text();
			nama_barang = $('#nama_barang_'+ID).text();
			id_kategori = $('#id_kategori_'+ID).text();
			id_merk = $('#id_merk_'+ID).text();
			stok = $('#stok_'+ID).text();
			stok_minimum = $('#stok_minimum_'+ID).text();
			harga_satuan = $('#harga_satuan_'+ID).text();
			
			$('#edit_form_barang input[name="kode_barang"]').val(kode_barang);
			$('#edit_form_barang input[name="kode_barcode"]').val(kode_barcode);
			$('#edit_form_barang input[name="nama_barang"]').val(nama_barang);
			$('#edit_form_barang select[name="id_kategori"]').val(id_kategori);
			$('#edit_form_barang select[name="id_merk"]').val(id_merk);
			$('#edit_form_barang input[name="stok"]').val(stok);
			$('#edit_form_barang input[name="stok_minimum"]').val(stok_minimum);
			$('#edit_form_barang input[name="harga_satuan"]').val(harga_satuan);
			$('#edit_form_barang input[name="ID"]').val(ID);
		}
		
		function edit_barang_masuk(kode_barang_masuk){
			ID = $('#ID_masuk_'+kode_barang_masuk).text();
			kode_barcode = $('#kode_barcode_masuk_'+kode_barang_masuk).text();
			nama_barang = $('#nama_barang_masuk_'+kode_barang_masuk).text();
			kode_barang = $('#kode_barang_barang_masuk_'+kode_barang_masuk).text();
			stok_masuk = $('#stok_masuk_'+kode_barang_masuk).text();
			harga_satuan_masuk = $('#harga_satuan_masuk_'+kode_barang_masuk).text();
			
			$('#edit_form_barang_masuk input[name="ID"]').val(ID);
			$('#edit_form_barang_masuk input[name="old_ID"]').val(ID);
			$('#edit_form_barang_masuk input[name="kode_barcode"]').val(kode_barcode);
			$('#edit_form_barang_masuk input[name="nama_barang"]').val(nama_barang);
			$('#edit_form_barang_masuk input[name="kode_barang"]').val(kode_barang);
			$('#edit_form_barang_masuk input[name="stok_masuk"]').val(stok_masuk);
			$('#edit_form_barang_masuk input[name="old_stok_masuk"]').val(stok_masuk);
			$('#edit_form_barang_masuk input[name="harga_satuan"]').val(harga_satuan_masuk);
			$('#edit_form_barang_masuk input[name="kode_barang_masuk"]').val(kode_barang_masuk);
		}
		
		function delete_barang(ID){
			var accept = confirm('Anda yakin ingin menghapus barang ini?');
			var url = base_url + 'barang/barang/delete';
			if(accept == true){
				$.post(url,{kode_barang : ID},function(data){
					$('#data_barang #barang_'+ID).remove();
				});
			}
		}
		
		function delete_barang_masuk(ID){
			var accept = confirm('Anda yakin ingin menghapus item ini?');
			var url = base_url + 'barang/barang/delete_barang_masuk';
			if(accept == true){
				$.post(url,{kode_barang_masuk : ID},function(data){
					$('#data_barang_masuk #barang_masuk_'+ID).remove();
					$.ajax({
						url: base_url + 'barang/barang/vBarang',
						cache: false
					})
					.done(function( html ) {
						$( "#data_barang" ).html( html );
					});
				});
			}
		}
		
		function delete_kategori(ID){
			var accept = confirm('Anda yakin ingin menghapus item ini?');
			var url = base_url + 'referensi/referensi/delete_kategori';
			if(accept == true){
				$.post(url,{id_kategori : ID},function(data){
					$('#data_kategori #kategori_'+ID).remove();
				});
			}
		}
		
		function delete_merk(ID){
			var accept = confirm('Anda yakin ingin menghapus item ini?');
			var url = base_url + 'referensi/referensi/delete_merk';
			if(accept == true){
				$.post(url,{id_merk : ID},function(data){
					$('#data_merk #merk_'+ID).remove();
				});
			}
		}
		
		function delete_user(ID){
			var accept = confirm('Anda yakin ingin menghapus item ini?');
			var url = base_url + 'user/user/delete_user';
			if(accept == true){
				$.post(url,{id_user : ID},function(data){
					$('#data_user #user_'+ID).remove();
				});
			}
		}
		
		function delete_group(ID){
			var accept = confirm('Anda yakin ingin menghapus item ini?');
			var url = base_url + 'user/user/delete_group';
			if(accept == true){
				$.post(url,{id_group : ID},function(data){
					$.ajax({
						url: base_url + 'user/user/vUserGroup',
						cache: false
					})
					.done(function( html ) {
						$( ".group-list" ).html( html );
						App.init(); // initlayout and core plugins.
					});
					$('#data_group #group_'+ID).remove();
				});
			}
		}
	</script>
	<script>
		/*$(document).on('keypress',function(event){
			var value = String.fromCharCode(event.which);
			type = 'kode_barang';
			
			getItem(type, value);
		});*/
		
		$(document).on('change','#add_item input[name="kode_barang"]',function(){
			value = $(this).val();
			type = 'kode_barang';
			
			getItem(type, value);
		});
		
		$(document).on('change','#add_item input[name="kode_barcode"]',function(){
			value = $(this).val();
			type = 'kode_barcode';
			
			getItem(type, value);
		});
		
		$(document).on('change','#add_item input[name="nama_barang"]',function(){
			value = $(this).val();
			type = 'nama_barang';
			
			getItem(type, value);
		});
		
		function getItem(type, value){
			var url = base_url + 'transaksi/transaksi/getItem';
			
			if(value == ''){
				$('#add_item input[name="ID"]').val('');
				$('#add_item input[name="kode_barcode"]').val('');
				$('#add_item input[name="kode_barang"]').val('');
				$('#add_item input[name="nama_barang"]').val('');
				$('#add_item input[name="stok"]').val('0');
				$('#add_item input[name="stok_minimum"]').val('');
				$('#add_item input[name="harga_satuan"]').val('');
			}else{
				$.post(url,{type : type , value : value},function(data){
					$.each(data, function(i, item){
						$('#add_item input[name="jumlah"]').focus();
						$('#add_item input[name="ID"]').val(item.ID);
						$('#add_item input[name="kode_barcode"]').val(item.kode_barcode);
						$('#add_item input[name="kode_barang"]').val(item.kode_barang);
						$('#add_item input[name="nama_barang"]').val(item.nama_barang);
						$('#add_item input[name="stok"]').val(item.stok);
						$('#add_item input[name="stok_minimum"]').val(item.stok_minimum);
						$('#add_item input[name="harga_satuan"]').val(item.harga_satuan);
					});
				},"json");
			}
		}
	</script>
	<script>
		
		// =================================
		// INI UNTUK ADD GROUP	
		// =================================
		
		$(document).on('submit','#add_group',function(){
			var url = base_url + 'user/user/addGroup';
			var nama_group = $('#add_group input[name="nama_group"]').val();
			var menu = [];
			$('#add_group input[name="id_menu"]:checked').each(function() { 
				var privilage = []
				var id_menu = $(this).val();
				var is_read = $('#add_form_group input[name="is_read"][data-menu="'+id_menu+'"]:checked').val();
				var is_write = $('#add_form_group input[name="is_write"][data-menu="'+id_menu+'"]:checked').val();
				privilage.push(id_menu);
				privilage.push(is_read);
				privilage.push(is_write);
				menu.push(privilage);
			});
			
			$.post(url, {nama_group : nama_group, menu : JSON.stringify(menu)},function(data){
				if(data == 'valid'){
					
					$.ajax({
						url: base_url + 'user/user/vGroup',
						cache: false
					})
					.done(function( html ) {
						$( "#data_group" ).html( html );
					});
					$.ajax({
						url: base_url + 'user/user/vUserGroup',
						cache: false
					})
					.done(function( html ) {
						$( ".group-list" ).html( html ); 
						App.init(); // initlayout and core plugins.
					});

					$('input[name="nama_group"]').val('');
					$('#add_group .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> Group baru berhasil ditambahkan</div>');
				}else if(data == 'error100'){
					$('#add_group .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama group sudah terdaftar</div>');
					$('#add_group input[name="nama_group"]').focus();
				}else if(data == 'error101'){
					$('#add_group .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama group harus diisi</div>');
					$('#add_group input[name="nama_group"]').focus();
				}
			});
			
			return false;
		});
		
		$(document).on('submit','#edit_group',function(){
			var url = base_url + 'user/user/editGroup';
			var nama_group = $('#edit_group input[name="nama_group"]').val();
			var id_group = $('#edit_group input[name="id_group"]').val();
			
			var menu = [];
			$('#edit_group input[name="id_menu"]:checked').each(function() { 
				var privilage = []
				var id_menu = $(this).val();
				var is_read = $('#edit_form_group input[name="is_read"][data-menu="'+id_menu+'"]:checked').val();
				var is_write = $('#edit_form_group input[name="is_write"][data-menu="'+id_menu+'"]:checked').val();
				privilage.push(id_menu);
				privilage.push(is_read);
				privilage.push(is_write);
				menu.push(privilage);
			});
			
			$.post(url, {nama_group : nama_group, id_group : id_group, menu : JSON.stringify(menu)},function(data){
				if(data == 'valid'){
					$.ajax({
						url: base_url + 'user/user/vGroup',
						cache: false
					})
					.done(function( html ) {
						$( "a[href='#tab_group']" ).click();
						$( "#data_group" ).html( html );
					});
					$.ajax({
						url: base_url + 'user/user/vUserGroup',
						cache: false
					})
					.done(function( html ) {
						$( ".group-list" ).html( html );
						App.init(); // initlayout and core plugins.
					});
					 
					$('#edit_group .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> Group baru berhasil ditambahkan</div>');
				}else if(data == 'error100'){
					$('#edit_group .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama group sudah terdaftar</div>');
					$('#edit_group input[name="nama_group"]').focus();
				}else if(data == 'error101'){
					$('#edit_group .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama group harus diisi</div>');
					$('#edit_group input[name="nama_group"]').focus();
				}
			});
			
			return false;
		});
		
		function edit_group(ID){
			nama_group = $('#nama_group_'+ID).text();
			$('#edit_form_group input[name="nama_group"]').val(nama_group);
			$('#edit_form_group input[name="id_group"]').val(ID);
			
			$('#edit_form_group input[name="id_menu"]').each(function() { 
				$(this).prop('checked',false);
				$(this).parent().removeClass('checked');
				$('#edit_form_group input[name="is_read"]').prop('checked',false).prop('disabled',true);
				$('#edit_form_group input[name="is_read"]').parent().removeClass('checked');
				$('#edit_form_group input[name="is_write"]').prop('checked',false).prop('disabled',true);
				$('#edit_form_group input[name="is_write"]').parent().removeClass('checked');
			});
			
			var url = base_url + 'user/user/getGroupMenu';
			$.post(url,{id_group : ID},function(data){
				$.each(data, function(i, item){
					id_menu = item.id_menu;
					is_read = item.is_read;
					is_write = item.is_write;
					
					$('#edit_form_group input[value="'+id_menu+'"]').prop('checked',true);
					$('#edit_form_group input[value="'+id_menu+'"]').parent().addClass('checked');
					if(is_read == '1'){
						$('#edit_form_group input[name="is_read"][data-menu="'+id_menu+'"]').prop('checked',true).prop('disabled',false);
						$('#edit_form_group input[name="is_read"][data-menu="'+id_menu+'"]').parent().addClass('checked');
					}else{
						$('#edit_form_group input[name="is_read"][data-menu="'+id_menu+'"]').prop('checked',false).prop('disabled',false);
						$('#edit_form_group input[name="is_read"][data-menu="'+id_menu+'"]').parent().removeClass('checked');
					}
					
					if(is_write == '1'){
						$('#edit_form_group input[name="is_write"][data-menu="'+id_menu+'"]').prop('checked',true).prop('disabled',false);
						$('#edit_form_group input[name="is_write"][data-menu="'+id_menu+'"]').parent().addClass('checked');
					}else{
						$('#edit_form_group input[name="is_write"][data-menu="'+id_menu+'"]').prop('checked',false).prop('disabled',true);
						$('#edit_form_group input[name="is_write"][data-menu="'+id_menu+'"]').parent().removeClass('checked');
					}
				});
			},"json");
		}
		
		// =================================
		// INI UNTUK ADD USER	
		// =================================
		
		$(document).on('submit','#add_user',function(){
			var url = base_url + 'user/user/addUser';
			var nama_lengkap = $('#add_user input[name="nama_lengkap"]').val();
			var username = $('#add_user input[name="username"]').val();
			var password = $('#add_user input[name="password"]').val();
			var repeat_password = $('#add_user input[name="repeat_password"]').val();
			
			var group = [];
			$('#add_user input[name="group"]:checked').each(function() { 
				group.push($(this).val());
			});
			
			$.post(url, {nama_lengkap : nama_lengkap, username : username , password : password, repeat_password : repeat_password, group : JSON.stringify(group)},function(data){
				if(data == 'valid'){
					$.ajax({
						url: base_url + 'user/user/vUser',
						cache: false
					})
					.done(function( html ) {
						$( "a[href='#tab_user']" ).click();
						$( "#data_user" ).html( html );
					});
					
					$('#add_user input[name="nama_lengkap"]').val('');
					$('#add_user input[name="username"]').val('');
					$('#add_user input[name="password"]').val('');
					$('#add_user input[name="repeat_password"]').val('');
					
					$('#add_user input[name="group[]"]').each(function() { 
						$(this).prop('checked',false);
						$(this).parent().removeClass('checked');
					});
					
					$('#add_user .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> User baru berhasil ditambahkan</div>');
				}else if(data == 'error100'){
					$('#add_user .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Penulisan nama hanya boleh menggunakan huruf alphabet dan tanda berikut . , &rsquo;</div>');
					$('#add_user input[name="nama_lengkap"]').focus();
				}else if(data == 'error101'){
					$('#add_user .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama lengkap harus diisi</div>');
					$('#add_user input[name="nama_lengkap"]').focus();
				}else if(data == 'error102'){
					$('#add_user .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Username harus diisi</div>');
					$('#add_user input[name="username"]').focus();
				}else if(data == 'error103'){
					$('#add_user .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Username sudah dipakai</div>');
					$('#add_user input[name="username"]').focus();
				}else if(data == 'error104'){
					$('#add_user .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Password harus diisi</div>');
					$('#add_user input[name="password"]').focus();
				}else if(data == 'error105'){
					$('#add_user .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Silahkan ulangi password</div>');
					$('#add_user input[name="password"]').focus();
				}else if(data == 'error106'){
					$('#add_user .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Password tidak cocok</div>');
					$('#add_user input[name="password"]').focus();
				}
			});
			
			return false;
		});
		
		$(document).on('submit','#edit_user',function(){
			var url = base_url + 'user/user/editUser';
			var nama_lengkap = $('#edit_user input[name="nama_lengkap"]').val();
			var id_user = $('#edit_user input[name="id_user"]').val();
			var username = $('#edit_user input[name="username"]').val();
			
			var group = [];
			$('#edit_user input[name="group"]:checked').each(function() { 
				group.push($(this).val());
				//alert($(this).val());
			});
			
			$.post(url, {nama_lengkap : nama_lengkap, username : username, group : JSON.stringify(group), id_user : id_user},function(data){
				if(data == 'valid'){
					$.ajax({
						url: base_url + 'user/user/vUser',
						cache: false
					})
					.done(function( html ) {
						$( "a[href='#tab_user']" ).click();
						$( "#data_user" ).html( html );
					});
					$('#edit_user .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> User baru berhasil ditambahkan</div>');
				}else if(data == 'error100'){
					$('#edit_user .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Penulisan nama hanya boleh menggunakan huruf alphabet dan tanda berikut . , &rsquo;</div>');
					$('#edit_user input[name="nama_lengkap"]').focus();
				}else if(data == 'error101'){
					$('#edit_user .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama lengkap harus diisi</div>');
					$('#edit_user input[name="nama_lengkap"]').focus();
				}else if(data == 'error102'){
					$('#edit_user .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Username harus diisi</div>');
					$('#edit_user input[name="username"]').focus();
				}else if(data == 'error103'){
					$('#edit_user .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Username sudah dipakai</div>');
					$('#edit_user input[name="username"]').focus();
				}
			});
			
			return false;
		});
		
		$(document).on('submit','#edit_password',function(){
			var url = base_url + 'user/user/editPassword';
			var password = $('#edit_password input[name="password"]').val();
			var id_user = $('#edit_password input[name="id_user"]').val();
			var repeat_password = $('#edit_password input[name="repeat_password"]').val();
			
			$.post(url, {password : password, repeat_password: repeat_password, id_user : id_user},function(data){
				if(data == 'valid'){
					$.ajax({
						url: base_url + 'user/user/vUser',
						cache: false
					})
					.done(function( html ) {
						$( "a[href='#tab_user']" ).click();
						$( "#data_user" ).html( html );
					});
					$('#edit_password .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> Password berhasil diubah</div>');
				}else if(data == 'error101'){
					$('#edit_password .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Password harus diisi</div>');
					$('#edit_password input[name="password"]').focus();
				}else if(data == 'error102'){
					$('#edit_password .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Silahkan ulangi password</div>');
					$('#edit_password input[name="repeat_password"]').focus();
				}else if(data == 'error103'){
					$('#edit_password .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Password tidak cocok</div>');
					$('#edit_password input[name="password"]').focus();
				}
			});
			
			return false;
		});
		
		function edit_user(ID){
			nama_lengkap = $('#nama_lengkap_'+ID).text();
			username = $('#username_'+ID).text();
			$('#edit_form_user input[name="nama_lengkap"]').val(nama_lengkap);
			$('#edit_form_user input[name="username"]').val(username);
			$('#edit_form_user input[name="id_user"]').val(ID);
			
			$('#edit_form_user input[name="group"]').each(function() { 
				$(this).prop('checked',false);
				$(this).parent().removeClass('checked');
			});
			
			var url = base_url + 'user/user/getGroup';
			$.post(url,{id_user : ID},function(data){
				$.each(data, function(i, item){
					$('#edit_form_user input[name="group"][value="'+item.id_group+'"]').prop('checked',true);
					$('#edit_form_user input[name="group"][value="'+item.id_group+'"]').parent().addClass('checked');
				});
			},"json");
		}
		
		$(document).on('submit','#edit_password_profil',function(){
			var url = base_url + 'home/home/editPassword';
			var password = $('#edit_password_profil input[name="password"]').val();
			var repeat_password = $('#edit_password_profil input[name="repeat_password"]').val();
			
			$.post(url, {password : password, repeat_password: repeat_password},function(data){
				if(data == 'valid'){
					$('#edit_password_profil .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> Password berhasil diubah</div>');
				}else if(data == 'error101'){
					$('#edit_password_profil .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Password harus diisi</div>');
					$('#edit_password_profil input[name="password"]').focus();
				}else if(data == 'error102'){
					$('#edit_password_profil .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Silahkan ulangi password</div>');
					$('#edit_password_profil input[name="repeat_password"]').focus();
				}else if(data == 'error103'){
					$('#edit_password_profil .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Password tidak cocok</div>');
					$('#edit_password_profil input[name="password"]').focus();
				}
			});
			
			return false;
		});
		
		$(document).on('submit','#edit_profil',function(){
			var url = base_url + 'home/home/editUser';
			var nama_lengkap = $('#edit_profil input[name="nama_lengkap"]').val();
			var username = $('#edit_profil input[name="username"]').val();
			
			$.post(url, {nama_lengkap : nama_lengkap, username : username},function(data){
				if(data == 'valid'){
					$('#edit_profil .message').html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button><strong>Berhasil!</strong> User baru berhasil ditambahkan</div>');
				}else if(data == 'error100'){
					$('#edit_profil .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Penulisan nama hanya boleh menggunakan huruf alphabet dan tanda berikut . , &rsquo;</div>');
					$('#edit_profil input[name="nama_lengkap"]').focus();
				}else if(data == 'error101'){
					$('#edit_profil .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Nama lengkap harus diisi</div>');
					$('#edit_profil input[name="nama_lengkap"]').focus();
				}else if(data == 'error102'){
					$('#edit_profil .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Username harus diisi</div>');
					$('#edit_profil input[name="username"]').focus();
				}else if(data == 'error103'){
					$('#edit_profil .message').html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button><strong>Error!</strong> Username sudah dipakai</div>');
					$('#edit_profil input[name="username"]').focus();
				}
			});
			
			return false;
		});
	</script>
	<script>
		$(document).on('change','input[name="id_menu"]',function(){
			var form = $(this).parents('form:first');
			stat = $(this).attr('checked');
			val = $(this).val();
			if(stat == 'checked'){
				$('input[data-menu="'+val+'"]',form).attr('disabled',false);
			}else{
				$('input[data-menu="'+val+'"]',form).attr('disabled',true);
				$('input[data-menu="'+val+'"]',form).attr('checked',false);
				$('input[data-menu="'+val+'"]',form).parent().removeClass('checked');
			}
			
			$('input[data-parent="'+val+'"]',form).click();
		});
		
		
	</script>
	<script>
		$(document).on('submit','#laporan_transaksi',function(){
			var tanggal = $('#laporan_transaksi select[name="tanggal"]').val();
			var bulan = $('#laporan_transaksi select[name="bulan"]').val();
			var tahun = $('#laporan_transaksi select[name="tahun"]').val();
			var url = base_url + 'laporan/laporan/get_transaksi';
			
			$.post(url,{tanggal : tanggal, bulan : bulan, tahun : tahun},function(data){
				$('.laporan').html(data);
				$('*[data-type="print"]').slideDown().attr('href',base_url + 'laporan/cetak/laporan_penjualan/' + tanggal + '/' + bulan + '/' + tahun);
			});
			
			return false;
		});
		
		$(document).on('submit','#laporan_penjualan',function(){
			var tanggal = $('#laporan_penjualan select[name="tanggal"]').val();
			var bulan = $('#laporan_penjualan select[name="bulan"]').val();
			var tahun = $('#laporan_penjualan select[name="tahun"]').val();
			var url = base_url + 'laporan/laporan/get_penjualan';
			
			$.post(url,{tanggal : tanggal, bulan : bulan, tahun : tahun},function(data){
				$('.laporan').html(data);
				$('*[data-type="print"]').slideDown().attr('href',base_url + 'laporan/cetak/laporan_penjualan/' + tanggal + '/' + bulan + '/' + tahun);
			});
			
			return false;
		});
		
		$(document).on('change','select[name="bulan"]',function(){
			var form = $(this).parents('form:first');
			var val = $(this).val();
			
			if(val == 'all'){
				$('.tanggal',form).slideUp();
			}else{
				$('select[name="tanggal"]',form).val('all');
				$('.tanggal',form).slideDown();
			}
		});
	</script>
	<script>
		$(document).on('change','#add_barang_masuk input[name="kode_barang"]',function(){
			value = $(this).val();
			type = 'kode_barang';
			
			getBarang(type, value);
		});
		
		$(document).on('change','#add_barang_masuk input[name="kode_barcode"]',function(){
			value = $(this).val();
			type = 'kode_barcode';
			
			getBarang(type, value);
		});
		
		$(document).on('change','#add_barang_masuk input[name="nama_barang"]',function(){
			value = $(this).val();
			type = 'nama_barang';
			
			getBarang(type, value);
		});
		
		function getBarang(type, value){
			var url = base_url + 'transaksi/transaksi/getItem';
			$.post(url,{type : type , value : value},function(data){
				$.each(data, function(i, item){
					$('#add_barang_masuk input[name="stok_masuk"]').focus();
					$('#add_barang_masuk input[name="ID"]').val(item.ID);
					$('#add_barang_masuk input[name="kode_barcode"]').val(item.kode_barcode);
					$('#add_barang_masuk input[name="kode_barang"]').val(item.kode_barang);
					$('#add_barang_masuk input[name="nama_barang"]').val(item.nama_barang);
					$('#add_barang_masuk input[name="sisa_stok"]').val(item.stok);
				});
			},"json");
		}
		
		$(document).on('change','#edit_barang_masuk input[name="kode_barang"]',function(){
			value = $(this).val();
			type = 'kode_barang';
			
			getEditBarang(type, value);
		});
		
		$(document).on('change','#edit_barang_masuk input[name="kode_barcode"]',function(){
			value = $(this).val();
			type = 'kode_barcode';
			
			getEditBarang(type, value);
		});
		
		$(document).on('change','#edit_barang_masuk input[name="nama_barang"]',function(){
			value = $(this).val();
			type = 'nama_barang';
			
			getEditBarang(type, value);
		});
		
		function getEditBarang(type, value){
			var url = base_url + 'transaksi/transaksi/getItem';
			$.post(url,{type : type , value : value},function(data){
				$.each(data, function(i, item){
					$('#edit_barang_masuk input[name="stok_masuk"]').focus();
					$('#edit_barang_masuk input[name="ID"]').val(item.ID);
					$('#edit_barang_masuk input[name="kode_barcode"]').val(item.kode_barcode);
					$('#edit_barang_masuk input[name="kode_barang"]').val(item.kode_barang);
					$('#edit_barang_masuk input[name="nama_barang"]').val(item.nama_barang);
					$('#edit_barang_masuk input[name="sisa_stok"]').val(item.stok);
				});
			},"json");
		}
		
		$('[data-type="nama_barang"]').typeahead({
			source: function (query, process) {
				return $.get(base_url + 'barang/barang/getByNama', { query: query }, function (data) {
					return process(data.options);
				}, 'json');
			}
		});
		$('[data-type="kode_barang"]').typeahead({
			source: function (query, process) {
				return $.get(base_url + 'barang/barang/getByKode', { query: query }, function (data) {
					return process(data.options);
				}, 'json');
			}
		});
		$('[data-type="kode_barcode"]').typeahead({
			source: function (query, process) {
				return $.get(base_url + 'barang/barang/getByBarcode', { query: query }, function (data) {
					return process(data.options);
				}, 'json');
			}
		});
	</script>
	<script>
		$(document).on('click','[data-type="print"]',function(){
			source = $(this).attr('data-source');
			
			tanggal = $('#'+source+' select[name="tanggal"]').val();
			bulan = $('#'+source+' select[name="bulan"]').val();
			tahun = $('#'+source+' select[name="tahun"]').val();
			
			url = base_url + 'laporan/laporan/cetak';
			
			$.post(url,{tanggal:tanggal, bulan:bulan, tahun:tahun, type : source});
		});
	</script>
	
	<!-- NATHANSPORT -->
	<script>
		// =========================================
		// CATEGORY PANEL
		// =========================================
		
		$(document).on('click','.form_category',function(){
			$('#category_name').val ('');
			$('#category_id').val ('');
			$('#category_thumbnail').val ('');
			$('#category_method').val ('add');
			$('#category_fotonaam').attr ('src','');
			$('#category_old_thumbnail').val ('');
			
			var $modal = $('#category_modal');
			$modal.modal();
		});
		
		function edit_category(id_category, pages){
			
			if(pages == 'hydration'){
				url = 'adminProduct/hydration/getCategory';
			}else if(pages == 'equipment'){
				url = 'adminProduct/equipment/getCategory';
			}else if(pages == 'visibility'){
				url = 'adminProduct/visibility/getCategory';
			}

			$.post(base_url + url,{id_category : id_category},function(data){			
				$.each(data, function(i, item){
					$('#category_name').val (item.link.replace(/\_/gi,' '));
					$('#category_id').val (id_category);
					$('#category_old_thumbnail').val (item.fotonaam);
					$('#category_fotonaam').attr ('src',base_url_image+'images/'+item.fotonaam);
					$('#category_method').val ('edit');
				});
				var $modal = $('#category_modal');
				$modal.modal();
			}, 'json');
		};
		

		
		// =========================================
		// END CATEGORY PANEL
		// =========================================
		
		// =========================================
		// PRODUCT PANEL
		// =========================================
		
		function deletes(){
			var acceptance = confirm('Are you sure want to delete this item?');
			if(acceptance == true){
				return true;
			}else{
				return false;
			}
		};
		
		$(document).on('click','.add_picture',function(){
			
			$(this).parent().parent().after('<div class="control-group "><label class="control-label">Product Image</label><div class="controls"><img id="show_product_picture" src="" style="max-height:100px" /><input type="file" class="wrap" name="product_picture[]" id="product_picture" ><input type="hidden" class="wrap" name="product_old_picture[]" id="product_old_picture" ><button type="button" class="btn green add_picture">+</button></div></div>');
			$(this).parent().append('<button type="button" class="btn red del_picture">-</button></div>');
			$(this).remove();
			FormComponents.init();
		});
		
		$(document).on('click','.del_picture',function(){
			$(this).parent().parent().before();
			$(this).parent().parent().remove();
		});
		
		$(document).on('click','.add_color',function(){
			
			$(this).parent().parent().after('<div class="control-group"><label class="control-label">Product Color</label><div class="controls"><img src=""  /> <div class="input-append color colorpicker-default" data-color="" data-color-format="rgba"><input type="text" class="m-wrap" value=""  name="product_color[]"> <span class="add-on"><i style="background-color: rgb(219, 140, 207);"></i></span></div> <input type="file" name="product_color_picture[]" class="wrap" > <input type="hidden" name="product_color_old_picture[]" class="wrap" > <button type="button" class="btn green add_color">+</button> </div></div>');
			$(this).parent().append('<button type="button" class="btn red del_color">-</button></div>');
			$(this).remove();
			FormComponents.init();
		});
		
		$(document).on('click','.del_color',function(){
			$(this).parent().parent().before();
			$(this).parent().parent().remove();
		});
		
		// =========================================
		// END PRODUCT PANEL
		// =========================================
		
		// =========================================
		// MEDIA PANEL
		// =========================================
		
		$(document).on('click','.add_media',function(){
			
			$(this).parent().parent().after('<div class="control-group "><label class="control-label">Media Image</label><div class="controls"><img id="show_media_picture" src="" style="max-height:100px" /><input type="file" class="wrap" name="media_picture[]" id="media_picture" ><input type="hidden" class="wrap" name="media_old_picture[]" id="media_old_picture" ><button type="button" class="btn green add_media">+</button></div></div>');
			$(this).parent().append('<button type="button" class="btn red del_media">-</button></div>');
			$(this).remove();
			App.init();
		   TableAdvanced.init();
		   UIModals.init();
		   FormComponents.init();
		});
		
		$(document).on('click','.del_media',function(){
			$(this).parent().parent().before();
			$(this).parent().parent().remove();
		});
		
		// =========================================
		// CONTACT PANEL
		// =========================================
		
		$(document).on('click','.add_form',function(){
			
			$(this).parent().parent().after('<div class="control-group "><label class="control-label">Contact Field</label><div class="controls"><input type="text" name="form_label[]" placeholder="Field Label" /><br /><br /><select name="form_type[]">	<option value="email">Email</option><option value="text">Text Field</option><option value="textarea">Text Area</option><option value="select">Select</option></select><br /><br /><input type="text" class="span6" name="form_value[]" placeholder="Select options. separated by comma \',\'. E.g.: values1,values2,values3" /><br /><br />	<select name="form_require[]"><option value="required">Cannot Empty</option><option value="not-required">Empty</option>	</select><br /><br /><button type="button" class="btn green add_form">+</button></div></div>');
			$(this).parent().append('<button type="button" class="btn red del_form">-</button></div>');
			$(this).remove();
			App.init();
		   TableAdvanced.init();
		   UIModals.init();
		   FormComponents.init();
		});
		
		$(document).on('click','.del_form',function(){
			$(this).parent().parent().before();
			$(this).parent().parent().remove();
		});
		
		// =========================================
		// END PAGE PANEL
		// =========================================
		
		$(document).on('submit','#user_modal_form',function(){
			password = $('#user_password').val();
			repassword = $('#user_repeat_password').val();
			if(password != '' && password != repassword){
				alert('Password not match');
				$('#user_password').focus();
				return false;
			}
		});
		
		var updateOutput = function (e) {
			var list = e.length ? e : $(e.target),
				output = list.data('output');
			if (window.JSON) {
				return window.JSON.stringify(list.nestable('serialize')); //, null, 2));
			} else {
				output.val('JSON browser support required for this demo.');
			}
		};
		
		$(document).on('click','.save_nav',function(){
			button = $(this);
			category = $(this).attr('data-target');
			orders = updateOutput($('#'+category).data('output',''));
			url = base_url + 'adminNav/navigation/orders';
			
			$('.alert').remove();
			$(this).before('<div class="btn loading" style="height:20px;"><img src="'+base_url_image+'assets/img/ajax-modal-loading.gif" align="middle" style="height:20px;margin-top:-10px;">&nbsp;<span style="font-weight:300; color: #333; font-size: 18px; font-family:Open Sans;">&nbsp;Loading...</div>');
			
			$.post(url,{orders : orders},function(data){
					$('.loading').remove();
					button.before('<div class="alert alert-success span10"><button class="close" data-dismiss="alert"></button><strong>Success!</strong> Menu has been saved.</div>');
			});
		});
	</script>
	<!-- END NATHANSPORT -->
	
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>