<?php $this->load->view('store/header') ?>
<?php $this->load->view('store/menu') ?>

<!-- Content Wrapper. Contains page content -->
<?php isset($main) ? $this->load->view($main) : null; ?>
<!-- /.content-wrapper -->

<?php $this->load->view('store/footer') ?>