@extends('cms.layouts.template')
@section('container')

<div class="row">  
    <div class="col-xs-12 px-3">
      <div class="box-header">
        <label class="fs-7 fw-bold" style="font-size:20px;">Ubah Slider</label>
        <a type="button" class="btn btn-success pull-right" href="{{ route('cms.slider.index')}}">Kembali</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <form role="form" action="{{ route('cms.slider.update.submit') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{ $dataSlider->id }}"/>
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputJudul1">Judul</label>
              <input type="text" class="form-control" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $dataSlider->judul }}" placeholder="Masukkan Judul Slider">
              @error('judul')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="InputDeskripsi">Deskripsi</label>
              <textarea type="text" class="form-control" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Masukkan Deskripsi Gambar">{{ $dataSlider->deskripsi}}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Gambar</label>
              <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
              @error('gambar')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
              @enderror
            </div>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" name="status" id="status" {{ $dataSlider->status == '1' ? 'checked':''}}>
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