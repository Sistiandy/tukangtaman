<?php $this->load->view('store/header') ?>
<div class="section">
      <div class="container">
        <div class="row">
		
		<?php 
		if ($main != 'store/login' AND $main != 'store/register') {
		$this->load->view('store/sidebar');
		} ?>

		<!-- Content Wrapper. Contains page content -->
		<?php isset($main) ? $this->load->view($main) : null; ?>
		<!-- /.content-wrapper -->

	</div>
</div>
</div>
<?php $this->load->view('frontend/footer') ?>