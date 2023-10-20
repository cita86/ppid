<?php

namespace App\Http\Controllers\Vertikal\DetailKantor;

use App\Models\Detail_kantor;
use App\Models\Vertikal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailKantorDelete extends Controller
{
    protected $Detail_kantorModel;

    public function __construct()
    {
        $this->Detail_kantorModel = new Detail_kantor();
    }

    public function onSubmitDeleteDetailKantor(Request $request, int $idDetailKantor)
    {
        // Update Status
        $dataDetailKantor = $this->Detail_kantorModel->find($idDetailKantor);
        $dataDetailKantor->status = '0';
        $dataDetailKantor->save();

        return response()
            ->redirectToRoute('cms.vertikal.detail_kantor.index', $request->post('id'))
            //->redirectToRoute('cms.vertikal.detail_kantor.index', $idVertikal)
            ->with('success','Data Berhasil Dihapus');
    }
}