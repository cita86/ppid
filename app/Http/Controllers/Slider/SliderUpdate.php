<?php

namespace App\Http\Controllers\Slider;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\SliderUpdateRequest;
use Illuminate\Support\Facades\Storage;

class SliderUpdate extends Controller
{
    protected $SliderModel;

    public function __construct()
    {
        $this->SliderModel = new Slider();
    }

    /**
     * @param int $idSlider
     */
    public function viewFormUpdateSlider(int $idSlider)
    {
        $data['dataSlider'] = $this->SliderModel->find($idSlider);
        return view('cms.slider.edit', $data);
    }

    /**
     * @param Request $request
     */
    public function onSubmitFormUpdateSlider(SliderUpdateRequest $request)
    {
        // Get data from form update
        $idSlider = $request->post('id');
        $judul = $request->post('judul');
        $deskripsi = $request->post('deskripsi');
        $status = $request->post('status') == true ? '1':'0';
        $dataSlider = $this->SliderModel->find($idSlider);
        if (request()->hasfile('gambar')){
            $image = $request->file('gambar');
            $extension = $image->clientExtension();
            $filename = time().'.'.$extension;
            $image->storeAs('public/dokumen/sliders', $filename);

            //delete old image
            Storage::delete('public/dokumen/sliders/'.$dataSlider->nama_file);

            //update post with new image
            $dataSlider->judul = $judul;
            $dataSlider->deskripsi = $deskripsi;
            $dataSlider->file = $image;
            $dataSlider->nama_file = $filename;
            $dataSlider->status = $status;
            $dataSlider->save();
        } else {
            //update post with new image
            $dataSlider->judul = $judul;
            $dataSlider->deskripsi = $deskripsi;
            $dataSlider->status = $status;
            $dataSlider->save();
        }
        
        return response()
            ->redirectToRoute('cms.slider.index')
            ->with('success', 'Data Berhasil Diupdate');
    }
}