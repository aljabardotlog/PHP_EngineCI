@php
defined('BASEPATH') OR exit('No direct script access allowed');
@endphp
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>Bengkel_App</title>
    
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>adl_/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>adl_/assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url() ?>adl_/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>adl_/global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>adl_/assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url() ?>adl_/global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>adl_/global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>adl_/global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>adl_/global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>adl_/global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>adl_/global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>adl_/global/vendor/waves/waves.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>adl_/assets/examples/css/pages/login.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo base_url() ?>adl_/global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>adl_/global/fonts/brand-icons/brand-icons.min.css">
    
    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>adl_/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="<?php echo base_url() ?>adl_/global/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="<?php echo base_url() ?>adl_/global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-login layout-full page-dark">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
      <div class="page-content vertical-align-middle">
        <div class="brand">
          <img class="brand-img" src="<?php echo base_url() ?>adl_/assets/images/logo.png" alt="...">
          <h2 class="brand-text">Bengkel_App</h2>
        </div>
        <p>Silahkan Login</p>
        <form>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="email" class="form-control empty" id="inputEmail" name="email">
            <label class="floating-label" for="inputEmail">Email</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="password" class="form-control empty" id="inputPassword" name="password">
            <label class="floating-label" for="inputPassword">Password</label>
          </div>
          <div class="form-group clearfix">
            <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
              <input type="checkbox" id="inputCheckbox" name="remember">
              <label for="inputCheckbox">Remember me</label>
            </div>
            <!--
            <a class="float-right" href="forgot-password.html">Forgot password?</a>
            -->
          </div>
          <button type="submit" id="submit" class="btn btn-primary btn-block">Login</button>
        </form>

        <div id='err_msg' style='display: none'>  
          <div id='content_result'>  
            <div id='err_show' class="w3-text-red">  
                <div id='msg'> 
                </div>  
            </div>
          </div>
        </div>  

        <!--
        <p>Still no account? Please go to <a href="register.html">Register</a></p>
        -->
        <footer class="page-copyright page-copyright-inverse">
          <!--<p>WEBSITE BY Creation Studio</p>-->
          <p>© 2018. Bengkel_App</p>
          <!--
          <div class="social">
          
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-twitter" aria-hidden="true"></i>
        </a>
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-facebook" aria-hidden="true"></i>
        </a>
        
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-google-plus" aria-hidden="true"></i>
        </a>
        
          </div>
        -->
        </footer>
      </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="<?php echo base_url() ?>adl_/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/vendor/bootstrap/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/vendor/animsition/animsition.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="<?php echo base_url() ?>adl_/global/vendor/switchery/switchery.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/vendor/intro-js/intro.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/vendor/screenfull/screenfull.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="<?php echo base_url() ?>adl_/global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Scripts -->
    <script src="<?php echo base_url() ?>adl_/global/js/Component.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/js/Plugin.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/js/Base.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/js/Config.js"></script>
    
    <script src="<?php echo base_url() ?>adl_/assets/js/Section/Menubar.js"></script>
    <script src="<?php echo base_url() ?>adl_/assets/js/Section/GridMenu.js"></script>
    <script src="<?php echo base_url() ?>adl_/assets/js/Section/Sidebar.js"></script>
    <script src="<?php echo base_url() ?>adl_/assets/js/Section/PageAside.js"></script>
    <script src="<?php echo base_url() ?>adl_/assets/js/Plugin/menu.js"></script>
    
    <script src="<?php echo base_url() ?>adl_/global/js/config/colors.js"></script>
    <script src="<?php echo base_url() ?>adl_/assets/js/config/tour.js"></script>
    <script>Config.set('assets', '<?php echo base_url() ?>adl_/assets/');</script>
    
    <!-- Page -->
    <script src="<?php echo base_url() ?>adl_/assets/js/Site.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/js/Plugin/asscrollable.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/js/Plugin/slidepanel.js"></script>
    <script src="<?php echo base_url() ?>adl_/global/js/Plugin/switchery.js"></script>
        <script src="<?php echo base_url() ?>adl_/global/js/Plugin/jquery-placeholder.js"></script>
        <script src="<?php echo base_url() ?>adl_/global/js/Plugin/material.js"></script>
    @extends('js')
    
    @section('js_proses')
    <script type="text/javascript">
      (function(document, window, $){
        'use strict';
          var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
    @parent
    @endsection
    
    
  </body>
</html>
