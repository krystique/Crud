<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function create()
    {
        return view('students.create');
    }
    
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'studname' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            'course' => 'required',
            'subject' => 'required',    
        ]);
        
        $newStudent = Student::create($data);
        return redirect(route('students.index'))->with('success','Student created successfully.');
    }
    
    
    public function show(Student $students)
    {
        return view('students.show', ['students' => $students]);
    }
    
    
    public function edit(Student $students)
    {
        return view('students.edit', ['students' => $students]);
    }
    
    
    public function update(Student $students, Request $request)
    {
        $data = $request->validate([
            'studname' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            'course' => 'required',
            'subject' => 'required',    
        ]);
        $students->update($data);
        return redirect(route('students.index'))->with('success','Student data updated successfully.');
    }
    
    
    public function destroy(Student $students)
    {
        $students->delete();    
        return redirect(route('students.index'))->with('success','Student data deleted successfully');
    }
}