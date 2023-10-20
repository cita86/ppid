<section id="resume-alur">
    <div class="container-fluid px-4 px-lg-5" style="background-color: #F6F7F7">
        <div class="row gx-0 mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7 px-5 py-3">
                @if(!is_null($Resume))
                <img src="{{ asset('/storage/dokumen/halamanstatis/'.$Resume->nama_file_1)}}" class="d-block w-75" alt="...">
                @endif
            </div>
            <div class="col-xl-4 col-lg-5 px-5 px-3 py-3">
                <div class="row">
                    <label class="fs-5 fw-bold">Resume Alur <br>Pengelolaan Layanan <br>Informasi Publik</label>  
                    <button type="submit" class="btn btn-warning btn-sm" style="width:40%" onclick="document.getElementById('id01').style.display='block'">Lihat Gambar</button>
                    <div id="id01" class="modal">                        
                        <form class="modal-content animate" action="" method="post">
                          <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            @if(!is_null($Resume))
                            <img src="{{ asset('/storage/dokumen/halamanstatis/'.$Resume->nama_file_1)}}" alt="resume-alur" class="popup">
                            @endif
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    // Get the modal
    var modal = document.getElementById('id01');
        
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
   }
</script>
</section>