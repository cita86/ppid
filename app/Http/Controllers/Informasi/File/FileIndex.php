<?php

namespace App\Http\Controllers\Informasi\File;

use App\Models\Informasi;
use App\Models\File;
use App\Http\Controllers\Controller;

class FileIndex extends Controller
{
    protected $FileModel, $InformasiModel;

    public function __construct()
    {
        $this->FileModel = new File();
        $this->InformasiModel = new Informasi();
    }

    /**
     * @param int $idInformasi
     */
    public function viewFileIndex($idInformasi)
    {
        $data['dataInformasi'] = $this->InformasiModel->find($idInformasi);

        $data['listFile'] = $this->FileModel
            ->where('status', 1)
            ->where('informasi_id', $idInformasi)
            ->orderBY('id', 'desc')
            ->paginate(7);
        return view('cms.informasi.file.index', $data);
    }
}
