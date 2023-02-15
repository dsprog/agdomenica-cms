<?php

namespace App\Http\Controllers\Site;

use App\Models\About;
use App\Models\Banner;
use App\Models\Contact;
use App\Mail\ContactSend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Models\Client;

class SiteController extends Controller
{
    public function __construct()
    {
        $config = DB::table('configs')->first();
        view()->share('config', $config);
    }

    public function index()
    {
        if (Auth::check()) {
            $banners = Banner::where('published_at', '<=', date('Y-m-d'))
                ->whereRaw('(expiration_date is NULL OR expiration_date >= CURDATE())')
                ->where('active', 1)->get();

            $about = About::first();
            $clients = Client::all();

            return view('site.home', compact('banners', 'about', 'clients'));
        }else{
            return view('site.embreve');
        }
    }

    public function sobre()
    {
        $about = About::first();
        return view('site.sobre', compact('about'));
    }

    public function cursos()
    {
        $cursos =  DB::table('courses')
            ->where('active','=','1')
            ->where('id','<>','1')
            ->orderBy('published_at', 'asc')
            ->paginate(12);
        return view('site.cursos', compact('cursos'));
    }

    public function curso($slug)
    {
        $curso = DB::table('courses')
            ->where('slug', $slug)
            ->where('active','=','1')
            ->first();
        return view('site.curso', compact('curso'));
    }

    public function posgraduacao()
    {

        $curso = DB::table('courses')->find(1);
        return view('site.posgraduacao', compact('curso'));
    }

    public function contato()
    {
        return view('site.contato');
    }

    public function send(ContactRequest $request)
    {
        $data = $request->all();
        Contact::create($data);

        Mail::to(config('configs.email'))
            ->send(new ContactSend($data));

        return redirect()->back()->banner('Mensagem enviada com sucesso!');
    }

    public function teste()
    {
        return view('site.teste');
    }


}
