<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori_informasi;
use App\Models\Kategori_prosedur;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Kategori_informasi::create([
            'nama_kategori' => 'Informasi Publik secara Berkala'
        ]);
        Kategori_informasi::create([
            'nama_kategori' => 'Informasi Serta Merta'
        ]);
        Kategori_informasi::create([
            'nama_kategori' => 'Informasi Setiap Saat'
        ]);
        Kategori_prosedur::create([
            'nama_kategori' => 'Permintaan Informasi Publik'
        ]);
        Kategori_prosedur::create([
            'nama_kategori' => 'Keberatan Informasi Publik'
        ]);
        Kategori_prosedur::create([
            'nama_kategori' => 'Sengketa Informasi Publik'
        ]);
    }
}
