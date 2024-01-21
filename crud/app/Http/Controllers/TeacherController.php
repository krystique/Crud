<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', ['teachers' => $teachers]);
    }

    public function create()
    {
        return view('teachers.create');
    }
    
    
    public function store(Request $request)
    {

        $data = $request->validate([
            'tchrname' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            'department' => 'required',
        ]);
        
        $newTeacher = Teacher::create($data);
        return redirect(route('teachers.index'))->with('success','Teacher created successfully.');
    }
    
    
    public function show(Teacher $teachers)
    {
        return view('teachers.show', ['teachers' => $teachers]);
    }
    
    
    public function edit(Teacher $teachers)
    {
        return view('teachers.edit', ['teachers' => $teachers]);
    }
    
    
    public function update(Teacher $teachers, Request $request)
    {
        $data = $request->validate([
            'tchrname' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            'department' => 'required',
        ]);
    
        $teachers->update($data);
        return redirect(route('teachers.index'))->with('success','Teacher data updated successfully.');
    }
    
    
    public function destroy(Teacher $teachers)
    {
        $teachers->delete();    
        return redirect(route('teachers.index'))->with('success','Teacher data deleted successfully');
    }
}