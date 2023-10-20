@extends('cms.layouts.template')
@section('container')

<div class="row">  
    <div class="col-xs-12 px-3">
      <div class="box-header">
        <label class="fs-7 fw-bold" style="font-size:20px;">Tambah Slider</label>
        <a type="button" class="btn btn-success pull-right" href="{{ route('cms.slider.index')}}">Kembali</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <!-- <div class="box-header with-border">
          <h3 class="box-title">Tambah Slider</h3>
        </div> -->
        <form role="form" action="{{ route('cms.slider.create.submit')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="InputJudul">Judul</label>
              <input type="text" class="form-control" class="form-control" name="judul" value="{{ old('judul') }}" placeholder="Masukkan Judul Slider">
              @error('judul')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="InputDeskripsi">Deskripsi</label>
              <textarea type="text" class="form-control" class="form-control" name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Masukkan Deskripsi Gambar"></textarea>
            </div>
            <div class="form-group">
              <label for="InputFile">Gambar</label>
              <input type="file" class="form-control" name="gambar">
              @error('gambar')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
              @enderror
            </div>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" name="status" id="status" checked>
              <label class="custom-control-label" for="customSwitch1">Tampil</label>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="{{url()->previous()}}" type="button" class=" btn btn-danger">Batal</a>
            </div>
          </form>
        </div>
      </div>  
    </div>
  </div>
  @endsection