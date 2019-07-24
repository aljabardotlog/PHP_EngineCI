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
        <button class="btn btn-primary float-right" data-toggle="modal" data-target=".add" style="margin: 20px 0px;">Tambah</button>
        <h1 class="page-title">Master</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Satuan</li>
        </ol>
      </div>
      
      <div class="page-content">
        
        <!-- Panel Table Individual column searching -->
        <div class="panel">
          <header class="panel-heading">
          </header>
          <div class="panel-body" style="padding: 20px;">
            @if ($this->session->flashdata("notif"))
            <div class="alert dark alert-icon alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <i class="icon md-check" aria-hidden="true"></i> Data berhasil di{{$this->session->flashdata("notif")}}.
            </div>
            @endif
            <table class="table table-hover dataTable table-striped w-full table-bordered" data-plugin="dataTable">
              <thead>
                <tr>
                  <th class="text-center">NO</th>
                  <th class="text-center">SATUAN</th>
                  <th class="text-center">AKSI</th>
                </tr>
              </thead>
              <tbody>
                @php 
                  $no = 1;
                @endphp
                @foreach($get_data as $get_data)
                        <tr>
                          <td class="text-center">{{ $no }}</td>
                          <td>{{ @ucwords(@strtolower($get_data->satuan)) }}</td>
                          
                          <td class="text-center">
                            <button type="button" class="btn btn-primary btn-sm" data-target=".edit{{ $get_data->kd_satuan }}" data-toggle="modal"><i class="fa fa-pencil"></i> Ubah</button>
                            <button onclick="hapus('{{$get_data->kd_satuan}}')" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</button>
                          </td>
                        </tr>



                        <!-- Modal -->
                        <div class="modal fade edit{{ $get_data->kd_satuan }}" aria-hidden="true" aria-labelledby="example1"
                          role="dialog" tabindex="-1">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="example1">Ubah Data</h4>
                              </div>
                              <div class="modal-body">
                                <form action="{{ base_url() }}Satuan/Edit" class="form-horizontal" method="post">
                                  <input type="hidden" name="kode" value="{{$get_data->kd_satuan}}">
                                  <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" value="{{ $get_data->satuan }}" name="a" placeholder="Satuan" required>
                                    </div>
                                  </div>
                                  <div class="form-group float-right">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Modal -->

                        @php 
                          $no++;
                        @endphp
                    @endforeach

                    <!-- Modal -->
                    <div class="modal fade add" aria-hidden="true" aria-labelledby="example2"
                      role="dialog" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title" id="example2">Tambah Data</h4>
                          </div>
                          <div class="modal-body">
                            <form action="{{ base_url() }}Satuan/Add" class="form-horizontal" method="post">
                              <div class="form-group row">
                                <label class="col-md-2 col-form-label">Nama</label>
                                <div class="col-md-10">
                                  <input type="text" class="form-control" name="a" placeholder="Satuan" required>
                                </div>
                              </div>
                              <div class="form-group float-right">
                                <button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal -->
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Table Individual column searching -->

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
