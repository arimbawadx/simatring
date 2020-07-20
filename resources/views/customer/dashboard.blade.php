@extends('customer/main')

@section('title','SI-MATRING | Dashboard')

@section('content-header', 'Dashboard')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  		<div class="row">
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$jumlahDaftarMenu}}<!-- <sup style="font-size: 20px">%</sup> --></h3>

              <p>Daftar Menu</p>
            </div>
            <div class="icon">
              <i class="fa fa-book-open"></i>
            </div>
            <a href="/customer/daftar-menu" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>





        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$jumlahPesanan}}</h3>

              <p>Pesanan Anda</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="/customer/pesanan" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        
        <!-- ./col -->
      </div>
  <!-- /.content-wrapper -->
  @endsection

 