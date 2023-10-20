@extends('cms.layouts.template')
@section('container')

<div class="row">  
  <div class="col-xs-12 px-3">
    <div class="box-header">
      <label class="fs-7 fw-bold" style="font-size:20px;">Tambah Halaman Statis PPID</label>
      <a type="button" class="btn btn-success pull-right" href="{{ route('cms.halaman_statis.index')}}">Kembali</a>
    </div>
  </div>
</div>
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
          <!-- /.box-header -->
          <!-- form start -->
          <form method="POST" action="{{ route('cms.halaman_statis.create.submit') }}" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="kategori_statis">Kategori Halaman Statis</label>
                <select class="form-control" onchange="FieldCheck(this);" id="kategori" name="kategori">
                  <option value="">- Pilih -</option>
                  <option value="profil"> Profil Badan Publik</option>
                  <option value="maklumat">Maklumat Pelayanan Informasi Publik</option>
                  <option value="kontak">Kontak Badan Publik</option>
                  <option value="resume">Resume Alur Pengelolaan Layanan Informasi Publik</option>
                  <option value="biaya">Biaya, Tarif dan Waktu Layanan</option>
                  <option value="statistis">Statistis Akses Informasi</option>
                  <option value="penghargaan">Penghargaan</option>
                </select>
                    @error('kategori')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
              </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label for="judul">Judul</label>
                <input id="judul" type="text" class="form-control" name="judul" value="{{ old('judul') }}" autocomplete="judul" autofocus placeholder="Masukkan Judul Halaman Statis">
                    @error('judul')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
              </div>
              <div id="div_uraian_kanan" class="form-group">
                <label id="label_uraian_kanan">Uraian Bagian Kanan</label>
                  <input id="uraian_kanan" type="hidden" class="form-control" name="uraian_kanan" value="{{ old('uraian_kanan') }}">
                  <trix-editor input="uraian_kanan" placeholder="Masukkan Uraian"></trix-editor>
                    @error('uraian_kanan')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
              </div>
              <div id="div_uraian_kiri" class="form-group">
                <label>Uraian Bagian Kiri</label>
                <input id="uraian_kiri" type="hidden" class="form-control" name="uraian_kiri" value="{{ old('uraian_kiri') }}">
                <trix-editor input="uraian_kiri" placeholder="Masukkan Uraian"></trix-editor>
                  @error('uraian_kiri')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div id="div_gambar_kanan" class="form-group">
                <label id="label_gambar_kanan" for="gambar">Gambar Bagian Kanan</label>
                <input type="file" class="form-control" name="gambar_kanan">
                @error('gambar_kanan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
              <div id="div_gambar_kiri" class="form-group">
                <label for="gambar">Gambar Bagian Kiri</label>
                <input type="file" class="form-control" name="gambar_kiri">
                @error('gambar_kiri')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
              </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">
                {{ __('Simpan') }}
              </button>
              <a href="{{url()->previous()}}" type="button" class=" btn btn-danger">Batal</a>
            </div>
          </form>
        </div>
        <!-- /.box -->
      </div>  
    </div>
    <!-- /.row -->
  <script>
    document.AddEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })
  </script>  
  @endsection