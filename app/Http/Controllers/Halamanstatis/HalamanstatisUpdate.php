<?php

namespace App\Http\Controllers\Halamanstatis;

use App\Models\Halamanstatis;
use Illuminate\Http\Request;
use App\Http\Requests\HalamanStatis\HalamanStatisUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use DB;

class HalamanstatisUpdate extends Controller
{
    protected $HalamanstatisModel;

    public function __construct()
    {
        $this->HalamanstatisModel = new Halamanstatis();
    }

    /**
     * @param int $idHalamanstatis
     */
    public function viewFormUpdateHalamanstatis(int $idHalamanstatis)
    {
        $data['dataHalamanstatis'] = $this->HalamanstatisModel->find($idHalamanstatis);
        return view('cms.halaman_statis.edit', $data);
    }

    /**
     * @param Request $request
     */
    public function onSubmitFormUpdateHalamanstatis(HalamanStatisUpdateRequest $request)
    {
        if ($request->post('kategori') == "profil") {
            // Get data from form update
            $idHalamanstatis = $request->post('id');
            $kategori = $request->post('kategori');
            $judul = $request->post('judul');
            $uraian_1_kanan = $request->post('uraian_kanan');
            $uraian_2_kiri = $request->post('uraian_kiri');

            $dataHalamanstatis = $this->HalamanstatisModel->find($idHalamanstatis);

            if (request()->hasfile('gambar_kanan')){
                $gambar_1 = $request->file('gambar_kanan');
                $filename_1 = $gambar_1->getClientOriginalName();
                $gambar_1->storeAs('public/dokumen/halamanstatis', $filename_1);
                
                //delete old gambar statis
                Storage::delete('/public/dokumen/halamanstatis'.$filename_1);
                
                //$dataHalamanstatis->kategori = $kategori;
                $dataHalamanstatis->judul = $judul;
                $dataHalamanstatis->uraian_1 = $uraian_1;
                $dataHalamanstatis->uraian_2 = $uraian_2;
                $dataHalamanstatis->file_1 = $gambar_1;
                $dataHalamanstatis->nama_file_1 = $filename_1;
                $dataHalamanstatis->save();
            } else {
                //$dataHalamanstatis->kategori = $kategori;
                $dataHalamanstatis->judul = $judul;
                $dataHalamanstatis->uraian_1 = $uraian_1;
                $dataHalamanstatis->uraian_2 = $uraian_2;
                $dataHalamanstatis->save();
            }

            if (request()->hasfile('gambar_kiri')){
                $gambar_2 = $request->file('gambar_kiri');
                $filename_2 = $gambar_2->getClientOriginalName();
                $gambar_2->storeAs('public/dokumen/halamanstatis', $filename_2);
                
                //delete old gambar statis
                Storage::delete('/public/dokumen/halamanstatis'.$filename_2);
                
                //$dataHalamanstatis->kategori = $kategori;
                $dataHalamanstatis->judul = $judul;
                $dataHalamanstatis->uraian_1 = $uraian_1;
                $dataHalamanstatis->uraian_2 = $uraian_2;
                $dataHalamanstatis->file_2 = $gambar_2;
                $dataHalamanstatis->nama_file_2 = $filename_2;
                $dataHalamanstatis->save();
            } else {
                //$dataHalamanstatis->kategori = $kategori;
                $dataHalamanstatis->judul = $judul;
                $dataHalamanstatis->uraian_1 = $uraian_1;
                $dataHalamanstatis->uraian_2 = $uraian_2;
                $dataHalamanstatis->save();
            }

        } else {
            //Update non Profil
            $idHalamanstatis = $request->post('id');
            $kategori = $request->post('kategori');
            $judul = $request->post('judul');
            $uraian_1 = $request->post('uraian_kanan');

            $dataHalamanstatis = $this->HalamanstatisModel->find($idHalamanstatis);

            if (request()->hasfile('gambar_kanan')){
                $gambar_1 = $request->file('gambar_kanan');
                $filename_1 = $gambar_1->getClientOriginalName();
                $gambar_1->storeAs('public/dokumen/halamanstatis', $filename_1);
                
                //delete old gambar statis
                Storage::delete('/public/dokumen/halamanstatis'.$filename_1);
                
                //$dataHalamanstatis->kategori = $kategori;
                $dataHalamanstatis->judul = $judul;
                $dataHalamanstatis->uraian_1 = $uraian_1;
                $dataHalamanstatis->file_1 = $gambar_1;
                $dataHalamanstatis->nama_file_1 = $filename_1;
                $dataHalamanstatis->save();
            } else {
                //$dataHalamanstatis->kategori = $kategori;
                $dataHalamanstatis->judul = $judul;
                $dataHalamanstatis->uraian_1 = $uraian_1;
                $dataHalamanstatis->save();
            }
        }

        return response()
            ->redirectToRoute('cms.halaman_statis.index')
            ->with('success', 'Data Berhasil Diupdate');
    }
}