<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="icon" href="<?php echo media_url('ico/favicon.png'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo media_url() ?>css/styles.css">
    <link rel="stylesheet" href="<?php echo media_url() ?>css/login.css">
    <script src="<?php echo media_url() ?>js/scripts.js"></script>
    <script src="<?php echo media_url() ?>js/particle.js"></script>
</head>
<body>
    <div class="container">    

        <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 

            <div class="row">                
                <div class="logo">
                   <center> <img src="<?php echo media_url() ?>/img/brand.png" width="250px"></center>
               </div>
           </div>

           <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center">Login Here !</div>
            </div>     

            <div class="panel-body">

                <?php 
                $attribut = array('id' => 'form');
                echo form_open('admin/auth/login',$attribut); ?>
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

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user text-icon"></i></span>
                    <input type="text" autofocus="" class="form-control" name="username" placeholder="User">                                        
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock text-icon"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>                                                                  

                <div class="form-group">
                    <!-- Button -->
                    <div class="col-sm-12 controls">
                        <button type="submit" class="btn btn-success pull-right"><i class="glyphicon glyphicon-log-in"></i> Login</button>                          
                    </div>
                </div>

                <?php echo form_close(); ?>    

            </div>                     
        </div>  
    </div>
</div>

<div id="particles"></div>

</body>
</html>