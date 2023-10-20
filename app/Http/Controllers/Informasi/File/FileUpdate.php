<?php

namespace App\Http\Controllers\Informasi\File;

use App\Models\File;
use App\Models\Informasi;
use Illuminate\Http\Request;
use App\Http\Requests\Informasi\File\FileUpdateRequest;
use App\Http\Controllers\Controller;
// use Illuminate\Support\File;
use Illuminate\Support\Facades\Storage;

class FileUpdate extends Controller
{
    protected $FileModel, $InformasiModel;

    public function __construct()
    {
        $this->FileModel = new File();
        $this->InformasiModel = new Informasi();
    }

    /**
     * @param int $idFile, $idInformasi
     */

    /**
     * @param Request $request
     */
    public function onSubmitFormUpdateFile(FileUpdateRequest $request)
    {
        // Get data from form update
        $idInformasi = $request->post('idInformasi');
        $idFile = $request->post('id');
        $jenis_dokumen = $request->post('jenis_dokumen');
        $link = $request->post('link');

        $dataFile = $this->FileModel->find($idFile);

        if (request()->hasfile('file_dokumen')) {
            $file_dokumen = $request->file('file_dokumen');
            $filename = $file_dokumen->getClientOriginalName();
            $file_dokumen->storeAs('public/dokumen/informasi', $filename);

            //delete old document
            Storage::delete('/public/dokumen/informasi' . $filename);

            $dataFile->link = $link;
            $dataFile->jenis_dokumen = $jenis_dokumen;
            $dataFile->file = $file_dokumen;
            $dataFile->nama_file = $filename;
            $dataFile->save();
        } else {
            $dataFile->link = $link;
            $dataFile->jenis_dokumen = $jenis_dokumen;
            $dataFile->save();
        }

        return response()
            ->redirectToRoute('cms.informasi.file.index', $idInformasi)
            ->with('success', 'Data Berhasil Diupdate');
    }
}
