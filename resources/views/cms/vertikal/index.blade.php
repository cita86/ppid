@extends('cms.layouts.template')
@section('container')

<div class="row">
  <div class="col-xs-12 px-3">
    <div class="box-header">
      <label class="fs-7 fw-bold" style="font-size:20px;">Daftar Kantor Vertikal</label>
      <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambahKantor">
        Tambah
      </button>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <div class="box-header">
            <div class="box-tools">
              <div class="input-group input-group-sm hidden-xs" style="width: 200px;margin-bottom:5px;">
                <form action="{{ route('cms.vertikal.search')}}" method="GET">
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
              <th>Nomor</th>
              <th class="text-center">Nama Unit Eselon II</th>
              <th class="text-center">Aksi</th>
            </tr>
            @foreach ($listVertikal as $key=>$item)
            <tr>
              <td>{{ $key + $listVertikal->firstItem()}}</td>
              <td>{{ $item->nama}}</td>
              <td class="text-center">
                <div class="btn-group">
                  <a href="{{ route('cms.vertikal.detail_kantor.index',['idVertikal'=>$item->id]) }}" class="btn btn-sm btn-primary" title="Tambah Kantor"><i class="fa-solid fa-file-circle-plus"></i></a>
                </div>
                <div class="btn-group">
                  <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#ubahKantor{{$item->id}}" title="Ubah"><i class="fa-solid fa-pen-to-square"></i></button>

                </div>
                <div class="btn-group">
                  <form action="{{ route('cms.vertikal.delete',['idVertikal'=>$item->id]) }}" method="post">
                  @csrf
                    <button class="btn btn-sm btn-danger" type="submit" title="Hapus" onclick="return confirm('Apakah Anda yakin?')"><i class="fa-solid fa-trash"></i></button>
                  </form>
                </div>
              </td>
            </tr>
            @include ('cms.vertikal.edit')
            @endforeach
          </table>
        </div>

        <!-- /.box-body -->
      </div>
        <div class="d-block text-center">
            {{$listVertikal->links()}}
        </div>
      <!-- /.box -->
    </div>
  </div>

@include ('cms.vertikal.create')
@endsection
