<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{

    public function index()
    {
        $banners = Banner::orderBy('id', 'DESC')->paginate(10);
        return view('admin.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(BannerRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('banner');
        $data['image_mobile'] = $request->file('image_mobile')->store('banner');
        Banner::create($data);
        return redirect()->route('admin.banners.index')->banner('Banner criado com sucesso!');
    }

    public function show($id)
    {
        return redirect()->route('admin.banners.index');
    }

    public function edit($banner)
    {
        $banner = Banner::findOrFail($banner);
        return view('admin.banner.edit', compact('banner'));
    }

    public function update(BannerRequest $request, $banner)
    {
        $banner = Banner::findOrFail($banner);
        $data = $request->all();

        $data['image'] = $banner->image;
        if ($request->hasFile('image')) {
            Storage::delete($banner->image);
            $data['image'] = $request->file('image')->store('banner');
        }

        $data['image_mobile'] = $banner->image_mobile;
        if ($request->hasFile('image_mobile')) {
            Storage::delete($banner->image_mobile);
            $data['image_mobile'] = $request->file('image_mobile')->store('banner');
        }

        $data['expiration_date'] = $data['expiration_date'] ? $data['expiration_date'] : null;

        $banner->update($data);

        return redirect()->route('admin.banners.index')->banner('Banner atualizado com sucesso!');

    }

    public function destroy($banner)
    {
        try{
            $banner = Banner::findOrFail($banner);
            Storage::disk('local')->delete($banner->image);
            Storage::disk('local')->delete($banner->image_mobile);
            $banner->delete();
            return redirect()->route('admin.banners.index')->banner('Banner excluído com sucesso!');
        }catch(\Exception $e){
            return redirect()->route('admin.banners.index')->dangerBanner('Não foi possível remover este banner!');
        }
    }
}
