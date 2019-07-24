@php
defined('BASEPATH') OR exit('No direct script access allowed');
@endphp
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

  @extends('general_lib.head')
  
  <body class="animsition dashboard">
       
    @extends('general_lib.navbar')
    @extends('general_lib.site_menubar')



    <!-- Page -->
    <div class="page">
      <!--
      <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        
      </div>
      -->
      <div class="page-content">
        
        <!-- Panel Table Individual column searching -->
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">Selamat Datang {{$this->session->userdata('nama_user')}}</h3>
          </header>
        </div>
        <!-- End Panel Table Individual column searching -->

        <div class="panel-body" style="padding: 20px;">
            <blockquote class="blockquote custom-blockquote blockquote-danger">
              <p class="mb-0">
                Yamalube Metic
              </p>
              <footer class="blockquote-footer">Tersisa
                <cite title="Source Title"><b>3 Botol</b></cite>
              </footer>
            </blockquote>

            <blockquote class="blockquote custom-blockquote blockquote-danger">
              <p class="mb-0">
                Yamalube Silver
              </p>
              <footer class="blockquote-footer">Tersisa
                <cite title="Source Title"><b>0 Botol</b></cite>
              </footer>
            </blockquote>

            <blockquote class="blockquote custom-blockquote blockquote-danger">
              <p class="mb-0">
                Yamalube Super Metic
              </p>
              <footer class="blockquote-footer">Tersisa
                <cite title="Source Title"><b>2 Botol</b></cite>
              </footer>
            </blockquote>
          </div>


        </div>
        <!-- End Panel Table Individual column searching -->

      </div>
    </div>
    <!-- End Page -->


@extends('general_lib.footer');
@extends('general_lib.core');
@extends('general_lib.plugins');
@extends('general_lib.scripts');
@extends('lib.pages');
    
  </body>
</html>
