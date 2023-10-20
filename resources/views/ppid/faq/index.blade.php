@extends('ppid.layouts.template')
@section('container')

<section>
    <div class="container-fluid px-4 px-lg-5 py-3">
        <div class="row gx-0 mb-4 mb-lg-5">
            <div class="col-3 px-3 py-3 text-end">
                <div class="row d-flex justify-content-end">
                    <label class="fs-4 fw-bold">Frequently <br>Asked <br>Questions</label>  
                </div>
            </div>
            <div class="col-9 px-3 py-3">
                <div class="wrapper-col-1 px-3">
                    <table width="100%">
                    @foreach ($listFaq as $item)
                    <tr> 
                        <td class="faq">       
                            {{ ($loop->iteration) }}.         
                        </td>
                        <td class="faq">
                            <b>{{ $item->pertanyaan}}</b><br>
                            {!! $item->jawaban!!}
                            <div class="spacer"></div>
                        </td> 
                    </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
