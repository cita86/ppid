<?php

namespace App\Http\Controllers\Halamanstatis;

use App\Models\Halamanstatis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HalamanstatisIndex extends Controller
{
    protected $HalamanstatisModel;

    public function __construct()
    {
        $this->HalamanstatisModel = new Halamanstatis();
    }

    public function viewHalamanstatisIndex(Request $request)
    {
        if ($request->has('search')) {
            $data['listHalamanstatis'] = Halamanstatis::where('kategori', 'LIKE', '%' . $request->search . '%')
                ->orWhere('judul', 'LIKE', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $data['listHalamanstatis'] = Halamanstatis::where('status', '1')
                ->orderBY('id', 'desc')
                ->paginate(7);
        }
        return view('cms.halaman_statis.index', $data);
    }
}
