<?php

namespace App\Http\Controllers\Vertikal;

use App\Models\Vertikal;
use App\Http\Requests\Vertikal\VertikalUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VertikalUpdate extends Controller
{
    protected $VertikalModel;

    public function __construct()
    {
        $this->VertikalModel = new Vertikal();
    }

    /**
     * @param Request $request
     */

    public function viewFormUpdateVertikal(int $idVertikal)
    {
        $data['dataVertikal'] = $this->VertikalModel->find($idVertikal);
        return view('cms.vertikal.edit', $data);
    }

    public function onSubmitFormUpdateVertikal(VertikalUpdateRequest $request)
    {
        // Get data from form update
        $idVertikal = $request->post('id');
        $nama = $request->post('nama');
        
        $dataVertikal = $this->VertikalModel->find($idVertikal);
        $dataVertikal->nama = $nama;
        $dataVertikal->save();
        
        return response()
            ->redirectToRoute('cms.vertikal.index', $idVertikal)
            ->with('success', 'Data Berhasil Diupdate');
    }
}