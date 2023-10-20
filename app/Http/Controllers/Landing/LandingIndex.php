<?php

namespace App\Http\Controllers\Landing;

use App\Models\Slider;
use App\Models\Informasi;
use App\Models\Halamanstatis;
use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingIndex extends Controller
{
    protected $SliderModel, $InformasiModel, $FileModel, $HalamanstatisModel;

    public function __construct()
    {

        $this->SliderModel = new Slider();
        $this->InformasiModel = new Informasi();
        $this->FileModel = new File();
        $this->HalamanstatisModel = new Halamanstatis();
    }

    public function viewLanding()
    {
        $data['listSlider'] = $this->SliderModel->where('status', '1')->get();

        $data['informasiBerkala'] = $this->InformasiModel
            ->where('status', '1')
            ->where('kategori', 'Informasi Publik Secara Berkala')
            ->get();

        $data['informasiSertaMerta'] = $this->InformasiModel
            ->where('status', '1')
            ->where('kategori', 'Informasi Serta Merta')
            ->orderBY('id', 'desc')
            ->first();

        $data['informasiSetiapSaat'] = $this->InformasiModel
            ->where('status', '1')
            ->where('kategori', 'Informasi Setiap Saat')
            ->get();

        $data['LandingStatistis'] = $this->HalamanstatisModel
            ->where('status', '1')
            ->where('kategori', 'statistis')
            ->orderBY('id', 'desc')
            ->first();

        $data['LandingPenghargaan'] = $this->HalamanstatisModel
            ->where('status', '1')
            ->where('kategori', 'penghargaan')
            ->orderBY('id', 'desc')
            ->first();

        return view('ppid.landing.landing', $data);
    }
}
