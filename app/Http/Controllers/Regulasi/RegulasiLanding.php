<?php

namespace App\Http\Controllers\Regulasi;

use App\Models\Regulasi;
use App\Models\Halamanstatis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegulasiLanding extends Controller
{
    protected $RegulasiModel, $HalamanstatisModel;

    public function __construct()
    {
        $this->RegulasiModel = new Regulasi();
        $this->HalamanstatisModel = new Halamanstatis();
    }

    public function viewProfilRegulasi()
    {
        $data['ProfilPPID'] = $this->HalamanstatisModel
            ->where('status', '1')
            ->where('kategori', 'profil')
            ->orderBY('id', 'desc')
            ->first();

        $data['LandingMaklumat'] = $this->HalamanstatisModel
            ->where('status', '1')
            ->where('kategori', 'maklumat')
            ->orderBY('id', 'desc')
            ->first();

        $data['listRegulasi'] = $this->RegulasiModel->where('status', '1')->get();

        $data['LandingKontak'] = $this->HalamanstatisModel
            ->where('status', '1')
            ->where('kategori', 'kontak')
            ->get();

        return view('ppid.profil.index', $data);
    }
}
