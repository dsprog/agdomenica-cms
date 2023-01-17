<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoteStudentRequest;
use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteStudentController extends Controller
{
    public function index(Request $request)
    {
        $discipline = $request->discipline;
        $noteId = $request->note;
        $ead = $request->ead;

        $note = Note::findOrfail($noteId);
        $notes = User::whereHas('notes', function($q)use($noteId){
            $q->where('note_id', $noteId);
        })->get();

        $students = User::where('role_id', 2)->with('notes')->whereHas('eads', function($q)use($ead){
            $q->where('ead_id', $ead);
        })->paginate(10);

        $countUser = count($notes) - count($students);
            return view('admin.note-student.index', compact('note', 'students', 'ead', 'discipline', 'countUser'));
    }

    public function update(NoteStudentRequest $request, $note)
    {
        $user_id = $request->user_id;
        $notes = $request->note;

        for ($i=0; $i < count($notes); $i++) {

            $saved = [
                'note_id' => $note,
                'user_id' => $user_id[$i],
                'note' => $notes[$i]
            ];

            DB::table('note_user')->upsert($saved, []);
        }
        return redirect()->back()->banner('Notas cadastrada / atualizadas com sucesso!');
    }

}
