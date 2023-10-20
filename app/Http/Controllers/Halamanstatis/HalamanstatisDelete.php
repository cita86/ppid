<?php

namespace App\Http\Controllers\Halamanstatis;

use App\Models\Halamanstatis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HalamanstatisDelete extends Controller
{
    protected $HalamanstatisModel;

    public function __construct()
    {
        $this->HalamanstatisModel = new Halamanstatis();
    }

    public function onSubmitDeleteHalamanstatis(int $idHalamanstatis)
    {
        // Update Status
        $dataHalamanstatis = $this->HalamanstatisModel->find($idHalamanstatis);
        $dataHalamanstatis->status = '0';
        $dataHalamanstatis->save();

        return response()
            ->redirectToRoute('cms.halaman_statis.index')
            ->with('success','Data Berhasil Dihapus');
    }
}