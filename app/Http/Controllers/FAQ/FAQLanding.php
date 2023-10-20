<?php

namespace App\Http\Controllers\FAQ;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FAQLanding extends Controller
{
    protected $FAQModel;

    public function __construct()
    {
        $this->FAQModel = new Faq();
    }

    public function viewFAQ()
    {
        $data['listFaq'] = $this->FAQModel->where('status','1')->get();
        return view('ppid.faq.index', $data);
    }
}