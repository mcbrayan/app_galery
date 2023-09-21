<?php

namespace Database\Seeders;

use App\Models\Etiqueta;
use App\Models\Imagen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Imagen::factory(50)->create();
    }
}
