<?php

namespace App\Http\Controllers\Regulasi;

use App\Models\Regulasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegulasiIndex extends Controller
{
    protected $RegulasiModel;

    public function __construct()
    {
        $this->RegulasiModel = new Regulasi();
    }

    public function viewRegulasiIndex(Request $request)
    {
        if ($request->has('search')) {
            $data['listRegulasi'] = Regulasi::where('nomor_peraturan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('judul_peraturan', 'LIKE', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $data['listRegulasi'] = Regulasi::where('status', '1')
                ->orderBY('id', 'desc')
                ->paginate(5);
        }
        return view('cms.regulasi.index', $data);
    }
}
