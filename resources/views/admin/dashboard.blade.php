@extends('admin/main')

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
              <h3>{{$jumlahMenu}}<!-- <sup style="font-size: 20px">%</sup> --></h3>

              <p>Data Menu</p>
            </div>
            <div class="icon">
              <i class="fa fa-book-open"></i>
            </div>
            <a href="/admin/data-menu" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>




        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$jumlahCustomer}}</h3>

              <p>Data Customer</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="/admin/data-customer" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>




        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$jumlahPenjualan}}</h3>

              <p>Data Penjualan</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="/admin/data-penjualan" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        
        <!-- ./col -->
      </div>
  <!-- /.content-wrapper -->
  @endsection

 