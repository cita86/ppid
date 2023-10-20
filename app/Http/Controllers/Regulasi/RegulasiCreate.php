<?php

namespace App\Http\Controllers\Regulasi;

use App\Models\Regulasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Regulasi\RegulasiCreateRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\File;

class RegulasiCreate extends Controller
{
    const STATUS_TIDAK_TAMPIL = 0;
    const STATUS_TAMPIL = 1;

    protected $RegulasiModel;

    public function __construct()
    {
        $this->RegulasiModel = new Regulasi();
    }

    public function viewFormCreateRegulasi()
    {
        return view('cms.regulasi.create');
    }

    public function onSubmitFormCreateRegulasi(RegulasiCreateRequest $request)
    {
        $nomor_peraturan = $request->post('nomor_peraturan');
        $judul_peraturan = $request->post('judul_peraturan');
        $regulation = $request->file('file_peraturan');
        $filename = $regulation->getClientOriginalName();
        $regulation->storeAs('public/dokumen/regulasi', $filename);
        
        $this->RegulasiModel->nomor_peraturan = $nomor_peraturan;
        $this->RegulasiModel->judul_peraturan = $judul_peraturan;
        $this->RegulasiModel->file = $regulation;
        $this->RegulasiModel->nama_file = $filename;
        $this->RegulasiModel->status = self::STATUS_TAMPIL;
        $this->RegulasiModel->save();

        return response()
            ->redirectToRoute('cms.regulasi.index')
            ->with('success','Data Regulasi Berhasil Disimpan');
    }
}