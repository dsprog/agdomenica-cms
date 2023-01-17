<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = User::where('role_id', 3)->paginate(15);
            return view('admin.teacher.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teacher.create');
    }

    public function store(TeacherRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['role_id'] = 3;
        User::create($data);
            return redirect()->route('admin.teacher.index')
            ->banner('Professor cadastrado com sucesso!');
    }

    public function edit($teacher)
    {
        $teacher = User::findOrFail($teacher);
            return view('admin.teacher.edit', compact('teacher'));
    }

    public function update(TeacherRequest $request, $teacher)
    {
        $data = $request->all();
        $teacher = User::findOrFail($teacher);
        $teacher->update($data);
            return redirect()->route('admin.teacher.index')
            ->banner('Professor atualizado com sucesso!');
    }

    public function destroy($teacher)
    {
        User::findOrFail($teacher)->delete();
            return redirect()->route('admin.teacher.index')
            ->banner('Professor excluido com sucesso!');
    }
}
