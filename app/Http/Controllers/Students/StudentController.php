<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Discipline;
use App\Models\Ead;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        $myCourses = Ead::whereHas('users', function($q){
            $q->where('user_id', Auth::user()->id);
        })->where('expiration_date', '>=', Carbon::now()->format('Y-m-d'))
        ->orWhere('expiration_date', null)
        ->get();
        
        $courses = Ead::whereDoesntHave('users', function($q){
            $q->where('user_id', Auth::user()->id);
        })->where('active', true)     
        ->orderBy('expiration_date', 'ASC')
        ->limit(8)
        ->get();
            return view('students.index', compact('myCourses','courses'));
    }

    public function show(Ead $ead)
    {
        $course = Ead::findOrFail($ead->id);
        $hasActive = $course->whereHas('users', function($q) use ($ead){
            $q->where('user_id', Auth::user()->id)
            ->where('ead_id', $ead->id)
            ->where('active', true);
        })->get();
        $approve = $course->whereHas('users', function($q) use ($ead){
            $q->where('user_id', Auth::user()->id)
            ->where('ead_id', $ead->id)
            ->where('active', false);
        })->get();
        $disciplines = Discipline::where('active', true)->where('ead_id', $ead->id)->whereHas('lessons', function ($q)use($ead){
            $q->where('ead_id', $ead->id)->where('active', true)
            ->where('expiration_date', '>=', Carbon::now()->format('Y-m-d'))
            ->orWhere('expiration_date', null);
        })->get();
            return view('students.show', compact('course', 'hasActive', 'approve', 'disciplines'));
    }

    public function store(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->eads()->attach($request->ead_id);
            return redirect()->route('studient.index')->with('msg', 'Pedido de Aprovação enviado com Sucesso!!');
    }
}
