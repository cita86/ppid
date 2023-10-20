<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Halamanstatis extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategori',
        'judul',
        'uraian_1',
        'uraian_2',
        'nama_file_1',
        'file_1',
        'nama_file_2',
        'file_2',
        'status',
    ];
}
