<?php $this->load->view('frontend/header') ?>
<?php $this->load->view('frontend/menu') ?>


<!-- Content Wrapper. Contains page content -->
<?php isset($main) ? $this->load->view($main) : null; ?>
<!-- /.content-wrapper -->
<?php $this->load->view('frontend/ads') ?>
<?php $this->load->view('frontend/category') ?>
<?php $this->load->view('frontend/feature') ?>

<?php $this->load->view('frontend/footer') ?>