<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="icon" href="<?php echo media_url('ico/favicon.jpg'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo media_url() ?>css/styles.css">
    <link rel="stylesheet" href="<?php echo media_url() ?>css/login.css">
</head>
<body>
    <div class="container main">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center title">
            <h1>Lapak Tukang Taman</h1>
            <div class="bar"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 form">
           <?php echo form_open('admin/auth/login'); ?>
           <?php
           if (isset($_GET['location'])) {
            echo '<input type="hidden" name="location" value="';
            if (isset($_GET['location'])) {
                echo htmlspecialchars($_GET['location']);
            }
            echo '" />';
        } ?>
        <!-- Jika Error -->
        <?php if ($this->session->flashdata('failed')) { ?>
        <div class="danger">
            <h5><center><?php echo $this->session->flashdata('failed') ?></center></h5>
        </div>
        <?php } ?>
        <h2>Login</h2>
        <input type="text" autofocus name="username" placeholder="username"/><br/>
        <input type="password" name="password" placeholder="password"/>
        <button type="submit" class="btn btn-default btn-flat login">login</button>
    </div>
    <?php echo form_close(); ?>
</div>
</div>

</body>
</html>