<?php

namespace App\Http\Controllers\Slider;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\SliderCreateRequest;
use Illuminate\Http\UploadedFile;
use App\Constant\FileUpload;
// use Illuminate\Support\Facades\Storage;

class SliderCreate extends Controller
{
    const STATUS_TIDAK_TAMPIL = 0;
    const STATUS_TAMPIL = 1;

    protected $sliderModel;
    protected $fileUpload;

    public function __construct()
    {
        $this->sliderModel = new Slider();
        $this->fileUpload = new FileUpload();
    }

    public function viewFormCreateSlider()
    {
        return view('cms.slider.create');
    }

    public function onSubmitFormCreateSlider(SliderCreateRequest $request)
    {
        $judul = $request->post('judul');
        $deskripsi = $request->post('deskripsi');
        $status = $request->post('status') == true ? '1' : '0';
        if (request()->hasfile('gambar')) {
            $image = $request->file('gambar');
            // $extension = $image->clientExtension();
            $filename = $this->fileUpload->upload("Slider", $request->file('gambar'));

            $filename = $image->getClientOriginalName();
            $image->storeAs('public/dokumen/sliders', $filename);
        }

        $this->sliderModel->judul = $judul;
        $this->sliderModel->deskripsi = $deskripsi;
        $this->sliderModel->file = "Slider/" . $filename;
        $this->sliderModel->nama_file = $filename;
        $this->sliderModel->status = $status;
        $this->sliderModel->save();

        return response()
            ->redirectToRoute('cms.slider.index')
            ->with('success', 'Data Slider Berhasil Disimpan');
    }
}
