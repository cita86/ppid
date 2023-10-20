<div class="modal fade" id="ubahKantor{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="kantor">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data" action="{{route('cms.vertikal.update.submit')}}">
                @csrf
                <div class="modal-header">
                    <label class="fs-7 fw-bold" style="font-size:20px;">Ubah Kantor Vertikal</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value ="{{ $item->id }}">
                    
                    <div class="form-group">
                        <label for="nama">Nama Unit Eselon II</label>
                        <input type="text" class="form-control" name="nama" value="{{ $item->nama }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
