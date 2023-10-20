@extends('cms.layouts.template')
@section('container')

<div class="row">  
  <div class="col-xs-12 px-3">
    <div class="box-header">
      <label class="fs-7 fw-bold" style="font-size:20px;">Tambah Prosedur Permintaan Informasi PPID</label>
      <a type="button" class="btn btn-success pull-right" href="{{ route('cms.prosedur.index')}}">Kembali</a>
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
          <form method="POST" enctype="multipart/form-data" action="{{route('cms.prosedur.create.submit')}}">
            @csrf
            <div class="box-body">
              <div class="form-group col-md-3">
                <label for="kategori">Kategori Prosedur Informasi</label>
                <select class="form-control" onchange="FieldCheck_prosedur(this);" id="kategori" name="kategori">
                  <option value="">- Pilih -</option>
                  <option value="Permintaan Informasi Publik">Permintaan Informasi Publik</option>
                  <option value="Keberatan Informasi Publik">Keberatan Informasi Publik</option>
                  <option value="Sengketa Informasi Publik">Sengketa Informasi Publik</option>
                </select>
                @error('kategori')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group col-md-12">
                <label for="uraian">Uraian Prosedur</label>
                <textarea name="uraian" id="editor" class="form-control" placeholder="Masukkan Uraian Prosedur">
                </textarea>
                @error('uraian')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group col-md-12" id="div_formulir_1">
                <label for="formulir_1">Unggah Formulir PPID Tk. I</label>
                  <input type="file" class="form-control" name="formulir_1" id="formulir_1">     
                  @error('formulir_1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>
              <div class="form-group col-md-12" id="div_formulir_2">
                <label for="formulir_2">Unggah Formulir PPID Tk. II</label>
                  <input type="file" class="form-control" name="formulir_2" id="formulir_2">
                  @error('formulir_2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror     
              </div>
              <div class="form-group col-md-12" id="div_formulir_3">
                <label for="formulir_3">Unggah Formulir PPID Tk. III</label>
                  <input type="file" class="form-control" name="formulir_3" id="formulir_3">
                  @error('formulir_3')
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