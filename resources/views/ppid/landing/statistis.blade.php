<section id="informasiStatis" class="mt-5">
    <div class="container px-4 px-lg-5">
        <div class="row gx-0 mb-4 mb-lg-5">
            <div class="col-xl-3 col-lg-5 px-5">
                <div class="text-break text-end">
                    <h1 class="">Statistik Akses Informasi</h1>
                </div>
            </div>
            <div class="col-xl-9 col-lg-7 text-center">
                <div class="row">
                    <div class="col-12">
                        @if(!is_null($LandingStatistis))
                            <img src="{{ asset('/storage/dokumen/halamanstatis/'.$LandingStatistis->nama_file_1)}}" class="d-block w-75 m-auto" alt="...">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>