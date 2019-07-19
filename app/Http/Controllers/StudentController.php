<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();  // get all students from student table
        return view('index')->with('students', $students);
    }

    public function create()
    {
        return view('create');
    }

    public function edit($id)
    {
        // Retrive a model by its primary key...
        $student = Student::find($id); //find the id is available or not in the students table
        return view('edit')->with('student', $student);
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('index');
    }

    public function store(Request $request)
    {
        // Check validation
        $this->validate($request, [
            'name' => 'required|string|max:10',
            'registration_id' => 'required|integer',
            'department' => 'required|string',
            'info' => 'nullable'
        ]);

        //Insert data into student table
        $student = new Student;
        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->department = $request->department;
        $student->info = $request->info;

        $student->save();  // insert student data to student table

        return redirect()->route('index');
    }

    public function update(Request $request, $id)
    {
        //Insert data into student table
        $student = Student::find($id);  //find the id is available or not in the students table

        $student->name = $request->name;
        $student->registration_id = $request->registration_id;
        $student->department = $request->department;
        $student->info = $request->info;

        $student->save();  // update student data to student table

        return redirect()->route('index');
    }
}
