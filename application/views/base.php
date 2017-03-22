<!DOCTYPE html>
<html>
<head>
    <title>Tukang Taman</title>
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
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
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
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
        <script src="<?php echo media_url() ?>/js/scripts.js"></script>
        <script src="<?php echo media_url() ?>/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="<?php echo media_url() ?>/js/easing.js"></script>
    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
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
        <!-- navigation -->
        <div class="navigation-agileits">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html" class="act">Home</a></li>   
                            <!-- Mega Menu -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jasa<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <h6>List Jasa</h6>
                                                <li><a href="#">Premium Jasa</a></li>
                                                <li><a href="#">Beginer Jasa</a></li>
                                            </ul>
                                        </div>      
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Penjualan<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <h6>List Penjualan</h6>
                                                <li><a href="#">Jual & Beli</a></li>
                                                <li><a href="#">Apa Aja</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Cara Pembayaran</a></li>
                            <li><a href="#">Cara Pembayaran</a></li>
                            <li><a href="#">Cara Pembelian</a></li>
                            <li><a href="#">Bantuan</a></li>
                            <li><a href="#">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        
        <!-- //navigation -->
        <!-- main-slider -->
        <ul id="demo1">
            <li>
                <img src="<?php echo media_url() ?>/img/slide/11.jpg" alt="" />
                <!--Slider Description example-->
                <div class="slide-desc">
                    <h3>Kini Hadir Lebih Dekat Untuk Anda</h3>
                </div>
            </li>
            <li>    
                <img src="<?php echo media_url() ?>/img/slide/22.jpg" alt="" />
                <div class="slide-desc">
                    <h3>Kini Hadir Lebih Dekat Untuk Anda</h3>
                </div>
            </li>
            
            <li>     
                <img src="<?php echo media_url() ?>/img/slide/44.jpg" alt="" />
                <div class="slide-desc">
                    <h3>Kini Hadir Lebih Dekat Untuk Anda</h3>
                </div>
            </li>
        </ul>
        <!-- //main-slider -->
        <!-- //top-header and slider -->
        <!-- top-brands -->
        
        <!-- //new -->
        <!-- //footer -->
        <div class="footer">
            <div class="container">
                <div class="w3_footer_grids">
                    <div class="col-md-3 w3_footer_grid">
                        <h3>Contact</h3>

                        <ul class="address">
                            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Bojonggede <span>Bogor</span></li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                        </ul>
                    </div>
                    <div class="col-md-3 w3_footer_grid">
                        <h3>Information</h3>
                        <ul class="info"> 
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">About Us</a></li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Contact Us</a></li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Short Codes</a></li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">FAQ's</a></li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Special Products</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 w3_footer_grid">
                        <h3>Category</h3>
                        <ul class="info"> 
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Groceries</a></li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Household</a></li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Personal Care</a></li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Packaged Foods</a></li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Beverages</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 w3_footer_grid">
                        <h3>Profile</h3>
                        <ul class="info"> 
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Store</a></li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">My Cart</a></li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Login</a></li>
                            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Create Account</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>  
        <div class="footer-botm">
            <div class="container">
                <div class="w3layouts-foot">
                    <ul>
                        <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="payment-w3ls">  
                    <img src="<?php echo media_url() ?>img/card.png" alt=" " class="img-responsive">
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //footer -->   

        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
                */

                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
<!-- main slider-banner -->
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

        jQuery('#responsive').change(function(){
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
</script>   
<!-- //main slider-banner --> 
</body>
<!-- MODAL LOGIN -->
<section class="at-login-form">
    <div class="modal fade" id="at-signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control-form " id="exampleInputEmaillog" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control-form " id="exampleInputPasswordpas" placeholder="Password">
                        </div>
                        <button type="submit" class="btn-lgin">Daftar</button>
                    </form>
                    <div class="signup-or-separator">
                        <span class="h6 signup-or-separator--text">atau</span>
                        <hr>
                    </div>
                    <button class="btn-fb"> <i class="fa fa-fw fa-facebook pull-left" aria-hidden="true"></i>
                        Masuk Dengan Facebook   </button> <br>  
                        <button class="btn-gp"> <i class="fa fa-fw fa-google pull-left" aria-hidden="true"></i>
                            Masuk Dengan Google </button> <br>      
                        </div>
                        <div class="modal-footer">
                            <div class="row">   
                                <div class="col-md-6">
                                    <p class="ta-l">Sudah Punya Akun ? </p>
                                </div>  
                                <div class="col-md-4 col-md-offset-2">  
                                    <button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" data-target="#at-signin" >Login </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MODAL LOGIN ENDS -->
            <div class="modal fade" id="at-signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control-form " id="exampleInputEmaillog" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control-form " id="exampleInputPasswordpas" placeholder="Password">
                                </div>
                                <button type="submit" class="btn-lgin">Masuk</button>
                            </form>
                            <div class="signup-or-separator">
                            </div>
                            <div class="modal-footer">
                                <div class="row">   
                                    <div class="col-md-6">
                                        <p class="ta-l">Belum Punya Akun ? </p>
                                    </div>  
                                    <div class="col-md-4 col-md-offset-2">  
                                        <button class="btn-gst"  data-toggle="modal"  data-dismiss="modal" data-target="#at-signup" >Daftar </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </html>