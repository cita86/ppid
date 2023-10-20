<?php

namespace App\Http\Controllers\Prosedur;

use App\Models\Prosedur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProsedurDelete extends Controller
{
    protected $ProsedurModel;

    public function __construct()
    {
        $this->ProsedurModel = new Prosedur();
    }

    public function onSubmitDeleteProsedur(int $idProsedur)
    {
        // Update Status
        $dataProsedur = $this->ProsedurModel->find($idProsedur);
        $dataProsedur->status = '0';
        $dataProsedur->save();

        return response()
            ->redirectToRoute('cms.prosedur.index')
            ->with('success','Data Berhasil Dihapus');
    }
}