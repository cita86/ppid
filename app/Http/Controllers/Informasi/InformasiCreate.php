<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Informasi;
use App\Http\Requests\Informasi\InformasiCreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\File;

class InformasiCreate extends Controller
{
    const STATUS_TIDAK_TAMPIL = 0;
    const STATUS_TAMPIL = 1;

    protected $InformasiModel;

    public function __construct()
    {
        $this->InformasiModel = new Informasi();
    }

    public function viewFormCreateInformasi()
    {
        return view('cms.informasi.create');
    }

    public function onSubmitFormCreateInformasi(InformasiCreateRequest $request)
    {
        $kategori = $request->post('kategori');
        $judul = $request->post('judul');

        $this->InformasiModel->kategori = $kategori;
        $this->InformasiModel->judul = $judul;
        $this->InformasiModel->status = self::STATUS_TAMPIL;
        $this->InformasiModel->save();

        return response()
            ->redirectToRoute('cms.informasi.index')
            ->with('success', 'Data Informasi PPID Berhasil Disimpan');
    }
}
