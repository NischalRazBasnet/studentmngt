<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\studentModel;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = studentModel::all();
        return view('showAllStudents')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new studentModel;
        $student->fname = $request->fname;
        $student->level = $request->level;
        $student->programName = $request->programName;
        $student->sem = $request->sem;
        $student->contact = $request->programName;
        $student->address = $request->address;
        $student->save();
        return redirect('student');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = studentModel::find($id);
        if (!$student) {
            return view('error')->with('message', 'Student not found');
        }
       return view('editStudent', ['student' => $student]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = studentModel::find($id);
        $student-> id = $request -> id;
        $student->fname = $request->fname;
        $student->level = $request->level;
        $student->programName = $request->programName;
        $student->sem = $request->sem;
        $student->contact = $request->contact;
        $student->address = $request->address;
        $student->save();
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = studentModel::find($id);
        $student->delete();
        return redirect('student');
    }
}
