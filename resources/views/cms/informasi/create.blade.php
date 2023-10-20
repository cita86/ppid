@extends('cms.layouts.template')
@section('container')

<div class="row">
  <div class="col-xs-12 px-3">
    <div class="box-header">
      <label class="fs-7 fw-bold" style="font-size:20px;">Tambah Informasi PPID</label>
      <a type="button" class="btn btn-success pull-right" href="{{ route('cms.informasi.index')}}">Kembali</a>
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
          <form method="POST" enctype="multipart/form-data" action="{{route('cms.informasi.create.submit')}}">
            @csrf

            <div class="box-body">
              <div class="form-group col-md-4">
                <label for="kategori_informasi">Kategori Informasi</label>
                <select class="form-control" onchange="FieldCheck_prosedur(this);" id="kategori" name="kategori">
                  <option value="">- Pilih -</option>
                  <option value="Informasi Publik Secara Berkala">Informasi Publik Secara Berkala</option>
                  <option value="Informasi Serta Merta">Informasi Serta Merta</option>
                  <option value="Informasi Setiap Saat">Informasi Setiap Saat</option>
                </select>
                @error('kategori')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group col-md-12">
                <label for="judul">Judul / Uraian Informasi</label>
                <textarea name="judul" id="editor" class="form-control" placeholder="Masukkan Judul/Uraian Informasi">
                </textarea>
                    @error('judul')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                    @enderror
              </div>

            <!-- /.box-body -->

            <div class="box-footer col-md-12">
              <button type="submit" class="btn btn-primary">
                {{ __('Simpan') }}
              </button>

              <a href="{{url()->previous()}}" type="button" class=" btn btn-danger">Batal</a>
          </form>
        </div>
        <!-- /.box -->
      </div>
    </div>
    <!-- /.row -->

  @endsection
