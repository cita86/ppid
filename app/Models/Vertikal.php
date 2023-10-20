<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vertikal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'status',
    ];

    public function kantor(){
    	return $this->hasMany('App\Models\Detail_kantor');
    }
}
