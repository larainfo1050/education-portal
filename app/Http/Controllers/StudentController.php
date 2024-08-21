<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::latest()->paginate(10);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::latest()->get();
        return view('students.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'student_name' => 'required|string|max:255',
            'class_teacher_id' => 'required|exists:teachers,id',
            'class' => 'required|string|max:50',
            'admission_date' => 'required|date',
            'yearly_fees' => 'required|numeric|min:0',
            'gender' => 'required|in:Male,Female,Other',
            'phone_number' => 'nullable|digits:10'
        ]);

        Student::create($data);
        session()->flash('message', 'Student created successfully!');

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $teachers = Teacher::latest()->get();
        return view('students.show', compact('student', 'teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $teachers = Teacher::latest()->get();
        return view('students.edit', compact('student', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'student_name' => 'required|string|max:255',
            'class_teacher_id' => 'required|exists:teachers,id',
            'class' => 'required|string|max:50',
            'admission_date' => 'required|date',
            'yearly_fees' => 'required|numeric|min:0',
            'gender' => 'required|in:Male,Female,Other',
            'phone_number' => 'nullable|digits:10'
        ]);

        $student->update($data);
        session()->flash('message', 'Student updated successfully!');

        return redirect()->route('students.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        session()->flash('message', 'Student deleted successfully!');
        return redirect()->route('students.index');
    }
}
