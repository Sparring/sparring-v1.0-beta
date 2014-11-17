<?php 
$image = array('slide1.png','slide2.png');
$rand = rand(0,1);
?>
<style>
	.white{
		background-color:#FFA300;
		background-image:url(<?php echo base_url() ?>images/setting/<?php echo $image[$rand] ?>);
		background-position:bottom;
		background-position:0px 100%;
		background-attachment:fixed;
		background-repeat:no-repeat;
		color:#666;	
	}
	
	.abu{
		color:#666;
	}
	
	ul.page-sidebar-menu > li.active > a {
		border-top: 1px solid #5c5c5c !important;
		color: #FFA300 !important;
		background:#333 !important;
		font-weight:900;
	}
</style>
<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse white" >
			<!-- BEGIN SIDEBAR MENU --> 
            <div class="slimScrollDiv" >       
			<ul class="page-sidebar-menu" >
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<!-- <div class="sidebar-toggler hidden-phone"></div> -->
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
			
                <!--<li class="start <?php echo 'grafik' == $this->uri->segment(2) ? 'active' : ''; ?>">-->
				<li class="<?php echo 'dashboard' == $this->uri->segment(2) ? 'active' : ''; ?>" style="background:#484a4e" >
					<a href="<?php echo site_url('adminDashboard/dashboard') ?>">
					<i class="icon-home"></i> 
					<span class="title <?php echo 'dashboard' == $this->uri->segment(2) ? '' : 'abu'; ?>">Dashboard</span>
					<span class="selected"></span>
					</a>
				</li>
                

                <!--<li class="">
					<a href="javascript:;">
                    <i class="icon-money"></i> 
					<span class="title abu">Transaksi</span>
					<span class="arrow "></span>
					</a>
                    <ul class="sub-menu">
						<li class="">
                        	<a href="">+ Baru</a>
						</li>
                    </ul>
                </li>-->
				
				<?php 
				foreach($this->configuration->get_menu() as $item): 
				$url = explode('/',$item->route);
				if($item->sub_menu != '1'):
				?>
				<li class="<?php echo $url[0] == $this->uri->segment(1) ? 'active' : ''; ?>" style="background:#484a4e">
					<a href="<?php echo site_url($item->route) ?>">
					<i class="icon-<?php echo $item->icon ?>"></i> 
					<span class="title <?php echo $item->route == $this->uri->segment(1) ? '' : ''; ?>"><?php echo ucfirst($item->menu_name) ?></span>
					<span class="selected"></span>
					</a>
				</li>
				<?php else: ?>
				<li class="<?php echo $url[0] == $this->uri->segment(1) ? 'active' : ''; ?>" style="background:#484a4e">
					<a href="javascript:;">
                    <i class="icon-<?php echo $item->icon ?>"></i> 
					<span class="title <?php echo $item->route == $this->uri->segment(1) ? '' : ''; ?>"><?php echo ucfirst($item->menu_name) ?></span>
					<span class="arrow "></span>
					</a>
                    <ul class="sub-menu" >
						<?php 
						foreach($this->configuration->get_sub_menu($item->id_menu) as $sub_item): 
						$sub_url = explode('/',$sub_item->route);
						?>
						<li class="<?php echo $sub_url[1] == $this->uri->segment(2) ? 'active' : ''; ?>" >
                        	<a href="<?php echo site_url($sub_item->route) ?>"><?php echo $sub_item->menu_name ?></a>
						</li>
						<?php endforeach; ?>
                    </ul>
                </li>
				<?php endif;endforeach; ?>
				

				
			</ul>
            </div>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->