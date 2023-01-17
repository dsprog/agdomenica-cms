<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ead;
use App\Models\Note;
use App\Models\User;
use App\Models\Lesson;
use App\Models\Discipline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DisciplineRequest;

class DisciplineController extends Controller
{
    public function index(Request $request)
    {
        $eadId = $request->ead;
        $disciplines = Discipline::where('ead_id', $eadId)->with('user')->orderBy('id', 'desc')->paginate(15);
            return view('admin.discipline.index', compact('eadId','disciplines'));
    }

    public function create(Request $request)
    {
        $eadId = $request->ead;
        $teachers = User::where('role_id', 3)->get();
            return view('admin.discipline.create', compact('eadId', 'teachers'));
    }

    public function store(DisciplineRequest $request)
    {
        $data = $request->all();
        Discipline::create([
            'title' => $data['title'],
            'ead_id' => $data['ead_id'],
            'user_id' => $data['user_id'],
            'active' => $data['active']
        ]);
            return redirect()->route('admin.discipline.index', ['ead' => $data['ead_id']])
            ->banner('Disciplina cadastrado com sucesso!');
    }

    public function edit($discipline)
    {
        $discipline = Discipline::findOrFail($discipline);
        $teachers = User::where('role_id', 3)->get();
            return view('admin.discipline.edit', compact('discipline', 'teachers'));
    }

    public function update(DisciplineRequest $request, $discipline)
    {
        $data = $request->all();
        $discipline = Discipline::findOrFail($discipline);
        $discipline->update($data);
            return redirect()->route('admin.discipline.index', ['ead' => $data['ead_id']])
            ->banner('Disciplina atualizada com sucesso!');
    }

    public function destroy($discipline)
    {
        $discipline = Discipline::findOrFail($discipline);
        $lessons = Lesson::where('discipline_id', $discipline->id);

        foreach ($lessons->get() as $lesson) {
            $lesson->users()->detach();
            $lesson->delete();
        }

        $notes = Note::where('discipline_id', $discipline->id);
        foreach ($notes->get() as $note) {
            $note->users()->detach();
            $note->delete();
        }
        $notes->delete();

        $discipline->delete();




        return redirect()->back()
            ->banner('Disciplina excluida com sucesso!');
    }
}
