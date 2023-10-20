<div class="modal fade" id="ubahFile{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" action="{{route('cms.informasi.file.update.submit')}}">
                @csrf
                <div class="modal-header">
                    <label class="fs-7 fw-bold" style="font-size:20px;">Ubah File</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value ="{{ $item->id }}">
                    <input type="hidden" name="idInformasi" id="idInformasi" value ="{{ $dataInformasi->id }}">
                    <div class="form-group">
                        <label for="jenis_dokumen">Dokumen</label>
                        <input type="text" class="form-control @error('jenis_dokumen') is-invalid @enderror" name="jenis_dokumen" value="{{ $item->jenis_dokumen }}" placeholder="Masukkan Nama Dokumen Terkait">
                        @error('jenis_dokumen')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    @if(isset($item->link))
                    <div class="form-group row">
                        <label for="link" class="col-sm-2 col-form-label">Link/Tautan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="link" value="{{ $item->link }}" placeholder="Masukkan Link / Tautan">
                        </div>
                    </div>
                    @else
                    <div class="form-group row">
                        <label for="file" class="col-sm-2 col-form-label">Unggah Dokumen</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="file_dokumen" value="">
                        </div>
                    </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
