<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allteachers()
    {
        //
        // $teachers = Teacher::get();
        // return view("teacher", compact("teachers"));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // return view("teacher-create");
        return view("applyform");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Teacher::create($request->all()); 
        // return redirect("teacher");
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        // $teachers = Teacher::find($id);
        // return view('teacher-edit', compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        // $teachers = Teacher::find($id);
        // $teachers->update($request->all());
        // return redirect()->route('teacher.list')->with('hello this right');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        // $teacher = Teacher::find($id);
        // $teacher->delete();
        // return redirect("teacher");
    }

}
