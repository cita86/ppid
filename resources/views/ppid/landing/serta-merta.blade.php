<section id="informasiSertaMerta">
    <div class="mb-5">
        <img src="image/Gambar Beranda-03-wajib-diumumkan.png" alt="Bootstrap" width="100%">
        <div class="container sub-menu bg-white">
            <ul class="nav nav-main-content sub-title">
                <div class="row text-break text-left mx-3 py-3">
                    <h3 class="menu-font">Daftar Informasi Publik yang Wajib Diumumkan Secara Serta Merta</h3>
                </div>
            </ul>
        </div>
    </div>
    <div class="container px-4 px-lg-5">
        <div class="row gx-0 mb-4 mb-lg-5">
        @if(!is_null($informasiSertaMerta))
            <p>{!! $informasiSertaMerta->judul !!}</p>
        @endif
        </div>
    </div>
</section>