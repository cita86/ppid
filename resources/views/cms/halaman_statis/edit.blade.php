@extends('cms.layouts.template')
@section('container')

<div class="row">  
  <div class="col-xs-12 px-3">
    <div class="box-header">
      <label class="fs-7 fw-bold" style="font-size:20px;">Ubah Halaman Statis PPID</label>
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
          <form method="POST" action="{{ route('cms.halaman_statis.update.submit') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $dataHalamanstatis->id }}"/>
            <div class="box-body">
            <div class="form-group" >
              <label for="kategori_statis">Kategori Halaman Statis</label>
              <select class="form-control" id="kategori" name="kategori" disabled on>
                <option value="">- Pilih -</option>
                <option value="profil" {{ $dataHalamanstatis->kategori == 'profil' ? 'selected' : '' }}> Profil Badan Publik</option>
                <option value="maklumat" {{ $dataHalamanstatis->kategori == 'maklumat' ? 'selected' : '' }}>Maklumat Pelayanan Informasi Publik</option>
                <option value="kontak" {{ $dataHalamanstatis->kategori == 'kontak' ? 'selected' : '' }}>Kontak Badan Publik</option>
                <option value="resume" {{ $dataHalamanstatis->kategori == 'resume' ? 'selected' : '' }}>Resume Alur Pengelolaan Layanan Informasi Publik</option>
                <option value="biaya" {{ $dataHalamanstatis->kategori == 'biaya' ? 'selected' : '' }}>Biaya, Tarif dan Waktu Layanan</option>
                <option value="statistis" {{ $dataHalamanstatis->kategori == 'statistis' ? 'selected' : '' }}>Statistis Akses Informasi</option>
                <option value="penghargaan" {{ $dataHalamanstatis->kategori == 'penghargaan' ? 'selected' : '' }}>Penghargaan</option>
              </select>
            </div>
              <div class="form-group">
                <label for="judul">Judul</label>
                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $dataHalamanstatis->judul }}" required autocomplete="judul" autofocus>
                    @error('judul')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
              </div>
              <div id="div_uraian_kanan" class="form-group">
                <label id="label_uraian_kanan">Uraian {{ $dataHalamanstatis->kategori == 'profil' ? 'Bagian Kanan' : '' }}</label>
                <input id="uraian_kanan" type="hidden" class="form-control @error('uraian_kanan') is-invalid @enderror" name="uraian_kanan" value="{{ $dataHalamanstatis->uraian_1 }}" required autocomplete="uraian_kanan" autofocus>
                  <trix-editor input="uraian_kanan"></trix-editor>
                    @error('uraian_kanan')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
              </div>
              <div id="div_uraian_kiri" class="form-group"  {{ $dataHalamanstatis->kategori == 'profil' ? 'style=display:block' : 'style=display:none' }}>
                <label id="label_uraian_kiri">Uraian Bagian Kiri</label>
                <input id="uraian_kiri" type="hidden" class="form-control @error('uraian_kiri') is-invalid @enderror" name="uraian_kiri" value="{{ $dataHalamanstatis->uraian_2 }}" required autocomplete="uraian_kiri" autofocus>
                  <trix-editor input="uraian_kiri"></trix-editor>
                    @error('uraian_kiri')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
              </div>
              <div id="div_gambar_kanan" class="form-group">
                <label id="label_gambar_kanan">Gambar {{ $dataHalamanstatis->kategori == 'profil' ? 'Bagian Kanan' : '' }}</label>
                <input type="file" class="form-control @error('gambar_kanan') is-invalid @enderror" name="gambar_kanan">
              </div>
              <div id="div_gambar_kiri" class="form-group" {{ $dataHalamanstatis->kategori == 'profil' ? 'style=display:block' : 'style=display:none' }}>
                <label id="label_gambar_kiri">Gambar Bagian Kiri</label>
                <input type="file" class="form-control @error('gambar_kiri') is-invalid @enderror" name="gambar_kiri">
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
