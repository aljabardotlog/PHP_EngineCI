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
          <li class="breadcrumb-item active">Mekanik</li>
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
                  <th class="text-center">Mekanik</th>
                  <th class="text-center">Alamat</th>
                  <th class="text-center">Telp</th>
                  <th class="text-center">Keterangan</th>
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
                          <td>{{ @ucwords(@strtolower($get_data->nm_mekanik)) }}</td>
                          <td>{{ @ucwords(@strtolower($get_data->alamat)) }}</td>
                          <td>{{ @ucwords(@strtolower($get_data->telp)) }}</td>
                          <td>{{ @ucwords(@strtolower($get_data->ket)) }}</td>
                          
                          <td class="text-center">
                            <button type="button" class="btn btn-primary btn-sm" data-target=".edit{{ $get_data->kd_mekanik }}" data-toggle="modal"><i class="fa fa-pencil"></i> Ubah</button>
                            <button onclick="hapus('{{$get_data->kd_mekanik}}')" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</button>
                          </td>
                        </tr>



                        <!-- Modal -->
                        <div class="modal fade edit{{ $get_data->kd_mekanik }}" aria-hidden="true" aria-labelledby="example1"
                          role="dialog" tabindex="-1">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="example1">Ubah Data</h4>
                              </div>
                              <div class="modal-body">
                                <form action="{{ base_url() }}Mekanik/Edit" class="form-horizontal" method="post">
                                  <input type="hidden" name="kode" value="{{$get_data->kd_mekanik}}">
                                  <div class="form-group row">
                                    <label class="col-md-2 col-form-label">No Ktp</label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" value="{{ $get_data->kd_mekanik }}" name="a" placeholder="Mekanik" readonly>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" value="{{ $get_data->nm_mekanik }}" name="b" placeholder="Mekanik" required>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Alamat Lengkap</label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" value="{{ $get_data->alamat }}" name="c" placeholder="Mekanik" required>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Telpon</label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" value="{{ $get_data->telp }}" name="d" placeholder="Mekanik" required>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Keterangan</label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" value="{{ $get_data->ket }}" name="e" placeholder="Mekanik" required>
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
                            <form action="{{ base_url() }}Mekanik/Add" class="form-horizontal" method="post">
                              <div class="form-group row">
                                    <label class="col-md-2 col-form-label">No Ktp</label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" name="a" placeholder="No Ktp" required>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" name="b" placeholder="Nama" required>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Alamat Lengkap</label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" name="c" placeholder="Alamat" required>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Telpon</label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" name="d" placeholder="Telp" required>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Keterangan</label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" name="e" placeholder="Keterangan" required>
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
              location.href = '{{base_url()}}Mekanik/Delete/'+kode;
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
