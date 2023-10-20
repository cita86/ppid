@extends('ppid.layouts.template')
@section('container')

<!-- Prosedur Permintaan Informasi Publik -->
<section>
    <div class="container-fluid px-4 px-lg-5">
        <div class="row gx-0 mb-4 mb-lg-5">
            <div class="col-3 px-3 py-3 text-end">
                <div class="row d-flex justify-content-end">
                    <label class="fs-5 fw-bold">Prosedur <br>Permintaan <br>Informasi Publik</label>
                    <a href="/kantor_vertikal" target ="_blank" type="submit" class="btn btn-warning btn-sm" style="width:55%;margin-bottom:10px;">Informasi Kantor Vertikal</a>
                    <p>Formulir Permohonan Informasi Publik</p>
                </div>
                <div class="col-12">
                    <div class="wrapper-col-1 text-end">
                        @if(!is_null($ProsedurPermintaan))
                        <label class="download-formulir">PPID Tk. I  </label>
                        <a href="{{ asset('/storage/dokumen/prosedur/'.$ProsedurPermintaan->nama_form_1)}}" target ="_blank" class="top-button download-button">Download</a><br>
                        <label class="download-formulir">PPID Tk. II </label>
                        <a href="{{ asset('/storage/dokumen/prosedur/'.$ProsedurPermintaan->nama_form_2)}}" target ="_blank" class="top-button download-button">Download</a><br>
                        <label class="download-formulir">PPID Tk. III </label>
                        <a href="{{ asset('/storage/dokumen/prosedur/'.$ProsedurPermintaan->nama_form_3)}}" target ="_blank" class="top-button download-button">Download</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-9 px-3 py-3">
                <div class="wrapper-col-1 px-3">
                    @if(!is_null($ProsedurPermintaan))
                    <tr>
                        <td class="prosedur">
                            <div class="spacer"></div>
                            {!! $ProsedurPermintaan->uraian !!}
                            <div class="spacer"></div>
                        </td>
                    </tr>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Prosedur Keberatan Informasi Publik -->
<section>
    <div class="container-fluid px-4 px-lg-5" style="background-color: #F6F7F7">
        <div class="row gx-0 mb-4 mb-lg-5">
            <div class="col-xl-9 col-lg-7 px-3 py-3">
                @if(!is_null ($ProsedurKeberatan))
                    <tr>
                        <td class="prosedur">
                            <div class="spacer"></div>
                            {!! $ProsedurKeberatan->uraian !!}
                            <div class="spacer"></div>
                        </td>
                    </tr>
                @endif
            </div>
            <div class="col-3 px-3 py-3 text-start">
                <div class="row">
                    <label class="fs-5 fw-bold">Prosedur <br>Keberatan <br>Informasi Publik</label>
                    <a href="/kantor_vertikal" target ="_blank" button type="submit" class="btn btn-warning btn-sm" style="width:55%;margin-bottom:10px;">Informasi Kantor Vertikal</a>
                    <p>Formulir Keberatan Informasi Publik</p>
                </div>
                <div class="col-12">
                    <div class="wrapper-col-1 text-start">
                        @if(!is_null ($ProsedurKeberatan))
                        <label class="download-formulir">PPID Tk. I </label>
                        <a href="{{ asset('/storage/dokumen/prosedur/'.$ProsedurKeberatan->nama_form_1)}}" target ="_blank" class="top-button download-button">Download</a><br>
                        <label class="download-formulir">PPID Tk. II </label>
                        <a href="{{ asset('/storage/dokumen/prosedur/'.$ProsedurKeberatan->nama_form_2)}}" target ="_blank" class="top-button download-button">Download</a><br>
                        <label class="download-formulir">PPID Tk. III </label>
                        <a href="{{ asset('/storage/dokumen/prosedur/'.$ProsedurKeberatan->nama_form_3)}}" target ="_blank" class="top-button download-button">Download</a>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Prosedur Sengketa Informasi Publik -->
<section>
    <div class="container-fluid px-4 px-lg-5">
        <div class="row gx-0 mb-4 mb-lg-5">
            <div class="col-xl-3 col-lg-5 px-3 py-3 text-end">
                <label class="fs-5 fw-bold">Prosedur <br>Sengketa <br>Informasi Publik</label>
                <h6>(Sesuai Pasal 37 dan Pasal 38 UU Nomor 14 Tahun)</h6>
            </div>
            <div class="col-9 px-3 py-3">
                <div class="wrapper-col-1 px-3">
                    @if(!is_null($ProsedurSengketa))
                    <tr>
                        <td class="prosedur">
                            <div class="spacer"></div>
                            {!! $ProsedurSengketa->uraian !!}
                            <div class="spacer"></div>
                        </td>
                    </tr>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@include('ppid.prosedur.resume-alur');

<section>
    <div class="mt-0">
        @foreach ($Biaya as $item)
        <img src="{{ asset('/storage/dokumen/halamanstatis/'.$item->nama_file_1)}}" width="100%">
        @endforeach
    </div>
</section>

@endsection
