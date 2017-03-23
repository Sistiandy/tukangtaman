<?php $this->load->view('frontend/header') ?>
<?php $this->load->view('frontend/menu') ?>
<?php $this->load->view('slideshow/frontend/index') ?>

<!-- Content Wrapper. Contains page content -->
<?php isset($main) ? $this->load->view($main) : null; ?>
<!-- /.content-wrapper -->

<?php $this->load->view('frontend/footer') ?>