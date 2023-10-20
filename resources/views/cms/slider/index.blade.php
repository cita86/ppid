@extends('cms.layouts.template')
@section('container')

  <div class="row">
    <div class="col-xs-12 px-3">
      <div class="box-header">
        <label class="fs-7 fw-bold" style="font-size:20px;">Daftar Slider</label>
        <a type="button" class="btn btn-primary pull-right" href="{{ route('cms.slider.create')}}">Tambah</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <div class="box-tools">
            <div class="input-group input-group-sm hidden-xs" style="width: 200px;margin-top:5px;margin-bottom:5px;">
              <form action="{{ route('cms.slider.search')}}" method="GET">
              <input type="text" name="search" class="form-control pull-right" placeholder="Cari..">
              </form>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
        @include('cms.layouts.notification')
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Nomor</th>
                <th class="text-center">Judul</th>
                <th class="text-center">Deskripsi</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Status</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($listSlider as $key=>$item)
              <tr>
                  <td>{{ $key + $listSlider->firstItem()}}</td>
                  <td>{{ $item->judul}}</td>
                  <td>{{ $item->deskripsi}}</td>
                  <td class="text-center">
                    <img src="{{ asset('/storage/dokumen/sliders/'.$item->nama_file)}}" style="width:150px">
                  </td>
                  <td class="text-center">
                    @if ($item->status == '1')
                      Tampil
                    @else
                      Tidak Tampil
                    @endif
                  </td>
                  <td class="text-center">
                    <div class="btn-group">
                      <a href="{{ route('cms.slider.update', $item->id) }}" class="btn btn-sm btn-warning" title="Ubah"><i class="fa-solid fa-pen-to-square"></i></a>
                    </div>
                    <div class="btn-group">
                      <form action="{{ route('cms.slider.delete', $item->id) }}" method="post">
                        @csrf
                        <button class="btn btn-sm btn-danger" type="submit" title="Hapus" onclick="return confirm('Apakah Anda yakin?')"><i class="fa-solid fa-trash"></i></button>
                      </form>
                    </div>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      <!-- /.box-body -->
    </div>
    <div class="d-block text-center">
        {{$listSlider->links()}}
    </div>
  <!-- /.box -->
    </div>
  </div>
@endsection
