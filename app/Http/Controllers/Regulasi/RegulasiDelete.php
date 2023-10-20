<?php

namespace App\Http\Controllers\Regulasi;

use App\Models\Regulasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegulasiDelete extends Controller
{
    protected $RegulasiModel;

    public function __construct()
    {
        $this->RegulasiModel = new Regulasi();
    }

    public function onSubmitDeleteRegulasi(int $idRegulasi)
    {
        // Update Status
        $dataRegulasi = $this->RegulasiModel->find($idRegulasi);
        $dataRegulasi->status = '0';
        $dataRegulasi->save();

        return response()
            ->redirectToRoute('cms.regulasi.index')
            ->with('success','Data Berhasil Dihapus');
    }
}