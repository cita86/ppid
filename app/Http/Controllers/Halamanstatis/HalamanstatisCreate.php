<?php

namespace App\Http\Controllers\Halamanstatis;

use App\Models\Halamanstatis;
use Illuminate\Http\Request;
use App\Http\Requests\HalamanStatis\HalamanStatisCreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use DB;

class HalamanstatisCreate extends Controller
{
    const STATUS_TIDAK_TAMPIL = 0;
    const STATUS_TAMPIL = 1;

    protected $HalamanstatisModel;

    public function __construct()
    {
        $this->HalamanstatisModel = new Halamanstatis();
    }

    public function viewFormCreateHalamanstatis()
    {
        return view('cms.halaman_statis.create');
    }

    public function onSubmitFormCreateHalamanstatis(HalamanStatisCreateRequest $request)
    {
        if ($request->post('kategori') == "profil") {
            
            $kategori = $request->post('kategori');
            $judul = $request->post('judul');
            $uraian_1_kanan = $request->post('uraian_kanan');
            $uraian_2_kiri = $request->post('uraian_kiri');
            
            //Input Gambar Kanan
            if (request()->hasfile('gambar_kanan')){
                $gambar_1 = $request->file('gambar_kanan');
                $filename_1 = $gambar_1->getClientOriginalName();
                $gambar_1->storeAs('public/dokumen/halamanstatis', $filename_1);

                $this->HalamanstatisModel->kategori = $kategori;
                $this->HalamanstatisModel->judul = $judul;
                $this->HalamanstatisModel->uraian_1 = $uraian_1_kanan;
                $this->HalamanstatisModel->uraian_2 = $uraian_2_kiri;
                $this->HalamanstatisModel->file_1 = $gambar_1;
                $this->HalamanstatisModel->nama_file_1 = $filename_1;
                $this->HalamanstatisModel->status = self::STATUS_TAMPIL;
                $this->HalamanstatisModel->save();
            } else {
                $this->HalamanstatisModel->kategori = $kategori;
                $this->HalamanstatisModel->judul = $judul;
                $this->HalamanstatisModel->uraian_1 = $uraian_1_kanan;
                $this->HalamanstatisModel->uraian_2 = $uraian_2_kiri;
                $this->HalamanstatisModel->status = self::STATUS_TAMPIL;
                $this->HalamanstatisModel->save();
                
            }   
        
            if (request()->hasfile('gambar_kiri')){
                $gambar_2 = $request->file('gambar_kiri');
                $filename_2 = $gambar_2->getClientOriginalName();
                $gambar_2->storeAs('public/dokumen/halamanstatis', $filename_2);

                $this->HalamanstatisModel->kategori = $kategori;
                $this->HalamanstatisModel->judul = $judul;
                $this->HalamanstatisModel->uraian_1 = $uraian_1_kanan;
                $this->HalamanstatisModel->uraian_2 = $uraian_2_kiri;
                $this->HalamanstatisModel->file_2 = $gambar_2;
                $this->HalamanstatisModel->nama_file_2 = $filename_2;
                $this->HalamanstatisModel->status = self::STATUS_TAMPIL;
                $this->HalamanstatisModel->save();
            } else {
                $this->HalamanstatisModel->kategori = $kategori;
                $this->HalamanstatisModel->judul = $judul;
                $this->HalamanstatisModel->uraian_1 = $uraian_1_kanan;
                $this->HalamanstatisModel->uraian_2 = $uraian_2_kiri;
                $this->HalamanstatisModel->status = self::STATUS_TAMPIL;
                $this->HalamanstatisModel->save();
            }

        } else  {
            $kategori = $request->post('kategori');
            $judul = $request->post('judul');
            $uraian_1_kanan = $request->post('uraian_kanan');
            
            //Input Gambar Kanan
            if (request()->hasfile('gambar_kanan')){
                $gambar_1 = $request->file('gambar_kanan');
                $filename_1 = $gambar_1->getClientOriginalName();
                $gambar_1->storeAs('public/dokumen/halamanstatis', $filename_1);

                $this->HalamanstatisModel->kategori = $kategori;
                $this->HalamanstatisModel->judul = $judul;
                $this->HalamanstatisModel->uraian_1 = $uraian_1_kanan;
                $this->HalamanstatisModel->file_1 = $gambar_1;
                $this->HalamanstatisModel->nama_file_1 = $filename_1;
                $this->HalamanstatisModel->status = self::STATUS_TAMPIL;
                $this->HalamanstatisModel->save();
            } else {
                $this->HalamanstatisModel->kategori = $kategori;
                $this->HalamanstatisModel->judul = $judul;
                $this->HalamanstatisModel->uraian_1 = $uraian_1_kanan;
                $this->HalamanstatisModel->status = self::STATUS_TAMPIL;
                $this->HalamanstatisModel->save(); 
            }   
        } 
        
        return response()
            ->redirectToRoute('cms.halaman_statis.index')
            ->with('success','Data Halaman Statis Berhasil Disimpan');
    }
}