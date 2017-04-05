<?php $this->load->view('store/header') ?>

<!-- Content Wrapper. Contains page content -->
<?php isset($main) ? $this->load->view($main) : null; ?>
<!-- /.content-wrapper -->

<?php $this->load->view('frontend/footer') ?>