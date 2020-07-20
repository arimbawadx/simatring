@extends('admin/main')

@section('title','SI-MATRING | Data Penjualan')

@section('content-header', 'Data Penjualan')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penjualan SI-MATRING</h3>
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
                		Nama Paket 
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">
                		Harga/paket
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 300px;">
                		Jumlah Dipesan
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">
                		Total Pembayaran
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 166px;">
                		Status Pesanan
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 166px;">
                		Tanggal Penjualan
                	</th>

                </tr>

                </thead>
                <tbody>

                	


                @foreach ($penjualan as $i => $p)
                

                <tr role="row" class="odd">
                  <td>{{$i+1}}</td>
                  <td>{{$p ->user-> username}}</td>
                  <td>{{$p -> produk->nama_produk}}</td>
                  <td>{{$p -> produk->harga_produk}}</td>
                  <td>{{$p -> jumlah_order }}</td>
                  <td>{{$p -> jumlah_pembayaran }}</td>
                  <td>
                    <?php if ($p->status_order=='Menunggu konfirmasi'): ?>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalStatusPesanan{{$p -> id}}">
                      {{$p->status_order}}
                    </button>
                    <?php endif ?>

                    <?php if ($p->status_order=='Diterima'): ?>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalStatusPesanan{{$p -> id}}">
                      {{$p->status_order}}
                    </button>
                    <?php endif ?>

                    <?php if ($p->status_order=='Diproses'): ?>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalStatusPesanan{{$p -> id}}">
                      {{$p->status_order}}
                    </button>
                    <?php endif ?>
                  </td>
                  <td>{{$p -> updated_at}}</td>
                </tr>

                <!-- The Modal -->
                        <div class="modal" id="myModalStatusPesanan{{$p -> id}}">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Ubah Status Pesanan</h4>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body">
                                <form method="post" action="/admin/data-penjualan/update/{{$p -> id}}">
                                  {{csrf_field()}}
                                    <div class="form-group">
                                      <label for="status_order">Status Pesanan</label>
  
                                      <select class="form-control" id="status_order" name="status_order">
                                        <option>Diproses</option>
                                        <option>Diterima</option>
                                        
                                      </select>
                                    </div>

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

 