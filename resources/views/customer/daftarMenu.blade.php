@extends('customer/main')

@section('title','SI-MATRING | Daftar Menu')

@section('content-header', 'Daftar Menu SI-MATRING')

@section('content')



  <!-- Content Wrapper. Contains page content -->
          <!-- /.box-header -->
            @foreach ($produk as $i => $p)
            <div class="box">

                <div class="box-header text-center">
                  <h3 class="box-title">{{$p-> nama_produk}}</h3>
                </div>

                <div class="box-body">
                  <div class="row">
                    <div class="col-sm-2">
                    </div>

                    <div class="col-sm-3">
                      <img width="100px" src="{{ asset('lte/dist/img/'. $p-> profil_produk) }}" >
                    </div>

                    <div class="col-sm-5">
                      {{$p -> deskripsi_produk}}
                      <br><br>
                      Rp. {{number_format($p -> harga_produk)}}
                      <br><br>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalPesanMenu{{$p -> id}}">
                      <i class="fa fa-pen"></i><span> Pesan </span>
                    </button>
                    </div>

                    <div class="col-sm-2">
                    </div>


                    
                  </div>
                </div>
                
            </div>

                            <!-- The Modal -->
                        <div class="modal" id="myModalPesanMenu{{$p -> id}}">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Pemesanan</h4>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body">
                                <form method="post" action="/customer/daftar-menu/pesan/">
                                  {{csrf_field()}}
                                    <div class="form-group">
                                      <!-- <label for="produk_id">produk_id :</label> -->
                                      <input type="hidden" class="form-control" id="produk_id" name="produk_id" value="{{$p -> id}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="jenis_paket">Jenis Paket :</label>
                                      <input type="text" readonly class="form-control" id="jenis_paket" name="nama_produk" value="{{$p -> nama_produk}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="harga_produk">Harga/pcs :</label>
                                      <input type="text" readonly class="form-control" id="harga_produk" name="harga_produk" value="{{$p -> harga_produk}}">
                                    </div>
                                    <div class="form-group">
                                      <label for="jumlah_pesanan">Jumlah Pesanan</label>
                                      <select class="form-control" id="jumlah_pesanan" name="jumlah_pesanan">
                                        <?php for ($i=50; $i <= 200 ; $i++) { ?>
                                          <option><?php echo $i; ?></option>
                                       <?php } ?>
                                   
                                      </select>
                                    </div>

                                    <div class="text-center">
                                      <button type="submit" class="btn btn-warning">Pesan</button>
                                    </div>
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
            <!-- /.box-body -->
  <!-- /.content-wrapper -->
  @endsection





 