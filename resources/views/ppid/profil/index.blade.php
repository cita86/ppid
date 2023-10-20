@extends('ppid.layouts.template')
@section('container')

<!--Profil PPID-->
<section>
    <div class="container px-4 px-lg-5">
        <div class="row gx-0 mb-4 mb-lg-5">
            <div class="col-xl-4 col-lg-5 px-2 px-3 py-3">
                <label class="row justify-content-center pb-3">Profil Badan Publik</label>
                
                @if(!is_null($ProfilPPID))
                    <img src="{{ asset('/storage/dokumen/halamanstatis/'.$ProfilPPID->nama_file_2)}}" class="d-block w-100" alt="...">
                @endif
                
            </div>
            <div class="col-xl-8 col-lg-7 px-2 py-3">                    
                @if(!is_null($ProfilPPID))
                    <p>{!! $ProfilPPID->uraian_1 !!}</p>
                @endif  
            </div>
    </div>
</section>

<section>
    <div class="container px-4 px-lg-5 mb-0">
        <div class="row gx-0 mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7 px-2">  
                @if(!is_null($ProfilPPID))
                    <p>{!! $ProfilPPID->uraian_2 !!}</p>
                @endif
            </div>
            <div class="col-xl-4 col-lg-5 px-5 px-3 py-3 text-center">
                @if(!is_null($ProfilPPID))
                    <img src="{{ asset('/storage/dokumen/halamanstatis/'.$ProfilPPID->nama_file_1)}}" class="d-block w-100" alt="...">
                @endif
                <div class="spacer"></div>
                <button type="submit" class="btn btn-warning btn-sm" style="width:40%" onclick="document.getElementById('id03').style.display='block'">Lihat Gambar</button>
                    <div id="id03" class="modal">                        
                        <form class="modal-content animate" action="" method="post">
                          <div class="imgcontainer">
                            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                            @if(!is_null($ProfilPPID))
                            <img src="{{ asset('/storage/dokumen/halamanstatis/'.$ProfilPPID->nama_file_1)}}" alt="profil" class="popup">
                            @endif
                          </div>
                        </form>
                    </div>
                <div class="spacer">
            </div>
    </div>
</section>

@include('ppid.profil.maklumat')

@include('ppid.profil.regulasi')

<section>
    <div class="mb-0">
        @foreach ($LandingKontak as $key => $item)
            <img src="{{ asset('/storage/dokumen/halamanstatis/'.$item->nama_file_1)}}" class="d-block w-100" alt="...">
        @endforeach
    </div>
</section>
<script>
    // Get the modal
    var modal = document.getElementById('id03');
        
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
   }
</script>
@endsection
