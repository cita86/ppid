<?php

namespace App\Http\Controllers\Slider;

use App\Models\Informasi;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderIndex extends Controller
{
    protected $SliderModel;

    public function __construct()
    {
        $this->SliderModel = new Slider();
    }

    public function viewSliderIndex(Request $request)
    {
        if ($request->has('search')) {
            $data['listSlider'] = Slider::where('judul', 'LIKE', '%' . $request->search . '%')
                ->orWhere('deskripsi', 'LIKE', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $data['listSlider'] = Slider::orderBY('id', 'desc')
                ->paginate(5);
        }
        return view('cms.slider.index', $data);
    }
}
