<?php

namespace App\Http\Controllers\Vertikal\DetailKantor;

use App\Models\Detail_kantor;
use App\Models\Vertikal;
use App\Http\Requests\Vertikal\Detail_Kantor\Detail_KantorUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailKantorUpdate extends Controller
{
    protected $Detail_kantorModel, $VertikalModel;

    public function __construct()
    {
        $this->VertikalModel = new Vertikal();
        $this->Detail_kantorModel = new Detail_kantor();
    }

    /**
     * @param int $idFile, $idInformasi
     */

    /**
     * @param Request $request
     */
    public function onSubmitFormUpdateDetailKantor(Detail_KantorUpdateRequest $request)
    {
        // Get data from form update
        $idVertikal = $request->post('idVertikal');
        $idDetailKantor = $request->post('id');
        $nama_unit = $request->post('nama_unit');
        $alamat = $request->post('alamat');
        $telepon = $request->post('telepon');
        $whatsapp = $request->post('whatsapp');
        $email = $request->post('email');
        $situs_web = $request->post('situs_web');
        
        $dataDetailKantor = $this->Detail_kantorModel->find($idDetailKantor);
        
        $dataDetailKantor->nama_unit= $nama_unit;
        $dataDetailKantor->alamat = $alamat;
        $dataDetailKantor->telepon = $telepon;
        $dataDetailKantor->whatsapp = $whatsapp;
        $dataDetailKantor->email = $email;
        $dataDetailKantor->situs_web = $situs_web;
        $dataDetailKantor->save();
        
        return response()
            ->redirectToRoute('cms.vertikal.detail_kantor.index', $idVertikal)
            ->with('success', 'Data Berhasil Diupdate');
    }
}