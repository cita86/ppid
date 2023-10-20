<?php

namespace App\Http\Controllers\Regulasi;

use App\Models\Halamanstatis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HalamanstatisLanding extends Controller
{
    protected $HalamanstatisModel;

    public function __construct()
    {
        $this->HalamanstatisModel = new Halamanstatis();
    }

    public function viewHalamanstatis()
    {
        $data['listHalamanstatis'] = $this->HalamanstatisModel->where('status','1')->get();
        return view('ppid.landing.landing', $data);
    }
}