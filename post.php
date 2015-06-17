<?php 
    session_start();
    require_once('config/db.php');
?>
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>SMPN 14 Padang</title>
    <meta name="description" content="">
    <meta name="author" content="Dictatorkid">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/isotope.css" media="screen" />
    <link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
    <!-- Owl Carousel Assets -->
    <link href="assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css" />
    <!-- Font Awesome -->
    <link href="assets/font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body style="padding-top:70px;">
    <header class="header">

        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="#" class="navbar-brand scroll-top logo"><img src="assets/images/logo.png" alt="" style="margin-top:-10px;"> <b>Sistem Informasi Akademik</b></a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="active"><a href="index.php" class="scroll-link">Home</a></li>
                        <li><a href="#hotnews" class="scroll-link">Hot News</a></li>
                        <li><a href="#visimisi" class="scroll-link">Visi & Misi</a></li>
                        <li><a href="#profile" class="scroll-link">About Me</a></li>
                        <?php 
                            if (isset($_SESSION['username'])) {
                        ?>
                        <li><a href="dashboard/" class="scroll-link">Dashboard</a></li>
                        <li><a href="logout.php" class="scroll-link">Logout</a></li>
                        <?php
                            }else{
                        ?>
                        <li><a href="#login" class="scroll-link">Login</a></li>
                        <?php
                            }
                        ?>                        
                    </ul>
                </div>                
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>        
        <!--/.container-->
    </header>
    <!--/.header-->
    <div id="#top"></div>
    <section id="hotnews" class="page-section darkBg pDark pdingBtm30">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2><i class="fa fa-fire color"></i> Hot News</h2><center><hr style="width:15%;"></center>
            </div>
            <?php
                if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                    $hsl = mysql_query("SELECT *, kategori.kategori_id, kategori.kategori_nama
                                        FROM artikel 
                                        INNER JOIN kategori ON artikel.kategori_id=kategori.kategori_id 
                                        WHERE artikel.artikel_id=$id");
                    $data=mysql_fetch_array($hsl);
            ?>                          
                
                <div class="id-wrapper">
                    <div class="row">                                       
                        <div class="col-sm-12">
                            <h2><?php echo "$data[artikel_judul]"; ?></h2>
                            <p><?php echo "$data[artikel_isi]"; ?></p>
                            <div class="pull-right" style="color:#ffffff;">
                                <h4><?php echo "[ " .$data['kategori_nama']. " ] [ " .$data['artikel_tgl']. " ]"; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
            <?php } ?>
        </div>
        <!--/.container-->
    </section>
    <footer>
        <div class="container">
            <div class="social text-center">
                <a href="http://twitter.com/_AryMunandar_"><i class="fa fa-twitter"></i></a>
                <a href="http://facebook.com/KnighOfVandaL"><i class="fa fa-facebook"></i></a>
                <a href="http://github.com/Dictatorkid"><i class="fa fa-github"></i></a>
            </div>

            <div class="clear"></div>
            <!--CLEAR FLOATS-->
        </div>
    </footer>
    <!--/.page-section-->
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    Copyright 2015 | All Rights Reserved | <a href="#">Rika</a>        
                </div>
            </div>
            <!-- / .row -->
        </div>
    </section>
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

    <!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]-->
    <script src="assets/js/modernizr-latest.js"></script>
    <script src="assets/js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="assets/js/jquery.nav.js" type="text/javascript"></script>
    <script src="assets/js/jquery.cslider.js" type="text/javascript"></script>
    <script src="assets/js/custom.js" type="text/javascript"></script>
    <script src="assets/js/owl-carousel/owl.carousel.js"></script>


</body>
</html>