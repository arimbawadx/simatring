@extends('customer/main')

@section('title','SI-MATRING | Biodata')

@section('content-header', 'Data Profil')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Update Biodata</h3>
          </div>
          <!-- /.box-header -->

          @foreach ($biodata as $i => $p)
          <div class="box-body">

                  <form role="form" action="/customer/data-profil/biodata/update" method="post">
                    {{csrf_field()}}

                    <div class="box-body">

                      <div class="form-group">
                        <label for="nama_lengkap">Nama lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{$p->nama_lengkap}}">
                      </div>

                      <div class="form-group">
                        <label for="nama_panggilan">Nama Panggilan</label>
                        <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" value="{{$p->nama_panggilan}}">
                      </div>

                      <div class="form-group">
                        <label for="no_telepon">No Telepon </label>
                        <input type="text" class="form-control" name="no_telepon" id="no_telepon" value="{{$p->no_telepon}}">
                      </div>

                      <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                          <option>{{$p->jenis_kelamin}}</option>
                          <option>Laki-laki</option>
                          <option>Perempuan</option>
                          
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="alamat_desa">Alamat Desa</label>
                        <input type="text" class="form-control" name="alamat_desa" id="alamat_desa" value="{{$p->alamat_desa}}">
                      </div>

                      <div class="form-group">
                        <label for="alamat_kabupaten">Alamat Kabupaten</label>
                        <input type="text" class="form-control" name="alamat_kabupaten" id="alamat_kabupaten" value="{{$p->alamat_kabupaten}}">
                      </div>

                      <div class="form-group">
                        <label for="alamat_provinsi">Alamat Provinsi</label>
                        <input type="text" class="form-control" name="alamat_provinsi" id="alamat_provinsi" value="{{$p->alamat_provinsi}}">
                      </div>

                      

                    </div>

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </form>
                  
          </div>
        </div>
      </div>
      @endforeach


      <div class="col-sm-6">
        <div class="box box-primary">

          <div class="box-header with-border">
            <h3 class="box-title">Update Profil</h3>
          </div>
          <!-- /.box-header -->

          <div class="box-body">

                  <form role="form" action="/customer/data-profil/biodata/profil/update" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="box-body">
                      <div class="text-center image">
                        <img width="150px" src="{{ asset('lte/dist/img/' . auth()->user()->profil) }}" class="img-circle" alt="User Image">
                      </div>

                      <div class="form-group">
                        <label for="profil">Ubah Foto Profil</label>
                        <input type="file" id="profil" name="profil">
                      </div>
                    </div>
                    <!-- /.box-body -->

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

 