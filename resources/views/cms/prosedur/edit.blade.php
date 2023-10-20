@extends('cms.layouts.template')
@section('container')

<div class="row">  
  <div class="col-xs-12 px-3">
    <div class="box-header">
      <label class="fs-7 fw-bold" style="font-size:20px;">Ubah Prosedur Permintaan Informasi PPID</label>
      <a type="button" class="btn btn-success pull-right" href="{{ route('cms.prosedur.index')}}">Kembali</a>
    </div>
  </div>
</div>
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <!--<div class="box-header with-border">
            <h3 class="box-title">Ubah Prosedur Informasi</h3>
          </div>-->
          <!-- /.box-header -->
          <!-- form start -->
          <form method="POST" action="{{ route('cms.prosedur.update.submit') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $dataProsedur->id }}"/>
            <div class="box-body">
              <div class="form-group col-md-3">
                <label for="kategori">Kategori Prosedur Informasi</label>
                <select class="form-control" name="kategori" id="kategori" disabled on>
                  <option value="">- Pilih -</option>
                  <option value="Permintaan Informasi Publik" {{ $dataProsedur->kategori == 'Permintaan Informasi Publik' ? 'selected' : '' }}>Permintaan Informasi Publik</option>
                  <option value="Keberatan Informasi Publik" {{ $dataProsedur->kategori == 'Keberatan Informasi Publik' ? 'selected' : '' }}>Keberatan Informasi Publik</option>
                  <option value="Sengketa Informasi Publik" {{ $dataProsedur->kategori == 'Sengketa Informasi Publik' ? 'selected' : '' }}>Sengketa Informasi Publik</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label for="uraian">Uraian Prosedur</label>
                <textarea name="uraian" id="editor" class="form-control">{{ old('uraian', $dataProsedur->uraian) }}
                </textarea>
                    @error('uraian')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
              </div>
              <div class="form-group col-md-12" id="div_formulir_1" {{ $dataProsedur->kategori != 'Sengketa Informasi Publik' ? 'style=display:block' : 'style=display:none' }}>
                <label for="jenis_formulir">Formulir PPID Tk. I</label>
                <input type="file" class="form-control" name="formulir_1" id="formulir_1">
                @error('formulir_1')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group col-md-12" id="div_formulir_2" {{ $dataProsedur->kategori != 'Sengketa Informasi Publik' ? 'style=display:block' : 'style=display:none' }}>
                <label for="jenis_formulir">Formulir PPID Tk. II</label>
                <input type="file" class="form-control" name="formulir_2" id="formulir_2">
                @error('formulir_2')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group col-md-12" id="div_formulir_3" {{ $dataProsedur->kategori != 'Sengketa Informasi Publik' ? 'style=display:block' : 'style=display:none' }}>
                <label for="jenis_formulir">Formulir PPID Tk. III</label>
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
    <script>
      document.AddEventListener('trix-file-accept', function(e){
        e.preventDefault();
      })
    </script>
@endsection