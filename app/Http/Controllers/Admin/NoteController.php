<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoteRequest;
use App\Models\Discipline;
use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        $discipline_id = $request->discipline_id;
        $discipline = Discipline::findOrFail($discipline_id);
        $notes = Note::where('discipline_id', $discipline_id)->orderBy('id', 'desc')->paginate();

            return view('admin.note.index', compact('discipline', 'notes'));
    }

    public function create(Request $request)
    {
        $discipline_id = $request->discipline_id;

            return view('admin.note.create', compact('discipline_id'));
    }

    public function store(NoteRequest $request)
    {
        $data = $request->all();
        Note::create([
            'name' => $data['name'],
            'discipline_id' => $data['discipline_id']
        ]);
            return redirect()->route('admin.notes.index', ['discipline_id' => $data['discipline_id']])
            ->banner('Avaliação cadastrada com sucesso!');
    }

    public function edit($note)
    {
        $note = Note::findOrFail($note);
            return view('admin.note.edit', compact('note'));
    }

    public function update(NoteRequest $request, $note)
    {
        $data = $request->all();
        $note = Note::findOrFail($note);
        $note->update($data);
            return redirect()->route('admin.notes.index', ['discipline_id' => $data['discipline_id']])
            ->banner('Avaliação atualizada com sucesso!');
    }

    public function destroy($note)
    {
        $note = Note::findOrFail($note);
        $note->delete();
            return redirect()->back()
            ->banner('Avaliação excluida com sucesso!');
    }

}
