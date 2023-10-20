<?php

namespace App\Http\Controllers\Slider;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SliderDelete extends Controller
{
    protected $SliderModel;

    public function __construct()
    {
        $this->SliderModel = new Slider();
    }

    public function onSubmitDeleteSlider(int $idSlider)
    {
        // Update Status
        $dataSlider = $this->SliderModel->find($idSlider);

        //delete image
         Storage::delete('storage/dokumen/sliders/'.$dataSlider->nama_file);

        //delete post
        $dataSlider->delete();
        // $dataSlider->status = '0';
        // $dataSlider->save();

        return response()
            ->redirectToRoute('cms.slider.index')
            ->with('success','Data Berhasil Dihapus');
    }
}