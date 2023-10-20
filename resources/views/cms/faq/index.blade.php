@extends('cms.layouts.template')
@section('container')

<div class="row">
  <div class="col-xs-12 px-3">
    <div class="box-header">
      <label class="fs-7 fw-bold" style="font-size:20px;">Daftar FAQ</label>
      <a type="button" class="btn btn-primary pull-right" href="{{ route('cms.faq.create')}}">Tambah</a>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <div class="box-tools">
            <div class="input-group input-group-sm hidden-xs" style="width: 200px;margin-top:5px;margin-bottom:5px;">
              <form action="{{ route('cms.faq.search')}}" method="GET">
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
              <th class="text-center">Pertanyaan</th>
              <th class="text-center">Jawaban</th>
              <th class="text-center">Aksi</th>
            </tr>
            @foreach ($listFaq as $key=>$item)
            <tr>
              <td>{{ $key + $listFaq->firstItem()}}</td>
              <td>{{ $item->pertanyaan}}</td>
              <td>{!! $item->jawaban !!}</td>
              <td class="text-center">
                <div class="btn-group">
                  <a href="{{ route('cms.faq.update',['idFAQ'=>$item->id]) }}" class="btn btn-sm btn-warning" title="Ubah"><i class="fa-solid fa-pen-to-square"></i></a>
                </div>
                <div class="btn-group">
                  <form action="{{ route('cms.faq.delete',['idFAQ'=>$item->id]) }}" method="post">
                    @csrf
                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Apakah Anda yakin?')" title="Hapus"><i class="fa-solid fa-trash"></i></button>
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
            {{$listFaq->links()}}
        </div>
      <!-- /.box -->
    </div>
  </div>

@endsection
