<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AboutRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = \App\Models\About::first();
        return view('admin.about.index', compact('about'));
    }

    public function update(AboutRequest $request, $about)
    {
        $about = \App\Models\About::findOrFail($about);
        $data = $request->all();

        $data['image'] = $about->image;
        if ($request->hasFile('image')) {
            Storage::delete($about->image);
            $data['image'] = $request->file('image')->store('empresa');
        }

        $data['image2'] = $about->image2;
        if ($request->hasFile('image2')) {
            Storage::delete($about->image2);
            $data['image2'] = $request->file('image2')->store('empresa');
        }

        $about->update($data);
        return redirect()->route('admin.about.index')
            ->banner('Empresa atualizada com sucesso!');
    }
}
