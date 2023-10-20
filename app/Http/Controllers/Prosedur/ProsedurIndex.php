<?php

namespace App\Http\Controllers\Prosedur;

use App\Models\Prosedur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProsedurIndex extends Controller
{
    protected $ProsedurModel;

    public function __construct()
    {
        $this->ProsedurModel = new Prosedur();
    }

    public function viewProsedurIndex(Request $request)
    {
        if ($request->has('search')) {
            $data['listProsedur'] = Prosedur::where('kategori', 'LIKE', '%' . $request->search . '%')
                ->orWhere('uraian', 'LIKE', '%' . $request->search . '%')
                ->get();
        } else {
            $data['listProsedur'] = Prosedur::where('status', '1')
                ->orderBY('id', 'desc')
                ->get();
        }
        return view('cms.prosedur.index', $data);
    }
}
