<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class ConfigsServiceProvider extends ServiceProvider

{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $hasConfigs = [];

        if(Schema::hasTable('configs')){
            if(1 === DB::table('configs')->count()){
                $hasConfigs = \App\Models\Config::first()->toArray();
                $hasConfigs['whatsapp_url'] = $this->whatsappUrl($hasConfigs['whatsapp']);
            }
        }
        config()->set('configs', $hasConfigs);
    }

    private function whatsappUrl($whatsapp)
    {
        $whatsapp = preg_replace('/[^0-9]/', '', $whatsapp);
        return 'https://api.whatsapp.com/send?phone=55'.$whatsapp;
    }
}
