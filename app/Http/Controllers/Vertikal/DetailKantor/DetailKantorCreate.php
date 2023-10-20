<?php

namespace App\Http\Controllers\Vertikal\DetailKantor;

use App\Models\Detail_kantor;
use App\Models\Vertikal;
use App\Http\Requests\Vertikal\Detail_Kantor\Detail_KantorCreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailKantorCreate extends Controller
{
    const STATUS_TIDAK_TAMPIL = 0;
    const STATUS_TAMPIL = 1;

    protected $Detail_kantorModel;

    public function __construct()
    {
        $this->Detail_kantorModel = new Detail_kantor();
    }

    public function viewFormCreateDetailKantor()
    {
        return view('cms.vertikal.detail_kantor.index');
    }

    public function onSubmitFormCreateDetailKantor(Detail_KantorCreateRequest $request )
    {
        $vertikal_id = $request->post('id');
        $nama_unit = $request->post('nama_unit');
        $alamat = $request->post('alamat');
        $telepon = $request->post('telepon');
        $whatsapp = $request->post('whatsapp');
        $email = $request->post('email');
        $situs_web = $request->post('situs_web');

        $this->Detail_kantorModel->vertikal_id = $vertikal_id;
        $this->Detail_kantorModel->nama_unit = $nama_unit;
        $this->Detail_kantorModel->alamat = $alamat;
        $this->Detail_kantorModel->telepon = $telepon;
        $this->Detail_kantorModel->whatsapp = $whatsapp;
        $this->Detail_kantorModel->email = $email;
        $this->Detail_kantorModel->situs_web = $situs_web;
        $this->Detail_kantorModel->status = self::STATUS_TAMPIL;;
        $this->Detail_kantorModel->save();

        return response()
            ->redirectToRoute('cms.vertikal.detail_kantor.index',$request->post('id'))
            ->with('success','File Berhasil Disimpan');
    }
}
