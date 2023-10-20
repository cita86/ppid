<?php

namespace App\Http\Controllers\Vertikal;

use App\Models\Vertikal;
use App\Models\Detail_kantor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VertikalLanding extends Controller
{
    protected $VertikalModel, $Detail_kantorModel;

    public function __construct()
    {
        $this->VertikalModel = new Vertikal();
        $this->Detail_kantorModel = new Detail_kantor();
    }

    public function viewVertikal()
    {
        $data['Vertikal'] = $this->VertikalModel
            ->where('status', '1')
            ->orderBY('vertikal_id')
            ->get();
        return view('ppid.kantor_vertikal.index', $data);
    }
}
