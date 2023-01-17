<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Ead;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CourseController extends Controller
{

    public function index()
    {
        $myCourses = User::whereHas('eads', function($q){
            $q->where('user_id', Auth::user()->id);
        })
        ->get();

        return view('students.course.index', compact('myCourses'));
    }

    public function all_courses()
    {
        $courses = Ead::whereDoesntHave('users', function($q){
            $q->where('user_id', Auth::user()->id);
        })
        ->where('active', true)
        ->where('expiration_date', '>=', Carbon::now()->format('Y-m-d'))
        ->orWhere('expiration_date', null)
        ->orderBy('expiration_date', 'ASC')
        ->limit(8)
        ->get();

        return view('students.course.all-courses', compact('courses'));
    }
}
