<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ead;
use Illuminate\Support\Str;
use App\Http\Requests\EadRequest;
use App\Http\Controllers\Controller;
use App\Models\Discipline;
use App\Models\Lesson;
use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EadController extends Controller
{
    public function index()
    {
        $eads = Ead::orderBy('published_at', 'ASC')->paginate(10);
        return view('admin.ead.index', compact('eads'));
    }

    public function create()
    {
        return view('admin.ead.create');
    }

    public function store(EadRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        $data['expiration_date'] = isset($data['expiration_date'])? $data['expiration_date'] : NULL;
        Ead::create($data);
        return redirect()->route('admin.ead.index')
            ->banner('Curso ead criado com sucesso!');
    }

    public function show($ead)
    {
        $ead = Ead::findOrFail($ead);
        return view('admin.ead.show', compact('ead'));
    }

    public function edit($ead)
    {
        $ead = Ead::findOrFail($ead);
        return view('admin.ead.edit', compact('ead'));
    }

    public function update(EadRequest $request, $id)
    {
        $ead = Ead::findOrFail($id);
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        $ead->update($data);
        return redirect()->route('admin.ead.index')
            ->banner('Curso ead atualizado com sucesso!');
    }

    public function destroy($ead)
    {
        $ead = Ead::findOrFail($ead);
        $disciplines = Discipline::where('ead_id', $ead->id);
        $lessons = Lesson::where('ead_id', $ead->id);

        foreach ($lessons->get() as $lesson) {
            $lesson->users()->detach();
            $lesson->delete();
        }

        foreach($disciplines->get() as $discipline){
            $notes = Note::where('discipline_id', $discipline['id']);
            foreach ($notes->get() as $note) {
                $note->users()->detach();
                $note->delete();
            }
            $notes->delete();
        }
        $disciplines->delete();
        $ead->users()->detach();
        $ead->delete();

        return redirect()->route('admin.ead.index')
            ->banner('Curso ead excluido com sucesso!');
    }

    public function studients($ead)
    {
        $activeStudients = Ead::whereHas('users', function($q)use($ead){
            $q->where('ead_id', $ead)->where('active', 1);
        })->paginate(15);

        $disabledStudients = Ead::whereHas('users', function($q)use($ead){
            $q->where('ead_id', $ead)->where('active', 0);
        })->paginate(15);

        $ead = Ead::findOrFail($ead);

        return view('admin.ead.show', compact('activeStudients', 'disabledStudients', 'ead'));
    }

    public function active($idUser, $idEad)
    {
        $user = User::findOrFail($idUser);
        $user->eads()->updateExistingPivot($idEad, [
            'active' => true
        ]);

        return redirect()->back()->with('msg', "Aluno $user->name Ativado com sucesso!");
    }

    public function notActive($idUser, $idEad)
    {
        $user = User::findOrFail($idUser);
        $user->eads()->updateExistingPivot($idEad, [
            'active' => false
        ]);

        return redirect()->back()->with('msg', "Aluno $user->name Desativado com sucesso!");
    }
}
