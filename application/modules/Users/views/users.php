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
        <h1 class="page-title">Setting</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Manage Users</li>
        </ol>
      </div>
      <div class="page-content">
        

        
        <!-- Panel Table Individual column searching -->
        <div class="panel">
           <header class="panel-heading">
            <h3 class="panel-title">Tambah User</h3>
          </header>

          <div class="panel-body" style="padding: 20px;">
            @if ($this->session->flashdata("notif"))
            <div class="alert dark alert-icon alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <i class="icon md-check" aria-hidden="true"></i> Berhasil di{{$this->session->flashdata("notif")}}.
            </div>
            @endif
            <table class="table table-hover dataTable table-striped w-full table-bordered" data-plugin="dataTable">
              <thead>
                <tr>
                  <th class="text-center">NIP</th>
                  <th class="text-center">NAMA AGAMA</th>
                  <th class="text-center">AKSI</th>
                </tr>
              </thead>
              <tbody>
                        

                @foreach($get_user as $user => $get_users)
                        <tr>
                          <td>{{$get_users->kd_user}}</td>
                          <td class="text-center">{{$get_users->nama}}</td>
                          <td class="text-center">
                            <!--<button type="button" class="btn btn-primary btn-sm" data-target=".edit" data-toggle="modal"><i class="fa fa-pencil"></i> Ubah</button>
                            <button onclick="hapus('')" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</button>-->
                          </td>
                        </tr>
                @endforeach


  
              </tbody>
            </table>
          
        <!-- End Panel Table Individual column searching -->

      </div>



<!-- Modal -->
<div class="modal fade add" aria-hidden="true" aria-labelledby="example2"
  role="dialog" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="example2">Tambah User</h4>
      </div>
      <div class="modal-body">
        <form action="{{ base_url() }}Users/Simpan_Data" class="form-horizontal" method="post">

          <div class="form-group row">
            <label class="col-md-2 col-form-label">NIP</label>
            <div class="col-md-10">
              <select style="width:100%" class="form-control" data-plugin="select2" data-placeholder="Select a State" data-allow-clear="true" name="nip">
                @foreach($get_nip as $nip => $get_nips)
                <option value="{{ $get_nips->id_peg }}">{{ $get_nips->id_peg }} / {{ $get_nips->nama_peg }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-md-2 col-form-label">Username</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="user" required>
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




        <!-- Panel Table Individual column searching -->
        <header class="panel-heading">
            <h3 class="panel-title">Manage Menu User</h3>
          </header>

            
            <form method="POST" action="{{base_url()}}Users/Update_Menu/">


            <center>
            <div class="col-md-10">
              <select style="width:100%" class="form-control" data-plugin="select2" data-placeholder="Pilih Users" data-allow-clear="true" name="nip">
                @foreach($get_user as $user => $get_users)
                <option value="{{ $get_users->kd_user }}">{{ $get_users->kd_user }} / {{ $get_users->nama }}</option>
                @endforeach
              </select>
            </div>
            
            </center>


              <div class="panel">
               
                <div class="panel-body container-fluid">
                  <div class="row row-lg">
                    
                      <!-- End Example Checkboxes -->
                      <div class="checkbox-custom checkbox-primary">

                            <ul>
                                @php
                                  $sql1 = $this->db->query("SELECT * FROM menu ORDER BY kd_menu ASC");
                                @endphp

                                @foreach($sql1->result() as $key1)
                                <li>
                                    <input type="checkbox" id="level-1" name="menu[]" value="{{$key1->kd_menu}}" />
                                    <label for="inputChecked">{{$key1->name}}</label>
                                    <ul>
                                        @php
                                          $sql2 = $this->db->query("SELECT * FROM menu_sub WHERE kd_menu='$key1->kd_menu' ORDER BY kd_menu_sub ASC");
                                        @endphp
                                        @foreach($sql2->result() as $key2)
                                        <li>
                                            <input type="checkbox" id="level-2" name="menu_sub[]" value="{{$key2->kd_menu_sub}}" />
                                            <label for="inputChecked">{{$key2->name}}</label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        </div>
                        <!-- End Example Checkboxes -->
                        <br/><input type="submit" class="btn-primary btn-sm" value="Proses"/>
                    
                    </div>
                  </div>
                </div>
              </div>
                  
            
            </form>
          </div>
        </div>
        <!-- End Panel Table Individual column searching -->

    </div>
    <!-- End Page -->


<script src="{{ base_url() }}adl_/global/vendor/jquery/jquery.js"></script>
<script type="text/javascript">
  $('input[id="level-1"],input[id="level-2"]').bind('click', function () {
        $('input[type=checkbox]', $(this).parent('li')).attr('checked', ($(this).is(':checked')));
    });



</script>



@extends('general_lib.footer');
@extends('general_lib.core');
@extends('general_lib.plugins');
@extends('general_lib.scripts');
@extends('lib.pages');
    
  </body>
</html>
