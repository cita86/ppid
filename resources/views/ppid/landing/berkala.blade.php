<section id="informasiBerkala" >
    <div class="mb-5">
        <img src="image/Gambar Beranda-02-inf-wajib-disediakan.png" alt="Bootstrap" width="100%">
        <div class="container sub-menu bg-white">
            <ul class="nav nav-main-content sub-title">
                <div class="row text-break text-left mx-3 py-3">
                    <h3 class="menu-font">Informasi Publik Yang Wajib Disediakan 
                        dan Diumumkan Secara Berkala</h3>
                </div>
            </ul>
        </div>
    </div>
    
    <div class="container px-4 px-lg-5">
        <div class="row gx-0 mb-4 mb-lg-5">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                @foreach ($informasiBerkala as $data)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOneOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{{ $loop->index}}" aria-expanded="false" aria-controls="flush-{{ $loop->index}}">
                            {{ chr(64+ $loop->iteration) }}.&nbsp; {!! $data->judul !!}
                        </button>
                    </h2>
                    <div id="flush-{{ $loop->index}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
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