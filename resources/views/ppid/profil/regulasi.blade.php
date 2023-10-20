<section id="regulasi">
    <div class="mb-0 py-5" style="background-color: #F6F7F7">
        <div class="container" style="width: 80%">
            <div class="row">
            <label class="fs-5 fw-bold">Regulasi</label>
            <button type="button" class="btn btn-warning btn-sm" style="width:13%">Regulasi terkait PPID</button>
            </div>
            <div class="panel-body regulasi">
                <table width="100%">
                    @foreach ($listRegulasi as $item)
                    <tr> 
                        <td style="vertical-align: top">
                            <div class="spacer"></div>
                            {{ chr(64+ $loop->iteration) }}.
                            <div class="spacer"></div>
                        </td>
                        <td>
                            <div class="spacer"></div>
                            <b>{{ $item->nomor_peraturan}}</b><br>
                            {{ $item->judul_peraturan}}
                            <div class="spacer"></div>
                        </td> 
                        <td class="kolom3"> 
                            <div class="spacer"></div>
                            <a href="{{ asset('/storage/dokumen/regulasi/'.$item->nama_file)}}" target="_blank" class="button" id="submit-btn" type="submit" >Lihat</a>
                            <div class="spacer"></div>
                        </td> 
                    </tr>
                    @endforeach
                </table>      
            </div>
        </div> 
    </div>
</section>