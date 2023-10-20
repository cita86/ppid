<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Informasi;
use Illuminate\Http\Request;
use App\Http\Requests\Informasi\InformasiUpdateRequest;
use App\Http\Controllers\Controller;
//use Illuminate\Support\File;
//use Illuminate\Support\Facades\Storage;

class InformasiUpdate extends Controller
{
    protected $InformasiModel;

    public function __construct()
    {
        $this->InformasiModel = new Informasi();
    }

    /**
     * @param int $idInformasi
     */
    public function viewFormUpdateInformasi(int $idInformasi)
    {
        $data['dataInformasi'] = $this->InformasiModel->find($idInformasi);
        return view('cms.informasi.edit', $data);
    }

    /**
     * @param Request $request
     */
    public function onSubmitFormUpdateInformasi(InformasiUpdateRequest $request)
    {
        // Get data from form update
        $idInformasi = $request->post('id');
        $kategori = $request->post('kategori');
        $judul = $request->post('judul');

        $dataInformasi = $this->InformasiModel->find($idInformasi);

        //update post with new document
        $dataInformasi->kategori = $kategori;
        $dataInformasi->judul = $judul;
        $dataInformasi->save();

        return response()
            ->redirectToRoute('cms.informasi.index')
            ->with('success', 'Data Berhasil Diupdate');
    }
}
