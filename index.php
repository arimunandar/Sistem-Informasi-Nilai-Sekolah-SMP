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

<body>
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
                        <li class="active"><a href="#home" class="scroll-link">Home</a></li>
                        <li><a href="#hotnews" class="scroll-link">Hot News</a></li>
                        <li><a href="#profile" class="scroll-link">About Me</a></li>
                        <?php 
                            if (isset($_SESSION['username'])) {
                        ?>
                        <li><a href="dashboard/" class="scroll-link">Dashboard</a></li>
                        <li><a href="logout.php" class="scroll-link">Logout</a></li>
                        <?php
                            }else{
                        ?>
                        <li><a href="#profile" class="scroll-link">Login</a></li>
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
    <section id="home">
        <div class="banner-container">
            <img src="assets/images/b.jpg" alt="banner" />
            <div class="container banner-content">
                <div id="da-slider" class="da-slider">
                    <div class="da-slide">
                        <h2>Ari Munandar</h2>
                        <p>+6282384669700</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Sistem Informasi Management Nilai Siswa</h2>
                        <p>SMP N 14 Padang | Sumatera Barat</p>
                        <div class="da-img"></div>
                    </div>
                    <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="hotnews" class="page-section darkBg pDark pdingBtm30">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2><i class="fa fa-fire color"></i> Hot News</h2><center><hr style="width:15%;"></center>
            </div>
            <?php
                $no         =   1; 
                $artikel    =   mysql_query("SELECT *, kategori.kategori_nama FROM artikel
                                            INNER JOIN kategori ON artikel.kategori_id=kategori.kategori_id
                                            ORDER BY artikel_tgl DESC");
                while ($data=mysql_fetch_array($artikel)) {
            ?>
                <div class="col-md-6" style="color:#ffffff;">
                    <h4># <?php echo $no; ?></h4><hr/>  
                    <h4><?php echo $data['artikel_judul']; ?></h4>
                    <p style="color:#BBBBBB;"><?php echo substr($data['artikel_isi'],0,100); ?></p>
                    <div class="action-buttons">
                        <a href="post.php?id=<?php echo "$data[artikel_id]"; ?>">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <div class="pull-right"><?php echo $data['kategori_nama']. " | " .$data['artikel_tgl']; ?></div>
                    <hr/>

                </div>
            <?php
                $no++;
                }                  
            ?>
        </div>
        <!--/.container-->
    </section>
        <!--/.container-->
    </section>
    <section id="profile" class="page-section" style="background:#222222;">
        <div class="container">
            <div class="heading text-center">
                <!-- Heading -->
                <h2><i class="fa fa-user color"></i> About Me</h2><center><hr style="width:15%;"></center>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>        
                        <label style="padding-right:70px;">Name</label> : Ari Munandar <br>
                        <label style="padding-right:33px;">E-Mail</label> : arimunandar.dev@gmail.com <br>
                        <label style="padding-right:17px;">Phone</label> : +6282384669700 <br>
                    </p>
                </div>
                <?php 
                    if (!isset($_SESSION['access'])) {
                ?>
                <div class="col-md-6">
                    <form role="form" action="core/login_proses.php" method="post">
                        <div class="form-group">
                            <h4 style="color:#999999;">username :</h4>
                            <input type="text" class="form-control" placeholder="Enter username" name="username" required>
                        </div>
                        <div class="form-group">
                            <h4 style="color:#999999;">Password :</h4>
                            <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block" name="signin">Login</button>
                    </form>
                </div>
                <?php
                    }
                ?>                
            </div>

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
                    Copyright 2015 | All Rights Reserved | <a href="#">Ari Munandar</a>        
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
