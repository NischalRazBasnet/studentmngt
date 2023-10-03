<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\programModel;

class programController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = programModel::all();
        return view('home')->with('programs', $programs);
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
        $program = new programModel;
        $program->level = $request->level;
        $program->faculty = $request->faculty;
        $program->programName = $request->programName;
        $program->save();
        return redirect('program');
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
        $program = programModel::find($id);
        if (!$program) {
            return view('error')->with('message', 'Program not found');
        }
       return view('editProgram', ['program' => $program]); 

    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $program =programModel::find($id);
        $program -> id = $request -> id;
        $program->level = $request->level;
        $program->faculty = $request->faculty;
        $program->programName = $request->programName;
        $program->save();
        return redirect('program');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $program = programModel::find($id);
        $program->delete();
        return redirect('program');
    }
}
