<?php

namespace App\Http\Controllers\Vertikal;

use App\Models\Vertikal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VertikalDelete extends Controller
{
    protected $VertikalModel;

    public function __construct()
    {
        $this->VertikalModel = new Vertikal();
    }

    public function onSubmitDeleteVertikal(int $idVertikal)
    {
        // Update Status
        $dataVertikal = $this->VertikalModel->find($idVertikal);
        $dataVertikal->status = '0';
        $dataVertikal->save();

        return response()
            ->redirectToRoute('cms.vertikal.index')
            ->with('success','Data Berhasil Dihapus');
    }
}