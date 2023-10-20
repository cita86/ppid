@extends('cms.layouts.template')
@section('container')

<div class="row">  
    <div class="col-xs-12 px-3">
      <div class="box-header">
        <label class="fs-7 fw-bold" style="font-size:20px;">Ubah Regulasi PPID</label>
        <a type="button" class="btn btn-success pull-right" href="{{ route('cms.regulasi.index')}}">Kembali</a>
      </div>
    </div>
  </div>
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <!-- <div class="box-header with-border">
            <h3 class="box-title">Ubah Regulasi</h3>
          </div> -->
          <!-- /.box-header -->
          <!-- form start -->
          <form method="POST" action="{{ route('cms.regulasi.update.submit') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $dataRegulasi->id }}"/>
            <div class="box-body">
              <div class="form-group">
                <label for="nomor_peraturan">Nomor Peraturan</label>
                <input type="text" class="form-control" name="nomor_peraturan" value="{{ $dataRegulasi->nomor_peraturan }}">
                @error('nomor_peraturan')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="judul_peraturan">Judul Peraturan</label>
                <textarea class="form-control" name="judul_peraturan" rows="2">{{  old('regulasi', $dataRegulasi->judul_peraturan) }}</textarea>
                @error('judul_peraturan')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                @enderror
              </div>
                <div class="form-group">
                <label for="exampleInputFile">File</label>
                <input type="file" class="form-control" name="file_peraturan" value="{{ $dataRegulasi->file_peraturan }}">
                @error('file_peraturan')
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
          </form>
        </div>
        <!-- /.box -->
      </div>  
    </div>
    <!-- /.row -->


@endsection