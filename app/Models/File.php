<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'informasi_id',
        'link', 
        'jenis_dokumen',
        'nama_file',
        'file',
        'status',
    ];

    public function informasi(){
    	return $this->belongsTo('App\Models\Informasi');
    }
}
