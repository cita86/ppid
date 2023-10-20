@extends('cms.layouts.template')
@section('container')

<div class="row">  
  <div class="col-xs-12 px-3">
    <div class="box-header">
      <label class="fs-7 fw-bold" style="font-size:20px;">Ubah FAQ PPID</label>
      <a type="button" class="btn btn-success pull-right" href="{{ route('cms.faq.index')}}">Kembali</a>
    </div>
  </div>
</div>
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <!--<div class="box-header with-border">
            <h3 class="box-title">Ubah FAQ</h3>
          </div>-->
          <!-- /.box-header -->
          <!-- form start -->
          <form method="POST" action="{{ route('cms.faq.update.submit') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $dataFAQ->id }}"/>
            <div class="box-body">
              <div class="form-group">
                <label for="pertanyaan">{{ __('Pertanyaan') }}</label>
                <input id="pertanyaan" type="text" class="form-control" name="pertanyaan" value="{{ $dataFAQ->pertanyaan }}">
                    @error('pertanyaan')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
              </div>
              <div class="form-group">
                <label for="jawaban">{{ __('Jawaban') }}</label>
                <textarea name="jawaban" id="editor" class="form-control">{{ old('jawaban', $dataFAQ->jawaban) }}
                </textarea>
                @error('jawaban')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
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
  @endsection
