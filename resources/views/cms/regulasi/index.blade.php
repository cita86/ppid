@extends('cms.layouts.template')
@section('container')

<div class="row">
  <div class="col-xs-12 px-3">
    <div class="box-header">
      <label class="fs-7 fw-bold" style="font-size:20px;">Daftar Regulasi PPID</label>
      <a type="button" class="btn btn-primary pull-right" href="{{ route('cms.regulasi.create')}}">Tambah</a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="box">
       <div class="box-header">
        <div class="box-tools">
          <div class="input-group input-group-sm hidden-xs" style="width: 200px;margin-top:5px;margin-bottom:5px;">
            <form action="{{ route('cms.regulasi.search')}}" method="GET">
            <input type="text" name="search" class="form-control pull-right" placeholder="Cari..">
            </form>
          </div>
        </div>
      </div> 
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
      @include('cms.layouts.notification')
        <table class="table table-hover">
          <tr>
            <th class="text-center">Nomor</th>
            <th class="text-center">Nomor Peraturan</th>
            <th class="text-center">Judul Peraturan</th>
            <th class="text-center">File</th>
            <th class="text-center">Aksi</th>
          </tr>
          @foreach ($listRegulasi as $key=>$item)
          <tr>
            <td class="text-center">{{ $key + $listRegulasi->firstItem() }}</td>
            <td>{{ $item->nomor_peraturan}}</td>
            <td>{{ $item->judul_peraturan}}</td>
            <td><a href="{{ asset('/storage/dokumen/regulasi/'.$item->nama_file)}}" target="__blank">{{ $item->nama_file}}</td>
            <td class="text-center">
              <div class="btn-group">
                <a href="{{ route('cms.regulasi.update',['idRegulasi'=>$item->id]) }}" class="btn btn-sm btn-warning" title="Ubah"><i class="fa-solid fa-pen-to-square"></i></a>
              </div>
              <div class="btn-group">
                <form action="{{ route('cms.regulasi.delete',['idRegulasi'=>$item->id]) }}" method="post">
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

    </div>
      <div class="d-block text-center">
          {{$listRegulasi->links()}}
      </div>
      <!-- /.box -->
  </div>

@endsection
