<?php

namespace App\Http\Controllers\Regulasi;

use App\Models\Regulasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Regulasi\RegulasiUpdateRequest;
use Illuminate\Support\File;
use Illuminate\Support\Facades\Storage;

class RegulasiUpdate extends Controller
{
    protected $RegulasiModel;

    public function __construct()
    {
        $this->RegulasiModel = new Regulasi();
    }

    /**
     * @param int $idRegulasi
     */
    public function viewFormUpdateRegulasi(int $idRegulasi)
    {
        $data['dataRegulasi'] = $this->RegulasiModel->find($idRegulasi);
        return view('cms.regulasi.edit', $data);
    }

    /**
     * @param Request $request
     */
    public function onSubmitFormUpdateRegulasi(RegulasiUpdateRequest $request)
    {
        // Get data from form update
        $idRegulasi = $request->post('id');
        $nomor_peraturan = $request->post('nomor_peraturan');
        $judul_peraturan = $request->post('judul_peraturan');

        $dataRegulasi = $this->RegulasiModel->find($idRegulasi);
        
        if (request()->hasfile('file_peraturan')){

            $regulation = $request->file('file_peraturan');
            $filename = $regulation->getClientOriginalName();
            $regulation->storeAs('public/dokumen/regulasi', $filename);

            //delete old file peraturan
            Storage::delete('/public/dokumen/regulasi'.$filename);

            //update post with new file peraturan
            $dataRegulasi->nomor_peraturan = $nomor_peraturan;
            $dataRegulasi->judul_peraturan = $judul_peraturan;
            $dataRegulasi->nama_file = $filename;
            $dataRegulasi->file = $regulation;
            $dataRegulasi->save();

        } else {

            //update post without file peraturan
            $dataRegulasi->nomor_peraturan = $nomor_peraturan;
            $dataRegulasi->judul_peraturan = $judul_peraturan;
            $dataRegulasi->save();
        }

        return response()
            ->redirectToRoute('cms.regulasi.index')
            ->with('success', 'Data Berhasil Diupdate');
    }
}