<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\About::create([
            'resume' => 'Resumo da Home',
            'about' => 'História da empresa',
            'image' => '',
            'image2' => '',
        ]);
    }
}
