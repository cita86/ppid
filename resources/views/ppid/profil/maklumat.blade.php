<!-- Maklumat -->
<section>
    <div class="container px-2 px-lg-3">
        <div class="row gx-0 mb-4 mb-lg-5">
            <div class="col-xl-5 col-lg-5 px-2 row d-flex justify-content-center">
                @if(!is_null($LandingMaklumat))
                    <img src="{{ asset('/storage/dokumen/halamanstatis/'.$LandingMaklumat->nama_file_1)}}" class="d-block w-100" alt="...">
                @endif
                <div class="spacer"></div>
                <button type="submit" class="button" onclick="document.getElementById('id02').style.display='block'">Lihat Gambar</button>
                <div id="id02" class="modal">
                    <form class="modal-content animate" action="" method="post">
                        <div class="imgcontainer">
                          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                          @if(!is_null($LandingMaklumat))
                          <img src="{{ asset('/storage/dokumen/halamanstatis/'.$LandingMaklumat->nama_file_1)}}" alt="maklumat" class="popup">
                          @endif
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-xl-7 col-lg-7 px-2 row d-flex justify-content-center">  
                @if(!is_null($LandingMaklumat))
                    <p>{!! $LandingMaklumat->uraian_1 !!}</p>
                @endif
            </div>
        </div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('id02');
            
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
       }
    </script>
</section>