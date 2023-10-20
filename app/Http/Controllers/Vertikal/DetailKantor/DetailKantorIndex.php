<?php

namespace App\Http\Controllers\Vertikal\DetailKantor;

use App\Models\Vertikal;
use App\Models\Detail_kantor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailKantorIndex extends Controller
{
    protected $Detail_kantorModel, $VertikalModel;

    public function __construct()
    {
        $this->Detail_kantorModel = new Detail_kantor();
        $this->VertikalModel = new Vertikal();
    }

    /**
     * @param int $idVertikal
     */
    public function viewDetailKantorIndex($idVertikal)
    {
        $data['dataVertikal'] = $this->VertikalModel->find($idVertikal);

        $data['listDetailKantor'] = $this->Detail_kantorModel
            ->where('status',1)
            ->where('vertikal_id', $idVertikal)
            ->get();
        return view('cms.vertikal.detail_kantor.index', $data);
    }
}