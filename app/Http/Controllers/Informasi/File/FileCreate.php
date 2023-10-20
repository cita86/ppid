<?php

namespace App\Http\Controllers\Informasi\File;

use App\Models\File;
use App\Models\Informasi;
use App\Http\Requests\Informasi\File\FileCreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileCreate extends Controller
{
    const STATUS_TIDAK_TAMPIL = 0;
    const STATUS_TAMPIL = 1;

    protected $FileModel;

    public function __construct()
    {
        $this->FileModel = new File();
    }

    public function viewFormCreateFile()
    {
        return view('cms.informasi.file.index', $data);
    }

    public function onSubmitFormCreateFile(FileCreateRequest $request)
    {
        $informasi_id = $request->post('id');
        $link = $request->post('link');
        $jenis_dokumen = $request->post('jenis_dokumen');

        if (request()->hasfile('file_dokumen')) {
            $file_dokumen = $request->file('file_dokumen');
            $filename = $file_dokumen->getClientOriginalName();
            $file_dokumen->storeAs('public/dokumen/informasi', $filename);

            $this->FileModel->informasi_id = $informasi_id;
            $this->FileModel->link = $link;
            $this->FileModel->jenis_dokumen = $jenis_dokumen;
            $this->FileModel->file = $file_dokumen;
            $this->FileModel->nama_file = $filename;
            $this->FileModel->status = self::STATUS_TAMPIL;;
            $this->FileModel->save();
        } else {
            $this->FileModel->informasi_id = $informasi_id;
            $this->FileModel->link = $link;
            $this->FileModel->jenis_dokumen = $jenis_dokumen;
            $this->FileModel->status = self::STATUS_TAMPIL;;
            $this->FileModel->save();
        }

        return response()
            ->redirectToRoute('cms.informasi.file.index', $request->post('id'))
            ->with('success', 'File Berhasil Disimpan');
    }
}
