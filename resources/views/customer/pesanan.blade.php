@extends('customer/main')

@section('title','SI-MATRING | Pesanan Anda')

@section('content-header', 'Pesanan Anda')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pesanan Anda</h3>
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

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 206px;">
                		Nama Paket 
                	</th>

                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 206px;">
                    Jumlah Pesanan 
                  </th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">
                		Harga/paket
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">
                		Total Pembayaran
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 166px;">
                		Status Pesanan
                	</th>

                	<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 166px;">
                		Tanggal Pemesanan
                	</th>

                </tr>

                </thead>
                <tbody>

                	


                @foreach ($pesanan as $i => $p)
                

                <tr role="row" class="odd">
                  <td>{{$i+1}}</td>
                  <td>{{$p -> produk->nama_produk}}</td>
                  <td>{{$p -> jumlah_order }} pcs</td>
                  <td>Rp. {{$p -> produk->harga_produk}}</td>
                  <td>Rp. {{number_format($p -> jumlah_pembayaran) }}</td>
                  <td>

                    <?php if ($p->status_order=='Menunggu konfirmasi'): ?>
                      <button type="button" class="btn btn-primary">
                      {{$p->status_order}}
                    </button>
                    <?php endif ?>

                    <?php if ($p->status_order=='Diterima'): ?>
                      <button type="button" class="btn btn-success">
                      {{$p->status_order}}
                    </button>
                    <?php endif ?>

                    <?php if ($p->status_order=='Diproses'): ?>
                      <button type="button" class="btn btn-danger">
                      {{$p->status_order}}
                    </button>
                    <?php endif ?>
                  </td>
                  
                  <td>{{$p -> created_at}}</td>
                </tr>
                @endforeach


                



            </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>


          
  <!-- /.content-wrapper -->
  @endsection

 