<?php

namespace App\Http\Controllers\FAQ;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FAQDelete extends Controller
{
    protected $FAQModel;

    public function __construct()
    {
        $this->FAQModel = new Faq();
    }

    public function onSubmitDeleteFAQ(int $idFAQ)
    {
        // Update Status
        $dataFAQ = $this->FAQModel->find($idFAQ);
        $dataFAQ->status = '0';
        $dataFAQ->save();

        return response()
            ->redirectToRoute('cms.faq.index')
            ->with('success','Data Berhasil Dihapus');
    }
}