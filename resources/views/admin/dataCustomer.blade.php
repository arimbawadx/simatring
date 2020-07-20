@extends('admin/main')

@section('title','SI-MATRING | Data Customer')

@section('content-header', 'Data Customer')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Customer SI-MATRING</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              	<div class="row">
              		<div class="col-sm-12">
              			<table id="example1" class="table table-bordered table-striped dataTable text-center" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                	<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 30px;">
                		No
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">
                		Username
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 206px;">
                		Nama Lengkap
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">
                		No Telepon
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 300px;">
                		Alamat
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">
                		Jenis Kelamin
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 166px;">
                		Aksi
                	</th></tr>

                </thead>
                <tbody>
 
                @foreach ($customer as $i => $p)
                <tr role="row" class="odd">
                  <td>{{$i+1}}</td>
                  <td>{{$p -> username}}</td>
                  <td>{{$p -> nama_lengkap}}</td>
                  <td>{{$p -> no_telepon}}</td>
                  <td>{{$p -> alamat_desa }}, {{$p -> alamat_kabupaten }}, {{$p -> alamat_provinsi }}</td>
                  <td>{{$p -> jenis_kelamin}}</td>
                  <td>

                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalUbahDataCustomer{{$p -> id}}">
                      <i class="fa fa-pen"></i><span> Ubah</span>
                    </button>
                   | 

                   <a onclick="return confirm('Yakin Hapus?')" href="/admin/data-customer/hapus/{{$p -> id}}" class="btn btn-danger">
                      <i class="fa fa-times"></i><span> Hapus</span>
                    </a>
                 </td>
                </tr>


                <!-- The Modal -->
                        <div class="modal" id="myModalUbahDataCustomer{{$p -> id}}">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Ubah Data Customer</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body">
                                <form method="post" action="/admin/data-customer/update/{{$p -> id}}">
                                  {{csrf_field()}}
                                    <div class="form-group">
                                      <label for="nama_lengkap">Nama Lengkap</label>
                                      <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{$p -> nama_lengkap}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="no_telepon">No Telepon </label>
                                      <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="{{$p -> no_telepon}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="alamat_desa">Desa</label>
                                      <input type="text" class="form-control" id="alamat_desa" name="alamat_desa" value="{{$p -> alamat_desa}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="alamat_kabupaten">Kabupaten</label>
                                      <input type="text" class="form-control" id="alamat_kabupaten" name="alamat_kabupaten" value="{{$p -> alamat_kabupaten}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="alamat_provinsi">Provinsi</label>
                                      <input type="text" class="form-control" id="alamat_provinsi" name="alamat_provinsi" value="{{$p -> alamat_provinsi}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="jenis_kelamin">Jenis Kelamin</label>
                                      <!-- <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{$p -> jenis_kelamin}}"> -->
                                      <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                        
                                      </select>
                                    </div>


                                    

                                    <!-- <input type="hidden" name="id" value="{{$p -> id}}"> -->

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                  </form>
                              </div>

                              <!-- Modal footer -->
                              <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div> -->

                            </div>
                          </div>
                        </div>
                @endforeach



            </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
  <!-- /.content-wrapper -->
  @endsection

 