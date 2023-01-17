<?php

namespace App\Http\Controllers\Admin;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Discipline;

class NoteStudentAverage extends Controller
{
    public function index(Request $request)
    {
        $discipline = $request->discipline_id;
        $ead = $request->ead;

        $users = User::with('notes')->whereHas('eads', function($q)use($ead){
            $q->where('ead_id', $ead);
        })->paginate();

        $notes = DB::table('note_user')->join('notes', 'note_user.note_id', '=', 'notes.id')
        ->where('notes.discipline_id', $discipline)
        ->select('note_user.*')
	    ->select('user_id',DB::raw("AVG(note) as count"))
        ->groupBy('user_id')
        ->get();

        return view('admin.note-average.index', compact('ead', 'users', 'notes'));
    }
}
