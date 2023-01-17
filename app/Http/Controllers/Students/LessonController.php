<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\Discipline;
use App\Models\Ead;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class LessonController extends Controller
{
    public function __construct()
    {
        /*
        if(Gate::denies('manage-lessons')){
            abort(403, 'Sem permissão');
        }
        */
    }

    public function index()
    {
        return redirect()->back();
    }

    public function show(Request $request)
    {
        $eadId = $request->ead;
        $disciplineId = $request->discipline;
        $lessonId = $request->lesson;
        $course = Discipline::with('ead')->findOrFail($disciplineId);
        $lesson = Lesson::with('users')->findOrFail($lessonId);
        $lessons = Lesson::where('ead_id', $eadId)->where('discipline_id', $disciplineId)
            ->with('users')->where('active', true)->get();

        $this->VerifyCourseUser($eadId);

        return view('students.lesson.lesson', compact('course', 'lesson', 'lessons'));
    }

    public function store(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->lessons()->attach($request->lesson_id, [
            'attended_class' => true
        ]);
            return redirect()->back()->with('msg', 'Parabéns, Você completou a Aula!!');
    }

    protected function VerifyCourseUser($eadId){

        $ead = Ead::findOrFail($eadId);
        $eadUser = $ead->users()->where('id', Auth::user()->id)->wherePivot('active',1)->count();

        if($eadUser===0){
            return abort(403);
        }
    }
}
