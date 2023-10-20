<!-- Modal -->
<div class="modal fade" id="tambahKantor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="kantor">
      <div class="modal-content">
          <form method="POST" action="{{route('cms.vertikal.detail_kantor.create.submit')}}">
              @csrf
              <input type="hidden" name="id" value="{{ $dataVertikal->id }}">
              <div class="modal-header">
                  <label class="fs-7 fw-bold" style="font-size:20px;">Tambah Kantor</label>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <input type="hidden" name="id" id="id" value ="{{ $dataVertikal->id}}">
                  <div class="form-group">
                      <label for="nama_unit">Nama Kantor</label>
                      <input type="text" class="form-control" name="nama_unit" value="{{ old('nama_unit') }}" placeholder="Masukkan Nama Kantor">
                  </div>
                  <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea class="form-control" name="alamat" rows="2" placeholder="Masukkan Alamat Kantor">{{ old('alamat') }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="telepon">Nomor Telepon</label>
                    <input type="text" class="form-control" name="telepon" value="{{ old('telepon') }}" placeholder="Masukkan Nomor Telepon Kantor">
                  </div>
                  <div class="form-group">
                    <label for="whatsapp">Nomor WhatsApp</label>
                    <input type="text" class="form-control" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="Masukkan Nomor WhatsApp Kantor">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Masukkan Email PPID">
                  </div>
                  <div class="form-group">
                    <label for="situs_web">Situs Web</label>
                    <input type="text" class="form-control" name="situs_web" value="{{ old('situs_web') }}" placeholder="Masukkan Situs Web Kantor">
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
