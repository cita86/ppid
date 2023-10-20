<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regulasi extends Model
{
    use HasFactory;
   
    
   protected $fillable = [
       'nomor_peraturan',
       'judul_peraturan',
       'nama_file',
       'file',
        'status',
   ];
}
