<?php

namespace App\Http\Controllers\FAQ;

use App\Models\Faq;
use App\Http\Requests\FAQ\FAQCreateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class FAQCreate extends Controller
{
    const STATUS_TIDAK_TAMPIL = 0;
    const STATUS_TAMPIL = 1;

    protected $FAQModel;

    public function __construct()
    {
        $this->FAQModel = new FAQ();
    }

    public function viewFormCreateFAQ()
    {
        return view('cms.faq.create');
    }

    public function onSubmitFormCreateFAQ(FAQCreateRequest $request)
    {
        $pertanyaan = $request->post('pertanyaan');
        $editor_data = $request->post('jawaban');

        $this->FAQModel->pertanyaan = $pertanyaan;
        $this->FAQModel->jawaban = $editor_data;
        $this->FAQModel->status = self::STATUS_TAMPIL;
        $this->FAQModel->save();

        return response()
            ->redirectToRoute('cms.faq.index')
            ->with('success','Data FAQ Berhasil Disimpan');
    }
}