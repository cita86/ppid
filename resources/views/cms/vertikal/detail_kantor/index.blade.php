@extends('cms.layouts.template')
@section('container')

<div class="row">  
  <div class="col-xs-12 px-3">
    <div class="box-header">
      <label class="fs-7 fw-bold" style="font-size:20px;">Daftar Kantor Vertikal pada {{ $dataVertikal->nama}}</label>
      <div class="row pull-right">
        <div class="btn-group">  
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahKantor">
            Tambah Kantor
        </div>
        
        <div class="btn-group">
          <a type="button" class="btn btn-success" href="{{ route('cms.vertikal.index')}}">Kembali</a>
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
              <th class="text-center">Nama Kantor</th>
              <th class="text-center">Alamat</th>
              <th class="text-center">Nomor Telepon</th>
              <th class="text-center">Whatsapp</th>
              <th class="text-center">Email</th>
              <th class="text-center">Situs Web</th>
              <th class="text-center">Aksi</th>
            </tr>  
            @foreach ($listDetailKantor as $item)
            <tr>
              <td>{{ $loop->iteration}}</td>
              <td>{{ $item->nama_unit}}</td>
              <td>{{ $item->alamat}}</td>
              <td>{{ $item->telepon}}</td>
              <td>{{ $item->whatsapp}}</td>
              <td>{{ $item->situs_web}}</td>
              <td>{{ $item->email}}</td>
              <td class="text-center">
                <div class="btn-group">
                  <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#ubahKantor{{$item->id}}" title="Ubah"><i class="fa-solid fa-pen-to-square"></i></button>
                </div>
                <div class="btn-group">
                  <form action="{{ route('cms.vertikal.detail_kantor.delete',['idDetailKantor'=>$item->id]) }}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value ="{{ $dataVertikal->id }}">
                    <button class="btn btn-sm btn-danger" type="submit" title="Hapus" onclick="return confirm('Apakah Anda yakin?')"><i class="fa-solid fa-trash"></i></button>
                  </form>
                </div>
              </td>
            </tr>
            @include ('cms.vertikal.detail_kantor.edit')
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
  @include ('cms.vertikal.detail_kantor.create')
@endsection

