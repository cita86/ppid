@extends('ppid.layouts.template')
@section('container')

<section>
    <div class="container-fluid px-4 px-lg-5 py-3">
        <div class="row gx-0 mb-4 mb-lg-5">
            <div class="col-3 px-3 py-3 text-end">
                <div class="row d-flex justify-content-end">
                    <label class="fs-4 fw-bold">Informasi Kantor<br>Vertikal <br>DJKN</label>  
                </div>
            </div>
            <div class="col-9 px-3 py-3">
                <div class="wrapper-col-1 px-3">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        @foreach ($Vertikal as $data)
                          <h2 class="accordion-header vertikal" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{{ $loop->index}}" aria-expanded="false" aria-controls="flush-{{ $loop->index}}">
                              {{$data->nama}}
                            </button>
                          </h2>
                          <div id="flush-{{ $loop->index}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">     
                                <div class="shadow p-3 mb-3 bg-body rounded">
                                  @foreach ($data->kantor as $detail)
                                    <label class="nama-kantor">{{$detail->nama_unit}}</label>
                                    <table width="100%" style="margin-bottom: 1%">
                                        <tr> 
                                            <td class="kolom1"><i class="bi bi-house"></i></td>
                                            <td>
                                              {{$detail->alamat}}
                                            </td> 
                                        </tr>
                                        <tr> 
                                            <td class="kolom1"><i class="bi bi-telephone"></i></td>
                                            <td>{{$detail->telepon}}</td>
                                        </tr>
                                        <tr> 
                                            <td class="kolom1"><i class="bi bi-whatsapp"></i></td>
                                            <td>{{$detail->whatsapp}}</td> 
                                        </tr>
                                        <tr> 
                                            <td class="kolom1"><i class="bi bi-envelope"></i></td>
                                            <td>{{$detail->email}}</td> 
                                        </tr>
                                    </table>
                                    <div class="text-center">
                                      <a href="{{$detail->situs_web}}" class="button situs-vertikal" id="submit-btn" type="submit" name="submit" target="_blank">Kunjungi situs</a>
                                    </div>
                                  @endforeach
                                </div>
                            </div>
                          </div>
                        @endforeach
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
