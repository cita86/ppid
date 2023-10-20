<?php

namespace App\Http\Controllers\Informasi\File;

use App\Models\File;
use App\Models\Informasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileDelete extends Controller
{
    protected $FileModel;

    public function __construct()
    {
        $this->FileModel = new File();
    }

    public function onSubmitDeleteFile(Request $request, int $idFile)
    {
        // Update Status
        $dataFile = $this->FileModel->find($idFile);
        $dataFile->status = '0';
        $dataFile->save();

        return response()
            ->redirectToRoute('cms.informasi.file.index', $request->post('id'))
            ->with('success','Data Berhasil Dihapus');
    }
}