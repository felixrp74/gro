<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=> 'Guia',
            'slug'=> 'guia',
        ]);
        Category::create([
            'name'=> 'Procesos',
            'slug'=> 'procesos',
        ]);
        Category::create([
            'name'=> 'Documentos',
            'slug'=> 'documentos',
        ]);
        Category::create([
            'name'=> 'General',
            'slug'=> 'general',
        ]);

    }
}
