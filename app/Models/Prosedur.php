<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prosedur extends Model
{
    use HasFactory;
    /*public function post()
    {
    return $this->belongsTo(Kategori_prosedur::class);
    }*/
    /*public function kategori_prosedur(): BelongsTo
    {
        //return $this->belongsTo(App\Kategori_prosedur);
        return $this->belongsTo(Kategori_prosedur::class, 'kategori_id');
        //return $this->hasMany(Kategori_prosedur::class);
    }*/

    protected $fillable = [
        'kategori',
        'uraian',
        'nama_form_1',
        'file_form_1',
        'nama_file_2',
        'file_form_2',
        'nama_file_3',
        'file_form_3',
        'status',
    ];
}
