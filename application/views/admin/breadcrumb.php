<!-- BEGIN PAGE TITLE & BREADCRUMB-->
<h3 class="page-title">
		<?php echo ucfirst($this->uri->segment(2) )?>
</h3>
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="<?php echo site_url('adminDashboard/dashboard'); ?>">Home</a> 
	</li>
	<?php if($this->uri->segment(2) != ''): ?>
	<li>
		<i class="icon-angle-right"></i>
		<a href="<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2)); ?>"><?php echo ucfirst($this->uri->segment(2) )?></a> 
	</li>
	<?php endif; ?>
</ul>
<!-- END PAGE TITLE & BREADCRUMB-->