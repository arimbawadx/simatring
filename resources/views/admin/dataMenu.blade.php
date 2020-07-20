@extends('admin/main')

@section('title','SI-MATRING | Data Menu')

@section('content-header', 'Data Menu')

@section('content')



  <!-- Content Wrapper. Contains page content -->
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Menu SI-MATRING</h3>
              <div align="right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahDataMenu">
                  <i class="fa fa-plus"> </i><span> Tambah Menu</span>
                    </button>
              </div>
            </div>
            <!-- The Modal -->
                        <div class="modal" id="TambahDataMenu">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Tambah Data Menu</h4>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body">
                                <form method="post" action="/admin/data-menu/tambah/">
                                  {{csrf_field()}}
                                    <div class="form-group">
                                      <label for="nama_produk">Nama Menu</label>
                                      <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                                    </div>
                                    <div class="form-group">
                                      <label for="deskripsi_produk">Deskripsi Menu</label>
                                      <input type="text" class="form-control" id="deskripsi_produk" name="deskripsi_produk">
                                    </div>
                                    <div class="form-group">
                                      <label for="harga_produk">Harga Menu</label>
                                      <input type="text" class="form-control" id="harga_produk" name="harga_produk">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                  </form>
                              </div>

                              <!-- Modal footer -->
                              <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div> -->

                            </div>
                          </div>
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

                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 124px;">
                    Profil
                  </th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 124px;">
                		Nama Menu
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 306px;">
                		Deskripsi Menu
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">
                		Harga Menu
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 166px;">
                		Aksi
                	</th></tr>

                </thead>
                <tbody>
 
                @foreach ($produk as $i => $p)
                <tr role="row" class="odd">
                  <td>{{$i+1}}</td>
                  <td>{{$p -> profil_produk }}</td>
                  <td>{{$p -> nama_produk}}</td>
                  <td>{{$p -> deskripsi_produk}}</td>
                  <td>{{$p -> harga_produk}}</td>
                  <td>
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalUbahDataMenu{{$p -> id}}">
                      <i class="fa fa-pen"></i><span> Ubah</span>
                    </button>
                    | 
                    <a onclick="return confirm('Yakin Hapus?')" href="/admin/data-menu/hapus/{{$p -> id}}" class="btn btn-danger">
                      <i class="fa fa-times"></i><span> Hapus</span>
                    </a>
                  </td>
                </tr>

                     



                

                                        <!-- The Modal -->
                        <div class="modal" id="myModalUbahDataMenu{{$p -> id}}">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Ubah Data Menu</h4>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body">
                                <form method="post" action="/admin/data-menu/update/{{$p -> id}}" enctype="multipart/form-data">
                                  {{csrf_field()}}

                                    <div class="form-group">
                                      <label for="profil">Ubah Foto Produk</label>
                                      <input type="file" id="profil" name="profil_produk">
                                    </div>

                                    <div class="form-group">
                                      <label for="nama_produk">Nama Menu</label>
                                      <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{$p -> nama_produk}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="deskripsi_produk">Deskripsi Menu</label>
                                      <input type="text" class="form-control" id="deskripsi_produk" name="deskripsi_produk" value="{{$p -> deskripsi_produk}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="harga_produk">Harga Menu</label>
                                      <input type="text" class="form-control" id="harga_produk" name="harga_produk" value="{{$p -> harga_produk}}">
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





 