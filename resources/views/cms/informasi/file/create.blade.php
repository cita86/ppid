<!-- Modal -->
<div class="modal fade" id="tambahFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" action="{{route('cms.informasi.file.create.submit')}}">
                @csrf
                <input type="hidden" name="id" value="{{ $dataInformasi->id }}">
                <div class="modal-header">
                    <label class="fs-7 fw-bold" style="font-size:20px;">Tambah File</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value ="{{ $dataInformasi->id}}">
                    <div class="form-group">
                        <label for="jenis_dokumen">Dokumen</label>
                        <input type="text" class="form-control @error('jenis_dokumen') is-invalid @enderror" name="jenis_dokumen" value="{{ old('jenis_dokumen') }}" placeholder="Masukkan Dokumen Terkait">
                    </div>
                    <div class="form-group">
                        <div class="radio">
                            <label>
                            <input type="radio" name="rad" id="rad1" value="1" class="rad">
                            Link / Tautan
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                            <input type="radio" name="rad" id="rad2" value="2" class="rad">
                            Unggah Dokumen
                            </label>
                        </div>
                        <!-- form yang mau ditampilkan-->
                        <div id="form1" style="display:none">
                            <input type="text" class="form-control" name="link" value="{{ old('link') }}" placeholder="Masukkan Link / Tautan">
                        </div>
                        <div id="form2" style="display:none">
                            <input type="file" class="form-control" name="file_dokumen">
                        </div>
                    </div>
                    <!-- jquery-->
                    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(function(){
                            $(":radio.rad").click(function(){
                                $("#form1, #form2").hide()
                                if($(this).val() == "1"){
                                    $("#form1").show();
                                }else{
                                    $("#form2").show();
                                }
                            });
                        });
                    </script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>



