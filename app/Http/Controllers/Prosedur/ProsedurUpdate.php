<?php

namespace App\Http\Controllers\Prosedur;

use App\Models\Prosedur;
//use App\Models\Kategori_prosedur;
use Illuminate\Http\Request;
use App\Http\Requests\Prosedur\ProsedurUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\File;
use Illuminate\Support\Facades\Storage;

class ProsedurUpdate extends Controller
{
    protected $ProsedurModel;

    public function __construct()
    {
        $this->ProsedurModel = new Prosedur();
    }

    /**
     * @param int $idProsedur
     */
    public function viewFormUpdateProsedur(int $idProsedur)
    {
        //$kategori_prosedurs=Kategori_prosedur::all();
        $data['dataProsedur'] = $this->ProsedurModel->find($idProsedur);
        return view('cms.prosedur.edit', $data);
        //return view('cms.prosedur.edit', $data, compact('kategori_prosedurs'));
        //return view('cms.prosedur.edit', compact('kategori_prosedurs'));
    }

    /**
     * @param Request $request
     */
    public function onSubmitFormUpdateProsedur(ProsedurUpdateRequest $request)
    {
        if ($request->post('kategori') == "Sengketa Informasi Publik") {
            // Get data from form update
            $idProsedur = $request->post('id');
            $kategori = $request->post('kategori');
            $uraian = $request->post('uraian');

            $dataProsedur = $this->ProsedurModel->find($idProsedur);
            $dataProsedur->uraian = $uraian;
            $dataProsedur->save();
        } else {
            //Update non Sengketa Informasi Publik
            $idProsedur = $request->post('id');
            $kategori = $request->post('kategori');
            $uraian = $request->post('uraian');

            $dataProsedur = $this->ProsedurModel->find($idProsedur);

            if (request()->hasfile('formulir_1')) {
                $form_1 = $request->file('formulir_1');
                $filename_1 = $form_1->getClientOriginalName();
                $form_1->storeAs('public/dokumen/prosedur', $filename_1);

                //delete old document
                Storage::delete('/public/dokumen/prosedur' . $filename_1);

                //update post with new formulir 1
                //$dataProsedur->kategori = $kategori;
                $dataProsedur->uraian = $uraian;
                $dataProsedur->nama_form_1 = $filename_1;
                $dataProsedur->file_form_1 = $form_1;
                $dataProsedur->save();
            } else {
                //$dataProsedur->kategori = $kategori;
                $dataProsedur->uraian = $uraian;
                $dataProsedur->save();
            }

            if (request()->hasfile('formulir_2')) {
                $form_2 = $request->file('formulir_2');
                $filename_2 = $form_2->getClientOriginalName();
                $form_2->storeAs('public/dokumen/prosedur', $filename_2);

                //delete old document
                Storage::delete('/public/dokumen/prosedur' . $filename_2);

                //update post with new formulir 2
                //$dataProsedur->kategori = $kategori;
                $dataProsedur->uraian = $uraian;
                $dataProsedur->nama_form_2 = $filename_2;
                $dataProsedur->file_form_2 = $form_2;
                $dataProsedur->save();
            } else {
                //$dataProsedur->kategori = $kategori;
                $dataProsedur->uraian = $uraian;
                $dataProsedur->save();
            }

            if (request()->hasfile('formulir_3')) {
                $form_3 = $request->file('formulir_3');
                $filename_3 = $form_3->getClientOriginalName();
                $form_3->storeAs('public/dokumen/prosedur', $filename_3);

                //delete old document
                Storage::delete('/public/dokumen/prosedur' . $filename_3);

                //update post with new formulir 3
                //$dataProsedur->kategori = $kategori;
                $dataProsedur->uraian = $uraian;
                $dataProsedur->nama_form_3 = $filename_3;
                $dataProsedur->file_form_3 = $form_3;
                $dataProsedur->save();
            } else {
                //$dataProsedur->kategori = $kategori;
                $dataProsedur->uraian = $uraian;
                $dataProsedur->save();
            }
        }

        return response()
            ->redirectToRoute('cms.prosedur.index')
            ->with('success', 'Data Berhasil Diupdate');
    }
}
