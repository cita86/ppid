@extends('ppid.layouts.template')
@section('container')

<section>
    <div class="container px-4 px-lg-5 py-3">
        <div class="row gx-0 mb-4 mb-lg-5">
            <div class="px-3 py-3 text-start">
                <div class="row d-flex justify-content-end">
                    <label class="fs-4 fw-bold">Pencarian Konten..</label>
                </div>
            </div>
            <div class="px-3 py-3">
                <div class="shadow p-3 mb-3 bg-body rounded">
                    <table width="100%">
                    @forelse ($informasi as $item)
                    <tr>
                        <td class="search">
                            @if(!is_null($item->nama_file))
                              <b> {!! $item->judul !!} </b>
                              Dokumen : {{  $item->jenis_dokumen  }}
                              <p><a href="{{ asset('/storage/dokumen/informasi/'.$item->nama_file) }}" target="__blank">{!!  $item->jenis_dokumen  !!}</a></p>
                            @else
                             <b> {!! $item->judul !!} </b>
                             Dokumen : {{  $item->jenis_dokumen  }}
                             <p><a href="{{ $item->link }}" target="__blank">{{  $item->link  }}</a></p>
                            @endif
                           <div class="spacer"></div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="faq"><b>Data tidak ditemukan</td>
                    </tr>
                    <div class="spacer"></div>
                    @endforelse
                </table>
                </div>
            </div>
            <div class="d-flex justify-content-center">
            {{$informasi->links()}}
            </div>
        </div>
    </div>
</section>

@endsection
