<?php

namespace App\Http\Controllers\Prosedur;

use App\Models\Prosedur;
use App\Models\Halamanstatis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProsedurLanding extends Controller
{
    protected $ProsedurModel, $HalamanstatisModel;

    public function __construct()
    {
        $this->ProsedurModel = new Prosedur();
        $this->HalamanstatisModel = new Halamanstatis();
    }

    public function viewProsedur()
    {

        $data['ProsedurPermintaan'] = $this->ProsedurModel
            ->where('status', '1')
            ->where('kategori', 'Permintaan Informasi Publik')
            ->orderBY('id', 'desc')
            ->first();

        $data['ProsedurKeberatan'] = $this->ProsedurModel
            ->where('status', '1')
            ->where('kategori', 'Keberatan Informasi Publik')
            ->orderBY('id', 'desc')
            ->first();

        $data['ProsedurSengketa'] = $this->ProsedurModel
            ->where('status', '1')
            ->where('kategori', 'Sengketa Informasi Publik')
            ->orderBY('id', 'desc')
            ->first();

        $data['Resume'] = $this->HalamanstatisModel
            ->where('status', '1')
            ->where('kategori', 'resume')
            ->orderBY('id', 'desc')
            ->first();

        $data['Biaya'] = $this->HalamanstatisModel
            ->where('status', '1')
            ->where('kategori', 'biaya')
            ->get();

        return view('ppid.prosedur.index', $data);
    }
}
