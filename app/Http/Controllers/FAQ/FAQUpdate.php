<?php

namespace App\Http\Controllers\FAQ;

use App\Models\Faq;
use App\Http\Requests\FAQ\FAQUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class FAQUpdate extends Controller
{
    protected $FAQModel;

    public function __construct()
    {
        $this->FAQModel = new Faq();
    }

    /**
     * @param int $idFAQ
     */
    public function viewFormUpdateFAQ(int $idFAQ)
    {
        $data['dataFAQ'] = $this->FAQModel->find($idFAQ);
        return view('cms.faq.edit', $data);
    }

    /**
     * @param Request $request
     */
    public function onSubmitFormUpdateFAQ(FAQUpdateRequest $request)
    {
        // Get data from form update
        $idFAQ = $request->post('id');
        $pertanyaan = $request->post('pertanyaan');
        $jawaban = $request->post('jawaban');
        //$jawaban_editor = $request->post('jawaban');
        //$jawaban = strip_tags($jawaban_editor);

        $dataFAQ = $this->FAQModel->find($idFAQ);
        $dataFAQ->pertanyaan = $pertanyaan;
        $dataFAQ->jawaban = $jawaban;
        
        $dataFAQ->save();

        return response()
            ->redirectToRoute('cms.faq.index')
            ->with('success', 'Data Berhasil Diupdate');
    }
}