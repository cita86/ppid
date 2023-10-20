@extends('cms.layouts.template')
@section('container')

<div class="row">
  <div class="col-xs-12 px-3">
    <div class="box-header">
      <label class="fs-7 fw-bold" style="font-size:20px;">Daftar Informasi PPID</label>
      <a type="button" class="btn btn-primary pull-right" href="{{ route('cms.informasi.create')}}">Tambah</a>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-header">
          <div class="box-tools">
            <div class="input-group input-group-sm hidden-xs" style="width: 200px;margin-top:5px;margin-bottom:5px;">
              <form action="{{ route('cms.informasi.search')}}" method="GET">
              <input type="text" name="search" class="form-control pull-right" placeholder="Cari..">
              </form>
            </div>
          </div>
        </div>
        <div class="box-body table-responsive no-padding">
        @include('cms.layouts.notification')
          <table class="table table-hover">
            <tr>
              <th>Nomor</th>
              <th class="text-center">Kategori Informasi</th>
              <th class="text-center">Judul Informasi</th>
              <th class="text-center" style="width:15%">Aksi</th>
            </tr>
              @foreach ($listInformasi as $key=>$item)
            <tr>
              <td class="text-center">{{ $key + $listInformasi->firstItem() }}</td>
              <td>{{ $item->kategori}}</td>
              <td>{!! $item->judul !!}</td>
              <td class="text-center">
                <div class="btn-group">
                  <a href="{{ route('cms.informasi.file.index',['idInformasi'=>$item->id]) }}" class="btn btn-sm btn-primary" title="Tambah File"><i class="fa-solid fa-file-circle-plus"></i></a>
                </div>
                <div class="btn-group">
                  <a href="{{ route('cms.informasi.update',['idInformasi'=>$item->id]) }}" class="btn btn-sm btn-warning" title="Ubah"><i class="fa-solid fa-pen-to-square"></i></a>
                </div>
                <div class="btn-group">
                  <form action="{{ route('cms.informasi.delete',['idInformasi'=>$item->id]) }}" method="post">
                    @csrf
                    <button class="btn btn-sm btn-danger" type="submit" title="Hapus" onclick="return confirm('Apakah Anda yakin?')"><i class="fa-solid fa-trash"></i></button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
        <!-- /.box-body -->
      </div>
        <div class="d-block text-center">
            {{$listInformasi->links()}}
        </div>
    </div>
      <!-- /.box -->
</div>
@endsection
