<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where('role_id',2)->paginate(15);
        return view('admin.student.index', compact('students'));
    }

    public function create()
    {
        return view('admin.student.create');
    }

    public function store(StudentRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['role_id'] = 2;
        $student = User::create($data);
        return redirect()->route('admin.students.index')
            ->banner('Aluno cadastrado com sucesso!');
    }

    public function edit($student)
    {
        $student = User::findOrFail($student);
        return view('admin.student.edit', compact('student'));
    }

    public function update(StudentRequest  $request, $student)
    {
        $data = $request->all();
        $student = User::findOrFail($student);
        $student->update($data);
        return redirect()->route('admin.students.index')
            ->banner('Aluno atualizado com sucesso!');
    }

    public function destroy($student)
    {
        $student = User::findOrFail($student);
        $student->delete();
        return redirect()->route('admin.students.index')
            ->banner('Aluno deletado com sucesso!');
    }

}
