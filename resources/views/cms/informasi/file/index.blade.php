@extends('cms.layouts.template')
@section('container')

<div class="row">
  <div class="col-xs-12 px-3">
    <div class="box-header">
      <label class="fs-7 fw-bold" style="font-size:20px;">Daftar File pada {{ substr($dataInformasi->judul, 3, strlen($dataInformasi->judul)-7) }}</label>
      <div class="btn-toolbar pull-right">
        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahFile">
            Tambah File
          </button>
        </div>
        <div class="btn-group">
          <a type="button" class="btn btn-success" href="{{ route('cms.informasi.index')}}">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          @include('cms.layouts.notification')
          <table class="table table-hover">
            <tr>
              <th>Nomor</th>
              <th class="text-center">Jenis Dokumen</th>
              <th class="text-center">Tautan</th>
              <th class="text-center">File</th>
              <th class="text-center">Aksi</th>
            </tr>
            @foreach ($listFile as $item)
            <tr>
              <td class="text-center">{{ $loop->iteration}}</td>
              <td>{{ $item->jenis_dokumen}}</td>
              <td>{{ $item->link}}</td>
              <td><a href="{{ asset('/storage/dokumen/informasi/'.$item->nama_file)}}" target="__blank">{{ $item->nama_file}}</td>
              <td class="text-center">
                <div class="btn-group">
                  <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#ubahFile{{$item->id}}" title="Ubah"><i class="fa-solid fa-pen-to-square"></i></button>
                </div>
                <div class="btn-group">
                  <form action="{{ route('cms.informasi.file.delete',['idFile'=>$item->id]) }}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value ="{{ $dataInformasi->id }}">
                    <button class="btn btn-sm btn-danger" type="submit" title="Hapus" onclick="return confirm('Apakah Anda yakin?')"><i class="fa-solid fa-trash"></i></button>
                  </form>
                </div>
              </td>
            </tr>

            @include ('cms.informasi.file.edit')
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@include ('cms.informasi.file.create')
@endsection

