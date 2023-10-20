<section id="informasiSetiapSaat" class="my-5">
    <div class="mb-5">
        <img src="image/Gambar Beranda-04-sedia-setiap-saat.png" alt="Bootstrap" width="100%">
        <div class="container sub-menu bg-white">
            <ul class="nav nav-main-content sub-title">
                <div class="row text-break text-left mx-3 py-3">
                    <h3 class="menu-font">Informasi Publik Tersedia Setiap Saat</h3>
                </div>
            </ul>
        </div>
    </div>
    <div class="container px-4 px-lg-5">
        <div class="row gx-0 mb-4 mb-lg-5">
            <div class="accordion accordion-flush" id="accordionFlushExample2">
                @foreach ($informasiSetiapSaat as $data)
                <div class="accordion-item"> 
                    <h2 class="accordion-header" id="flush-headingOneOnes">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush{{ $loop->index}}" aria-expanded="false" aria-controls="flush{{ $loop->index}}">
                        <p>{{ chr(64+ $loop->iteration) }}.&nbsp; {!! $data->judul !!}</p>
                        </button>
                    </h2>
                    <div id="flush{{ $loop->index}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample2">
                        <div class="accordion-body">
                            <div class="regular slider my-4">
                                @foreach ($data->files as $file)
                                <div class="card card-box text-center" >
                                    <img data-pdf-thumbnail-file="{{ asset('/storage/dokumen/informasi/'.$file->nama_file)}}" class="card-img-top" src="{{ asset('/image/pdf.png')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $file->jenis_dokumen}}</h5>
                                        @if(!is_null($file->link))
                                        <a href="{{ $file->link }}" class="button" target="__blank">Lihat</a>
                                        @else
                                        <a href="{{ asset('/storage/dokumen/informasi/'.$file->nama_file) }}" class="button" target="__blank">Lihat</a>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>