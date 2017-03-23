<!DOCTYPE html>
<html>
<head>
    <title>Tukang Taman <?php echo isset($title) ? ' | ' . $title : null; ?></title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <!--  Pretty Photo Style -->
        <link href="<?php echo media_url() ?>/css/prettyPhoto.css" rel="stylesheet" />
        <!--  Google Font Style -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <!--  Custom Style -->
        <link href="<?php echo media_url() ?>/css/styles.css" rel="stylesheet" />
        <link href="<?php echo media_url() ?>/css/skdslider.css" rel="stylesheet" />
        <!--  Frontend Style -->
        <link href="<?php echo media_url() ?>/css/frontend-style.css" rel="stylesheet" />
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      <!-- js -->
      <!--  Jquery Core Script -->
      <script src="<?php echo media_url() ?>/js/scripts.js"></script>
      <script src="<?php echo media_url() ?>/js/skdslider.min.js"></script>
      <script src="<?php echo media_url() ?>/js/easing.js"></script>
      
      <script src="<?php echo media_url() ?>/js/move-top.js"></script>
      <!--  Custom Scripts -->
      
      <!-- //js -->
      <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
      <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
      <!-- start-smoth-scrolling -->
      <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
    <!-- header -->
    <div class="agileits_header">
        <div class="container">
            <div class="w3l_offers">
                <p>Diskon Pengguna Baru Up To 70% . <a href="#">Klik Disini!</a></p>
            </div>
            <div class="agile-login pull-right">
                <ul>
                    <li ><a href="#" data-toggle="modal" data-target="#at-signup">Daftar</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Masuk</a>
                        <ul class="dropdown-menu multi-column columns-0">
                            <div class="row">
                                <div class="multi-gd-img">
                                    <ul class="multi-column-dropdown">
                                        <form>
                                            <div class="login-form">
                                                <div class="form-group ">
                                                    <input type="text" class="form-control" placeholder="Username " id="UserName">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <div class="form-group log-status">
                                                    <input type="password" class="form-control" placeholder="Password" id="Passwod">
                                                    <i class="fa fa-lock"></i>
                                                </div>
                                                <button type="button" class="log-btn" >Log in</button>  
                                            </div>
                                        </form> 
                                    </ul>
                                </div>      
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left1">
                <ul class="phone_email">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>Customer Service : (021) 123 45678</li>

                </ul>
            </div>
            <div class="w3ls_logo_products_left">
                <img src="<?php echo media_url() ?>img/brand.png" width="100px" height="50px">
            </div>
            <div class="w3l_search">
                <form action="#" method="post">
                    <input type="search" name="Search" placeholder="Cari Produk Disini..." required="">
                    <button type="submit" class="btn btn-default search" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                    <div class="clearfix"></div>
                </form>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
        <!-- //header -->