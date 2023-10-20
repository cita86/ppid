<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Informasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformasiIndex extends Controller
{
    protected $InformasiModel;

    public function __construct()
    {
        $this->InformasiModel = new Informasi();
    }

    public function viewInformasiIndex(Request $request)
    {
        if ($request->has('search')) {
            $data['listInformasi'] = Informasi::where('kategori', 'LIKE', '%' . $request->search . '%')
                ->orWhere('judul', 'LIKE', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $data['listInformasi'] = Informasi::where('status', '1')
                ->orderBY('id', 'desc')
                ->paginate(5);
        }
        return view('cms.informasi.index', $data);
    }
}
