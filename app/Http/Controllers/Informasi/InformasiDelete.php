<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Informasi;
use App\Http\Controllers\Controller;

class InformasiDelete extends Controller
{
    protected $InformasiModel;

    public function __construct()
    {
        $this->InformasiModel = new Informasi();
    }

    public function onSubmitDeleteInformasi(int $idInformasi)
    {
        // Update Status
        $dataInformasi = $this->InformasiModel->find($idInformasi);
        $dataInformasi->status = '0';
        $dataInformasi->save();

        return response()
            ->redirectToRoute('cms.informasi.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
