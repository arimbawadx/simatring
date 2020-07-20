@extends('customer/main')

@section('title','SI-MATRING | Ubah Password')

@section('content-header', 'Data Profil')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Update Password</h3>
          </div>
          <!-- /.box-header -->


          <div class="box-body">

                  <form role="form" action="/customer/data-profil/ubah-password/update" method="post">
                    {{csrf_field()}}

                    <div class="box-body">

                      <div class="form-group">
                        <label for="password_lama">Password Lama</label>
                        <input type="password" class="form-control" name="password_lama" id="password_lama" placeholder="">
                      </div>

                      <div class="form-group">
                        <label for="password_baru">Password Baru</label>
                        <input type="password" class="form-control" name="password_baru" id="password_baru" placeholder="">
                      </div>

                      <div class="form-group">
                        <label for="konfirmasi_password_baru">Konfirmasi Password Baru</label>
                        <input type="password" class="form-control" name="konfirmasi_password_baru" id="konfirmasi_password_baru" placeholder="">
                      </div>
                    </div>

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
                  
          </div>
        </div>
      </div>

    </div>

    
  </section>



          
  <!-- /.content-wrapper -->
  @endsection

 