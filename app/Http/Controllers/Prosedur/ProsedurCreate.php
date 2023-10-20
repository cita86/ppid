<?php

namespace App\Http\Controllers\Prosedur;

use App\Models\Prosedur;
//use App\Models\Kategori_prosedur;
use Illuminate\Http\Request;
use App\Http\Requests\Prosedur\ProsedurCreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\File;

class ProsedurCreate extends Controller
{
    const STATUS_TIDAK_TAMPIL = 0;
    const STATUS_TAMPIL = 1;

    protected $ProsedurModel;

    public function __construct()
    {
        $this->ProsedurModel = new Prosedur();
    }

    public function viewFormCreateProsedur()
    {
        //$kategori_prosedurs = Kategori_prosedur::all();
        //return view('cms.prosedur.create', compact('kategori_prosedurs'));
        return view('cms.prosedur.create');
    }

    public function onSubmitFormCreateProsedur(ProsedurCreateRequest $request)
    {
        if ($request->post('kategori') == "Sengketa Informasi Publik") {
            $kategori = $request->post('kategori');
            $uraian = $request->post('uraian');
            $this->ProsedurModel->kategori = $kategori;
            $this->ProsedurModel->uraian = $uraian;
            $this->ProsedurModel->status = self::STATUS_TAMPIL;
            $this->ProsedurModel->save();
        } else {
            $kategori = $request->post('kategori');
            $uraian = $request->post('uraian');
            //$uraian_prosedur = $request->post('uraian');
            //$uraian = strip_tags($uraian_prosedur);

            $form_1 = $request->file('formulir_1');
            $filename_1 = $form_1->getClientOriginalName();
            $form_1->storeAs('public/dokumen/prosedur', $filename_1);
            $form_2 = $request->file('formulir_2');
            $filename_2 = $form_2->getClientOriginalName();
            $form_2->storeAs('public/dokumen/prosedur', $filename_2);
            $form_3 = $request->file('formulir_3');
            $filename_3 = $form_3->getClientOriginalName();
            $form_3->storeAs('public/dokumen/prosedur', $filename_3);

            $this->ProsedurModel->kategori = $kategori;
            $this->ProsedurModel->uraian = $uraian;
            $this->ProsedurModel->nama_form_1 = $filename_1;
            $this->ProsedurModel->file_form_1 = $form_1;
            $this->ProsedurModel->nama_form_2 = $filename_2;
            $this->ProsedurModel->file_form_2 = $form_2;
            $this->ProsedurModel->nama_form_3 = $filename_3;
            $this->ProsedurModel->file_form_3 = $form_3;
            $this->ProsedurModel->status = self::STATUS_TAMPIL;
            $this->ProsedurModel->save();
        }
        return response()
            ->redirectToRoute('cms.prosedur.index')
            ->with('success', 'Data Prosedur Berhasil Disimpan');
    }
}
