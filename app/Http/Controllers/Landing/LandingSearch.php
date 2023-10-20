<?php

namespace App\Http\Controllers\Landing;

use App\Models\Informasi;
use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Model;

class LandingSearch extends Controller
{
    protected $InformasiModel, $FileModel;

    public function __construct()
    {
        $this->InformasiModel = new Informasi();
        $this->FileModel = new File();
    }

    public function viewSearch(Request $request)
    {
        $search = $request->search;
        $data['informasi'] = Informasi::join('Files', 'Files.informasi_id', '=', 'Informasis.id')
            ->where('Informasis.kategori', 'like', "%$search%")
            ->orWhere('Informasis.judul', 'like', "%$search%")
            ->orWhere('Files.jenis_dokumen', 'like', "%$search%")
            ->orWhere('Files.link', 'like', "%$search%")
            ->orWhere('Files.nama_file', 'like', "%$search%")
            ->paginate(10);

        return view('ppid.landing.search', $data);
    }
}
