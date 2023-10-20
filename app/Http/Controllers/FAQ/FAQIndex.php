<?php

namespace App\Http\Controllers\FAQ;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FAQIndex extends Controller
{
    protected $FAQModel;

    public function __construct()
    {
        $this->FAQModel = new Faq();
    }

    public function viewFAQIndex(Request $request)
    {
        if ($request->has('search')) {
            $data['listFaq'] = Faq::where('pertanyaan', 'LIKE', '%' . $request->search . '%')
                ->orWhere('jawaban', 'LIKE', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $data['listFaq'] = Faq::where('status', '1')
                ->orderBY('id', 'desc')
                ->paginate(5);
        }
        return view('cms.faq.index', $data);
    }
}
