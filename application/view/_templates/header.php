
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Movies</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo URL; ?>images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="<?php echo URL; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo URL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo URL; ?>css/mdi.css">
    <link rel="stylesheet" href="<?php echo URL; ?>css/fl-bigmug-line.css">
        <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
        <![endif]--> 
  </head>
  <body>
    <!-- Page preloader-->
    <div class="page-loader">
      <div class="page-loader-body">
        <div class="preloader-wrapper big active"> 
          <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"> </div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
          <div class="spinner-layer spinner-red">
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"> </div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
          <div class="spinner-layer spinner-yellow"> 
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"> </div>
            </div>
          </div>
          <div class="spinner-layer spinner-green"> 
            <div class="circle-clipper left">
              <div class="circle"></div>
            </div>
            <div class="gap-patch">
              <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
              <div class="circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page-->

    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-shop-header">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="100px" data-lg-stick-up-offset="150px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-top-panel">
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                        <li class="active"><a href="<?php echo URL; ?>">AndiMovies</a>
                        <li><a href="<?php echo URL; ?>action/"><span>Aksion</span></a></li>
                        <li><a href="<?php echo URL; ?>animuar/"><span>Animuar</span></a></li>
                        <li><a href="<?php echo URL; ?>aventure/"><span>Aventurë</span></a></li>
                        <li><a href="<?php echo URL; ?>biografi/"><span>Biografi</span></a></li>
                        <li><a href="<?php echo URL; ?>dokumentar/"><span>Dokumentar</span></a></li>
                        <li><a href="<?php echo URL; ?>drame/"><span>Dramë</span></a></li>
                     <li class=""><a >Me shume</a>
                    <!-- RD Navbar Dropdown-->
                    <ul class="rd-navbar-dropdown">

                        <li><a href="<?php echo URL; ?>erotik/"><span>Erotik</span></a></li>
                        <li><a href="<?php echo URL; ?>fantashkence/"><span>Fantashkencë</span></a></li>
                        <li><a href="<?php echo URL; ?>fantazi/"><span>Fantazi</span></a></li>
                        <li><a href="<?php echo URL; ?>hindi/"><span>Hindi</span></a></li>
                        <li><a href="<?php echo URL; ?>histori/"><span>Histori</span></a></li>
                        <li><a href="<?php echo URL; ?>horror/"><span>Horror</span></a></li>
                        <li><a href="<?php echo URL; ?>komedi/"><span>Komedi</span></a></li>
                        <li><a href="<?php echo URL; ?>krim/"><span>Krim</span></a></li>
                        <li><a href="<?php echo URL; ?>lufte/"><span>Luftë</span></a></li>
                        <li><a href="<?php echo URL; ?>mister/"><span>Mister</span></a></li>
                        <li><a href="<?php echo URL; ?>romance/"><span>Romancë</span></a></li>
                        <li><a href="<?php echo URL; ?>sport/"><span>Sport</span></a></li>
                        <li><a href="<?php echo URL; ?>thriller/"><span>Thriller</span></a></li>
                        <li><a href="<?php echo URL; ?>western-te-tjera/"><span>Western</span></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="rd-navbar-inner" style="padding-bottom: 0px !important">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img class="logo-default" src="images/logo-default-128x52.png" alt="" width="128" height="52"/><img class="logo-inverse" src="images/logo-inverse-128x52.png" alt="" width="128" height="52"/></a></div>
              </div>
              <div class="rd-navbar-aside-center">
                <!-- RD Navbar Search-->
                <div class="rd-navbar-search"><a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span></span></a>
                  <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                    <div class="rd-mailform-inline rd-mailform-sm rd-mailform-inline-modern">
                      <div class="rd-mailform-inline-inner">
                        <div class="form-wrap form-wrap-icon mdi-magnify">
                          <label class="form-label form-label" for="rd-navbar-search-form-input">Search...</label>
                          <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                          <div class="rd-search-results-live"></div>
                        </div>
                        <button class="rd-search-form-submit rd-search-form-submit-icon mdi mdi-magnify"></button>
                        <button class="rd-search-form-submit button form-button button-sm button-secondary button-nina">search</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
   