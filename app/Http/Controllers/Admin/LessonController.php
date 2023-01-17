<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ead;
use App\Models\Lesson;
use App\Http\Controllers\Controller;
use App\Http\Requests\LessonRequest;
use App\Models\Discipline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class LessonController extends Controller
{
    public function index(Request $request)
    {
        $discipline = Discipline::findOrFail($request->discipline);
        $eadId = $request->ead;
        $ead = Ead::findOrFail($eadId);
        $lessons = Lesson::where('ead_id', $eadId)
            ->where('discipline_id', $discipline->id)
            ->orderBy('published_at', 'ASC')
            ->get();

        return view('admin.lesson.index', compact('lessons','ead', 'discipline'));
    }

    public function create(Request $request)
    {
        $discipline = $request->discipline;
        $ead = Ead::findOrFail($request->ead);
        return view('admin.lesson.create', compact('discipline','ead'));
    }
    public function store(LessonRequest $request)
    {
        $data = $request->all();
        Lesson::create($data);
        return redirect()->route('admin.lessons.index', ['ead' => $request->ead_id, 'discipline' => $data['discipline_id']])
        ->banner('Aula criada com sucesso!');
    }

    public function show($lesson)
    {
        $lesson = Lesson::findOrFail($lesson);
        return view('admin.lesson.show', compact('lesson'));
    }

    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('admin.lesson.edit', compact('lesson'));
    }

    public function update(LessonRequest $request, $lesson)
    {
        $lesson = Lesson::findOrFail($lesson);
        $data = $request->all();
        $lesson->update($data);
        return redirect()->route('admin.lessons.index', ['ead' => $lesson->ead_id, 'discipline' =>  $lesson->discipline_id])
        ->banner('Aula atualizada com sucesso!');
    }

    public function destroy($lesson)
    {
        $lesson = Lesson::findOrFail($lesson);
        $lesson->delete();
        return redirect()->route('admin.lessons.index', ['ead' => $lesson->ead_id, 'discipline' =>  $lesson->discipline_id])
            ->banner('Aula excluida com sucesso!');
    }
}
