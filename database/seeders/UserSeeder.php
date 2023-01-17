<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Daniel Santos',
            'email' => 'dsprog@gmail.com',
            'password' => bcrypt('mudar123'),
            'role_id' => 1
        ]);
        User::create([
            'name' => 'Robson',
            'email' => 'robsonlb8@gmail.com',
            'password' => bcrypt('mudar123'),
            'role_id' => 1
        ]);
        User::create([
            'name' => 'Estudante',
            'email' => 'estudante@gmail.com',
            'password' => bcrypt('mudar123'),
            'role_id' => 2
        ]);
        User::create([
            'name' => 'Professor',
            'email' => 'professor@gmail.com',
            'password' => bcrypt('mudar123'),
            'role_id' => 3
        ]);
    }
}
