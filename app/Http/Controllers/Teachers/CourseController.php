<?php

namespace App\Http\Controllers\Teachers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class CourseController extends Controller
{
    public function index()
    {
        if(Gate::denies('manage-courses')){
            abort(403, 'Sem permissão');
        }
        return view('teachers.courses.index');
    }
}
