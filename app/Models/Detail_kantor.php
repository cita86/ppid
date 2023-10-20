<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail_kantor extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'vertikal_id',
        'nama_unit',
        'alamat',
        'telepon',
        'whatsapp',
        'email',
        'situs_web',
        'status'
    ];

    public function vertikal(){
    	return $this->belongsTo('App\Models\Vertikal');
    }
}
