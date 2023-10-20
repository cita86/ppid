<?php

namespace App\Http\Controllers\Vertikal;

use App\Models\Vertikal;
use Illuminate\Http\Request;
use App\Http\Requests\Vertikal\VertikalCreateRequest;
use App\Http\Controllers\Controller;

class VertikalCreate extends Controller
{
    const STATUS_TIDAK_TAMPIL = 0;
    const STATUS_TAMPIL = 1;

    protected $VertikalModel;

    public function __construct()
    {
        $this->VertikalModel = new Vertikal();
    }

    public function viewFormCreateVertikal()
    {
        return view('cms.vertikal.create', $data);
    }

    public function onSubmitFormCreateVertikal(VertikalCreateRequest $request)
    {
        $nama = $request->post('nama');
        
        $this->VertikalModel->nama = $nama;
        $this->VertikalModel->status = self::STATUS_TAMPIL;
        $this->VertikalModel->save();

        return response()
            ->redirectToRoute('cms.vertikal.index')
            ->with('success','Data Unit Eselon II Berhasil Disimpan');
    }
}