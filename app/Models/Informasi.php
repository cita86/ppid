<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Informasi extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'kategori',
        'judul',
        'status',
    ];

    public function files()
    {
        return $this->hasMany('App\Models\File');
    }

    public function toSearchableArray()
    {
        return [
            'kategori' => $this->kategori,
            'judul' => $this->judul
        ];
    }
}
