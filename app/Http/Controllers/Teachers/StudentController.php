<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $teachers = User::where('role_id', 3)->paginate(15);
            return view('teachers.teacher.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.teacher.create');
    }

    public function store(TeacherRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['role_id'] = 3;
        User::create($data);
            return redirect()->route('teacher.teacher.index')
            ->banner('Professor cadastrado com sucesso!');
    }

    public function edit($teacher)
    {
        $teacher = User::findOrFail($teacher);
            return view('teachers.teacher.edit', compact('teacher'));
    }

    public function update(TeacherRequest $request, $teacher)
    {
        $data = $request->all();
        $teacher = User::findOrFail($teacher);
        $teacher->update($data);
            return redirect()->route('teacher.teacher.index')
            ->banner('Professor atualizado com sucesso!');
    }

    public function destroy($teacher)
    {
        User::findOrFail($teacher)->delete();
            return redirect()->route('teacher.teacher.index')
            ->banner('Professor excluido com sucesso!');
    }
}
