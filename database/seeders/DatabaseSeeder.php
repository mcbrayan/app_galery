<?php

namespace Database\Seeders;

use App\Models\Etiqueta;
use App\Models\Imagen;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        Storage::deleteDirectory('public/imagen');
        Storage::makeDirectory('public/imagen');

        User::factory()->create([
            'name' => 'Brayan sierra',
            'email' => 'sbrayandres@gmail.com',
            'password' => Hash::make('292071'),
        ]);

        $this->call(EtiquetaSeeder::class);
        $this->call(ImagenSeeder::class);
    }
}
