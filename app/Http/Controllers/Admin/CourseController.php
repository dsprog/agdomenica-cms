<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->paginate(15);
        return view('admin.course.index', compact('courses'));
    }

    public function create()
    {
        $period = '';
        return view('admin.course.create', compact('period'));
    }

    public function store(CourseRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        $data['image'] = $request->file('image')->store('curso');
        Course::create($data);
        return redirect()->route('admin.courses.index')->banner('Curso criado com sucesso!');
    }

    public function show($id)
    {
        return redirect()->route('admin.courses.index');
    }

    public function edit($course)
    {
        $course = Course::findOrFail($course);
        return view('admin.course.edit', compact('course'));
    }

    public function update(CourseRequest $request, $course)
    {
        $course = Course::findOrFail($course);
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        $data['image'] = $course->image;
        if ($request->hasFile('image')) {
            Storage::delete($course->image);
            $data['image'] = $request->file('image')->store('curso');
        }
        $course->update($data);
        return redirect()->route('admin.courses.index')->banner('Curso atualizado com sucesso!');
    }

    public function destroy($course)
    {
        $course = Course::findOrFail($course);
        Storage::delete($course->image);
        $course->delete();
        return redirect()->route('admin.courses.index')->banner('Curso excluído com sucesso!');
    }
}
