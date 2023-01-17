<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConfigRequest;

class ConfigController extends Controller
{
    public function index()
    {
        $config = \App\Models\Config::first();
        return view('admin.config.index', compact('config'));
    }

    public function update(ConfigRequest $request, $config)
    {
        $config = \App\Models\Config::findOrFail($config);
        $data = $request->all();
        $config->update($data);
        return redirect()->route('admin.config.index')
            ->banner('Configurações atualizadas com sucesso!');
    }
}
