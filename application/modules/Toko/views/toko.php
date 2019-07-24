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
      
      <div class="page-header">
        <h1 class="page-title">Setting</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Data Toko</li>
        </ol>
      </div>
      
      <div class="page-content">
        <!-- Panel Form Elements -->
        <div class="panel">

          <div class="panel-body container-fluid">
            
            <form action="{{ base_url() }}Toko/Edit" class="form-horizontal" method="post">
              <div class="col-md-6 col-lg-4">
                <!-- Example Rounded Input -->
                <div class="example-wrap">
                  <h4 class="example-title">Nama Bengkel</h4>
                  <input type="hidden" value="{{$get_data->kd_toko}}" name="a">
                  <input type="text" class="form-control" value="{{$get_data->nm_toko}}" name="b">
                </div>
                <!-- End Example Rounded Input -->
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- Example Disable -->
                <div class="example-wrap">
                  <h4 class="example-title">Alamat</h4>
                  <input type="text" class="form-control round" id="inputRounded" value="{{$get_data->alamat}}" name="c">
                </div>
                <!-- End Example Disable -->
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- Example Input Focus -->
                <div class="example-wrap">
                  <h4 class="example-title">Telpon</h4>
                  <input type="text" class="form-control round" id="inputRounded" value="{{$get_data->telp}}" name="d">
                </div>
                <!-- End Example Input Focus -->
              </div>

              <div class="col-md-6 col-lg-4">
              <button type="submit" class="btn btn-success">Update</button>
              </div>
            </form>
            </div>
          
        </div>
        <!-- End Panel Form Elements -->

        
      </div>
    </div>
    <!-- End Page -->

    <script type="text/javascript">
      function hapus(kode){
        swal({
                title: "Hapus Data Ini?",
                text: "Data akan dihapus permanen",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#EF5350",
                confirmButtonText: "Hapus",
                cancelButtonText: "Batal",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            },
            function(){
              location.href = '{{base_url()}}Satuan/Delete/'+kode;
            }
        );
      }
    </script>


@extends('general_lib.footer');
@extends('general_lib.core');
@extends('general_lib.plugins');
@extends('general_lib.scripts');
@extends('lib.pages');

  </body>
</html>
