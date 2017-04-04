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
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <img alt="Brand" src="<?php echo media_url() ?>/img/brnd.png" width="158px" height="50px" class="img-responsive img-rounded">
            </a>
        </div>
    </div>
</div>


<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
        <button type="button" href="#" data-toggle="modal" data-target="#at-signup" class="btn btn-success navbar-btn">Profil</button>
     
</ul>
<form class="navbar-form navbar-center">
    <div class="form-group">
      <input type="text" size="70" class="form-control" placeholder="Pencarian">
  </div>
  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
</form>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
