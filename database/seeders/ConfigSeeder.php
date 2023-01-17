<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Config::create([
            'address' => 'digite o endereço',
            'address_number' => '123456',
            'address_city' => 'digite a cidade',
            'address_state' => 'SP',
            'address_cep' => '00000-000',
            'address_complement' => '',
            'phone' => '(11) 99999-9999',
            'phone2' => '(11) 99999-9999',
            'email' => 'digite o email',
            'facebook' => 'digite o facebook',
            'instagram' => 'digite o instagram',
            'linkedin' => 'digite o linkedin',
            'whatsapp' => '(11) 99999-9999',
            'map' => 'digite o mapa'
        ]);
    }
}
